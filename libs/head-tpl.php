<?php
/**
 * @file head.php
 *
 * The latest version of head.php can be obtained from:
 * @link http://www.flywebdesign.com/projects/
 * @version Alpha 0.2
 * @copyright Copyright: 2003,2014 Simpleton CMS Team.
 * @author Ron Mac Quarrie <ron@flywebdesign.com>
 * @access public
 */

 /**
 * function head();
 * @return XHTML-2 head and meta tags. Meta tags can be loaded on a per-page call according to keywords and description for example.
 * @access public
 */
#function head(){
	#get_config();
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"
		."<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 2.0//EN\" \"http://www.w3.org/MarkUp/DTD/xhtml2.dtd\">\n"
		."<html xmlns=\"<xmlns />\" xml:lang=\"en\">\n"
		."<head>\n"
		."<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />\n";
		#meta_bot();
	echo "<title>Fly Web Design - Don't get caught in the web of confusion.</title>\n"
	    ."<base href=\"http://localhost/flywebdesign/\" />\n"
#}
#function meta_bot(){
#	if ($_SERVER['PHP_SELF'] == "admin.php"){
#	echo "<meta name=\"robots\" content=\"noindex,nofollow\" />\n"
#		."<meta http-equiv=\"cache-control\" content=\"nocache\" />\n"
#		."<meta name=\"revisit-after\" content=\"0 days\" />\n";
#   		} else {
#	echo "<meta name=\"robots\" content=\"index,follow\" />\n"
#	    ."<meta name=\"revisit-after\" content=\"1 days\" />\n";
#}
#}
#page_init();

?>