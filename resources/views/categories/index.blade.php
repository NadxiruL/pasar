@extends('layouts.master')
@section('title', 'Category')
@section('page_title', 'Category')
@section('content')



<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">


                <a href="{{ route('category.create') }}"> <button class="btn btn-primary">Create Category</button> </a>



                @if (session('success'))
                <h6 class="alert alert-success mt-2"> {{ session('success') }} </h6>
                @elseif(session('unsuccess'))
                <h6 class="alert alert-danger mt-2"> {{ session('unsuccess') }} </h6>
                @endif

                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>

                                <th class="border-top-0">Name</th>
                                <th class="border-top-0"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <button class="btn btn-secondary">Edit</button>

                                    <button class="btn btn-danger">Delete</button>

                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
