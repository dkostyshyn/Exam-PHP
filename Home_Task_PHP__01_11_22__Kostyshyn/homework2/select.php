<style>
    .product-table {
        background-color: lightblue;
        border-collapse: collapse;
    }

    .product-table td, .product-table th {
        border: 1px solid black;
        padding: 10px 20px;
    }
 </style>


<?php

$host = 'localhost';
$username = 'root';
$pasword = '';
$db = 'storedb';


// functional
$link = mysqli_connect($host, $username, $pasword, $db);

if(!$link) {
    echo mysqli_connect_error();
}


// $query = "INSERT INTO product(idProduct, name, price, description) 
//             VALUES (NULL, 'Tablet', 200, 'Tablet descr')";

// $query = "DELETE FROM product WHERE idProduct = 1";

// $res = mysqli_query($link, $query);

// echo $res;


// select
$query = "SELECT * FROM product";
$result = mysqli_query($link, $query);

// while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//     print_r($row);
// }

$table = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<table class="product-table">
    <tr>
        <?php foreach ($table[0] as $key => $value) : ?>
           <th><?= $key ?></th>
        <?php endforeach ?>
        <th>Actions</th>
    </tr>
    <?php foreach ($table as $key => $product) : ?>
        <tr>
           <td><?= $product['idProduct'] ?></td>
           <td><?= $product['name'] ?></td>
           <td><?= $product['price'] ?></td>
           <td><?= $product['description'] ?></td>
           <td><img width="100" src="uploads/<?= $product['image'] ?>" /></td>
           <td>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="hidden" name="idProduct" value="<?= $product['idProduct'] ?>">
                    <input type="submit" value="Delete" name="delete">
                </form>
                <form action="update.php" method="POST">
                    <input type="hidden" name="idProduct" value="<?= $product['idProduct'] ?>">
                    <input type="submit" value="Update" name="update">
                </form>
           </td>
        </tr>
    <?php endforeach ?>
</table>

<?php

mysqli_close($link);

// oop



// pdo
?>