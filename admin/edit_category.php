<?php
include './includes/header.php';

$id = $_GET['id'];
$category = select("SELECT * FROM categories WHERE id = " . $id);
$category = $category[0];
?>

<h1>Edit a Category</h1>

<form method="POST" class="my-4 p-4 border" action="edit_category.php">
  <div class="form-group">
    <label class="h4">Category Name</label>
    <?php echo '
    <input name="name" type="text" class="form-control" placeholder="Enter category name" value="' . $category['name'] . '" />';
    ?>
  </div>
  <hr />
  <button name="submit" type="submit" class="btn btn-dark btn-lg px-4">Submit</button>
  <a href="./index.php" class="btn btn-outline-dark mx-2 btn-lg ">Cancel</a>
  <button name="submit" type="submit" class="btn btn-danger btn-lg px-4">Delete</button>
</form>

<?php
include './includes/footer.php';
?>