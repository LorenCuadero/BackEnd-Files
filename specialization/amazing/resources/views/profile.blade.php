<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is Profile Page of {{ $name . $age}}
    </h1>

   <!-- name sa array kay $usersni-->
    @foreach($usersni as $user)
    <p>
        This is user {{ $user }}
    </p>
    @endforeach
</body>
</html>