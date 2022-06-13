@extends('layouts.master')
@section('title', 'Category')
@section('page_title', 'Category')
@section('content')

    <div class="container-fluid">
        <!-- Row -->
        <div class="row justify-content-center">

            <!-- Column -->
            <!-- Column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <h6 class="alert alert-success mt-2"> {{ session('success') }} </h6>
                        @elseif(session('unsuccess'))
                            <h6 class="alert alert-danger mt-2"> {{ session('unsuccess') }} </h6>
                        @endif
                        <form class="form-horizontal form-material" method="POST" action="{{ route('category.store') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Category</label>
                                <div class="col-md-12">
                                    <input type="text" name="category"
                                        class="form-control @error('name') is-invalid @enderror">
                                    @error('category')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

    </div>

@endsection
