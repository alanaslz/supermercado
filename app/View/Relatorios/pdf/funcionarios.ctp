
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>
/* Style definitions for pdfs */

/**********************************************************************/
/* Default style definitions
/**********************************************************************/

/* General
-----------------------------------------------------------------------*/
body
{
    color: #000033;
    font-family: "arial", "sans-serif";
    margin: 0px;
    padding-top: 0px;
    font-size: 9px;
}

/*
.table_collapse {
    border-collapse: collapse;
}

.table_semborda {
    border-collapse: collapse;
     border: none;
}
*/

table {]
	
table, tr, td
{
    width: 100%;
    min-width: 100%;
    margin-top: 3px;
    margin-bottom: 3px;
    border: 1px solid;
}

.bold
{
    font-weight: bold;
}


.theader
{
    font-size: 8px;
   
}

.tcenter
{
    text-align: center;
   
}

.tleft
{
    text-align: left;
   
}
 
 .tright
{
    text-align: right;
   
}


.h60
{
    height:60px;
    vertical-align: top;
   
}

.rtotal
{
    background-color:  #d1d3d4;
    border-color: #d1d3d4;
    border: 2px solid;
   
}

</style>
</head>
<body class="page">

<script type="text/php">

if (isset($pdf) ) {

  $font = Font_Metrics::get_font("sans-serif");
  $size = 6;
  $color = array(0,0,0);
  $text_height = Font_Metrics::get_font_height($font, $size);

  $foot = $pdf->open_object();
  
  $w = $pdf->get_width();
  $h = $pdf->get_height();

  // Draw a line along the bottom
  $y = $h - 2.5 * $text_height - 24;
  $pdf->line(16, $y, $w - 16, $y, array(0,0,0), 1);

  $y += $text_height;

  // Add the job number
  $text = "Job: 404-135";
  $pdf->text(16, $y, $text, $font, $size, $color);

  $pdf->close_object();
  $pdf->add_object($foot, "all");

  
  if ( !"2004-11-18 17:19:38" ) {
    // Add an initals box if the document has not already been approved
  
    global $initials;
    $initials = $pdf->open_object();
    
    $text = "Initials:";
    $width = Font_Metrics::get_text_width($text, $font, $size);
    $pdf->text($w - 16 - $width - 38, $y, $text, $font, $size, $color);
    $pdf->rectangle($w - 16 - 36, $y - 2, 36, $text_height + 4, array(0.5,0.5,0.5), 0.5);
    
        $pdf->close_object();
    $pdf->add_object($initials);

  } else {

    // Mark the document as a duplicate if has been approved
    $watermark = $pdf->open_object();
    $pdf->text(110, $h - 240, "DUPLICATE", Font_Metrics::get_font("verdana", "bold"),
               110, array(0.5, 0.5, 0.5), 0, 0, -52);

    $text = "Approved: 2004-11-18";
    $width = Font_Metrics::get_text_width($text, $font, $size);
    $pdf->text($w - 16 - $width, $y, $text, $font, $size, $color);
    
    $pdf->close_object();
    $pdf->add_object($watermark, "all");
  }

  $text = "Page {PAGE_NUM} of {PAGE_COUNT}";  
  $width = Font_Metrics::get_text_width("Page 1 of 2", $font, $size);

  $pdf->page_text($w / 2 - $width / 2, $y, $text, $font, $size, $color);
  
}
</script>
 
<?php 
	 
 $time = mktime(date('H')-3, date('i'), date('s')); 
$dataHora = gmdate("d/m/Y H:i:s", $time);
 

?>
 
 

 <table >
            <tr class="">
                <td class="pg-empty-placeholder" style="width: 40px">
                    <img src="img/brasao_40.png" />
                </td>
                <td class="" style="width: 340px">
                   	<?=htmlEntities('Estado do Maranhão');?><br/>
				   	<?=htmlEntities('Secretaria de Estado da Saúde');?><br/>
				   	<?php echo htmlEntities($superintencia['Setor']['name']); ?>&nbsp;<br/>
				   	
				   	
				   	
				   	
                </td>
                <td class="pg-empty-placeholder" style="width: 340px">
                    <b><?=htmlEntities('REQUISIÇÃO DE DIÁRIAS');?></b><br/>
					<?=htmlEntities('Nº');?><br/>                  
					<?=htmlEntities('[NÃO INFORMADO]');?>
                </td>
            </tr>
        </table>
        <table class="" data-pg-collapsed>
            <tr class="">
                <td class="">Nome do Proponente </td>
                <td class=""><?=htmlEntities('Matrícula');?></td>
                <td class=""><?=htmlEntities('Cargo');?><</td>
                <td class=""><?=htmlEntities('Função');?><</td>
            </tr>
            <tr class="">
                <td class="bold"><?php echo htmlEntities($superintencia['Colaborador']['name']); ?>&nbsp;</td>
                <td class="bold"><?php echo htmlEntities($superintencia['Colaborador']['matricula']); ?>&nbsp;</td>
                <td class="bold"><?php echo htmlEntities($superintencia['Colaborador']['cargo']); ?>&nbsp;</td>
                <td class="bold"><?php echo htmlEntities($superintencia['Colaborador']['funcao']); ?>&nbsp;</td>
            </tr>
        </table>
        <table class="table_collapse">
            <tr class="theader bold" data-pg-collapsed>
                <td class="theader bold tcenter"><?=htmlEntities('NOME COMPLETO DE BENEFICIÁRIO');?></td>
                <td class="tcenter"><?=htmlEntities('CARGO');?></td>
                <td class="tcenter"><?=htmlEntities('MATRÍCULA');?></td>
                <td class="tcenter"><?=htmlEntities('CPF');?></td>
                <td class="tcenter"><?=htmlEntities('RG');?></td>
                <td class="tcenter"><?=htmlEntities('AGÊNCIA');?></td>
                <td class="tcenter"><?=htmlEntities('CONTA');?></td>
                <td class="tcenter"><?=htmlEntities('BANCO');?></td>
                <td class="tcenter"><?=htmlEntities('VALOR DIÁRIA (UNITÁRIO)');?></td>
                <td class="tcenter"><?=htmlEntities('QTDE');?></td>
                <td class="tcenter"><?=htmlEntities('VALOR DIÁRIA (TOTAL)');?></td>
            </tr>
            
              <?php    if(!empty($diarias)) { 	
					
					$total = 0;
					foreach ($diarias as $diaria):
				
				if ($diaria['Colaborador']['vinculo_id'] == 1) {
				
				?>
				
				
			<tr class="" data-pg-collapsed>
			
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['name']); ?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['cargo']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['matricula']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['cpf']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['rg']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['agencia']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['conta']);?>&nbsp;</td>
			     <td class="tcenter"><?php if ($diaria['Colaborador']['banco_id'] != null) { echo htmlEntities($bancos[$diaria['Colaborador']['banco_id']]);}?>&nbsp;</td>
			     <td class="tcenter"><?php echo number_format($diaria['Diaria']['valor'], 2, ',', '.');?>&nbsp;</td>
			     <td class="tcenter"><?php echo $diaria['Diaria']['quantidade'];?>&nbsp;</td>
			    <td class="tcenter"><?php echo number_format($diaria['Diaria']['valor'] * $diaria['Diaria']['quantidade'], 2, ',', '.'); ?>&nbsp;
			</tr>
			
			<?php  $total += $diaria['Diaria']['quantidade']*$diaria['Diaria']['valor'];
				} 	endforeach; ?>
			<?	} ?>
						 		
			 
			
			
			<tr class="rtotal" data-pg-collapsed>
			    <td colspan="10" class="tright">TOTAL&nbsp;&nbsp;&nbsp;</td>
			    <td class="tcenter"><? echo number_format($total, 2, ',', '.')?></td>
			    
			</tr>
			
			

        </table>
        <table class="">
            <tr class="theader bold" data-pg-collapsed>
                <td class=""><?=htmlEntities('QUANTIDADE DE DIÁRIAS / PESSOA:');?></td>
                <td class=""><?=htmlEntities('PERÍODO DE AFASTAMENTO: ');?></td>
            </tr>
            <tr class="" data-pg-collapsed>
                <td class=""> VER CAMPO QTDE NA TABELA ACIMA </td>
                <td class="">De: <?php echo h($this->Time->format($viagem['Viagem']['dt_inicio'], '%d/%m/%Y')); ?> a <?php echo h($this->Time->format($viagem['Viagem']['dt_fim'], '%d/%m/%Y')); ?></td>
            </tr>
        </table>
        
        <table class="">
            <tr class="theader bold" data-pg-collapsed>
                <td class=""><?=htmlEntities('OBJETIVO DO SERVIÇO A SER REALIZADO(PROGRAMAÇÃO DETALHADA DA VIAGEM):');?></td>
                             </tr>
            <tr class="" data-pg-collapsed>
                 
                <td class=""><?php echo htmlEntities($viagem['Viagem']['objetivo']);?>&nbsp;
</td>
            </tr>
        </table>
 
		<table class="">
            <tr class="theader bold" data-pg-collapsed>
                <td class=""><?=htmlEntities('LOCAL ONDE O(S) SERVIÇO(S) SERÁ(ÃO) REALIZADOS:');?></td>
                <td class=""><?=htmlEntities('DADOS DO EMPENHO: ');?></td>
            </tr>
            <tr class="" data-pg-collapsed>
                <td class=""> 
	                 <?php foreach ($viagem['Municipio'] as $cidade): ?>
							 <?php echo htmlEntities($cidade['name']); ?>; <?php endforeach; ?>
								           
                
                
                
                </td>
                <td class=""><?php echo htmlEntities($viagem['Viagem']['empenho']);?>&nbsp;</td>
            </tr>
        </table>
		<table class="table_collapse">
            <tr class="theader bold" data-pg-collapsed>
                <td class="h60"><?=htmlEntities('Assinatura do Propenente (com carimbo)');?></td>
                <td class="h60"><?=htmlEntities('Data');?></td>
                <td class="h60"><?=htmlEntities('Autorização do Gestor da Área (assinatura com carimbo)');?></td>
                <td class="h60"><?=htmlEntities('Data');?></td>
            </tr>
             
            <tr>
	            <td colspan="4" style="text-align: center" class="bold"> 
		            <br/>
		            <?=htmlEntities(' Autorizo o Pagamento da(s) Diária(s):');?>  
		        
		           <p> ____________________________________________________ <br/> 
		              ASSINATURA DO ORDENADOR DE DESPESAS (C/CARIMBO)</p>
		            <p>DATA: ____/_____/_______</p>
	            </td>
            </tr>
        </table>

 <div style="font-size: 0.8em">
   
</div>
</body>
</html>






 
