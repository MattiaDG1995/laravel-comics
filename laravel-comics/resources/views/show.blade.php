@extends('layouts.app')

@section('page-title', "dc comics-single comic")

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

    <div class="cont_card">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Talent</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>art by:</td>
      <td>{{$card_comix['description']}}</td>
    </tr>

    <tr>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
  </tbody>
</table>
    </div>
    
</div>
@endsection