<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @package references
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Samson'
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Samson\References\Reference' => 'system/modules/references/classes/Reference.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_references'               => 'system/modules/references/templates'
));
