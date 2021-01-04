<?php

// Exemplo leitura de arquivos

$filename = "usuarios.csv";

if (file_exists($filename)) {

    $file = fopen("usuarios.csv", "r");

    $headers = explode(",", fgets($file)); // quebra a string em array a partir das virgulas

    $data = array();
    

    while ($row = fgets($file)) {

        $rowData = explode(",", $row);
        $linha = array();

        for ($i = 0; $i < count($headers); $i++) {

            $linha[$headers[$i]] = $rowData[$i];

        }

        array_push($data, $linha);

    }

    fclose($file);

    echo json_encode($data);
}