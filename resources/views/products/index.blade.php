@extends('layouts.master')
@section('title', 'Products')
@section('page_title', 'Products')
@section('content')



<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                @if (session('success'))
                <h6 class="alert alert-success mt-2"> {{ session('success') }} </h6>
                @elseif(session('unsuccess'))
                <h6 class="alert alert-danger mt-2"> {{ session('unsuccess') }} </h6>
                @endif

                <a href="{{ route('product.create') }}"> <button class="btn btn-primary">Add Product</button></a>


                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Name</th>
                                <th class="border-top-0">Stock</th>
                                <th class="border-top-0"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->stock->first()->quantity }}</td>
                                <td>
                                    <button class="btn btn-secondary">Edit</button>

                                    <form action="{{route('product.destroy', $product->id)}}" method="post">
                                        @csrf @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>



                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>

@endsection
