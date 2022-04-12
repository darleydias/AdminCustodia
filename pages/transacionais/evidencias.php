
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
    var value;
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
  };
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
  };
  function mudaCombo(obj){
    var value = obj.options[obj.selectedIndex].value;
    if(value==1){
      document.getElementById('ponto1').style.display="block";
      document.getElementById('ponto2').style.display="none";
      document.getElementById('ponto3').style.display="none";
    }
    if(value==2){
      document.getElementById('ponto1').style.display="none";
      document.getElementById('ponto2').style.display="block";
      document.getElementById('ponto3').style.display="none";
    }
    if(value==3){
      document.getElementById('ponto1').style.display="none";
      document.getElementById('ponto2').style.display="none";
      document.getElementById('ponto3').style.display="block";
    }
  };
    function mudaPonto(obj){
      var value = obj.options[obj.selectedIndex].value;
      document.getElementById('nrPonto').innerHTML="<b>PONTO "+value+"</b>";
      texto="<b>Responsavel:</b> Cap Marlon Reis. <br><b>Data Adordagem:</b> 15/07/2021 05:40<br>";
      texto=texto+ "<b>End:</b> Rua Telaviv, 753 - Bairro Judeia - Pedra Azul - MG<br>";
      texto=texto+ "<b>Foi necessário arrombamento?</b> sim.<br>"
      texto=texto+"<b>Pessoas Presentes</b> <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal-lg5\"><i class=\"fa fa-users\" style=\"font-size:28px;color:red\"></i></a>";
      document.getElementById('listaEvidencias').style.display="block";
      document.getElementById('text').innerHTML=texto;
      document.getElementById('cardPonto').style.display="block";
    }
  
  </script>
</head>

<body class="hold-transition sidebar-mini">
<!--MODAL-->
<div class="modal fade" id="modal-lg5">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Pessoas Presentes na Abordagem</h4>
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
                              <td style="border-right-style:hidden">MG 098.345- Bueno Lopes - Sobrinho do alvo</td>
                              <div class="float-right">
                                <td><a href="#" onclick="this.parentNode.parentNode.parentNode.style.display='none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></td>
                              </div>
                        </tr>
                        <tr id="linha2">
                              <td style="border-right-style:hidden">MG 098.345- Marina Santos - Vizinha do alvo</td>
                              <div class="float-right">
                                <td><a href="#" onclick="this.parentNode.parentNode.parentNode.style.display='none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red"></i></a></td>
                              </div>
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
<div class="modal fade" id="modal-lgTestemunha">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Testemunhas</h4>
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
              <tr><td style="border-right-style:hidden">MG-564-453</td><td style="border-right-style:hidden">Maurício Lindomar Silva</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">CPF 564.346.899.22/td><td style="border-right-style:hidden">Ismaela Antonieta</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">MG 457.345.</td><td style="border-right-style:hidden">Fabiola Fulgêncio</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">MG 345.444</td><td style="border-right-style:hidden">Marcio Fagundes</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
              <tr><td style="border-right-style:hidden">CPF 723.345.566.75</td><td style="border-right-style:hidden">Andre Souza</td><td><a href="#" style="text-align:right" onclick="this.parentNode.parentNode.style.display = 'none'"><i class="fa fa-minus-circle" style="font-size:28px;color:red;border-right-style:hidden"></i></a></td></tr>
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

<!--MODAL-->
<div class="modal fade" id="modal-lg">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Pessoas Presentes na Abordagem</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<p>
<div class="row">
  <div class="col-sm-2">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Sair</button></div></div>
  <form name="from_modal" id="form_proc" style="display:block">
      <div class="card">
        <div class="card-body">
          <div class="box-body">
          <table id="tb_modal" class="table table-bordered table-hover">
              <tbody id="tbodyM_1">
                <img src="../../dist/fotos/op012/ponto01/foto01.jpg" width="700" height="860">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <img src="../../dist/fotos/op012/ponto01/foto02.jpg" width="700" height="860">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
              </tbody>
            </table>
          </div>
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

<!--MODAL 02-->
<div class="modal fade" id="modal-lg2">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Evidências apreendidas</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<p>

  <div class="row">
  <div class="col-sm-2">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Sair</button></div></div>
  <form name="from_modal" id="form_proc" style="display:block">
      <div class="card">
        <div class="card-body">
          <div class="box-body">
             <table id="tb_modal" class="table table-bordered table-hover">
              <tbody id="tbodyM_1">
                <img src="../../dist/fotos/op012/ponto01/foto03.jpg" width="100%" height="100%" >
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <img src="../../dist/fotos/op012/ponto01/foto04.jpg" >
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </form>
</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>

</div>
</div>
</div>
</div>
<!--fim modal-->
<!--MODAL-->
<div class="modal fade" id="modal-lg3">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Pessoas Presentes na Abordagem</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<p>
<div class="row">
  <div class="col-sm-2">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Sair</button></div></div>
  <form name="from_modal" id="form_proc" style="display:block">
      <div class="card">
        <div class="card-body">
          <div class="box-body">
          <table id="tb_modal" class="table table-bordered table-hover">
              <tbody id="tbodyM_1">
                <img src="../../dist/fotos/op012/ponto01/foto05.jpg" width="100%" height="10%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <img src="../../dist/fotos/op012/ponto01/foto06.jpg" width="100%" height="100%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
              </tbody>
            </table>
          </div>
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
<div class="modal fade" id="modal-lg4">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Pessoas Presentes na Abordagem</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<p>
<div class="row">
  <div class="col-sm-2">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Sair</button>
</div></div>
  <form name="from_modal" id="form_proc" style="display:block">
      <div class="card">
        <div class="card-body">
          <div class="box-body">
          <table id="tb_modal" class="table table-bordered table-hover">
              <tbody id="tbodyM_1">
                <img src="../../dist/fotos/op012/ponto01/foto07.jpg" width="100%" height="10%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <img src="../../dist/fotos/op012/ponto01/foto08.jpg" width="100%" height="100%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
              </tbody>
            </table>
          </div>
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
            <h1 class="m-0">Evidência</h1>
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
     <!-- container pesquisa -->
<div class="content">
  <div class="container-fluid">
  <div class="row">
      <div class="col-lg-12">
        <form name="form_pesq" id="form_proc" style="display:block">
              <div class="card">
                <div class="card-body">
                  <div class="box-body">
                  <div class="form-group">
                        <label for="responsavel">Operação</label>
                        <select  onchange="mudaCombo(this)"id="ope" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option selected="selected" data-select2-id="3">selecione</option>
                          <option value="1">Operação Valquíria</option>
                          <option value="2">Operação falcão</option>
                          <option value="2">Operação Mel Amargo</option>
                        </select>  
                  </div>
                  <div style="display:none" id="ponto1" class="form-group">
                        <label for="responsavel">Ponto</label>
                        <select  class="form-control select2 select2-hidden-accessible" onchange="mudaPonto(this)"  style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option selected="01" data-select2-id="3">selecione</option>
                          <option value="02">Casa 3</option>
                          <option value="03">Escritório</option>
                          <option value="04">Segundo andar escritório</option>
                          <option value="05">Escritório Alvo 02</option>
                          <option value="06">Lola Alvo 02</option>
                        </select>  
                  </div>
                  <div style="display:none" class="form-group" id="ponto2" >
                        <label for="responsavel">Ponto</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option selected="01" data-select2-id="3">selecione</option>
                          <option value="02">Casa</option>
                          <option value="03">Consultório Ododntológico </option>
                          <option value="04">Sitio</option>
                        </select>  
                  </div>
                  <div style="display:none"class="form-group" id="ponto3" >
                        <label for="responsavel">Ponto</label>
                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option selected="01" data-select2-id="3">selecione</option>
                          <option value="02">Sitio casa principal</option>
                          <option value="03">Sitio casa Caseiro</option>
                          <option value="04">Casa retireiro</option>
                        </select>  
                  </div>
                  <div class="card-body" id="cardPonto" style="display:none">
                    <h5 class="card-title"><div id='nrPonto'></div></h5>
                    <p class="card-text" id="text"></p>
                  </div>
                </div>
                </div>
              </div>
          </form> 
      </div>
    </div>
  </div>
</div>
    <!-- fim container pesquisa -->
    <!-- Main content -->
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <!-- inicio Tabela-->
            <div class="card" id="listaEvidencias" style="display:none">
                <div class="card-body">
                    <table id="tb_proc" class="table table-bordered table-hover">
                    <thead id="thead_1">
                        <tr>                       
                            <th style="border-right-style:hidden">Lacre</th>                       
                            <th style="border-right-style:hidden">Tipo</th> 
                            <th style="border-right-style:hidden">Descrição</th>
                            <th style="border-right-style:hidden">Quantidade</th> 
                            <th style="border-right-style:hidden">Testemunhas</th> 
                            <th style="border-right-style:hidden">Mais</th> 
                        </tr>
                      </thead>
                      <tbody id="tbody_1">
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0467389</td>
                          <td style="border-right-style:hidden">Microcomputador de mesa</td>
                          <td style="border-right-style:hidden">Computador DELL modelo torre, Nr série: 65877676</td>
                          <td style="border-right-style:hidden">01</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lgTestemunha"><i class="fa fa-street-view" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0000987</td>
                          <td style="border-right-style:hidden">Smartphone</td>
                          <td style="border-right-style:hidden">Smartphone Aplle Iphone 11 Nr série:0098766</td>
                          <td style="border-right-style:hidden">01</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lgTestemunha"><i class="fa fa-street-view" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lg2"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0334567</td>
                          <td style="border-right-style:hidden">Documentos diversos</td>
                          <td style="border-right-style:hidden">Pastas de informações contábeis</td>
                          <td style="border-right-style:hidden">09</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lgTestemunha"><i class="fa fa-street-view" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lg3"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0007654</td>
                          <td style="border-right-style:hidden">HD Externo</td>
                          <td style="border-right-style:hidden">HD Externo Seagate 1 Terabytes, interfaçe USB3</td>
                          <td style="border-right-style:hidden">02</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lgTestemunha"><i class="fa fa-street-view" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;</td>
                          <td style="border-right-style:hidden"><a href="#" data-toggle="modal" data-target="#modal-lg4"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
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




