<!DOCTYPE html>
<?php 
$path_root="../../../";
$path_page="../../";
$path_menu="../";
?>
<html lang="pt_BR">
<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="text/html; charset="utf-8">
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
  <link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
  <link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />    
  <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>     
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <script src="https://unpkg.com/elm-pep@1.0.6/dist/elm-pep.js"></script>
    <!-- The lines below are only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v3/polyfill.min.js?features=fetch,requestAnimationFrame,Element.prototype.classList,TextDecoder"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/3.18.3/minified.js"></script>
    <style>
      .map {
        width: 100%;
        height:400px;
      }
    </style>
</head>
<body class="hold-transition sidebar-mini">
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
            <!--SETA-->
            <p style="margin-left: 20px;display:'block'" id="setaD">
              <a data-toggle="collapse"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <button type="button" class="btn btn-secondary" id="seta"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fa fa-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"></path></svg>
              </button>
              </a>
              &nbsp;&nbsp;FILTROS
            </p>
            <!--FIM SETA-->
            <!--FILTROS-->
            <div class="collapse" id="collapseExample">
                  <div class="row">
                      <div class="col-sm-6">
                      <div class="card" style="margin-top: 30px;margin-left: 20px;">
                        <div class="card-body">
                          <div class="box-body">    
                            <div class="form-group">
                                <label for="procedimento">Procedimento</label>
                                <input  type="text" class="form-control" id="procedimento" placeholder="Digite o procedimento">
                            </div>
                            <div class="form-group">
                                <label for="setor">Unidade apoiada</label>
                                <select  onchange="mudaCombo(this)"id="setor" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">GAECO CENTRAL</option>
                                  <option value="2">CAOET</option>
                                  <option value="3">CEAT</option>
                                  <option value="3">GCOC-R11 (Montes Claros/MG)</option>
                                </select>  
                            </div>
                            <div class="form-group">
                              <label for="setor" id="alvo">Alvo</label>
                              <input type="text" class="form-control" id="alvo" placeholder="Digite o audio">
                            </div>
                            <div class="form-group">
                              <label for="setor" id="CMT">CMT Gru PM</label>
                              <input  type="text" class="form-control" id="CMT" placeholder="Identificador da evidência">
                            </div>
                            <div class="form-group">
                            <button class="btn btn-primary" style="visibility:hidden">
                              Pesquisar
                            </button>
                            </div>
                          </div><!--fim card box-->
                        </div><!--fim card body-->
                      </div><!--fim card-->
         
                      </div>
                      <div class="col-sm-6">
                      <div class="card" style="margin-top: 30px;margin-left: 20px;">
                        <div class="card-body">
                          <div class="box-body">    
                            <div class="form-group">
                                <label for="operacao">Operação</label>
                                <select  onchange="funcao(this)" id="operacao" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">Operação Ouro negro</option>
                                  <option value="2">Operação esperança</option>
                                  <option value="3">Operação Falcão</option>
                                </select>  
                            </div>
                            <div class="form-group">
                                <label for="setor">Setor Atual</label>
                                <select  onchange="mudaCombo(this)"id="setor" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">GAECO CENTRAL</option>
                                  <option value="2">CAOET</option>
                                  <option value="3">CEAT</option>
                                </select>  
                            </div>
                            <div class="form-group">
                              <label for="setor" id="idEvi">Id Evidência</label>
                              <input type="text" onblur="javascript:escondeId(this)" class="form-control" id="idEvi" placeholder="Identificador da evidência">
                            </div>
                            <div class="form-group">
                              <label for="setor" id="evi">Evidência</label>
                              <input  type="text" class="form-control" id="evi" placeholder="Identificador da evidência">
                            </div>
                            <div class="form-group">
                            <button class="btn btn-primary">
                              Pesquisar
                            </button>
                            </div>
                          </div><!--fim card box-->
                        </div><!--fim card body-->
                      </div><!--fim card-->
              
                      </div>
                  </div>  <!--row-->
            </div>  <!--fim colapse-->
<!-- INICIO GRID -->

<div class="container-fluid" style="margin-left: 20px;">
<h1>Leaflet Example</h1>
      
      <p>Here's a map of the countries I've either lived in or travelled through for a month or more.
      
      <div id="map" style="height: 440px; border: 1px solid #AAA;"></div>
 
      <script type='text/javascript' src='maps/markers.json'></script>
      <script type='text/javascript' src='maps/leaf-demo.js'></script>
</div>
  <!-- FIM GRID -->
    <!--PAGINAÇAO-->
    <nav aria-label="Navegação de página exemplo" style="margin-left: 10px;margin-right: 30px;margin-top: 30px;">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Anterior">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Anterior</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Próximo">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Próximo</span>
          </a>
        </li>
      </ul>
    </nav>
    <!--FIM PAGINAÇAO-->
  </div>
</div>
    
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
  function escondeId(obj){
    let teste=obj.value.trim();
    if(teste=='2376544679-09'){
      document.getElementById('linha2').style.display='none';
      document.getElementById('linha3').style.display='none';
      document.getElementById('linha4').style.display='none';
      document.getElementById('linha5').style.display='none';
      document.getElementById('linha6').style.display='none';
      document.getElementById('linha7').style.display='none';
      document.getElementById('linha8').style.display='none';
    }
  }
  </script>
    <script type='text/javascript' src='maps/markers.json'></script>
    <script type='text/javascript' src='maps/leaf-demo.js'></script>
   </body>

        <!-- Main Footer -->

        <footer class="main-footer">
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
          All rights reserved. 2376544679-09
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0 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
          </div>
        </footer>

  </body>
  </html>




