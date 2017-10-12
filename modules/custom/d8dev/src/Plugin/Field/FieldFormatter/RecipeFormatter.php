<?php

/**
 * @file
 * Contains \Drupal\d8dev\Plugin\field\formatter\RecipeFormatter
 */
namespace Drupal\d8dev\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'recipe_time' formatter
 *
 * @FieldFormatter(
 *     id = 'recipe_time',
 *     label = @Translation("Duration),
 *     field_types = {
 *      "integer",
 *      "decimal",
 *      "float"
 *     }
 * )
 */

class RecipeTimeFormatter extends FormatterBase{

	/**
	 * {@inheritdoc}
	 */

	public function viewElements( FieldItemListInterface $items, $lang) {
		$elements = array();

		foreach($items as $delta=>$item){
			$hours = floor($item->value/60);
			$minutes = $item->value%60;
			//get the greatest common denominator to convert to fraction of hours
			$minutes_gcd = gcd($minutes, 60);

			//$minutes_fraction = '<sup>' . $minutes/$minutes_gcd . '</sup>&frasl;<sub>' . 60/$minutes_gcd .'</sub>';
			$minutes_fraction = $minutes/$minutes_gcd . "/" . 60/$minutes_gcd;
			$markup = $hours > 0 ? $hours . ' and ' . $minutes_fraction . ' hours' : $minutes_fraction . 'hours';
			$elements[$delta] = array('#theme' => 'recipe_time_display', '#value' => $markup);
		}
		return $elements;

	}

	/**
	 * Simple helper function to get gcd of minutes
	 */
	function gcd($a, $b){
		$b = ( $a == 0) ? 0 : $b;
		return ($a % $b) ? gcd($b, abs($a-$b)) : $b;
	}
}