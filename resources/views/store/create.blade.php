@extends('layouts.master')
@section('title', 'My Store')
@section('page_title', 'My Store')
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
                                <label class="col-md-12 p-0">Address 1</label>
                                <div class="col-md-12">
                                    <input name="address1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Address 2</label>
                                <div class="col-md-12">
                                    <input name="address2" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-4">
                                        <label>City</label>
                                        <input class="form-control" required="" name="city" type="text" value="Cyberjaya">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Postal / Zip Code</label>
                                        <input class="form-control" required="" name="zip" type="text" value="63000">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-4">
                                        <label>State</label>
                                        <input class="form-control" required="" name="city" type="text" value="Cyberjaya">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="category_id" class="form-select shadow-none form-control-line">
                                            <option>London</option>
                                            <option>India</option>
                                            <option>Usa</option>
                                            <option>Canada</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" required="" name="zip" type="text" value="63000">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input class="form-control" required="" name="zip" type="text" value="63000">
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
