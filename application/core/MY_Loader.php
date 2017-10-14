<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class WPCI_Loader extends CI_Loader {

	/**
	 * Show Errors
	 *
	 * @return boolean
	 */
	private $show_errors;

	/**
	 * List of loaded views
	 *
	 * @return array
	 */
	protected $_ci_views = array();

	/**
	 * Theme
	 *
	 * @return string Default theme name
	 */
	protected $theme;


	public function __construct(){
		parent::__construct();
		$this->show_errors = (ENVIRONMENT === 'development') ? TRUE : FALSE;

	}

	/**
	 * Show Errors
	 *
	 * Defines if errors should be displayed when 
	 * loading a file fails or just return False
	 *
	 * @param	boolean	$show_errors	If set, defines wether errors should be displayed or not
	 * @return	boolean
	 */
	public function show_errors($show_errors = NULL){
		if (NULL !== $show_errors) {
			$this->show_errors = $show_errors;
		}
		return (ENVIRONMENT === 'development') && $this->show_errors;
	}
}


class MY_Loader extends WPCI_Loader {


	public function __construct(){
		parent::__construct();
	}
}