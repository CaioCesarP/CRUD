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
    <div class="container-formulario">
            <form action="create.php" method="POST">
                <div class="field">
                    <label for="nome">Insira o nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="nome aqui*" required>
                </div>
                <div class="field">
                    <label for="email">Email de contato:</label>
                    <input type="email" id="email" name="email" placeholder="email aqui*" required>
                </div>
                <div class="field">
                    <label for="tel">Telefone de contato:</label>
                    <input type="tel" id="tel" name="tel" placeholder="telefone aqui*"> 
                </div>

                <button type="submit" name="btn-confirmar" class="btn">Confirmar</button>
                <a href="crud.php" class="btn green">Lista de contatos</a>
            </form>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>