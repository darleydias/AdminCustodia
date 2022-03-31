
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
  <style type="text/css">
#linha1:hover,#linha2:hover,#linha3:hover,#linha4:hover,#linha5:hover,#linha6:hover,#linha7:hover,#linha8:hover
{ 
z-index:-1;
background-color: rgba(0,0,0,0.1); 
transition: 0.2s;
opacity: 1 ;
}

</style>
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
  function mostraPessoas(){
    document.getElementById('labelpessoa').style.display="block";
  }

  function maisUmElemento(tarefa){
    document.getElementById('tarefa').innerHTML=tarefa;
    document.getElementById('itemTimeA').style.display='block';
    document.getElementById('itemTimeB').style.display='block';
    document.getElementById('primeiraSeta').style.display='none';
  }



  </script>
</head>

<body class="hold-transition sidebar-mini">
  <!--MODAL-->
<div class="modal fade" id="modal-lgE">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Encaminhamento</h4>
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
          <div class="box-body">
          <table id="tb_modal" class="table table-bordered table-hover">
              <tbody id="tbodyM_1">
                      <label for="exampleInputPassword1">Responsável</label>
                      <div class="row">
                        <div class="col-sm-2">
                        <input type="text" size="10" onblur="mostraPessoas();" class="form-control" id="mamp" placeholder="MAMP/Matrícula" v-model="object.mamp" >
                        </div>
                        <div class="col-sm-10">
                        <input type="text" size="10" onblur="mostraPessoas();"class="form-control" id="pro" placeholder="Nome" v-model="object.promotor">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div id="labelpessoa" style="display:none;">
                        <div class="row" onclick="document.getElementById('selecionada').style.display='block'" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
                          <div class="col-xs-2" style="width: 20%;">MAMP: 67543</div>  
                          <div class="col-xs-10" style="width: 80%;" id="nome1">Carlinda Paula Fontes</div>
                        </div>
                        <div class="row" onclick="document.getElementById('selecionada').style.display='block'" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
                          <div class="col-xs-2" style="width: 20%;">132.458-9 </div>  
                          <div class="col-xs-10" style="width: 80%;" id="nome2">Sgt Eder Valdomiro</div>
                        </div>
                    </div>
                    <br>
                    <div  id="selecionada" style="display:none;">
                        <div class="row">
                            <div class="col-sm-2">
                            <label for="pro">Tarefa</label>
                            </div>
                            <div class="col-sm-10">
                            <input type="text" size="10" class="form-control" id="tarefaTxt" placeholder="Defina a próxima Tarefa" v-model="object.promotor">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2">
                            <label for="pro">Digite o Token</label>
                            </div>
                            <div class="col-sm-10">
                            <input type="text" size="10" onblur="mostraPessoas();"class="form-control" id="pro" placeholder="Digite o Token" v-model="object.promotor">
                            </div>
                        </div>
                    </div>

              </tbody>
            </table>
          </div>
        </div>
      </div>
  </form>
</p>
</div>
<div class="modal-footer justify-content-between">
<button type="button" onclick="maisUmElemento(document.getElementById('tarefaTxt').value)" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Encaminhar</button>
</div>
</div>
</div>
</div>
<!--fim modal-->

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
            <h1 class="m-0"><?php echo($_GET['nome'])?></h1>
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
<div class="content" id="timeline">
  <div class="container-fluid">
<!--TIMELINE-->
    
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
                  <span class="time">Cap Marlon Reis &nbsp;&nbsp;<i class="fas fa-clock"></i> 05:50</span>
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
                  <span class="time">Cap Marlon Reis &nbsp;&nbsp;<i class="fas fa-clock"></i> 11:00</span>
                  <h3 class="timeline-header no-border"><a href="#">Responsável pela apreensão</a>  Foram aprenedidos 7 evidências encaminhada em 7 volumes. </h3>
                </div>
              </div>
              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                  <span class="time">Cap Marlon Reis &nbsp;&nbsp;<i class="fas fa-clock"></i> 27 mins ago</span>
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
                  <span class="time">MAMP 12657 - Carlos Antonio de Souza&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i> 09:30</span>
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
                  <span class="time">MAMP 12657 - Carlos Antonio de Souza&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i> 11:00</span>
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
                    <span class="time">MAMP 12657 - Carlos Antonio de Souza&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i> 11:00</span>
                    <h3 class="timeline-header no-border"><a href="#">Em processo de extração e análise</a>  
                    Pego para extração e análise de dados.<br>
                    MAMP 67654 Marcilio Arlindo Carvalho<br>
                    16 de fev 2022 as 11:00<br>
                    Levado para laboratório. <br>
                  </h3>
                  </div>
                </div>
                <!-- timeline item -->

              <div class="time-label">
                <span class="bg-green">26 de abril de 2022</span>
                <span class=""></span>
                <span id="primeiraSeta" data-toggle="modal" data-target="#modal-lgE">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    width="16" 
                    height="16" 
                    fill="currentColor" 
                    class="bi bi-arrow-return-right" 
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                  </svg>
                </span>
                <div class='float-right ' style="margin-right:20px">
                  <a href="javascript:void(0);" onclick="document.getElementById('itemTimeC').style.display='block'">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                  class="bi bi-plus-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                   <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
                </a>
                </div>
              </div>
              <div>
                <i class="fa fa-cogs bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"> MAMP 44567 - Ednaldo Bulhões&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i> 14 horas</span>
                  <h3 class="timeline-header"><a href="javascript:void(0);">Entrega de relatório e midias</a></h3>
                  <div class="timeline-body">
                  Foi feito novo lacre com a etiqueta 876570,<br>
                  Lacre anterior: 265443 enviado a Central de custódia. em 26/04/2022 12:30<br>
                  Recebido pelo: MAMP 44567 - Ednaldo Bulhões.<br>
                  Local Atual: Central de custódia GAECO.<br>
                  </div>
                </div>
              </div>
              <div id="itemTimeC" style="display:none">
                <i class="fa fa-cogs bg-purple"></i>
                <div class="timeline-item">
                  <span class="time">Carla Neiva Torres&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i> 14 horas</span>
                  <h3 class="timeline-header"><a href="javascript:void(0);"><div id="tarefa"></div></a></h3>
                  <div class="timeline-body">
                            <textarea class="form-control" id="end"rows="3" placeholder="descrição da tarefa" ></textarea>
                  </div>
                </div>
              </div>
              
              <!-- END timeline item -->
              <!-- timeline item -->

              <div id="itemTimeA" class="time-label" style="display:none">
                <span class="bg-green">01 de Maio de 2022</span>
                <span class=""></span>
                <span data-toggle="modal" data-target="#modal-lgE">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                    width="16" 
                    height="16" 
                    fill="currentColor" 
                    class="bi bi-arrow-return-right" 
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
                  </svg>
                </span>
                <div class='float-right ' style="margin-right:20px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                  class="bi bi-plus-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                   <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg>
                </div>
              </div>
              <div id="itemTimeB" style="display:none">
                <i class="fa fa-cogs bg-purple"></i>
                <div class="timeline-item">
                  <span class="time">Carla Neiva Torres&nbsp;&nbsp;&nbsp;<i class="fas fa-clock"></i> 14 horas</span>
                  <h3 class="timeline-header"><a href="javascript:void(0);"><div id="tarefa"></div></a></h3>
                  <div class="timeline-body">
                            <textarea class="form-control" id="end"rows="3" placeholder="descrição da tarefa" ></textarea>
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
  <!-- Control Sidebar -->
  
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




