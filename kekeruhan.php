<?php   

    $conn = mysqli_connect("localhost", "root", "", "monitoring_air");

    $sql = mysqli_query($conn, "SELECT * FROM kekeruhan");

    $data = mysqli_fetch_array($sql);
    // $nilaiKekeruhan = mysqli_fetch_assoc($data);

    $nilaiKekeruhan = $data['nilai'];

?>

<h1>
    <?php echo $nilaiKekeruhan; ?>
</h1>