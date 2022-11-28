<?php
session_start();
require_once "conexao.php";

$pdo = conectar();
$id_produto = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

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
    
    <link rel="stylesheet" href="../CSS/index2.css">  
    <link rel="stylesheet" href="../CSS/produtos2.css">     
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">      
    <link rel="shortcut icon" href="favicon.ico">
        <title>Anju's</title>
    </head>    
    <body>
    <!-- header -->
    <?php include "headerEfooter/header2.inc.php"; ?>
    <?php 
    
    ?>
    <!-- body -->
    <section>
    <div class="prod-info">
        <div id="container">
        <form method="post">
            <div class="row align-items-center">
                <div class="col fundo-img">
                    <label class="picture" for="picture-input" tabindex="0">
                        <input type="file" name="imagem" accept="image/*" id="picture-input"/>
                        <span class="picture-image">
                        </span>
                    </label>
                </div>
                <div class="col fundo-info">
                
                    <h6 id="tituloadd"> Nome</h6>                
                
                    <input class="form-control form-control-md" placeholder="Produto" 
                    aria-label=".form-control-md example" type="text" name="nome" maxlength="45" required/>
                    <br>
                
                <h6 id="tituloadd"> Categoria</h6>
                            <select id="categoria" name="categoria" class="form-select form-select-md" required>
                            <option selected> Selecionar...</option>
                            <option>Minimalista</option>
                            <option>Medio</option>
                            <option>Extravagante</option>
                            </select>
                        <br>

                <h6 id="tituloadd"> Cor</h6>
                            <select id="categoria" name="cor" class="form-select form-select-md" required>
                            <option selected> Selecionar...</option>
                            <option>Preto</option>
                            <option>Branco</option>
                            <option>Vermelho</option>
                            <option>Azul</option>
                            <option>Cinza</option>
                            </select>
                        <br>

                    <h6 id="tituloadd"> Valor</h6>
                    <input class="form-control form-control-md" placeholder="30.00" 
                    aria-label=".form-control-md example" type="text" name="valor" maxlength="45" required/>    
                <br>


                <h6 id="tituloadd"> Modelagem</h6>
                            <select id="modelagem" name="modelagem" class="form-select form-select-md" required>
                            <option selected> Selecionar...</option>
                            <option>Regular</option>
                            <option>Baby look</option>
                            </select>
                        <br>          
    
                    <h6 id="tituloadd"> Descrição</h6>
                    <textarea class="form-control form-control-md" name="descricao" placeholder="Descrição do produto"></textarea>
                    <br>

                    <h6 id="tituloadd"> Quantidade</h6>
                    <input type="number" class="form-control form-control-md" name="estoque" placeholder="Estoque" ></input>
                    <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio1" value="PP">
                            <label class="form-check-label" for="inlineRadio1"> PP </label>
                        </div>      
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio1" value="P">
                            <label class="form-check-label" for="inlineRadio1"> P </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="M">
                            <label class="form-check-label" for="inlineRadio2"> M </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio1" value="G">
                            <label class="form-check-label" for="inlineRadio1"> G </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio2" value="GG">
                            <label class="form-check-label" for="inlineRadio2"> GG </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio1" value="GGG">
                            <label class="form-check-label" for="inlineRadio1"> GGG </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tamanho" id="inlineRadio1" value="EGG">
                            <label class="form-check-label" for="inlineRadio1"> EGG </label>
                        </div>
                        <br>

                            <!-- <a href="carrinho.php"> <button id="button" type="button">adicionar ao carrinho</button> </a> -->
                         <button id="button" name="btnadd" type="submit">Adicionar</button>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </body>
    <?php include "headerEfooter/footer2.inc.php"; ?>
</html>
<?php 
                if (isset($_POST['btnadd'])) {
    //echo'formulario enviado com sucesso';

                    $imagem     = isset($_POST['imagem'])     ? $_POST['imagem']      : null;
                    $nome       = isset($_POST['nome'])       ? $_POST['nome']        : null;
                    $valor      = isset($_POST['valor'])      ? $_POST['valor']       : null;
                    $modelagem  = isset($_POST['modelagem'])  ? $_POST['modelagem']   : null;
                    $categoria  = isset($_POST['categoria'])  ? $_POST['categoria']   : null;
                    $cor        = isset($_POST['cor'])        ? $_POST['cor']         : null;
                    $descricao  = isset($_POST['descricao'])  ? $_POST['descricao']   : null;
                    $estoque    = isset($_POST['estoque'])    ? $_POST['estoque']     : null;
                    $tamanho    = isset($_POST['tamanho'])    ? $_POST['tamanho']     : null;
                
                    $sql = "INSERT INTO tb_produtos (imagem, nome_produto, valor, modelagem, categoria, cor, descricao, estoque, tamanho) VALUES (:i, :n , :v, :m, :c, :co, :d , :e, :t)";
    
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':i', $imagem);
                    $stmt->bindParam(':n', $nome);
                    $stmt->bindParam(':v', $valor);
                    $stmt->bindParam(':m', $modelagem);
                    $stmt->bindParam(':c', $categoria);
                    $stmt->bindParam(':co', $cor);
                    $stmt->bindParam(':d', $descricao);
                    $stmt->bindParam(':e', $estoque);
                    $stmt->bindParam(':t', $tamanho);

                    if ($stmt->execute()){
                        echo "<script>alert('Produto adicionado!')</script>";
                        exit();
                    };
                
                }




                ?>