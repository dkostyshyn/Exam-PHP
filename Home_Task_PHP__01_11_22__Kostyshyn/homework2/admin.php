<?php 
    if(isset($_POST['add'])) {
        require_once "insert.php";
    }

    if(isset($_POST['delete'])) {
        require_once "delete.php";
    }
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name">
            Name: <input type="text" name="name" id="name">
        </label>
    </div>
    <div>
        <label for="price">
            Price: <input type="number" name="price" id="price">
        </label>
    </div>
    <div>
        <label for="description">
            Description: <textarea name="description" id="description"></textarea>
        </label>
    </div>
    <div>
        <label for="image">
            Image: <input type="file" name="image" id="image" />
        </label>
    </div>
    <input type="submit" value="Add" name="add">
</form>


<?php require_once "select.php" ?>