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
</head>

<body class="hold-transition sidebar-mini">

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
                <h2>AUTO DE ROMPIMENTO DE LACRE</h1>
           </div>
        </div>
        <div class="row ">
            <div class="col-md-12" style="text-align:justify">
                <h4 style="margin-right:40px;margin-left:40px;line-height:2">Aos <input type="text"size="3" class="border-bottom">
                 dias do mes de <input type="text"size="10" class="border-bottom">
                 de 2022, no município de  <input type="text"size="30" class="border-bottom">/MG, às <input type="text"size="4" class="border-bottom">: <input type="text"size="4" class="border-bottom"> hs, 
                 após a conferência de sua inviolabilidade, foi efetuado rompimento dos lacres contendo os equipamentos discriminados na tabela abaixo
                 apreendidos por ocasião do mandado de busca e apreensão expedido nos autos do processo 45736655-2022 da 
                 <input type="text"size="20" class="border-bottom" placeholder="designativo da vara"> da comarca de 
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


           </div>
        </div>
        
</body>
</html>