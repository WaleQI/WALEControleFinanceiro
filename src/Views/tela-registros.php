<?php
use Models\Data\Perfil;
require_once '../../vendor/autoload.php';


// Iniciamos a SESSION para poder usar seus dados que foram inseridos na página anterior
session_start();




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../styles/home.css">
    <?php echo '<title>' . $_SESSION['user-data']['NOME'] . ' | Registros' . '</title>'; ?>
</head>
    <body>

        <header class="header" id="header">
            <div class="header-area h-100 d-flex flex-row align-items-center justify-content-between">
                <div class="header-title-content d-flex flex-row">
                    <div class="logo-image">
                        <img src="../assets/walelogo.png" alt="Logo WALE" width="100" height="100">
                    </div>
                    <div class="name-content d-flex align-items-center">
                        <span>Wale</span>
                    </div>
                </div>

                <div class="header-options-content d-flex align-items-center">
                    <a href="tela-inicio.php" class="mx-2 p-2 text-decoration-none header-option">INÍCIO</a>
                    <a href="tela-registros.php" class="mx-2 p-2 text-decoration-none header-option active-option">REGISTROS</a>
                    <a href="tela-previsoes.php" class="mx-2 p-2 text-decoration-none header-option">PREVISÕES</a>
                </div>

                <div class="header-profile-content">
                    <a href="tela-perfil-usuario.php" class="profile-option rounded-circle"> <img src="../assets/perfil4.jpg" alt="imagem-de-perfil" width="50px" height="50px" class="rounded-circle"> </a>
                </div>
            </div>
        </header>

        <div class="body-content row d-flex align-items-center justify-content-center">
            <div class="side-menu col-3 h-100 pe-0">
                <div class="side-menu-content w-100 h-100 p-3 d-flex flex-column align-items-center justify-content-start">
                    <div class="menu-filters w-100 h-100 d-flex flex-column">
                        <form action="tela-registros.php" method="POST">
                            <div class="inputs">
                                <div class="col-12 mb-3">
                                    <label for="filterDescricao">Descrição</label>
                                    <input type="text" name="filterDescricao" id="filterDescricao" class="form-control dark-input" placeholder="Filtre pela descrição">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterResp">Responsável</label>
                                    <input type="text" name="filterResp" id="filterResp" class="form-control dark-input" placeholder="Filtre pelo responsável">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterValor">Valor</label>
                                    <input type="number" name="filterValor" id="filterValor" class="form-control dark-input" placeholder="Filtre pelo valor">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterDT">Data/Hora</label>
                                    <input type="datetime-local" name="filterDT" id="filterDT" class="form-control dark-input" placeholder="Filtre pela data e hora">
                                </div>

                                <div class="col-12 mb-3">
                                    <label for="filterTipo">Tipo de registro</label>
                                    <select class="form-select dark-input" aria-label="Entrada ou Saída">
                                        <option value=null>-- Selecione o tipo de registro</option>
                                        <option value="entradas">Entradas</option>
                                        <option value="saidas">Saídas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="action-btn">
                                <button type="submit" class="btn fw-bold">FILTRAR</button>
                                <button type="button" class="btn fw-bold" onclick="">LIMPAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="main-container h-100 col-9 ps-0">
                <div class="main-container-content w-100 h-100 p-3 d-flex flex-column">
                    <div class="title-container mb-3 d-flex flex-row align-items-center justify-content-between">
                        <h4>REGISTROS</h4>
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#newRecordModal"> <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffd957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg> </button>
                    </div>

                    <div class="table-container mt-3">
                        <table class="custom-table table table-bordered table-hover">
                            <tr class="table-header-row">
                                <th class="table-header">Descrição</th>
                                <th class="table-header">Responsável</th>
                                <th class="table-header">Valor</th>
                                <th class="table-header">Data</th>
                                <th class="table-header">Tipo</th>
                            </tr>

                            <tr class="table-content-row">
                                <td class="table-row">Venda de roupas</td>
                                <?php echo "<td class='table-row'>" . $_SESSION['user-data']['NOME'] . "</td>"; ?>
                                <td class="table-row"> <span class="green-color">+R$</span> 127,89 </td>
                                <td class="table-row">28/03/2022</td>
                                <td class="table-row">ENTRADA</td>
                            </tr>
                            <tr class="table-content-row">
                                <td class="table-row">Compras no shopping</td>
                                <?php echo "<td class='table-row'>" . $_SESSION['user-data']['NOME'] . "</td>"; ?>
                                <td class="table-row"> <span class="red-color">-R$</span> 278,90 </td>
                                <td class="table-row">05/02/2022</td>
                                <td class="table-row">SAÍDA</td>
                            </tr>
                            <tr class="table-content-row">
                                <td class="table-row">Compras de peças</td>
                                <?php echo "<td class='table-row'>" . $_SESSION['user-data']['NOME'] . "</td>"; ?>
                                <td class="table-row"> <span class="red-color">-R$</span> 492,52 </td>
                                <td class="table-row">19/02/2022</td>
                                <td class="table-row">SAÍDA</td>
                            </tr>
                            <tr class="table-content-row">
                                <td class="table-row">Venda de peças restauradas</td>
                                <?php echo "<td class='table-row'>" . $_SESSION['user-data']['NOME'] . "</td>"; ?>
                                <td class="table-row"> <span class="green-color">+R$</span> 954,78 </td>
                                <td class="table-row">15/01/2022</td>
                                <td class="table-row">ENTRADA</td>
                            </tr>
                        </table>

                        <div class="pagination-container d-flex align-items-center justify-content-end">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- #region MODAL DE ADICIONAR REGISTRO -->
        <div class="modal fade" id="newRecordModal" tabindex="-1" aria-labelledby="newRecordModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRecordModalTitle">CADASTRAR USUÁRIO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="tela-registros.php" method="POST">
                            <div class="row">
                                <div class="mb-3 col-sm-12 d-flex flex-column">
                                    <label for="recordDescricao">Descrição <span class="required-sign">*</span> </label>
                                    <input type="text" class="form-control dark-input" name="recordDescricao" id="recordDescricao" placeholder="Uma descrição de identificação" required>
                                </div>

                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="recordValor">Valor <span class="required-sign">*</span> </label>
                                    <input type="number" class="form-control dark-input" name="recordValor" id="recordValor" placeholder="Valor da transação" required>
                                </div>

                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="recordDataHora">Data e Hora <span class="required-sign">*</span> </label>
                                    <input type="datetime-local" class="form-control dark-input" name="recordDataHora" id="recordDataHora" placeholder="Data e Hora da transação" required>
                                </div>

                                <div class="mb-3 col-sm-6 d-flex flex-column">
                                    <label for="recordTipo">Data e Hora <span class="required-sign">*</span> </label>
                                    <select class="form-select dark-input" name="recordTipo" id="recordTipo">
                                        <option value=null>Selecione o tipo da transação</option>
                                        <option value="Entrada">Entrada</option>
                                        <option value="Saída">Saída</option>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn modal-cancel-btn fw-bold" data-bs-dismiss="modal">CANCELAR</button>
                                <button type="submit" class="btn modal-save-btn fw-bold">REGISTRAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #endregion MODAL DE ADICIONAR REGISTRO -->

        <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>
</html>
