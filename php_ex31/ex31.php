<h1>PROCESSA CONTACTES</h1>
<?php 
$file = fopen("contactes31.txt", "r");
//echo fgets($file);
$string_write = "";
echo "<table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Cognoms</th>
                <th>Num. Tel.</th>
            </tr>
        </thead>
        <tbody>
";

while (true) {
    $content = fgets($file);
    if ($content) {
        $arrayContent = explode(",", $content);
        $string_write .= "$arrayContent[0]#$arrayContent[1]#$arrayContent[2]#$arrayContent[3]";
        echo "<tr>
                <td>$arrayContent[0]</td>
                <td>$arrayContent[1] $arrayContent[2]</td>
                <td>$arrayContent[3]</td>
                </tr>
        ";
    } else {
        break;
    }
}

echo "</tbody></table>";
$file_write = fopen("contactes31b.txt", "w");
fwrite($file_write, $string_write);
?>