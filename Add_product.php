<?php
include_once 'header.php';
include_once './connect.php';
if (isset($_POST['btnSubmit'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $cat_id = $_POST['cat_id'];
    $supplier_id = $_POST['supplier_id'];
    $img = str_replace(' ', '-', $_FILES['Pro_image']['name']); //tùy chỉnh hình ảnh
    $storedImange = "./images/";

    $flag = move_uploaded_file($_FILES['Pro_image']['tmp_name'], $storedImange.$img);
    if ($flag) {
        $c = new Connect();
        try {
            $dblink = $c->connectToPDO(); 
            $dblink = $c->connectToMySQL();
            $sql = "INSERT INTO `product`(`pid`, `pname`, `price`, `status`, `description`, `quantity`, `cat_id`, `image`, `Supplier_id`) 
        VALUES (?,?,?,?,?,?,?,?,?)";

            $re = $dblink->prepare($sql);
            $stmt = $re->execute(array($pid, $pname, $price, $status, $description, $quantity, $cat_id, "$img", $supplier_id));
            if ($stmt == TRUE) {
                echo "Congrats!";
            } else {
                echo "Failed!!!";
            }
        } catch (Exception $e) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }
    }
}
?>
<div id="main" class="container mt-4">
    <form class="form form-vertical" method="POST" enctype="multipart/form-data"> <!--upload được file cần có enctype -->
        <div class="form-body">
            <div class="row">

                <div class="col-12">

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ProductId</label>
                    <input type="text" class="form-control" name="pid" id="exampleFormControlInput1" placeholder="Product ID">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ProductName</label>
                    <input type="text" class="form-control" name="pname" id="exampleFormControlInput1" placeholder="Product Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="exampleFormControlInput1" placeholder="Price">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Status</label>
                    <input type="text" class="form-control" name="status" id="exampleFormControlInput1" placeholder="Status">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="exampleFormControlInput1" placeholder="Description">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                    <input type="text" class="form-control" name="quantity" id="exampleFormControlInput1" placeholder="Quantity">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category</label>
                    <input type="text" class="form-control" name="cat_id" id="exampleFormControlInput1" placeholder="Category ID">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Supplier ID</label>
                    <input type="text" class="form-control" name="Supplier_ID" id="exampleFormControlInput1" placeholder="Supplier ID">
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="image-vertical">Image</label>
                        <input type="file" name="Pro_image" id="Pro_image" class="form-control" value="">
                    </div>
                </div>
                <div class="col-12 d-flex mt-3 justify-content-center">
                    <button type="submit" class="btn btn-warning me-1 mb-1 rounded-pill" name="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div> <!--main-->