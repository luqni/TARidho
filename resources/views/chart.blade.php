<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    {!! Charts::assets() !!}
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Laravel 5 Chart example using Charts Package</h1>

		{!! $chart->render() !!}
    </div>
</body>
</html>
