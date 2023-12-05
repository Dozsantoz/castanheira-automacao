<?php 
    require_once ('head.php');
?>
<body class="">
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="admin.php" class="simple-text logo-normal">
          Administração
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./admin.php">
              <i class="material-icons">dashboard</i>
              <p>Início</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./tables.php">
              <i class="material-icons">content_paste</i>
              <p>Tabela dos pedidos</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./icons.php">
              <i class="material-icons">description</i>
              <p>Página em branco</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./upgrade.php">
              <i class="material-icons">toc</i>
              <p>Itens</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">person</i>
              <p>Usuário</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <?php
    require_once ('header.php');
    ?>
    <div class="main-panel">
  
      <div class="content">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Página em branco</h4>
                <p class="card-category">
                  
                </p>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card-body">
                    <div class="iframe-container d-none d-lg-block">
                      <iframe src="">
                        <p>Your browser does not support iframes.</p>
                      </iframe>
                    </div>
                    <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                      <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the
                        <a href="" target="_blank">Material Icons</a>
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php 
    require_once ('footer.php');
    require_once ('arquivoJava.php');
  ?>