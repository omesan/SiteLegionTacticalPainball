<?php
/**
 * @version   $Id: body_mainbody.php 6348 2013-01-09 16:36:04Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
defined('GANTRY_VERSION') or die();

gantry_import('core.gantrylayout');

/**
 *
 * @package    gantry
 * @subpackage html.layouts
 */
class GantryLayoutBody_MainBody extends GantryLayout {
    var $render_params = array(
        'schema'        =>  null,
        'pushPull'      =>  null,
        'classKey'      =>  null,
        'sidebars'      =>  '',
        'contentTop'    =>  null,
        'contentBottom' =>  null
    );
    function render($params = array()){
        /** @var $gantry Gantry */
		global $gantry;

        $fparams = $this->_getParams($params);
        $app=JFactory::getApplication();
        // logic to determine if the component should be displayed
        $display_mainbody = !($gantry->get("mainbody-enabled",true)==false && $app->input->getCmd('view') == 'featured');
        $display_component = !($gantry->get("component-enabled",true)==false && ($app->input->getCmd('option') == 'com_content' && $app->input->getCmd('view') == 'featured'));
        ob_start();
// XHTML LAYOUT
?>
<?php if ($display_mainbody) : ?>          
<div id="rt-main" class="<?php echo $fparams->classKey; ?>">
    <div class="rt-grid-<?php echo $fparams->schema['mb']; ?> <?php echo $fparams->pushPull[0]; ?>">
        <?php if (isset($fparams->contentTop)) : ?>
        <div id="rt-content-top">
            <?php echo $fparams->contentTop; ?>
        </div>
        <?php endif; ?>
        <?php if ($display_component) : ?>
		<div class="rt-block">
            <div id="rt-mainbody">
				<div class="component-content">
                	<jdoc:include type="component" />
				</div>
            </div>
		</div>
        <?php endif; ?>
        <?php if (isset($fparams->contentBottom)) : ?>
        <div id="rt-content-bottom">
            <?php echo $fparams->contentBottom; ?>
        </div>
        <?php endif; ?>
    </div>
    <?php echo $fparams->sidebars; ?>
    <div class="clear"></div>
</div>
<?php endif; ?>
<?php
        return ob_get_clean();
    }
}
