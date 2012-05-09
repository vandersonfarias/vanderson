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

<div style="float:left;margin-left: 20px;width:500px;text-align:justify">
    <h1> O Centro de Convenções de Florianópolis </h1> <p>CentroSul está localizado na região Centro-Oeste de Florianópolis, na melhor posição geográfica da cidade, de mais fácil acesso para automóveis, ônibus ou avião, e estratégica na realização de eventos. É também referência visual na Ilha, devido à facilidade de identificação logo na entrada da cidade, a partir da Ponte Pedro Ivo Campos.

        <br> A 13 km do Aeroporto Internacional Hercílio Luz, o Centro de Convenções de Florianópolis - CentroSul é facilmente acessível e está a apenas 15 minutos de carro.</br>
    </p>
</div>

<div style="float:right;margin-right: 20px">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Ulysses+Guimar%C3%A3es,+Bras%C3%ADlia+-+Distrito+Federal,+Brasil&amp;aq=1&amp;oq=ulysses+guimar&amp;sll=37.0625,-95.677068&amp;sspn=52.240038,125.947266&amp;t=h&amp;ie=UTF8&amp;hq=Ulysses+Guimar%C3%A3es,&amp;hnear=Bras%C3%ADlia+-+Distrito+Federal,+Brasil&amp;ll=-15.79808,-47.89365&amp;spn=0.358788,0.672226&amp;z=11&amp;iwloc=A&amp;cid=16849226968097451426&amp;output=embed"></iframe>
</div>