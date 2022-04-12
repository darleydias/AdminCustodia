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
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  
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

  function incluirDados(proc,fase,oper,rat,mamp,pro){
    let table = document.getElementById('tb_proc');
    let thead = document.getElementById('thead_1');
    let tbody = document.getElementById('tbody_1');
    table.appendChild(thead);
    table.appendChild(tbody);
    let row = document.createElement('tr',);
    let row_data = document.createElement('td');
    let row_data_1 = document.createElement('td');
    let row_data_2 = document.createElement('td');
    let row_data_3 = document.createElement('td');
    let row_data_4 = document.createElement('td');
    let row_data_5 = document.createElement('td');
    let row_link = document.createElement('td');
    

    row_data.innerHTML = proc;
    row_data_1.innerHTML = fase;
    row_data_2.innerHTML = oper;
    row_data_3.innerHTML = rat;
    row_data_4.innerHTML = mamp+" - "+pro;
   

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
<p>
<!--MODAL ORIENTAÇÕES-->
<div class="modal fade" id="modal-lgOrientacoes">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="endereco">Centro de Comando e Controle - Orientações</h4>
  </div>
  <div class="modal-body">
          <!--FORMULÀRIO-->
        <div class="row">
          <div class="col-sm-12">
          <div class="form-group">
              <label for="ccc">Equipe do CCC</label>
              <textarea class="form-control" id="end"rows="3" placeholder="Definição de equipe do Centro de Comando e Controle" ></textarea>
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
          <div class="form-group">
            <label for="comp">Contato</label>
            <input type="text" class="form-control" id="comp" placeholder="Canal de comunicação">
        </div>
        </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
        <div class="form-group">
              <label for="ccc">Sintese do caso</label>
              <textarea class="form-control" id="end"rows="7" placeholder="Definição de equipe do Centro de Comando e Controle" >GERAL - investigação para apurar os crim.es deORGANIZAÇÃO CRIMINOSA,  LAVAGEM DE DINHEIRO, FALSIDADE IDEOLÓGICA e eventuais outros CRIMES TRIBUTÁRIOS praticados pelo GRUPO XPTO. O GRUPO XPTO se organiza em fragmentação de empresas promoção e vendas dos produtos de Faxina. O GRUPO XPTO através da empresa 3CPO é devedor de aproximadamente R$ 5 bilhões ao Estado de Minas Gerais devido a prática de saídas desacobertadas.</textarea>
        </div>
        </div>
        </div>


        <div class="row">
          <div class="col-sm-12">
        <div class="form-group">
            <label for="comp">Objetivo Geral</label>
            <input type="text" class="form-control" id="comp" placeholder="" value="Cumprimento de Mandado e Busca e apreensão">
        </div>
        </div>
        </div>



        <div class="row">
          <div class="col-sm-12">
        <div class="form-group">
              <label for="ccc">Objeto Específico</label>
              <textarea class="form-control" id="end"rows="20" placeholder="Definição de equipe do Centro de Comando e Controle" >DOCUMENTOS SOMENTE DAS PESSOAS DE INTERESSE DA INVESTIGAÇÃO
Documentos, anotações, agendas, cadernos e manuscritos que tenham alguma relação com as pessoas físicas e jurídicas de interesse para a investigação,
Documentos bancários e fiscais (cheques, comprovantes de transferências, extratos bancários, boletos, conta telefônica, recibos, faturas de cartão de crédito, etc.),
Procurações (públicas ou particulares) que tenham relação com as pessoas físicas e jurídicas de interesse da investigação,
Documentos relacionados à propriedade de imóveis, veículos (instrumentos particulares de compra e venda, escrituras públicas, procurações para venda,
Certidões de registro de imóveis, contratos de aluguel, contratos de arrendamento, contas de energia elétrica e água, certificados de registros de veículos), 
Documentos relacionados a remessa de valores para o exterior o Correspondências físicas e eletrônicas impressas, entre pessoas de interesse,
Documentos relacionados a controles de pagamentos, recebimentos e pedidos de compras e vendas de mercadorias,
Documentos que indiquem controle financeiro das operações praticadas na empresa e pelas pessoas de interesse,
Documentos e estudos sobre planejamento tributário do grupo econômico e blindagem patrimonial, 
Documentos vinculados a criação, manutenção e gestão de holdings. 
              </textarea>
        </div>
      </div>
    </div>

    <div class="row">
          <div class="col-sm-12">
        <div class="form-group">
              <label for="ccc">Evidências DIgitais</label>
              <textarea class="form-control" id="end"rows="3" placeholder="Definição de equipe do Centro de Comando e Controle" >DOCUMENTOS SOMENTE DAS PESSOAS DE INTERESSE DA INVESTIGAÇÃO
Dispositivos de armazenamentpo de arquivos digitais (pen drive, CD, DVD, HD) utilizados no alvo.
Equipamentos eletrônicos (Computador, notebook,tablet,etc) utilizados no alvo
              </textarea>
        </div>
      </div>
    </div>

    <div class="row">
          <div class="col-sm-12">
        <div class="form-group">
              <label for="ccc">Bens e valores</label>
              <textarea class="form-control" id="end"rows="3" placeholder="Definição de equipe do Centro de Comando e Controle" >DOCUMENTOS SOMENTE DAS PESSOAS DE INTERESSE DA INVESTIGAÇÃO
Dinheiro em moeda nacional /extrangeira (acima de R$ 10.000,00 contactar coordenação).
Elementos realaçionado a criptoativos. (hard Wallets,cold wallet,seeds,etc)
              </textarea>
        </div>
      </div>
    </div>
    <div class="row">
          <div class="col-sm-12">
        <div class="form-group">
              <label for="ccc">O que não buscar</label>
              <textarea class="form-control" id="end"rows="3" placeholder="Definição de equipe do Centro de Comando e Controle" >Documentos fiscais emitidos pela empresa. 
              </textarea>
        </div>
      </div>
    </div>



  </div>
    
    <!--FIM FORMULÀRIO-->

    <div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Salvar</button>
</div>
</p>
</div>

</div>
</div>
</div>

<!-- FIM MODAL ORIENTAÇÕES-->



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
            <h1 class="m-0">Lançar operação</h1>
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
                      <label for="responsavel">Procedimentos</label>
                      <select id="proc" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">selecione</option>
                        <option value="PIC">PIC	2021-34529	Belo Horizonte	29675 - Dr. Rodrigo	Investigação de crimes contra a ordem econômica...</option>
                        <option value="PAAF">PAAF	2022-11378	Belo Horizonte	29345 - Dr. Mauro	Investigação de Organizacão criminosa que atua com caixa-níquel</option>
                        <option value="IP">PAAF	2022-11378	Belo Horizonte	29345 - Dr. Antônio	Investigação de Organizacão criminosa Tráfico de Drogas</option>
                      </select>  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Fase</label>
                      <input type="text" class="form-control" id="fase" placeholder="Digite o Número da Fase">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nome da operação</label>
                      <input type="text" class="form-control" id="oper" placeholder="Digite o Nome da Operação">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">RAT/BOS</label>
                      <input type="text" class="form-control" id="rat" placeholder="Digite o RAT ou BOS">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Responsável</label>
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
                       <!--button type="button" onclick="javascript:incluirDados(document.getElementById('proc').value,document.getElementById('fase').value,document.getElementById('oper').value,document.getElementById('rat').value,document.getElementById('mamp').value,document.getElementById('pro').value);" class="btn btn-primary">Gravar</button-->
                       <button type="button" id="addBtn" onclick="incluirDados(
                         document.getElementById('proc').value,
                         document.getElementById('fase').value,
                         document.getElementById('oper').value,
                         document.getElementById('rat').value,
                         document.getElementById('mamp').value,
                         document.getElementById('pro').value
                       )" class="btn btn-primary">Gravar</button>
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
                        <th style="border-right-style:hidden">Procedimento  </th>                       
                        <th style="border-right-style:hidden">Fase</th>                       
                        <th style="border-right-style:hidden">Nome da operação</th> 
                        <th style="border-right-style:hidden">RAT/BOS</th>                      
                        <th style="border-right-style:hidden">Responsável</th> 
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
                          <td style="border-right-style:hidden">PIC	2021-34529	- Dr. Sandro - Crimes contra a ordem econômica</td>
                          <td style="border-right-style:hidden">01</td>
                          <td style="border-right-style:hidden">Operação Coiote</td>
                          <td style="border-right-style:hidden">-</td>
                          <td style="border-right-style:hidden">8785 - Dr. Cleverson</td></td>
                          <td >
                            <div class="float-right">
                              <a href="#" data-toggle="modal" data-target="#modal-lgOrientacoes">
                                <i class="fa fa-tasks"></i>
                              </a>&nbsp;&nbsp;&nbsp;
                              <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                                <i class="fa fa-minus-circle" style="font-size:28px;color:red"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td style="border-right-style:hidden">PAAF 2022-11378	- Dr. Valdir - Caixa-níquel</td>
                          <td style="border-right-style:hidden">04  </td>
                          <td style="border-right-style:hidden">Operação Bicho da Seda</td>
                          <td style="border-right-style:hidden">-</td>
                          <td style="border-right-style:hidden">1096 - Dr. Salmo</td></td>
                          <td ><div class="float-right">
                          <a href="#" data-toggle="modal" data-target="#modal-lgOrientacoes">
                                <i class="fa fa-tasks"></i>
                              </a>&nbsp;&nbsp;&nbsp;  
                          <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
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



</div>
</body>
</html>
