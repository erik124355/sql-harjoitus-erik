<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Vastaanotto</title>
    <link rel="stylesheet" href="lomaketyyli.css">
</head>
<body>
    <div class="kontti">

        <?php
        if( $_SERVER["REQUEST_METHOD"]=="POST") {
            echo "<h1>Viestin on vastaanotettu</h1>";

            $nimi = htmlspecialchars($_POST["nimi"]);
            $email = htmlspecialchars($_POST["email"]);
            $viesti = htmlspecialchars($_POST["viesti"]);

            echo "<p><strong>Nimi:</strong> $nimi</p>";
            echo "<p><strong>Sähköposti:</strong> $email</p>";
            echo "<p><strong>Viesti:</strong><br>" . $viesti. "</p>";
        }
        else{
            echo "<h1>Lomaketta ei ole lähetetty oikein</h1>";
        }
        ?>
    </div>
</body>
</html>