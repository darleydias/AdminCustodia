<!DOCTYPE html>
<?php 
$path_root="../../../";
$path_page="../";
$path_menu="./";
$database="cadeiaCustodia";
$conn = mysqli_connect("mysql","root","root");
mysqli_select_db($conn, $database);

?>

<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Operações em andamento</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo($path_page)?>dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
  <?php 
  if(isset($_POST['paramFiltro'])) {
   $paramFiltro = $_POST['paramFiltro'];
  }else{
    $paramFiltro="ALL";
  }
?>
<form action="gallery.php" method="post" id="formFiltro"><input type="hidden" name="paramFiltro" id="paramFiltro" value="<?php echo($paramFiltro);?>"></form>

<!--MODAL ORIENTAÇÕES-->
<!-- SE FOR Deslacração. -->
<div class="modal fade" id="modal-Des">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id=""><div id="dvPontoDes"></div></h4>
  </div>
  <div class="modal-body">
      <!--FORMULÀRIO-->
     
     <div class="form-group">
        <label for="ccc">Data/hora da deslacração</label>
        <input type="text" class="form-control" value="12/05/2022 15:30:00" placeholder="Data hora da deslacração"/>
     </div>
     <div class="row">
       <div class="col-sm-8">
        <div class="form-group">
            <label for="ccc">Evidências verificadas</label><br>
                <div style="margin-top:4px">1) Computador Intel i5  Série: 2376544679-09</div><br>
                <div style="margin-top:4px">2) HD Externo Barracuda 1 TB Série: 2376544679-09</div><br>
                <div style="margin-top:4px">3) Smartphone Sansumg Galaxy S9 Série: 2376544679-09</div><br>
                <div style="margin-top:4px">4) Computador AMD 367  Série: 2376544679-09</div><br>
                <div style="margin-top:4px">5) Computador 496 DX2 66 Série: 2376544679-09</div><br>
                <div style="margin-top:4px">6) HD Externo SATA2 Sansumg 256 GB Série: 2376544679-09</div><br>
        </div>
      </div>
       <div class="col-sm-46">
        <div class="btn-group" role="group" aria-label="" style="margin-top:10px"><button type="button" class="btn btn-outline-primary" >Apreensão</button><button type="button" class="btn btn-primary">Restituição</button></div><br>
        <div class="btn-group" role="group" aria-label="" style="margin-top:10px"><button type="button" class="btn btn-outline-primary" >Apreensão</button><button type="button" class="btn btn-primary">Restituição</button></div><br>
        <div class="btn-group" role="group" aria-label="" style="margin-top:10px"><button type="button" class="btn btn-outline-primary" style="margin:0px">Apreensão</button><button type="button" class="btn btn-primary">Restituição</button></div><br>
        <div class="btn-group" role="group" aria-label="" style="margin-top:10px"><button type="button" class="btn btn-outline-primary" style="margin:0px">Apreensão</button><button type="button" class="btn btn-primary">Restituição</button></div><br>
        <div class="btn-group" role="group" aria-label="" style="margin-top:10px"><button type="button" class="btn btn-outline-primary" style="margin:0px"> Apreensão</button><button type="button" class="btn btn-primary">Restituição</button></div><br>
        <div class="btn-group" role="group" aria-label="" style="margin-top:10px"><button type="button" class="btn btn-outline-primary" style="margin:0px">Apreensão</button><button type="button" class="btn btn-primary">Restituição</button></div><br>
        <div class="btn-group" role="group" aria-label="" style="margin-top:10px"><button type="button" class="btn btn-primary">Apreensão</button><button type="button" class="btn btn-outline-primary">Restituição</button></div><br> 
      
      </div>
    </div>

     <div class="form-group">
        <label for="ccc">Nr. Lacre encontrado</label>
        <input type="text" class="form-control" value="565432" placeholder=""/>
     </div> 
     <div class="form-group">
        <label for="ccc">Novo. Lacre</label>
        <input type="text" class="form-control" value="59000" placeholder=""/>
     </div> 
     <div class="form-group">
        <label for="ccc">Local da Deslacração</label>
        <input type="text" class="form-control" value="GAECO - Central" placeholder=""/>
     </div>
     <div class="form-group">
        <label for="ccc">Responsável pela deslacração</label>
        <table id="tb_modal" name="tb_modal" class="table table-bordered table-hover">
          <thead id="theadM_1"><th style="border-right-style:hidden">MAMP/Matrícula</th><th style="border-right-style:hidden">Nome</th><th style="border-right-style:hidden">Contato</th><th></th></thead>
          <tbody id="tbodyM_1">
            <tr><td style="border-right-style:hidden">63446</td><td style="border-right-style:hidden">Antonio Augusto</td><td style="border-right-style:hidden">(31)97655.9098</td><td>
          </td>
            </td></tr>
          </tbody>
        </table>
     </div>
      <div class="form-group">
          <label for="ccc">Destinação</label>
            <select id=""  onChange="" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
              <option selected="selected" data-select2-id="3">selecione</option>
              <option value="1">GAECO Central</option>
              <option value="2">Central de custódia</option>
              <option value="3">CEAT</option>
            </select>  
      </div>
  </div>
    <!--FIM FORMULÀRIO-->
    <div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Fechar</button>
</div>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- SE FOR Auto de B.A. -->
<div class="modal fade" id="modal-MBA">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title" id="endereco"><div id="dvPonto"></div></h4>
  </div>
  <div class="modal-body">
          <!--FORMULÀRIO-->
     <div class="form-group">
        <label for="ccc">Endereço</label>
        <textarea class="form-control" id="endMBA"rows="3" placeholder="Definição de equipe do Centro de Comando e Controle" >
        </textarea>
     </div>
     <div class="form-group">
        <label for="ccc">Chegada no local</label>
        <input type="text" class="form-control" value="12/05/2022 04:34:12" placeholder="Horário que a equipe chegou no local"/>
     </div>
     <div class="form-group">
        <label for="ccc">Encerramento</label>
        <input type="text" class="form-control" value="" placeholder="Horário que a equipe saiu do local"/>
     </div>

     <div class="form-group">
        <label for="ccc">Status do cumprimento</label><div></div>
          <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button type="button" class="btn btn-outline-primary">Não iniciado</button>
            <button type="button" class="btn btn-primary">Em Andamento</button>
            <button type="button" class="btn btn-outline-primary">Concluido</button>
          </div>
     <div>

     <div class="form-group">
        <label for="ccc">Evidências coletadas</label>
        <textarea class="form-control" id="endMBA"rows="7" placeholder="Definição de equipe do Centro de Comando e Controle" >
            1) Computador Intel i5  Série: 2376544679-09
            2) HD Externo Barracuda 1 TB Série: 2376544679-09
            3) Smartphone Sansumg Galaxy S9 Série: 2376544679-09
            4) Computador AMD 367  Série: 2376544679-09
            5) Computador 496 DX2 66 Série: 2376544679-09
            6) HD Externo SATA2 Sansumg 256 GB Série: 2376544679-09
        </textarea>
     </div>
     <div class="form-group">
     <label for="ccc">Equipe de atuação</label>
        <table id="tb_modal" name="tb_modal" class="table table-bordered table-hover">
                  <thead id="theadM_1"><th style="border-right-style:hidden">MAMP/Matrícula</th><th style="border-right-style:hidden">Nome</th><th style="border-right-style:hidden">Contato</th></thead>
                  <tbody id="tbodyM_1">
                  <tr><td style="border-right-style:hidden">63876</td><td style="border-right-style:hidden">Dr. Lindomar Silva</td><td style="border-right-style:hidden">(31)98565.4367</td></tr>
                  <tr><td style="border-right-style:hidden">123.564-3</td><td style="border-right-style:hidden">1Sgt Antonieta</td><td style="border-right-style:hidden">(31)98221.4117</td></tr>
                  <tr><td style="border-right-style:hidden">109.678-7</td><td style="border-right-style:hidden">1 Sgt Fabio Fulgêncio</td><td style="border-right-style:hidden">(31)97689.5643</td></tr>
                  <tr><td style="border-right-style:hidden">121.376-9</td><td style="border-right-style:hidden">2 Sgt Clemencia Fagundes</td><td style="border-right-style:hidden">(31)97781.0098</td></tr>
                  <tr><td style="border-right-style:hidden">135.876-2</td><td style="border-right-style:hidden">Soldado Juvenal Souza</td><td style="border-right-style:hidden">(31)98578.0989</td></tr>
                </tbody>
        </table>
      </div>
      <div class="form-group">
          <label for="ccc">Destinação</label>
            <select id=""  onChange="" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
              <option selected="selected" data-select2-id="3">selecione</option>
              <option value="1">GAECO Central</option>
              <option value="2">Central de custódia</option>
              <option value="3">CEAT</option>
            </select>  
      </div>
  </div>
    <!--FIM FORMULÀRIO-->
    <div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Fechar</button>
</div>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- FIM MODAL ORIENTAÇÕES-->

<!--MODAL ORIENTAÇÕES-->
<!-- SE FOR RECEBIMENTO -->
<div class="modal fade" id="modal-Recebimento">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div class="modal-header">
      <h4 class="modal-title" ><div id="dvPontoRec"></div></h4>
  </div>
  <div class="modal-body">
          <!--FORMULÀRIO-->
     <div class="form-group">
        <label for="ccc">Data/hora do cumprimento do M.B.A.</label>
        <input type="text" class="form-control" value="12/05/2022 04:34:12" placeholder="Horário que a equipe chegou no local"/>
     </div>
     <div class="form-group">
        <label for="ccc">Guarnição Policial</label>
        <table id="tb_modal" name="tb_modal" class="table table-bordered table-hover">
                  <thead id="theadM_1"><th style="border-right-style:hidden">MAMP/Matrícula</th><th style="border-right-style:hidden">Nome</th><th style="border-right-style:hidden">Contato</th></thead>
                  <tbody id="tbodyM_1">
                     <tr><td style="border-right-style:hidden">123.564-3</td><td style="border-right-style:hidden">1Sgt Antonieta</td><td style="border-right-style:hidden">(31)98221.4117</td></tr>
                  </tbody>
        </table>
    </div>
    <div class="form-group">
     <label for="ccc">Servidor do MP</label>
        <table id="tb_modal" name="tb_modal" class="table table-bordered table-hover">
          <thead id="theadM_1"><th style="border-right-style:hidden">MAMP/Matrícula</th><th style="border-right-style:hidden">Nome</th><th style="border-right-style:hidden">Contato</th></thead>
          <tbody id="tbodyM_1">
            <tr><td style="border-right-style:hidden">63876</td><td style="border-right-style:hidden">Lindomar Silva</td><td style="border-right-style:hidden">(31)98565.4367</td></tr>
          </tbody>
        </table>
      </div>
      <div class="form-group">
        <label for="ccc">RAT/BOS</label>
        <input type="text" class="form-control" value="2021-045455655-001" placeholder=""/>
     </div> 
     <div class="form-group">
        <label for="ccc">Nr. Lacre</label>
        <input type="text" class="form-control" value="565432" placeholder=""/>
     </div> 
     <div class="form-group">
        <label for="ccc">Local de entrega</label>
        <input type="text" class="form-control" value="GAECO - Central" placeholder=""/>
     </div>
     <div class="form-group">
        <label for="ccc">Responsável pelo recebimento</label>
        <table id="tb_modal" name="tb_modal" class="table table-bordered table-hover">
          <thead id="theadM_1"><th style="border-right-style:hidden">MAMP/Matrícula</th><th style="border-right-style:hidden">Nome</th><th style="border-right-style:hidden">Contato</th><th></th></thead>
          <tbody id="tbodyM_1">
            <tr><td style="border-right-style:hidden">63446</td><td style="border-right-style:hidden">Adolfo Braga Filho</td><td style="border-right-style:hidden">(31)98565.4367</td><td>
              
          </td>
            </td></tr>
          </tbody>
        </table>
     </div>
     <div class="form-group">
        <label for="ccc">Data/hora do Recebimento</label>
        <input type="text" class="form-control" value="12/05/2022 04:34:12" placeholder="Horário que a equipe chegou no local"/>
     </div>
     <div class="form-group">
        <label for="ccc">Evidências recebidas</label>
        <textarea class="form-control" id="endMBA"rows="7" placeholder="Definição de equipe do Centro de Comando e Controle" >
            1) Computador Intel i5  Série: 2376544679-09
            2) HD Externo Barracuda 1 TB Série: 2376544679-09
            3) Smartphone Sansumg Galaxy S9 Série: 2376544679-09
            4) Computador AMD 367  Série: 2376544679-09
            5) Computador 496 DX2 66 Série: 2376544679-09
            6) HD Externo SATA2 Sansumg 256 GB Série: 2376544679-09
        </textarea>
     </div>
  </div>
    <!--FIM FORMULÀRIO-->
    <div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Fechar</button>
</div>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- FIM MODAL ORIENTAÇÕES-->


<div class="wrapper"><?php include($path_menu)."include/notificacoes.php"?>
  <!-- Main Sidebar Container -->
<?php include($path_menu."include/menu.php")?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Operações em andamento</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicial</a></li>
              <li class="breadcrumb-item active">Operações em andamento</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
  $nomeOperacao = "Operação Sangria";
  $etapa = "Operação de Campo";
  // echo("Parametro -  ".$paramFiltro." ");
  if($paramFiltro!="ALL"){
    $sql="select nomeCaso, titular, status, etapa, ponto, endereco, alvo, setor from casos where nomeCaso='".$nomeOperacao."' and etapa='".$etapa."' and status='".$paramFiltro."' order by ponto";
  }else{
    $sql="select nomeCaso, titular, status, etapa, ponto, endereco, alvo, setor from casos where nomeCaso='".$nomeOperacao."' and etapa='".$etapa."'order by ponto";
  }
  $result= mysqli_query($conn, $sql);

?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
                        <div>
                          <select class="custom-select" style="width: auto;" data-sortorder="">
                          <option value="0"> Todas Operaçôes</option>
                          <option value="1"> Operação Ouro Negro</option>
                          <option value="2"> Operação esperança </option>
                          <option value="3"> Operação Falcão </option>
                          </select>
                        </div>
                        <br>
            <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="card-title">
                            Atividades em campo
                        </h4>
                    </div>
                    <div class="card-body">
                      <div>
                        <div class=" mb-2">
                          <a class="btn btn-info active" href="#" onClick="filtra('ALL')" data-filter="all"> Todas etapas </a>
                          <a class="btn btn-default" href="#" onClick="filtra('Auto de B.A.')" data-filter="1"> Auto de B.A.(Branco) </a>
                          <a class="btn btn-info" href="#" onClick="filtra('Recebimento')" data-filter="2"> Recebimento (Ciano) </a>
                          <a class="btn btn-warning" href="#" onClick="filtra('Deslacracao')" data-filter="3"> Deslacração (Amarelo) </a>
                          <a class="btn btn-secondary" href="#" onClick="filtra('Restituicao')" data-filter="3"> Restituição (Cinza) </a>
                          <a class="btn btn-success" href="#" onClick="filtra('Apreensao')" data-filter="3"> Apreensão (Verde) </a>
                        </div>
                      </div>


                        <!-- <div class="p-0 row">
                            <div class="col-sm-2 btn-default mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 01</h1>
                              <br>
                              <h3>Rua Levindo Torres, 42 - Bairro Horta Alvo - Aristóteles Augustus</h3>    
                            </div>
                            <div class="col-sm-2 btn-info mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 02</h1>
                              <br>
                              <h3>Rua Igarapoé, 118 - Bairro Almeida  - Alvo - Demétrios Damares</h3>    
                            </div>  
                            <div class="col-sm-2 btn-warning mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 03</h1>
                              <br>
                              <h3>Alameda da Paixão, 1.290 - Pradaria Alvo - Carmesia Borges</h3>    
                            </div>  
                            <div class="col-sm-2 btn-danger mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 04</h1>
                              <br>
                              <h3>Rua Aritimetica, 123 - Bairro Vikings  - Alvo - Carlos Damares</h3>    
                            </div>  
                            <div class="col-sm-2 btn-default mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 05</h1>
                              <br>
                              <h3>Rua Levindo Torres, 42 - Bairro Horta Alvo - Aristóteles Augustus</h3>    
                            </div>
                            <div class="col-sm-2 btn-info mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 06</h1>
                              <br>
                              <h3>Rua Igarapoé, 118 - Bairro Almeida  - Alvo - Demétrios Damares</h3>    
                            </div>  
                            <div class="col-sm-2 btn-warning mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 07</h1>
                              <br>
                              <h3>Alameda da Paixão, 1.290 - Pradaria Alvo - Carmesia Borges</h3>    
                            </div>  
                            <div class="col-sm-2 btn-danger mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                              <h1 class="d-flex justify-content-center">Ponto 08</h1>
                              <br>
                              <h3>Rua Aritimetica, 123 - Bairro Vikings  - Alvo - Carlos Damares</h3>    
                            </div>  
                        </div> -->
                        <?php
                          $nomeOperacao = "Operação Sangria";
                          $etapa = "Central de Custódia";
                          
                          if($paramFiltro!="ALL"){
                            $sql2="select nomeCaso, titular, status, etapa, ponto, endereco, alvo, setor from casos where nomeCaso='".$nomeOperacao."' and etapa='".$etapa."' and status='".$paramFiltro."' order by ponto";
                          }else{
                            $sql2="select nomeCaso, titular, status, etapa, ponto, endereco, alvo, setor from casos where nomeCaso='".$nomeOperacao."' and etapa='".$etapa."' order by ponto";
                          }
                            // echo($sql2);exit;
                          $result2= mysqli_query($conn, $sql2);
                        ?>
                        <div class="p-0 row">
                            <?php while($res = mysqli_fetch_array($result)){?>
                                <div class="col-sm-2 
                                <?php 
                                      if($res['status']=='Auto de B.A.'){echo('btn-default');};
                                      if($res['status']=='Recebimento'){echo('btn-info');}
                                      if($res['status']=='Deslacracao'){echo('btn-warning');}
                                      if($res['status']=='Apreensao'){echo('btn-success');}
                                      if($res['status']=='Restituicao'){echo('btn-secondary');}
                                ?> mx-1 mt-1" data-toggle="modal" 
                                <?php 
                                      if($res['status']=='Auto de B.A.'){echo('data-target="#modal-MBA"');};
                                      if($res['status']=='Recebimento'){echo('data-target="#modal-Recebimento"');};
                                      if($res['status']=='Deslacracao'){echo('data-target="#modal-Des"');};
                                      
                                ?>
                                onClick="document.getElementById('endMBA').value='<?php echo($res['endereco']);?>';
                                         document.getElementById('dvPonto').innerHTML='Cumprimento de MBA - Ponto <?php echo($res['ponto']);?>';
                                         document.getElementById('dvPontoRec').innerHTML='Recebimento - Ponto <?php echo($res['ponto']);?>';
                                         document.getElementById('dvPontoDes').innerHTML='Deslacração - Ponto <?php echo($res['ponto']);?>';"
                                >
                                  <h1 class="d-flex justify-content-center">Ponto <?php echo($res['ponto']);?></h1>
                                  <br>
                                  <h3><?php echo($res['endereco']);?>  - Alvo - <?php echo($res['alvo']);?></h3>    
                                </div>  
                          <?php }?>
                       </div>
              </div>
            </div>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h4 class="card-title">Central de custódia</h4>
              </div>
              <div class="card-body">
              <div>
                        <div class=" mb-2">
                          <a class="btn btn-info active" href="#" onClick="filtra('ALL')" data-filter="all"> Todas etapas </a>
                          <a class="btn btn-default" href="#" onClick="filtra('Analise')" data-filter="1"> Análise (Branco)</a>
                          <a class="btn btn-info" href="#" onClick="filtra('Relatorio')" data-filter="2"> Produção de relatório (Ciano)</a>
                        </div>
                      </div>
                <div class="row">
                  
                <?php while($res = mysqli_fetch_array($result2)){?>
                                <div class="col-sm-2 
                                <?php 
                                if($res['status']=='Analise'){echo('btn-default');};
                                if($res['status']=='Relatorio'){echo('btn-info');};
                                ?> mx-1 mt-1" data-toggle="modal" data-target="#modal-lgOrientacoes">
                                  <h1 class="d-flex justify-content-center">Ponto <?php echo($res['ponto']);?></h1>
                                  <br>
                                  <h3><?php echo($res['endereco']);?>  - Alvo - <?php echo($res['alvo']);?></h3>    
                                </div>  
                            
                <?php }?>
                  <!-- div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  });
  function filtra(i){
    document.getElementById('paramFiltro').value=i;
    document.getElementById('formFiltro').submit();
  }
</script>
</body>
</html>
