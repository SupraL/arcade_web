<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/mdb.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/custom_style.css') }}">
    <script src="{{ secure_asset('js/jquery.min.js')}}"></script>
    <script src="{{ secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/mdb.js')}}"></script>
    <meta charset="UTF-8">
    <title>ArcadeCrafts</title>
</head>
<body>
<div class="conatiner">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped table-hover">
                <thead><tr><th>#</th><th>商品名稱</th><th>數量</th><th>價錢</th></tr></thead>
                @if(isset($orderDetails))
                    @foreach($orderDetails as $order)
                        <tr>
                            <td>{{$order->productID}}</td>
                            <td>{{$order->productName}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->price}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
            <hr/>
            @if(isset($order))
            <h5 class="h5-responsive">總金額：{{$order->totalPrice}}</h5>
            @endif
        </div>
    </div>
</div>
</body>
</html>