<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Ciao dalla home page di Laravel</h1>
        
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#">{{$home}}</a></li>
                    <li><a href="product">{{$product}}</a></li>
                    <li><a href="contacts">{{$contacts}}</a></li>
                    <li><a href="test">{{$test}}</a></li>
                </ul>
            </nav>
        </div>

        <h1>Ciao {{$name}} - {{$lastname}}</h1>

    <h3>Test ciclo for</h3>
    @for($i=0;$i<=10;$i++)
        {{ $i }}
    
    @endfor
</body>
</html>