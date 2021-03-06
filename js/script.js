// <strong>Title:</strong> <tt>script.js</tt><br />
// <strong>Package:</strong> <tt>app.init();</tt><br />
// <strong>Author(s):</strong>
// <a href="mailto:jesse.s.atkinson@gmail.com">Jesse Atkinson</a><br />
// <strong>Version:</strong> 1.0<br />
// <strong>Summary:</strong> <em>Includes sticky nav, supporters animation,
// newsletter animation, etc.<br /><br />
// This code passes <a href="http://www.jshint.com">JSHint</a>.<br />
// <br />If you have any questions feel free to
// <a href="mailto:jesse.s.atkinson@gmail.com">email me</a>!</em>

// params in order: jQuery, Froogaloop, window, hard-setting undefined.
(function ($, $f, window, undefined) {
    "use strict";

    var app = {
        init: function () {
            // Retina image replace.
            this.highdpi();
            // img src replacement.
            this.img();
            // Handles nav-bar scrolling and sticking.
            this.nav();
            // Handles subscribe button functionality.
            this.newsletter();
            // Keeps header text centered on resize.
            this.position();
            // On resize of browser window fire this.position();
            this.resize();
            // Pinterest and Twitter href and src swaps
            this.social();
            // Handles the supporters section.
            this.supporters();
            // Handles the vimeo video show and hide title.
            this.video();
        },

        highdpi: function () {
            // We check for the inconsequential `font-size: 1px;` property we set on .replace-2x.
            // The class will only have this property if the proper media queries
            // are passed.
            if ($('.replace-2x').css('font-size') === "1px") {

                $(".replace-2x").each(function(v, i) {
                    var src = $(this).attr("src");

                    // Replaces for images that are either .png or .jpg. This could
                    // be done clearer with some reg ex, but this works fine for now.
                    src = src.replace(".png", "@2x.png")
                             .replace(".jpg", "@2x.jpg");

                    $(this).attr("src", src);
                });
            }
        },

        img: function () {
            var src = "img/f" + $(".story h4").text().substring(1, 3) + ".jpg";

            // Sets the Featured image to the right image.
            $(".story .thumb").attr("src", src);
        },

        // There is a shit ton of math, calculations, etc, that control the nav
        // bar and arrows that stick and unstick, jump to sections, etc. Be careful
        // in here.
        nav: function () {
            var fixit, top, x = true;

            // If we aren't on the "All Stories" page...
            if ($(".allstories").length === 0) {
                top = (Math.floor($("#episode").css("border-bottom-width").replace("px", "")) + Math.floor($("#episode").css("padding-bottom").replace("px", "")) + $(".top-nav").height() + $(".controls").height()) / 2;

                $(window).resize({namespace: this}, function (e) {
                    top = (Math.floor($("#episode").css("border-bottom-width").replace("px", "")) + Math.floor($("#episode").css("padding-bottom").replace("px", "")) + $(".top-nav").height() + $(".controls").height()) / 2;
                });
            }

            // Set .top-nav to fixed
            fixit = function () {
                $(".top-nav").css({
                    position: "fixed",
                    top: 0
                });

                // If we aren't on the "All Stories" page...
                if ($(".allstories").length === 0) {
                    $(".controls").css({
                        position: "fixed",
                        top: top
                    });
                }
            };

            // Handles all scrolling...
            $(window).scroll(function (e) {
                var aboveHeight = $("header").outerHeight();

                if ($(window).scrollTop() > aboveHeight) {
                    $("body").addClass("fixed");

                    if (x) {
                        fixit();
                    }
                } else {
                    $("body").removeClass("fixed");

                    if ($(".allstories").length === 0) {
                        $(".controls").css({
                            position: "",
                            top: ""
                        });
                    }

                    $(".top-nav").css({
                        position: "",
                        top: ""
                    });
                }

                // This handles the passing of the .active class around as we scroll
                $.each($(".top-nav .scroll"), function (i, v) {
                    var href = $(this).attr("href");

                    if (href.indexOf("#") !== -1) {
                        if ($(window).scrollTop() >= ($(href).offset().top) - $(".top-nav").height()) {
                            $(".top-nav .scroll").removeClass("active");
                            $(this).addClass("active");

                            if ($(window).scrollTop() === ($(document).height() - $(window).height())) {
                                $(".top-nav .scroll").removeClass("active");
                                $($(".top-nav .scroll")[4]).addClass("active");
                            }
                        }
                    }
                });
            });

            // onClick of nav links...
            $(".top-nav .scroll").click(function (e) {
                // Find anchor position based on href
                var y = Math.floor($($(this).attr("href")).offset().top);

                e.preventDefault();

                // If sponsor link...
                if (this === $(".top-nav .scroll")[4]) {
                    y = $(document).height();
                }

                // Animate to anchor position
                $("html, body").stop().animate({
                    scrollTop: y
                }, 1000, function () {
                    // On animation complete add position absolute to nav
                    // using the anchor position as top
                    $(".top-nav").css({
                        position: "absolute",
                        top: $(window).scrollTop()
                    });

                    x = false;
                    setTimeout(function () {
                        x = true;
                    }, 100);
                });
            });

            // Handles the .active state onClick of links.
            $(".top-nav .nav").click(function () {
                $(".top-nav .nav").removeClass("active");
                $(this).addClass("active");
            });

            // If user clicks on "supporters" preventDefault and toggleClass.
            $($("footer .nav")[1]).click(function (e) {
                e.preventDefault();

                $(this).toggleClass("active");
            });
        },

        newsletter: function () {
            var subscribe = $(".subscribe_header").html();

            // Checks to see if user has clicked on one of the subscribe buttons.
            // This could be more elegantly done, but it works fine for now.
            // A re-work is on the "to do" list.
            $(document).click({namespace: this}, function (e) {
                var t = e.data.namespace, footer, wrapper;

                // If user has clicked on a subscribe button...
                if ($(e.target).is($(".newsletter"))) {
                    e.preventDefault();

                    // If user clicked the subscribe button in the top-nav...
                    if ($(e.target).is($($(".newsletter")[0]))) {
                        if ($($(".newsletter")[0]).hasClass("active")) {
                            $(".newsletter").removeClass("active");
                            wrapper = $(".subscribe_header");
                            footer = false;
                            $(".subscribe_footer").html("");
                        } else {
                            $($(".newsletter")[0]).addClass("active");
                            $($(".newsletter")[1]).removeClass("active");
                            wrapper = $(".subscribe_header");
                            footer = false;
                            $(".subscribe_footer").html("");
                        }
                        // Else user must have clicked the footer subscribe button...
                    } else {
                        if ($($(".newsletter")[1]).hasClass("active")) {
                            $(".newsletter").removeClass("active");
                            wrapper = $(".subscribe_footer");
                            footer = true;
                            $(".subscribe_header").html("");
                        } else {
                            $($(".newsletter")[0]).removeClass("active");
                            $($(".newsletter")[1]).addClass("active");
                            wrapper = $(".subscribe_footer");
                            footer = true;
                            $(".subscribe_header").html("");
                        }
                    }

                    // Insert form into proper wrapper and toggle visibility.
                    wrapper.html(subscribe).toggle();

                    // Add class footer so we can get it styled right for footer.
                    if (footer) {
                        $("#subscribe").addClass("footer");
                    }
                // If user has clicked on any part of the subscribe form don't hide it, but...
                } else if ($(e.target).parents("#subscribe").length > 0) {
                    // if user clicks submit button then hide the form.
                    if ($(e.target).is($("#submit"))) {
                        $(".newsletter").removeClass("active");
                        $(".subscribe_header, .subscribe_footer").hide();
                    }
                // User has most definitely not clicked on anything to do with the newsletter subscription.
                } else {
                    $(".newsletter").removeClass("active");
                    $(".subscribe_header, .subscribe_footer").hide();
                }
            });
        },

        position: function () {
            var marginLeft = $("header h1").width() / 2;

            // Ensures that the header text stays centered and also only shows
            // after all the fonts have loaded.
            $("header h1").css("margin-left", "-" + marginLeft + "px").show();
        },

        resize: function () {
            $(window).resize({namespace: this}, function (e) {
                var t = e.data.namespace;

                // Re-grabs the value on resize because the distance from the
                // top of the browser to the top nav is different.
                t.position();
            });
        },

        social: function () {
            var href="http://pinterest.com/pin/create/button/?url=",
                text = $("#episode h1[title='Featured video title']").text();

            if ($("#home").length) {
                href += "http://ourcityourstory.com/episode/" + $(".story h4").text().substring(1, 3) + "/";
            } else {
                href += window.location.href;
            }
            href += "&media=http%3A%2F%2Fourcityourstory.com%2Fimg%2Flogo.jpg&description=Our%20City%2C%20Our%20Story%20aims%20to%20find%20and%20tell%20the%20stories%20which%20make%20up%20our%20identity.%20This%20is%20Rockford%2C%20Illinois.";

            text += " by @OurCityOurStory: ";

            if ($(".story h4").text().substring(1, 2) === 0) {
                text += "http://ourcityourstory.com/episode/" + $(".story h4").text().substring(2, 3) + "/";

                if ($("#home").length) {
                    $(".fb-like").attr("data-href", "http://ourcityourstory.com/episode/" + $(".story h4").text().substring(2, 3) + "/");
                }
            } else {
                text += "http://ourcityourstory.com/episode/" + $(".story h4").text().substring(1, 3) + "/";

                if ($("#home").length) {
                    $(".fb-like").attr("data-href", "http://ourcityourstory.com/episode/" + $(".story h4").text().substring(1, 3) + "/");
                }
            }

            $(".pin-it-button").attr("href", href);

            $("#tweet-button").attr("src", $("#tweet-button").attr("src").replace(/\?text=[^&]+/, "?text=" + encodeURIComponent(text)));

            /* FUCK PINTEREST */
            $(window).load(function () {
                $.each($("iframe"), function (i, v) {
                    if ($(this).attr("src").indexOf("pin") > -1) {
                        $(this).hide();
                    }
                });
            });
        },

        supporters: function () {
            var auto;

            // Stores the new height of the new visible supporters section
            // so we can animate our scroll.
            $("#supporters").css("height", "auto");
            auto = $("#supporters").height();
            $("#supporters").css("height", "");

            $("#supporters_button").click(function (e) {
                e.preventDefault();

                $(this).toggleClass("active");

                if ($(this).hasClass("active")) {
                    $(this).removeClass("active");

                    $("#supporters").animate({
                        height: "0"
                    }, 500).css("border-top-width", "0");
                } else {
                    $(this).addClass("active");

                    $("#supporters").animate({
                        height: auto
                    }, {
                        duration: 100,
                        complete: function () {
                            $("html, body").animate({
                                scrollTop: $("footer").offset().top
                            }, 500);
                        }
                    }).css("border-top-width", "3px");
                }
            });

            $("#supporters button").click(function (e) {
                e.preventDefault();

                $("#supporters").animate({
                    height: "0"
                }, 500, function () {
                    $("#supporters button").removeClass("active");
                }).css("border-top-width", "0");

                $("#supporters_button").removeClass("active");
            });
        },

        video: function () {
            var ep_num = Math.floor(window.location.pathname.replace(/[^0-9]/g, "")),
                pathname = window.location.pathname,
                iframe, current, player, next, nw, pw, onPlay, onPause, onFinish, previous;

            if ($(".allstories").length === 0) {
                current = $("#video-id").text();
                iframe = $("#video")[0];
            }

            if (ep_num === 0 && $(".allstories").length === 0) {
                ep_num = Math.floor($(".story h4").text().substring(1, 3));
            }

            next = ep_num + 1;
            previous = ep_num - 1;

            // If not the "All Stories" page...
            if ($(".allstories").length === 0) {
                // This allows Pablo to enter Vimeo ID via Cushy CMS
                $(".next").attr("href", "/episode/" + next.toString() + "/");
                $(".previous").attr("href", "/episode/" + previous.toString() + "/");

                if ($(".next").attr("href") === "#") {
                    $(".next").addClass("hidden");
                }

                if ($(".previous").attr("href") === "#") {
                    $(".previous").addClass("hidden");
                }

                if (pathname === "/" || pathname === "/dev/" || $("#current").text() === "Yes") {
                    $(".next").addClass("hidden");
                }

                if (ep_num === 1) {
                    $(".previous").addClass("hidden");
                }

                // Previous and next buttons...
                nw = $("#episode .next span").outerWidth();
                pw = $("#episode .previous span").outerWidth();
                $("#episode .next span").css("margin-left", "-" + nw + "px");
                $("#episode .previous span").css("margin-right", "-" + pw +"px");

                $("#episode .next").hover(function () {
                    $("#episode .next span").stop().animate({
                        marginLeft: $(".episode .next em").outerWidth() + 5 + "px"
                    }, 500);
                }, function () {
                    $("#episode .next span").stop().animate({
                        marginLeft: "-" + nw + "px"
                    }, 500);
                });

                $("#episode .previous").hover(function () {
                    $("#episode .previous span").stop().animate({
                        marginRight: $(".episode .previous em").outerWidth() + 5 + "px"
                    }, 500);
                }, function () {
                    $("#episode .previous span").stop().animate({
                        marginRight: "-" + pw + "px"
                    });
                });

                // Vimeo froogaloop goodness...
                player = $f(iframe);

                player.addEvent('ready', function() {
                    player.addEvent('play', onPlay);
                    player.addEvent('pause', onPause);
                    player.addEvent('finish', onPause);
                });

                onPlay = function () {
                    $("#episode h1, #episode .controls").hide();
                };

                onPause = function () {
                    $("#episode h1, #episode .controls").show();
                };
            }
        }
    };

    $(document).ready(function () {
        app.init();
    });

    window.app = app || {};
}(jQuery, $f, this));