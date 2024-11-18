<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Hello, world!</h1>
    
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script type="text/javascript" src="jquery/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#kekeruhan").load("kekeruhan.php");
                $("#status").load("status.php");
            }, 1000);
        });
    </script>
  </body>
</html>