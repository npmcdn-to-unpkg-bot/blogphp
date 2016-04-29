@extends('layouts.master') <!-- injection dans le master -->

@section('title', $title)

@section('content')
    <div class="grid"  data-isotope='{ "itemSelector": ".grid-item", "layoutMode": "fitRows" }'>

@forelse($posts as $post)
    <div class="grid-item">
    @if(!is_null($post->picture))
            <a href="{{url('post', $post->id)}}">
                <img src="{{url('uploads', $post->picture->uri)}}" alt="" style="width:100%">
            </a>
    @else
        <p style="margin:20px">pas d'image</p>
    @endif
    <div class="bloc_article">
    @if( !is_null( $post ))
        <article>
            <h1>
                <a href="{{url('post', $post->id)}}" class="link-hover">{{$post->title}}</a>
                <span class="bar"></span>
            </h1>
            <p>{{$post->content}}</p>
            <a href="{{url('post', $post->id)}}">Lire la suite...</a>
        </article>
    @else
        <p>Pas de catégorie associée pour cette article {{$post->id}} </p>
    @endif


    @if( !is_null( $post->user ))
        <p> auteur: {{$post->user->email}}</p>
    @else
        <p>pas d'auteur</p>
    @endif
    </div>
    </div>
@empty
    <p>pas d'article</p>

@endforelse
    </div>

@endsection

@section('sidebar')
    @parent
    <p>j'aimerais être à l'interieur de la sidebar</p>
@endsection
