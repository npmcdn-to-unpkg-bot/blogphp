@extends('layouts.admin')

@section('content')

    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif

    <form method="POST" action="{{url('post', $post->id)}}" class="edit">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="user_id" value="{{$userId}}">
        {{csrf_field()}}
        <p>
            <label>Titre</label><br>
            <input type="text" name="title" value="{{$post->title}}">
        </p>

        <label>Contenu</label><br>
        @if($errors->has('title'))
            <span class="error">{{$errors->first('title')}}</span>
        @endif
            <textarea name="content">{{$post->content}}</textarea>

        @if($errors->has('content'))
            <span class="error">{{$errors->first('content')}}</span>
        @endif

        <div class="form-select">
            <label for="category_id">Catégorie</label><br>
            <select name="category_id">
                @foreach( $categories as $id=>$title )
                    <option {{$post->category_id==$id? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
                @endforeach
                <option {{is_null($post->category_id)? 'selected' : ''}} value="0">Non catégorisé</option>
            </select>
        </div>

        <p>
            @if(is_null($post->picture))
            <label for="name">Nom de l'image</label><br>
            <input type="text" name="name"><br>
            <label for="picture">Télécharger une image</label><br>
            <input type="file" name="picture">

            @if($errors->has('picture'))
                <span class="error">{{$errors->first('picture')}}</span>
            @endif
            @else
                {{$post->picture->name}}<br>
                <img src="{{url('uploads', $post->picture->uri)}}" alt=""><br>
                <label for="picture">Changer l'image</label><br>
                <input type="file" name="picture">

            @endif
        </p>


        <div class="form-select">
            <label for="tag_id">Mot clé</label><br>
            <select name="tag_id[]" multiple>
                @foreach( $tags as $id => $title )
                    <option  value="{{$id}}">{{$title}}</option>
                @endforeach
            </select>
            @if($errors->has('tag_id'))
                <span class="error">{{$errors->first('tag_id')}}</span>
            @endif
        </div>

        <p>
            <label for="status">Publier l'article:</label>
            <input {{$post->status=='opened'? 'checked' : ''}} id="status" type="checkbox" name="status" value="opened">
        </p>


        <p>
            <input type="submit" value="ok">
        </p>
    </form>
@endsection