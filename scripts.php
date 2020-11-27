<?php
    // DB connection
    $server="localhost";
    $database="yow";
    $user="root";
    $password="";

    $pdo = new PDO ("mysql:host=".$server.";dbname=".$database,$user,$password);

    // Inserir as informações do formularios conteudo.php no banco de dados yow

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $link = $_POST['link'];
        $image = file_get_contents($_FILES['image']['tmp_name']);
        $type = $_FILES['image']['type'];

        $inserir = $pdo->prepare('insert into content (title, text, link, image, type) values (:title, :text, :link, :image, :type)');
            
        $inserir->bindParam(':title',$title);
        $inserir->bindParam(':text',$text);
        $inserir->bindParam(':link',$link);
        $inserir->bindParam(':image',$image);
        $inserir->bindParam(':type',$type);

        $inserir->execute();

        header('Location: conteudo.php');
    }

    
    // Selecionar todos os registros da tabela conteudos
    $selecionar = $pdo->prepare('select * from content');
    $selecionar->execute();


    if(isset($_POST['deletar'])){
        $noticia_id = $_POST['noticia_id'];

        $delete = $pdo->prepare('delete from content where id = :noticia_id');
            
        $delete->bindParam(':noticia_id',$noticia_id);


        $delete->execute();

        header('Location: conteudo.php');
    }

    if(isset($_POST['submit-login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        if(empty($user)){
            header('Location: login.php');
        }

        else if(empty($password)){
            header('Location: login.php');
        }


        $data = $pdo->prepare('select * from users');        
        $data->execute();


        while($clean_data = $data->fetch()){
            if($user == $clean_data['user'] && $password == $clean_data['password']){
                header('Location: ../adm/conteudo.php');
            }
        }
    }
?>