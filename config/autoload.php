<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Quiz
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
 
ClassLoader::addNamespaces(array('fiveBytes',));

ClassLoader::addClasses(array
(
	// Classes
	'fiveBytes\myGenerateBreadcrumbClass'	=> 'system/modules/quiz/src/fiveBytes/classes/myGenerateBreadcrumbClass.php',
	
	// Modules
	'fiveBytes\ModuleQuiz'					=> 'system/modules/quiz/src/fiveBytes/modules/ModuleQuiz.php',

	// Models
	'fiveBytes\QuizCategoryModel'			=> 'system/modules/quiz/src/fiveBytes/models/QuizCategoryModel.php',
	'fiveBytes\QuizQuestionModel'			=> 'system/modules/quiz/src/fiveBytes/models/QuizQuestionModel.php',
	'fiveBytes\QuizResultModel'				=> 'system/modules/quiz/src/fiveBytes/models/QuizResultModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_quiz'     		=> 'system/modules/quiz/templates/modules',
	'form_quiz_start'    => 'system/modules/quiz/templates/forms',
));
