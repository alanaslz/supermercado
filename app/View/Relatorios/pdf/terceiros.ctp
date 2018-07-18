
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

table {
	border-collapse: collapse;
}
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

if ( isset($pdf) ) {

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
 

<!--
 <table class="" data-pg-collapsed>
            <tr class="">
-->
                <div class="pg-empty-placeholder">
                    
                </div>
                <div class="tcenter">
	                <img src="img/brasao_40.png" /> <br/>
                   	<?=htmlEntities('Estado do Maranhão');?><br/>
				   	<?=htmlEntities('Secretaria de Estado da Saúde');?><br/>
				   	<?=htmlEntities('SUPERINTENDÊNCIA DE EPIDEMIOLOGIA E CONTROLE DE DOENÇAS');?><br/>
                </div>
<!--
               
            </tr>
        </table>
-->
    
        <table class="">
            <tr class="theader bold tcenter" data-pg-collapsed>
                <td class="theader bold"><?=htmlEntities('NOME');?></td>
                <td class=""><?=htmlEntities('CPF');?></td>
                <td class=""><?=htmlEntities('BANCO');?></td>
                <td class=""><?=htmlEntities('AGÊNCIA');?></td>
                <td class=""><?=htmlEntities('CONTA CORRENTE');?></td>
                <td class=""><?=htmlEntities('V. UNIT.(R$)');?></td>
                <td class=""><?=htmlEntities('QUANT. DIÁRIAS');?></td>
                <td class=""><?=htmlEntities('VALOR TOTAL (R$)');?></td>
            </tr>
            
        <?php    if(!empty($diarias)) { 	
					
					$total = 0;
					foreach ($diarias as $diaria):
					
					if ($diaria['Colaborador']['vinculo_id'] != 1) {
						
				?>
					
					
            
            
			<tr class="" data-pg-collapsed>
			    <td class=""><?php echo htmlEntities($diaria['Colaborador']['name']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['cpf']);?>&nbsp;</td>
			    <td class="tcenter"><?php if ($diaria['Colaborador']['banco_id'] != null) { echo htmlEntities($bancos[$diaria['Colaborador']['banco_id']]);}?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['agencia']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo htmlEntities($diaria['Colaborador']['conta']);?>&nbsp;</td>
			    <td class="tcenter"><?php echo number_format($diaria['Diaria']['valor'], 2, ',', '.');?>&nbsp;</td>
			     <td class="tcenter"><?php echo $diaria['Diaria']['quantidade'];?>&nbsp;</td>
			    <td class="tcenter"><?php echo number_format($diaria['Diaria']['valor'] * $diaria['Diaria']['quantidade'], 2, ',', '.'); ?>&nbsp;
			    
			    
			    </td>
			</tr>
						 	
						 	
						 		<?php 
							 		
							 		$total += $diaria['Diaria']['quantidade']*$diaria['Diaria']['valor'];
							 		} endforeach; ?>
						 	
						 		<?	} ?>
						 		
						 				
			<tr class="rtotal" data-pg-collapsed>
			    <td colspan="7" class="tright">TOTAL&nbsp;&nbsp;&nbsp;</td>
			    <td class="tcenter"><? echo number_format($total, 2, ',', '.')?></td>
			    
			</tr>
			

        </table>
          
          
          
          
          
        
        
        
        
 <div style="font-size: 0.8em">
   
</div>
</body>
</html>






 
