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
            // Handles nav-bar scrolling to proper section.
            this.scroller();
            // Handles the sticking and unsticking of the nav.
            this.sticky();
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

        scroller: function () {
            $(".top-nav .links").localScroll();
            $(".top-nav .nav").click(function () {
                $(".top-nav .nav").removeClass("active");
                $(this).addClass("active");

                $(".top-nav .links").setTimeout(function () {
                    $(this).css("position", "relative").css("position", "fixed");
                }, 1000);
            });

            $($("footer .nav")[1]).click(function (e) {
                e.preventDefault();

                $(this).toggleClass("active");
            });
        },

        sticky: function () {
            var t = this;

            $(window).scroll({namespace: this}, function (e) {
                var t = e.data.namespace,
                    aboveHeight = $("header").outerHeight();

                if ($(window).scrollTop() > aboveHeight) {
                    $(".top-nav").addClass("fixed");
                    $("body").addClass("fixed");
                } else {
                    $(".top-nav").removeClass("fixed");
                    $("body").removeClass("fixed");
                }

                // This handles the passing of the .active class around as we scroll
                // up and down the page.
                $.each($(".top-nav .nav"), function (i, v) {
                    var href = $(this).attr("href");

                    if (href.indexOf("#") !== -1) {
                        if ($(window).scrollTop() >= $(href).offset().top) {
                            $(".top-nav .nav").removeClass("active");
                            $(this).addClass("active");

                            if ($(window).scrollTop() === ($(document).height() - $(window).height())) {
                                $(".top-nav .nav").removeClass("active");
                                $($(".top-nav .nav")[4]).addClass("active");
                            }
                        }
                    }
                });
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
            var iframe = $("#video")[0],
                player = $f(iframe),
                onPlay, onPause, onFinish;

            player.addEvent('ready', function() {
                player.addEvent('play', onPlay);
                player.addEvent('pause', onPause);
                player.addEvent('finish', onPause);
            });

            onPlay = function () {
                $("#episode h1").hide();
            };

            onPause = function () {
                $("#episode h1").show();
            };
        }
    };

    $(document).ready(function () {
        app.init();
    });

    window.app = app || {};
}(jQuery, $f, this));