<?php

$THEME->name = 'formfactor';

////////////////////////////////////////////////////
// Name of the theme. Most likely the name of
// the directory in which this file resides. 
////////////////////////////////////////////////////


$THEME->parents = array('base', 'canvas');

/////////////////////////////////////////////////////
// Which existing theme(s) in the /theme/ directory
// do you want this theme to extend. A theme can 
// extend any number of themes. Rather than 
// creating an entirely new theme and copying all 
// of the CSS, you can simply create a new theme, 
// extend the theme you like and just add the 
// changes you want to your theme.
////////////////////////////////////////////////////


$THEME->sheets = array('core', 'course', 'selected');

////////////////////////////////////////////////////
// Name of the stylesheet(s) you've including in 
// this theme's /styles/ directory.
////////////////////////////////////////////////////


$THEME->enable_dock = false;

////////////////////////////////////////////////////
// Do you want to use the new navigation dock?
////////////////////////////////////////////////////


$THEME->editor_sheets = array('editor');

////////////////////////////////////////////////////
// An array of stylesheets to include within the 
// body of the editor.
////////////////////////////////////////////////////

$THEME->layouts = array(
    'base' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'general' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'course' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post'
    ),
    'coursecategory' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'incourse' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'frontpage' => array(
        'theme' => 'formfactor',
        'file' => 'frontpage.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'admin' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'mydashboard' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true),
    ),
    'mypublic' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    'login' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('langmenu'=>true),
    ),
    'popup' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    'frametop' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    'maintenance' => array(
        'theme' => 'formfactor',
        'file' => 'general.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true),
    ),
    'embedded' => array(
    	'theme' => 'formfactor',
        'file' => 'embedded.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true),
    ),
    
);

///////////////////////////////////////////////////////////////
// These are all of the possible layouts in Moodle. The
// simplest way to do this is to keep the theme and file
// variables the same for every layout. Including them
// all in this way allows some flexibility down the road
// if you want to add a different layout template to a
// specific page.
///////////////////////////////////////////////////////////////

// $THEME->csspostprocess
	
////////////////////////////////////////////////////
// Allows the user to provide the name of a function 
// that all CSS should be passed to before being 
// delivered.
////////////////////////////////////////////////////

// $THEME->filter_mediaplugin_colors

////////////////////////////////////////////////////
// Used to control the colours used in the small 
// media player for the filters
////////////////////////////////////////////////////

// $THEME->javascripts	

////////////////////////////////////////////////////
// An array containing the names of JavaScript files
// located in /javascript/ to include in the theme. 
// (gets included in the head)
////////////////////////////////////////////////////

// $THEME->javascripts_footer	

////////////////////////////////////////////////////
// As above but will be included in the page footer.
////////////////////////////////////////////////////

// $THEME->larrow	

////////////////////////////////////////////////////
// Overrides the left arrow image used throughout 
// Moodle
////////////////////////////////////////////////////

// $THEME->rarrow	

////////////////////////////////////////////////////
// Overrides the right arrow image used throughout Moodle
////////////////////////////////////////////////////

// $THEME->layouts	

////////////////////////////////////////////////////
// An array setting the layouts for the theme
////////////////////////////////////////////////////

// $THEME->parents_exclude_javascripts

////////////////////////////////////////////////////
// An array of JavaScript files NOT to inherit from
// the themes parents
////////////////////////////////////////////////////

// $THEME->parents_exclude_sheets	

////////////////////////////////////////////////////
// An array of stylesheets not to inherit from the
// themes parents
////////////////////////////////////////////////////

// $THEME->plugins_exclude_sheets

////////////////////////////////////////////////////
// An array of plugin sheets to ignore and not 
// include.
////////////////////////////////////////////////////

// $THEME->renderfactory

////////////////////////////////////////////////////
// Sets a custom render factory to use with the 
// theme, used when working with custom renderers.
////////////////////////////////////////////////////

// $THEME->resource_mp3player_colors

////////////////////////////////////////////////////
// Controls the colours for the MP3 player 	
////////////////////////////////////////////////////
