<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            
            <br/>
            
            <h3 style="margin-left: 500px;" ">Администратор!</h3>
            
            <br/>
            
            <p style="margin-left: 20px;">Вам доступны такие возможности:</p>
            
            <br/>
            <ol class="square">
              <li> <a href="/admin/product"><h4>Управление товарами</h4></a></li>
              <li><a href="/admin/category"><h4>Управление категориями</h4></a></li>
              <li><a href="/admin/order"><h4>Управление заказами</h4></a></li>
            </ol>
     
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

