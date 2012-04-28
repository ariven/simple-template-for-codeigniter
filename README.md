simple-template-for-codeigniter
===============================

Simple template for codeigniter 2.x

use the config file to define sections, templates, etc.

function select_template($which)
--------------------------------
selects which template to render with

function add_menu_item($which_menu, $link, $text)
-------------------------------------------------
adds a menu item to the specified menu

function content($section, $text) 
---------------------------------
adds content to $section

function add_meta($which, $what)
--------------------------------
adds a head tag item like title, description, etc (see sample template)

function add_script($name)
--------------------------
adds a javascript file link

function add_stylesheet($name)
------------------------------
adds a stylesheet file link

function add_readyscript($text)
-------------------------------
adds scripting that is placed in a jQuery $(document).ready() function

function render($content = '')
-----------------------------
renders the page.  if you don't add content with the content() function, you need to specify it here
