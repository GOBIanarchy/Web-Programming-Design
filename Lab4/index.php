<?php
$products = simplexml_load_file('product.xml');
?>
<head>
    <title>List</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <table class="list-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Bundle</th>
            <th>Type</th>
            <th>Power</th>
            <th>Price</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
</body>
    <?php  foreach($products->product as $product) {
    echo $products->attributes()->id;
    $get =isset($_GET['id']) ? intval($_GET['id']) : 0;
    if($product->attributes()->id == $get){
        ?>
    <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo $product->name; ?></td>
        <td><?php echo $product->bundle; ?></td>
        <td><?php echo $product->type; ?></td>
        <td><?php echo $product->power; ?></td>
        <td><?php echo $product->price; ?></td>
        <td><?php echo $product->description;?></td>
        <td><a href="update.php?id=<?php echo $product['id']; ?>">Update</a><br>
    </tr>
        <a href="list.php?id=<?php echo $product['id']; ?>">List</a><br>
        <form action="delete.php" method="post" name="delete">
            <a href="delete.php?action=delete&id=<?php echo $product['id']; ?>"onclick="return confirm('Are you sure?')">Delete</a>
        </form>

    <?php }
    ?>

    <?php } ?>