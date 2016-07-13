@extends('layouts.master') <!-- injection dans le master -->

@section('title', $title)

@section('content')
    <div class="grid">

@forelse($posts as $post)
    <div class="grid-item">
    @if(!is_null($post->picture))
            <a href="{{url('post', $post->id)}}">
                <img src="{{url('uploads', $post->picture->uri)}}" alt="" style="width:100%">
            </a>
    @else
        <p style="margin:20px"></p>
    @endif
    <div class="bloc_article">
    @if( !is_null( $post ))
        <article>
            <h1>
                <a href="{{url('post', $post->id)}}" class="link-hover">{{$post->title}} <span class="bar"></span></a>
            </h1>
            <p>
                {{$post->content}}
                <a href="{{url('post', $post->id)}}">Lire la suite AAAA...</a>
            </p>

        </article>
    @else
        <p>Pas de catégorie associée pour cette article {{$post->id}} </p>
    @endif


    @if( !is_null( $post->user ))
        <p class="note"> {{$post->user->email}}</p>
    @else
        <p class="note">pas d'auteur</p>
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
