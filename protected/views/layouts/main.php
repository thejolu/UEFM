<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
 <meta charset="<?php echo Yii::app()->charset;?>">
</head>
<body>
<header>
            
        </header>
    <div id="principal">
        
        
        
	<div id="mainmenu">
                    <ul ><a href="/UEFM/index.php?r=site/index">Inicio</a></ul>
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Estudiantes', 'url'=>array('/site/index'),'items' => array(
                            array(
                                'label' => 'Prueba',
                                'url' => array('/site/contact')
                            ),array(
                                'label' => 'Prueba2',
                                'url' => array('/site/index')))),
				array('label'=>'Empresas', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Ubicación', 'url'=>array('/site/contact')),
                            			array('label'=>'Usuarios', 'url'=>array('/site/contact')),
                            
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
                 
            ?>
                
	</div><!-- mainmenu -->
    
        <div id="contenido">


 <?php echo $content; ?>
            </div>
        </div>
 <hr>
 
 <footer class="footer">
<?php
$this->widget('booster.widgets.TbNavbar', array(
	'brand' => '<small>Copyright &copy; 2014 by Grupo A. All Rights Reserved</small>',
	'fixed' => 'bottom',
        
));
?>
 </footer>
 

</body>
</html>

<script type="text/javascript">
   
	$(function() {
	
	    var menu_ul = $('#mainmenu > ul > li > ul'),
	           menu_a  = $('#mainmenu > ul > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	})
</script>