=== WordPress Icons - SVG ===

Contributors: eherman24

Donate link: http://evan-herman.com/

Tags: wordpress, icons, evan, herman, icon, set, svg, wp, icomoon, ico, moon, wp, zoom, wp-zoom, wpzoom, broccolidry, metoicons, iconic, plugin, responsive, bootstrap, font, awesome, font awesome, twitter, glyphicons, glyph, web, font, webfont

Requires at least: 3.0.1

Tested up to: 3.6

Stable tag: 1.3

License: GPLv2 or later

License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will install 500+ SVG glyph icons for use on your site. Users can use the provided code in posts, themes and templates. 

== Description ==
**Demo Page**
<a href="http://evan-herman.com/wp-svg-icon-set-1-example/">Check out the Included Icons</a>

I originally created this plugin for my own personal use on client projects. After witnessing the power of this plugin first hand, I wanted 
to give a little something back to the community who have helped me through the years. The 'WordPress SVG Icon Set' is extremely
easy for any one to use. Two clicks of the mouse and you have an icon ready to be placed on to your site. 

These icons are a set of web-fonts, and are extremely scale-able. Meaning they will not degrade in quality the larger they get. Another
great feature of this plugin is the ability to use the same icons across all devices. No need to generate Retina specific images for retina
ready devices. By setting a max-width on the icon, it then becomes responsive.

This plugin is also great for developers who use icons on multiple sites and want to avoid the hassle of re-installing
web fonts on to a new server every time. With this plugin its one click and you're ready to begin working. You can use
these any where in your themes.

**Features**

* OVER 500 ICONS INCLUDED
* Insert Icons Directly Into Posts
* Expansion section - updated with new icons frequently
* Inclusion of user requested icons (with donation)
* Pro Version in Development - plans to release as unpaid

**Usage**
To include an icon on to any page of your site, simply click on the icon that you want to use and copy the provided code.
The icon code will look like the following:
`<div data-icon="&#xe016;"></div>`

It is also extremely simple to change the size of the icon . To do so, just add an inline font-size property to the div that is holding your icon.
*For example:*
`<div data-icon="&#xe016;" style="font-size:3em;"></div>`
Will increase the icon size to 3em. You may also specify 'px' or '%' as the measurement.

You may also change the color of the icon, for when you need to stick to a color scheme.
*For example:*
`<div data-icon="&#xe016;" style="color:#007ab7"></div>`
Will change the icon color to blue.

Another great feature is the ability to add CSS3 animation, such as color fade on hover. This is acheived by first adding an ID or class to the icon and utilizing the CSS3 pseudo classes.
You can add the style directly before the icon, or you can simply add it to your existing CSS3 Stylesheet.
*For example:*
CSS3 Code
`<style>#pac-man-icon:hover { color: #d9f200; -o-transition:.5s; -ms-transition:.5s; -moz-transition:.5s; -webkit-transition:.5s; transition:.5s; }</style>`
Icon Code
`<div data-icon="&#xe016;" id="pac-man-icon"></div>`
Will create a PacMan Icon, give it the ID of pac-man-icon, and assign the :hover pseudo class to the icon.
When a user hovers over the icon, the icon will then fade colors to an appropriate PacMan yellow over .5 seconds.

These icons can also be used inside of buttons, dropdowns, menu items, unordered lists, category icons. The use is endless.
For my final example I wanted to show how the icons can be used inside of a button.
*For example:*
`<button class="button-secondary"><div data-icon="&#xe016;" id="pac-man-icon"> This is my PacMan Button</div></button>`
This will create a very nice looking button with your Icon to the left hand side of the button with the text' This is my PacMan Button'.
*note: button-secondary is a class to assign to buttons on the admin dashboard of your site, it will not look great on the front end.*

*Developing plugins is long and tedious work. If you benefit or enjoy this plugin please take the time to rate
and review it, as this will only make future iterations of it better.*

**Special Thanks Goes To:**

* [IcoMoon](http://www.icomoon.io) for an amazing base set of free icon's for use, many in this plugin.
* [Alessio Atzeni](http://www.alessioatzeni.com/) for the inclusion of a few 'Metoicons' icons in this plugin.
* [PJ Onori](http://somerandomdude.com) for the inclusion of a few 'Iconic' icons in this plugin.

**and of course**

* [Matt Mullenweg](http://www.ma.tt/) for everything he does for the WordPress community. Without him none of this would be possible.

== Installation ==
1. Upload `wordpress-svg-icons-plugin.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to the 'WP SVG Icon' plugin page in the dashboard
4. Click on which icon you would like to use
5. A preview of the icon will then appear in the preview box at the top. Copy the generated code out of the 'example' box.
6. You may now paste the copied code anywhere you want the icon to appear. (even in posts or anywhere in your templates)

== Frequently Asked Questions ==

= When I include the provided code in a post, all that appears is the code. No icon appears. Why? =

Make sure that you are entering the provided code in the 'text' section of the post editor. If you are putting the code into the 'visual' editor, it will not work.

= Will these icons loose quality as they scale up? =

No. These icons are not .png or .jpg format. They are .svg (scalable vector graphics), which means you can scale them
as large as you want with out any loss in quality.

= Can you change the color of the icons? =

Yes, by specifying an in-line color property to the div. 

= Can you add animations to the icons? =

Yes, but you will need to know how to code CSS3 animations. 

= What is so different between the free and the pro version? =

The pro version was built with ease of use for the end user in mind. The pro version comes with an icon customization window where users
can much more easily change the icon size and icon color. The customization window also features 59 pre-built CSS3 animations
which users can add to any icon in the library. On top of that users can choose when to animate the icon from options such as
'On Load', 'On Hover' and 'On Click'. Within the customization window users can also add a drop shadow, or make the icon appear 3D
with just one click, all while watching the changes in real time within the 'Icon Preview Window'. Users also hve the ability to turn the icon
in to a functioning link to an internal or external page. Once the user is content with the final icon design, they click 'Generate 
Code' where they are given all the necessary code to place that icon anywhere on your site.

It's as easy as copy and paste.

If you buy the pro version you will also receive support for one year, for those times you need to make something out of the ordinary happen.

*Note: The pro version is in development and is planned to be released as unpaid*

= Have a question, idea or found a bug? =

If you have found any problems, have an idea for a future release, found a bug you would like me to correct or 
need light technical support you can reach me by email at <a href="mailto:evanmherman@gmail.com">Evan.M.Herman@gmail.com</a>
or through the contact form on my website at <a href="http://www.Evan-Herman.com">www.Evan-Herman.com</a>.

== Screenshots ==

1. Main plugin screen. Pacman icon selected, generated code visible.
2. Some more icons included in this plugin.
3. All included icons in the icon selection screen in the dashboard.
4. The new expansion section, with the new linked in rounded icon

== Changelog ==
= 1.3 =
October 19th, 2013
* Added a new expansion section
* Added 1 new rounded linked in icon

= 1.2 =
September 20th, 2013
* Replaced icon container holder from a <div> to a <span> - fixes line breaks when inserting icons into content

= 1.1 =
August 2nd, 2013
* Made it easier to select icons by making the entire div selectable
* Added icon highlighting after selection
* Added smooth scroll back to top
* Placed scripts in external file

= 1.0 =
July 20th, 2013
* Original Release

== Upgrade Notice ==
= 1.3 =
October 19th, 2013
* Added a new expansion section
* Added 1 new rounded linked in icon

= 1.2 =
September 20th, 2013
* Replaced icon container holder from a <div> to a <span> - fixes line breaks when inserting icons into content

= 1.1 =
August 2nd, 2013
* Made it easier to select icons by making the entire div selectable
* Added icon highlighting after selection
* Added smooth scroll back to top

= 1.0 =
July 20th, 2013
* Original release 

== Demo Page ==
<p> Check out the <a href="http://evan-herman.com/wp-svg-icon-set-1-example/">demo page</a> before downloading. You can see all the icons that come with this plugin, and more on how to use them!</p>