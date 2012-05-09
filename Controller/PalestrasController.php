<?php

class PalestrasController extends AppController {

    
    public function inserir() {
        $this->loadModel('Palestrante');

        $group_free = $this->Palestrante->find('list',array('fields' => array('id', 'nome')));

	$this->set('palestrantes',$group_free);

        
        $isPost = $this->request->is('post');
// Se é um POST e recebemos dados do formulário
        if ($isPost && !empty($this->request->data)) {
            // Tenta salvar os dados da inscrição
            if ($this->Palestra->save($this->request->data)) {
                // Registro inserido com sucesso!
                $this->redirect(array('controller' => 'pages', 'action' => 'obrigado'));
            } else {
                //$this->Session->setflash('<span class=erro_message>Falha ao cadastrar conteudo (artigo), volte e tente novamente!</span>');

            }
        }
    }


}