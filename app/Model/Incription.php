<?php

Class Inscription extends AppModel {

    public $cacheQueries = true;
    public $order = array('created' => 'DESC', 'name' => 'ASC');
    public $virtualFields = array('full_name' => "CONCAT(Inscription.name, '', Inscription.last_name)");
    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty',
            'message' => 'Preencha o campo nome'
        )/*,
        'email' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo email'
            ),
            array(
                'rule' => array('email', true),
                'message' => 'Email inválido'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'Email já cadastrado'
            )
        ),
        'phone' => array(
            array(
                'rule' => 'isValidUSPhoneFormat'
            )
        ),
        'address' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Preencha o campo endereço'
            ),
            array(
                'rule' => 'isValidAddress',
                'message' => 'Endereço de conter no mínimo 10 caracteres'
            )
        )*/
    );

    function isValidUSPhoneFormat($phone) {
        $phone_no = $phone['phone_num'];
        $errors = array();
        if (empty($phone_no)) {
            $errors [] = "Please enter Phone Number";
        } else if (!preg_match('/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s.]{0,1}[0-9]{3}[-\s.]{0,1}[0-9]{4}$/', $phone_no)) {
            $errors [] = "Please enter valid Phone Number";
        }

        if (!empty($errors))
            return implode("\n", $errors);

        return true;
    }

    function isValidAddress($address) {
        $value = array_shift($address);
        return strlen($value) >= 10 ? true : false;
    }

}

?>
