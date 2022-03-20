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

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo($path_page)?>plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo($path_page)?>dist/css/adminlte.min.css">
  
  <script>
    function mostrar(estilo){
    if(estilo=='none'){
      document.getElementById('form_proc').style.display="block";
    }else{
      document.getElementById('form_proc').style.display="none";
    }
  }
  </script>
  <script>
  function incluirDados(proc,nrProc,com,mamp,pro,desc){
    let table = document.getElementById('tb_proc');
    let thead = document.getElementById('thead_1');
    let tbody = document.getElementById('tbody_1');
    table.appendChild(thead);
    table.appendChild(tbody);
    let row = document.createElement('tr');
    let row_data = document.createElement('td');
    let row_data_1 = document.createElement('td');
    let row_data_2 = document.createElement('td');
    let row_data_3 = document.createElement('td');
    let row_data_4 = document.createElement('td');
    let row_link = document.createElement('td');
    row_data.innerHTML = proc;
    row_data_1.innerHTML = nrProc;
    row_data_2.innerHTML = com;
    row_data_3.innerHTML = mamp+" - "+pro;
    row_data_4.innerHTML = desc;
    conteudo = "<div class='float-right'><a href='#' ";
    conteudo = conteudo + " onclick=\"this.parentNode.parentNode.parentNode.style.display = 'none'\">"
    conteudo = conteudo + "<i class='fa fa-minus-circle' style='font-size:28px;color:red'></i></a>";
 
    row_link.innerHTML = conteudo;
    row.appendChild(row_data);
    row.appendChild(row_data_1);
    row.appendChild(row_data_2);
    row.appendChild(row_data_3);
    row.appendChild(row_data_4);
    row.appendChild(row_link);
    tbody.appendChild(row);
    document.getElementById('form_proc').style.display='none';
  }
  </script>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div id="app">
<div class="wrapper">
<?php include($path_menu)."include/notificacoes.php"?>
  <!-- Main Sidebar Container -->
<?php include($path_menu."include/menu.php")?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Procedimento</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Início</a></li>
              <li class="breadcrumb-item active">Cadastros</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
                <!--formulário-->  
              <form name="form_proc" id="form_proc" style="display:none">
              <div class="card">
                <div class="card-body">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="responsavel">Tipo de Procedimento</label>
                      <select id="proc" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">selecione</option>
                        <option value="PIC">PIC</option>
                        <option value="PAAF">PAAF</option>
                        <option value="IP">IP</option>
                      </select>  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Número do Procedimento</label>
                      <input type="text" class="form-control" id="nrProc" placeholder="Digite o Número do Procedimento">
                    </div>
                    <div class="form-group">
                      <label for="responsavel">Comarca</label>
                      <select id="com" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">selecione</option>
                        <option value="Belo Horizonte">Belo Horizonte</option>
                        <option value="Betim">Betim</option>
                        <option value="Contagem">Contágem</option>
                      </select>  
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Promotor Responsável</label>
                      <div class="row">
                        <div class="col-sm-2">
                        <input type="text" size="10" class="form-control" id="mamp" placeholder="MAMP/Matrícula" v-model="object.mamp" >
                        </div>
                        <div class="col-sm-10">
                        <input type="text" size="10" class="form-control" id="pro" placeholder="Nome" v-model="object.promotor">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Descrição</label>
                      <input type="text" class="form-control" id="desc" placeholder="Descreva o Procedimento">
                    </div>
                    <div class="form-group">
                       <button type="button" onclick="javascript:incluirDados(document.getElementById('proc').value,document.getElementById('nrProc').value,document.getElementById('com').value,document.getElementById('mamp').value,document.getElementById('pro').value,document.getElementById('desc').value);" class="btn btn-primary">Gravar</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
          <!--fim formulário-->
          <!-- inicio Tabela-->
            <div class="card">
                <div class="card-body">
                    <table id="tb_proc" class="table table-bordered table-hover">
                      <thead id="thead_1">
                      <tr>
                        <th style="border-right-style:hidden">Tipo </th>                       
                        <th style="border-right-style:hidden">Nr de proc.</th>                       
                        <th style="border-right-style:hidden">Comarca</th> 
                        <th style="border-right-style:hidden">Promotor</th>                      
                        <th style="border-right-style:hidden">Descrição</th> 
                        <th><div class="float-right">
                              <a href="#" onclick="javascript:mostrar(document.getElementById('form_proc').style.display);">
                                <i class="fa fas fa-plus-circle fa-2x" style="font-size:28px"></i>
                              </a>
                            </div>
                        </th>
                      </tr>
                      </thead>
                      <tbody id="tbody_1">
                        <tr>
                          <td style="border-right-style:hidden">PIC</td>
                          <td style="border-right-style:hidden">2021-34529</td>
                          <td style="border-right-style:hidden">Belo Horizonte</td>
                          <td style="border-right-style:hidden">29675 - Dr. Rodrigo</td>
                          <td style="border-right-style:hidden">Investigação de crimes contra a ordem econômica</td></td>
                          <td ><div class="float-right"><a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        <tr>
                          <td style="border-right-style:hidden">PAAF</td>
                          <td style="border-right-style:hidden">2022-11378  </td>
                          <td style="border-right-style:hidden">Belo Horizonte</td>
                          <td style="border-right-style:hidden">29345 - Dr. Mauro</td>
                          <td style="border-right-style:hidden">Investigação de Organizacão criminosa que atua com caixa-níquel</td></td>
                          <td ><div class="float-right"><a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
          <!-- fim Tabela-->
         </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard3.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    var app = new Vue({
        el: '#app',
        data : {
          object:{
            promotor : '',
            mamp : '',
          }
            
        }

    });
</script>
</div>
</body>
</html>
