<!DOCTYPE html>
<?php 
$path_root="../../../";
$path_page="../../";
$path_menu="../";
?>
<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Controle da Cadeia de Custódia</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo($path_page)?>plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo($path_page)?>dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<style type="text/css">
#linha1:hover,#linha2:hover,#linha3:hover,#linha4:hover,#linha5:hover,#linha6:hover,#linha7:hover,#linha8:hover
{ 
z-index:-1;
background-color: rgba(0,0,0,0.1); 
transition: 0.2s;
opacity: 1 ;
}

</style>
</head>
<body class="hold-transition sidebar-mini">
<script>
  function funcao(e){
   var result = e.options[e.selectedIndex].value;
   result = result.trim()

   switch (result) {
      case "1":
        document.getElementById('linha4').style.display='none';
        document.getElementById('linha5').style.display='none';
        document.getElementById('linha6').style.display='none';
        document.getElementById('linha7').style.display='none';
        document.getElementById('linha8').style.display='none';
        break;
      case "2":
        document.getElementById('linha1').style.display='none';
        document.getElementById('linha2').style.display='none';
        document.getElementById('linha3').style.display='none';
        document.getElementById('linha7').style.display='none';
        document.getElementById('linha8').style.display='none';
        break;
      case "3":
        document.getElementById('linha1').style.display='none';
          document.getElementById('linha2').style.display='none';
          document.getElementById('linha4').style.display='none';
          document.getElementById('linha5').style.display='none';
          document.getElementById('linha6').style.display='none';
        break;
      default:
    console.log(`Sorry, we are out of ${expr}.`);
    }
  }

</script>
<div class="wrapper">
<!--MODAL-->
<div class="modal fade" id="modal-lg">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Detalamento da evidência</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<p>
<div class="row">
  <div class="col-sm-2">
</div></div>
  <form name="from_modal" id="form_proc" style="display:block">
      <div class="card">
        <div class="card-body">
            <table id="tb_proc" class="table table-bordered table-hover"  >
              <tbody id="tbodyM_1">
                        <tr id="linha1">
                              <td style="border-right-style:hidden"><b>PAAF MPMG</b> nº 0417.22.003062-7</td>
                        </tr> 
                        <tr id="linha1">
                              <td style="border-right-style:hidden"><b>Processo</b> nº 0549.20.008987-6</td>
                        </tr> 
                        <tr id="linha1">
                              <td style="border-right-style:hidden"><b>Promotor responsãvel pela investigação </b> Dr. Bruno Corcelli</td>
                        </tr>
                        <tr id="linha2">
                              <td style="border-right-style:hidden"><b>Unidade apoiada</b> - COECIBER</td>
                        </tr>     
                        <tr id="linha1">
                              <td style="border-right-style:hidden"><b>Alvo</b>  - José Carlos Pimenta</td>
                        </tr>
                        <tr id="linha2">
                              <td style="border-right-style:hidden"><b>Operação Ouro Negro</b> - Fase I - Ponto 3</td>
                        </tr>     <tr id="linha1">
                              <td style="border-right-style:hidden">Rua apolinário Silva Dutra, 1.257. Bairro Comercio. Ipatinga</td>
                        </tr>
                        <tr id="linha2">
                              <td style="border-right-style:hidden"><b>Data da operação</b> - 16/02/2022</td>
                        </tr>     <tr id="linha1">
                              <td style="border-right-style:hidden"><b>Guarnição policial</b> - 2 Sgt Bueno Lopes</td>
                        </tr>
                        <tr id="linha2">
                              <td style="border-right-style:hidden"><b>Servidor do MP</b> - Carlos Antôno (6709)</td>
                        </tr>     <tr id="linha1">
                              <td style="border-right-style:hidden"><b>REDS-RAT</b> - 2021-045455655-001</td>
                        </tr>
                        <tr id="linha2">
                              <td style="border-right-style:hidden">(01) Microcomputador HP Compag - Nr Sẽrie: 758676489 </td>
                        </tr>     <tr id="linha1">
                              <td style="border-right-style:hidden"><b>Nr. do Lacre</b> - 565432</td>
                        </tr>
                        <tr id="linha2">
                              <td style="border-right-style:hidden"><b>Local de entrega</b> -  Central de Custõdia UCC.</td>
                        </tr>     <tr id="linha1">
                              <td style="border-right-style:hidden"><b>Responsável peo recebimento</b> - Mauro Coelho (67556) </td>
                        </tr>
              </tbody>
            </table>
        </div>
      </div>
  </form>
</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Sair</button>
</div>
</div>
</div>
</div>
<!--fim modal-->
<!--MODAL-->
    <?php include($path_menu."include/notificacoes.php");?>
      <!-- Main Sidebar Container -->
    <?php include($path_menu."include/menu.php");?>
      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"style>

    
<!-- INICIO GRID -->
<div class="container-fluid" style="margin-left: 20px;margin-top:30px" id="tabela">
          <div class="row" style="border-top-left-radius: 0.5em 0.5em;border-top-right-radius: 0.5em 0.5em;font-weight: bold;  margin-right: 5px; color: gainsboro; padding: 15px; background-color: #808080;">
            <div class="col-xs-2" style="width: 15%;">Operação </div>  
            <div class="col-xs-2" style="width: 8%;">Resp. Invest.</div>
            <div class="col-xs-2" style="width: 8%;">Procedimento</div>
            <div class="col-xs-2" style="width: 9%;">Processo</div>
            <div class="col-xs-2" style="width: 25%;">EviEndereço</div>
            <div class="col-xs-2" style="width: 5%;">Ponto</div>
            <div class="col-xs-2" style="width: 10%;">Local/apreen.</div>
            <div class="col-xs-2" style="width: 20%;">Vestigio</div>
          </div>
          <div onclick="mostrarTabela()" class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 15%;">Operação Ouro Negro</div>    
            <div class="col-xs-2" style="width: 8%;">Dr. Anderson França</div>
            <div class="col-xs-2" style="width: 8%;">PAAF - 6567865-2021</div>
            <div class="col-xs-2" style="width: 9%;padding-left: 10px;">2376544679-09</div>
            <div class="col-xs-2" style="width: 25%;">Rua Guaciana, 397, Bairro Campana, Lavras-MG</div>
            <div class="col-xs-2" style="width: 5%;">07</div>
            <div class="col-xs-2" style="width: 10%;">Escritório sala 01</div>
            <div class="col-xs-2" style="width: 20%;font-weight:bold;">Computador Intel i5</div>
          </div>
          <div onclick="mostrarTabela()"  class="row" id="linha2" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 15%;">Operação Ouro Negro</div>    
            <div class="col-xs-2" style="width: 8%;">Dr. Anderson França</div>
            <div class="col-xs-2" style="width: 8%;">PAAF - 6567865-2021</div>
            <div class="col-xs-2" style="width: 9%;padding-left: 10px;">2376544679-09</div>
            <div class="col-xs-2" style="width: 25%;">Rua Guaciana, 397, Bairro Campana, Lavras-MG</div>
            <div class="col-xs-2" style="width: 5%;">07</div>
            <div class="col-xs-2" style="width: 10%;">Escritório sala 01</div>
            <div class="col-xs-2" style="width: 20%;font-weight:bold;">HD Externo Barracuda 1 TB</div>
          </div> 
         <div onclick="mostrarTabela()" class="row" onclick="" id="linha3" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 15%;">Operação Ouro Negro</div>    
            <div class="col-xs-2" style="width: 8%;">Dr. Anderson França</div>
            <div class="col-xs-2" style="width: 8%;">PAAF - 6567865-2021</div>
            <div class="col-xs-2" style="width: 9%;padding-left: 10px;">2376544679-09</div>
            <div class="col-xs-2" style="width: 25%;">Rua Guaciana, 397, Bairro Campana, Lavras-MG</div>
            <div class="col-xs-2" style="width: 5%;">07</div>
            <div class="col-xs-2" style="width: 10%;">Escritório sala 01</div>
            <div class="col-xs-2" style="width: 20%;font-weight:bold;">Smartphone Sansumg Galaxy S9</div>
          </div> 
          <div onclick="mostrarTabela()" class="row" id="linha4" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 15%;">Operação Ouro Negro</div>    
            <div class="col-xs-2" style="width: 8%;">Dr. Anderson França</div>
            <div class="col-xs-2" style="width: 8%;">PAAF - 6567865-2021</div>
            <div class="col-xs-2" style="width: 9%;padding-left: 10px;">2376544679-09</div>
            <div class="col-xs-2" style="width: 25%;">Rua Guaciana, 397, Bairro Campana, Lavras-MG</div>
            <div class="col-xs-2" style="width: 5%;">07</div>
            <div class="col-xs-2" style="width: 10%;">Escritório sala 01</div>
            <div class="col-xs-2" style="width: 20%;font-weight:bold;">Computador AMD 367</div>
          </div> 
          <div onclick="mostrarTabela()" class="row" id="linha5" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 15%;">Operação Ouro Negro</div>    
            <div class="col-xs-2" style="width: 8%;">Dr. Anderson França</div>
            <div class="col-xs-2" style="width: 8%;">PAAF - 6567865-2021</div>
            <div class="col-xs-2" style="width: 9%;padding-left: 10px;">2376544679-09</div>
            <div class="col-xs-2" style="width: 25%;">Rua Guaciana, 397, Bairro Campana, Lavras-MG</div>
            <div class="col-xs-2" style="width: 5%;">07</div>
            <div class="col-xs-2" style="width: 10%;">Escritório sala 01</div>
            <div class="col-xs-2" style="width: 20%; font-weight:bold;">Computador 496 DX2 66</div>
          </div> 
    </div>
  <!-- FIM GRID -->
  </div>
</div>

<form name='frm01' id='frm01' action="relatorioMovimentacoesEvidencia.php"></form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  function mostrarTabela(){
      document.getElementById("frm01").submit();
  }
  </script>
        <!-- Main Footer -->

        <footer class="main-footer">
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
          </div>
        </footer>
  </body>
  </html>




