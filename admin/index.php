<?php
include './includes/header.php';

$conn = db_connect();
$sql = "SELECT * FROM posts
        ORDER BY posts.id DESC";
$posts = select($sql);

$sql = "SELECT * FROM categories
        ORDER BY categories.id DESC";
$categories = select($sql);

?>

<!-- CONTENT BEGINS HERE! -->
<h2>Blog Posts</h2>
<table class="table table-striped">
  <tr>
    <th>Post ID</th>
    <th>Post Title</th>
    <th>Author</th>
    <th>Date</th>
  </tr>
  <?php

  foreach ($posts as $post) {

    echo '
      <tr>
      <td>' . $post['id'] . '</td>
      <td><a href="edit_post.php?id=' . $post['id'] . '">' . $post['title'] . '</a></td>
      <td>' . $post['author'] . '</td>
      <td>' . $post['date'] . '</td>
      </tr>
    ';
  }
  ?>
</table>

<h2>Blog Categories</h2>
<table class="table table-striped">
  <tr>
    <th>Category ID</th>
    <th>Category Name</th>
  </tr>
  <?php
  foreach ($categories as $category) {
    echo '
      <tr>
      <td>' . $category['id'] . '</td>
      <td><a href="edit_category.php?id=' . $category['id'] . '">' . $category['name'] . '</a></td>
      </tr>
    ';
  }
  ?>
</table>


<?php
include './includes/footer.php';
?>