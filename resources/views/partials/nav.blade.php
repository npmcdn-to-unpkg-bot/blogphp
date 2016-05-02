
<?php $connect= Auth::check()? true:false ?>
<ul class="textnav">
    <li><a href="{{url('/')}}">Accueil</a></li>
    @if($connect===true)
        <li><a href="{{url('/logout')}}">Logout</a></li>
        <li><a href="{{url('/')}}">Retour au site public</a></li>
        <li><a href="{{url('post/create')}}">Ajouter un post</a></li>
        <li><a href="{{url('post')}}">Dashboard post</a></li>
        <li>{{Auth::user()->name}}</li>
    @else
        <li><a href="{{url('/login')}}">Login</a></li>
    @endif
</ul>