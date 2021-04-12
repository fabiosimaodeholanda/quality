<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
    <title>lanchonete</title>
</head>
<body>

            <div class="menu">
            <a href="index.html">Página Inicial</a>
            <a href="produtos.html">Produtos</a>
            <a href="endereco.html">Endereço</a>
            <a href="contatos.html">Contatos</a>
            <a href="comentarios.php">Comentarios</a>
            </div>


    <form action="comentarios.php" method="POST">
        
        <h4>nome:</h4>
        <input type="text" name="nome">
        <h4>comentario:</h4>
        <input type="text" name="comentario">
        <br><br>
        <input type="submit" value="Enviar">


    </form>
</body>
</html>

<?php

$servername = "localhost";
$username = "fabio";
$password = "@fabio123";
$database = "usuario";

//criando conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//checando conexao
if(!$conn) {
    die("Connection failed: " .mysqly_connect_error());
}


if(isset($_POST["comentario"]) && isset($_POST["nome"])){
    
    $comentario = $_POST["comentario"];
    $nome = $_POST["nome"];

    $sql = "INSERT INTO depoimento (comentarios, nome) VALUES ('$comentario', '$nome')";
    $result = $conn->query($sql);

    $sql = "select * from depoimento";
$result = $conn->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){
            echo $rows["nome"];
            echo $rows["comentarios"];
        }
    } else {
    echo "nenhum comentario cadastrado";

}

}
mysqli_close($conn);

?>


<?php

$servername = "localhost";
$username = "fabio";
$password = "@fabio123";
$database = "cadastro";

//criando conexao
$conn = mysqli_connect($servername, $username, $password, $database);

//checando conexao
if(!$conn) {
    die("Connection failed: " .mysqly_connect_error());
}


if(isset($_POST["email"])){
    
    $email = $_POST["email"];

    $sql = "INSERT INTO formulario (email) VALUES ('$email')";
    $result = $conn->query($sql);

if($result){
        echo $email;
         
    }

}
mysqli_close($conn);

?>