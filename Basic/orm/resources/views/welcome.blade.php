<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <h2 class="text-center">Laravel Component</h2>
    <hr>
    <div class="row text-center">

        <div class="col-md-3">
            <x-test name="ars" :users="$users"/>
        </div>
        <div class="col-md-3">
            <x-test name="test" :users="$users" />
        </div>
        <div class="col-md-3">
            <x-test name="aaa" :users="$users"/>
        </div>
        <div class="col-md-3">
            <x-test name="aaaa" :users="$users"/>
        </div>
    </div>
</body>
</html>
