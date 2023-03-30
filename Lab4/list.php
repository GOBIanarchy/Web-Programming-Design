<?php
$products = simplexml_load_file('product.xml');
echo "<h2>". 'Your cart has '.count($products). ' items'. "</h2>";
echo "<h3>". 'You can change bundle'. "</h2>";
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
<?php 
    foreach($products->product as $product) { ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->bundle; ?></td>
            <td><?php echo $product->type; ?></td>
            <td><?php echo $product->power; ?></td>
            <td><?php echo $product->price; ?></td>
            <td><?php echo $product->description;?></td>
            <td><a href="update.php?id=<?php echo $product['id']; ?>">Update</a>
              </td>
        </tr>
    <?php } ?>
</table>
<footer>
    <a href="create.php?id=<?php echo $product['id']; ?>">Create</a>
    <a href="index.php?id=<?php echo $product['id']; ?>">Index</a>
</footer