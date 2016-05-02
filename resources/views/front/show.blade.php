@extends('layouts.master') <!-- injection dans le master -->

@section('title')

@section('content')
    <div class="post">
    @if(!empty($post))

        @if(!is_null($post->picture))
            <div class="blocimg">
            <img src="{{url('uploads', $post->picture->uri)}}" alt="" style="width: 100%;top: 50%;position: relative;left: 50%;transform: translate(-50%, -50%);">
            </div>
        @else
            <p></p>
        @endif

        <article>
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
        </article>

    @else
        <p>pas d'article</p>
    @endif
    </div>


@endsection

@section('sidebar')
    @parent
    <p>j'aimerais être à l'interieur de la sidebar</p>
@endsection
