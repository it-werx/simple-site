<?php
/**
 * @file index.php
 *
 * The latest version can be obtained from:
 * @link http://www.flywebdesign.com/projects
 *
 * @version Alpha 0.2
 * @copyright Copyright: 2003,2014 Fly Web Design.
 * @author Ron Mac Quarrie <ron@flywebdesign.com>
 */
 
#define DOC_ROOT here for now.
define("DOC_ROOT", getcwd());
include_once DOC_ROOT ."/core/API.php";

/*Here we setup the most simple usage of the template*/
	//$render = new File_handler(DOC_ROOT ."/data/home.xml");
    $render = new File_Handler(DOC_ROOT ."/themes/default/main.tpl");    // Loading the template file
    /*Setting variables using the 2 methods*/
    $render->title = "Home Page";
    $render->set("body", "Welcome to our sample site");
    /*Outputting the data to the end user*/
    $render->publish();
 	//$render->$fx;
?>