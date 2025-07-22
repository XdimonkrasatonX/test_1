<?php

    header('Content-Type/html; charset=UTF-8');
    define('BASEPATH', str_replace('\\', '/', dirname(__FILE__)) . '/');

    // получаем данные с формы
    $name   = htmlspecialchars($_POST['username']);
    $email  = htmlspecialchars($_POST['email']);
    $mess   = htmlspecialchars($_POST['message']);
    $img    = false;
    
    // проверяем, передается ли файл
    if (!empty($_FILES['image']['name']))
    {
        // получаем расширение файла
        $ext = substr(strrchr($_FILES['image']['name'], '.'), 1);
        
        // проверяем разрешено ли расширение
        if (in_array(strtolower($ext), array('jpg', 'png')))
        {
            $img = 'upl/' . $_FILES['image']['name'];
            // загружаем файлан сервер
            if (!move_uploaded_file($_FILES['image']['tmp_name'], BASEPATH . $img))
            {
                $error = 'Произошла ошибка при загрузке файла';
                header('Location: /index.php?err=' . $error);
                die;
            }
        }
        else
        {
            // ошибка, если расширение не подходит
            $error = 'Необходимо выбрать изображение с расширением jpg или png';
            header('Location: /index.php?err=' . $error);
            die;
        }
    }
    
    // проверяем обязательные поля и на сервере
    if (empty($name) || empty($email) || empty($mess))
    {
        $error = 'Заполнены не все обязательные поля';
        header('Location: /index.php?err=' . $error);
        die;
    }
    
    // имя файла, куда будет записываться информация
    $filename = time() . '.txt';
    
    // готовим данные для записи
    $data = $name . "\n" . $email . "\n" . $mess;
    
    // если загружали картинку, добавляем путь
    if ($img)
    {
        $data .= "\n" . $img;
    }
    
    // создаем файл и сохраняем инфу
    if (!file_put_contents($filename, $data))
    {
        // если не получилось сохранить
        $error = 'Произошла ошибка записи, повторите позднее';
        header('Location: /index.php?err=' . $error);
        die;
    }
    else
    {
        // если все ок, отправляем сообщение пользователю
        $ok = 'Сообщение успешно отправлено';
        header('Location: /index.php?ok=' . $ok);
        die;
    }
    
    
    
?>

