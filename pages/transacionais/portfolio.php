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
<style type="text/css">
#linha1:hover,#linha2:hover,#linha3:hover,#linha4:hover,#linha5:hover,#linha6:hover,#linha7:hover,#linha8:hover
{ 
z-index:-1;
background-color: rgba(0,0,0,0.1); 
transition: 0.2s;
opacity: 1 ;
}

</style>
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
                    <div class="form-group">
                    <div class="col-sm-12">
                                <label for="setor">Unidade apoiada</label>
                                <select  onchange="mudaCombo(this)"id="setor" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">GAECO CENTRAL</option>
                                  <option value="2">CAOET</option>
                                  <option value="3">CEAT</option>
                                  <option value="3">GCOC-R11 (Montes Claros/MG)</option>
                                </select>  
                            </div>
                    </div>
                    </div>


                    
                    
                        <div class="row">
                            <div class="col-sm-2">
                            <label for="pro">Tarefa</label>
                            </div>
                            <div class="col-sm-10">
                            <input type="text" size="10" class="form-control" id="tarefaTxt" placeholder="Defina a próxima Tarefa">
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

<script>
  function mostraPessoas(){
    document.getElementById('labelpessoa').style.display="block";
  }
  function funcao(e){
   var result = e.options[e.selectedIndex].value;
   result = result.trim()

   switch (result) {
      case "1":
        document.getElementById('linha4').style.display='none';
        document.getElementById('linha5').style.display='none';
        document.getElementById('linha6').style.display='none';
        document.getElementById('linha7').style.display='none';
        document.getElementById('linha8').style.display='none';
        break;
      case "2":
        document.getElementById('linha1').style.display='none';
        document.getElementById('linha2').style.display='none';
        document.getElementById('linha3').style.display='none';
        document.getElementById('linha7').style.display='none';
        document.getElementById('linha8').style.display='none';
        break;
      case "3":
        document.getElementById('linha1').style.display='none';
          document.getElementById('linha2').style.display='none';
          document.getElementById('linha4').style.display='none';
          document.getElementById('linha5').style.display='none';
          document.getElementById('linha6').style.display='none';
        break;
      default:
    console.log(`Sorry, we are out of ${expr}.`);
    }
  }
  function marcaTodos(){
    let enc = document.getElementById('aEncaminhar').style.display;
    if(enc=='none'){document.getElementById('aEncaminhar').style.display='inline-block';}else{document.getElementById('aEncaminhar').style.display='none';}
    let ch1=document.getElementById('check1');
    let ch2=document.getElementById('check2');
    let ch3=document.getElementById('check3');
    if(ch1.checked==false){ch1.checked=true;}else{ch1.checked=false;}
    if(ch2.checked==false){ch2.checked=true;}else{ch2.checked=false;}
    if(ch3.checked==false){ch3.checked=true;}else{ch3.checked=false;}
  }
  function marcaTodos2(){
    let enc = document.getElementById('aEncaminhar2').style.display;
    if(enc=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}
    let ch4=document.getElementById('check4');
    let ch5=document.getElementById('check5');
    let ch6=document.getElementById('check6');
    let ch7=document.getElementById('check7');
    let ch8=document.getElementById('check8');
    let ch9=document.getElementById('check9');
    if(ch4.checked==false){ch4.checked=true;}else{ch4.checked=false;}
    if(ch5.checked==false){ch5.checked=true;}else{ch5.checked=false;}
    if(ch6.checked==false){ch6.checked=true;}else{ch6.checked=false;}
    if(ch7.checked==false){ch7.checked=true;}else{ch7.checked=false;}
    if(ch8.checked==false){ch8.checked=true;}else{ch8.checked=false;}
    if(ch9.checked==false){ch9.checked=true;}else{ch9.checked=false;}
  }
</script>
<div class="wrapper">
<!--MODAL-->
    <?php include($path_menu."include/notificacoes.php");?>
      <!-- Main Sidebar Container -->
    <?php include($path_menu."include/menu.php");?>
      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper"style>
            <!--SETA-->
            <p style="margin-left: 20px;display:'block'" id="setaD">
              <a data-toggle="collapse"  href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              <button type="button" class="btn btn-secondary" id="seta"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fa fa-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"></path></svg>
              </button>
              </a>
              &nbsp;&nbsp;FILTROS
            </p>
            <!--FIM SETA-->
            <!--FILTROS-->
            <div class="collapse" id="collapseExample">
                  <div class="row">
                      <div class="col-sm-6">
                      <div class="card" style="margin-top: 30px;margin-left: 20px;">
                        <div class="card-body">
                          <div class="box-body">    
                            <div class="form-group">
                                <label for="procedimento">Procedimento</label>
                                <input  type="text" class="form-control" id="procedimento" placeholder="Digite o procedimento">
                            </div>
                            <div class="form-group">
                                <label for="setor">Unidade apoiada</label>
                                <select  onchange="mudaCombo(this)"id="setor" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">GAECO CENTRAL</option>
                                  <option value="2">CAOET</option>
                                  <option value="3">CEAT</option>
                                  <option value="3">GCOC-R11 (Montes Claros/MG)</option>
                                </select>  
                            </div>
                            <div class="form-group">
                              <label for="setor" id="alvo">Alvo</label>
                              <input type="text" class="form-control" id="alvo" placeholder="Digite o audio">
                            </div>
                            <div class="form-group">
                              <label for="setor" id="CMT">CMT Gru PM</label>
                              <input  type="text" class="form-control" id="CMT" placeholder="Identificador da evidência">
                            </div>
                            <div class="form-group">
                            <button onclick="javascript:escondeId()" class="btn btn-primary" style="visibility:hidden">
                              Pesquisar
                            </button>
                            </div>
                          </div><!--fim card box-->
                        </div><!--fim card body-->
                      </div><!--fim card-->
         
                      </div>
                      <div class="col-sm-6">
                      <div class="card" style="margin-top: 30px;margin-left: 20px;">
                        <div class="card-body">
                          <div class="box-body">    
                            <div class="form-group">
                                <label for="operacao">Operação</label>
                                <select  onchange="javascript:escondeId()" id="operacao" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">Operação Ouro negro</option>
                                  <option value="2">Operação esperança</option>
                                  <option value="3">Operação Falcão</option>
                                </select>  
                            </div>
                            <div class="form-group">
                                <label for="setor">Setor Atual</label>
                                <select  onchange="mudaCombo(this)"id="setor" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">GAECO CENTRAL</option>
                                  <option value="2">CAOET</option>
                                  <option value="3">CEAT</option>
                                </select>  
                            </div>
                            <div class="form-group">
                              <label for="setor" id="idEvi">Id Evidência</label>
                              <input type="text" onblur="javascript:escondeId()" class="form-control" id="idEvi" placeholder="Identificador da evidência">
                            </div>
                            <div class="form-group">
                              <label for="setor" id="evi">Evidência</label>
                              <input  type="text" class="form-control" id="evi" placeholder="Identificador da evidência">
                            </div>
                            <div class="form-group">
                            <button onclick="javascript:escondeId()" class="btn btn-primary">
                              Pesquisar
                            </button>
                            </div>
                          </div><!--fim card box-->
                        </div><!--fim card body-->
                      </div><!--fim card-->
              
                      </div>
                  </div>  <!--row-->
            </div>  <!--fim colapse-->

<!-- INICIO GRID -->
<hr>

<div class="row">

<!-- PONTO 1  AMARELO -->
        <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 01 - Rua Levindo Torres, 42 - Bairro Horta </h3>
                <h5 class="widget-user-desc">Alvo - Aristóteles Augustus</h5>
              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">Apreenção no Alvo (10/02/2022 05:40)</span><span title="Local" class="badge"><a target="_blank" href="../../dist/arquivos/aba.pdf">ABA</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="./timelineEvidencia.php?nome=Computador preto Dell Inspiron" class="nav-link">
                      Computador preto Dell Inspiron <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Smartphone Sansumg Galaxie S5" class="nav-link">
                      Smartphone Sansumg Galaxie S5 <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=HD Barracuda 512 GB" class="nav-link">
                      HD Barracuda 512 GB <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Documentos diversos" class="nav-link">
                      Documentos diversos <span class="float-right badge bg-danger">12</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

          <!-- PONTO 2 AMARELO-->

          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user6-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 02 - Rua Igarapoé, 118 - Bairro Almeida </h3>
                <h5 class="widget-user-desc">Alvo - Demétrios Damares</h5>
              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">Apreenção no Alvo (10/02/2022 05:40)</span><span title="3 New Messages" class="badge"><a target="_blank" href="../../dist/arquivos/aba.pdf">ABA</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Computador HP 17 preto" class="nav-link">
                    Computador HP 17 preto <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Notebook HP Compag" class="nav-link">
                      Notebook HP Compag <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=03 pen drives 16 GB" class="nav-link">
                      03 pen drives 16 GB <span class="float-right badge bg-success">03</span>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div><!--FIM PONTO 2-->
          <!-- PONTO 3 AMARELO-->

          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user5-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 03 - Alameda da Paixão, 1.290 - Pradaria </h3>
                <h5 class="widget-user-desc">Alvo - Carmesia Borges</h5>
              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">Apreenção no Alvo (10/02/2022 05:40)</span><span title="3 New Messages" class="badge"><a target="_blank" href="../../dist/arquivos/aba.pdf">ABA</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Smartphone xiaomi dourado" class="nav-link">
                    Smartphone xiaomi dourado <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Smartphone Iphone 12 pro" class="nav-link">
                    Smartphone Iphone 12 pro <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Midia em DVR" class="nav-link">
                      Midia em DVR  <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                 
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div><!--FIM PONTO 3-->

</div><!--FIM ROW-->
<hr>
<div class="row ">
        <!-- PONTO 1 AZUL CLARO -->
        <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 01 - Rua Levindo Torres, 42 - Bairro Horta </h3>
                <h5 class="widget-user-desc">Alvo - Aristóteles Agustus</h5>

              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">Secretaria GAECO</span><span title="3 New Messages" class="badge"><a target="_blank" href="../../dist/arquivos/restituicao.pdf">Recibo</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Computador preto Dell Inspiron" class="nav-link">
                    Computador preto Dell Inspiron  <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Smartphone Sansumg Galaxie S5" class="nav-link">
                    Smartphone Sansumg Galaxie S5 <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=HD Barracuda 512 GB" class="nav-link">
                      HD Barracuda 512 GB <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Documentos diversos" class="nav-link">
                      Documentos diversos <span class="float-right badge bg-danger">12</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

          <!-- PONTO 2 AZUL CLARO-->

          <div class="col-md-4 ">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user6-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 02 - Rua Igarapoé, 118 - Bairro Almeida </h3>
                <h5 class="widget-user-desc">Alvo - Demétrios Damares</h5>
              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">Secretaria GAECO</span><span title="3 New Messages" class="badge"><a target="_blank" href="../../dist/arquivos/restituicao.pdf">Recibo</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Computador HP 17 preto" class="nav-link">
                    Computador HP 17 preto <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=Notebook HP Compag" class="nav-link">
                      Notebook HP Compag <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <a href="./timelineEvidencia.php?nome=03 pen drives 16 GB" class="nav-link">
                      03 pen drives 16 GB <span class="float-right badge bg-success">03</span>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div><!--FIM PONTO 2-->

          <!-- PONTO 3 AZUL CLARO-->

          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user5-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 03 - Ponto 03 - Alameda da Paixão, 1.290 - Pradaria</h3>
                <h5 class="widget-user-desc">Alvo - Carmelia Borba</h5>
              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">Secretaria GAECO</span><span title="3 New Messages" class="badge"><a target="_blank" href="../../dist/arquivos/restituição.pdf">Recibo</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    Smartphone xiaomi dourado <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    Smartphone Iphone 12 pro <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Midia em DVR  <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                 
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div><!--FIM PONTO 3-->


</div><!--FIM ROW-->
<hr>
<div class="row">
        <!-- PONTO 1 VERDE-->
        <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                  <!-- /.widget-user-image -->
                  <h3 class="widget-user-username">Ponto 01 - Rua Levindo Torres, 42 - Bairro Horta </h3>
                  <h5 class="widget-user-desc">Alvo - Aristóteles Augustus</h5>
                  
                </div>
              <!--STATUS-->
                <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">GAECO Conferência</span><span title="3 New Messages" class="badge"><a target="_blank" href="./deslacracao.php">Auto de rompimento de lacre</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    Computador preto Dell Inspiron  <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    Smartphone Sansumg Galaxie S5 <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      HD Barracuda 512 GB <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Documentos diversos <span class="float-right badge bg-danger">12</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

          <!-- PONTO 2 VERDE-->

          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user6-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 02 - Rua Igarapoé, 118 - Bairro Almeida </h3>
                <h5 class="widget-user-desc">Alvo - Demétrios Damares</h5>
              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">GAECO Conferência</span><span title="3 New Messages" class="badge"><a href="./deslacracao.php">Auto de rompimento de lacre</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    Computador HP 17 preto <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Notebook HP Compag <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      03 pen drives 16 GB <span class="float-right badge bg-success">03</span>
                    </a>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div><!--FIM PONTO 2-->
          <!-- PONTO 3 VERDE-->

          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user5-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 03 - Ponto 03 - Alameda da Paixão, 1.290 - Pradaria </h3>
                <h5 class="widget-user-desc">Alvo -Carmelia Borba</h5>
              </div>
              <!--STATUS-->
              <div class="card-header"> 
                  <div class="card-tools">
                      <span title="3 New Messages" class="badge">GAECO Conferência</span><span title="3 New Messages" class="badge"><a href="./deslacracao.php">Auto de rompimento de lacre</a></span>
                  </div>
                </div>
                <!--FIM STATUS-->

              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    Smartphone xiaomi dourado <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                    Smartphone Iphone 12 pro <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Midia em DVR  <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                 
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div><!--FIM PONTO 3-->


</div><!--FIM ROW-->
<hr>
<div class="row">
        <!-- PONTO 1 AZUL ESCURO-->
        <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-primary">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                
                <h3 class="widget-user-username">Ponto 01 - Rua Levindo Torres, 42 - Bairro Horta </h3>
                <h5 class="widget-user-desc">Alvo - Aristóteles Agustus</h5>
                
              </div>
                <!--STATUS-->
                <div class="card-header"> 
                  <div class="card-tools">
                  <a id="aEncaminhar" style="display:none;" href="#" class="small-box-footer"  data-toggle="modal" data-target="#modal-lgE">Encaminhar <i class="fas fa-arrow-circle-right"></i></a>
                      <span title="3 New Messages" style="margin-right:15px;margin-top:5px" class="badge">GAECO Análise</span>
                      <input class="form-check-input" type="checkbox" value="" id="checkAll" onchange="marcaTodos()" style="margin-left:-10px;margin-top:5px" >
                  </div>
                </div>
                <!--FIM STATUS-->
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item" >
                    <input class="form-check-input" type="checkbox" value="" id="check1" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link" style="margin-left:10px;">
                    Computador preto Dell Inspiron  <span class="float-right badge bg-primary">Devolvido</span>
                     <span class="float-right badge" onclick="javascript:abreJanela()" role="button">Termo de restituição</span>
                    </a>
                  </li> 

                  <li class="nav-item">
                    <input class="form-check-input" type="checkbox" value="" id="check2" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link"  style="margin-left:10px;">
                      HD Barracuda 512 GB <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                      <input class="form-check-input" type="checkbox" value="" id="check3" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link"  style="margin-left:10px;">
                      Documentos diversos <span class="float-right badge bg-danger">Incluido nos autos</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>

          <!-- PONTO 2 AZUL ESCURO-->

          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
            
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-primary">
                
                <div class="widget-user-image">
                  <!--img class="img-circle elevation-2" src="../../dist/img/user6-128x128.jpg" alt="User Avatar"--cd -->
                </div>
                
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Ponto 02 e 03 </h3>
                <h5 class="widget-user-desc">Alvos - Demétrios Damares e Carmelia Borba</h5>
              </div>
                <!--STATUS-->
                <div class="card-header"> 
                  <div class="card-tools">
                    <a id="aEncaminhar2" style="display:none;" href="#" class="small-box-footer"  
                    data-toggle="modal" data-target="#modal-lgE">Encaminhar<i class="fas fa-arrow-circle-right"></i>
                  </a>
                      <span title="3 New Messages" class="badge" style="margin-right:15px;margin-top:5px">Encaminhado a CEAT</span>
                      <input class="form-check-input" type="checkbox" value="" id="checkAll" onchange="marcaTodos2()" style="margin-left:-10px;margin-top:5px" >
                  </div>
                </div>
                <!--FIM STATUS-->


              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                  <input class="form-check-input" type="checkbox" onchange="if(document.getElementById('aEncaminhar2').style.display=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}" value="" id="check4" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link"  style="margin-left:10px;">
                    Computador HP 17 preto <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <input class="form-check-input" type="checkbox" onchange="if(document.getElementById('aEncaminhar2').style.display=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}" value="" id="check5" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link"  style="margin-left:10px;">
                      Notebook HP Compag <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <input class="form-check-input" type="checkbox" onchange="if(document.getElementById('aEncaminhar2').style.display=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}" value="" id="check6" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link" style="margin-left:10px;">
                      03 pen drives 16 GB <span class="float-right badge bg-success">03</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <input class="form-check-input" type="checkbox" onchange="if(document.getElementById('aEncaminhar2').style.display=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}" value="" id="check7" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link" style="margin-left:10px;">
                    Smartphone xiaomi dourado <span class="float-right badge bg-primary">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <input class="form-check-input" type="checkbox" onchange="if(document.getElementById('aEncaminhar2').style.display=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}"value="" id="check8" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link" style="margin-left:10px;">
                    Smartphone Iphone 12 pro <span class="float-right badge bg-info">01</span>
                    </a>
                  </li>
                  <li class="nav-item">
                  <input class="form-check-input" type="checkbox" onchange="if(document.getElementById('aEncaminhar2').style.display=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}" value="" id="check9" style="margin-left:10px;margin-top:12px">
                    <a href="#" class="nav-link" style="margin-left:10px;">
                      Midia em DVR  <span class="float-right badge bg-success">01</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div><!--FIM PONTO 2-->
         

</div><!--FIM ROW-->

<!-- FIM GRID -->
  </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
  function escondeId(){
      document.getElementById('collapseExample').style.display='none';
  }
  function abreJanela(){
    window.open('../../dist/arquivos/restituicao.pdf', '_blank');
  }
  </script>
        <!-- Main Footer -->

        <footer class="main-footer">
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
          All rights reserved. 2376544679-09
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0 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
          </div>
        </footer>
  </body>
  </html>




