<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 * configuration options for template library
 * 
 * view files for template are stored in:
 * views/template/{name}
 * 
 * 
 */

$config['default_template']					= 'default'; // no trailing slash
$config['template_main_tpl']				= 'main'; // main template
$config['template_generic_wrapper']			= 'simple_wrapper';// simple wrapper used in several locations

/**
 * menu list, by template
 */
$config['template_menus']['default']		= array('main', 'alt'); // menu sections in this template

/**
 * these are variable names used in template_main_tpl to point to where they are.  for example
 * a section named header would be $section['header'], footer would be $section['footer']
 * 
 * section 'content' is mandatory
 */
$config['template_sections']['default']		= array('content', 'header', 'footer', 'sidebar');

/**
 * wrappers around successive items put in a section, $content is the only variable.
 * If a configuration doesnt exist, items are just appended normally.
 */
$config['template_section_wrap']['default']['content']	= 'content_wrap'; // wrapper around successive items put in a section, $content is the only variable


$config['template_menu']['default']['main']	= 'mainmenu'; // custom menu location
$config['template_menu']['default']['alt']	= 'altmenu'; // custom menu location

/**
 * head section items, optional 
 */
$config['template_meta']['title']			= ''; // default title
$config['template_meta']['description']		= ''; // default description
$config['template_meta']['keywords']		= ''; // default keywords
$config['template_meta']['author']			= 'Patrick Spence'; // default author