<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal</title>
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
        <h1 class="text-center">Legal:</h1><br>
        <p>Aquesta pàgina web és programari obert llicenciat amb la llicència MIT. Pots veure el codi <a href="https://github.com/Todo56/DossierEscola">aquí</a>. Tots els recursos utilitzats aquí están sent utilitzats per educació. Aquesta web es únicament per presentar el dossier de final de curs. En el cas de que s'hagi utilitzat un recurs seu i no vol que es mostri pot enviar un email a gottfried@todo56.dev.<p>
        <br><br>
        <div class="row">
            <p class="col-lg-2">
            
            </p>
            <p class="col-lg-8">
            MIT License

Copyright (c) 2021 Gottfried Rosenberger<br><br>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:<br><br>

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.<br><br>

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
            </p>
            <p class="col-lg-2">
            
            </p>
        </div>
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


</html>