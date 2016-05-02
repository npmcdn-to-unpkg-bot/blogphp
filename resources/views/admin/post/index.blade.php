@extends('layouts.admin')

@section('content')

    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif


    <table class="table">
        <thead>
        <tr>
            <th>title</th>
            <th>auteur</th>
            <th>status</th>
            <th>date</th>
            <th>category</th>
            <th>picture</th>
            <th>tags</th>
            <th>action</th>
        </tr>
        </thead>

        @forelse($posts as $post)
            <tr>

                <td><a href="{{url('post',[$post->id, 'edit'])}}" class="">{{$post->title}}</a></td>
                <td>{{$post->user? $post->user->name : 'aucun auteur'}}</td>
                <td>{{$post->status}}</td>

                <td>{{$post->published_at? $post->published_at : 'Non daté'}}</td>
                <td>
                    @if(!is_null($post->category))
                        {{$post->category->id}}
                    @else
                        Non catégorisé
                    @endif
                </td>
                <td>
                    @if(!is_null($post->picture))
                            <img src="{{url('uploads', $post->picture->uri)}}" alt="" style="width:100px">
                    @else
                        aucune image
                    @endif
                </td>
                <td>
                    @forelse($post->tags as $tag)
                        <span class="tag">{{$tag->name}}</span>
                    @empty
                        aucun tag
                    @endforelse
                </td>
                <td class="button">
                    <form class="destroy" method="POST" action="{{url('post', $post->id)}}">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="hidden" name="title_h" value="{{$post->title}}">
                        <input class="btn btn-closed" name="delete" type="submit" value="delete">
                    </form>
                </td>
            </tr>
        @empty
            <p>Aucun article en base</p>
        @endforelse
    </table>



@endsection