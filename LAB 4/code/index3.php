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
                <option value="cats">Кошечка</option>
                <option value="dogs">Собачка</option>
                <option value="other">Другой питомец</option>
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

        <?php
        require __DIR__ . "/vendor/autoload.php";
        $client = new Google_Client();
        $client->setApplicationName('Google Pets');
        $client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        try
        {
            $client->setAuthConfig(__DIR__ . '/web-lab4-422209-76913d7c4a42.json');
        }
        catch (\Google\Exception $e)
        {
            echo "Ошибка!\n";
        }
        $service = new Google_Service_Sheets($client);
        $sheetID = "1sqD2bb63yP-HTXuHtXvBcv6_k_FcEtamjRtTdn731MY";
        ?>

    <table border="1" width="60%" cellpadding="5">
        <thead>
        <?php
        $range1 = "Pets!A1:D1";
        $result1 = null;
        try
        {
            $result1 = ($service->spreadsheets_values->get($sheetID, $range1))->getValues();
        }
        catch (\Google\Service\Exception $e)
        {
            echo "Ошибка при получении заголовков в таблицу\n";
        }
        if (null != $result1)
        {
            foreach ($result1 as $row)
            {
                foreach ($row as $item)
                    echo "<th>$item</th>";
            }
        }
        ?>
        </thead>
        <tbody>
        <?php
        $range2 = "Pets!A2:D999";
        $result2 = null;
        try
        {
            $result2 = ($service->spreadsheets_values->get($sheetID, $range2))->getValues();
        }
        catch (\Google\Service\Exception $e)
        {
            echo "Ошибка при получении данных в таблицу\n";
        }
        if (null != $result2)
        {
            foreach ($result2 as $row)
            {
                echo "<tr>";
                foreach ($row as $item)
                {
                    echo "<td>", $item, "</td>";
                }
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</body>
</html>