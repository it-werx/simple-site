<?php
/**
 * @file API.php
 * Central functions for this application.
 *
 * The latest version can be obtained from:
 * @link http://www.flywebdesign.com/projects
 *
 * @version Alpha 0.2
 * @copyright Copyright: 2003,2014 Fly Web Design.
 * @author Ron Mac Quarrie <ron@flywebdesign.com>
 * @access private
 */

/**
* Returns a list for required and included files.
* @param include/require
* @return none.
* @access private
*/
require DOC_ROOT."/core/bootstrap.php";
include DOC_ROOT."/libs/head-tpl.php";
	
/**
 * File Handler class.
 */
class File_Handler {
	private $_file;
	private $file_ext;
	protected $_data;
	

	function __construct($_file = null){
		$this->_data = array();
		$file_ext = pathinfo($_file, PATHINFO_EXTENSION);
		if (isset($_file) && $file_ext == 'tpl'){
                $this->load_template_file($_file);
            } elseif (isset($_file) && $file_ext == 'xml'){
                $this->load_xml_file($_file);                
            }
        }
        /**
         * load_template_file function.
         * 
         * @access public
         * @param mixed $content
         * @return loads the file
         */
        public function load_template_file($_file){
            if (!is_file($_file)){
                throw new FileNotFoundException("File not found: $_file");
            } elseif (!is_readable($_file)){
                throw new IOException("Could not access file: $_file");
            } else {
                $this->content = $_file;
            }
        }
        /**
         * load_data_file function.
         * 
         * @access public
         * @param mixed $content
         * @return loads the file
         */
        public function load_xml_file($_file){
        	if (!is_file($_file)){
                throw new FileNotFoundException("File not found: $_file");
            } elseif (!is_readable($_file)){
                throw new IOException("Could not access file: $_file");
            } else {
            	//$_file->asXML($_file);
            	$g = simplexml_load_file($_file);
            	$f = $g->asXML();
            	$this->content = $_file;
            	var_dump($f);            
            }
        }
        /**
         * set function.
         * 
         * @access public
         * @param mixed $var
         * @param mixed $content
         * @return set this=>$content
         */
        public function set($var, $content){
            $this->$var = $content;
        }
        /**
         * publish function.
         * 
         * @access public
         * @param bool $output - whether to output the file to the screen or to just return the file
         * @return Prints out the content to the page
         * However, before we do that, we need to remove every var within {} that are not set
         */
        public function publish($output = true){
            ob_start(); 
            include $this->content;
            var_dump($output);
            $content = ob_get_clean();
            print $content;
        }
        /**
         * parse function.
         * 
         * @access public
         * @return returns the file so it can be reused
         */
        public function parse(){
            ob_start();
            include $this->content;
            $content = ob_get_clean();
            return $content;
        }
    }
/**
 * Data Parser class.
 */
class Data_Parser {
	private $data_file;
	//$content = &variable_static(__FUNCTION__);
	function __construct($data_file = null){
		if (isset($data_file)){
			$this->load_file($data_file);
		}
	}
	public function load_file($data_file){
	//$data_file = simplexml_load_file(DOC_ROOT.'data/home.xml'); 
	if (!is_file($data_file)){
		throw new FileNotFoundException("File not found: $data_file");
			} elseif (!is_readable($template_file)){
			throw new IOException("Could not access file: $data_file");
            } else {
                $this->content = $data_file;
            }
        }
	}


?>