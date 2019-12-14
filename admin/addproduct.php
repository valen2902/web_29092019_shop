<?php 
    include('parts/header.php'); 
    if ( isset( $_POST['name'] ) ){

        $sql_insert = "INSERT INTO products (id, name, price, img, description) 
        VALUE (NULL, '{$_POST['name']}', {$_POST['price']}, '{$_POST['img']}', '{$_POST['description']}')";

        echo $sql_insert;

        $result_insert = mysqli_query($link, $sql_insert);
        $last_id = mysqli_insert_id($link);

        if( $result_insert ){
            echo '
            <div class="alert alert-success" role="alert">
            Товар успешно добавлен! <a href="/admin/editproduct.php?
            id='.$last_id.'">Редактировать</a>
            </div>
            ';
        }else{
            echo '
            <div class="alert alert-danger" role="alert">
            ААААА :(
            </div>
            ';
        }
    }
    
?>
<div class="row">
    <div class="col-12">
        <h1>Добавление товара</h1>
        <form method="POST">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="price">
            </div>
            <div class="form-group">
                <input type="text" name="img" class="form-control" placeholder="img">
            </div>
            <div class="form-group">
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>
<?php include('parts/footer.php'); ?>