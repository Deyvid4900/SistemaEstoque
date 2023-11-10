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
    <link rel="stylesheet" href="read.css">


</head>

<body>
    <?php
    require "../../includes/Header/header.php";
    require '../../includes/SideBar/sideBar.php'
    ?>

    <main>
        <div class="d-flex justify-content-start bg-cancel ps-3 pt-3">
            <h2>Produtos</h2>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-light ">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col ">Foto</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Descrição do produto</th>
                    
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td >Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    
                    
                  
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    
                </tr>
               
            </tbody>
        </table>
        </div>
    </main>
    <script src="main.js"></script>
</body>