<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
    throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
$this->layout = 'home';
?>
<center>
    <h2> Fórmulario de cadastro de Palestra</h2><br>
    <?php
    echo $this->Form->create('Palestra');
    echo $this->Form->input('nome', array("class" => "campo", "label" => "Nome: "));
//echo $this->Form->input('email');
    echo $this->Form->input('descricao', array("class" => "campo", "label" => "Descrição: "));

    echo $this->Form->input('palestrantes_id', array("class" => "campo", "label" => "Palestrante: "));

    echo $this->Form->input('inicio', array("class" => "campo", "label" => "Hr Inicio: "));
    echo $this->Form->input('fim', array("class" => "campo", "label" => "Hr Fim: "));
    echo "<br>";
    echo $this->Form->end('Cadastrar Palestra');
    ?>




</center>