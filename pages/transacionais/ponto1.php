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
  };
  function operacao(){
    var item = document.getElementById('opePesquisa');
	  var value = item.options[item.selectedIndex].value;
    if(value==1)(window.location.href ="http://localhost/AdminCustodia/pages/transacionais/ponto1.php");
    if(value==2)(window.location.href ="http://localhost/AdminCustodia/pages/transacionais/ponto2.php");
    if(value==3)(window.location.href ="http://localhost/AdminCustodia/pages/transacionais/ponto3.php");
  }
  </script>
  <script>
  function incluirDados(ponto,end,comp,mamp,pro){
    let table = document.getElementById('tb_proc');
    let thead = document.getElementById('thead_1');
    let tbody = document.getElementById('tbody_1');
    table.appendChild(thead);
    table.appendChild(tbody);
    let row = document.createElement('tr');
 
    let row_data_1 = document.createElement('td');
    let row_data_2 = document.createElement('td');
    let row_data_3 = document.createElement('td');
    let row_data_4 = document.createElement('td');
    let row_link = document.createElement('td');
  
    row_data_1.innerHTML = ponto;
    row_data_2.innerHTML = end;
    row_data_3.innerHTML = comp;
    row_data_4.innerHTML = mamp+" - "+pro;
    
    conteudo = "<div class='float-right'><a href='#' ";
    conteudo = conteudo + " onclick=\"this.parentNode.parentNode.parentNode.style.display = 'none'\">"
    conteudo = conteudo + "<i class='fa fa-minus-circle' style='font-size:28px;color:red'></i></a>";
 
    row_link.innerHTML = conteudo;

    row.appendChild(row_data_1);
    row.appendChild(row_data_2);
    row.appendChild(row_data_3);
    row.appendChild(row_data_4);
    row.appendChild(row_link);
    tbody.appendChild(row);
    document.getElementById('form_proc').style.display='none';
  }
  function incluirDadosModal(mamp,pro){
    let table = document.getElementById('tb_modal');
    let thead = document.getElementById('theadM_1');
    let tbody = document.getElementById('tbodyM_1');
    table.appendChild(thead);
    table.appendChild(tbody);
    let row = document.createElement('tr');
 
    let row_data_1 = document.createElement('td');
    let row_link = document.createElement('td');
  
    row_data_1.innerHTML = mamp+" - "+pro;
  
    
    conteudo = "<div class='float-right'><a href='#' ";
    conteudo = conteudo + " onclick=\"this.parentNode.parentNode.parentNode.style.display = 'none'\">"
    conteudo = conteudo + "<i class='fa fa-minus-circle' style='font-size:28px;color:red'></i></a>";
 
    row_link.innerHTML = conteudo;

    row.appendChild(row_data_1);
    row.appendChild(row_link);
    tbody.appendChild(row);
    document.getElementById('form_modal').style.display='none';
  }
  </script>
</head>

<?php
$conteudoModal ="<div class=\"row\"><div class=\"col-sm-2\"><input type=\"text\" size=\"10\" class=\"form-control\" id=\"mamp\" placeholder=\"MAMP/Matrícula\" v-model=\"object.mamp\"></div>";
$conteudoModal =$conteudoModal. "<div class=\"col-sm-8\"><input type=\"text\" size=\"10\" class=\"form-control\" id=\"pro\" placeholder=\"Nome\" v-model=\"object.promotor\">";
$conteudoModal =$conteudoModal. "</div><div class=\"col-sm-2\"><button class=\"btn btn-primary\" onclick=\"incluirDadosModal(document.getElementById('mamp').value,document.getElementById('pro').value)\">Gravar</button></div></div>";
$conteudoModal =$conteudoModal. "<form name=\"from_modal\" id=\"form_proc\" style=\"display:block\"><div class=\"card\"><div class=\"card-body\"><div class=\"box-body\">";
$conteudoModal =$conteudoModal. "<table id=\"tb_modal\" class=\"table table-bordered table-hover\">";
$conteudoModal =$conteudoModal. "<thead id=\"theadM_1\"><tr><th style=\"border-right-style:hidden\">Participantes</th>";                       
$conteudoModal =$conteudoModal. "<th><div class=\"float-right\"><a href=\"#\" onclick=\"document.getElementById('grava').style.display='block';\">";
$conteudoModal =$conteudoModal. "<i class=\"fa fas fa-plus-circle fa-2x\" style=\"font-size:28px\"></i></a></div></th></tr>";
$conteudoModal =$conteudoModal. "</thead><tbody id=\"tbodyM_1\">";

$conteudoModal =$conteudoModal. "<tr id=\"linha1\"><td style=\"border-right-style:hidden\">098.345-5 - Cap Bueno Lopes</td><td><div class=float-right><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-lg\">";
$conteudoModal =$conteudoModal. "<a href=\"#\" onclick=\"this.parentNode.parentNode.parentNode.style.display='none'\"><i class=\"fa fa-minus-circle\" style=\"font-size:28px;color:red\"></i></a></div></td></tr>";
$conteudoModal =$conteudoModal. "<tr id=\"linha1\"><td style=\"border-right-style:hidden\">108.345-7 - Sgt Sebastião carlos Lopes</td><td><div class=float-right><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-lg\">";
$conteudoModal =$conteudoModal. "<a href=\"#\" onclick=\"this.parentNode.parentNode.parentNode.style.display='none'\"><i class=\"fa fa-minus-circle\" style=\"font-size:28px;color:red\"></i></a></div></td></tr>";
$conteudoModal =$conteudoModal. "<tr id=\"linha1\"><td style=\"border-right-style:hidden\">098.345-5 - Cap Bueno Lopes</td><td><div class=float-right><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-lg\">";
$conteudoModal =$conteudoModal. "<a href=\"#\" onclick=\"this.parentNode.parentNode.parentNode.style.display='none'\"><i class=\"fa fa-minus-circle\" style=\"font-size:28px;color:red\"></i></a></div></td></tr>";
$conteudoModal =$conteudoModal. "<tr id=\"linha1\"><td style=\"border-right-style:hidden\">098.345-5 - Cap Bueno Lopes</td><td><div class=float-right><a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-lg\">";
$conteudoModal =$conteudoModal. "<a href=\"#\" onclick=\"this.parentNode.parentNode.parentNode.style.display='none'\"><i class=\"fa fa-minus-circle\" style=\"font-size:28px;color:red\"></i></a></div></td></tr>";


$conteudoModal =$conteudoModal. "</tbody></table></div></div></div>";
$conteudoModal =$conteudoModal. "</form>";
$tilteModal="Cadastro de Participantes ";
?>
<body class="hold-transition sidebar-mini">
<?php 
include($path_menu."include/modal.php");
?>
<div class="wrapper">
<?php include($path_menu."include/notificacoes.php");?>
  <!-- Main Sidebar Container -->
<?php include($path_menu."include/menu.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lançar Ponto</h1>
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
                        <label for="responsavel">Operação</label>
                        <select id="ope" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option selected="selected" data-select2-id="3">selecione</option>
                          <option value="Operação Valquíria">Operação Valquíria</option>
                          <option value="Operação falcão">Operação falcão</option>
                          <option value="Operação Mel Amargo">Operação Mel Amargo</option>
                        </select>  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Número do Ponto</label>
                      <input type="text" class="form-control" id="ponto" placeholder="Digite o Número do ponto">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Endereço</label>
                      <textarea class="form-control" id="end"rows="3" placeholder="Digite o endereço" ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Complemento</label>
                      <input type="text" class="form-control" id="comp" placeholder="Digite o complemento">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Responsável</label>
                      `<div class="row">
                        <div class="col-sm-2">
                        <input type="text" size="10" class="form-control" id="mamp" placeholder="MAMP/Matrícula" v-model="object.mamp" >
                        </div>
                        <div class="col-sm-10">
                        <input type="text" size="10" class="form-control" id="pro" placeholder="Nome" v-model="object.promotor">
                        </div>
                      </div>`
                    </div>
                    <div class="form-group">                                                                
                       <button type="button" onclick="javascript:incluirDados(document.getElementById('ponto').value,document.getElementById('end').value,document.getElementById('comp').value,document.getElementById('mamp').value,document.getElementById('pro').value);" class="btn btn-primary">Gravar</button>
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
                        <tr>
                            <td colspan="6">
                                <div class="form-group">
                                  <label for="opePesquisa">Operação</label>
                                    <select onChange="javascript:operacao();" id="opePesquisa" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                      <option >selecione</option>
                                      <option value="1">Operação Valquíria</option>
                                      <option value="2">Operação Coiote</option>
                                      <option value="3">Operação Mel Ruim</option>
                                    </select>  
                                </div>
                            </td>
                        </tr>  
                    <thead id="thead_1">
                        <tr>                       
                            <th style="border-right-style:hidden">Nr ponto</th>                       
                            <th style="border-right-style:hidden">Endereço</th> 
                            <th style="border-right-style:hidden">Complemento</th>                      
                            <th style="border-right-style:hidden">Responsável</th> 
                            <th>
                              <div class="float-right">
                                  <a href="#" onclick="javascript:mostrar(document.getElementById('form_proc').style.display);">
                                    <i class="fa fas fa-plus-circle fa-2x" style="font-size:28px"></i>
                                  </a>
                              </div>
                            </th>
                        </tr>
                      </thead>
                      <tbody id="tbody_1">
                        
                        <tr id="linha3">
                          <td style="border-right-style:hidden">01</td>
                          <td style="border-right-style:hidden">Rua Indumeia, 2.345 - Bairro Cafarnaum - Pedra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório no segundo Andar</td>
                          <td style="border-right-style:hidden">8785 - Dr. Cleverson</td>
                          <td ><div class="float-right">
                          <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a> &nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        <tr id="linha4">
                          <td style="border-right-style:hidden">02</td>
                          <td style="border-right-style:hidden">Av Galileia, 453 - Bairro Decápolis - Pedra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório no primeiro Andar</td>
                          <td style="border-right-style:hidden">099.256-0 - Cabo Cleines Marcio</td>
                          <td >
                            <div class="float-right">
                            <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        <tr id="linha5">
                          <td style="border-right-style:hidden">03</td>
                          <td style="border-right-style:hidden">Rua Massada, 222 - Bairro Jordão - Pedra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório no segundo Andar</td>
                          <td style="border-right-style:hidden">8785 - Dr. Cleverson</td>
                          <td ><div class="float-right">
                          <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div><!--Fim card body-->
              </div><!--Fim card-->
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

</div>


</body>
</html>
