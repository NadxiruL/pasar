<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <title>Document</title>
</head>


<body>

    <div>
        <!-- Row -->
        <nav class="container navbar bg-light col-sm-6 rounded mt-2">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
                </a>
            </div>
        </nav>
    </div>

    <div class="container bg-light col-sm-6 mt-4 rounded">

        <div class="row p-4">
            @foreach ($products as $product)
            <div class="col-md-3 p-3 ">

                <div>
                    <div class="card mt-4 mb-3 p-3" style="width: 14rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name ?? '' }}</h5>
                            <p class="card-text">{{ $product->description ?? ''  }}</p>

                            <div class="container ">
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id }}">

                                    <input type="hidden" name="product_price" value="{{$product->price }}">

                                    <input class="col-sm-4" type="number" name="quantity" value="1">

                                    <div style="display: flex;">
                                        <button class="btn btn-primary">Add to Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <!-- Billing details -->

    {{-- <div class="container bg-light col-sm-6 mt-4 rounded">

        <div class="row justify-content-center">

            <h4 class="mt-2">Billing details</h4>

            <div class="col-12 col-md-6">
                <form action="">
                    <div class="row mt-2">
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" required="" name="city" type="text" value="">
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" required="" name="zip" type="text" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-12">
                            <div class="form-group">
                                <label>Address 1</label>
                                <input class="form-control" required="" name="city" type="text" value="">
                            </div>
                        </div>
                        <div class="col-6 col-md-12">
                            <div class="form-group">
                                <label>Address 2</label>
                                <input class="form-control" required="" name="zip" type="text" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="form-group ">
                                <label>City</label>
                                <input class="form-control" required="" name="city" type="text" value="">
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input class="form-control" required="" name="zip" type="text" value="">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6 col-md-12">
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input class="form-control" required="" name="city" type="text" value="">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div> --}}


    <!-- cart -->

    <div class="container bg-light col-sm-6 mt-4 rounded">

        <div class="row justify-content-center">

            <h4 class="mt-2">Cart</h4>

            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price </th>
                            <th>Quantity </th>

                        </tr>
                    </thead>

                    <tbody>
                        <form action="{{ route('purchase.store') }}" method="post">

                            @csrf
                            @foreach ($carts as $cart)

                            <tr>
                                <td> {{ $cart->quantity ?? ''}}</td>
                                <td>{{ $cart->price ?? ''}}</td>
                                <td><input type="number" name="quantity"></td>


                            </tr>
                            @endforeach
                            <button style="float: right;">Checkout</button>

                        </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Payment -->

    <div class="container bg-light col-sm-6 mt-4 rounded">

        <div class="row justify-content-center">

            <h4 class="mt-2">Payment</h4>

            <div display="flex" class="container">
                <label for="">Direct Transfer</label>
                <input type="checkbox" name="" id="">
            </div>
        </div>

    </div>


</body>



</html>
