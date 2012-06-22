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
			nav: "#nav-wrapper"
		},

		init: function () {
			this.sticky();
			this.scroll();
		},

		sticky: function () {
			var aboveHeight = $("header").outerHeight(),
				t = this;

			$(window).scroll({namespace:this}, function (e) {
				var t = e.data.namespace;

				if ($(window).scrollTop() > aboveHeight){
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
			
			$(this.config.nav + " nav div a").click({namespace:this}, function (e) {
				var t = e.data.namespace;
				
				$(t.config.nav + " nav div a").removeClass("active");
				$(this).addClass("active");
			});
			
			$(window).scroll({namespace:this}, function (e) {	
				var t = e.data.namespace;
			
				$.each ($(t.config.nav + " nav div a"), function (i, v) {
					var href = $(v).attr("href");
					
				    if (href.indexOf("#") !== -1) {    					
						if ($(window).scrollTop() >= $(href).offset().top) {
							$(t.config.nav + " nav div a").removeClass("active");
							$(v).addClass("active");
														
							if ($(window).scrollTop() == ($(document).height() - $(window).height())) {
								$(t.config.nav + " nav div a").removeClass("active");
								$($(t.config.nav + " nav div a")[4]).addClass("active");
							}
						}
					}
				});
				
				
				$(document).click(function (e) {
					if ($(e.target).is($(".email")) || $(e.target).parents("#subscribe").length > 0) {
						e.preventDefault();
						
						if ($(e.target).is("#submit")) {
							$(".email").removeClass("active");
							$("#subscribe").hide();
						} else {
							$(".email").addClass("active");
							$("#subscribe").show();
						}
					} else {
						$(".email").removeClass("active");
						$("#subscribe").hide();
					}
				});
			});
		}
	};

	$(document).ready(function () {
		app.init();
	});

	window.app = app || {};
} (jQuery, this));