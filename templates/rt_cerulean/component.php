<?php
/**
* @version   $Id: component.php 7384 2013-02-08 18:19:57Z arifin $
 * @author RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
// no direct access
defined( '_JEXEC' ) or die( 'Restricted index access' );

// load and inititialize gantry class
require_once(dirname(__FILE__) . '/lib/gantry/gantry.php');
$gantry->init();

?>
<?php if (JFactory::getApplication()->input->getString('type')=='raw'):?>
	<jdoc:include type="component" />
<?php else: ?>
	<!doctype html>
	<html xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language;?>" >
		<head>
			<?php if ($gantry->get('layout-mode') == '960fixed') : ?>
			<meta name="viewport" content="width=960px">
			<?php elseif ($gantry->get('layout-mode') == '1200fixed') : ?>
			<meta name="viewport" content="width=1200px">
			<?php else : ?>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<?php endif; ?>
			<?php
				$gantry->displayHead();
				$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
				$gantry->addLess('global.less', 'master.css', 8, array('main-accent'=>$gantry->get('main-accent','#c71b1b'), 'main-body'=>$gantry->get('main-body','light'), 'main-accent2'=>$gantry->get('main-accent2','redcolor'), 'main-bg'=>$gantry->get('main-bg','blue')));
			?>
		</head>
		<body class="component-body">
			<div class="component-content">
		    	<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>
		</body>
	</html>
<?php endif; ?>
<?php
$gantry->finalize();
?>
