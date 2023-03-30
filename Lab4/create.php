<head>
<?php
if(isset($_POST['submitSave'])) {
    $products = simplexml_load_file('product.xml');
    $product = $products->addChild('product');
    $zero = 0;
    foreach ($products as $product){
                $zero++;
                $product->addAttribute('id', $zero);
            }
            $product->addChild('name', $_POST['name']);
            $product->addChild('bundle', $_POST['bundle']);
            $product->addChild('type', $_POST['type']);
            $product->addChild('power', $_POST['power']);
            $product->addChild('price', $_POST['price']);
            $product->addChild('description', $_POST['description']);
            file_put_contents('product.xml', $products->asXML());
            header('location:list.php');
}
?>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Id</td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Bundle:</td>
                <td><select>
                <option type="text" name="bundle">Premium Package</option>  
                <option type="text" name="bundle">Line Package</option>  
                <option type="text" name="bundle">Night Package</option>  
                <option type="text" name="bundle">Multimedia Package</option>  
                </select>  
                </td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td>Power:</td>
                <td><input type="text" name="power"></td>
            </tr>
            <tr>
                <td>Price ($):</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Save" name="submitSave"></td>
            </tr>
        </table>
    </form>
</body>
