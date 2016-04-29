@extends('layouts.master') <!-- injection dans le master -->

@section('title')

@section('content')

    @if(!empty($post))

        @if(!is_null($post->picture))
            <img src="{{url('uploads', $post->picture->uri)}}" alt="" style="width:400px">
        @else
            <p>pas d'image</p>
        @endif

        <article>
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
        </article>

    @else
        <p>pas d'article</p>
    @endif


@endsection

@section('sidebar')
    @parent
    <p>j'aimerais être à l'interieur de la sidebar</p>
@endsection
