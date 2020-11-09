<?php
include './includes/post_header.php';
$title = "This is a Single Post";
?>


<?php

$id = $_GET['id'];
$post = select("SELECT * FROM posts WHERE id = " . $id);
$post = $post[0];

echo '
<div class="border p-3 blog-post-section">
  <h2 class="blog-post-title">' . $post['title'] . '</h2>
  <p class="blog-post-meta">' . formatDate($post['date']) . ' by <a href="#">' . $post['author'] . '</a></p>
  <img src="./images/blog-post-' . $id . '.jpeg">
<div class="blog-post-body">
  <p>' . $post['body'] . '</p> 
</div>
</div><!-- /.blog-post -->';
?>

<?php
include './includes/post_footer.php';
?>