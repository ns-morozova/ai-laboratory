<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Лендинг</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: sans-serif;
            max-width: 600px;
            margin: 50px auto;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input,
        textarea {
            padding: 10px;
            font-size: 16px;
        }

        .success {
            background: #dff0d8;
            padding: 10px;
            border: 1px solid #3c763d;
            color: #3c763d;
        }
    </style>
</head>

<body>

    <h1>Свяжитесь с нами</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <input type="text" name="name" placeholder="Ваше имя" required>
        <input type="email" name="email" placeholder="Ваш email" required>
        <textarea name="message" placeholder="Сообщение" required></textarea>
        <button type="submit">Отправить</button>
    </form>

</body>

</html>