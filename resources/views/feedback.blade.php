@extends('layouts.base')

@section('title', 'Feedback')

@section('main')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    <form method="POST" action="{{route('feedback.send')}}">
        @csrf

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                   placeholder="Enter your email" @auth value="{{Auth::user()->email}}" @endauth>
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name"
                   placeholder="Your name" @auth value="{{Auth::user()->name}}" @endauth>
            <span class="text-danger">{{ $errors->first('name') }}</span>

        </div>
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="exampleInputPassword1">Comment</label>
            <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <span class="text-danger">{{ $errors->first('comment') }}</span>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
