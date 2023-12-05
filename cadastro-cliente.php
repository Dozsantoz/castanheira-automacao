<?php

require_once ('head.php');
require_once ('header.php');

?>
<body>

    <main id="hero">
            
        <section class="d-flex">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mt-5 mb-5 text-center fonte-tit">CADASTRO CLIENTE</h1>

                <form>
                    <div class="form-row">
                        <div class="form-group mx-auto col-sm-6 fonte-cad">
                            <label for="inputName">Nome Completo</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group mx-auto col-sm-6 fonte-cad">
                            <label for="inputEmail">E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-3 fonte-cad">
                            <label for="inputPhone">Telefone</label>
                            <input type="text" class="form-control" id="inputPhone" placeholder="">
                        </div>
                        <div class="form-group col-md-3 fonte-cad">
                            <label for="inputCPF">CPF/CNPJ</label>
                            <input type="text" class="form-control" id="inputCPF" placeholder="">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-4 fonte-cad">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress"
                                placeholder="R. das Araucárias">
                        </div>
                        <div class="form-group col-md-2 fonte-cad">
                            <label for="inputNum">Número</label>
                            <input type="text" class="form-control" id="inputNum" placeholder="10">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group mx-auto col-sm-6 fonte-cad">
                            <label for="inputAddress2">Complemento</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartamento, casa, etc.">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-3 fonte-cad">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>
                        <div class="form-group col-md-3 fonte-cad">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-3 fonte-cad">
                            <label for="inputEstado">Estado</label>
                            <select id="inputEstado" class="form-control">
                                <option selected>Escolher...</option>
                                <option>AC</option>
                                <option>AL</option>
                                <option>AP</option>
                                <option>AM</option>
                                <option>BA</option>
                                <option>CE</option>
                                <option>DF</option>
                                <option>ES</option>
                                <option>GO</option>
                                <option>MA</option>
                                <option>MT</option>
                                <option>MS</option>
                                <option>MG</option>
                                <option>PA</option>
                                <option>PB</option>
                                <option>PR</option>
                                <option>PE</option>
                                <option>PI</option>
                                <option>RJ</option>
                                <option>RN</option>
                                <option>RS</option>
                                <option>RO</option>
                                <option>RR</option>
                                <option>SC</option>
                                <option>SP</option>
                                <option>SE</option>
                                <option>TO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 fonte-cad">
                            <label for="inputNegocio">Tipo de negócio</label>
                            <select id="inputNegocio" class="form-control">
                                <option selected>Escolher...</option>
                                <option>aa</option>
                                <option>bb</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-sm-3 fonte-cad">
                            <label for="inputPassword">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="">
                        </div>
                        <div class="form-group col-sm-3 fonte-cad">
                            <label for="inputPassword">Confirmar Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                    <div class="form-group col-sm-3">               
                            <button type="submit" class="form-control btn btn-primary">Cadastrar</button>
                        </div>   
                    </div>
 
                </form>

            </div>
            <!-- /.container-fluid -->

        </section>

    </main>

<?php
    require_once ('footer.php')
?>  


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

      <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>