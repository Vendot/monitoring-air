<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monitoring Air</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }
    </style>
</head>

<body id="body" class="m-0 p-0 w-100 h-100">
    <div class="container text-center mt-5">
        <div class="">
            <img src="img/untan.png" alt="" style="width: 150px;">
        </div>

        <h1 class="text-white ">Sistem Tertanam <br>Monitoring Tingkat Kekeruhan Air</h1>

        <div class="m-4">
            <h3 class="text-white">Anggota Kelompok</h3>
            <ul class="list-unstyled text-white">
                <li>Fikri Al Jauzi</li>
                <li>Khairul Fadhil</li>
                <li>Muhammad Nazwan Fadhilah</li>
                <li>Muhammad Haikal Ashari</li>
                <li>Tirta Kusuma Yudha</li>
            </ul>
        </div>

        <div class="row align-items-start mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Nilai Kekeruhan Air
                    </div>
                    <div class="card-body">
                        <h1 id="kekeruhan"></h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Status Air
                    </div>
                    <div class="card-body" id="status"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="module/three.r134.min.js"></script>
    <script src="module/vanta.waves.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

    <script type="text/javascript">
        let kekeruhan = 0;

        $(document).ready(function() {
            setInterval(function() {
                $.get("kekeruhan.php", function(data) {
                    kekeruhan = data;

                    $("#kekeruhan").html(data);
                });

                function initializeVantaWithColor(kekeruhan) {
                    let color;
                    if (kekeruhan > 50) {
                        color = 0x398dfa;
                    } else if (kekeruhan > 40) {
                        color = 0xb0884c;
                    } else {
                        color = 0x654321;
                    }

                    VANTA.WAVES({
                        el: "#body",
                        mouseControls: true,
                        touchControls: true,
                        gyroControls: false,
                        minHeight: 900.00,
                        minWidth: 200.00,
                        scale: 1.00,
                        scaleMobile: 1.00,
                        color: color
                    });
                }

                fetch('kekeruhan.php')
                    .then(response => response.text())
                    .then(data => {
                        const nilaiKekeruhan = parseInt(data.trim());
                        initializeVantaWithColor(nilaiKekeruhan);
                    })
                    .catch(error => console.error('Error fetching data:', error));

                $("#status").load("status.php");
            }, 1300);
        });
    </script>
</body>

</html>