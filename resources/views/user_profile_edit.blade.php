@extends('layouts.base')

@section('title', 'My Profile Edit')

@section('main')
<section class="user-profile__edit">
    <div class="container">
    <h2 class="my-3 text-center">Edit Profile</h2>
    <form action="{{ route('profile.update',Auth::user()->id) }}" method="POST">
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
            <input name="company" id="txtcompany" class="form-control
                   @error ('company') is-invalid @enderror" value="{{ old('company',Auth::user()->company) }}">
            @error ('company')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="txtdescription">Description</label>
            <input name="description" id="txtdescription" class="form-control
                   @error ('description') is-invalid @enderror" value="{{ old('description',Auth::user()->description) }}">
            @error ('description')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="txtphone">Phone</label>
            <input name="phone" id="txtphone" class="form-control
                   @error ('phone') is-invalid @enderror" value="{{ old('phone',Auth::user()->phone) }}">
            @error ('phone')
            <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
            @enderror
        </div>

        <div>
            {{ __('Get Notifications') }}: &nbsp<input type="checkbox" id="notifications" name="notifications" {{Auth::user()->notif_ids ? 'checked' : ''}}>
        </div>
        <div>
            {{ __('Show your contacts after reserve') }}: &nbsp<input type="checkbox" id="private_policy" name="private_policy" {{Auth::user()->private_policy ? 'checked' : ''}}>
        </div>


        <br>
        <div class="btn-container" >
        <input type="submit" class="more-btn back-btn" value="Save">
            <a href="/home" class="more-btn" >Back</a>
        </div>
    </form>
    </div>
</section>


@endsection
