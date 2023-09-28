<form action="" method="post">
    <p>Introdueix dades </p>
    <textarea name="dades" id="" cols="30" rows="10"></textarea>
    <p>Separador</p>
    <input type="text" name="sep">
    <input type="submit">
</form>

<?php

$file = fopen("comentaris.txt", "w");
$file_text = preg_replace('/\s+/', $_POST["sep"], $_POST["dades"]);
fwrite($file, $file_text);