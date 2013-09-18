<?php

Class Inscription extends AppModel {

    public $cacheQueries = true;
    public $order = array('created' => 'DESC', 'name' => 'ASC');
    public $virtualFields = array('full_name' => "CONCAT(Inscription.name, '', Inscription.last_name)");

}
?>
