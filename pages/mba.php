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
<!-- Ant css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/antd/4.20.7/antd.compact.min.css">


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin=""/>
    
    <style>
      #location-map{
        background: #fff;
        border: none;
        height: 540px;
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
      }
    </style>

</head>
<body class="hold-transition sidebar-mini">
  <?php 
  if(isset($_POST['paramFiltro'])) {
   $paramFiltro = $_POST['paramFiltro'];
  }else{
    $paramFiltro="ALL";
  }
  echo($paramFiltro);
?>
<form action="mba.php" method="post" id="formFiltro"><input type="hidden" name="paramFiltro" id="paramFiltro" value="<?php echo($paramFiltro);?>"></form>
<!-- FIM MODAL ORIENTAÇÕES-->
<!-- SE FOR RECEBIMENTO -->
<div class="modal fade" id="modal-MBA"><div class="modal-dialog modal-lg">
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
  </div></div><br>
  <form name="from_modal" id="form_proc" style="display:block">
      <div class="card">
        <div class="card-body">
          <div class="box-body">
            <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label for="ccc">Início: </label>
                <div>12/05/2022 05:30:00</div>
              </div>
              <div class="col-sm-6">
                <label for="ccc">Término: </label>
                <div>12/05/2022 15:45:00</div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                  <label for="ccc">Alvo: </label>
                  <div>Marcelina Casanova</div>
              </div>
              <div class="col-sm-6">
                  <label for="ccc">End.: </label>
                  <div>Rua Croácia, 1.572 - Casa Velha</div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                  <label for="ccc">Equipe: </label>
                  <div>Marcelina Casanova</div>
              </div>
              <div class="col-sm-6">
                  <label for="ccc">End.: </label>
                  <div>Sgt Gervásio 3 Cia Ind + 03</div>
              </div>
            </div>

            <br>
                  
                              <div style="margin-top:4px"><b>Evidências obtidas</b></div><br>
                              <div style="margin-top:4px"><b>1) Computador Intel i5  Série: 2376544679-09</b></div><br>
                  
        </div>



             <table id="tb_modal" class="table table-bordered table-hover">
              <tbody id="tbodyM_1">
              <img src="../dist/fotos/op012/ponto01/foto01.jpg" width="700" height="860">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <div style="margin-top:4px"><b>2) Desktop sem marca  Série: 2376544679-09</b></div><br>
                <img src="../dist/fotos/op012/ponto01/foto02.jpg" width="700" height="860">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <div style="margin-top:4px"><b>3) Smartphone Iphone 12  Série: 2376544679-09</b></div><br>
                <img src="../dist/fotos/op012/ponto01/foto03.jpg" width="100%" height="100%" >
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <div style="margin-top:4px"><b>4) Samsumg Galaxy 4  Série: 2376544679-09</b></div><br>
                <img src="../dist/fotos/op012/ponto01/foto04.jpg" >
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <div style="margin-top:4px"><b>5) 42 pastas de documentos fiscais</b></div><br>
                <img src="../dist/fotos/op012/ponto01/foto05.jpg" width="100%" height="10%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <div style="margin-top:4px"><b>6)  73 pastas de documentos diversos</b></div><br>
                <img src="../dist/fotos/op012/ponto01/foto06.jpg" width="100%" height="100%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <div style="margin-top:4px"><b>7) HD Externo Barracuda 512 GB</b></div><br>
                <img src="../dist/fotos/op012/ponto01/foto07.jpg" width="100%" height="10%">
                <div>SHA1 -de9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3e9f2c7fd25e1b3afad3e85a0bd17d9b100db4b3</div>
                <div style="margin-top:4px"><b>8) HD Externo Tanderbolt </b></div><br>
                <img src="../dist/fotos/op012/ponto01/foto08.jpg" width="100%" height="100%">
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
<!-------------------------------------------------------------------------------- FIM MODAL ORIENTAÇÕES----------------------------------------------------------->
<div class="wrapper"><?php include($path_menu)."include/notificacoes.php"?>
  <!-- Main Sidebar Container -->
<?php include($path_menu."include/menu.php")?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1>Cumprimento de M.B.A.</h1> 
            <select class="custom-select" style="width: auto;margin-top:-50px;margin-left:400px" data-sortorder="">
                <option value="0"> Todas Operaçôes</option>
                <option value="1"> Operação Ouro Negro</option>
                <option value="2"> Operação esperança </option>
                <option value="3"> Operação Falcão </option>
            </select>
          </div>
          <div class="col-sm-2">
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
                         
                        </div>
                        
                        <br>
            <div class="card card-primary">
                    <div class="card-header" style="margin-top:-40px">
                        Operação Ouro Branco.
                    </div>
                    <div class="card-body">

                      <div>
                        <div class=" mb-2">
                          <a class="btn btn-info active" href="#" onClick="filtra(1,1,1,1,1,1,1)" data-filter="all"> Todos pontos </a>
                          <a class="btn bg-secondary" href="#" onClick="filtra(1,1,0,0,0,0,0)" data-filter="1"> Não abordado </a>
                          <a class="btn btn-warning " href="#" onClick="filtra(1,0,1,0,0,1,1)" data-filter="2"> B.A Em andamento </a>
                          <a class="btn btn-success" href="#" onClick="filtra(0,0,0,1,1,0,0)" data-filter="3"> Concluído</a>
                          
                        </div>
                             <div id="location-map"></div>
                        <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js" integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg==" crossorigin=""></script>
                      
                      
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
<style>
 img.cinza   { filter: opacity(0.8) invert(45%) sepia(12%) saturate(5%) hue-rotate(321deg) brightness(85%) contrast(84%); }
 img.verde { filter: opacity(0.8) invert(61%) sepia(12%) saturate(2759%) hue-rotate(71deg) brightness(102%) contrast(93%);}
 img.amarelo   { filter: invert(62%) sepia(100%) saturate(355%) hue-rotate(2deg) brightness(88%) contrast(97%);}
</style>
<script type="text/javascript">
    var p0=1;var p1=1;var p2=1;var p3=1;var p4=1;var p5=1;var p6=1;
    var marker,marker1,marker2,marker3,marker4,marker5,marker6;
    <?php 
    if($paramFiltro=='1100000'){?>
      p0=1;p1=1;p2=0;p3=0;p4=0;p5=0;p6=0
    <?php
    }
    if($paramFiltro=='1010011'){?>
      p0=0;p1=0;p2=1;p3=0;p4=0;p5=1;p6=1;
    <?php
    }
    if($paramFiltro=='1010011'){?>
      p0=0;p1=0;p2=1;p3=0;p4=0;p5=1;p6=1;
    <?php
    }
    if($paramFiltro=='0001100'){?>
      p0=0;p1=0;p2=0;p3=1;p4=1;p5=0;p6=0;
    <?php
    }
    ?>
      const myCustomColour = '#5f93ed'
      var map = L.map('location-map',{ center: [-19.9227479,-43.9391486], zoom: 15 });
      mapLink = '<a href="https://openstreetmap.org">OpenStreetMap</a>';
      L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy; ' + mapLink,
          maxZoom: 20,
        }).addTo(map);
        let iconOptions = {
           title:'Ponto 1',
           draggable:true,
           html: `<span style="">x</span>`,
        }

        if(p0==1){
          marker = L.marker([-19.9175030,-43.9363356],iconOptions).addTo(map).bindPopup('<b>Ponto 1.</b><br><br><b>Alvo:</b>Aroldo Marcilio de Jesus, 27<br><b>End.:</b> Rua Clávis, 223 - Bom Retiro<br><b>Equipe:</b> Sgt Gervásio 3 Cia Ind + 03<br><b>Contato:</b> (31)98565-4333');
          marker._icon.classList.add("cinza");
        }
        if(p1==1){
          marker1 = L.marker([-19.917318,-43.9412288]).addTo(map).bindPopup('<b>Ponto 2.</b><br><br><b>Alvo:</b>Carlos Eduardo da Silva, 42 <br><b>End.:</b> Rua Croácia, 127 - Venda Nova<br><b>Equipe:</b> Sgt Gervásio 3 Cia Ind + 03<br><b>Contato:</b> (31)98565-4333');
          marker1._icon.classList.add("cinza");
        }
        if(p2==1){
          marker2 = L.marker([-19.9227479,-43.9391486]).addTo(map).bindPopup('<b>Ponto 3.</b><br><br><b>Chegada no local:</b> 04/03/2012 05:07<br><b>Alvo:</b>Antônio Ramires Caldeira, 23<br><b>End.:</b> Beco do Jacaré, 2227 - Vila Árabe<br><b>Equipe:</b> Sgt Gervásio 3 Cia Ind + 03<br><b>Contato:</b> (31)98565-4333<br><b>Material apreendido:</b><br><a href="#" data-toggle="modal" data-target="#modal-MBA">02 Notebooks</a>;<br><a href="#" data-toggle="modal" data-target="#modal-MBA">02 HD Externos</a><br><a href="#" data-toggle="modal" data-target="#modal-MBA">17 DVDR</a>');
          marker2._icon.classList.add("amarelo");
        }
        if(p3==1){
          marker3 = L.marker([-19.9241649,-43.9471417]).addTo(map).bindPopup('<b>Ponto 4.</b><br><br><b>REDS:</b>3245-454655/2022 <br><b>Chegada no local:</b> 04/03/2012 05:07<br><b>Data/hora término:</b>04/03/2022 12:40<br><b>Alvo:</b>Marcia Agnaldo Fontes, 29 <br><b>End.:</b> Rua Leila, 230 - Andromeda<br><b>Equipe:</b> Sgt Gervásio 3 Cia Ind + 03<br><b>Contato:</b> (31)98565-4333<br><b>Material apreendido:03</b><br><a href="#" data-toggle="modal" data-target="#modal-MBA">02 Microcpomputador AllInOne</a>;');
          marker3._icon.classList.add("verde");
        }
        if(p4==1){
          marker4 = L.marker([-19.9191666,-43.9407034]).addTo(map).bindPopup('<b>Ponto 5.</b><br><br><b>REDS:</b>1121-667822/2022 <br><b>Chegada no local:</b> 04/03/2012 05:07<br><b>Data/hora término:</b>04/03/2022 14:33<br><b>Alvo:</b>Marcelina Casanova, 44 <br><b>End.:</b> Rua Croácia, 1.572 - Casa Velha<br><b>Equipe:</b> Sgt Gervásio 3 Cia Ind + 03<br><b>Contato:</b> (31)98565-4333<br><b>Material apreendido:1</b><br><a href="#" data-toggle="modal" data-target="#modal-MBA">06 Microcomputadores</a>;<br><a href="#" data-toggle="modal" data-target="#modal-MBA">06 pen drivers</a><br><a href="#" data-toggle="modal" data-target="#modal-MBA">48 DVDR</a>');
          marker4._icon.classList.add("verde");
        }
        if(p5==1){
          marker5= L.marker([-19.9260427,-43.9309807]).addTo(map).bindPopup('<b>Ponto 6.</b><br><br><b>Chegada no local:</b> 04/03/2012 05:12s<br><b>Alvo:</b>João Gilberto Alves, 19 <br><b>End.:</b> Rua Avenida Alabama,5.098 - Liberdade<br><b>Equipe:</b> Sgt Gervásio 3 Cia Ind + 03<br><b>Contato:</b> (31)98565-4333<br><b>Material apreendido:</b><br><a href="#" data-toggle="modal" data-target="#modal-MBA">04 Microcomputadores</a><br><a href="#" data-toggle="modal" data-target="#modal-MBA">01 Tablet</a><a href="#" data-toggle="modal" data-target="#modal-MBA">01 DVR Intelbras</a><br><a href="#" data-toggle="modal" data-target="#modal-MBA">07 CDR</a>');
          marker5._icon.classList.add("amarelo");
        }
        if(p6==1){
          marker6 = L.marker([-19.9315089,-43.9493807]).addTo(map).bindPopup('<b>Ponto 7.</b><br><br><b>Chegada no local:</b> 04/03/2012 05:40<br><b>Alvo:</b>Matilde Souza, 56 <br><b>End.:</b> Rua Clávis, 223 - Bom Retiro<br><b>Equipe:</b> Sgt Gervásio 3 Cia Ind + 03<br><b>Contato:</b> (31)98565-4333<br><b>Material apreendido:</b><br><a href="#" data-toggle="modal" data-target="#modal-MBA">01 Microcomputador</a><br><a href="#" data-toggle="modal" data-target="#modal-MBA">06 pen drivers</a><br><a href="#" data-toggle="modal" data-target="#modal-MBA">12 pastas com documentos </a>');
          marker6._icon.classList.add("amarelo"); 
        }
                 
</script>

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
  function filtra(a,b,c,d,e,f,g){
    document.getElementById('paramFiltro').value=a+''+b+''+c+''+d+''+e+''+f+''+g;
    document.getElementById('formFiltro').submit();
  }
</script>
</body>
</html>
