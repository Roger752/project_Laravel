<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>테스트 페이지</h1>
    <h2><?= isset($greeting) ? "{$greeting} " : 'Hello '; ?><?= $name; ?></h2>
</body>
</html>