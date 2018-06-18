<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin" style="background-color: #6CA6CD">Панель администратора</a></li>
                    <li><a href="/admin/category" style="background-color: #6CA6CD">Управление категориями</a></li>
                    <li class="active">Удалить категорию</li>
                </ol>
            </div>


            <h4>Удалить категорию #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить эту категорию?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

