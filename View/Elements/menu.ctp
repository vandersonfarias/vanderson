    <nav id="menu">
                    <ul>
                        <li><?php echo $this->Html->link('Home', '/'); ?></li>
                        <li><?php echo $this->Html->link('Quem Somos',array('controller' => 'pages', 'action' => 'display', 'quem-somos')); ?></li>
                        <li><?php echo $this->Html->link('Como Chegar',array('controller' => 'pages', 'action' => 'display', 'como-chegar')); ?></li>
                        <li><?php echo $this->Html->link('Inscreva-se',array('controller' => 'inscricoes', 'action' => 'inscrever')); ?></li>
                        <li><?php echo $this->Html->link('E-mails cadastrados',array('controller' => 'inscricoes', 'action' => 'veremails')); ?></li>
                        <li><?php echo $this->Html->link('Cadastrar Palestras',array('controller' => 'palestras', 'action' => 'inserir')); ?></li>
                        <li><?php echo $this->Html->link('Cadastrar Palestrantes',array('controller' => 'palestrantes', 'action' => 'inserir')); ?></li>
                    </ul>
                </nav>