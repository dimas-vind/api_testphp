<?php

    require_once('connection.php');

    $sqlquery = "SELECT nama_peserta AS nama, nama_perusahaan AS perusahaan FROM peserta INNER JOIN perusahaan ON peserta.id_perusahaan=perusahaan.id";
    $query = mysqli_query($connection, $sqlquery);

    $result = array();
    while ($row = mysqli_fetch_array($query)) {
        array_push($result, array(
            'nama' => $row['nama'],
            'perusahaan' => $row['perusahaan']
        ));
    }

    echo json_encode(
        $result
    );

?>