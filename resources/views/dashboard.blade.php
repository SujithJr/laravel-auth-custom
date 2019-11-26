@extends('layouts.app')

@section('content')
    <div>
        <h2 class="text-center">Welcome to Dashboard, You are logged in!</h2>
    </div>
    <h3>Create Users</h3>
    <div class="d-flex align-items-start flex-wrap">
        <div>
            <form action="/user" method="POST">
                @csrf
                <p><input type="text" name="name" placeholder="Enter Name" value="{{ old('name') }}"></p>
                <p><input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}"></p>
                <p><input type="password" name="password" placeholder="Enter Password"></p>
                <p><input type="submit" value="Submit"></p>
            </form>
        </div>
        <div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="bg-danger text-white py-2 px-4 ml-4 mb-2">
                        <p class="mb-0">{{ $error }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <hr>
    <div>
        <h2>All Users</h2>
        <ul>
            @foreach ($users as $user)
                <li>
                    @if (auth()->id() === $user->id)
                        <strong>(You)</strong>
                    @endif
                    {{ $user->name }} - {{ $user->email }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
