<?php
/**
 * @file
 * @author My Name
 * Contains \Drupal\d8dev\Controller\d8devController.
 * Please include this file under your
 * d8dev(module_root_folder)/src/Controller/
 */
namespace Drupal\d8dev\Controller;
/**
 * Provides route responses for the d8dev module.
 */
class d8devController {
	/**
	 * Returns a simple page.
	 *
	 * @return array
	 *   A simple renderable array.
	 */
	public function myPage() {
		$element = array(
			'#type' => 'markup',
			'#markup' => 'd8Dev Words!',
		);
		return $element;
	}
}
?>

