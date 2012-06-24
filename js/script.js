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
			nav: "#nav-wrapper",
			links: "#nav-wrapper nav div a.link",
			email: "#email",
			subscribe: "#subscribe",
			submit: "#submit",
			supporterButton: "#supporters-button",
			supporterWrapper: "#supporters-wrapper",
			close: "#close"
		},

		init: function () {
			this.sticky();
			this.scroll();
			this.newsletter();
			this.supporters();
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

		scroll: function () {
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

				if ($(e.target).is($(t.config.email))) {
					e.preventDefault();

					$(t.config.email).toggleClass("active");
					$(t.config.subscribe).toggle();
				} else if ($(e.target).parents(t.config.subscribe).length > 0) {
					e.preventDefault();

					if ($(e.target).is($(t.config.submit))) {
						$(t.config.email).removeClass("active");
						$(t.config.subscribe).hide();
					} else {
						$(t.config.email).addClass("active");
						$(t.config.subscribe).show();
					}
				} else {
					$(t.config.email).removeClass("active");
					$(t.config.subscribe).hide();
				}
			});
		},
		
		supporters: function () {
			$(this.config.supportersButton).click(function (e) {
				e.preventDefault();
			
				if ($(this).hasClass("active")) {
					$(this).removeClass("active");
					$(this.config.supportersWrapper).animate({
						height: "",
					}, 500).css("border-top-width", "");
				} else {
					$(this).addClass("active");
					$(this.config.supportersWrapper).animate({
						height: 820,
					}, 500).css("border-top-width", "3px");
				}
			});
			
			$(this.config.close).click(function (e) {
				$(this.config.supportersButton).removeClass("active");
				$(this.config.supportersWrapper).animate({
					height: "",
					borderTopColor: "",
					borderTopStyle: "",
					borderTopWidth: ""
				}, 500);
			});
		}
	};

	$(document).ready(function () {
		app.init();
	});

	window.app = app || {};
}(jQuery, this));