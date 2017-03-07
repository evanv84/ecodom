<?php
    // if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $area = $_POST['area'];
        $task = $_POST['task'];
        $from = 'Ecodom'; 
        $to = 'ecodom@logolanding.net, zakaz@ecodomzamillion.ru, ipoltanov@gmail.com'; 
        $subject = 'Новая заявка с сайта Ecodom';
        
        $body ="Здравствуйте! У Вас новая заявка.\n\n
        Тема: $task\n\n
        Имя: $name\n\n
        Номер телефона: $phone\n\n
        Желаемая площадь дома: $area\n\n
        ";

// If there are no errors, send the email

        mail ($to, $subject, $body, $from);
        header('location: /thank-you.html');
        exit();

    // }
?>