<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Доска объявлений</title>
</head>
<body>
    <header>
        <h1>Введите данные для создания объявления</h1>
    </header>
    <form action="save.php" method="post">
        <label for "email"> Email: </label>
        <label>
            <input name="email" type="email" required placeholder="Введите свой email">
        </label>
        <label for "category"> Категория: </label>
        <label>
            <select  name="category" required>
                <option disabled>Выберите категорию</option>
                <option value="Кот">Кошечка</option>
                <option value="Собака">Собачка</option>
                <option value="Другое">Другой питомец</option>
            </select>
        </label>
        <p>
            <label for "name">Кличка:</label>
            <input type="text" name="name" required placeholder="Введите кличку питомца">
        </p>
        <p>
            <label for "description">Описание:</label>
            <textarea name="description"rows="3" placeholder="Опишите питомца"></textarea>
        </p>

        <p><input type="submit" value="Отправить"></p>
    </form>

    <table border="1" width="60%" cellpadding="5">
        <thead>
        <div>
        <h>Категория</h>
        <h>Кличка</h>
        <h>Описание</h>
        <h>Email</h>
        </div>
        </thead>
        <tbody>
        <?php
        require_once __DIR__ . '/LAB5.php';
        $sql = extracted();
        foreach ($sql->query("SELECT * FROM web.ad") as $row)
        {
            $category = $row['category'];
            $name = $row['name'];
            $desc = $row['description'];
            $email = $row ['email'];
            echo "<div><p>$category</p><p>$name</p><p>$desc</p><p>$email</p></div>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>