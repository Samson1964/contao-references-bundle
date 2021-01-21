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

$GLOBALS['TL_DCA']['tl_content']['palettes']['references'] = '{type_legend},type,headline;{options_legend},referenzen;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['referenzen'] = array
(
	'label'                 => &$GLOBALS['TL_LANG']['tl_content']['references'],
	'exclude'               => true,
	'inputType'             => 'multiColumnWizard',
	'eval'                  => array
	(
		'buttonPos'         => 'top',
		'columnFields' 		=> array
		(
			'active' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['references_active'],
				'exclude'               => true,
				'inputType'             => 'checkbox',
				'default'               => 1,
				'eval'                  => array
				(	
					'style'             => 'width: 20px',
				)
			),
			'text' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['references_text'],
				'exclude'               => true,
				'inputType'             => 'text',
				'eval'                  => array
				(
					'style'             => 'width:90%',
					'allowHtml'         => true
				)
			),
			'url' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['references_url'],
				'exclude'               => true,
				'inputType'             => 'text',
				'eval'                  => array
				(
					'rgxp'              => 'url',
					'tl_class'          => 'wizard',
					'style'             => 'width:90%',
				),
				'wizard' => array
				(
					array('tl_content', 'pagePicker')
				),
 			),
			'target' => array
			(
				'label'                 => &$GLOBALS['TL_LANG']['tl_content']['references_target'],
				'exclude'               => true,
				'inputType'             => 'checkbox',
				'eval'                  => array
				(	
					'style'             => 'width: 20px',
				)
			),
		)
	),
	'sql'                   => "blob NULL"
);
