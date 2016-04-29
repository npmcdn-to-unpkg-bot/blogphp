@extends('layouts.master')

@section('title', $title)

@section('content')

    <h1>Articles de l'utilisateur: {{$name}}</h1>

    @forelse($posts as $post)
        <h1><a href="{{url('article',[$post->id])}}" class="">{{$post->title}}</a></h1>
        @if(!is_null($post->category))
            <p>catégorie: {{$post->category->title}} </p>
        @else
            <p>Pas de catégorie associée pour cette article</p>
        @endif
        @if(!is_null($post->user))
            <p> auteur: {{$post->user->name}}</p>
        @else
            <p>pas d'auteur</p>
        @endif
    @empty
    @endforelse
@stop