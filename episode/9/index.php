<!doctype html>
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
    <!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php"); ?>

        <meta class="cushycms" title="Meta-Description" name="description" content="Rockford, IL, Storytelling video project, Stories of Rockford, Story video project, Rockford hometown pride building, Rockford illinois">
        <meta class="cushycms" title="Facebook Share Title" property="og:title" content="Our City, Our Story">
        <meta class="cushycms" title="Facebook Share Image." property="og:image" content="http://ourcityourstory.com/img/logo.png">
    </head>

    <body>

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/facebook.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/top-nav.php"); ?>

    <div role="main">
        <div id="episode" class="episode">
            <h1 title="Featured video title" class="cushycms">Hazzard Free</h1>
            <!-- I found this awesome trick here. http://www.netmagazine.com/tutorials/create-fluid-width-videos -->

            <!-- This is simply for the Cushy CMS. Current video ID to be entered here. -->
            <h1 title="Put this page's featured video ID here" class="invisible cushycms" id="video-id">44322055</h1>
            <h1 class="hidden cushycms" id="current" title="Is this the most recent episode?">No</h1>

            <a href="#" class="controls next"><em>&#8592;</em><span title="Next Episode" class="cushycms">E10: Fabric &amp; Color Patterns</span></a>
            <a href="#" class="controls previous"><span title="Previous Episode" class="cushycms">E08: Team Fur Bandit</span><em>&#8594;</em></a>
            <iframe id="video" title="iframe for featured episode." src="http://player.vimeo.com/video/{*id*}?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;api=1&amp;player_id=video" width="500" height="281" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>

        <div class="story clearfix">
            <article class="clearfix">
                <h5>Our City, Our Story</h5>
                <h4 title="Featured episode title. Must begin with 'E##'" class="cushycms">E09: Hazard Free</h4>
                <div class="column left">
                    <img title="Featured episode thumbnail image" class="cushycms replace-2x rel" src="img/f9.jpg" alt="E9" width="316" height="221">
                    <nav class="clearfix">
                        <div class="social">
                            <div class="fb-like" data-href="http://ourcityourstory.com" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
                        </div>

                        <div class="social">
                            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ourcityourstory.com">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>

                        <div class="social">
                            <a href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fourcityourstory.com&media=http%3A%2F%2Fourcityourstory.com%2Fimg%2Flogo.png&description=Our%20City%2C%20Our%20Story%20aims%20to%20find%20and%20tell%20the%20stories%20which%20make%20up%20our%20identity.%20This%20is%20Rockford%2C%20Illinois." class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It"></a>
                        </div>
                    </nav>

                </div>
                <div title="Feature episode description" class="column center clearfix cushycms"><p>
	Andy Hazzard had been a staple of downtown Rockford before she decided to acknowledge her true calling of farming. She was a waitress at Octane, she worked on jewelry at several art fairs, but when it came down to it, she had far too strong of a connection with nature. But her work in the restaurant business gave her the knowledge of the industry and the rapport with those who work in them. Her passion is infectious, as her passion made Paul Sletten of Abreo (Brio at the time) realize there was support here for a &ldquo;Farm to Table&rdquo; restaurant, that brought about Social.</p>
<p>
	Andy has been an inspiration for many, as her resilience should inspire us all. Though, with the help of her family, support of her friends, she has continued to grow the farm and be a loud voice in the chorus of those promoting &ldquo;good food&rdquo; &mdash; locally grown, organic vegetables, meat and grain.</p>
<a href="#" class="button next">&larr; Next<span class="cut">&nbsp;Episode</a></a> <a href="#" class="button previous">Previous<span class="cut">&nbsp;Episode</span> &rarr;</a> </div>
                <div title="Featured episode credits" class="column right cushycms"><ul>
	<li>
		<h6>
			Directed &amp; Produced By</h6>
		<span>Pablo Korona</span></li>
	<li>
		<h6>
			Assistant &amp; Second Shooter</h6>
		<span>Julia Moore</span></li>
	<li>
		<h6>
			Music</h6>
		<span>Daniel James McMahon</span></li>
<li><h6>Audio</h6><span>Zach Staas</span></li>
	<li>
		<h6>
			Special Thanks</h6>
		<span>TBD</span><br />
		<br />
		&nbsp;</li>
</ul>
</div>
            </article>
        </div>

            <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/about.php"); ?>

        <div id="recent" class="recent clearfix">
            <article class="clearfix">
                <h5>Our City, Our Story</h5>
                <h1>Recent Stories</h1>
                <div title="Recent episode #1" class="column left cushycms"><a href="http://ourcityourstory.com/episode/8"><img class="replace-2x rel" src="img/e08-thumb.jpg" alt="E08: Team Fur Bandit" /></a>
<h6>
	Episode 08</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/8">Team Fur Bandit</a></h3>
<p>
	&ldquo;Did I just really see that?&rdquo; It was the middle of December, and on a snow soaked Sunday afternoon a couple dozen fur covered bikes were sprinting down East State Street. Directly after this mass of bikes was a white truck&hellip;</p>
<a href="http://ourcityourstory.com/episode/8" class="button">Watch &rarr;</a></div>
                <div title="Recent episode #2" class="column center cushycms"><a href="http://ourcityourstory.com/episode/7"><img class="replace-2x rel" src="img/e07-thumb.jpg" alt="E07: Hometown History" /></a>
<h6>
	Episode 07</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/7">Hometown History</a></h3>
<p>
	There are two things you can do when someone labels you. You can either accept it, or prove it wrong. Darcy Hill is the Drama teacher at the Lutheran Academy. Every year she puts on a play with her 4th grade students. However, this was not like every other year&hellip;</p>
<a href="http://ourcityourstory.com/episode/7" class="button">Watch &rarr;</a></div>
                <div title="Recent episode #3" class="column right cushycms"><a href="http://ourcityourstory.com/episode/6"><img class="replace-2x rel" src="img/e06-thumb.jpg" alt="E06: Bonds By Fire" /></a>
<h6>
	Episode 06</h6>
<h3>
	<a href="http://ourcityourstory.com/episode/6">Bonds By Fire</a></h3>
<p>
	The O&rsquo;Keefe family is one of the only two 3rd generation Fire Fighting families to serve Rockford on the Fire Department. Though they share the same blood, and history, each of the members of the fire department are a part of a brotherhood&hellip;</p>
<a href="http://ourcityourstory.com/episode/6" class="button">Watch &rarr;</a></div>
                    <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/allstorieslink.php"); ?>
            </article>
        </div>

            <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/contact.php"); ?>

        </div>
        <!-- End of role="main" -->

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/sponsor.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/supporters.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); ?>

    </body>
</html>