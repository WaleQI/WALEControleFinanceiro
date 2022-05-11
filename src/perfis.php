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
        <link rel="stylesheet" href="src/style.css">
        <title>Perfis</title>
    </head>
    
    <body>
        <div class="main-wrapper">
            <div class="profiles-container row">
                <div class="profile-collumn col-md-3 mb-2">
                    <div class="profile-option profile d-flex flex-column align-items-center justify-content-between">
                        <div id="profile1" class="profile-image"></div>
                        <div id="profile1-name" class="profile-name">Perfil 1</div>
                    </div>
                </div>

                <div class="profile-collumn col-md-3 mb-2">
                    <div class="profile-option profile d-flex flex-column align-items-center justify-content-between">
                        <div id="profile2" class="profile-image"></div>
                        <div id="profile2-name" class="profile-name">Perfil 2</div>
                    </div>
                </div>

                <div class="profile-collumn col-md-3 mb-2">
                    <div class="profile-option profile d-flex flex-column align-items-center justify-content-between">
                        <div id="profile3" class="profile-image"></div>
                        <div id="profile3-name" class="profile-name">Perfil 3</div>
                    </div>
                </div>

                <div class="profile-collumn col-md-3 mb-2">
                    <div class="profile-option profile d-flex flex-column align-items-center justify-content-between">
                        <div id="profile4" class="profile-image"></div>
                        <div id="profile4-name" class="profile-name">Perfil 4</div>
                    </div>
                </div>
            </div>

            <div class="add-profile-container">
                <div class="add-profile-option">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#addUserModal">ADICIONAR PERFIS</a>
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
