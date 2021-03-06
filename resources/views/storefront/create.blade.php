@extends('layouts.master')
@section('title', 'Store')
@section('page_title', 'Store')
@section('content')
    <div class="container-fluid">
        <!-- Row -->
        <div class="row justify-content-center">

            <!-- Column -->
            <!-- Column -->
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Name</label>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Description</label>
                                <div class="col-md-12">
                                    <textarea rows="5" name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Price</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Stock</label>
                                <div class="col-sm-4 border-bottom p-0">
                                    <input type="text" name="stock" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Categories</label>
                                <div class="col-sm-12">
                                    <select name="category_id" class="form-select shadow-none form-control-line">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>Usa</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Default switch -->
                            <div class="form-group mb-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked" checked />
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Require Shipping</label>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-4">
                                    <div class="float-left">
                                        <button class="btn btn-success ">Submit</button>
                                    </div>
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
