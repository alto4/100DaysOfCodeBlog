<?php
include './includes/header.php';
$title = "Day 1: Setting Up a Blog & Generating a Game Plan";

if (isset($_GET['category'])) {
  $category = $_GET['category'];
  $posts = select("SELECT * FROM posts WHERE category =" . $category);
} else {
  $posts = select("SELECT * FROM posts");
}
// echo "<h1>Test</h1>";
// echo "<h3>Posts Data:</h3>";
// $posts = select("SELECT * FROM posts");
// print_r($posts);
// echo "<h3>Categories Data:</h3>";
// $categories = select("SELECT * FROM categories");
// print_r($categories);

if ($posts) {
  foreach ($posts as $post) {
    echo '<div class="border p-3 blog-post">
  <h2 class="blog-post-title"><a href="./post.php?id=' . $post['id'] . '">' . $post['title'] . '</a></h2>
  <p class="blog-post-meta">' . formatDate($post['date']) . ' by <a href="#">' . $post['author'] . '</a></p>
  <p>' . shortenText($post['body']) . '</p>
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