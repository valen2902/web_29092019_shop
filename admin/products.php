<?php 
    include('parts/header.php'); 
    $sql_products = "SELECT * FROM products";
    $result_products = mysqli_query($link, $sql_products);
?>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Описание</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result_products)): ?>
                    <tr>
                        <td><a href="/admin/editproduct.php?id=<?=$row['id']?>"><?=$row['id']?></a></td>
                        <td><?=$row['name']?></td>
                        <td><?=$row['price']?></td>
                        <td><?=$row['description']?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include('parts/footer.php'); ?>