<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles/login.css">
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <title>WALE | Login</title>
</head>
    <body>
        <div class="main-login-wrapper h-100 row">
            <div class="left-column col-7 d-none d-lg-block">
                <div class="left-column-content"></div>
            </div>

            <div class="right-column col-lg-5 d-flex align-items-center justify-content-center">
                <div class="login-card row w-75 px-2 d-flex flex-column align-items-center justify-content-center">
                    <h1 class="login-card-title col-12 text-center m-0 fw-bold">LOGIN</h1>
                    <form class="mt-3 px-0" action="../actions/login-usuario.php" method="POST">
                        <div class="">
                            <div class="col-12 mb-3">
                                <label for="inputUserEmail">Email</label>
                                <input type="email" name="inputUserEmail" id="inputUserName" class="form-control" placeholder="Digite seu email">
                            </div>
                            
                            <div class="col-12 mb-3">
                                <label for="inputUserPsw">Senha</label>
                                <input type="password" name="inputUserPsw" id="inputUserPsw" class="form-control" placeholder="Digite sua senha">
                            </div>
                        </div>

                        <div class="action-buttons my-3 d-flex flex-column justify-content-evenly">

                            <div class="buttons row mb-2 d-flex flex-row justify-content-between">
                                <div class="login-action-btn col-12 col-md-4 pe-md-2 my-3 my-md-0">
                                    <button type="submit" class="btn login-btn w-100 py-3 fw-bold border-0">LOGIN</button>
                                </div>
                                <div class="signin-action-btn col-12 col-md-8 ps-md-2 mt-3 mt-md-0">
                                    <button type="button" class="btn signin-btn w-100 py-3 fw-bold border-0" data-bs-toggle="modal" data-bs-target="#addUserModal">CADASTRAR</button>
                                </div>
                            </div>

                            <div class="forgot-psw-action col-12 mt-3 text-center">
                                <a href="connect.php" class="forgot-password-text text-decoration-none">Esqueceu a senha?</a>
                            </div>
                        </div>
                    </form>

                    <div class="footer-data text-center row mt-3 d-flex flex-column align-items-center justify-content-center">
                        <p class="credits-text col-12">Desenvolvido por <span class="wale-sa fw-bold">WALE S/A℠</span> <br> Todos os direitos reservados</p>
                        <div class="contact-links col-10 d-flex justify-content-evenly">
                            <a href="https://pt-br.facebook.com/"> <img src="../assets/contact-icons/facebook.png" alt="Facebook"> </a>
                            <a href="https://www.instagram.com/"> <img src="../assets/contact-icons/instagram.png" alt="Instagram"> </a>
                            <a href="https://www.linkedin.com/"> <img src="../assets/contact-icons/linkedin.png" alt="LinkedIn"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        #region MODAL DE ADICIONAR USUÁRIO
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalTitle">CADASTRAR USUÁRIO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="inserrirperfil.php">
                            <div class="row">
                                <div class="mb-3 col-sm-12 d-flex flex-column">
                                    <label for="newUserName">Nome</label>
                                    <input type="text" class="form-control modal-input" name="newUserName" id="newUserName" placeholder="Marcos da Silva de Lemos, Família Silva, etc" required>
                                </div>

                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="newUserEmail">Email</label>
                                    <input type="email" class="form-control modal-input" name="newUserEmail" id="newUserEmail" placeholder="marcosdasilva4@outlook.com" required>
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="newUserPassword">Senha</label>
                                    <input type="password" class="form-control modal-input" name="newUserPassword" id="newUserPassword" placeholder="Senha12345" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn modal-cancel-btn fw-bold" data-bs-dismiss="modal">CANCELAR</button>
                        <button type="button" class="btn modal-save-btn fw-bold">SALVAR</button>
                    </div>
                </div>
            </div>
        </div>
        #endregion MODAL DE ADICIONAR USUÁRIO

        <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
