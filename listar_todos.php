<html>
<head>
<h2><center>Página principal</h2></center>
</head>

<body>
<br><br>

<style>
.divsilk {
    background-color: Cornsilk;
	font-family: Lobster, Monospace;
	font-size: 16px;
}


.h21 {
    background-color: Cornsilk;
	font-family: Lobster, Monospace;
	font-size: 16px;
}

 .green-box {
    background-color: green;
    padding-top: 15px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 15px;
  }
</style>


<div class=divsilk align =center>
<?php
//conecção á base de dados
$servername="localhost";
$username="root";
$password="";

$Connection=mysqli_connect($servername,$username,$password);
if (!$Connection){
	die("Erro de Conecção: ". Mysqli_connect_error());
}
echo "Conectado Com Sucesso ao mysql";
echo "<br>";
echo "<br>";
$cont = 1;
echo "$cont";
echo "<br>";
echo "<br>";
//$cont++;
echo "$cont";
echo "<br>";
echo "<br>";

?>

<?php
//Conectando-se á base de dados exacta dentro do phpmyadmin
$selected = mysqli_select_db($Connection,"base2")
  or die("Erro ao Selecionar base de dados especifica<br>");
  
  
//selecionando exactamente a tabela e o a aliea que neste caso
// é a numero 1 dai que apenas o user1 irá aprecer e nao os restantes   
$query="SELECT * FROM farmacia";  // WHERE 1
$result = mysqli_query($Connection,$query);



//$valor=2;
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	echo '<a href="detalhes_um.php?id=$cont "> ID:</a>';  //$row['valor'"
    // mostrando os resultados na página web
	printf ("%s: %s %s %s\n", $row["id"], $row["nome"], $row["quantidade"], $row["farmaceutica"], $row["custo"]);
	echo "<br>";
	$cont++;	
}

mysqli_free_result($result);
// mysqli_close($Connection);

?>
</div>



<br><br><br>
<form action="detalhes_um.php" Method="Get">
		<input type="submit" value="Ver um medicamento">
</form> 

<form action="alterar.php" Method="Get">
		<input type="submit" value="Alterar medicamento">
</form> 

<form action="inserir_novo.php" Method="Get">
		<input type="submit" value="Inserir medicamento">
</form> 

<form action="eliminar_um.php" Method="Get">
		<input type="submit" value="Eliminar medicamento">
</form> 







</body>
</html>