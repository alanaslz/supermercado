<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/');?>
            </li>
            <li class="active"><?php echo $produto['Produto']['name'];?>
            </li>
        </ol>
    </div>
</div>
 
<div class="row">
    <div class="col-lg-4 col-md-4">
         <?php echo $this->Html->link($this->Html->image('/img/produtos/'.$produto['Produto']['codigo'].'.png'),
                    array('action'=>'view',$produto['Produto']['id']),
                    array('escape'=>false,'class'=>'thumbnail square'));?>
       
       
    </div>
 
    <div class="col-lg-8 col-md-8">
        <h1>
            <?php echo $produto['Produto']['name'];?>
        </h1>
        <h2>
            Preço: R$
            <?php echo $produto['Produto']['preco'];?>
        </h2>
        <p>
	        
            <?php echo $this->Form->create('ProdutosVenda',array('role'=>'form','url'=>array('controller'=>'caixa','action'=>'index')));?>
            <?php echo $this->Form->hidden('produto_id',array('value'=>$produto['Produto']['id']))?>
            <?php echo $this->Form->hidden('qtd',array('value'=>1))?>
            <?php echo $this->Form->submit('Adicionar ao Carrinho',array('class'=>'btn-success btn btn-lg'));?>
            <?php echo $this->Form->end();?>
        </p>
    </div>
</div>


<script>
$(document).ready(function(){
    $('#add-form').submit(function(e){
        e.preventDefault();
        var tis = $(this);
        $.post(tis.attr('action'),tis.serialize(),function(data){
            $('#cart-counter').text(data);
        });
    });
});
</script>