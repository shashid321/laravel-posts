<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        .container {
            width: 100%;
            padding: 10px;
        }
        .container .row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }
        .container .row .col {
            width: 33.33%;
            padding: 10px;
        }
        .container .row .col img {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>{{$title}} Page</h1>
    <span>{{$sum}}</span>
    <!-- @if(Auth::check())
        <a href="{{route('logout')}}">Logout</a>
    @else
        <a href="{{route('login')}}">Login</a>
    @endif

    @unless(Auth::check())
        <span>{{$sum}}</span>
    @endunless

    @isset($user)
        <span>{{$user}}</span>
    @endisset

    @empty($user)
        <span>{{$user}}</span>
    @endempty

    @foreach($users as $user)
        <span>{{$user}}</span>
    @endforeach

    @php
        $user = 'John';
    @endphp

    @for($i = 0; $i < 10; $i++)
        <span>{{$i}}</span>
    @endfor

    @forelse($users as $user)
        <span>{{$user}}</span>
    @empty
        <span>No users</span>
    @endforelse

    @while($i < 10)
        <span>{{$i++}}</span>
        @php
            $i++;
        @endphp 
    @endwhile

    @for($i = 0; $i < 10; $i++)
        @continue($i == 5)
        @break($i == 7)

    @continue()
    @break('break')

    @php
        $role = false;
    @endphp

    <div @class=([ text-red => $role ])  >
        Hello, {{$user}}
    </div>

    <!-- @checked -->
    <!-- @foreach($users as $user)
        <input type="checkbox" name="users[]" value="{{$user}}" @checked(old('active', $user->gender == 'male'))>{{$user}}<br>
        <select @selected(old('active', $user->gender)></select>))

        @include('layout.pages.header')

        @includeIf('', )


    @endforeach -->


    @foreach($users as $user)
        @foreach($user as $u)
            $loop->index 0
            $loop->iteration 1
            $loop->remaining 
            $loop->count 
            $loop->first
            $loop->last
            $loop->even
            $loop->odd

            $loop->depth
            $loop->parent
            $loop->hasParent
            $loop->hasChildren


    @endforeach


    <!-- Layout -->
    <!-- Views/master.blade.php -->
    @include('layout.pages.header')
    @yield('admin')
    <!-- @yield('content') -->

    <!-- Views/app.blade.php -->
    @extends('master')

    @include('layout.pages.header')
    @section('master.admin')

    @endsection

    <!-- {{asset('assets/style.css')}} -->











</body>
</html>