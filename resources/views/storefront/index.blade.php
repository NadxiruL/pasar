<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>


<body>

    <div>
        <!-- Row -->
        <nav class="container navbar bg-primary col-sm-6 rounded ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
                </a>
            </div>
        </nav>
    </div>


    <div class="container bg-primary mt-4 col-sm-6 rounded">
        <!-- Row -->
        <p class="mx-auto">test</p>
    </div>

    <div class="container bg-primary col-sm-6 mt-4 rounded">

        <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-3 ">

                    <div>
                        <div class="card mt-4 mb-3" style="width: 14rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name ?? '' }}</h5>
                                <p class="card-text">{{ $product->description ?? '' }}</p>
                                <form action="" method="POST">
                                    @csrf

                                    <button class="btn btn-primary"> Buy </button>
                                </form>
                                <div style ="float: right"></div>
                                <form action="" method="POST">
                                    @csrf

                                    <button class="btn btn-primary"> Add to Cart </button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <div class="container navbar-light">
        <footer class=" col-sm-6 bg-primay"> YES</footer>
    </div>
</body>

</html>
