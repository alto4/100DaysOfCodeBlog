<?php
include './includes/header.php';

$id = $_GET['id'];
$post = select("SELECT * FROM posts WHERE id = $id");
$post = $post[0];
$sql = "SELECT * FROM categories";
$categories = select($sql);
echo "<h1>ID: $id</h1>";

if (isset($_POST['submit'])) {

  // Cache post variables
  $id = $post['id'];
  $title = $_POST['title'];
  $body = $_POST['body'];
  $category = $_POST['category'];
  $author = $_POST['author'];
  $tags = $_POST['tags'];



  if ($title == '' || $body == '' || $author == '') {
    $error = 'Please fill out all fields before submitting a new entry';
  } else {
    echo "<h1>$id</h1>";
    $sql = "UPDATE posts
            SET
            title = '$title',
            body = '$body',
            category = '$category',
            author = '$author',
            tags = '$tags'
            WHERE id = '$id'";
    update($sql);
  }
}

if (isset($_POST['delete'])) {
  $sql = "DELETE FROM posts WHERE id = " . $id;
  delete($sql);
}
$sql = "SELECT * FROM categories";
$categories = select($sql);

?>
<h1>Edit a Post</h1>

<form method="POST" class="my-4 p-4 border" action="edit_post.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label class="h4">ID</label>
    <input name="author" type="text" class="form-control" disabled value="<?php echo $post['id']; ?>" placeholder="Enter author...">
  </div>

  <div class=" form-group">
    <label class="h4">Post Title</label>

    <input name="title" type="text" class="form-control" value="<?php echo $post['title']; ?>" placeholder="Enter title">
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Post Content</label>
    <textarea name="body" type="text" class="form-control" placeholder="Enter post content"><?php echo $post['body']; ?></textarea>
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Category</label>
    <select name="category" class="form-control">
      <?php
      foreach ($categories as $category) {
        if ($category['id'] == $post['category']) {
          $selected = 'selected';
        } else {
          $selected = '';
        }
        echo '<option ' . $selected . ' value=' . $category['id']  . '>' . $category['name'] . '</option>';
      }
      ?>
    </select>
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Author</label>
    <input name="author" type="text" class="form-control" value="<?php echo $post['author']; ?>" placeholder="Enter author...">
  </div>
  <hr />
  <div class="form-group">
    <label class="h4">Tags</label>
    <input name="tags" type="text" class="form-control" value="<?php echo $post['tags']; ?>" placeholder="Enter tags...">
  </div>
  <button name="submit" type="submit" class="btn btn-dark btn-lg px-4">Submit</button>
  <a href="./index.php" class="btn btn-outline-dark mx-2 btn-lg ">Cancel</a>
  <button name="delete" type="submit" class="btn btn-danger btn-lg px-4">Delete</button>

</form>

<?php
include './includes/footer.php';
?>