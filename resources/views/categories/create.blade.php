@extends('layouts.master')
@section('title', 'Category')
@section('page_title', 'Category')
@section('content')

    <div class="container-fluid">
        <!-- Row -->
        <div class="row">

            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Category</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="category" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Submit</button>
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
