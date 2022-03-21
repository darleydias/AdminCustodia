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
    var operacao="";
    function mostrar(estilo){
    if(estilo=='none'){
      document.getElementById('form_proc').style.display="block";
    }else{
      document.getElementById('form_proc').style.display="none";
    }
  }
  function incluirDados(mamp,nome,ponto){
    let table = document.getElementById('tb_proc');
    let thead = document.getElementById('thead_1');
    let tbody = document.getElementById('tbody_1');
    table.appendChild(thead);
    table.appendChild(tbody);
    let row = document.createElement('tr');
    let row_data = document.createElement('td');
    let row_data_1 = document.createElement('td');
    let row_data_2 = document.createElement('td');
    let row_link = document.createElement('td');
    row_data.innerHTML = operacao;
    row_data_1.innerHTML = ponto;
    row_data_2.innerHTML = mamp+" - "+nome;
    conteudo = "<div class='float-right'><a href='#' ";
    conteudo = conteudo + " onclick=\"this.parentNode.parentNode.parentNode.style.display = 'none'\">"
    conteudo = conteudo + "<i class='fa fa-minus-circle' style='font-size:28px;color:red'></i></a>";
    console.log(conteudo);
    row_link.innerHTML = conteudo;
    row.appendChild(row_data);
    row.appendChild(row_data_1);
    row.appendChild(row_data_2);
    row.appendChild(row_link);
    tbody.appendChild(row);
    document.getElementById('form_proc').style.display='none'; 
  };
  function mudaCombo(obj){
    var value = obj.options[obj.selectedIndex].value;
    if(value==1|value==2|value==3){
      document.getElementById('tb_partic').style.display="block";
      if(value==1){operacao="Operação Valquíria"};
      if(value==2){operacao="Operação falcão"};
      if(value==3){operacao="Operação Mel Amargo"};
      document.getElementById("op01").value=operacao;
      document.getElementById("op02").value=operacao;
      document.getElementById("op03").value=operacao;
    }
  };
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
<div class="wrapper">
  <?php include($path_menu)."include/notificacoes.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include($path_menu."include/menu.php")?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Participantes</h1>
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
          <!--PESQUISA-->
          <div class="card">
                <div class="card-body">
                  <div class="box-body">
                  <div class="form-group">
                        <label for="responsavel">Operação</label>
                        <select  onchange="mudaCombo(this)"id="ope" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option selected="selected" data-select2-id="3">selecione</option>
                          <option value="1">Operação Valquíria</option>
                          <option value="2">Operação falcão</option>
                          <option value="3">Operação Mel Amargo</option>
                        </select>  
                  </div>
                 <div class="card-body" id="cardPonto" style="display:none">
                    <h5 class="card-title"><div id='nrPonto'></div></h5>
                    <p class="card-text" id="text"></p>
                  </div>
                </div>
                </div>
              </div>
              <!--FIM PESQUISA-->
    <!-- Main content -->
    <div class="content ">
      <div class="container-fluid bg-light">
        <div class="row">
          <div class="col-lg-12">
          <!--formulário-->  
          <form name="form_proc" id="form_proc" style="display:none">
              <div class="card">
                <div class="card-body" id="form_ponto" >
                  <div class="box-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-2">
                          <label for="mamp">MAMP/Matrícula</label>
                          <input type="text" class="form-control" id="mamp" placeholder="Digite o MAMP o Matrícula">
                        </div>
                        <div class="col-lg-8">
                          <label for="nome">Nome</label>
                          <input type="text" class="form-control" id="nome" placeholder="Digite o nome do participante">
                        </div>
                        <div class="col-lg-2">
                          <label for="ponto">Ponto</label>
                          <input type="text" class="form-control" id="ponto" placeholder="Informe o ponto">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                       <button type="button" onclick="javascript:incluirDados(document.getElementById('mamp').value,document.getElementById('nome').value,document.getElementById('ponto').value)" class="btn btn-primary">Gravar</button>
                    </div>
                  </div>
                </div>
              </div>
          </form>
          <!--fim formulário-->
          <!--Tablela-->
  
          <div class="card" style="display:none" id="tb_partic">
            <div class="card-body">
                  <table  class="table table-bordered table-hover" id="tb_proc">
                    <thead id="thead_1">
                      <tr>
                        <th>Operação</th><th>Ponto</th><th>Nome</th><th></th>
                          <div class="float-right"><a href="javascript:mostrar(document.getElementById('form_proc').style.display);"><i class="fa fas fa-plus-circle fa-2x" style="font-size:28px"></i></a></div>
                        </th>                                                                                                                                     
                      </tr>
                    </thead>
                      <tbody id="tbody_1">
                        <tr><td><input type="text" id="op01" style="border: 0 none;"></td><td style="border-right-style:hidden">Ponto 01 </td><td style="border-right-style:hidden">125.345-9 - Cap Antônio Almeida  </td><td><div class="float-right"><a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td></tr>
                        <tr><td><input type="text" id="op02" style="border: 0 none;"></td><td style="border-right-style:hidden">Ponto 02 </td><td style="border-right-style:hidden">127.657-0 - Ten Elvécio Magalhaes</td><td><div class="float-right"><a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td></tr>
                        <tr><td><input type="text" id="op03" style="border: 0 none;"></td><td style="border-right-style:hidden">Ponto 03 </td><td style="border-right-style:hidden">097.634-1 - Ten Glaucio Matrera</td><td><div class="float-right"><a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td></tr>
                      </tbody>
          <!--fim tabela-->
                  </table>
            </div>
          </div>
            <!-- fim col-lg-12 -->
          </div>
          <!-- row -->
         </div>
        <!-- content fluid -->
        </div>
      <!-- content -->
      </div>
    <!-- /.content-wrapper -->
</div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="http://cadeiaCustodia.mp.br">Cadeia Custódia</a>.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> 1.0
    </div>
  </footer>
   <!-- fim  wrapper -->
</div>
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
</body>
</html>
