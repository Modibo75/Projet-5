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
        <div class="col l6 m6 s12">
            <div class="card">
                <div class="card-content">
            <h5 class="grey-text text-darken-2">
                <?php echo htmlspecialchars($data['title']); ?>
               
            </h5>
            <div class="card-image waves-effect waves-block waves-light">
                <img src="img/posts/post.png" class="activator"  alt="<?php echo htmlspecialchars($data['title']); ?>"/>
            </div>


            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
                <p><a href="index.php?page=post&id=<?= ($data['id']); ?>">Voir l'article complet</a></p>

              </div>

              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?=  ($data['title']);?> <i class="material-icons right">close</i></span>

                                        <p>
            <?php
            // On affiche le contenu du billet
            echo nl2br(htmlspecialchars($data['content'],0,1000));
            ?>
            <br />
            <em><a href="#">Commentaires</a></em>
            </p>
        </div>
        </div>
        </div>
        <?php
        } // Fin de la boucle des billets
        $posts->closeCursor();
        ?>
    </body>  
</html> 