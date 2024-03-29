<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Данные</title>
</head>
<body>
<header>
    <h1>Введите свои данные</h1>
</header>
<form action="index2c(file 2).php" method="post">
    <label><p>Введите ваше имя: <textarea name ="Name" required cols="20" rows="1" placeholder="Введите имя"></textarea></p></label>
    <label><p>Введите ваш возраст: <textarea name ="Age" required cols="15" rows="1" placeholder="Введите возраст"></textarea></p></label>
    <p>Ввыберите ваше настроение:
            <select name="Emotion" required >Выберите настроение:
                <option>Веселое :)</option>
                <option>Грустное :(</option>
                <option>Злое >:(</option>
                <option>Удивленное :0</option>
            </select>
    <p>Укажите свой пол:<input type="radio" name="Choice" value="Вы женщина">Женский<input type="radio" name="Choice" value="Вы мужчина">Мужской</p>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>