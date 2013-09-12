<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');
        echo $this->Html->css('padrao');

        echo $this->Html->script('jquery.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header"><?php echo $this->element('topo'); ?></div>
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->element('menu'); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer"><?php echo $this->element('rodape'); ?></div>
        </div>
        <?php echo $this->element('googleAnalytics', array('id_acompanhamento' => 'UA-38869986-1')); ?>
        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>
