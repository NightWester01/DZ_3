<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="email">Введите ваш email:</label>
        <input type="email" id="email" name="email">
        <button type="submit">Отправить</button>
    </form>
    <?php
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            echo '<form action="process2.php" method="post">';
            echo '<label for="name">Имя:</label>';
            echo '<input type="text" id="name" name="name"><br>';
            echo '<label for="surname">Фамилия:</label>';
            echo '<input type="text" id="surname" name="surname"><br>';
            echo '<label for="password">Пароль:</label>';
            echo '<input type="password" id="password" name="password"><br>';
            echo '<label for="email">Email:</label>';
            echo '<input type="email" id="email" name="email" value="'.$email.'" readonly><br>';
            echo '<button type="submit">Отправить</button>';
            echo '</form>';
        }
    ?>
</body>
</html>