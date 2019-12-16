<?php 
    include('parts/header.php'); 
    if( !empty($_GET['id']) ){
        $id = $_GET['id'];

        if( isset( $_POST['edit'] ) && $_POST['edit'] == 'yes'){
            $sql_update = "UPDATE products SET
            name = '{$_POST['name']}',
            price = {$_POST['price']},
            img = '{$_POST['img']}',
            description = '{$_POST['description']}'
            WHERE id = {$id}
            ";

            $result_update = mysqli_query($link, $sql_update);

            if( $result_update ){
                echo '
                <div class="alert alert-success" role="alert">
                Редактирование прошло успешно!
                </div>';
            }else{
                echo '
                <div class="alert alert-danger" role="alert">
                ААААА :(
                </div>';
            }
        }
       
        $sql_product = "SELECT * FROM products WHERE id = {$id}";
        $result_product = mysqli_query($link, $sql_product);

        $data_product = mysqli_fetch_assoc($result_product);
        d($data_product);

    }else{
        header('Location: /admin/products.php');
    }
?>
<div class="row">
    <div class="col-12">
        <h1>Редактирование товара</h1>
        <form method="POST">
            <input type="hidden" name="edit" value="yes">
            <div class="form-group">
                <input type="text" name="id" readonly value="<?=$data_product['id']?>" class="form-control" placeholder="id">
            </div>
            <div class="form-group">
                <input type="text" name="name" value="<?=$data_product['name']?>" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <input type="text" name="price" value="<?=$data_product['price']?>" class="form-control" placeholder="price">
            </div>
            <div class="form-group">
                <input type="text" name="img" value="<?=$data_product['img']?>" class="form-control" placeholder="img">
            </div>
            <div class="form-group">
                <input type="text" name="description" value="<?=$data_product['description']?>" class="form-control" placeholder="description">
            </div>
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>
    </div>
</div>
<?php include('parts/footer.php'); ?>