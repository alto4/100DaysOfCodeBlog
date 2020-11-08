<?php
include './includes/header.php';

if (isset($_POST['submit'])) {

  // Cache post variables
  $name = $_POST['name'];

  $id = count(select("SELECT * FROM categories")) + 1;
  echo "<h1>$id</h1>";


  if ($name == '') {
    $error = 'Please add a name for the new category.';
  } else {
    $sql = "INSERT INTO categories
            (id, name)
            VALUES($id,'$name')";
    insert($sql);
  }
}


$sql = "SELECT * FROM categories";
$categories = select($sql);

?>

<h1>Add a Category</h1>

<form method="POST" class="my-4 p-4 border" action="add_category.php">
  <div class="form-group">
    <label class="h4">Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter category name">
  </div>
  <hr />
  <button name="submit" type="submit" class="btn btn-dark btn-lg px-4">Submit</button>
  <a href="./index.php" class="btn btn-danger btn-lg ">Cancel</a>
</form>

<?php
include './includes/footer.php';
?>