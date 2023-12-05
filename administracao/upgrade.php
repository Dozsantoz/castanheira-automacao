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
          <li class="nav-item">
            <a class="nav-link" href="./icons.php">
              <i class="material-icons">description</i>
              <p>Página em branco</p>
            </a>
          </li>
          <li class="nav-item active">
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
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Material Dashboard PRO</h4>
                  <p class="card-category">Are you looking for more components? Please check our Premium Version of Material Dashboard.</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                      <thead>
                        <tr>
                          <th></th>
                          <th class="text-center">Free</th>
                          <th class="text-center">PRO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Components</td>
                          <td class="text-center">60</td>
                          <td class="text-center">200</td>
                        </tr>
                        <tr>
                          <td>Plugins</td>
                          <td class="text-center">2</td>
                          <td class="text-center">15</td>
                        </tr>
                        <tr>
                          <td>Example Pages</td>
                          <td class="text-center">3</td>
                          <td class="text-center">27</td>
                        </tr>
                        <tr>
                          <td>Login, Register, Pricing, Lock Pages</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td>DataTables, VectorMap, SweetAlert, Wizard, jQueryValidation, FullCalendar etc...</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td>Mini Sidebar</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td>Premium Support</td>
                          <td class="text-center"><i class="fa fa-times text-danger"></i></td>
                          <td class="text-center"><i class="fa fa-check text-success"></i></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td class="text-center">Free</td>
                          <td class="text-center">Just $49</td>
                        </tr>
                        <tr>
                          <td class="text-center"></td>
                          <td class="text-center">
                            <a href="#" class="btn btn-round btn-fill btn-default disabled">Current Version</a>
                          </td>
                          <td class="text-center">
                            <a target="_blank" href="" class="btn btn-round btn-fill btn-info">Upgrade to PRO</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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