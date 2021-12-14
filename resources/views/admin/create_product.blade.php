@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('admin.categories.store') }}" xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <h1>Create Product</h1>
            @include('admin.includes.alerts.success')
            @include('admin.includes.alerts.errors')
            <div class="row" style="padding-top: 10px">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Product Information</div>

                        <div class="card-body">

                            @csrf

                            Item Name :
                            <input type="text" name="item_name_en" class="form-control" />
                            اسم المنتج :
                            <input type="text" name="item_name_ar" class="form-control" />

                            سعر البيع//Cost:
                            <input type="text" name="unit_cost" class="form-control" />

                            <br>
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
