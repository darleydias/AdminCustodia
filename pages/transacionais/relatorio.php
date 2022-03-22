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

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" style="margin-top: 50px;">
    <?php include($path_menu."include/notificacoes.php");?>
      <!-- Main Sidebar Container -->
    <?php include($path_menu."include/menu.php");?>
      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"style>
        <!--SETA-->
        <p style="margin-left: 20px;display:'block'" id="setaD">
          <a data-toggle="collapse"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <button type="button" onclick="muda(this)" class="btn btn-secondary" id="seta"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fa fa-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"></path></svg>
          </button>
          </a>
          &nbsp;&nbsp;FILTROS
      </p>
      <!--FIM SETA-->
      <!--FILTROS-->
        <div class="collapse" id="collapseExample">
          <div class="card" style="margin-top: 30px;margin-left: 20px;">
              <div class="card-body">
                <div class="box-body">    
                  <div class="form-group">
                      <label for="operacao">Operação</label>
                      <select  onchange="mudaCombo(this)"id="operacao" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">selecione</option>
                        <option value="1">Operação Ouro negro</option>
                        <option value="2">Operação esperança</option>
                        <option value="3">Operação Falcão</option>
                      </select>  
                  </div>
                  <div class="form-group">
                      <label for="setor">Setor</label>
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
              </div>
            </div>
          </div>
        </div>
    <!--FIM FILTROS-->
<!-- INICIO GRID -->
<div class="container-fluid" style="margin-left: 20px;">
          <div class="row" style="border-top-left-radius: 0.5em 0.5em;border-top-right-radius: 0.5em 0.5em;font-weight: bold;  margin-right: 5px; color: gainsboro; padding: 15px; background-color: #808080;">
            <div class="col-xs-2" style="width: 10%;">Data Mov.</div>
            <div class="col-xs-2" style="width: 12%;">Operação</div>
            <div class="col-xs-2" style="width: 14%;">Id Evid.</div>
            <div class="col-xs-2" style="width: 16%;">Evidência</div>
            <div class="col-xs-2" style="width: 14%;">Entrega</div>
            <div class="col-xs-2" style="width: 14%;">Recebe</div>
            <div class="col-xs-2" style="width: 10%;">Setor anterior</div>
            <div class="col-xs-2" style="width: 10%;">Setor Atual</div>
          </div>
          <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div>
          <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div> <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div> <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div> <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div> <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div> <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div> <div class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;">
            <div class="col-xs-2" style="width: 10%;">02/02/2022</div>
            <div class="col-xs-2" style="width: 12%;">Operaçao Ouro Negro</div>
            <div class="col-xs-2" style="width: 14%;padding-left: 10px;">Série: 2376544679-09</div>
            <div class="col-xs-2" style="width: 16%;">Computador Intel i5</div>
            <div class="col-xs-2" style="width: 14%;">Antonio Carlos (87659)</div>
            <div class="col-xs-2" style="width: 14%;">Marta Faria (87999)</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
            <div class="col-xs-2" style="width: 10%;">GAECO CENTRAL</div>
          </div>
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
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  function escondeId(obj){
    
    let teste=obj.value.trim();
    if(teste=='2376544679-09'){
      document.getElementById('linha2').style.display='none';
      // document.getElementById('linha3').style.display=none;
      // document.getElementById('linha4').style.display=none;
      // document.getElementById('linha5').style.display=none;
      // document.getElementById('linha6').style.display=none;
      // document.getElementById('linha7').style.display=none;
      // document.getElementById('linha8').style.display=none;
      // document.getElementById('linha9').style.display=none;
    }
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




