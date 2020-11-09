<?php
include './includes/header.php';
$title = "Day 1: Setting Up a Blog & Generating a Game Plan";

if (isset($_GET['category'])) {
  $category = $_GET['category'];
  $posts = select("SELECT * FROM posts WHERE category = $category ORDER BY id DESC");
} else {
  $posts = select("SELECT * FROM posts ORDER BY id DESC");
}

if ($posts) {
  foreach ($posts as $post) {
    echo '<div class="border p-3 blog-post">
  <h2 class="blog-post-title"><a href="./post.php?id=' . $post['id'] . '">' . $post['title'] . '</a></h2>
  <p class="blog-post-meta">' . formatDate($post['date']) . ' by <a href="#">' . $post['author'] . '</a></p>
  <p>' . shortenText($post['body'], 250) . '</p>
  </div><!-- /.blog-post -->
';
  }
} else {
  echo '<h1 class="text-danger>There are no posts to display!</h1>';
}

?>

<?php
include './includes/footer.php';
?>