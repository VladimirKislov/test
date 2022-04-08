<pre>
    <?php
        // 1. PHP: Вывести цифры по порядку

        $arrayNumber = [
            [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        ];

        array_multisort($arrayNumber[0]);

        foreach($arrayNumber[0] as $value) {
            echo $value;
        }

        echo '<hr>';

        // 2. MySQL: Написать запрос для выборки данных из таблицы, где id = 10

        "SELECT * FROM `nameTable` WHERE id = 10";


        // 3. PHP: Вывести ключи и значение массива

        $arrayInfo = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'address' => 'Petrovsk',
            'telephone' => '8 (985) 222-33-44'
        ];

        foreach($arrayInfo as $key => $value) {
            echo $key . ' = ' . $value;
            echo '<br>';
        }

        echo '<hr>';

        // 4. PHP: Вывести месяца года

        $arrayMonth = [
            [
                1 => 'Январь',
                2 => 'Февраль',
                3 => 'Март'
            ],
            [
                1 => 'Апрель',
                2 => 'Май',
                3 => 'Июнь'
            ]
        ];

        foreach($arrayMonth as $values) {
            foreach($values as $item) {
                echo $item;
                echo '<br>';
            }
        }

        echo '<hr>';

        // 5. PHP: Дана информация в json формате, надо вывести её.

        $json = '{"years":
            [1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008
            ,2009,2010]
        }';

        var_dump(json_decode($json, true));

        // 6. PHP и MySQL: Дан код, нужно ответить на вопросы аргументировав свой ответ

        '1. Да запрос будет выполнен';
        '2. Получит все данные из таблицы users';
        '3. $usersDel = mysqli_query($conn, "delete from users where id >= 1 and id <= 5")';
    ?>
</pre>

<!-- 7. PHP и HTML: Написать форму с одним полей для вода текста и кнопкой, по нажатию которой идёт сохранения данных из поля в файл. -->

<?php
    $file = 'text.txt';
    $text = $_POST['texts'];
    file_put_contents($file, $text);
?>

<form method="POST" action="">
    <input type="text" name="texts" placeholder="Enter text">
    <input type="submit">
</form>

