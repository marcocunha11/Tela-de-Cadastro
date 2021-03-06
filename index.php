<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD = Udemy</title>

    <!-- Icone navegador -->
    <link rel="shortcut icon" href="resources/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

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
            position: relative;
            left: 10%;
        }
        .thead{
            background-color: #f7f7f7;
        }
        label{
            float: right;
        }
    </style>  
  </head>
  <body>
  <label>CLIQUE NO BOTAO AZUL PARA VISUALIZAR O CRUD</label>
        <div class="container">
            <h2 class="text-center">Lista clientes<i class="bi bi-people-fill"></i></h2>


            <h5 class="text-end">
            <a href="view/page_register.php" class="btn btn-primary btn-xs">
                <i class="bi bi-preson-plus-fill"></i>
            </a>
            </h5>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead">
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>CPF</th>
                            <th>DT. DE NASCIMENTO</th>
                            <th>ENDERECO</th>
                            <th>TELEFONE</th>
                            <th colspan="3">ACOES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Marco Henrique</td>
                            <td>marcohenrique@gmail.com</td>
                            <td>333.444.555-33</td>
                            <td>12/07/2004</td>
                            <td>Av. Santos da Silva, 101</td>
                            <td>(31) 9 9999999</td>
                            <td>
                                <form method="POST">
                                    <button class="btn btn-warning btn-xs">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form method="POST" onclick="return confirm('Tem certeza que deseja excluir?');">
                                    <button class="btn btn-danger btn-xs">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


        <!-- jQuery and jQueryMask -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  </body>
</html>