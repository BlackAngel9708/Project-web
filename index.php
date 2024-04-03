global$servername,$username,$password; global$password,$username,$servername; <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Black Angel</title>
</head>
<body>
    <header>
        <div class="principale">
            <div class="logo">
                <a href="#"><span>Jimmy</span></a>
            </div>
            <ul>
                <li class="active">
                <a href="#">Accueil</a>
                </li>
                <li>
                    <a href="stream.html">Mes plateforme de stream</a>
                </li>
                <li>
                    <a href="about.html">A propos de moi</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
                <li>
            </ul>
        </div>
        <div class="titre">
            <h1>Black Angel</h1>
            <p>Je suis un streamer de jeux vidéo</p>
        </div>
        <div class="bouton">
            <a href="https://www.twitch.tv/blackangel9708" class="btn">Regarder mes streams</a>
            <a href="https://github.com/JimmyRamsamynaick" class="btn">Voir d'autre projets</a>
        </div>
    </header>
    <?php
    include 'config/config.php';

    $conn = new mysqli($servername, $username, $password, "myDB");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SHOW TABLES";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Table : " .$row[0] . "<br>";
        }
    } else {
        echo "Aucune table trouvée";
    }
    $conn->close();
    echo "<h2>Bienvenue sur mon site !</h2>";
    ?>
</body>
</html>