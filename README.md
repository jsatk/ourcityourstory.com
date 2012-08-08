OurCityOurStory.com
===================

Table of Contents
-----------------
To jump to a section simple search on the corresponding number.

[001](#001) Legal  
[002](#002) Contact  
[003](#003) How To Connect  
[004](#004) Directory Structure  
[005](#005) Cushy CMS  

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

Here is where all our images live. Rather than seperating image groups into seperate subfolders we followed naming conventions. Each page's featured episode image follows the convention `f#.jpg`. All thumbnails for the *recent* and *allstories* page follow the naming convention `e##-thumb.jpg` & `e##-thumb@2x.jpg` respectively. The `@2x` naming convention is extremely important to follow. The rest not-so-much, but I strongly recommend keeping to it for consistency and maintainability's sake.

### `/includes/` ###
![includes directory structure](http://ourcityourstory.com/img/readme/includes.png)

Here is where all of our includes live. These are the elements that are consistently the same accross every page. I have added the *About* and *Supporters* section to Cushy CMS. Edit them once and they populate accross all of the pages.

<a name="005">005</a> Cushy CMS
---------------------------------
 After logging in to [Cushy CMS](http://cushycms.com) go to your Control Panel and click on  *ourcityourstory.com* expand its directory structure to see all of the availabel pages to edit which includes the *Home Page*, *All Stories*, *About include*, *Supporters include*, and all the *episode* pages.

### Preparing Images ###
Jason to include instructions here... 

### Uploading Images ###
The way Cushy CMS handles image uploading works. It works fine. But for our purposes and consistency sake I strongly believe it best if you upload new images using FTP to the server (make sure to place all images in the `img` folder) and then simply use Cushy CMS and choose those images from the server. 

### Notes on the editable sections: ###

 + *Meta Description:* This is at the top of the *Home Page* and the *Episode pages* and unfortunately must be in plain HTML. Don't let this scare you. You will mostlikely never need to edit this section, however, if you want to — for instance — change the Facebook share title and image to an epsiode specific one you would replace the content attributes with episode specific information.

 + *Featured Video Title:* This is the title that appears over the top of the video.

 + *Put This Page's Featured Video Id Here:* This is where to include that page's video's Vimeo ID. This can be gotten from several places on Vimeo, namely the end of any video page's URL.

 + *Is This The Most Recent Episode?:* Unfortunately Cushy doesn't allow you to use a checkbox or select box in their editor. This simple field should read **exactly** "No" for all pages except the *Home Page* and the most current video's episode page. This field **must** read "No" or "Yes"; "no", "yes...", "YES", or "n0" won't work. This is important for javascript functionality.

 + *Next Episode:* & *Previous Episode:* This is where to put the title of the next episode. 

 + *Featured Episode Title. Must Begin With 'E##':* This field **must** begin "E##:". This is important for javascript functionality so it knows what to put into the "Next" URL.

+ *Featured Episode Thumbnail Image:* Use "choose file" to select that page's featured image which should follow the naming convention `f#.jpg`.

+ *Feature Episode Description:* Place the featured episode's descrition here. Note you **do not** need to set the "Previous Episode" & "Next Episode" links to anything. This is all automatically handled with javascript.

+ *Featured Episode Credits:* Episode credits go here. It is important to maintain the structure and formating of the unordered list so that that section stays looking like it does. 

+ *Recent Episode #1*, *Recent Episode #2*, & *Recent Episode #3:* Enter all information related to the most recent episode's here. Please stick to the formatting present so that the titles and headers stay consistent. The links here **will** need to be set by you. Choose the image using the rich texted editor from the server. Please ensure the images are named correctly `e##-thumb.jpg` & `e##-thumb@2x.jpg`.

+ With the *About* & *Supporters* section pages, again, please keep to the formatting in place when edited to ensure consistency.

+ When you publish a new episode and change the *Home Page* make sure to set the *Is This The Most Recent Episode?* to "No" on the previously most-recent episode's episode specific page.

###### This document Copyright © 2012 Pablo Korona. ######
