<style>
.square {
    width: 100%;
      min-height: 200px;
    /* = width for a square aspect ratio */
}

</style>



<div class="row">
    <?php
    $i = 0;
    foreach ($produtos as $produto):
        $i++;
    if (($i % 6) == 0) { echo "\n<div class=\"row\">\n\n";}
    ?>
    <div class="col col-sm-2">
<!--
        <?php echo $this->Html->image('/img/produtos/' . $produto['Produto']['codigo'] .'.png', 
	        	array('url' => array('controller' => 'produtos', 'action' => 'view', 'slug' => $produto['Produto']['slug']), 
	        'alt' => $produto['Produto']['name'], 'width' => 150, 'height' => 150, 'class' => 'image')); ?>
-->
	        
	             <?php echo $this->Html->link($this->Html->image('/img/produtos/'.$produto['Produto']['codigo'].'.png'),
                    array('action'=>'view',$produto['Produto']['id']),
                    array('escape'=>false,'class'=>'thumbnail square'));?>
	        
	        
	        
        <br />
        <?php echo $this->Html->link($produto['Produto']['name'], array('controller' => 'produtos', 'action' => 'view', $produto['Produto']['id'])); ?>
        <br />
        R$ <?php echo $produto['Produto']['preco']; ?>
        <br />
        <br />
    </div>
    <?php
    if (($i % 6) == 0) { echo "\n</div>\n\n";}
    endforeach;
    ?>

    <br />
    <br />

</div>
