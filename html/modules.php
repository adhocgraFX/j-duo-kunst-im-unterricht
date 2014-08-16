<?php

/**
 * @copyright	JDuo responsive template © 2014 adhocgraFX / Johannes Hock - All Rights Reserved.
 * @license		GNU/GPL
 **/

// No direct access.
defined('_JEXEC') or die;

/**
 * joomskeleton, joomfluid joomflex and jduo chrome
 **/

function modChrome_jduo($module, &$params, &$attribs)
{
    if (!empty ($module->content)) : ?>
        <div class="module <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
            <?php if ($module->showtitle != 0) : ?>
                <div class="module-title">
                    <h4 class="title"><?php echo $module->title; ?></h4>
                </div>
            <?php endif; ?>
                <div class="module-body">
                    <?php echo $module->content; ?>
                </div>
        </div>
    <?php endif;
}