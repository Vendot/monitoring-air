<?php

    $conn = mysqli_connect("localhost", "root", "", "monitoring_air");

    $sql = mysqli_query($conn, "SELECT * FROM kekeruhan");

    $data = mysqli_fetch_array($sql);
    // $nilaiKekeruhan = mysqli_fetch_assoc($data);

    $nilaiKekeruhan = $data['nilai'];

    if($nilaiKekeruhan > 50) {
        $status = "Bersih";
    } else if($nilaiKekeruhan > 40) {
        $status = "Keruh";
    } else {
        $status = "Kotor";
    }

?>

<h1>
    <?php echo $status; ?>
</h1>
