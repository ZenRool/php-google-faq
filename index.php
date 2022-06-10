<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titolo  -->
    <title>Google policies faq</title>
    <!-- Foglio di stile  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class = "d-flex justify-between align-center">
            <a href="#" class="d-flex align-center">
                <img alt="Qries" src="google.png">
                <span>Privacy e termini</span>
            </a>
            <div class = "d-flex align-center">
                <div class="quadre">
                    <div>.</div>
                    <div>.</div>
                    <div>.</div>
                    <div>.</div>
                    <div>.</div>
                    <div>.</div>
                    <div>.</div>
                    <div>.</div>
                    <div>.</div>
                </div>
                <div class="circle">L</div>
            </div>
        </div>
        <ul class="d-flex">
            <?php
            $nav = [
                "Introduzione",
                "Norme sulla privacy",
                "Termini di servizio",
                "Tecnologie",
                "Domande frequenti",
            ];
            foreach($nav as $voice) {
                echo "<li>" . $voice . "</li>";
            }

            ?>
        </ul>
    </header>

</body>
</html>