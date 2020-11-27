<?php include_once '../scripts.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="icon" href="../../images/icone.svg">
    <title>YOW Expeditions</title>
</head>
<body>
  <a href="../index/index.php" class="btn-back"><button class="btn text-white btn-forms"> Voltar </button></a>
    
    <section>
        <div id="video">
            <video autoplay muted loop id="estrelas">
                <source src="../../images/vídeo das estrelinhas 2 ^~^.mp4" type="video/mp4">
            </video>
        </div>

        <div class="container w-100 section-box div-login rounded-lg p-3">
            <form method="post" enctype="multipart/form-data" class="text-white ">
                <div class="form-group">
                  <label>Usuário</label>
                  <input id="user" type="text" class="form-control" name="user" placeholder="alozoio">
                </div>
                <div class="form-group">
                  <label>Senha</label>
                  <input id="senha" type="password" class="form-control" name="password" placeholder="12345">
                </div>

                <div class="text-center">
                    <input type="submit" class="btn text-white btn-forms" name="submit-login" value="Verificar"/>
                </div>
            </form>
        </div>
    </section>




    <!-- JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>