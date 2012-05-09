<?php

class Inscricao extends AppModel {

    public $useTable = 'inscricoes';
    public $order = array('nome' => 'ASC');
    public $cacheQueries = true;
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'message' => '*Erro! Informe um nome'
        ),
        'email' => array(
            array(
                'rule' => 'email',
                'message' => '*Erro! Informe um e-mail válido'
            ), array(
                'rule' => 'isUnique',
                'message' => '*Erro! E-mail já cadastrado'
            ),
            array(
                'rule' => 'notEmpty',
                'message' => '*Erro! Informe um e-mail'
            )
        ),
        'telefone' => array(
            'rule' => 'numeric',
            'message' => '*Erro! Apenas Números'
        ),
        'endereco' => array(
            'rule' => array('minLength', 10),
            'message' => '*Erro! Digite no mínimo 10 caracteres'
        ),
    );

}