<?php
include './includes/header.php';

$id = $_GET['id'];
$post = select("SELECT * FROM posts WHERE id = $id");
$post = $post[0];
$sql = "SELECT * FROM categories";
$categories = select($sql);

?>
<h1>Edit a Post</h1>

<form method="POST" class="my-4 p-4 border" action="edit_post.php">
  <div class="form-group">
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
        echo '<option ' . $selected . '>' . $category['id'] . "|" . $category['name'] . '</option>';
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
  <button name="submit" type="submit" class="btn btn-danger btn-lg px-4">Delete</button>

</form>

<?php
include './includes/footer.php';
?>