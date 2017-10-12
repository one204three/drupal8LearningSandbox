<?php
/**
 * @file
 * @author Lee Martin
 * Contains \Drupal\d8dev\Controller\d8devController
 *
 * To be includes under d8dev(module_root_folder)/src/Controller/
 *
 */
namespace Drupal\d8dev\Controller;

/**
 * Provides responses for the d8dev module.
 */
class d8devController{
	/**
	 *
	 * @return array
	 *  A simple renderable array
	 */
	public function myPage(){
		$element = array(
			'#type' => 'markup',
			'#markup' => 'A bunch of things',
		);
		return $element;
	}
}
?>

