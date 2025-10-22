<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    My name is <?= $name ?> <!--syntax PHP dengan membaca tag HTML-->
    </p>
    <br>
    <p>
    My name is {{ $name }} <!--syntax Blade tidak membaca tag HTML (lebih aman dari hacking)-->
    </p>
    <br>
    <p>
    My name is {!! $name !!} <!--syntax Blade membaca tag HTML -->
    </p>
</body>
</html>