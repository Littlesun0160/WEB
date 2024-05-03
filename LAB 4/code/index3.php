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
        <input name="email" type="email" required placeholder="Введите свой email">
        <label for "category">Категория: </label>
        <select  name="category" required>
            <option disabled>Выберите категорию</option>
            <option value="cats">Кошечка</option>
            <option value="dogs">Собачка</option>
            <option value="other">Другой питомец</option>
        </select>
        <p>
            <label for "name">Кличка:</label>
            <input type="text" name="name" required placeholder="Введите кличку питомца">
        </p>
        <p>
            <label for "description">Описание:</label>
            <textarea name="description"rows="3" placeholder="Опишите питомца"></textarea>
        </p>

        <p></p><input type="submit" value="Отправить"></p>
    </form>
    <table border="1" width="60%" cellpadding="5">
        <thead>
        <th>Категория</th>
        <th>Эл.почта</th>
        <th>Кличка</th>
        <th>Описание</th>
        </thead>
        <tbody>
        <?php
        require __DIR__ . "/vendor/autoload.php";
        $sheetId = "1sqD2bb63yP-HTXuHtXvBcv6_k_FcEtamjRtTdn731MY";
        $categories = ['cats', 'dogs', 'other'];
        foreach ($categories as $category)
        {
            $files = scandir("categories/$category");
            foreach ($files as $file)
            {
                if ($file != "." && $file != '..')
                {
                    $Info = file("categories/$category/$file");
                    $name = substr($file, 0, strlen($file) - 4);
                    echo "<tr><td>$category</td><td>$Info[1]</td><td>$name</td><td>$Info[0]</td>";
                }
            }
        }
        ?>
        </tbody>
    </table>
</body>
</html>