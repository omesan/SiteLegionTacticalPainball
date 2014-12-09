<?php
/**
 * @version   $Id: gantry.config.php 21868 2014-07-08 18:22:14Z arifin $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
defined('JPATH_BASE') or die();

$gantry_presets = array(
    'presets' => array(
        'preset1' => array(
            'name' => 'Preset 1',
            'main-body' => 'light',
            'main-accent' => '#c71b1b',
            'main-bg' => 'blue',
            'main-accent2' => 'redcolor'
        ),
        'preset2' => array(
            'name' => 'Preset 2',
            'main-body' => 'light',
            'main-accent' => '#c71b1b',
            'main-bg' => 'violet',
            'main-accent2' => 'redcolor'
        ),
        'preset3' => array(
            'name' => 'Preset 3',
            'main-body' => 'light',
            'main-accent' => '#3C7FB7',
            'main-bg' => 'lightblue',
            'main-accent2' => 'bluecolor'
        ),
        'preset4' => array(
            'name' => 'Preset 4',
            'main-body' => 'light',
            'main-accent' => '#7E9C54',
            'main-bg' => 'green',
            'main-accent2' => 'greencolor'
        ),
        'preset5' => array(
            'name' => 'Preset 5',
            'main-body' => 'light',
            'main-accent' => '#E6643A',
            'main-bg' => 'bluered',
            'main-accent2' => 'orangecolor'
        ),
        'preset6' => array(
            'name' => 'Preset 6',
            'main-body' => 'light',
            'main-accent' => '#E6643A',
            'main-bg' => 'pink',
            'main-accent2' => 'orangecolor'
        )
    )
);

$gantry_default_pushpullschemas = array(

    'mb9' => array(''),

    'mb5-sa4' => array('',''),
    'mb6-sa3' => array ('',''),
    'mb7-sa2' => array ('',''),

    'sa4-mb5' => array('rt-push-4','rt-pull-5'),
    'sa3-mb6' => array('rt-push-3','rt-pull-6'),
    'sa2-mb7' => array('rt-push-2','rt-pull-7'),

    'mb3-sa3-sb3' => array('','',''),
    'mb5-sa2-sb2' => array('','',''),
    'mb5-sa3-sb4' => array('','',''),

    'sa3-mb3-sb3' => array('rt-push-3','rt-pull-3',''),
    'sa2-mb5-sb2' => array('rt-push-2','rt-pull-5',''),

    'sa3-sb3-mb3' => array('rt-push-6','rt-pull-3','rt-pull-3'),
    'sa2-sb2-mb5' => array('rt-push-4','rt-pull-5','rt-pull-5'),



    'mb12' => array(''),

    'mb6-sa6' => array ('',''),
    'mb7-sa5' => array ('',''),
    'mb8-sa4' => array ('',''),
    'mb9-sa3' => array ('',''),

    'sa6-mb6' => array ('rt-push-6','rt-pull-6'),
    'sa5-mb7' => array ('rt-push-5','rt-pull-7'),
    'sa4-mb8' => array ('rt-push-4','rt-pull-8'),
    'sa3-mb9' => array ('rt-push-3','rt-pull-9'),

    'mb4-sa4-sb4' => array('','',''),
    'mb6-sa3-sb3' => array('','',''),
    'mb8-sa2-sb2' => array('','',''),

    'sa4-mb4-sb4' => array('rt-push-4','rt-pull-4',''),
    'sa3-mb6-sb3' => array('rt-push-3','rt-pull-6',''),
    'sa2-mb8-sb2' => array('rt-push-2','rt-pull-8',''),

    'sa4-sb4-mb4' => array('rt-push-8','rt-pull-4','rt-pull-4'),
    'sa4-sb3-mb5' => array('','',''),
    'sa3-sb3-mb6' => array('rt-push-6','rt-pull-6','rt-pull-6'),
    'sa2-sb2-mb8' => array('rt-push-4','rt-pull-8','rt-pull-8'),

    'mb3-sa3-sb3-sc3' => array('','','',''),
    'mb4-sa2-sb3-sc3' => array('','','',''),
    'mb4-sa3-sb2-sc3' => array('','','',''),
    'mb4-sa3-sb3-sc2' => array('','','',''),
    'mb6-sa2-sb2-sc2' => array('','','',''),

    'sa3-mb3-sb3-sc3' => array('rt-push-3','rt-pull-3','',''),
    'sa3-mb4-sb2-sc3' => array('rt-push-3','rt-pull-4','',''),
    'sa2-mb4-sb3-sc3' => array('rt-push-2','rt-pull-4','',''),
    'sa3-mb4-sb3-sc2' => array('rt-push-3','rt-pull-4','',''),
    'sa2-mb6-sb2-sc2' => array('rt-push-2','rt-pull-6','',''),

    'sa3-sb3-mb3-sc3' => array('rt-push-6','rt-pull-3','rt-pull-3',''),
    'sa3-sb2-mb4-sc3' => array('rt-push-5','rt-pull-4','rt-pull-4',''),
    'sa2-sb3-mb4-sc3' => array('rt-push-5','rt-pull-4','rt-pull-4',''),
    'sa3-sb3-mb4-sc2' => array('rt-push-6','rt-pull-4','rt-pull-4',''),
    'sa2-sb2-mb6-sc2' => array('rt-push-4','rt-pull-6','rt-pull-6',''),

    'sa3-sb3-sc3-mb3' => array('rt-push-9','rt-pull-3','rt-pull-3','rt-pull-3'),
    'sa3-sb3-sc2-mb4' => array('rt-push-8','rt-pull-4','rt-pull-4','rt-pull-4'),
    'sa3-sb2-sc3-mb4' => array('rt-push-8','rt-pull-4','rt-pull-4','rt-pull-4'),
    'sa2-sb3-sc3-mb4' => array('rt-push-8','rt-pull-4','rt-pull-4','rt-pull-4'),
    'sa2-sb2-sc2-mb6' => array('rt-push-6','rt-pull-6','rt-pull-6','rt-pull-6'),






    'mb16' => array(''),

    'mb8-sa8' => array ('',''),
    'mb10-sa6' => array ('',''),
    'mb12-sa4' => array ('',''),
    'mb13-sa3' => array ('',''),

    'sa8-mb8' => array ('rt-push-8','rt-pull-8'),
    'sa6-mb10' => array ('rt-push-6','rt-pull-10'),
    'sa4-mb12' => array ('rt-push-4','rt-pull-12'),
    'sa3-mb13' => array ('rt-push-3','rt-pull-13'),

    'mb6-sa5-sb5' => array('','',''),
    'mb8-sa4-sb4' => array('','',''),
    'mb10-sa3-sb3' => array('','',''),

    'sa5-mb6-sb5' => array('rt-push-5','rt-pull-6',''),
    'sa4-mb8-sb4' => array('rt-push-4','rt-pull-8',''),
    'sa3-mb10-sb3' => array('rt-push-3','rt-pull-10',''),

    'sa5-sb5-mb6' => array('rt-push-10','rt-pull-6','rt-pull-6'),
    'sa4-sb4-mb8' => array('rt-push-8','rt-pull-8','rt-pull-8'),
    'sa3-sb3-mb10' => array('rt-push-6','rt-pull-10','rt-pull-10'),

    'mb4-sa4-sb4-sc4' => array('','','',''),
    'mb6-sa4-sb3-sc3' => array('','','',''),
    'mb6-sa3-sb4-sc3' => array('','','',''),
    'mb6-sa3-sb3-sc4' => array('','','',''),
    'mb7-sa3-sb3-sc3' => array('','','',''),

    'sa4-mb4-sb4-sc4' => array('rt-push-4','rt-pull-4','',''),
    'sa4-mb6-sb3-sc3' => array('rt-push-4','rt-pull-6','',''),
    'sa3-mb6-sb4-sc3' => array('rt-push-3','rt-pull-6','',''),
    'sa3-mb6-sb3-sc4' => array('rt-push-3','rt-pull-6','',''),
    'sa3-mb7-sb3-sc3' => array('rt-push-3','rt-pull-7','',''),

    'sa4-sb4-mb4-sc4' => array('rt-push-8','rt-pull-4','rt-pull-4',''),
    'sa4-sb3-mb6-sc3' => array('rt-push-7','rt-pull-6','rt-pull-6',''),
    'sa3-sb4-mb6-sc3' => array('rt-push-7','rt-pull-6','rt-pull-6',''),
    'sa3-sb3-mb6-sc4' => array('rt-push-6','rt-pull-6','rt-pull-6',''),
    'sa3-sb3-mb7-sc3' => array('rt-push-6','rt-pull-7','rt-pull-7',''),

    'sa4-sb4-sc4-mb4' => array('rt-push-12','rt-pull-4','rt-pull-4','rt-pull-4'),
    'sa4-sb3-sc3-mb6' => array('rt-push-10','rt-pull-6','rt-pull-6','rt-pull-6'),
    'sa3-sb4-sc3-mb6' => array('rt-push-10','rt-pull-6','rt-pull-6','rt-pull-6'),
    'sa3-sb3-sc4-mb6' => array('rt-push-10','rt-pull-6','rt-pull-6','rt-pull-6'),
    'sa3-sb3-sc3-mb7' => array('rt-push-9','rt-pull-7','rt-pull-7','rt-pull-7')

);


$gantry_default_mainbodyschemascombos = array(
    9 => array(
        1 => array(
                array('mb'=>9)
        ),
        2 => array(
                array('mb'=>5, 'sa'=>4),
                array('mb'=>6, 'sa'=>3),
                array('mb'=>7, 'sa'=>2),

                array('sa'=>4, 'mb'=>5),
                array('sa'=>3, 'mb'=>6),
                array('sa'=>2, 'mb'=>7)
        ),
        3 => array(
                array('mb'=>3, 'sa'=>3, 'sb'=>3),
                array('mb'=>5, 'sa'=>2, 'sb'=>2),

                array('sa'=>3, 'mb'=>3, 'sb'=>3),
                array('sa'=>2, 'mb'=>5, 'sb'=>2),

                array('sa'=>3, 'sb'=>3, 'mb'=>3),
                array('sa'=>2, 'sb'=>2, 'mb'=>5)
        )
    ),

    12 => array(
        1 => array(
                array('mb'=>12)
        ),
        2 => array(
                array('mb'=>6, 'sa'=>6),
                array('mb'=>7, 'sa'=>5),
                array('mb'=>8, 'sa'=>4),
                array('mb'=>9, 'sa'=>3),

                array('sa'=>6, 'mb'=>6),
                array('sa'=>5, 'mb'=>7),
                array('sa'=>4, 'mb'=>8),
                array('sa'=>3, 'mb'=>9)
        ),
        3 => array(
                array('mb'=>4, 'sa'=>4, 'sb'=>4),
                array('mb'=>5, 'sa'=>3, 'sb'=>4),
                array('mb'=>6, 'sa'=>3, 'sb'=>3),
                array('mb'=>8, 'sa'=>2, 'sb'=>2),

                array('sa'=>4, 'mb'=>4, 'sb'=>4),
                array('sa'=>3, 'mb'=>6, 'sb'=>3),
                array('sa'=>2, 'mb'=>8, 'sb'=>2),

                array('sa'=>4, 'sb'=>4, 'mb'=>4),
                array('sa'=>3, 'sb'=>3, 'mb'=>6),
                array('sa'=>2, 'sb'=>2, 'mb'=>8)


        ),
        4 => array(
                array('mb'=>3, 'sa'=>3, 'sb'=>3, 'sc'=>3),
                array('mb'=>4, 'sa'=>2, 'sb'=>3, 'sc'=>3),
                array('mb'=>4, 'sa'=>3, 'sb'=>2, 'sc'=>3),
                array('mb'=>4, 'sa'=>3, 'sb'=>3, 'sc'=>2),
                array('mb'=>6, 'sa'=>2, 'sb'=>2, 'sc'=>2),

                array('sa'=>3, 'mb'=>3, 'sb'=>3, 'sc'=>3),
                array('sa'=>3, 'mb'=>4, 'sb'=>2, 'sc'=>3),
                array('sa'=>2, 'mb'=>4, 'sb'=>3, 'sc'=>3),
                array('sa'=>3, 'mb'=>4, 'sb'=>3, 'sc'=>2),
                array('sa'=>2, 'mb'=>6, 'sb'=>2, 'sc'=>2),

                array('sa'=>3, 'sb'=>3, 'mb'=>3, 'sc'=>3),
                array('sa'=>3, 'sb'=>2, 'mb'=>4, 'sc'=>3),
                array('sa'=>2, 'sb'=>3, 'mb'=>4, 'sc'=>3),
                array('sa'=>3, 'sb'=>3, 'mb'=>4, 'sc'=>2),
                array('sa'=>2, 'sb'=>2, 'mb'=>6, 'sc'=>2),

                array('sa'=>3, 'sb'=>3, 'sc'=>3, 'mb'=>3),
                array('sa'=>3, 'sb'=>3, 'sc'=>2, 'mb'=>4),
                array('sa'=>3, 'sb'=>2, 'sc'=>3, 'mb'=>4),
                array('sa'=>2, 'sb'=>3, 'sc'=>3, 'mb'=>4),
                array('sa'=>2, 'sb'=>2, 'sc'=>2, 'mb'=>6)

        )
    ),

    16 => array(
        1 => array(
                array('mb'=>16)
        ),
        2 => array(
                array('mb'=>8, 'sa'=>8),
                array('mb'=>10, 'sa'=>6),
                array('mb'=>12, 'sa'=>4),
                array('mb'=>13, 'sa'=>3),

                array('sa'=>8, 'mb'=>8),
                array('sa'=>6, 'mb'=>10),
                array('sa'=>4, 'mb'=>12),
                array('sa'=>3, 'mb'=>13),
        ),
        3 => array(
                array('mb'=>6, 'sa'=>5, 'sb'=>5),
                array('mb'=>8, 'sa'=>4, 'sb'=>4),
                array('mb'=>10, 'sa'=>3, 'sb'=>3),

                array('sa'=>5, 'mb'=>6, 'sb'=>5),
                array('sa'=>4, 'mb'=>8, 'sb'=>4),
                array('sa'=>3, 'mb'=>10, 'sb'=>3),

                array('sa'=>5, 'sb'=>5, 'mb'=>6),
                array('sa'=>4, 'sb'=>4, 'mb'=>8),
                array('sa'=>3, 'sb'=>3, 'mb'=>10)


        ),
        4 => array(
                array('mb'=>4, 'sa'=>4, 'sb'=>4, 'sc'=>4),
                array('mb'=>6, 'sa'=>4, 'sb'=>3, 'sc'=>3),
                array('mb'=>6, 'sa'=>3, 'sb'=>4, 'sc'=>3),
                array('mb'=>6, 'sa'=>3, 'sb'=>3, 'sc'=>4),
                array('mb'=>7, 'sa'=>3, 'sb'=>3, 'sc'=>3),

                array('sa'=>4, 'mb'=>4, 'sb'=>4, 'sc'=>4),
                array('sa'=>4, 'mb'=>6, 'sb'=>3, 'sc'=>3),
                array('sa'=>3, 'mb'=>6, 'sb'=>4, 'sc'=>3),
                array('sa'=>3, 'mb'=>6, 'sb'=>3, 'sc'=>4),
                array('sa'=>3, 'mb'=>7, 'sb'=>3, 'sc'=>3),

                array('sa'=>4, 'sb'=>4, 'mb'=>4, 'sc'=>4),
                array('sa'=>4, 'sb'=>3, 'mb'=>6, 'sc'=>3),
                array('sa'=>3, 'sb'=>4, 'mb'=>6, 'sc'=>3),
                array('sa'=>3, 'sb'=>3, 'mb'=>6, 'sc'=>4),
                array('sa'=>3, 'sb'=>3, 'mb'=>7, 'sc'=>3),

                array('sa'=>4, 'sb'=>4, 'sc'=>4, 'mb'=>4),
                array('sa'=>4, 'sb'=>3, 'sc'=>3, 'mb'=>6),
                array('sa'=>3, 'sb'=>4, 'sc'=>3, 'mb'=>6),
                array('sa'=>3, 'sb'=>3, 'sc'=>4, 'mb'=>6),
                array('sa'=>3, 'sb'=>3, 'sc'=>3, 'mb'=>7)

        )
    )
);