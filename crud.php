<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-crud.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection" />
    <title>CRUD || ehehe</title>
</head>

<body>
    <div class="row">
        <h5>Contatos</h5>
        <div class="col s12 m6 push-m3">
            <table>
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Email:</th>
                        <th>Telefone:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Caio César</td>
                        <td>caiocesarworks@gmail.com</td>
                        <td>(85)99797-8280</td> 
                        <td><a href="#" class="btn-floating black"><i class="material-icons">edit</i></a><td>
                        <td><a href="#" class="btn-floating black"><i class="material-icons">delete</i></a><td>
                    </tr>
                </tbody>
            </table>
            <div class="submit">
                    <a href="adicionar.php" class="btn">Adicionar contato</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>