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
    
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="icon" href="../../images/icone.svg">
    <title>YOW Expeditions</title>
</head>
<body>
    
    <!-- NavBar Start -->
    <nav class="navbar navbar-expand-md navbar-dark bg-main fixed-top">
        <a class="navbar-brand" href="#inicio"><img src="../../images/logo (1).svg" width="80" height="40" alt="" loading="lazy"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- NavBAr Buttons -->
            <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item active">
              <a class="nav-link mx-4" href="#inicio">Início <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link mx-4" href="#quem-somos">Quem somos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link mx-4" href="#sobre-o-site">Sobre o site</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link mx-4" href="#noticias">Notícias</a>
            </li>
          </ul>

          <div>
              <a href="../login/login.php"><button class="btn-usuario" type="submit"><i class="fas fa-user-circle profile-icon"></i></button></a>
          </div>

        </div>
    </nav>
    <!-- NavBar Finish -->
    
    <!-- Section Main Start  -->
    <section class="margin-sec" id="inicio">

        <div class="container w-100">

          <div class="row">

            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-white">
              <h1 class="text-center titulos">YOW Expeditions</h1>
              <div>
                <p class="text-center mt-5 semi-titulos">
                    Cansado das notícias globais? Por que não ver as de fora da Terra! Saiba tudo que está sendo descoberto fora do nosso planeta, em primeira mão.
                </p>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <img class="img-fluid usuario" src="../../images/undraw_researching_22gp.svg" alt="mulher no pc">
            </div>

          </div>
        </div>

    </section>
    <!-- Section Main Fisish  -->


      <!-- 2nd Section Start -->
    <section class="margin-sec" id="quem-somos">

        <div class="container w-100">
            <div class="row">

                <div class="col-12 col-md-6">
                    <img class="img-fluid usuario" src="../../images/undraw_project_team_lc5a.svg" alt="pessoas trabalhando">
                </div>

                <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-white">
                    <h1 class="text-center titulos">Quem Somos</h1>
                    <div>
                        <p class="text-center mt-5 semi-titulos">
                            A YOW Expeditions é uma empresa afiliada com a FIAP STELLAR, especializada em marketing e jornalismo. Nosso objetivo é levar de maneira clara e leiga as notícias do mundo afora, sem nenhum vocabulário ou linguajar científico!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 2nd Section Finish -->

    <!-- 3rd Section Start  -->
    <section class="margin-sec" id="sobre-o-site">

        <div class="container w-100">
          <div class="row">

            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-white">
              <h1 class="text-center titulos">Sobre o site</h1>
              <div>
                <p class="text-center mt-5 semi-titulos">
                    Se você está procurando as descobertas mais recentes do espaço, então você veio ao lugar certo! Aqui você descobre as mais recentes e quentinhas notícias trazidas diretas dele!
                </p>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <img class="img-fluid usuario" src="../../images/undraw_site_stats_l57q.svg" alt="pesosa mexendo em site">
            </div>
          </div>
        </div>

    </section>
    <!-- 3rd Section Fisish  -->

    <!-- 4th Section Start -->
    <section class="margin-sec" id="noticias">
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

                      <a href="<?php echo $linha['link']; ?>"><button class="btn-link2"><i class="fas fa-arrow-right text-light"></i></button></a>
                    </div>
                  </div>
                  <?php } ?>

                </div>

                
            </div>

            </div>
        </div>
    </section>
    <!-- 4th Section Fisish -->


     <!-- JS Bootstrap -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>