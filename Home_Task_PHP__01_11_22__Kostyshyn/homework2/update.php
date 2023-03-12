


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
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
    <input type="submit" value="Add" name="add">
</form>

<?php 
    // header("location: admin.php")
 ?>