<!doctype html>
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
    <!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/head.php"); ?>

        <meta class="cushycms" title="Meta-Description" name="description" content="Rockford, IL, Storytelling video project, Stories of Rockford, Story video project, Rockford hometown pride building, Rockford illinois">
        <meta class="cushycms" title="Facebook Share Title" property="og:title" content="Our City, Our Story">
        <meta class="cushycms" title="Facebook Share Image." property="og:image" content="http://ourcityourstory.com/img/logo.png">
    </head>

    <body>

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/facebook.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/header.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/top-nav.php"); ?>

        <div role="main">
            <div id="episode" class="episode">
                <h1 class="cushycms" title="Featured video title">Jimmy Goodman</h1>
                <!-- I found this awesome trick here. http://www.netmagazine.com/tutorials/create-fluid-width-videos -->

                <!-- This is simply for the Cushy CMS. Current video ID to be entered here. -->
                <h1 class="invisible cushycms" title="Put this page's featured video ID here" id="video-id">43273531</h1>

                <a href="#" class="controls next"><em>&#8592;</em><span class="cushycms" title="Next Episode">E03: Pioneer of the Past</span></a>
                <a href="#" class="controls previous"><span class="cushycms" title="Previous Episode">E01: Vince the Tailor</span><em>&#8594;</em></a>
                <iframe id="video" title="iframe for featured episode." src="http://player.vimeo.com/video/{*id*}?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;api=1&amp;player_id=video" width="500" height="281" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>

            <div class="story clearfix">
                <article class="clearfix">
                    <h5>Our City, Our Story</h5>
                    <h4 class="cushycms" title="Featured episode title. Must begin with 'E##'">E02: Jimmy Goodman</h4>
                    <div class="column left">
                        <img class="cushycms replace-2x rel" title="Featured episode thumbnail image" src="img/f2.jpg" alt="E2" width="316" height="221">
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

                    <div class="column center clearfix cushycms" title="Feature episode description">
                        <p>Jimmy Goodman lives up to his surname. Three days a week, he volunteers in running and coaching youth in the sport of boxing. When you walk in to the space, you immediately see the ring before you, but you may not get to step in it for months. Jimmy teaches discipline and harnesses the passion to get in the ring to spar, with the fierceness of disciplined practice. Practice. On a practice night, you can&rsquo;t see into the space through the tall glass storefront windows, because it&rsquo;s fogged up from the 20+ kids running, doing pushups and sit ups. It&rsquo;s enough to make a person who feels they are in good shape, break out in sweat just watching. It continues on with this strict regimented activity for 45 minutes to an hour.</p>
                        <p>Now, Jimmy works with kids from all walks of life in the city. Some who can afford, but most who can&rsquo;t. He charges meager monthly dues, and has some support from Patriot&rsquo;s Gateway, but he does not get paid. He makes no money off the gear he sells, he turns around and sells what he purchases at cost to these kids.</p>
                        <p>Jimmy&rsquo;s boxers are well regarded whenever they travel to out-of-city and even out-of-state matches. They are a fierce crew of champions, everywhere from State to National. Most recently, one of his female boxers won the prestigious Golden Gloves in Chicago in her age group.</p>
                        <a href="#" class="button next">&larr; Next<span class="cut"> Episode</a></a> <a href="#" class="button previous">Previous<span class="cut"> Episode</span> &rarr;</a> </div>
                    </div>

                    <div class="column right cushycms" title="Featured episode credits">
                        <ul>
                            <li>
                                <h6>Directed &amp; Produced By</h6>
                                <span>Pablo Korona</span></li>
                            <li>
                                <h6>Assistant &amp; Second Shooter</h6>
                                <span>Julia Moore</span></li>
                            <li>
                                <h6>Music</h6>
                                <span>Daniel James McMahon</span></li>
                            <li>
                                <h6>Audio</h6>
                                <span>Zach Staas</span>
                            </li>
                            <li>
                                <h6>Special Thanks</h6>
                                <span>TBD</span>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>

            <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/about.php"); ?>

            <div id="recent" class="recent clearfix">
                <article class="clearfix">
                    <h5>Our City, Our Story</h5>
                    <h1>Recent Stories</h1>
                    <div class="column left cushycms" title="Recent episode #1">
                        <a href="http://ourcityourstory.com/episode/4">
                            <img class="replace-2x rel" src="img/e04-thumb.jpg" alt="E04: Darrell Hines" />
                        </a>
                        <h6>Episode 04</h6>
                        <h3><a href="http://ourcityourstory.com/episode/4">Darrell Hines</a></h3>
                        <p>Epictetus said, &ldquo;He is a wise man who does not grieve for the things which he has not, but rejoices for those which he has.&rdquo; We live in a world amply sprinkled with naysayers. Hearing the word NO more than YES has become&hellip;</p>
                        <a href="http://ourcityourstory.com/episode/4" class="button">Watch &rarr;</a>
                    </div>

                    <div class="column center cushycms" title="Recent episode #2">
                        <a href="http://ourcityourstory.com/episode/3">
                            <img class="replace-2x rel" src="img/e03-thumb.jpg" alt="E03: Pioneer of the Past" />
                        </a>
                        <h6>Episode 03</h6>
                        <h3><a href="http://ourcityourstory.com/episode/3">Pioneer of the Past</a></h3>
                        <p>Lorem ipsum dolor sit ametUt wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate&hellip;</p>
                        <a href="http://ourcityourstory.com/episode/3" class="button">Watch &rarr;</a>
                    </div>

                    <div class="column right cushycms" title="Recent episode #3">
                        <a href="http://ourcityourstory.com/episode/1">
                            <img class="replace-2x rel" src="img/e01-thumb.jpg" alt="E01: Vince the Tailor" />
                        </a>
                        <h6>Episode 01</h6>
                        <h3><a href="http://ourcityourstory.com/episode/1">Vince the Tailor</a></h3>
                        <p>The ivy-coated exterior of the Vince the Tailor shop appears to have been there for decades and it has, but it is rooted deeper than North Main. Tony Chiarelli owns and operates this alterations and tailoring shop&hellip;</p>
                        <a href="http://ourcityourstory.com/episode/1" class="button">Watch &rarr;</a>
                    </div>

                    <a href="http://vimeo.com/ourcityourstory/videos" target="_blank" class="button-alt">All Stories</a>
                </article>
            </div>

            <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/contact.php"); ?>

        </div>
        <!-- End of role="main" -->

        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/sponsor.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/supporters.php"); ?>
        <?php include ($_SERVER['DOCUMENT_ROOT'] . "/dev/includes/footer.php"); ?>

    </body>
</html>