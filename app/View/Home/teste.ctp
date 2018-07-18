<div class="row">
	<div class="municipios  col-md-10 col-md-offset-1">
		<div class="box box-solid">
			<div class="box-header with-border">
            	<h3 class="box-title"><?php echo __('Adicionar Municipio'); ?></h3>
				<div class="box-tools">
                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              	</div>
            </div>
            <div class="box-body">
	           			<?php echo $this->Form->create('Municipio', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('name', array('class' => 'form-control',  'label'=>'Nome',  'placeholder' => __('Nome')));?>
				</div>
			 
<hr/>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submeter'), array('class' => 'btn btn-primary','div'=>false)); ?>
				</div>

			<?php echo $this->Form->end() ?>

	            
            </div>
		</div>
	</div>
</div>
        
 
 
      <div class="row">
          
          <div class="col-md-6">
                  <div class="form-group">
                    <label>Multiple</label>
                    <select class="form-control select2" multiple="multiple" data-placeholder="Selecione os estados" style="width: 100%;">
                      <option>Açailândia</option>
<option>Bom Jesus das Selvas</option>
<option>Buriticupu</option>
<option>Cidelândia</option>
<option>Itinga do Maranhão</option>
<option>São Francisco do Brejão</option>
<option>São Pedro da Água Branca</option>
<option>Vila Nova dos Martírios</option>
<option>Altamira do Maranhão</option>
<option>Bacabal</option>
<option>Bom Lugar</option>
<option>Brejo de Areia</option>
<option>Conceição do Lago-Açu</option>
<option>Lago Verde</option>
<option>Marajá do Sena</option>
<option>Olho d'Água das Cunhãs</option>
<option>Paulo Ramos</option>
<option>São Luís Gonzaga do Maranhão</option>
<option>Vitorino Freire</option>
<option>Alto Parnaíba</option>
<option>Balsas</option>
<option>Carolina</option>
<option>Feira Nova do Maranhão</option>
<option>Formosa da Serra Negra</option>
<option>Fortaleza dos Nogueiras</option>
<option>Loreto</option>
<option>Nova Colinas</option>
<option>Riachão</option>
<option>Sambaíba</option>
<option>São Félix de Balsas</option>
<option>São Pedro dos Crentes</option>
<option>São Raimundo das Mangabeiras</option>
<option>Tasso Fragoso</option>
<option>Arame</option>
<option>Barra do Corda</option>
<option>Fernando Falcão</option>
<option>Grajaú</option>
<option>Itaipava do Grajaú</option>
<option>Jenipapo dos Vieiras</option>
<option>Sítio Novo</option>
<option>Tuntum</option>
<option>Afonso Cunha</option>
<option>Aldeias Altas</option>
<option>Caxias</option>
<option>Coelho Neto</option>
<option>Duque Bacelar</option>
<option>São João do Soter</option>
<option>Água Doce do Maranhão</option>
<option>Anapurus</option>
<option>Araioses</option>
<option>Brejo</option>
<option>Buriti</option>
<option>Chapadinha</option>
<option>Magalhães de Almeida</option>
<option>Mata Roma</option>
<option>Milagres do Maranhão</option>
<option>Paulino Neves</option>
<option>Santa Quitéria do Maranhão</option>
<option>Santana do Maranhão</option>
<option>São Bernardo</option>
<option>Tutóia</option>
<option>Alto Alegre do Maranhão</option>
<option>Codó</option>
<option>Coroatá</option>
<option>Peritoró</option>
<option>São Mateus do Maranhão</option>
<option>Timbiras</option>
<option>Amarante do Maranhão</option>
<option>Buritirana</option>
<option>Campestre do Maranhão</option>
<option>Davinópolis</option>
<option>Estreito</option>
<option>Governador Edison Lobão</option>
<option>Imperatriz</option>
<option>João Lisboa</option>
<option>Lajeado Novo</option>
<option>Montes Altos</option>
<option>Porto Franco</option>
<option>Ribamar Fiquene</option>
<option>São João do Paraíso</option>
<option>Senador La Rocque</option>
<option>Anajatuba</option>
<option>Belágua</option>
<option>Cantanhede</option>
<option>Itapecuru Mirim</option>
<option>Matões do Norte</option>
<option>Miranda do Norte</option>
<option>Nina Rodrigues</option>
<option>Pirapemas</option>
<option>Presidente Vargas</option>
<option>São Benedito do Rio Preto</option>
<option>Urbano Santos</option>
<option>Vargem Grande</option>
<option>Bernardo do Mearim</option>
<option>Esperantinópolis</option>
<option>Igarapé Grande</option>
<option>Lago da Pedra</option>
<option>Lago do Junco</option>
<option>Lago dos Rodrigues</option>
<option>Lagoa Grande do Maranhão</option>
<option>Lima Campos</option>
<option>Pedreiras</option>
<option>Poção de Pedras</option>
<option>São Raimundo do Doca Bezerra</option>
<option>São Roberto</option>
<option>Trizidela do Vale</option>
<option>Apicum-Açu</option>
<option>Bacuri</option>
<option>Bequimão</option>
<option>Cedral</option>
<option>Central do Maranhão</option>
<option>Cururupu</option>
<option>Guimarães</option>
<option>Mirinzal</option>
<option>Pedro do Rosário</option>
<option>Peri Mirim</option>
<option>Pinheiro</option>
<option>Porto Rico do Maranhão</option>
<option>Presidente Sarney</option>
<option>Santa Helena</option>
<option>Serrano do Maranhão</option>
<option>Turiaçu</option>
<option>Turilândia</option>
<option>Capinzal do Norte</option>
<option>Dom Pedro</option>
<option>Fortuna</option>
<option>Gonçalves Dias</option>
<option>Governador Archer</option>
<option>Governador Eugênio Barros</option>
<option>Governador Luiz Rocha</option>
<option>Graça Aranha</option>
<option>Joselândia</option>
<option>Presidente Dutra</option>
<option>Santa Filomena do Maranhão</option>
<option>Santo Antônio dos Lopes</option>
<option>São Domingos do Maranhão</option>
<option>São José dos Basílios</option>
<option>Senador Alexandre Costa</option>
<option>Axixá</option>
<option>Bacabeira</option>
<option>Barreirinhas</option>
<option>Cachoeira Grande</option>
<option>Humberto de Campos</option>
<option>Icatu</option>
<option>Morros</option>
<option>Presidente Juscelino</option>
<option>Primeira Cruz</option>
<option>Rosário</option>
<option>Santa Rita</option>
<option>Santo Amaro do Maranhão</option>
<option>Alto Alegre do Pindaré</option>
<option>Bela Vista do Maranhão</option>
<option>Bom Jardim</option>
<option>Igarapé do Meio</option>
<option>Monção</option>
<option>Pindaré-Mirim</option>
<option>Pio XII</option>
<option>Santa Inês</option>
<option>Santa Luzia</option>
<option>São João do Carú</option>
<option>Satubinha</option>
<option>Tufilândia</option>
<option>Benedito Leite</option>
<option>Buriti Bravo</option>
<option>Colinas</option>
<option>Jatobá</option>
<option>Mirador</option>
<option>Nova Iorque</option>
<option>Paraibano</option>
<option>Passagem Franca</option>
<option>Pastos Bons</option>
<option>São Domingos do Azeitão</option>
<option>São João dos Patos</option>
<option>Sucupira do Norte</option>
<option>Sucupira do Riachão</option>
<option>Barão de Grajaú</option>
<option>Lagoa do Mato</option>
<option>São Francisco do Maranhão</option>
<option>Alcântara</option>
<option>Paço do Lumiar</option>
<option>Raposa</option>
<option>São José de Ribamar</option>
<option>São Luís</option>
<option>Matões</option>
<option>Parnarama</option>
<option>Timon</option>
<option>Arari</option>
<option>Bacurituba</option>
<option>Cajapió</option>
<option>Cajari</option>
<option>Matinha</option>
<option>Olinda Nova do Maranhão</option>
<option>Palmeirândia</option>
<option>Penalva</option>
<option>São Bento</option>
<option>São João Batista</option>
<option>São Vicente Ferrer</option>
<option>Viana</option>
<option>Vitória do Mearim</option>
<option>Amapá do Maranhão</option>
<option>Araguanã</option>
<option>Boa Vista do Gurupi</option>
<option>Cândido Mendes</option>
<option>Carutapera</option>
<option>Centro do Guilherme</option>
<option>Centro Novo do Maranhão</option>
<option>Godofredo Viana</option>
<option>Governador Newton Bello</option>
<option>Governador Nunes Freire</option>
<option>Junco do Maranhão</option>
<option>Luís Domingues</option>
<option>Maracaçumé</option>
<option>Maranhãozinho</option>
<option>Nova Olinda do Maranhão</option>
<option>Presidente Médici</option>
<option>Santa Luzia do Paruá</option>
<option>Zé Doca</option>
                    </select>
                  </div><!-- /.form-group -->
          </div>

      </div>

       
        
        
<!--

    <script>
      $(function () {
    
     $(".select2").select2();
        
   });
</script>
-->

<script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
/*
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();
        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
*/
      });
    </script> 
