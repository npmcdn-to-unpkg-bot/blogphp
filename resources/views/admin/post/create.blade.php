@extends('layouts.admin')

@section('content')

    @if(Session::has('message'))
        <p>{{Session::get('message')}}</p>
    @endif

    <form method="POST" action="{{url('post')}}" enctype="multipart/form-data" class="edit">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{$userId}}">
        <p>
            <label>Titre</label><br>
            <input type="text" name="title" value="{{old('title')}}">
        </p>
        <label>Contenu</label><br>
        @if($errors->has('title'))
            <span class="error">{{$errors->first('title')}}</span>
        @endif
        <textarea name="content" placeholder="...">{{old('content')}}</textarea>

        @if($errors->has('content'))
            <span class="error">{{$errors->first('content')}}</span>
        @endif

        <p>
            <label for="name">Nom de l'image (*)</label><br>
            <input type="text" name="name"><br>
            <label for="picture">Télécharger une image</label><br>
            <input type="file" name="picture">

            @if($errors->has('picture'))
                <span class="error">{{$errors->first('picture')}}</span>
            @endif

        </p>

        <p>
            <label>sélectionner une catégorie</label><br>
            <select name="category_id">

            @forelse($categories as $id=>$title)
            <option value="{{$id}}">{{$title}}</option>
            @empty
            @endforelse

            <option value="0" selected>non catégorisé</option>
            </select>
        </p>

        <p>
            <label for="status">Publier l'article:</label>
            <input id="status" type="checkbox" name="status" value="opened">
        </p>

        <div class="form-select">
            <label >Mot clé</label><br>
            <select  name="tag_id[]" multiple>

                @foreach($tags as $id => $name)
                    <option value="{{$id}}">{{$name}}</option>
                @endforeach

            </select>
        </div>

        <p>
            <input type="submit" value="ok">
        </p>



    </form>
@endsection