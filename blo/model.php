<?php
function getPosts()
{
    try
    {
       $db = dbConnect();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $req = $db->query('SELECT id, title, content FROM posts');

    return $req;
}


function getPost($postId)
{
    try
    {
        $db = dbConnect();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $req = $db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}



function getComments($postId)
{
    try
    {
        $db = dbConnect();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $comments = $db->prepare('SELECT id, name, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}


function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}



?>