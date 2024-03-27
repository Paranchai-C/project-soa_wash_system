@extends('layout.layout')
@section('title','order')
@section('content')
<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-img-top">
                        <img src="image_user/hello_" class="img-fluid" alt="Image">
                    </div>

                    <div class="card-body">
                        <p class="card-text text-left">
                            id : <br>
                            status : <br>
                            package : <br>
                            ราคารวม : 
                        </p>
                        <div class="mt-auto">
                            <a href="">
                                <button type="button" class="btn btn-danger btn-sm  float-end">ลบ</button>
                            </a>
                            <a href="{{route('pay')}}">
                                <button type="button" class="btn btn-sm btn-success ">จ่ายเงิน</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection