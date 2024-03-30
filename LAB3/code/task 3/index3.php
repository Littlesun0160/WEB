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
            <textarea name="description" required rows="3" placeholder="Опишите питомца"></textarea>
        </p>

        <p></p><input type="submit" value="Отправить"></p>
    </form>

</body>
</html>