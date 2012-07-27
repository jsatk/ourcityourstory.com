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

(function ($, $f, window, undefined) {
    "use strict";

    var app = {
        init: function () {
            // Retina image replace.
            this.highdpi();
            // Handles newsletter button functionality.
            this.newsletter();
            // Keeps header text centered on resize.
            this.position();
            // On resize of browser window fire this.position();
            this.resize();
            // Handles nav-bar scrolling and sticking.
            this.nav();
            // Handles the supporters section.
            this.supporters();
            // Handles the vimeo video show and hide title.
            this.video();
        },

        highdpi: function () {
            // We check for the inconsequential property we set on .replace-2x.
            // The class will only have this property if the proper media queries
            // are passed.
            if ($('.replace-2x').css('font-size') === "1px") {

                $(".replace-2x").each(function(v, i) {
                    var src = $(this).attr("src");

                    // Replaces for images that are either .png or .jpg. This could
                    // be done clearer with some reg ex, but it works fine for now.
                    src = src.replace(".png", "@2x.png")
                             .replace(".jpg", "@2x.jpg");

                    $(this).attr("src", src);
                });
            }
        },

        nav: function () {
            var fixit, x = true;

            // Set .top-nav to fixed
            fixit = function () {
                $(".top-nav").css({
                    position: "fixed",
                    top: 0
                });
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
                    $(".top-nav").css({
                        position: "relative",
                        top: 0
                    });
                }

                // This handles the passing of the .active class around as we scroll
                $.each($(".top-nav .scroll"), function (i, v) {
                    var href = $(this).attr("href");

                    if (href.indexOf("#") !== -1) {
                        if ($(window).scrollTop() >= $(href).offset().top) {
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

            $($("footer .nav")[1]).click(function (e) {
                e.preventDefault();

                $(this).toggleClass("active");
            });
        },

        newsletter: function () {
            var subscribe = $(".subscribe_header").html();

            $(document).click({namespace: this}, function (e) {
                var t = e.data.namespace, newsletter, wrapper, footer;

                if ($(e.target).is($(".newsletter"))) {
                    e.preventDefault();

                    if ($(e.target).is($($(".newsletter")[0]))) {
                        newsletter = $($(".newsletter")[0]);
                        wrapper = $(".subscribe_header");
                        footer = false;
                        $(".subscribe_footer").html("");
                    } else {
                        newsletter = $($(".newsletter")[1]);
                        wrapper = $(".subscribe_footer");
                        footer = true;
                        $(".subscribe_header").html("");
                    }

                    newsletter.toggleClass("active");
                    wrapper.html(subscribe).toggle();

                    if (footer) {
                        $("#subscribe").addClass("footer");
                    }
                } else if ($(e.target).parents("#subscribe").length > 0) {
                    if ($(e.target).is($("#submit"))) {
                        $(".newsletter").removeClass("active");
                        $(".subscribe_header, .subscribe_footer").hide();
                    }
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

        supporters: function () {
            var auto;

            $("#supporters_button").click(function (e) {
                e.preventDefault();

                $("#supporters").css("height", "auto");
                auto = $("#supporters").height();
                $("#supporters").css("height", "");

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

                $(this).removeClass("active");
                $("#supporters").animate({
                    height: "",
                    borderTopColor: "",
                    borderTopStyle: "",
                    borderTopWidth: ""
                }, 500);
            });
        },

        video: function () {
            var current = $("#video-id").text(),
                ep_num = Math.floor(window.location.pathname.replace(/[^0-9]/g, "")),
                hostname = window.location.hostname,
                iframe = $("#video")[0],
                pathname = window.location.pathname,
                player = "",
                next,
                nw, pw,
                onPlay, onPause, onFinish,
                previous,
                src = $("#video").attr("src").replace(/\{\*id\*\}/g, current);

            if (ep_num === 0) {
                ep_num = Math.floor($(".story h4").text().substring(1, 3));
            }

            next = ep_num + 1;
            previous = ep_num - 1;

            // This allows Pablo to enter Vimeo ID via Cushy CMS
            $("#video").attr("src", src);
            $(".next").attr("href", "/episode/" + next.toString() + "/");
            $(".previous").attr("href", "/episode/" + previous.toString() + "/");

            if ($(".next").attr("href") === "#") {
                $(".next").addClass("hidden");
            }

            if ($(".previous").attr("href") === "#") {
                $(".previous").addClass("hidden");
            }

            if (pathname === "/" || pathname === "/dev/") {
                $(".next").addClass("hidden");
            }

            // Previous and next buttons...
            nw = $("#episode .next span").width() + 100;
            pw = $("#episode .previous span").width() + 100;
            $("#episode .next span").css("left", "-" + nw + "px");
            $("#episode .previous span").css("right", "-" + pw +"px");

            $("#episode .next").hover(function () {
                $("#episode .next span").stop().animate({
                    left: "0px"
                }, 500);
            }, function () {
                $("#episode .next span").stop().animate({
                    left: "-" + nw + "px"
                }, 500);
            });

            $("#episode .previous").hover(function () {
                $("#episode .previous span").stop().animate({
                    right: "0px"
                }, 500);
            }, function () {
                $("#episode .previous span").stop().animate({
                    right: "-" + pw + "px"
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
    };

    $(document).ready(function () {
        app.init();
    });

    window.app = app || {};
}(jQuery, $f, this));