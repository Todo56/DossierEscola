<html>

<head>
    <title>Dossier Tecnologia de 4rt ESO</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/logo.png" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css ">
</head>

<body>
    <?php
        include("./assets/partials/navbar.php");
    ?>
    <div class="container">
        <h1 class="text-center">Dossier Tecnologia 4tr ESO</h1><br>
        <p>
            Aquesta página web és un recull de les tasques que s'han fet durant tot el curs de tecno a 4rt d'ESO al Col·legi Jardí l'any 2020-2021. Totes les activitats penjades aquí corresponen a l'alumne Gottfried Rosenberger.<br>
            <br>Al evaluar o observar aquesta página web cal tenir en compte que no està feta amb qualsevol dissenyador de págines web, esta programada manualment (utilitzant eines com <a href="https://getbootstrap.com/">Bootstrap</a> i <a href="https://jquery.com/">jQuery</a>) i es troba en un servidor Linux configurat per mi mateix. Això incrementa el que pots fer a la página web però incrementa el nivell de dificultat i temps que has d'invertir. També consumeix recursos del meu servidor (ordinador remot que és on-line 24/7) que pago mensualment.
            <br><br>Navegar per la página web és molt simple. A la barra superior es poden trobar tots els temes que hem fet, també he afegit un link amb més informació sobre mi i els meus projectes i un apartat legal per saber com actuar en el cas de que hagi utilitzat un recurs seu.
        </p>
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