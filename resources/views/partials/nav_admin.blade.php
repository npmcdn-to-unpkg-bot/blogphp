ICI C LA NAV ADMIN
<ul>
    <li><a href="{{url('/')}}">Retour au site public</a></li>
    <li><a href="{{url('post/create')}}">Ajouter un post</a></li>
    <li><a href="{{url('post')}}">Dashboard post</a></li>
    <li>{{Auth::user()->name}}</li>
</ul>