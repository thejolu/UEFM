<?php $this->beginContent('//layouts/main'); ?>
 <div class="princi">
 
 <div class="conten">
     <?php
    $this->widget(
    'booster.widgets.TbMenu',
    array(
    'type' => 'list',
     'htmlOptions' => array('class' => 'breadcrumb'),
    'items' => $this->menu
    )
    );
 ?>
 <?php echo $content; ?>
 </div>
 </div>
<?php $this->endContent(); ?>


