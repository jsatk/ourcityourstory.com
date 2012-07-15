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

(function ($, window, undefined) {
	"use strict";

	var app = {
		init: function () {
			this.newsletter();
			this.position();
			this.resize();
			this.scroller();
			this.sticky();
			this.video();
		},

		newsletter: function () {
			$(document).click({namespace: this}, function (e) {
				var t = e.data.namespace;

				if ($(e.target).is($("#newsletter"))) {
					e.preventDefault();

					$("#newsletter").toggleClass("active");
					$("#subscribe").toggle();
				} else if ($(e.target).parents("#subscribe").length > 0) {
					if ($(e.target).is($("#submit"))) {
						$("#newsletter").removeClass("active");
						$("#subscribe").hide();
					} else {
						$("#newsletter").addClass("active");
						$("#subscribe").show();
					}
				} else {
					$("#newsletter").removeClass("active");
					$("#subscribe").hide();
				}
			});
		},

		resize: function () {
			$(window).resize({namespace: this}, function (e) {
				var t = e.data.namespace;

				// Re-grabs the value on resize because the distance from the
				// top of the browser to the top nav is different.
				t.position();
			});
		},

		position: function () {
			var marginLeft = $("header h1").width() / 2;

			// Ensures that the header text stays centered and also only shows
			// after all the fonts have loaded.
			$("header h1").css("margin-left", "-" + marginLeft + "px").show();
		},

		scroller: function () {
			$(".top-nav .links").localScroll();
			$(".top-nav .nav").click(function () {
				$(".top-nav .nav").removeClass("active");
				$(this).addClass("active");
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

		video: function () {
			var iframe = document.getElementById("video"),
				player = $f(iframe);

			player.addEvent('play', function () {
				$("#episode h1").hide();
			});
		}
	};

	$(document).ready(function () {
		app.init();
	});

	window.app = app || {};
}(jQuery, this));