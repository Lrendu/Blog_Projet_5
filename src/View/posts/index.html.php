<?php

$query = $pdo->query('SELECT * FROM posts');
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .post {
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="mt-4">Articles</h1>
    <hr>

    <?php foreach ($posts as $post): ?>
    <div class="post">
      <h2><?php echo $post['title']; ?></h2>
      <p><strong>Author:</strong> <?php echo $post['author']; ?></p>
      <p><strong>Date:</strong> <?php echo $post['created_at']; ?></p>
      <p><?php echo $post['content']; ?></p>
      <a href="single.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Read More</a>
    </div>
    <?php endforeach; ?>

  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
