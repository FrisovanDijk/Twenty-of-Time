# Twenty of Time - A WordPress Genesis Child Theme
**Contributors**:  

* Friso van Dijk ( [@frisovandijk](http://twitter.com/frisovandijk ) / [frisovandijk.com](http://frisovandijk.com/) )  

**Version**: 1.0  
**Created on**: WordPress 4.1, Genesis 2.1  
**License**: MIT  

I have been working on a weblog recently, trying to hit that sweet spot between a functional theme and a minimal lay-out. I tried to remove all clutter, whilst still being able to use it with any preferred lay-out style. The main content area is moved up a bit, to give the whole a more dynamic feel. Right now I use it on [Twenty of Time](http://www.twentyoftime.com)

## Set-up
Download the zip file and upload it as a theme on your WordPress installation. The menu is featured in the right-header sidebar, so create a menu widget (in appearance > widgets) and add your main menu there. That's all there is to it, enjoy!

<img src="http://www.frisovandijk.com/public/git/twentyoftime/screenshot.png" alt="twenty of time theme" />

## Design
I tried to keep as much user freedom in the theme, whilst trying to keep it as clean as possible for personal use. As with all designs I make it's easy to pick different colours and match them as you wish. More on that below.
<br>The theme also allows featured images, which I find very attractive on a weblog. The images are much wider than they are tall in the example, but everything is possible (optimised width: 800px, screenshot height: 200px). They show up on singular posts/pages the same way they do as you see in the screenshots, with a little space between the featured image and the post.

## Editing
As with most themes I publish, they are made for personal use and can be modified freely. It comes with the [MIT-License](/public/MIT-LICENSE.txt), so please credit me for the work done.

### Deleting the Created By
This is an easy part to remove. When you have the theme installed, go to *Appearance > Editor*. On the right sidebar, select `functions.php`. Scroll to the bottom and look for this line: `<p>© 2015 <?php echo get_bloginfo('name'); ?> · Design by <a href="http://www.frisovandijk.com" target="_blank">Friso van Dijk</a></p>`.
<br>You can safely remove anything from `Design by` up to `</a>`. The first time shows the copyright notice on 2015 with your blog name. Easily customise this with some html.

### Editing the colors
For this, you will need to use SASS. This is a css preprocessor. The project uses several sass files, so you will need to do this locally with a compiler. I use [koala](http://koala-app.com/). Inside the theme folder, open `partials/_variables.scss' and edit the colors at will. It already has a list of colors that go well with the theme.
<br>Here I assume that you already have some experience with this kind of thing. If not, feel free to [contact me](/contact) and I will see if I can do anything to help.

## Acknowledgements
My thanks to [Greg Rickaby](https://github.com/gregrickaby) for supplying the Genesis Sample theme in a ready SASS structure.
