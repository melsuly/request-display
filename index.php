<!DOCTYPE html>
<html class="h-100" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест формы</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .box {
            max-width: 768px;
            width: 100%;
            padding: 32px;
        }
    </style>
</head>
<body class="bg-dark text-white h-100">
    <div class="d-flex h-100 justify-content-center align-items-center">
        <div class="box border rounded border-dark-subtle">
            <h1>
                ✌🏻
            </h1>

            <h2>
                Круто! Все сработало
            </h2>

            <h4 class="mt-4">
                <?php if(!empty($_REQUEST)){ ?>
                    Ты отправил <span class="text-info"><?php echo($_SERVER['REQUEST_METHOD']); ?></span> запрос со слeдующими данными:
                <?php } else { ?>
                    Но ты отправил пустой <span class="text-info"><?php echo($_SERVER['REQUEST_METHOD']); ?></span> запрос
                <?php } ?>
            </h4>

            <ul class="mt-4">
                <?php
                    foreach ($_REQUEST as $key => $value) {
                        echo("<li><b>{$key}</b>: {$value}</li>");
                    }
                ?>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
