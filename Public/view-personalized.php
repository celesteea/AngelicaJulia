<?php
session_start();
require_once "../Class/conexao.php";

$pdo = conectar();
$id_materia = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

?>
<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="../JS/script.js"></script>
    
    <link rel="stylesheet" href="../CSS/index.css">  
    <link rel="stylesheet" href="../CSS/produtos.css">     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">    
    <link rel="shortcut icon" href="../favicon.ico">  
        <title>Anju's</title>
    </head>    
    <body>
    <!-- header -->
    <?php include "../Class/header.inc.php"; ?>
    <?php 
    $sqlpr = "SELECT * FROM tb_materiasprimas where id_materia = $id_materia LIMIT 1";
    $stmtpr = $pdo->prepare($sqlpr);
    $stmtpr->execute();
    $tb_materiasprimas = $stmtpr->fetch(PDO::FETCH_ASSOC);
    extract($tb_materiasprimas);
    /*var_dump($tb_produto);*/
    
    ?>
    <!-- body -->
    <section>
    <div class="prod-info">
        <div id="container">
            <div class="row align-items-center">
                <div class="col fundo-img">
                    <img src="<?php echo $imagem; ?>" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="...">
                </div>
                <div class="col fundo-info">
                    <h6 id="titulo"><?php echo $nome; ?></h6>
                    <h6 id="preco"><?php echo "R$ " . number_format ($valor, 2, ",", ".") . "<br>"; ?></h6>
                    
                    <?php if (isset($_SESSION['nome'])) { 
                        echo "<form method='POST' action='../Class/email.php'>";} ?>
                    <div class="form">
                    <textarea class="form-control" name="descricao" placeholder="Descreva a estampa e o lugar onde deve ser colocado" id="floatingTextarea2" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2"></label>
                    </div>
                    
                    <label for="exampleColorInput" class="form-label">Escolha a cor da camiseta.</label>
                    <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" required>
                    <br>
                    <div class="mb-3">
                    <label for="formFileMultiple" class="form-label"> Coloque aqui o esboço ou estampa desejada.</label>
                    <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
                    </div>
                    <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="PP">
                            <label class="form-check-label" for="inlineRadio1"> PP </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="P">
                            <label class="form-check-label" for="inlineRadio2"> P </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="M">
                            <label class="form-check-label" for="inlineRadio2"> M </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="G">
                            <label class="form-check-label" for="inlineRadio2"> G </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="GG">
                            <label class="form-check-label" for="inlineRadio2"> GG </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="GGG">
                            <label class="form-check-label" for="inlineRadio2"> GGG </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="EGG">
                            <label class="form-check-label" for="inlineRadio2"> EGG </label>
                        </div>
                        <br>
                        <?php if (!isset($_SESSION['nome'])) {
	                    echo '<button id="button" data-bs-target="#loginmodal" data-bs-toggle="modal" name="btnpedido" 
                        type="submit">enviar pedido</button>'; }
                        else {
                            echo '<button id="button" name="btnpedido" type="submit">enviar pedido</button>';
                        }?>
                         


                        <!--<a href="carrinho2.php?ac=add&id= <?php // echo $id_materia;  ?> "> <button id="button" type="button">adicionar ao carrinho</button> </a> -->
                        <?php if (isset($_SESSION['nome'])) { 
                            echo "</form>";
                        }?>       
                </div>
            </div>
        </div>
    </div>
    <br><br>
    </section>
    </body>
    <?php include "../Class/footer.inc.php"; ?>
</html>