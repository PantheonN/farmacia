<html>
<head>

</head>

<body>


<?php
//conecção á base de dados
$servername="localhost";
$username="root";
$password="";

$Connection=mysqli_connect($servername,$username,$password);
if (!$Connection){
	die("Erro de Conecção: ". Mysqli_connect_error());
}
echo "";
echo "<br>";
echo "<br>";
?>




<?php
include 'listar_todos.php';
//$Valor=$_GET['id'];

//$Valor=4;
echo '<h2>Dados Especificos de um medicamento</h2>';







//Conectando-se á base de dados exacta dentro do phpmyadmin
$selected = mysqli_select_db($Connection,"base2")
  or die("Erro ao Selecionar base de dados especifica<br>");
  
  
//selecionando exactamente a tabela e o a aliea que neste caso
// é a numero 1 dai que apenas o user1 irá aprecer e nao os restantes   
$query="SELECT * FROM farmacia WHERE id=$cont";  // WHERE ID = 1
$result = mysqli_query($Connection,$query);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    // mostrando os resultados na página web
	printf ("%s: %s %s %s\n", $row["id"], $row["nome"], $row["quantidade"], $row["farmaceutica"], $row["custo"]);
	echo "<br>";
}

mysqli_free_result($result);
mysqli_close($Connection);

?>









<br><br><center>
<form action="listar_todos.php" Method="Get">
		<h2>  Volte ao inicio</h2>
		<input type="submit" value="Voltar ao inicio">
</form> </center>

</body>
</html>