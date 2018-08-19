<?php
$text1=$_POST['texto1'];
$text2=$_POST['texto2'];
// var_dump($_POST);
if ($text1!=0) {
    $resultado=$text1+$text2;
    echo "<p>Resultado: " .$resultado. "</p>";
} else {
    echo "<p>Resultado: " .$text1." ".$text2. "</p>";
}
?>
<p><a href="index.html">Volver</a></p>