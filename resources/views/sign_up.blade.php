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
    <title>Sign Up</title>
</head>

<body>

    <div class="container-fluid">
        <!-- Row -->
        <div class="row justify-content-center">
            <div class="text-center mt-4">
                <h3>Sign Up</h3>
                <span style="font-weight:bold">Pasar.store</span>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4">
                <div class="card mt-4">

                    @if (session('success'))
                        <h6 class="alert alert-success mt-2"> {{ session('success') }} </h6>
                    @elseif(session('unsuccess'))
                        <h6 class="alert alert-danger mt-2"> {{ session('unsuccess') }} </h6>
                    @endif

                    <div class="card-body">
                        <form class=" form-material" method="POST" action="{{ route('sign_up.create') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Name</label>
                                <div class="col-md-12 ">
                                    <input type="text" name="name"
                                        class="form-control  @error('name') is-invalid @enderror">
                                    @error('name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Email</label>
                                <div class="col-md-12">
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="password"
                                        class="form-control @error('email') is-invalid @enderror">
                                    @error('password')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Confirm Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('email') is-invalid @enderror">
                                </div>
                                @error('password')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-md-4">
                                    <button class="btn btn-primary ">Sign Up</button>
                                </div>
                                <p class="mt-4">Already have an account? <a
                                        href="{{ route('sign_in.create') }}">Log in </a> </p>
                            </div>
                        </form>

                    </div>
                </div>


                <p class="text-center">By register an account, or using or accessing any <b>Pasar.store</b> solutions
                    or related
                    services, you agree to all the Terms of Service, Privacy Policy and Refund Policy.</p>


            </div>
            <!-- Column -->
        </div>

    </div>

</body>

</html>
