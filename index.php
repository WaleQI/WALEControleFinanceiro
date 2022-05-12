<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="src/styles/login.css">
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <title>Login</title>
</head>
    <body>
        <div class="main-login-wrapper h-100 row">
            <div class="left-column col-7 d-none d-lg-block">
                <div class="left-column-content"></div>
            </div>

            <div class="right-column col-lg-5 d-flex align-items-center justify-content-center">
                <div class="login-card row w-75 px-5 d-flex flex-column align-items-center justify-content-center">
                    <h1 class="login-card-title col-12 text-center m-0 fw-bold">LOGIN</h1>
                    <form action="login.php" class="mt-3">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="inputUserName">Email</label>
                                <input type="email" id="inputUserName" class="form-control" placeholder="Digite seu email">
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="inputUserPsw">Senha</label>
                                <input type="password" id="inputUserPsw" class="form-control" placeholder="Digite sua senha">
                            </div>
                        </div>
                    </form>

                    <div class="action-buttons row col-md-12 my-3">
                        <div class="col-sm-6 p-0 pe-sm-3 mb-2">
                            <a href="src/perfis.php" class="btn button two w-100 py-3 fw-bold border-0">LOGIN</a>
                        </div>

                        <div class="col-sm-6 p-0 ps-sm-3 mb-2">
                            <a href="#" type="button" class="btn button two w-100 py-3 fw-bold border-0" data-bs-toggle="modal" data-bs-target="#addUserModal">CADASTRAR</a>
                        </div>

                        <!-- <div class="login-action-btn col-sm-6 p-0 pe-sm-3 mb-2">
                            <button class="btn login-btn w-100 py-3 fw-bold fs-6 border-0">LOGIN</button>
                        </div>
                        <div class="signin-action-btn col-sm-6 p-0 ps-sm-3 mb-2">
                            <button class="btn signin-btn w-100 py-3 fw-bold fs-6 border-0">CADASTRAR</button>
                        </div> -->

                        <div class="forgot-psw-action col-12 mt-3 text-center">
                            <a href="src/connect.php" class="forgot-password-text text-decoration-none">Esqueceu a senha?</a>
                        </div>
                    </div>

                    <div class="footer-data text-center row mt-3 d-flex flex-column align-items-center justify-content-center">
                        <p class="credits-text col-12">Desenvolvido por <span class="wale-sa fw-bold">WALE S/A℠</span> <br> Todos os direitos reservados</p>
                        <div class="contact-links col-10 d-flex justify-content-evenly">
                            <a href="https://pt-br.facebook.com/"> <img src="src/assets/contact-icons/facebook.png" alt="Facebook"> </a>
                            <a href="https://www.instagram.com/"> <img src="src/assets/contact-icons/instagram.png" alt="Instagram"> </a>
                            <a href="https://www.linkedin.com/"> <img src="src/assets/contact-icons/linkedin.png" alt="LinkedIn"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL DE ADICIONAR USUÁRIO -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalTitle">ADICIONAR PERFIL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="inserrirperfil.php">
                            <div class="row">
                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="inputProfileName">Nome/Apelido do perfil</label>
                                    <input type="text" class="form-control" name="inputProfileName" id="inputProfileName">
                                </div>

                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="inputProfilePassword">Senha de acesso do perfil</label>
                                    <input type="password" class="form-control" name="inputProfilePassword" id="inputProfilePassword">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="selectProfileType">Tipo de Perfil</label>
                                    <select class="form-select" aria-label="Tipo de perfil">
                                        <option selected> </option>
                                        <option value="1">Pessoal</option>
                                        <option value="2">Profissional</option>
                                        <option value="3">Investidor</option>
                                    </select>
                                    <div id="emailHelp" class="form-text">Selecione aqui o tipo de uso que este perfil terá.</div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>
                        <button type="button" class="btn btn-primary">SALVAR</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
        <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
