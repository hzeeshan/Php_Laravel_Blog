@extends('users.app')

@section('bg-img', asset('users/img/home-bg.jpg'))

@section('heading',  'Login here' )
@section('sub-heading', 'Welcome to laravel blog')

@section('content')
        
   <article>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! {{ Auth::user()->name }}
                </div>
            </div>
        </div>
                
            </div>

        </div>

    </article>


@endsection











