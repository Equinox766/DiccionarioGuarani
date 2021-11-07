<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/jquery-ui.css">
    <script type="text/javascript" src="./js/jquery-ui.js"></script>
    <title>Diccionario Casaccia</title>
</head>
<body class="bg-dark">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="text-center">Diccionario Guarani</h4>
                </div>
                <div class="card-body">
                    <form method="POST" class="form-inline input-group mb-3">
                        <input type="text" class="form-control w-75" id="search" placeholder="Inserte su palabra aqui">
                        <button class="btn btn-outline-secondary" type="button" id="btn_search">Buscar</button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-item-action" id="content">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>

    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>