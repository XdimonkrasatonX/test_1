<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Форма обратной связи</h1>
                    <?= (isset($_GET['err']) && !empty($_GET['err'])) ? '<div style="padding: 22px 0;"><span class="alert alert-danger">' . $_GET['err'] . '</span></div>' : '' ?>
                    <?= (isset($_GET['ok']) && !empty($_GET['ok'])) ? '<div style="padding: 22px 0;"><span class="alert alert-success">' . $_GET['ok'] . '</span></div>' : '' ?>
                    <form action="save.php" method="POST" enctype="multipart/form-data">
                        
                        <input type="text" name="username" placeholder="Введите имя" class="form-control mb-2" required>
                        <input type="email" name="email" placeholder="Введите email" class="form-control mb-2" required>
                        <textarea name="message" placeholder="Введите сообщение" class="form-control mb-2" required></textarea>
                        <input type="file" name="image" placeholder="Добавьте файл" class="form-control mb-2">
                        <input type="submit" value="Отправить" class="btn btn-success">
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
