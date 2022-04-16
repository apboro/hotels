@extends('layouts.base')

@section('title', 'My Profile Edit')

@section('main')
    <h2 class="my-3 text-center">Edit Profile</h2>
    <form action="{{ route('profile.update',Auth::user()->id)}}" method="POST">
    @csrf
    @method('PATCH')
        <div class="form-group">
            <label for="txtname">Name</label>
            <input name="name" id="txtname" class="form-control
                   @error ('name') is-invalid @enderror" value="{{ old('name',Auth::user()->name) }}">
            @error ('name')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="txtcompany">Company</label>
            <input company="company" id="txtcompany" class="form-control
                   @error ('company') is-invalid @enderror" value="{{ old('company',Auth::user()->company) }}">
            @error ('company')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="txtcountry">Country</label>
            <input country="country" id="txtcountry" class="form-control
                   @error ('country') is-invalid @enderror" value="{{ old('country',Auth::user()->country) }}">
            @error ('country')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="txtdescription">Description</label>
            <input description="description" id="txtdescription" class="form-control
                   @error ('description') is-invalid @enderror" value="{{ old('description',Auth::user()->description) }}">
            @error ('description')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="txtphone">Phone</label>
            <input phone="phone" id="txtphone" class="form-control
                   @error ('phone') is-invalid @enderror" value="{{ old('phone',Auth::user()->phone) }}">
            @error ('phone')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>
        <br>

        <input type="submit" class="btn btn-primary" value="Save">
    </form>
    <br>
    <p><a href="./"><input type="submit" class="btn btn-primary" value="Back"></a></p>

@endsection