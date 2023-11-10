<!DOCTYPE html>
<html lang="pt-br" id="body">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="grafico1.js"></script>
    <script src="grafico2.js"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css">


</head>

<body >
    <?php
    require "../../includes/Header/header.php";
    require '../../includes/SideBar/sideBar.php'
    ?>
    
    <main class="content">
        <div class="d-flex justify-content-start bg-cancel ps-3 pt-3">
            <h2>DashBoard</h2>
        </div>
        <div class="d-flex justify-content-around row mt-3 divGrafico">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Produtos mais vendidos
                    </div>
                    <div class="d-flex justify-content-center">
                        <div id="chart_div" style="width: 900px; height: 400px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Vendas de Produtos
                    </div>
                    <div class="d-flex justify-content-center">
                        <div id="grap_div" style="width:500; height:300"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start bg-cancel ps-3 pt-5">
            <h2>Fornecedores</h2>
        </div>
        <div class="row mx-5 my-2">
            
            <div class="col-12 ">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Tipo de produto</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>1277323123</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>8899323123</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                            <td>9988723123</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div style="height: 1000px;">

        </div>
    </main>
    <script src="main.js"></script>
</body>