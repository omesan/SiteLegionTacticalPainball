<?php
/**
* @version   $Id: index.php 22338 2014-07-23 14:01:52Z james $
 * @author RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

/* No Direct Access */
defined( '_JEXEC' ) or die( 'Restricted index access' );
/* Load Mootools */
JHTML::_('behavior.framework', true);
/* Load and Inititialize Gantry Class */
require_once(dirname(__FILE__) . '/lib/gantry/gantry.php');
$gantry->init();

// get the current preset
$gpreset = str_replace(' ','',strtolower($gantry->get('name')));

?>
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
		/* Force IE to most recent version */
		if ($gantry->browser->name == 'ie') : 
			echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
		endif;        

		$gantry->addStyle('grid-responsive.css', 5);
		$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
        $gantry->addLess('global.less', 'master.css', 8, array('main-accent'=>$gantry->get('main-accent','#c71b1b'), 'main-body'=>$gantry->get('main-body','light'), 'main-accent2'=>$gantry->get('main-accent2','redcolor'), 'main-bg'=>$gantry->get('main-bg','blue')));

        if ($gantry->browser->name == 'ie'){
        	if ($gantry->browser->shortversion == 9){
        		$gantry->addInlineScript("if (typeof RokMediaQueries !== 'undefined') window.addEvent('domready', function(){ RokMediaQueries._fireEvent(RokMediaQueries.getQuery()); });");
        	}
			if ($gantry->browser->shortversion == 8){
				$gantry->addScript('html5shim.js');
			}
		}
		if ($gantry->get('layout-mode', 'responsive') == 'responsive') $gantry->addScript('rokmediaqueries.js');
		if ($gantry->get('loadtransition')) {
		$gantry->addScript('load-transition.js');
		$hidden = ' class="rt-hidden"';}

    ?>
</head>
<body <?php echo $gantry->displayBodyTag(); ?>>
	<div class="rt-bg"><div class="rt-bg2">
		<div class="rt-top-section rt-dark">
			<div class="rt-container">
			    <?php /** Begin Top Surround **/ if ($gantry->countModules('top') or $gantry->countModules('header') or $gantry->countModules('slideshow') or $gantry->countModules('showcase')) : ?>
			    <header id="rt-top-surround">
					<?php /** Begin Top **/ if ($gantry->countModules('top')) : ?>
					<div id="rt-top" <?php echo $gantry->displayClassesByTag('rt-top'); ?>>
						<div class="rt-container">
							<?php echo $gantry->displayModules('top','standard','standard'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Top **/ endif; ?>
					<?php /** Begin Background **/ if ($gantry->get('headerimage-enabled')): ?>
					<div id="rt-bg-image">
					</div>
					<?php /** End Background **/ endif; ?>
					<?php /** Begin Slideshow **/ if ($gantry->countModules('slideshow') || $gantry->countModules('ss-'.$gpreset)) : ?>
					<div id="rt-slideshow" <?php echo $gantry->displayClassesByTag('rt-showcase'); ?>>
						<?php echo $gantry->displayModules('ss-'.$gpreset,'basic','basic'); ?>
						<?php echo $gantry->displayModules('slideshow','basic','basic'); ?>
						<div class="clear"></div>
					</div>
					<?php /** End Slideshow **/ endif; ?>
					<?php /** Begin Header **/ if ($gantry->countModules('header')) : ?>
					<div id="rt-header">
						<div class="rt-container">
							<?php echo $gantry->displayModules('header','standard','standard'); ?>
							<div class="clear"></div>
						</div>
					</div>
					<?php /** End Header **/ endif; ?>
					<?php /** Begin Showcase **/ if ($gantry->countModules('showcase')) : ?>
					<div id="rt-showcase">
						<div class="rt-showcase-pattern">
							<div class="rt-container">
								<?php echo $gantry->displayModules('showcase','standard','standard'); ?>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<?php /** End Showcase **/ endif; ?>
				</header>
				<?php /** End Top Surround **/ endif; ?>

				<div class="clear"></div>
			</div>
		</div>
		<?php if ($gantry->countModules('slideshow') || $gantry->countModules('ss-'.$gpreset)) : ?>
		<div id="slideshow-spacer"></div>
		<?php endif; ?>
		<div id="rt-transition"<?php if ($gantry->get('loadtransition')) echo $hidden; ?>>
			<div class="rt-container main-surround">
				<?php if ($gantry->countModules('slideshow') || $gantry->countModules('ss-'.$gpreset)) : ?>
				<div class="rt-body-top"><div class="left-top-pointer"></div><div class="right-top-pointer"></div></div>
				<?php else : ?>
				<div class="rt-body-straight"><div class="left-top-pointer"></div><div class="right-top-pointer"></div></div>
				<?php endif; ?>
				<div id="rt-mainbody-surround">
					<div class="rt-container">
					<?php /** Begin Drawer **/ if ($gantry->countModules('drawer')) : ?>
				    <div id="rt-drawer">
				        <div class="rt-container">
				            <?php echo $gantry->displayModules('drawer','standard','standard'); ?>
				            <div class="clear"></div>
				        </div>
				    </div>
				    <?php /** End Drawer **/ endif; ?>
					<?php /** Begin Feature **/ if ($gantry->countModules('feature')) : ?>
					<div id="rt-feature">
						<?php echo $gantry->displayModules('feature','standard','standard'); ?>
						<div class="clear"></div>
					</div>
					<?php /** End Feature **/ endif; ?>
					<?php /** Begin Utility **/ if ($gantry->countModules('utility')) : ?>
					<div id="rt-utility">
						<?php echo $gantry->displayModules('utility','standard','standard'); ?>
						<div class="clear"></div>
					</div>
					<?php /** End Utility **/ endif; ?>
					<?php /** Begin Breadcrumbs **/ if ($gantry->countModules('breadcrumb')) : ?>
					<div id="rt-breadcrumbs">
						<?php echo $gantry->displayModules('breadcrumb','standard','standard'); ?>
						<div class="clear"></div>
					</div>
					<?php /** End Breadcrumbs **/ endif; ?>
					<?php /** Begin Main Top **/ if ($gantry->countModules('maintop')) : ?>
					<div id="rt-maintop">
						<?php echo $gantry->displayModules('maintop','standard','standard'); ?>
						<div class="clear"></div>
					</div>
					<?php /** End Main Top **/ endif; ?>
					<?php /** Begin Full Width **/ if ($gantry->countModules('fullwidth')) : ?>
					<div id="rt-fullwidth">
						<?php echo $gantry->displayModules('fullwidth','basic','basic'); ?>
							<div class="clear"></div>
						</div>
					<?php /** End Full Width **/ endif; ?>
					<?php /** Begin Main Body **/ ?>
				    	<?php echo $gantry->displayMainbody('mainbody','sidebar','standard','standard','standard','standard','standard'); ?>
					<?php /** End Main Body **/ ?>
					<?php /** Begin Main Bottom **/ if ($gantry->countModules('mainbottom')) : ?>
					<div id="rt-mainbottom">
						<?php echo $gantry->displayModules('mainbottom','standard','standard'); ?>
						<div class="clear"></div>
					</div>
					<?php /** End Main Bottom **/ endif; ?>
					<?php /** Begin Extension **/ if ($gantry->countModules('extension')) : ?>
					<div id="rt-extension">
						<?php echo $gantry->displayModules('extension','standard','standard'); ?>
						<div class="clear"></div>
					</div>
					<?php /** End Extension **/ endif; ?>
					</div>
				</div>
				<div class="rt-body-btm"><div class="left-btm-pointer"></div><div class="right-btm-pointer"></div></div>
			</div>
		</div>
		<?php /** Begin Footer Section **/ if ($gantry->countModules('bottom') or $gantry->countModules('footer') or $gantry->countModules('copyright')) : ?>
		<footer id="rt-footer-surround" class="rt-dark">
			<div class="rt-container">
			<div class="rt-footer-bg"><div class="rt-footer-bg2">
				<?php /** Begin Bottom **/ if ($gantry->countModules('bottom')) : ?>
				<div id="rt-bottom">
					<?php echo $gantry->displayModules('bottom','standard','standard'); ?>
					<div class="clear"></div>
				</div>
				<?php /** End Bottom **/ endif; ?>
				<?php /** Begin Footer **/ if ($gantry->countModules('footer')) : ?>
				<div id="rt-footer">
					<?php echo $gantry->displayModules('footer','standard','standard'); ?>
					<div class="clear"></div>
				</div>
				<?php /** End Footer **/ endif; ?>
				<?php /** Begin Copyright **/ if ($gantry->countModules('copyright')) : ?>
				<div id="rt-copyright">
					<?php echo $gantry->displayModules('copyright','standard','standard'); ?>
					<div class="clear"></div>
				</div>
				<?php /** End Copyright **/ endif; ?>
				<div class="clear"></div>
			</div></div>
			</div>
		</footer>
		<?php /** End Footer Surround **/ endif; ?>
	</div></div>
	<?php /** Begin Debug **/ if ($gantry->countModules('debug')) : ?>
	<div id="rt-debug">
		<div class="rt-container">
			<?php echo $gantry->displayModules('debug','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div>
	<?php /** End Debug **/ endif; ?>
	<?php /** Begin Popups **/
		echo $gantry->displayModules('popup','popup','popup');
		echo $gantry->displayModules('login','login','popup');
	/** End Popup s**/ ?>
	<?php /** Begin Analytics **/ if ($gantry->countModules('analytics')) : ?>
	<?php echo $gantry->displayModules('analytics','basic','basic'); ?>
	<?php /** End Analytics **/ endif; ?>
	</body>
</html>
<?php
$gantry->finalize();
?>
