@extends('layouts.app')

@section('content')
    <div>
        <h2>Login Page</h2>
        <form action="/login" method="POST">
            @csrf
            <p><input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}"></p>
            <p><input type="password" name="password" placeholder="Enter Password"></p>
            <p><input type="submit" value="Submit"></p>
        </form>
    </div>

    @if ($errors->any())
        <div class="bg-danger text-white py-2 px-4">
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection
