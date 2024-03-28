@extends('layout.layout')
@section('title','order')
@section('content')
<div class="album py-5 bg-body-tertiary">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($order as $o)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-img-top">
                        <img src="image_user/{{$o['user_id']}}_{{$o['order_id']}}" class="img-fluid" alt="Image">
                    </div>

                    <div class="card-body">
                        <p class="card-text text-left">
                            id : {{$o['order_id']}}<br>
                            status : {{$o['order_status']}} <br>
                            น้ำยาปรับผ้านุ้ม : {{$o['softener_name']}}<br>
                            ประเภทน้ำ : {{$o['temp_name']}}<br>  
                            package : size {{$o['package_name']}}<br>
                            ราคารวม : <?php  if($o['order_plusdry'] == 1)
                            {
                                echo intval($o['package_price'])+intval($o['softener_price'])+$o['temp_price']+10;
                            }
                            else{
                                echo intval($o['package_price'])+intval($o['softener_price'])+$o['temp_price'];
                            }
                            ?>
                        </p>
                        <div class="mt-auto">
                            <?php if($o['order_status'] == "not_approved"):?>
                            <a href="{{route('delete',$o['order_id'])}}">
                                <button type="button" class="btn btn-danger btn-sm  float-end">ลบ</button>
                            </a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection