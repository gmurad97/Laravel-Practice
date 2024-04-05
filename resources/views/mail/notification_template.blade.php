<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Уведомление о входе</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif;">
        <h2>Уведомление о входе</h2>
        <p>Уважаемый(ая) [Имя пользователя],</p>
        <p>Хотим сообщить вам, что ваш аккаунт был использован для входа {{ date("d.m.y")." ". date("h:i:s") }} . Если это были не вы, пожалуйста, незамедлительно обратитесь в службу поддержки.</p>
        <p>Спасибо,</p>
        <p>Команда [Название вашей платформы]</p>
    </div>
</body>
</html>
