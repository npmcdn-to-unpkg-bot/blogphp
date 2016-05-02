@extends('layouts.master')

@section('content')
    <form method="POST" action="{{url('login')}}" class="login">
        {!! csrf_field() !!}
        <div class="form-text">
            <label class="label" for="email">Email</label><br>
            <input class="input-text" id="email" name="email" type="email" value="{{old('email')}}" >
            @if($errors->has('email')) <span class="error">{{$errors->first('email')}}</span> @endif
        </div>
        <div class="form-text">
            <label class="label" for="password">Password</label><br>
            <input class="input-text" id="password" name="password" type="password"  >
            @if($errors->has('password')) <span class="error">{{$errors->first('password')}}</span> @endif
        </div>
        <div class="form-text">
            <label class="label" for="remember">Remember</label>
            <input type="radio" name="remember" value="remember"/>
        </div>
        <div class="form-submit">
            <input type="submit" value="login" >
        </div>
    </form>
@stop