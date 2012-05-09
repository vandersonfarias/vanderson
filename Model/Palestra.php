<?php

class Palestra extends AppModel {

    public $validate = array(
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => '*Erro! Informe um nome'
            ),
            array(
                'rule' => 'isUnique',
                'message' => '*Erro! E-mail já cadastrado'
            )
        ),
        'inicio' => array(
            'rule' => 'notEmpty',
            'message' => '*Erro! Informe um nome'
        ),
        'fim' => array(
            'rule' => 'notEmpty',
            'message' => '*Erro! Informe um nome'
        )
    );

    

}

?>
