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
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
  <input type="hidden" id="numeroColuna">
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
                                      <label for="setor">Destino</label>
                                      <select  onchange="mudaCombo(this)"id="setor" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3">selecione</option>
                                        <option value="1">GAECO CENTRAL</option>
                                        <option value="2">CAOET</option>
                                        <option value="3">CEAT</option>
                                        <option value="4">GCOC-R11 (Montes Claros/MG)</option>
                                        <option value="5">Outra</option>
                                        <option value="5">Devolução</option>
                                      </select>  
                          </div>
                        </div>
                    </div>
                    <div class="row" id="destino" style="display:none">
                            <div class="col-sm-12">
                            <label for="pro">Descreva o destino</label>
                            </div>
                            <div class="col-sm-10">
                            <input type="text" size="10" value="" class="form-control" id="destino" placeholder="Descreva o destino">
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-sm-12">
                            <label for="pro">Tarefa</label>
                            </div>
                            <div class="col-sm-10">
                            <input type="text" size="10" class="form-control" id="tarefaTxt" placeholder="Defina a próxima Tarefa">
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                            <label for="pro">Digite o Token</label>
                            </div>
                            <div class="col-sm-12">
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
<button type="button" onclick="maisUmElemento(document.getElementById('numeroColuna').value,document.getElementById('tarefaTxt').value)" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Encaminhar</button>

</div>
</div>
</div>
</div>
<!--fim modal-->

<script>
 
  function mostraPessoas(){
    document.getElementById('labelpessoa').style.display="block";
  }
  function maisUmElemento(coluna,titulo){
    if(coluna==1){
      document.getElementById('spanTarefa1').innerHTML=titulo;
      document.getElementById('novaLinha1').style.display='inline-block';
    }
    if(coluna==2){
      document.getElementById('spanTarefa2').innerHTML=titulo;
      document.getElementById('novaLinha2').style.display='inline-block';
    }
    if(coluna==3){
      document.getElementById('spanTarefa3').innerHTML=titulo;
      document.getElementById('novaLinha3').style.display='inline-block';
    }
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
    let enc = document.getElementById('aEncaminhar1').style.display;
    if(enc=='none'){document.getElementById('aEncaminhar1').style.display='inline-block';}else{document.getElementById('aEncaminhar1').style.display='none';}
    let ch1=document.getElementById('check1');
    let ch2=document.getElementById('check2');
    let ch3=document.getElementById('check3');
    let ch4=document.getElementById('check4');
    if(ch1.checked==false){ch1.checked=true;}else{ch1.checked=false;}
    if(ch2.checked==false){ch2.checked=true;}else{ch2.checked=false;}
    if(ch3.checked==false){ch3.checked=true;}else{ch3.checked=false;}
    if(ch4.checked==false){ch4.checked=true;}else{ch4.checked=false;}
  }
  function marcaTodos2(){
    let enc = document.getElementById('aEncaminhar2').style.display;
    if(enc=='none'){document.getElementById('aEncaminhar2').style.display='inline-block';}else{document.getElementById('aEncaminhar2').style.display='none';}
    let ch5=document.getElementById('check5');
    let ch6=document.getElementById('check6');
    let ch7=document.getElementById('check7');

    if(ch5.checked==false){ch5.checked=true;}else{ch5.checked=false;}
    if(ch6.checked==false){ch6.checked=true;}else{ch6.checked=false;}
    if(ch7.checked==false){ch7.checked=true;}else{ch7.checked=false;}

  }function marcaTodos3(){
    let enc = document.getElementById('aEncaminhar3').style.display;
    if(enc=='none'){document.getElementById('aEncaminhar3').style.display='inline-block';}else{document.getElementById('aEncaminhar3').style.display='none';}
    let ch8=document.getElementById('check8');
    let ch9=document.getElementById('check9');
    let ch10=document.getElementById('check10');

    if(ch8.checked==false){ch8.checked=true;}else{ch8.checked=false;}
    if(ch9.checked==false){ch9.checked=true;}else{ch9.checked=false;}
    if(ch10.checked==false){ch10.checked=true;}else{ch10.checked=false;}
  }
function mudaCombo(obj){
  if(obj.value==5){
    document.getElementById('destino').style.display="block"}
  else{document.getElementById('destino').style.display="none"};
}
</script>
<div class="wrapper">
    <?php include($path_menu."include/notificacoes.php");?>
      <!-- Main Sidebar Container -->
    <?php include($path_menu."include/menu.php");?>
      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
                                <label for="setor"> Destino</label>
                                <select  onchange="mudaCombo(this)"id="setor" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                  <option selected="selected" data-select2-id="3">selecione</option>
                                  <option value="1">GAECO CENTRAL</option>
                                  <option value="2">CAOET</option>
                                  <option value="3">CEAT</option>
                                  <option value="4">GCOC-R11 (Montes Claros/MG)</option>
                                  <option value="5">Outros</option>
                                  <option value="5">Devolução</option>
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
            </div> 

        <!-- ETAPA AMARELA -->
        <div class="content-wrapper" style="min-height: 3663.94px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Collapsed Sidebar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Collapsed Sidebar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                Start creating your amazing application!
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
        <!-- FIM ETAPA AMARELA -->
      
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="../../dist/js/demo.js"></script>
  <script src="../../dist/js/adminlte.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../plugins/jquery/jquery.min.js"></script>
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




