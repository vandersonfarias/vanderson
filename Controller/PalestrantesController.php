<?php

class PalestrantesController extends AppController {

    public $uses = array('Palestrante');


    public function inserir() {
        $isPost = $this->request->is('post');
// Se é um POST e recebemos dados do formulário
        if ($isPost && !empty($this->request->data)) {
            // Tenta salvar os dados da inscrição
            if ($this->Palestrante->save($this->request->data)) {
                // Registro inserido com sucesso!
                $this->redirect(array('controller' => 'pages', 'action' => 'obrigado'));
            } else {
                //$this->Session->setflash('<span class=erro_message>Falha ao cadastrar conteudo (artigo), volte e tente novamente!</span>');

            }
        }
    }


}