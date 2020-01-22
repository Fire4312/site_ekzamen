<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <table class="table table-hover">
    <thead class="thead-light">
        <th>Название</th>
        <th>Описание</th>
        <th>Оценка по русскому</th>
        <th>Оценка по математике</th>
        <th>Оценка по английскому</th>
        <th>Оценка по физике</th>
        <th>Успеваемость</th>
    </thead>
    <tbody>
    <tr>
        <tr>
            @foreach ( $groups as $group)
            <td><div class="body">{{$group->title}}</div></td>
            <td><div class="body">{{$group->description}}</div></td>
            <td><div class="body">{{$group->average_lang_ru}}</div></td>
            <td><div class="body">{{$group->average_math}}</div></td>
            <td><div class="body">{{$group->average_lang_en}}</div></td>
            <td><div class="body">{{$group->average_fizik}}</div></td>
            <td><div class="body">{{"0"}}</div></td>
        </tr>
        @endforeach
        </tr>
        </tbody>
</table>
</body>
</html>