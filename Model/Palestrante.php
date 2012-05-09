
<?php

class Palestrante extends AppModel {

    public $hasMany = array('Palestra');

    public $useTable = 'palestrantes';

    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'message' => '*Erro! Informe um nome'
        ),
        'descricao' => array(
            'rule' => 'notEmpty',
            'message' => '*Erro! Informe descricao'
        ),
        'url' => array(
            'rule' => 'url',
            'message' => '*Erro! Informe uma url valida',
            'allowEmpty'
        )
    );

}

?>
