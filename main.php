<!DOCTIPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_practic</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="flex-container">
        <div class='header'>
        <?php include 'logo.inc.php' ?>
        <?php include 'menu.inc.php' ?>
        
        </div>
    
    </div>

    <div class="about_me">
        <h1><?php echo $p ?></h1>
        <div class="data">
            <div class="my_img">
                <?php
                    echo '<img src="img/foto.jpg" title = "Это типо я! )" alt="">';
                ?>
            </div>
            <div class="full_name">
                <p> Меня зовут: 
                <?php echo $name, ' ', $surname . '</br>';
                    echo 'город:', ' ', $city; ?>
                </p>

                <p> Мне:
                    <?php
                        echo $age; ?> 
                </p>
                <p>Мы научились создавать сайты,</p>
                <p>Изучили простые операции с ними.</p>
            </div>

            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php echo $a, ' ', $b, ' ', $c; ?> <br>

                <form method="post" name="form" action="index.php">
                    Введите что-нибудь: 
                    <input type="text" name="field1">
                    <input type="submit" name="button" value="OK">
                </form>

                <?php
                    if(isset($_POST['button'])){
                    $aa = ($_POST['field1']);
                    echo 'Вы ввели:', ' ', ($_POST['field1']);
                    }
                ?> <br>

                <?php echo 'Число: ', $price, ' - ', $d ?>
            </div>
    </div>   
    
    <div class="text1">
Способности:
                <ul>
<li>Создание сайтов, отдельных страниц или модулей, а также тестирование их работоспособности,</li>
<li>Составление технической отчетности,</li>
<li>Внедрение дополнительных внешних и внутренних систем на сайт,</li>
<li>Оптимизация работы веб-ресурса, а также техническая поддержка (улучшение производительности, повышение безопасности и т. п.),</li>
<li>запуск сайта и дальнейшее его администрирование,</li>
<li>поиск и устранение ошибок работы,</li>
<li>улучшение функциональности,</li>
<li>взаимодействие с другими специалистами.</li>
                </ul>
Если коротко: разработка и обслуживание ресурса.
            </div>

            <?php include 'footer.inc.php' ?>
</body>

</html>