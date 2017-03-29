<?
if((isset($_GET['name'])&&$_GET['name']!="")&&(isset($_GET['phone'])&&$_GET['phone']!="")){ //Проверка отправилось ли наши поля name и не пустые ли они
        $to = 'al.vrublevskyi@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Записаться на семинар'; //Заголовок сообщения
        $message = '
        <html>
        <head>
            <title>'.$subject.'</title>
        </head>
        <body>
            <p>Имя: '.$_GET['name'].'</p>
            <p>Телефон: '.$_GET['phone'].'</p>
            <p>Email: '.$_GET['email'].'</p>  
            <p>День рождения: '.$_GET['birthday'].'</p>                          
        </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
    }
?>