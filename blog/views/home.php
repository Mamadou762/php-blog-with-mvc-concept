<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Le blog de l'AVBN</title>
      <link href="style.css" rel="stylesheet" />
   </head>

   <body>
      <h1>Le super blog de l'AVBN !</h1>
      <p>Derniers billets du blog :</p>

      <div class="news">
         <?php foreach($posts as $post): ?>
            <h3>
               <?= htmlspecialchars($post->title); ?>
               <em>le <?= $post->created_at ?></em>
            </h3>

            <p>
               <?= nl2br(htmlspecialchars($post->content)); ?>
               <br />
               <em><a href="#">Commentaires</a></em>
            </p>
         <?php endforeach; ?>
      </div>      
   </body>
</html>