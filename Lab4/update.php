<?php
$products = simplexml_load_file('product.xml');

if(isset($_POST['submitSave'])) {

    foreach($products->product as $product){
        if($product['id']==$_POST['id']){
            $product->name = $_POST['name'];
            $product->bundle = $_POST['bundle'];
            $product->type = $_POST['type'];
            $product->power = $_POST['power'];
            $product->price = $_POST['price'];
            $product->description = $_POST['description'];
            break;
        }
    }
    file_put_contents('product.xml', $products->asXML());
    header('location:list.php');
}
foreach($products->product as $product){
    if($product['id']==$_GET['id']){
        $id = $product['id'];
        $name = $product->name;
        $bundle = $product->bundle;
        $type = $product->type;
        $power = $product->power;
        $price = $product->price;
        $description = $product->description;
        break;
    }
}

?>
<form method="post">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
        </tr>
        <tr>
            <td>Bundle</td>
            <td>
                <select name="bundle">
                <option value="Premium Package">Premium Package</option> 
                <option value="Line Package">Line Package</option>  
                <option value="Night Package">Night Package</option>  
                <option value="Multimedia Package">Multimedia Package</option>  
                </select> 
            </td>
        </tr>
        <tr>
            <td>Type</td>
            <td><input type="text" name="type" value="<?php echo $type; ?>"></td>
        </tr>
        <tr>
            <td>Power</td>
            <td><input type="text" name="power" value="<?php echo $power; ?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" name="description" value="<?php echo $description; ?>"></td>
        </tr>
        <tr>
            
            <td>&nbsp;</td>
            <td><input type="submit" value="Save" name="submitSave"></td>
        </tr>
    </table>
</form>