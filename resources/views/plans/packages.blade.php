@extends('layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/package.css">
    </head>

    <body>
        <div class=" container">

            <h2>Choose Your Plan</h2>
            <div class="price-row">
                <div class="price-col">
                    <p>Starter</p>
                    <h3>15$<span> /Month </span></h3>
                    <ul>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                    </ul>
                    <button>Subscribe</button>
                </div>
                <div class="price-col">
                    <p>Premium</p>
                    <h3>35$<span> /Month </span></h3>
                    <ul>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                    </ul>
                    <button>Subscribe</button>
                </div>
                <div class="price-col">
                    <p>Ultimate</p>
                    <h3>75$<span> /Month </span></h3>
                    <ul>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                        <li>OKAY</li>
                    </ul>
                    <button>Subscribe</button>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
