# Nude
A WordPress Startup Framework. Includes basic code for setting up WordPress projects as well as some useful functions for extending and improving default behaviour.

# About this project
I put together a stripped back WordPress framework to make life easier for me when starting new projects. Often times, we have to write the same code over and over and so I decided to speed things up by creating this framework which includes commonly used code. 

I have kept the HTML to a minimum to allow flexibility on each new project. That being said, I added some basic Bootstrap classes to make the default templates look good. 

Feel free to use this framework in anyway you like. 

# Features 
This framework mostly features basic functionality of WordPress. However, I have added one or two useful functions that will make working with WordPress a little easier. I will add to these over time but for now, here is a list of what's included.
- index.php and page template set up with WordPress loop.
- content.php - displays the content of the index.php
- page-content/standard - display content in the pages. Can be added to for more diverse type of page content
- functions.php 
  - define constants
  - add theme support for thumbnails
  - register menus
  - register a sidebar
  - enqueue scripts and css files
  - required in additional functions
- functions folder which includes more extended functionality
  - login form - create your own login form anywhere on the site with a basic function which takes 8 parameters
  - pagination - replace the default WordPress post navigation with pagination
  - slug - get the slug of the post. Useful when creating unique ids within a loop
  - remove default gallery styles
- 404.php page to display a "lost" message
- header.php
- footer.php
- JS - Bootstrap js and jquery are included by default
