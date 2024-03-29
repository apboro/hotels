@extends('layouts.base')

@section('title', 'My Offers')

@section('main')
    <section class="profile">
<style>
    .colw-10{
        padding-right: 0;
    }
    .colst{
        padding-left: 0;
    }
    .log-btn{
            width: 100%;
        }
        .colml{
            text-align: center;
        }
    @media(max-width: 768px){
        .colw-10{
        width: 45%;
    }
        .colml{
            width: 45%;
            padding-right: 0;
            padding-left: 0;
            margin-bottom: 10px;
            
        }
        
    }
</style>
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h2 class="text-center">Welcome, {{ Auth::user()->name }}!</h2>
                <div class="container">
                    <div class="row justify-content-between">
                <div class="col-6 col-md-3 colst colml">
                    <a class="more-btn" href="{{route('offer.add')}}">Add Offer</a>
                </div>
                <div class="col-6 col-md-3 colml">
                    <a class="more-btn" href="{{route('user.profile')}}">My Profile
                    </a></div>
                <div class="col-6 col-md-3 colml">
                    <a class="more-btn" href="{{route('order.history')}}">Order History</a>
                </div>
                <div class="col-6 col-md-3 colw-10 colml">
                <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-end">
                    @csrf
                    <input type="submit" class="more-btn log-btn"
                           value="Logout">
                </form>
                </div>
            </div>
                </div>
            <h3 class="my-3 text-center">My Offers</h3>
            @if (count($offers)>0)
                <table class="table table-stripped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Nights</th>
                        <th>Hotel</th>
                        <th class="col22">City</th>
                        <th>Rooms</th>
                        <th>Price</th>
                        <th colspan="2">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offers as $offer)
                        <tr>
                            <td><h3>{{\Carbon\Carbon::parse($offer->offer_arrival_date)->format('j.M Y')}}</h3></td>
                            <td><h3>{{$offer->offer_nights}}</h3></td>
                            <td>{{$offer->offer_hotel}}</td>
                            <td class="col22"><h3>{{$offer->offer_city}}</h3></td>
                            <td><h3>{{$offer->offer_rooms_quantity}}</h3></td>
                            <td><h3>{{$offer->offer_price}}</h3></td>
                            <td><a class="more-btn" href="{{route('offer.editForm', ['offer'=>$offer->id])}}">Change</a>
                            </td>
                            <td><a class="img-btn" href="{{route('offer.deleteForm', ['offer'=>$offer->id])}}">
                                    <svg class="img-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/>
                                    </svg>
                                </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </section>

@endsection
