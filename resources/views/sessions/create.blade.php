@extends('layouts.master')

@section('content')
    <div class="col-sm-8"> 
    
        <h1>Sign in</h1>

        <form method="POST" action="/login">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password Address:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>

            @include('layouts.errors')
        </form>

    </div>


@endsection