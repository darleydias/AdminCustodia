
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
  <h4 class="modal-title">Endereço da apreensão</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
</div>
<div class="modal-body">
  <p>
    <div class="row">
      <!--div class="col-sm-10"><script async defer src="https://www.openstreetmap.org/#map=11/-19.8787554/-43.9129516,17"></script></div-->
    <img style="margin-left: 50px;" src="../../dist/fotos/mapa.jpg" width="640px" height="420px"/>
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
<h4 class="modal-title">Fotos das evidências apreendidas</h4>
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
                <img src="../../dist/fotos/op012/ponto01/foto03.jpg" width="100%" height="100%" >
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <img src="../../dist/fotos/op012/ponto01/foto04.jpg" >
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <img src="../../dist/fotos/op012/ponto01/foto05.jpg" width="100%" height="10%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <img src="../../dist/fotos/op012/ponto01/foto06.jpg" width="100%" height="100%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
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
            <h1 class="m-0">Cadeia de custódia da evidência</h1>
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
                        <select class="form-control select2 select2-hidden-accessible" onchange="mudaPonto(this)" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option selected="01" data-select2-id="3">selecione</option>
                          <option value="02">Casa</option>
                          <option value="03">Consultório Ododntológico </option>
                          <option value="04">Sitio</option>
                        </select>  
                  </div>
                  <div style="display:none"class="form-group" id="ponto3" >
                        <label for="responsavel">Ponto</label>
                        <select class="form-control select2 select2-hidden-accessible" onchange="mudaPonto(this)"  style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
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
    <div class="card" id="listaEvidencias" style="display:none">
                <div class="card-body">
                    <table id="tb_proc" class="table table-bordered table-hover">
                    <thead id="thead_1">
                        <tr>                       
                            <th style="border-right-style:hidden">Lacre</th>                       
                            <th style="border-right-style:hidden">Tipo</th> 
                            <th style="border-right-style:hidden">Descrição</th>                      
                            <th style="border-right-style:hidden">Mais</th> 
                        </tr>
                      </thead>
                      <tbody id="tbody_1">
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0467389</td>
                          <td style="border-right-style:hidden">Microcomputador de mesa</td>
                          <td style="border-right-style:hidden">Computador DELL modelo torre, Nr série: 65877676</td>
                          <td style="border-right-style:hidden"><a href="#" onclick="javascript:document.getElementById('timeline').style.display='block'"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0000987</td>
                          <td style="border-right-style:hidden">Smartphone</td>
                          <td style="border-right-style:hidden">Smartphone Aplle Iphone 11 Nr série:0098766</td>
                          <td style="border-right-style:hidden"><a href="#" onclick="javascript:document.getElementById('timeline').style.display='block'"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0334567</td>
                          <td style="border-right-style:hidden">Documentos diversos</td>
                          <td style="border-right-style:hidden">Pastas de informações contábeis</td>
                          <td style="border-right-style:hidden"><a href="#" onclick="javascript:document.getElementById('timeline').style.display='block'"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr id="linha1">
                          <td style="border-right-style:hidden">0007654</td>
                          <td style="border-right-style:hidden">HD Externo</td>
                          <td style="border-right-style:hidden">HD Externo Seagate 1 Terabytes, interfaçe USB3</td>
                          <td style="border-right-style:hidden"><a href="#" onclick="javascript:document.getElementById('timeline').style.display='block'"><i class="fa fa-arrow-circle-right"></i></a>&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!--Fim card body-->
              </div><!--Fim card-->
    <!-- Main content -->
<div class="content" style="display:none" id="timeline">
  <div class="container-fluid">
<!--TIMELINE-->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ciclo de vida da evidência</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Timeline</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-red">10 de Fev de 2022</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fa fa-user-secret  bg-blue"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 05:50</span>
                  <h3 class="timeline-header"><a href="#">Apreensão da evidência</a> MPMG - GAECO</h3>

                  <div class="timeline-body">
                  Responsavel: Cap Marlon Reis.<br>
                  Data Adordagem: 10/02/2022 05:40<br>
                  End: Rua Telaviv, 753 - Bairro Judeia - Pedra Azul - MG &nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#modal-lg5"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> 
                  Foi necessário arrombamento.<br>
                    
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-primary btn-sm">Detalhes da evidência</a>
                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-lg2">Fotos</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-user bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 11:00</span>
                  <h3 class="timeline-header no-border"><a href="#">Responsável pela apreensão</a>  Foram aprenedidos 7 evidências encaminhada em 1 volume. </h3>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>
                  <h3 class="timeline-header"><a href="#">Comadante da operação<o></o></a> Foram presos o Sr José Emanuel e sua esposa Carla Divina Emanuel</h3>
                  <div class="timeline-body">
                  Foi encerrada ocorrência no 53 DP com autuação em flagrante de ambos conduzidos <br>
                  Foram conduzidos preventivamente ao PS de Pedra Azul para análise do médico de plantão<br>
                  REDS 2022-89676896-001. 
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-warning btn-sm" onclick="http://localhost/AdminCustodia/dist/fotos/boletim.pdf">Visualizar REDS</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-green">11 de fevereiro de 2022</span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fa fa-cogs bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 09:30</span>
                  <h3 class="timeline-header"><a href="#">Recebimento para extração</a></h3>
                  <div class="timeline-body">
                  Foi entregue com a etiqueta 876489, à CEAT. em 11/02/2022 12:30<br>
                  Recebido por: MAMP 12657 - Carlos Antonio de Souza.<br>
                  Local Atual: CEAT.
                  </div>
                </div>
              </div>
              <div>
                <i class="fas fa-user bg-green"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 11:00</span>
                  <h3 class="timeline-header no-border"><a href="#">Armazenado na Central de custódia</a>  
                  Foi feito o deslacre pelo MAMP 265443 Marta Janaina Dias.<br>
                  11 de fev 2022 as 11:00<br>
                  Armazenado no armário 7<br>
                </h3>
                </div>
              </div>
                <div>
                  <i class="fas fa-user bg-green"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fas fa-clock"></i> 11:00</span>
                    <h3 class="timeline-header no-border"><a href="#">Em processo de extração e análise</a>  
                    Pego para extração e análise de dados.<br>
                    MAMP 67654 Marcilio Arlindo Carvalho<br>
                    16 de fev 2022 as 11:00<br>
                    Levado para laboratório. <br>
                  </h3>
                  </div>
                </div>
                <!-- END timeline item -->
              <!-- timeline item -->

              <div class="time-label">
                <span class="bg-green">26 de abril de 2022</span>
              </div>
              <div>
                <i class="fa fa-cogs bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-clock"></i> 14 horas</span>
                  <h3 class="timeline-header"><a href="#">Entrega de relatório e midias</a></h3>
                  <div class="timeline-body">
                  Foi feito novo lacre com a etiqueta 876570,<br>
                  Lacre anterior: 265443 enviado a Central de custódia. em 26/04/2022 12:30<br>
                  Recebido pelo: MAMP 44567 - Ednaldo Bulhões.<br>
                  Local Atual: Central de custódia GAECO.<br>
                  </div>
                </div>
              </div>
              
              <!-- END timeline item -->
              <div>
                <i class="fas fa-clock bg-gray"></i><div style="margin-left: 70px;">98 dias apreendido.</div>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Control sidebar content goes here -->
  <div class="p-3 control-sidebar-content" style=""><h5>Customize AdminLTE</h5><hr class="mb-2"><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div><h6>Header Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Dropdown Legacy Offset</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>No border</span></div><h6>Sidebar Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Collapsed</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><div class="mb-1"><input type="checkbox" value="1" checked="checked" class="mr-1"><span>Sidebar Mini</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini MD</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Mini XS</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Flat Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Legacy Style</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Compact</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Indent</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Nav Child Hide on Collapse</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Disable Hover/Focus Auto-Expand</span></div><h6>Footer Options</h6><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Fixed</span></div><h6>Small Text Options</h6><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Body</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Navbar</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Brand</span></div><div class="mb-1"><input type="checkbox" value="1" class="mr-1"><span>Sidebar Nav</span></div><div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Footer</span></div><h6>Navbar Variants</h6><div class="d-flex"><select class="custom-select mb-3 text-light border-0 bg-white"><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option></select></div><h6>Accent Color Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Dark Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 text-light border-0 bg-primary"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Light Sidebar Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-warning">Warning</option><option class="bg-info">Info</option><option class="bg-danger">Danger</option><option class="bg-success">Success</option><option class="bg-indigo">Indigo</option><option class="bg-lightblue">Lightblue</option><option class="bg-navy">Navy</option><option class="bg-purple">Purple</option><option class="bg-fuchsia">Fuchsia</option><option class="bg-pink">Pink</option><option class="bg-maroon">Maroon</option><option class="bg-orange">Orange</option><option class="bg-lime">Lime</option><option class="bg-teal">Teal</option><option class="bg-olive">Olive</option></select><h6>Brand Logo Variants</h6><div class="d-flex"></div><select class="custom-select mb-3 border-0"><option>None Selected</option><option class="bg-primary">Primary</option><option class="bg-secondary">Secondary</option><option class="bg-info">Info</option><option class="bg-success">Success</option><option class="bg-danger">Danger</option><option class="bg-indigo">Indigo</option><option class="bg-purple">Purple</option><option class="bg-pink">Pink</option><option class="bg-navy">Navy</option><option class="bg-lightblue">Lightblue</option><option class="bg-teal">Teal</option><option class="bg-cyan">Cyan</option><option class="bg-dark">Dark</option><option class="bg-gray-dark">Gray dark</option><option class="bg-gray">Gray</option><option class="bg-light">Light</option><option class="bg-warning">Warning</option><option class="bg-white">White</option><option class="bg-orange">Orange</option><a href="#">clear</a></select></div></aside>
  <!-- /.control-sidebar -->
<div id="sidebar-overlay"></div></div>
<!--FIM TIMELINE-->
  </div>
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




