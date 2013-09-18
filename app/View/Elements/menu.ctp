<?php
echo $this->Html->div('menu', 
                        $this->Html->link('Home', '/',array('class'=>'linkMenu'))
                        .$this->Html->link('Sobre', '/sobreoevento',array('class'=>'linkMenu'))
                        .$this->Html->link('Como chegar', '/comochegar',array('class'=>'linkMenu'))
                        .$this->Html->link('Inscrição', array('controller'=>'inscriptions','action'=>'inscription'),array('class'=>'linkMenu'))
                        .$this->Html->link('link 5', '#',array('class'=>'linkMenu'))
                        , array('id' => 'menu'));
?>