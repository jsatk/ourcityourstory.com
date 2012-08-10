OurCityOurStory.com
===================

Table of Contents
-----------------
To jump to a section simple search on the corresponding number.

[001](#001) Legal  
[002](#002) Contact  
[003](#003) How To Connect  
[004](#004) Directory Structure  
[005](#005) How To Upload Image  
[006](#006) Cushy CMS  

<a name="001">001</a> Legal
---------------------------

Manual written and prepared by Jesse Atkinson.  
Manual started: 07/28/2012  
Last updated: 07/30/2012  
This document Copyright © 2012 Pablo Korona.

<a name="002">002</a> Contact
---------------------------

Owned by Pablo Korona  
[@pablokorona](http://www.twitter.com/pablokorona)  
[pablokorona@gmail.com](mailto:pablokorona@gmail.com)

Designed by Jason James  
[@jas0njames](http://www.twitter.com/jas0njames)  
[jason@jasonjam.es](mailto:jason@jasonjam.es)

Coded by Jesse Atkinson  
[@jsatk](http://www.twitter.com/jsatk)  
[jesse.s.atkinson@gmail.com](mailto:jesse.s.atkinson@gmail.com)

<a name="003">003</a> How To Connect
--------------------------------------
![Connection info](http://ourcityourstory.com/img/readme/connect.png)

**Protocol:** FTP  
**Server:** muscida.dreamhost.com  
**User Name:** pablokorona  
**Port:** 21  
**Root URL:** http://ourcityourstory.com/  
**Remote Path:** /ourcityourstory.com/  
**Local Path:** Set to wherever you want to store your site locally.

<a name="004">004</a> Directory Structure
-------------------------------------------

### `/` ###
![Home directory structure](http://ourcityourstory.com/img/readme/root.png)

`404.html` : Error page when user goes to a non-valid URL on the domain. Allows user to search [ourcityourstory.com](http://ourcityourstory.com) for what they were looking for.

`README.md` : This document that explains all details about the website.

`allstories` : Folder containing our *allstories* page.

`apple-touch-icon-114x114-precomposed.png` : Save webpage to home screen icon for iOS.

`apple-touch-icon-57x57-precomposed.png` : Save webpage to home screen icon for iOS.

`apple-touch-icon-72x72-precomposed.png` : Save webpage to home screen icon for iOS.

`apple-touch-icon-precomposed.png` : Save webpage to home screen icon for iOS.

`apple-touch-icon.png` : Save webpage to home screen icon for iOS.

`comps` : Jason's comps.

`crossdomain.xml` : Crossdomain policies.

`css` : Contains our styles.css which makes the site look pretty.

`episode` : Folder containing subfolders for the Episodes.

`favicon.gif` : Website's favicon.

`favicon.ico` : Website's favicon.

`favicon.png` : Website's favicon.

`humans.txt` : See [humanstxt.org](http://humanstxt.org). This contains credits and info about the humans behind this website.

`img` : Folder containing all of our images.

`includes` : Our PHP includes that allow us to change things in one place and have it populate accross all pages.

`index.php` : Homepage. This is what users see when they go to [ourcityourstory.com](http://ourcityourstory.com)

`js` : Contains our javascript, plugins, libraries, etc.

`robots.txt` : Used for search optimization so we're tracked correctly on search engines.

### `/episode/` ###
![episode directory structure](http://ourcityourstory.com/img/readme/episode.png)

Here is where all of the episode pages live. If there is a need for more episodes simply duplicate the folder for the latest episode, rename the folder to the next episode number, and finally add it's index.php to Cushy CMS.

### `/img/` ###
![img directory structure](http://ourcityourstory.com/img/readme/img.png)

Here is where all our images live. Rather than seperating image groups into seperate subfolders we followed naming conventions. Each page's featured episode image follows the convention `f##.jpg`. All thumbnails for the *recent* and *allstories* page follow the naming convention `e##-thumb.jpg` & `e##-thumb@2x.jpg` respectively. The `@2x` naming convention is extremely important to follow. The rest not-so-much, but I strongly recommend keeping to it for consistency and maintainability's sake.

### `/includes/` ###
![includes directory structure](http://ourcityourstory.com/img/readme/includes.png)

Here is where all of our PHP includes that structure and build-out the site live. These are the elements that are consistently the same accross every page. I have added the *About* and *Supporters* section to Cushy CMS. Edit them once and they populate accross all of the pages.

<a name="005">005</a> How To Upload Image
-------------------------------
One of Cushy CMS's major downfalls is that it's absolutely terrible at uploading images. It unfortunately puts the image where it wants it and doesn't put it where it should go. This means that all new images should be uploaded via FTP. Above in section [004](#004) I discussed naming conventions, but I will repost here for conveinence and also to re-enforce the point.

> Each page's featured episode image follows the convention
> `f##.jpg`. All thumbnails for the *recent* and *allstories* page
> follow the naming convention `e##-thumb.jpg` & `e##-thumb@2x.jpg`
> respectively. The `@2x` naming convention is extremely important
> to follow. The rest not-so-much, but I strongly recommend keeping
> to it for consistency and maintainability's sake.

Simply FTP to the server following the instructions found in section [003](#003) and then upload the images following the naming convetions listed in section [004](#004) and above.

A quick breakdown:

+ Featued episode thumnail in the "Story" section should be named `f##.jpg`.
+ "Recent Stories" section video thumbnails follow the naming convention `e##-thumb.jpg` & `e##-thumb@2x.jpg`.

<a name="006">006</a> Cushy CMS
-------------------------------
 After logging in to [Cushy CMS](http://cushycms.com) go to your Control Panel and click on  *ourcityourstory.com* expand its directory structure to see all of the available pages to edit which includes the *Home Page*, *All Stories*, *About include*, *Supporters include*, and all the *episode* pages.

### Preparing Images ###
Jason to include instructions here... 

### Uploading Images ###
The way Cushy CMS handles image uploading works. It works fine. But for our purposes and consistency sake I strongly believe it best if you upload new images using FTP to the server (make sure to place all images in the `img` folder) and then simply use Cushy CMS and choose those images from the server. 

### Notes on the editable sections: ###

 + *Meta Tags:* This is at the top of the *Home Page* and the *Episode pages* and unfortunately must be in plain HTML. Don't let this scare you. Simply scroll down towards the bottom until you see the `<meta>` tags. The tags you're interested in are the `og:title`, `og:image`, `og:url`, and `og:description`. Look for these in the `property` attribute of the `meta` tags. These control the information that gets shared on Facebook. You're going to want to edit the `content` attribute of these tags to reflect the desired share information for Facebook.

 + *Featured Video Title:* This is the title that appears over the top of the video and hides when the video plays.

 + *Is This The Most Recent Episode?:* Unfortunately Cushy doesn't allow you to use a checkbox or select box in their editor. This simple field should read **exactly** "No" for all pages except the *Home Page* and the most current video's episode page which should read "Yes". This field **must** read "No" or "Yes"; "no", "yes...", "YES", or "n0" won't work. This is important for javascript functionality.

 + *Next Episode:* & *Previous Episode:* This is where to put the title of the next episode. If there is no next episode (I.E. Home page or latest episode page) leave it blank. Same applies for episode 1's page. Leave the previous episode field blank, but it already is set that way so I doubt you'll ever have to edit that.

 + *Change The Number After 'Video/' But Before '?'.:* This is where to put your video id for that page's video. I apologize that this isn't more readable, but this is how it has to be to avoid the flickering we were seeing before. Simply click the "Source" button as seen in the screenshot. ![How to update iframe for that page's video](http://ourcityourstory.com/img/readme/source.png) Then change the number seen in this screenshot to the number of the video ID you want on the page. ![Change this video ID to the video ID of the correct video for that page](http://ourcityourstory.com/img/readme/videoid.png) For further clarity, here is the code and what you need to swithch out is in all caps: `<iframe allowfullscreen="" height="281" id="video" mozallowfullscreen="" src="http://player.vimeo.com/video/PUT-VIDEO-ID-HERE?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;api=1&amp;player_id=video" title="iframe for featured episode." webkitallowfullscreen="" width="500"></iframe>`

 + *Featured Episode Title. Must Begin With 'E##':* This field **must** begin "E##:". This is important for javascript functionality so it knows what to put into the "Next" URL as well as what featured image to show for the thumbnail.

+ *Feature Episode Description:* Place the featured episode's descrition here. Note you **do not** need to set the "Previous Episode" & "Next Episode" links to anything. This is all automatically handled with javascript.

+ *Featured Episode Credits:* Episode credits go here. It is important to maintain the structure and formating of the unordered list so that that section stays looking like it does. 

+ *Recent Episode #1*, *Recent Episode #2*, & *Recent Episode #3:* Enter all information related to the most recent episode's here. Please stick to the formatting present so that the titles and headers stay consistent. The links here **will** need to be set by you. Choose the image using the rich texted editor from the server. Please ensure the images are named correctly `e##-thumb.jpg` & `e##-thumb@2x.jpg`. You can literally copy and paste from the previous episode's page and simply move the episodes in the 1 & 2 spots into the 2 & 3 spots and add the info for the 1 spot.

+ With the *About* & *Supporters* section pages, again, please keep to the formatting in place when edited to ensure consistency.

+ When you publish a new episode and change the *Home Page* make sure to set the *Is This The Most Recent Episode?* to "No" on the previously most-recent episode's episode specific page.

###### This document Copyright © 2012 Pablo Korona. ######
