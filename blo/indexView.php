<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Mon super blog !</h1>
        <p>Derniers billets du blog :</p>
 
        <?php
        while ($data = $posts->fetch())
        {
        ?>
        <div class="news">
            <h3>
                <?php echo htmlspecialchars($data['title']); ?>
               
            </h3>
            
            <p>
            <?php
            // On affiche le contenu du billet
            echo nl2br(htmlspecialchars($data['content']));
            ?>
            <br />
            <em><a href="#">Commentaires</a></em>
            </p>
        </div>
        <?php
        } // Fin de la boucle des billets
        $posts->closeCursor();
        ?>
    </body>
</html>