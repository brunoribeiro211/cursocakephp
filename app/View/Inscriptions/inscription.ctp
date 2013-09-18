<?php

echo '<h1>' . __('Formulário de Inscrição') . '<h1>';


echo $this->Form->create('Inscription', array('action' => 'inscription'));

echo $this->Form->input('Inscription.name', array('label' => __('Nome')));
echo $this->Form->input('Inscription.last_name', array('label' => __('Sobrenome')));
echo $this->Form->input('Inscription.email', array('type' => 'email'));
echo $this->Form->input('Inscription.phone', array('label' => __('Telefone')));
echo $this->Form->input('Inscription.address', array('label' => __('Endereço')));
echo $this->Form->input('Inscription.login');
echo $this->Form->input('Inscription.password', array('label' => __('Senha')));

echo $this->Form->submit(__('Enviar'));
echo $this->Form->end();
?>