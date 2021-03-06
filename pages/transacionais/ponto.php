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
  };
  function incluirDados(ponto,end,comp,mamp,pro){
    let table = document.getElementById('tb_ponto');
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
    row_data_1.setAttribute("style", "border-right-style:hidden");
    row_data_2.setAttribute("style", "border-right-style:hidden");
    row_data_3.setAttribute("style", "border-right-style:hidden");
    row_data_4.setAttribute("style", "border-right-style:hidden");
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
    document.getElementById('form_ponto').style.display='none';
  }
  function incluirDadosModal(mamp,pro){
 
    let table = document.getElementById('tb_modal');
    let thead = document.getElementById('theadM_1');
    let tbody = document.getElementById('tbodyM_1');
    table.appendChild(thead);
    table.appendChild(tbody);
    let row = document.createElement('tr');
    let row_data_1 = document.createElement('td');
    let row_data_2 = document.createElement('td');
    let row_link = document.createElement('td');
 
    row_data_1.innerHTML = mamp;
    row_data_2.innerHTML = pro;
    row_data_1.setAttribute("style", "border-right-style:hidden");
    row_data_2.setAttribute("style", "border-right-style:hidden");
    conteudo = "<div class='float-right'><a href='#' ";
    conteudo = conteudo + " onclick=\"this.parentNode.parentNode.parentNode.style.display = 'none'\">"
    conteudo = conteudo + "<i class='fa fa-minus-circle' style='font-size:28px;color:red;text-align:right;'></i></a>";
    row_link.innerHTML = conteudo;
    row.appendChild(row_data_1);
    row.appendChild(row_data_2);
    row.appendChild(row_link);
    tbody.appendChild(row);
    document.getElementById('form_modal').style.display='none';
  }
  </script>
</head>

<body class="hold-transition sidebar-mini">
<!--MODAL-->
<div class="modal fade" id="modal-lg">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Participantes</h4>
  </div>
  <div class="modal-body">
    <p>
      <div class="row">
        <div class="col-sm-12">
            <form name="form_modal" id="form_modal" style="display:none">
                    <div class="card">
                      <div class="card-body">
                        <div class="box-body">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-2">
                                <label for="mampModal">MAMP/Matrícula</label>
                                <input type="text" class="form-control" id="mampModal" placeholder="Digite o MAMP o Matrícula">
                              </div>
                              <div class="col-lg-8">
                                <label for="nomeModal">Nome</label>
                                <input type="text" class="form-control" id="nomeModal" placeholder="Digite o nome do participante">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <button type="button" onclick="javascript:incluirDadosModal(document.getElementById('mampModal').value,document.getElementById('nomeModal').value)" class="btn btn-primary">Gravar</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </form>
         </div>
      </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <table id="tb_modal" name="tb_modal" class="table table-bordered table-hover">
              <thead id="theadM_1"><th style="border-right-style:hidden">MAMP/Matrícula</th><th style="border-right-style:hidden">Nome</th><th><a href="#" style="text-align:right" onclick="document.getElementById('form_modal').style.display='block';"><i class="fa fas fa-plus-circle fa-2x" style="font-size:28px"></i></a></th></thead>
              <tbody id="tbodyM_1">
              <tr><td style="border-right-style:hidden">63876</td><td style="border-right-style:hidden">Dr. Lindomar Silva</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">123.564-3</td><td style="border-right-style:hidden">1Sgt Antonieta</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">109.678-7</td><td style="border-right-style:hidden">1 Sgt Fabio Fulgêncio</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">121.376-9</td><td style="border-right-style:hidden">2 Sgt Clemencia Fagundes</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">135.876-2</td><td style="border-right-style:hidden">Soldado Juvenal Souza</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
             </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Sair</button>
</div>
</div>
</div>
</div>
<!--fim modal-->
<!--MODAL RECON-->
<div class="modal fade" id="modal-lgRecon">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="endereco"></h4>
  </div>
  <div class="modal-body">
    <p>
    <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
                  <label for="ccc">Orientações para o RECON</label>
                  <textarea class="form-control" id="end"rows="6" placeholder="Definição de equipe do Centro de Comando e Controle" >Realizar localização exata do alvo(endereço completo)
    - Elaborar Mapas, Fotos ou Croquis, citando Pontos de referência e Características do Alvo
    * Descrição generalizada
    - É Região Industrial
    - É Área Rural
    * Verificar Atividades desenvolvidas, dias da semana e horários. 
                  </textarea>
            </div>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-12">
            <form name="form_modal" id="form_modal" style="display:none">
                    <div class="card">
                      <div class="card-body">
                        <div class="box-body">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-2">
                                <label for="mampModal">MAMP/Matrícula</label>
                                <input type="text" class="form-control" id="mampModal" placeholder="Digite o MAMP o Matrícula">
                              </div>
                              <div class="col-lg-8">
                                <label for="nomeModal">Nome</label>
                                <input type="text" class="form-control" id="nomeModal" placeholder="Digite o nome do participante">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <button type="button" onclick="javascript:incluirDadosModal(document.getElementById('mampModal').value,document.getElementById('nomeModal').value)" class="btn btn-primary">Gravar</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </form>
         </div>
      </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <table id="tb_modal" name="tb_modal" class="table table-bordered table-hover">
              <thead id="theadM_1"><th style="border-right-style:hidden">MAMP/Matrícula</th><th style="border-right-style:hidden">Nome</th><th><a href="#" style="text-align:right" onclick="document.getElementById('form_modal').style.display='block';"><i class="fa fas fa-plus-circle fa-2x" style="font-size:28px"></i></a></th></thead>
              <tbody id="tbodyM_1">
              <tr><td style="border-right-style:hidden">63876</td><td style="border-right-style:hidden">Dr. Lindomar Silva</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">123.564-3</td><td style="border-right-style:hidden">1Sgt Antonieta</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
</tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Sair</button>
</div>
</div>
</div>
</div>
<!--fim modal-->
<!--MODAL Alvo-->
<div class="modal fade" id="modal-lgAlvo">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="enderecoAlvo"></h4>
  </div>
  <div class="modal-body">
    <p>
    <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
                  <label for="ccc">Informações do Alvo</label>
                  <textarea class="form-control" id="end"rows="6" placeholder="Informar dados do alvo" >Carlos Alberto Antônio Vilela
    - Documentos: MG-980-543 - CPF:: 765.909.333-2
    - Masculino, 46 anos, cor clara, tatuagem de dragão no pescoço
    - Casado com Antônia Magda Vilela - 40 anos. 
    - Filhos: André Vilela 07 anos e Marcilia Vilela 04 anos
    - Proprietário de Caminhonete Toyota Hylux GNT-5399 . 
                  </textarea>
            </div>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-12">
            <form name="form_modal" id="form_modal" style="display:none">
                    <div class="card">
                      <div class="card-body">
                        <div class="box-body">
                          <div class="form-group">
                            <div class="row">
                              <div class="col-lg-2">
                                <label for="mampModal">MAMP/Matrícula</label>
                                <input type="text" class="form-control" id="mampModal" placeholder="Digite o MAMP o Matrícula">
                              </div>
                              <div class="col-lg-8">
                                <label for="nomeModal">Nome</label>
                                <input type="text" class="form-control" id="nomeModal" placeholder="Digite o nome do participante">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                              <button type="button" onclick="javascript:incluirDadosModal(document.getElementById('mampModal').value,document.getElementById('nomeModal').value)" class="btn btn-primary">Gravar</button>
                          </div>
                        </div>
                      </div>
                    </div>
            </form>
         </div>
      </div>
  <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <img src="../../dist/fotos/alvo.jpg" width="200" height="240" aria-hidden="true"></i>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
        <img src="../../dist/fotos/fotofaceII.png" width="200" height="240" aria-hidden="true"></i>
        </div>
      </div>
    </div><div class="col-sm-4">
      <div class="card">
        <div class="card-body">
        <img src="../../dist/fotos/garagem.png" width="200" height="240" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Salvar</button>
</div>
</div>
</div>
</div>
<!--fim modal-->


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
                <div class="card">
                      <div class="card-body">
                        <div class="box-body">
                          <div class="form-group">
                              <label for="opePesquisa">Operação</label>
                              <select id="opePesquisa"  onChange="javascript:operacao();" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option selected="selected" data-select2-id="3">selecione</option>
                                <option value="1">Operação Valquíria</option>
                                <option value="2">Operação falcão</option>
                                <option value="3">Operação Mel Amargo</option>
                              </select>  
                          </div>
                        </div>
                      </div>
                </div>
              </div>
           </div>
          <div class="row">
              <div class="col-lg-12">
                  <!--formulário-->  
                  <form name="form_ponto" id="form_ponto" style="display:none">
                    <div class="card">
                      <div class="card-body">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="ponto">Número do Ponto</label>
                            <input type="text" class="form-control" id="ponto" placeholder="Digite o Número do ponto">
                          </div>
                          <div class="form-group">
                            <label for="end">Endereço</label>
                            <textarea class="form-control" id="end"rows="3" placeholder="Digite o endereço" ></textarea>
                          </div>
                          <div class="form-group">
                            <label for="comp">Complemento</label>
                            <input type="text" class="form-control" id="comp" placeholder="Digite o complemento">
                          </div>
                          <div class="form-group">
                          <label for="mamp">Responsável</label>
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
              </div>
            </div>
          <!--fim formulário-->
          <!-- inicio Tabela-->
            <div class="card">
                <div class="card-body">
                    <table id="tb_ponto" class="table table-bordered table-hover">
                    <thead id="thead_1">
                        <tr>                       
                            <th style="border-right-style:hidden">Nr ponto</th>                       
                            <th style="border-right-style:hidden">Endereço</th> 
                            <th style="border-right-style:hidden">Complemento</th>                      
                            <th style="border-right-style:hidden">Responsável</th> 
                            <th>
                              <div class="float-right">
                                  <a href="#" onclick="document.getElementById('form_ponto').style.display='block';">
                                    <i class="fa fas fa-plus-circle fa-2x" style="font-size:28px"></i>
                                  </a>
                              </div>
                            </th>
                        </tr>
                      </thead>
                      <tbody id="tbody_1">
                        <tr id="linha1">
                          <td style="border-right-style:hidden">01</td>
                          <td style="border-right-style:hidden">Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório no segundo Andar</td>
                          <td style="border-right-style:hidden">8785 - Dr. Cleverson</td>
                          <td >
                            <div class="float-right">
                            <a href="#" onclick="setaDadosModalAlvo('CARLOS ALBERTO ANTÔNIO VILELA <br>Endereço do Alvo: Rua Macedônia, 345 - Bairro Canadá - Pedra Azul - MG<br> ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;  
                            <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
                              <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                              <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                                <i class="fa fa-minus-circle" style="font-size:28px;color:red"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr id="linha2">
                          <td style="border-right-style:hidden">02</td>
                          <td style="border-right-style:hidden">Rua Cadesbarneia, 477 - Bairro Belém - Pedra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório no segundo Andar</td>
                          <td style="border-right-style:hidden">8785 - Dr. Cleverson</td>
                          <td >
                            <div class="float-right">
                            <a href="#" onclick="setaDadosModalAlvo('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 02<br>em Rua Cadesbarneia, 477 - Bairro Belém - Pedra Azul - MG ')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                              <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                                <i class="fa fa-minus-circle" style="font-size:28px;color:red">
                                </i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr id="linha3">
                          <td style="border-right-style:hidden">01</td>
                          <td style="border-right-style:hidden">Rua Indumeia, 2.345 - Bairro Cafarnaum - Pedra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório no segundo Andar</td>
                          <td style="border-right-style:hidden">8785 - Dr. Cleverson</td>
                          <td >
                            <div class="float-right">
                            <a href="#" onclick="setaDadosModalAlvo('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 02<br>em Rua Indumeia, 2.345 - Bairro Cafarnaum - Pedra Azul - MG ')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
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
                            <a href="#" onclick="setaDadosModalAlvo('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 02<br>em Av Galileia, 453 - Bairro Decápolis - Pedra Azul - MG ')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                            <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        <tr id="linha5">
                          <td style="border-right-style:hidden">03</td>
                          <td style="border-right-style:hidden">Rua Massada, 222 - Bairro Jordão - Pedra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório no segundo Andar</td>
                          <td style="border-right-style:hidden">8785 - Dr. Cleverson</td>
                          <td ><div class="float-right">
                          <a href="#" onclick="setaDadosModalAlvo('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 03<br>em Rua Massada, 222 - Bairro Jordão - Pedra Azul - MG')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        <tr id="linha6">
                          <td style="border-right-style:hidden">01</td>
                          <td style="border-right-style:hidden">Av Telaviv , 01 - Bairro Caná - Padra Azul - MG </td>
                          <td style="border-right-style:hidden">Residência quarto escritório</td>
                          <td style="border-right-style:hidden">098.236-6 - SubTen Anderson Silva</td>
                          <td ><div class="float-right">
                          <a href="#" onclick="setaDadosModalAlvo('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                            
                          <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 01<br>em Av Telaviv , 01 - Bairro Caná - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        <tr id="linha7">
                          <td style="border-right-style:hidden">02</td>
                          <td style="border-right-style:hidden">Rua Gaza, 121 - Bairro Galileia - Pedra Azul - MG </td>
                          <td style="border-right-style:hidden">Escritório</td>
                          <td style="border-right-style:hidden">122.987-4 - Cap Vittor Celante</td>
                          <td ><div class="float-right">
                          <a href="#" onclick="setaDadosModalAlvo('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                            
                          <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 02<br>em Rua Gaza, 121 - Bairro Galileia - Pedra Azul - MG ')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-users"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></div></td>
                        </tr>
                        <tr id="linha8">
                          <td style="border-right-style:hidden">03</td>
                          <td style="border-right-style:hidden">Rua Chipre, 2.345 - Bairro Caifa - Padra Azul - MG </td>
                          <td style="border-right-style:hidden">Residência alvo 03</td>
                          <td style="border-right-style:hidden">198.654-2 - Ten Carlos</td>
                          <td ><div class="float-right">
                            
                          <a href="#" onclick="setaDadosModalAlvo('Equipe para realização de RECON no ponto 01<br>em Rua Macedônia, 345 - Bairro Canadá - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgAlvo"><i class="fa fa-bullseye" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
                          <a href="#" onclick="setaDadosModal('Equipe para realização de RECON no ponto 03<br>em Rua Chipre, 2.345 - Bairro Caifa - Padra Azul - MG ')" data-toggle="modal" data-target="#modal-lgRecon"><i class="fa fa-user-secret"></i></a>&nbsp;&nbsp;&nbsp;
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
<script>
function setaDadosModal(valor) {
    document.getElementById('endereco').innerHTML = valor;
}
function setaDadosModalAlvo(valor) {
    document.getElementById('enderecoAlvo').innerHTML = valor;
}
</script>
</div>


</body>
</html>
