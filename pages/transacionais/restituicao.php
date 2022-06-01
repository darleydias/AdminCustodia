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
  <title>Auto de deslacração</title>
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
<?php include($path_menu."include/notificacoes.php");?>
  <!-- Main Sidebar Container -->
<?php include($path_menu."include/menu.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

        <!-- INICIO DOCUMENTO -->
        <div class="row ">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <img src="<?php echo($path_page)?>dist/img/brasao.png">
            </div>
            <div class="col-md-5"></div>
        </div>  
        <div class="row ">
            <div class="col-md-12" style="text-align:center">
                <h1>MINISTÉRIO PÚBLICO DO ESTADO DE MINAS GERAIS</h1>
           </div>
        </div>
        <div class="row ">
            <div class="col-md-12" style="text-align:center">
                <h2>TERMO DE RESTITUIÇÃO</h1>
           </div>
        </div>
        <div class="row ">
            <div class="col-md-12" style="text-align:justify">
                <h4 style="margin-right:40px;margin-left:40px;line-height:2">Aos<input type="text"size="3" class="border-bottom">
                 dias do mes de <input type="text"size="10" class="border-bottom">
                 de 2022, no município de  <input type="text"size="30" class="border-bottom">/MG, às <input type="text"size="4" class="border-bottom">: <input type="text"size="4" class="border-bottom"> hs, 
                 foram restituídos por determinação do promotor de justiça <input type="text"size="20" class="border-bottom" placeholder=" Nome da autoridade"> os materiais e objetos abaixo relacionados, apreendidos em 
                 <input type="text"size="3" class="border-bottom">/ <input type="text"size="3" class="border-bottom">/ <input type="text"size="3" class="border-bottom">, na sede da empresa <input type="text"size="20" class="border-bottom">, situada 
                 na rua <input type="text"size="20" class="border-bottom">, Nr. <input type="text"size="8" class="border-bottom">, Bairro <input type="text"size="20" class="border-bottom">, na cidade de <input type="text"size="20" class="border-bottom" >/MG, em cumprimento ao mandado de busca e apreensão expedida nos autos da cautelar <input type="text"size="10" class="border-bottom">
                 <input type="text"size="20" class="border-bottom"> da comarca de 
                 <input type="text"size="20" class="border-bottom"> MG.
              </h4>



              <table id="tb_ponto" class="table table-bordered table-hover">
                    <thead id="thead_1">
                        <tr style="margin-left:150px;margin-right:150px;">                       
                            <th style="border-right-style:hidden">LACRE</th>                       
                            <th style="border-right-style:hidden">PONTO</th> 
                            <th style="border-right-style:hidden">DESCRIÇÃO</th>                      
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

                        <tr style="margin-left:150px;margin-right:150px;">
                            <td style="border-right-style:hidden">6543 </td>
                            <td style="border-right-style:hidden">08</td>
                            <td style="border-right-style:hidden">Computador preto Dell Inspiron </td>
                            <td>
                                <div class="float-right">
                                <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                                    <i class="fa fa-minus-circle" style="font-size:28px;color:red"></i>
                                </a>
                                </div>
                            </td>
                        </tr>
                        <tr style="margin-left:150px;margin-right:150px;">
                            <td style="border-right-style:hidden">6543</td>
                            <td style="border-right-style:hidden">Smartphone Sansumg Galaxie S5</td>
                            <td style="border-right-style:hidden">08</td>
                            <td>
                                <div class="float-right">
                                <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                                    <i class="fa fa-minus-circle" style="font-size:28px;color:red"></i>
                                </a>
                                </div>
                            </td>
                        </tr>
                        <tr style="margin-left:150px;margin-right:150px;">
                            <td style="border-right-style:hidden">6543</td>
                            <td style="border-right-style:hidden">08</td>
                            <td style="border-right-style:hidden">HD Barracuda 512 GB </td>
                            <td>
                                <div class="float-right">
                                <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                                    <i class="fa fa-minus-circle" style="font-size:28px;color:red"></i>
                                </a>
                                </div>
                            </td>
                        </tr>
                        <tr style="margin-left:150px;margin-right:150px;">
                            <td style="border-right-style:hidden">6543</td>
                            <td style="border-right-style:hidden">08</td>
                            <td style="border-right-style:hidden">Documentos diversos</td>
                            <td>
                                <div class="float-right">
                                <a href="#" onclick="this.parentNode.parentNode.parentNode.style.display = 'none'">
                                    <i class="fa fa-minus-circle" style="font-size:28px;color:red"></i>
                                </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br><br><br>
               <h4> Nada mais havendo, após conferência dos materiais listados, tendo sido dispensada a verificação de funcionamento dos aparelhos eletrônicos, encerra-se o presente termo. </h4>
                <br><br><br>
                <!--Assinatura-->
                <div class="form-group text-justify" style="margin-left:50px;margin-right:50px">
                    <div class="row">
                    <div class="col-lg-2">
                        <label for="mampModal">MAMP/Matrícula</label>
                        <input type="text" class="form-control" id="mampModal" placeholder="Digite o MAMP o Matrícula">
                    </div>
                    <div class="col-lg-8">
                        <label for="nomeModal">Nome</label>
                        <input type="text" class="form-control" id="nomeModal" placeholder="Digite o nome do participante">
                    </div>
                    <div class="col-lg-2">
                        <br>
                    <a onclick="document.getElementById('alerta').style.display='block'" href="javascript:void(0)" class="btn btn-info" aria-hidden="true">Pesquisar</a>
                    </div>
                    </div>
                </div>
                <span id="alerta" style="display:none;">
                    <br><br>
                    <div class="container-fluid" style="margin-left: 20px;">
                        <div class="row" onclick="mostraAssinatura('Carla Parocinio Amaral')" id="linha1" style="border-top: solid; border-top-width: 0.1px;border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
                            <div class="col-xs-2" style="width: 20%;">6549</div>    
                            <div class="col-xs-2" style="width: 80%;">Carla Parocinio Amaral</div>
                        </div>
                        <div class="row" onclick="mostraAssinatura('Carlos Alberto Vaccinati')" id="linha1" style="border-bottom: solid; border-bottom-width: 0.1px; margin-right: 5px; padding: 15px;'">
                            <div class="col-xs-2" style="width: 20%;">6549</div>    
                            <div class="col-xs-2" style="width: 80%;">Carlos Alberto Vaccinati </div>
                        </div>
                    </div>
                </span>
                <!--Assinatura-->
                <br><br>
                <span id="assinatura" style="display:none;">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-center">
                        _______________________________________________
                        </div>
                        <div class="col-md-4">
                       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-center" id="nomeAssina">
                        Carla Parocinio Amaral, Promotora de Justiça. 
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </span>
                <div class="float-right">
                    <a href="javascript:void(0);" class="btn btn-info" onclick="">
                        Salvar
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a href="../../dist/arquivos/termo_restituicao.png" class="btn btn-info" target="_blank">
                        Gerar PDF
                    </a>
                </div>
           </div>
        </div>
        </div></div></div></div>

        <script>
            function mostraAssinatura(nome){
                document.getElementById('alerta').style.display='none';
                document.getElementById('assinatura').style.display='block';
                document.getElementById('nomeAssina').innerHTML=nome;
            }
        </script>
        
</body>
</html>