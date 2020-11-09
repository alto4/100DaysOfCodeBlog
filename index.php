<?php
include './includes/header.php';
$title = "Day 1: Setting Up a Blog & Generating a Game Plan";

// echo "<h1>Test</h1>";
// echo "<h3>Posts Data:</h3>";
// $posts = select("SELECT * FROM posts");
// print_r($posts);
// echo "<h3>Categories Data:</h3>";
// $categories = select("SELECT * FROM categories");
// print_r($categories);

$posts = select("SELECT * FROM posts ORDER BY id DESC");
if ($posts) {
  foreach ($posts as $post) {
    echo '<div class="border p-3 blog-post row">
    <div class="col-md-6">
      <h2 class="blog-post-title"><a href="./post.php?id=' . $post['id'] . '">' . $post['title'] . '</a></h2>
      <p class="blog-post-meta">' . formatDate($post['date']) . ' by <a href="#">' . $post['author'] . '</a></p>
      <p>' . shortenText($post['body'], 250) . '</p>
    </div>
    <div class="col-md-6 p-3">
    <img class="blog-post-image" src="https://images.pexels.com/photos/315791/pexels-photo-315791.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=200"/>
    </div>
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