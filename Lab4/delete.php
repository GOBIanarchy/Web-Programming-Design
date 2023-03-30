<?php
if(isset($_GET['action'])) {
    $products = simplexml_load_file('product.xml');
    $id = $_GET['id'];
    $index = 0;
    $i = 0;
    foreach($products->product as $product) {
        if($product['id']==$id){
            $index = $i;
            break;
        }
        $i++;
    }
    unset($products->product[$index]);
    file_put_contents('product.xml', $products->asXML());
    header("location:list.php?id=".$id);
}
?>