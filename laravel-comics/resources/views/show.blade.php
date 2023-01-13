@extends('layouts.app')


@section('main-content')
<div class="section">
    <div class="cont_card d-flex py-5">
        <div class="leftcard p-2 text-primary">
            <h2>{{$card_comix['title']}}</h2>

            <div class="pricecont bg-success d-flex justify-content-between p-2">
                <div class="priceleft d-flex">
                    <span class="text-white">U.S Price: {{$card_comix['price']}}</span>
                    <p class="text-white">AVAIBLE</p>
                </div>
                <div class="priceright">
                    <p class="text-white">Check Availability</p>
                </div>
            </div>

            <p>{{$card_comix['description']}}</p>
        </div>
        <div class="rightcard p-2">
            <p>ADVERTISEMENT</p>
            <img src="{{ asset('img/adv.jpg') }}" alt="">
        </div>
    </div>
</div>
@endsection