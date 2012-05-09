<?php
$cakeDescription = __d('cake_dev', 'So Eventos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('soeventos');
            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
            <link href='http://fonts.googleapis.com/css?family=Lobster+Two:700italic' rel='stylesheet' type='text/css'>
        </head>
        <body>
            <div id="container">
                <div id="header">

                </div>



            <?php echo $this->element('menu', array('perfil' => 'normal'), array('cache' => true)) ?>


            <div id="content">
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>


            <footer id="footer">
                <p />

                <?php
                echo $this->Html->link(
                        $this->Html->image('face.png',
                                array('class' => 'left', 'alt' => '', 'border' => '0')), 'http://www.facebook.com/vandersonsfarias',
                        array('target' => '_blank', 'escape' => false)
                );
                ?>
                <br />

                <?php
                echo $this->Html->link($this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
                        'http://www.cakephp.org/',
                        array('target' => '_blank', 'escape' => false)
                );
                ?>
            </footer>

        </div>

        <?php //echo $this->element('sql_dump'); ?>
<?php //echo $this->element('sql_dump');   ?>
    </body>
</html>
