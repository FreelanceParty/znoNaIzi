<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Subject Card</title>
</head>
<body>
<div class="p-1 grid grid-rows-3 grid-flow-col gap-2">
    @foreach($subjects as $subject)
        <div class="p-1 bg-red-500 rounded-md flex justify-center items-center">
            <p>{{$subject->title}}</p>
        </div>
    @endforeach
</div>
</body>
</html>
