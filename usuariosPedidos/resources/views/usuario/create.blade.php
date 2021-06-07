Creacion de usuarios

<form action="{{url('/usuarios')}}" method="post">
@csrf
@include('usuario.formulario')


</form>