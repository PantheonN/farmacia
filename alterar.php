





<?php

$nome="nome1";
$quantidade=30;
$farmaceutica="desconhecido";
$condicao=4;

?>




<?php

$conn=mysqli_connect("localhost","root","","base2");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "UPDATE farmacia SET  nome = '$nome', quantidade = '$quantidade', farmaceutica = '$farmaceutica' WHERE id = $condicao";



if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);


?>




<br><br><br><br><center>
<form action="listar_todos.php" Method="Get">
		<h2>  Volte ao inicio</h2>
		<input type="submit" value="Voltar ao inicio">
</form> </center>