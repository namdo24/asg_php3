@extends('auth.master')
@section('title')
    Regisster
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label class="mt-4" for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">

        <label class="mt-4" for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">

        <label class="mt-4" for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">

        <label class="mt-4" for="password">Comfirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">

        <button type="submit" class="btn btn-primary   mt-4">Register</button>
    </form>
@endsection
