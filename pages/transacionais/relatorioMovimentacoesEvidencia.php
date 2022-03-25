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
<div class="wrapper">

<!--MODAL OBSERVAÇÕES-->
<div class="modal fade" id="modal-lgObs">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Detalhes na movimentação</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
          </div>
            <div class="modal-body">
                <p>
                <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group">
                          <label for="obs">Observação</label>
                          <textarea class="form-control" id="obs"rows="3" placeholder=""  readonly>Foi feita a Extração Via CELLEBRITE de dados num total de 783 GB. e Feita a análise de dados conforma relatório de extração. 
                          </textarea>
                      </div>  
                      <br/>
                      <!--arquivos-->
                      <div>
                        <a href="../../dist/arquivos/relatorioExtracao.txt" target="_top">relatorioExtracao</a>
                      </div>
                  </div>
                </div>
                <!--fim arquivos-->
                </p>
            </div>
          <div class="modal-footer justify-content-between"></div>
        </div>
    </div>
</div>
<!--fim modal observações-->



<!--MODAL-->
<div class="modal fade" id="modal-lg">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Movimentar evidência</h4>
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
                              <td style="border-right-style:hidden"  colspan="3"><b>Nr Lacre</b> 811193</td>
                        </tr> 
                        <tr id="linha1">
                              <td style="border-right-style:hidden"  colspan="3"><b>Local de origem</b> Central de cutódia GAECO</td>
                        </tr> 
                        <tr id="linha1">
                              <td style="border-right-style:hidden"  colspan="3"><b>Data de origem </b>22/04/2022</td>
                        </tr>
                        <tr id="linha1">
                              <td style="border-right-style:hidden"  colspan="3"><b>Responsável atual:</b>Nr.: (108.908-2) 2 Sgt Carlos Magno</td>
                        </tr>
                        <tr>
                              <td style="border-right-style:hidden" colspan="3"> 
                                  <div class="form-group">
                                    <label for="responsavel">Local Destino</label>
                                    <select  onchange="mudaCombo(this)"id="ope" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                      <option selected="selected" data-select2-id="3">selecione</option>
                                      <option value="1">Secretaria GAECO</option>
                                      <option value="2">Secretaria CAOET</option>
                                      <option value="3">COECIBER</option>
                                      <option value="3">Secretaria CEAT</option>
                                      <option value="3">Externos</option>
                                    </select>  
                                  </div>       
                              </td>
                        </tr>  
                        <tr id="linha1">
                               <td width="10%" style="border-right-style:hidden">
                                <label for="mamp">MAMP/Matrícula</label>
                                <input type="text" class="form-control" id="mamp" placeholder="Digite o MAMP o Matrícula">
                               <td width="80%" style="border-right-style:hidden">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do destinatário">
                              </td>
                              <td width="10%" style="vertical-align: bottom"><a href="#" onclick="document.getElementById('alertaArea').style.display='block'"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                          </div>
                        </tr> 
                        <tr><td colspan="3"><a href="#" class="text-decoration-none" onclick="document.getElementById('recebedor').style.display='block'"><p id="alertaArea" name="alertaArea" style="display:none;">(6752) Maria Cláudia Agustin</p></a></td></tr>
                        <tr id="linha1">
                              <td style="border-right-style:hidden"  colspan="3">
                                <div class="form-group">
                                  <label for="obs">Observação</label>
                                  <textarea class="form-control" id="obs"rows="3" placeholder="" ></textarea>
                                </div>  
                            </td>
                        </tr>
                        <tr id="linha1">
                             <td style="border-right-style:hidden"  colspan="3">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Anexos</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </td>
                        </tr>

              </tbody>
            </table>
            <div style="margin-top:20px;margin-bottom:20px">
                  Nr.: (108.908-2) 2 Sgt Carlos Magno&nbsp;&nbsp;&nbsp;
                  <div onclick="javascript:botao=1" class="btn btn-primary" data-toggle='modal' data-target='#modal-lg2'>Assinar</div>
                
                <div id="assinado" style="display:none;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
                        <path d="M2 2h2v2H2V2Z"></path>
                        <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"></path>
                        <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"></path>
                        <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"></path>
                        <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"></path>
                      </svg>&nbsp;&nbsp;
                      Assinado em 12/04/2022 10:40
                </div>
          </div>

              <div id="recebedor" style="display:none;" name="recebedor" style="display:none;">
                (6752) Maria Cláudia Agustin&nbsp;&nbsp;&nbsp;
                <div onclick="javascript:botao=2"class="btn btn-primary" data-toggle='modal' data-target='#modal-lg2'>
                  Receber
                </div>
              </div>
            <div id="recebido" style="display:none;">
          
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"></path>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"></path>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"></path>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"></path>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"></path>
             </svg>&nbsp;&nbsp;
          Assinado em 12/04/2022 10:45
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
<div class="modal fade" id="modal-lg2">
<div class="modal-dialog modal-lg">
<div class="modal-content">
 <div class="modal-header">
<h4 class="modal-title">Assinar</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<p>
<div class="row">
  <div class="col-sm-2">
</div>
<container>
    <td width="80%" style="border-right-style:hidden">
    <label for="token">Token</label>
    <input type="text" class="form-control" id="token" placeholder="Digite token" >
    </td>
    <br>
    <button onclick="javascript:assinar(botao)" type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Enviar</button>
</container>
</div>
</p>
</div>
<div class="modal-footer justify-content-between">
</div>
</div>
</div>
</div>
<!--fim modal-->


<!--MODAL-->
    <?php include($path_menu."include/notificacoes.php");?>
      <!-- Main Sidebar Container -->
    <?php include($path_menu."include/menu.php");?>
      <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
<!--CARD CABECALHO-->
<br>
<div style="align:left;margin-left:30px;margin: top 20px;">
  <div class="card">
    <div class="card-body">
      <div class="card-box">
              <h5 style="color:#D2691E"><b>Computador Intel i5</b></h5>
              <p class="card-text">
                <b>Operação:</b>Operação Ouro Negro<br/>
                <b>Promotor responsável:</b>Dr. Anderson França<br/>
                <b>Procedimento:</b>PAAF - 6567865-2021<br/>
                <b>Processo:</b>2376544679-09<br/>
                <b>Endereço da Apreenção:</b>Rua Guaciana, 397, Bairro Campana, Lavras-MG<br/>
                <b>Complemento:</b>Escritório sala 01<br/>
                <b>Ponto:</b>07<br/>
              </p>
              <a href="#" class="btn btn-primary" data-toggle='modal' data-target='#modal-lg'>Encaminhar </a>   (Responsável atual: 2 Sgt Carlos Magno)            
      </div>
    </div>
  </div>
</div>
<!--FIM CARD-->

<!-- INICIO GRID DETALHE -->
<div class="container-fluid" style="display:block;margin-left: 20px;margin-top:30px" id="tabela2" >
<div class="row" style="border-top-left-radius: 0.5em 0.5em;border-top-right-radius: 0.5em 0.5em;font-weight: bold;  margin-right: 5px; color: gainsboro; padding: 15px; background-color: #808080;">
            <div class="col-xs-2" style="width: 2%;">ID </div>  
            <div class="col-xs-2" style="width: 6%;">Lacre nº</div>
            <div class="col-xs-2" style="width: 10%;">Data/Hora origem:</div> 
            <div class="col-xs-2" style="width: 12%;">Local origem:</div>
            <div class="col-xs-2" style="width: 24%;">Nome e Assinatura origem:</div>
            <div class="col-xs-2" style="width: 10%;">Data/Hora destino:</div>
            <div class="col-xs-2" style="width: 12%;">Local destino:</div>
            <div class="col-xs-2" style="width: 24%;">Nome e Assinatura destino:</div>
          </div>
          <!--COMEÇA LINHAS-->
          <div onclick="mostrarTabela()" class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 2%;">001</div>    
            <div class="col-xs-2" style="width: 6%;">766768</div> 
            <div class="col-xs-2" style="width: 10%;">10/02/2021 06:00</div>
            <div class="col-xs-2" style="width: 12%;">Ponto 09</div>
            <div class="col-xs-2" style="width: 22%;">Nr.: 108.908-2 Sgt Carlos Magno -<br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"/>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
             </svg>
            Assinado digitalmente em 10/02/2021 05:58</div>
            <div class="col-xs-2" style="width: 10%;">10/02/2021 11 :00</div>
            <div class="col-xs-2" style="width: 12%;">Secretaria GAECO</div>
            <div class="col-xs-2" style="width: 22%;">Marcia Faria (MG 234.345.2) -<br>
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"/>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
             </svg>
            Assinado digitalmente em 10/02/2021 07:16
          </div>
          <div style="width: 2%;" >
             <i class="fa fa-info" style="font-size:36px" data-toggle='modal' data-target='#modal-lgObs'></i>
          </div>
          </div>
          <!--LINHA 2-->
          <div onclick="mostrarTabela()" class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 2%;">002</div>    
            <div class="col-xs-2" style="width: 6%;">766768</div> 
            <div class="col-xs-2" style="width: 10%;">12/02/2021 10:25</div>
            <div class="col-xs-2" style="width: 12%;">Secretaria GAECO</div>
            <div class="col-xs-2" style="width: 22%;">Marcia Faria (MG 234.345.2)  -<br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"/>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
             </svg>
            Assinado digitalmente em 10/02/2021 05:58</div>
            <div class="col-xs-2" style="width: 10%;">12/02/2021 10:25</div>
            <div class="col-xs-2" style="width: 12%;">Central de custódia GAECO</div>
            <div class="col-xs-2" style="width: 22%;">Nr.: 098.543-7 3 Sgt Fafael Gartner<br>
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"/>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
             </svg>
            Assinado digitalmente em 12/02/2021 10:30
          </div>
          <div style="width: 2%;" >
            <i class="fa fa-info" style="font-size:36px" data-toggle='modal' data-target='#modal-lgObs'></i>
          </div>

          </div>
          <!--linha3-->
          <div onclick="mostrarTabela()" class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 2%;">003</div>    
            <div class="col-xs-2" style="width: 6%;">766768</div> 
            <div class="col-xs-2" style="width: 10%;">16/02/2021 09:40</div>
            <div class="col-xs-2" style="width: 12%;">Central de custódia GAECO</div>
            <div class="col-xs-2" style="width: 22%;">Nr.: 098.543-7 3 Sgt Fafael Gartner -<br><p style="color:red">Não assinado</p></div>
            <div class="col-xs-2" style="width: 10%;">16/02/2021 09:40</div>
            <div class="col-xs-2" style="width: 12%;">Analista GAECO</div>
            <div class="col-xs-2" style="width: 22%;">Nr.: 135.555-9 Cabo Wanderley Miranda -<br>
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"/>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
             </svg>
            Assinado digitalmente em 16/02/2021 09:54
          </div>
            <div style="width: 2%;" >
              <i class="fa fa-info" style="font-size:36px" data-toggle='modal' data-target='#modal-lgObs'></i>
            </div>
          </div>
          <!--Quata linha-->
          <div onclick="mostrarTabela()" class="row" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
            <div class="col-xs-2" style="width: 2%;">004</div>    
            <div class="col-xs-2" style="width: 6%;">811193</div> 
            <div class="col-xs-2" style="width: 10%;">23/04/2021 16:09</div>
            <div class="col-xs-2" style="width: 12%;">Analista do GAECO</div>
            <div class="col-xs-2" style="width: 22%;">Nr.: 108.908-2 Sgt Carlos Magno -<br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"/>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
             </svg>
            Assinado digitalmente em 23/04/2021 16:18</div>
            <div class="col-xs-2" style="width: 10%;">23/04/2021 16:09</div>
            <div class="col-xs-2" style="width: 12%;">Central de cutõdia GAECO</div>
            <div class="col-xs-2" style="width: 22%;">Nr.: 098.543-7 3 Sgt Fafael Gartner -<br>
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-qr-code" viewBox="0 0 16 16">
              <path d="M2 2h2v2H2V2Z"/>
              <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z"/>
              <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z"/>
              <path d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z"/>
              <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z"/>
             </svg>
            Assinado digitalmente em 23/04/2021 16:20
          </div>
            <div style="width: 2%;" >
              <i class="fa fa-info" style="font-size:36px" data-toggle='modal' data-target='#modal-lgObs'></i>
            </div>
          </div>
          
     </div>
  <!-- FIM GRID DETALHE -->
  </div>
</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    botao=1;
  function mostrarTabela(){
      document.getElementById('tabela').style.display='none';
      document.getElementById('tabela2').style.display='block';
  }
  function assinar(id){
    document.getElementById('token').value='';
    if(id==1){
      document.getElementById('assinado').style.display='block';
    }
    if(id==2){
      document.getElementById('recebido').style.display='block';
    }
    
  }
  </script>
        <!-- Main Footer -->

        <footer class="main-footer">
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
          </div>
        </footer>
  </body>
  </html>




