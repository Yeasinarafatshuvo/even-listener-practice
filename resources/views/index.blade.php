<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">News Letter</h1>
        <div class="text-center">
            <form action="{{route('newsletter.subscribe')}}" method="POST">
                @csrf
                <input type="text" name="email" placeholder="Enter email" style="padding:5px; border-radius:5px">
                <button style="background: green; border:none; padding:6px">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>