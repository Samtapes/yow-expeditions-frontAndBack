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

    <link rel="stylesheet" href="./adm.css">
    <link rel="stylesheet" href="../global.css">
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
            <form method="post" enctype="multipart/form-data" class="text-white">
                <div class="form-group">
                  <label for="title">Título</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                  <label for="text">Texto</label>
                  <textarea type="text" class="form-control" name="text"></textarea>
                </div>
                <div class="form-group">
                  <label for="link">Link</label>
                  <input type="text" class="form-control" name="link">
                </div>
                <div class="form-group">
                  <label for="image">Imagem</label>
                  <input type="file" name="image">
                </div>

                <div class="text-center">
                    <input type="submit" name="submit" value="Enviar" class="btn text-white btn-forms"/>
                </div>
                
            </form>
        </div>
    </section>


    <!-- 4th Section Start -->
    <section class="margin-noticias mb-5" id="noticias">
      <div class="container">
          <h1 class="text-center text-white titulos mb-5">Notícias</h1>
          <div class="container w-100">

              <div class="row">


                <?php while($linha = $selecionar->fetch()) { ?>
                <div class="col-12 col-md-4 d-flex flex-column justify-content-center text-white text-center border border-light rounded">
                  <img class="img-fluid mt-3 img-noticia" src="data:<?php echo $linha['type'];?>;base64,<?php echo base64_encode($linha['image']); ?>" alt="pesosa mexendo em site">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $linha['title']; ?></h5>
                    <p class="card-text"><?php echo $linha['text']; ?></p>

                    <form method="post" enctype="multipart/form-data">
                      <input class="input-invisible" type="text" name="noticia_id" value="<?php echo $linha['id']; ?>"/>
                      <input class="btn text-white btn-forms" type="submit" name="deletar" value="Deletar"/>    
                    </form>
                  </div>
                </div>
                <?php } ?>


              </div>
          </div>

          </div>
      </div>
  </section>
  <!-- 4th Section Fisish -->
</body>
</html>