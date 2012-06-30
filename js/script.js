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
		config: {
			close: "#close",
			nav: "#nav-wrapper",
			links: "#nav-wrapper nav div a.link",
			newsletter: ".newsletter",
			subscribe: ".subscribe",
			submit: ".submit",
			supportersButton: "#supporters-button",
			supportersWrapper: "#supporters-wrapper",
			video: "#video"
		},

		init: function () {
			this.video();
			this.sticky();
			this.scroller();
			this.newsletter();
			this.supporters();
			this.responsive();
		},

		video: function () {
			var iframe = $(this.config.video)[0],
				player = $f(iframe); // $f comes from froogaloop2.

			player.addEvent('play', function() {
				$("#episode h1").hide();
			});
		},

		sticky: function () {
			var aboveHeight = $("header").outerHeight(),
				t = this;

			$(window).scroll({namespace: this}, function (e) {
				var t = e.data.namespace;

				if ($(window).scrollTop() > aboveHeight) {
					$(t.config.nav).addClass("fixed");
					$("body").addClass("fixed");
				} else {
					$(t.config.nav).removeClass("fixed");
					$("body").removeClass("fixed");
				}
			});
		},

		scroller: function () {
			$(this.config.nav + " nav div").localScroll();

			$(this.config.links).click({namespace: this}, function (e) {
				var t = e.data.namespace;

				$(t.config.links).removeClass("active");
				$(this).addClass("active");
			});

			$(window).scroll({namespace: this}, function (e) {
				var t = e.data.namespace;

				$.each($(t.config.links), function (i, v) {
					var href = $(v).attr("href");

					if (href.indexOf("#") !== -1) {
						if ($(window).scrollTop() >= $(href).offset().top) {
							$(t.config.links).removeClass("active");
							$(v).addClass("active");

							if ($(window).scrollTop() === ($(document).height() - $(window).height())) {
								$(t.config.links).removeClass("active");
								$($(t.config.links)[4]).addClass("active");
							}
						}
					}
				});
			});
		},

		newsletter: function () {
			$(document).click({namespace: this}, function (e) {
				var t = e.data.namespace;

				if ($(e.target).is($(t.config.newsletter))) {
					e.preventDefault();

					$(t.config.newsletter).toggleClass("active");
					$(t.config.subscribe).toggle();
				} else if ($(e.target).parents(t.config.subscribe).length > 0) {
					e.preventDefault();

					if ($(e.target).is($(t.config.submit))) {
						$(t.config.newsletter).removeClass("active");
						$(t.config.subscribe).hide();
					} else {
						$(t.config.newsletter).addClass("active");
						$(t.config.subscribe).show();
					}
				} else {
					$(t.config.newsletter).removeClass("active");
					$(t.config.subscribe).hide();
				}
			});
		},

		supporters: function () {
			var auto;

			$(this.config.supportersWrapper).css("height", "auto");
			auto = $(this.config.supportersWrapper).height();
			$(this.config.supportersWrapper).css("height", "");

			$(this.config.supportersButton).click({namespace: this}, function (e) {
				e.preventDefault();

				var t = e.data.namespace;

				if ($(this).hasClass("active")) {
					$(this).removeClass("active");
					$(t.config.supportersWrapper).animate({
						height: ""
					}, 500).css("border-top-width", "");
				} else {
					$(this).addClass("active");
					$(t.config.supportersWrapper).animate({
						height: auto
					}, 500).css("border-top-width", "3px");
				}
			});

			$(this.config.close).click({namespace: this}, function (e) {
				var t = e.data.namespace;

				$(t.config.supportersButton).removeClass("active");
				$(t.config.supportersWrapper).animate({
					height: "",
					borderTopColor: "",
					borderTopStyle: "",
					borderTopWidth: ""
				}, 500);
			});
		},

		responsive: function () {
			if (document.body.offsetWidth <= 640) {
				console.log(document.body.offsetWidth);

				$("#shop").hide();
				$("#all-stories").hide();
				$("#sponsor-link").hide();
				$("#all").show();
				$("#nav-wrapper .social").hide();
				$($(".nbsp")[4]).hide();
				$($(".nbsp")[5]).hide();
			}
		}
	};

	$(document).ready(function () {
		app.init();
	});

	window.app = app || {};
}(jQuery, this));