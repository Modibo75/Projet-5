<?php
use App\Connection;
use App\Table\PostTable;
use App\Table\CategoryTable;
use App\Table\Table;

$id = (int)$params['id'];
$slug = $params['slug'];


$pdo = Connection::getPDO();
$post = (new PostTable($pdo))->find($id);
(new CategoryTable($pdo))->hydratePosts([$post]);

if($post->getSlug() !== $slug) {
    $url = $router->url('post', ['slug' => $post->getSlug(), 'id' => $id]);
    http_response_code(301);
    header('Location: ' . $url);
}
?>


<h1><?= e($post->getName()) ?></h5>
<p class="text-muted"><?= $post->getCreatedAt()->format('d F Y') ?></p>
<?php foreach($post->getCategories() as $k => $category):
    if ($k > 0): 
        echo ', ';
    endif;
    $category_url = $router->url('category', ['id' => $category->getID(), 'slug' => $category->getSlug()]);
    ?><a href="<?= $category_url ?>"><?= e($category->getName()) ?></a><?php
endforeach ?>
<p><?= $post->getFormattedContent() ?></p>

?>

<div class="form-group">
                   <label for="bio">Commentaire</label>
                   <textarea class="form-control" id="bio" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary">Valider</button>
                 </div>
