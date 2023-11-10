<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="create.css">

</head>

<body>
    <?php
    require "../../includes/Header/header.php";
    require '../../includes/SideBar/sideBar.php';
    ?>
    <div class="d-flex">
        <div class="container " style="float: right;">
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-lg-10">

                    <div class="card bg-default mb-3 ">
                        <div class="card-header thin-card-header  ">
                            <div class="card-title">
                                <ul class="card-toolbar">
                                    <li class="">
                                        <h4 style="font-family:Poppins, sans-serif"><i class="fa fa-plus"></i> Adicionar Produto</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" role="form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Text input-->
                                        <div class="form-group ">
                                            <label class="control-label mb-2" for="textinput">Nome do produto</label>
                                            <input type="text" placeholder="Nome do Produto" class="form-control">
                                        </div>
                                        <br>
                                        <!-- Text input-->
                                        <div class="form-group ">
                                            <label class="control-label" for="textinput">Tipo do Produto</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Tipo</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="3">Three</option>
                                                <option value="3">Three</option>
                                                <option value="3">Three</option>
                                                <option value="3">Three</option>
                                                <option value="3">Three</option>

                                            </select>

                                        </div>
                                        <br>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="control-label" for="textinput">Fornecedor</label>
                                            <input type="text" placeholder="Fornecedor" class="form-control">
                                        </div>
                                        <br>

                                        <!-- Text input-->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="textinput">Preço Varejo</label>
                                                    <input type="number" placeholder="Preço Varejo" class="form-control">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="textinput">Preço Atacado</label>
                                                    <input type="number" placeholder="Preço Atacado" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <br>


                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Foto do Produto</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="control-label">Descrição do produto:</label>
                                            <textarea rows="4" class="form-control"></textarea>
                                        </div>
                                        <br>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="textinput">Quantidade</label>
                                                <input type="number" placeholder="Quantidade" class="form-control">
                                            </div>
                                        </div>
                                        <br>

                                    </div>

                                </div>

                                <div class="form-group d-flex justify-content-end">
                                    <div class="text-center ">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i> Cancelar</button>
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Adicionar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>