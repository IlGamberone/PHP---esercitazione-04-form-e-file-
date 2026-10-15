<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo Auto</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $marca = $_GET["marca"];
        $modello = $_GET["modello"];
        $condizione = isset($_GET["condizione"]) ? $_GET["condizione"] : "";
        $annoCostruzione = $_GET["anno"];
        $cilindrata = $_GET["cilindrata"];
        $cavalli = $_GET["cavalli"];
        $prezzo = $_GET["prezzo"];
        $targa = $_GET["targa"];
        $accessori = @$_GET["accessori"];
        $descrizioneAggiuntiva = $_GET["descrizioneAggiuntiva"];
        


        echo "<h1>Riepilogo Auto</h1>";

        echo "<table>";

            echo "<tr>";
                echo "<th>Marca</th>";
                echo "<td>" . $marca . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Modello</th>";
                echo "<td>" . $modello . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Stato</th>";
                echo "<td>" . $condizione . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Anno Costruzione</th>";
                echo "<td>" . $annoCostruzione . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Cilindrata</th>";
                echo "<td>" . $cilindrata . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Cavalli</th>";
                echo "<td>" . $cavalli . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Prezzo</th>";
                echo "<td>" . $prezzo . " €</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Targa</th>";
                echo "<td>" . $targa . "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Accessori</th>";
                echo "<td>";
                if ($accessori) {
                    foreach ($accessori as $accessorio) {
                        echo $accessorio . "<br>";
                    }
                } else {
                    echo "Nessuno";
                }
                echo "</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<th>Descrizione Aggiuntiva</th>";
                echo "<td>" . $descrizioneAggiuntiva . "</td>";
            echo "</tr>";

        echo "</table>";

        $info = "auto.txt"; 
        $file = fopen($info, "a");
        
        $record = "";
        $record .= $marca;
        $record .= ";";
        $record .= $modello;
        $record .= ";";
        $record .= $condizione;
        $record .= ";";
        $record .= $annoCostruzione;
        $record .= ";";
        $record .= $cilindrata;
        $record .= ";";
        $record .= $cavalli;
        $record .= ";";
        $record .= $prezzo;
        $record .= ";";
        $record .= $targa;
        $record .= ";";
        if ($accessori) {
            foreach ($accessori as $accessorio) {
                $record .= $accessorio . ", ";
            }
        }
        $record .= ";";
        $record .= $descrizioneAggiuntiva;
        $record .= PHP_EOL;

        fwrite($file, $record);
        fclose($file);
    ?>
</body>
</html>