<?php
include './includes/header.php';

if (isset($_POST['submit'])) {

  // Cache post variables
  $title = $_POST['title'];
  $body = $_POST['body'];
  $category = $_POST['category'];
  $author = $_POST['author'];
  $tags = $_POST['tags'];

  $id = count(select("SELECT * FROM posts")) + 1;
  echo "<h1>$id</h1>";


  if ($title == '' || $body == '' || $author == '') {
    $error = 'Please fill out all fields before submitting a new entry';
  } else {
    $sql = "INSERT INTO posts
            (id, title, body, category, author, tags)
            VALUES($id,'$title', '$body', $category, '$author', '$tags')";
    insert($sql);
  }
}


$sql = "SELECT * FROM categories";
$categories = select($sql);

?>

<h1>Add a New Post</h1>

<form method="POST" class="my-4 p-4 border" action="add_post.php">
  <div class="form-group">
    <label class="h4">Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter title">
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Post Content</label>
    <textarea name="body" type="text" class="form-control" placeholder="Enter post content"></textarea>
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Category</label>
    <select name="category" class="form-control">
      <?php
      foreach ($categories as $category) {
        echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
      }
      ?>

    </select>
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter author...">
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter tags...">
  </div>
  <button name="submit" type="submit" class="btn btn-dark btn-lg px-4">Submit</button>
  <a href="./index.php" class="btn btn-danger btn-lg ">Cancel</a>
</form>

<?php
include './includes/footer.php';
?>