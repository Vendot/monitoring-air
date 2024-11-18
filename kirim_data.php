<?php

    $conn = mysqli_connect("localhost", "root", "", "monitoring_air");

    $nilai_sensor = $_GET['sensor'];

    mysqli_query($conn, "UPDATE kekeruhan SET nilai = '$nilai_sensor' WHERE id = 1");