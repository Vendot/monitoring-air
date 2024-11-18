    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            .st0 {
                fill: none;
                stroke: #000000;
                stroke-width: 4;
                stroke-miterlimit: 5;
            }

            .st1 {
                fill: none;
                stroke: #000000;
                stroke-width: 3;
                stroke-miterlimit: 5;
            }

            #logo2 {
                width: 150px !important;
                height: 150px !important;
                position: relative;
                margin-top: -100px;
            }

            #banner {
                border-radius: 50%;
                width: 150px;
                height: 150px;
                background: #fff;
                overflow: hidden;
                backface-visibility: hidden;
                transform: translate3d(0, 0, 0);
                z-index: -1;
                margin-bottom: -50px;
            }

            #banner .fill {
                animation-name: fillAction;
                animation-iteration-count: 1;
                animation-timing-function: cubic-bezier(.2, .6, .8, .4);
                animation-duration: 4s;
                animation-fill-mode: forwards;
            }

            #banner #waveShape {
                animation-name: waveAction;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
                animation-duration: 0.5s;
                width: 300px;
                height: 150px;
                fill: #04ACFF;
            }

            @keyframes fillAction {
                0% {
                    transform: translate(0, 150px);
                }

                100% {
                    transform: translate(0, -5px);
                }
            }

            @keyframes waveAction {
                0% {
                    transform: translate(-150px, 0);
                }

                100% {
                    transform: translate(0, 0);
                }
            }
        </style>
    </head>

    <body>
        <div class="container text-center mt-5">

            <h1>Sistem Tertanam <br>Monitoring Tingkat Kekeruhan Air</h1>

            <!-- Nama Anggota Kelompok -->
            <div class="m-5">
                <h2>Anggota Kelompok</h2>
                <ul class="list-unstyled">
                    <li>Anggota 1</li>
                    <li>Anggota 2</li>
                    <li>Anggota 3</li>
                    <li>Anggota 4</li>
                </ul>
            </div>

            <div class="row align-items-start">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Nilai Kekeruhan Air
                        </div>
                        <div class="card-body" id="kekeruhan"></div>
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

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script type="text/javascript" src="jquery/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                setInterval(function() {
                    $("#kekeruhan").load("kekeruhan.php");
                    $("#status").load("status.php");
                }, 1000);
            });
        </script>
    </body>

    </html>