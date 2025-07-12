<?php
    $title = "Про нас";
    require "blocks/header.php";
?> 
<div class="container mt-2">
    <h1>Про нас</h1>

    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Введите имя" class="form-control mb-2">
        <input type="email" name="email" placeholder="Введите email" class="form-control mb-2">
        <input type="password" name="password" placeholder="Введите пароль" class="form-control mb-2">
        <input type="file" name="file" placeholder="Добавьте файл" class="form-control mb-2">
        <textarea name="message" placeholder="Введите сообщение" class="form-control mb-2"></textarea>
        <input type="submit" value="Отправить" class="btn btn-success">

    </form>
</div>


<?php
   require "blocks/footer.php";
?> 