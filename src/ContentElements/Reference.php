<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2017 Leo Feyer
 *
 * PHP version 5
 * @copyright  Frank Hoppe
 * @author     Frank Hoppe
 * @package    references
 * @license    LGPL
 * @filesource
 */

namespace Schachbulle\ContaoReferencesBundle\ContentElements;

/**
 * Class Reference
 *
 */
class Reference extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_references';

	public function generate()
	{
		$this->referenzen = unserialize($this->referenzen);
		return parent::generate(); 
	}

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$daten = array();
		$i = 0;
		foreach($this->referenzen as $item)
		{
			if($item['active'])
			{
				$i++;
				$daten[] = array
				(
					'nummer' => $i,
					'text'   => $item['url'] ? '<a href="'.$item['url'].'"'.($item['target'] ? ' target="_blank"' : '').'>'.($item['text'] ? $item['text'] : $item['url']).'</a>' : $item['text']
				);
			}
		}

		$this->Template->references = $daten;
		$this->Template->references_count = count($daten);
		if($daten && $this->referenzen_headline) 
		{
			$this->Template->headline = $this->referenzen_headline ? ($i == 1 ? $GLOBALS['TL_LANG']['tl_content']['references_headline_singular'] :  $GLOBALS['TL_LANG']['tl_content']['references_headline_plural']) : $this->headline;
		}
	}
}
