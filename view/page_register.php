<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD = Udemy</title>

    <!-- Icone navegador -->
    <link rel="shortcut icon" href="..resources/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Icons Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

    <style type="text/css">
        body{
            margin: 20px;
            background-color:#ffffff;
        }
        *{
            font-family: "Open Sans",sans-serif;
        } 
        h2{
            font-family: "Open Sans",sans-serif;
        }
        .thead{
            background-color: #f7f7f7;
        }
    </style>  
  </head>
  <body>

        <div class="container">
            <h2 class="text-center">Lista de Usuarios<i class="bi bi-people-fill"></i></h2>

            <form method="POST" action="../controller/insert_client.php">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label"> Nome <i class="bi bi-person"></i></label>
                        <input type="text" class="form-control" name="name" require autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail<i class="bi bi-envelope"></i></label>
                        <input type="email" class="form-control" name="email" require>
                    </div>
                    <div class="col-md-4">
                        <label for="cpf" class="form-label">Cpf<i class="bi bi-credit-card-2-front"></i></label>
                        <input type="text" class="form-control" name="cpf" require>
                    </div>
                    <div class="col-md-4">
                        <label for="birth" class="form-label">Dt. de Nascimento<i class="bi bi-calendar"></i></label>
                        <input type="date" class="form-control" name="birth" require>
                    </div>
                    <div class="col-md-4">
                        <label for="phone" class="form-label">Telefone<i class="bi bi-whatsapp"></i></label>
                        <input type="text" class="form-control" name="phone" require>
                    </div>
                    <div class="col-md-12">
                        <label for="adress" class="form-label">Endereço<i class="bi bi-map"></i></label>
                        <input type="text" class="form-control" name="adress" require>
                    </div>

                    <div class="col-md-12 text-end">
                        <button class="btn btn-primary btn-lg" href="../index.php" type="submit"> Cadastrar </button>
                        <a class="btn btn-sucess btn-lg" href="../index.php"> Cancelar </a>
                    </div>

                </div>

            </form>

        </div>

        <!-- jQuery and jQueryMask -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  </body>
</html>