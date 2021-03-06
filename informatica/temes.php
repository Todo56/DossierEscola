<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temes</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/logo.png" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css ">
</head>

<body>
    <?php
        include("./assets/partials/navbar.php");
    ?>
    <div class="container">
        <h1 class="text-center">Temes:</h1><br>
        <h2>Primer Trimestre:</h2>
        <div id="1">
        </div>
        <br>
        <hr>
        <h2>Segon Trimestre:</h2>
        <div id="2">
        </div>
        <br>
        <hr>
        <h2>Tercer Trimestre:</h2>
        <div id="3">
        </div>
        <br>
        <hr>
        <h2>Exercicis Extra:</h2>
        <div id="4">
        </div>
        <br>
        <hr>
    </div>
    <?php 
        include("./assets/partials/footer.php");
    ?>
</body>
<script src="./assets/js/index.js"></script>
<script>
carregarTrimestre("navbar1", 1, true);
carregarTrimestre("navbar2", 2, true);
carregarTrimestre("navbar3", 3, true);
carregarTrimestre("navbar4", 4, true);
</script>
<script>
carregarTrimestre("1", 1);
carregarTrimestre("2", 2);
carregarTrimestre("3", 3);
carregarTrimestre("4", 4);
</script>

</html>