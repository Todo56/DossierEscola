<html>

<head>
    <title>Legal</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/logo.png" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css ">
</head>

<body>
    <?php
    include("./assets/partials/navbar.php");
    ?>
    <div class="container">
        <h1 class="text-center">Sobre Mi:</h1>
        <br>
        Soc Gottfried Rosenberger Gago, un programador de PHP, JavaScript (server i client), SQL i administrador de sistemes linux i bases de dades. També soc un gran fan dels videojocs com Battlefield V, Hitman 3, Minecraft...
        <br><br>
        <div class="row">
            <div class="col-6">
                Contacte:
                <ul>
                    <li><a href='mailto:gottfried@todo56.dev'>Email</a></li>
                    <li><a href='https://t.me/Grosenberger'>Telegram</a></li>
                    <li><a href='https://github.com/Todo56'>GitHub</a></li>
                    <li><a href='https://twitter.com/Todo56_'>Twitter</a></li>
                </ul>
            </div>
            <div class="col-6">
                Projectes:
                <ul>
                    <li><a href=''>ElementBot</a></li>
                    <li><a href=''>GreekMC Network</a></li>
                    <li><a href=''>Tutorial de JavaScript</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <?php
    include("./assets/partials/footer.php");
    ?>
</body>
<script src="./assets/js/index.js"></script>
<script>
    carregarTrimestre("navbar1", 1, true)
    carregarTrimestre("navbar2", 2, true)
    carregarTrimestre("navbar3", 3, true)
</script>


</html>