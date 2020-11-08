<?php
include './includes/header.php';
$title = "This is a Single Post";
?>

<?php

$id = $_GET['id'];
$post = select("SELECT * FROM posts WHERE id = " . $id);
$post = $post[0];

echo '<div class="border p-3 blog-post">
  <h2 class="blog-post-title">' . $post['title'] . '</h2>
  <p class="blog-post-meta">' . formatDate($post['date']) . ' by <a href="#">' . $post['author'] . '</a></p>
  <p>' . $post['body'] . '</p>
</div><!-- /.blog-post -->';
?>

<?php
include './includes/footer.php';
?>