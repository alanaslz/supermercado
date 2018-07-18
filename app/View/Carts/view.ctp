<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/');?>
            </li>
            <li class="active">Cart</li>
        </ol>
    </div>
</div>
 
<?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update')));?>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Produto Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $total=0;?>
                <?php foreach ($products as $produto):?>
                <tr>
                    <td><?php echo $produto['Produto']['name'];?></td>
                    <td>$<?php echo $produto['Produto']['preco'];?>
                    </td>
                    <td><div class="col-xs-3">
                            <?php echo $this->Form->hidden('Produto_id.',array('value'=>$produto['Produto']['id']));?>
                            <?php echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,
                                    'class'=>'form-control input-sm', 'value'=>$produto['Produto']['count']));?>
                        </div></td>
                    <td>R$<?php echo $count*$produto['Produto']['preco']; ?>
                    </td>
                </tr>
                <?php $total = $total + ($count*$produto['Produto']['preco']);?>
                <?php endforeach;?>
 
                <tr class="success">
                    <td colspan=3></td>
                    <td>$<?php echo $total;?>
                    </td>
                </tr>
            </tbody>
        </table>
 
        <p class="text-right">
            <?php echo $this->Form->submit('Update',array('class'=>'btn btn-warning','div'=>false));?>
            <a class="btn btn-success"
                onclick="alert('Implement a payment module for buyer to make a payment.');">CheckOut</a>
        </p>
 
    </div>
</div>
<?php echo $this->Form->end();?>