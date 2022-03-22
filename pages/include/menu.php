<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo($path_page)?>index3.php" class="brand-link">
      <img src="<?php echo($path_page)?>dist/img/logoCC.png" alt="AdminCustodia Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Cadeia Custódia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo($path_page)?>dist/img/darley.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Darley Wilson</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <!--Inicio lançamentos-->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active"  style="background-color: #808080;">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Relatórios 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="<?php echo($path_page)?>pages/transacionais/relatorio.php" class="nav-link">
                    <i class="far fa-circle text-info"></i>
                    <p>Movimentações</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo($path_page)?>pages/transacionais/ponto.php" class="nav-link">
                    <i class="far fa-circle text-info"></i>
                    <p>Estatísticas</p>
                  </a>
              </li>
            </ul>
          </li>
          <!--Inicio lançamentos-->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active" style="background-color: #808080;">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Lançamento de dados
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="<?php echo($path_page)?>pages/transacionais/operacao.php" class="nav-link">
                    <i class="far fa-circle text-info"></i>
                    <p>Lançar operação</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo($path_page)?>pages/transacionais/ponto.php" class="nav-link">
                    <i class="far fa-circle text-info"></i>
                    <p>Lançar ponto</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="<?php echo($path_page)?>pages/transacionais/participantes.php" class="nav-link">
                    <i class="far fa-circle text-info"></i>
                    <p>Lançar participantes</p>
                  </a>
              </li>
            </ul>
          </li>
          <!--Dia da operação-->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active" style="background-color: #808080;">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Dia da Operação
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo($path_page)?>pages/transacionais/evidencias.php" class="nav-link">
                      <i class="far fa-circle text-info"></i>
                      <p>Evidências</p>
                    </a>
                  </li>
                <li class="nav-item">
                  <a href="<?php echo($path_page)?>pages/transacionais/ponto.php" class="nav-link">
                      <i class="far fa-circle text-info"></i>
                      <p>Testem. evidência</p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo($path_page)?>pages/transacionais/presentes.php" class="nav-link">
                      <i class="far fa-circle text-info"></i>
                      <p>Pessoas presentes</p>
                    </a>
                </li>
            </ul>
          </li>
          <!--Movimentacao-->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active" style="background-color: #808080;">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Movimentação
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="<?php echo($path_page)?>pages/transacionais/movimentacao.php" class="nav-link">
                      <i class="far fa-circle text-info"></i>
                      <p>Movimentar item</p>
                    </a>
                  </li>
                <li class="nav-item">
                  <a href="<?php echo($path_page)?>pages/transacionais/timeline.php" class="nav-link">
                      <i class="far fa-circle text-info"></i>
                      <p>Ciclo de vida da evidência</p>
                    </a>
                </li>
                
            </ul>
          </li>
            <!--Inicio seçao cadastro-->
            <li class="nav-item menu-open">
            <a href="#" class="nav-link active" style="background-color: #808080;">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Cadastros básicos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo($path_page);?>pages/cadastros/tipoInvestigacao.php" class="nav-link">
                  <i class="far fa-circle text-info"></i>
                  <p>Tipo de Procedimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($path_page)?>pages/cadastros/tipoOperacao.php" class="nav-link">
                  <i class="far fa-circle text-info"></i>
                  <p>Tipo de Operações</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($path_page);?>pages/cadastros/procedimento.php" class="nav-link">
                  <i class="far fa-circle text-info"></i>
                  <p>Procedimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo($path_page)?>pages/cadastros/tipoEvidencia.php" class="nav-link">
                  <i class="far fa-circle text-info"></i>
                  <p>Tipo de Evidência</p>
                </a>
              </li>
            </ul>
        </li>
        <!--Fim seçao cadastro-->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>