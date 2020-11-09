<?php
include './includes/header.php';

$id = $_GET['id'];
$category = select("SELECT * FROM categories WHERE id = $id");
$category = $category[0];
$sql = "SELECT * FROM categories";
$categories = select($sql);
echo "<h1>ID: $id</h1>";

if (isset($_POST['submit'])) {

  // Cache post variables
  $name = $_POST['name'];

  if ($name == '') {
    $error = 'Please add a valid name for the category';
  } else {
    echo "<h1>$id</h1>";
    $sql = "UPDATE categories
            SET
            name = '$name'
            WHERE id = '$id'";
    update($sql);
  }
}

if (isset($_POST['delete'])) {
  $sql = "DELETE FROM categories WHERE id = " . $id;
  delete($sql);
}

?>

<h1>Edit a Category</h1>

<form method="POST" class="my-4 p-4 border" action="edit_category.php?id=<?php echo $id ?>">
  <div class="form-group">
    <label class="h4">Category Name</label>
    <?php echo '
    <input name="name" type="text" class="form-control" placeholder="Enter category name" value="' . $category['name'] . '" />';
    ?>
  </div>
  <hr />
  <button name="submit" type="submit" class="btn btn-dark btn-lg px-4">Submit</button>
  <a href="./index.php" class="btn btn-outline-dark mx-2 btn-lg ">Cancel</a>
  <button name="delete" type="submit" class="btn btn-danger btn-lg px-4">Delete</button>
</form>

<?php
include './includes/footer.php';
?>