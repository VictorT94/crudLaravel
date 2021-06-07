Edicion de usuarios

<form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('usuario.formulario');


</form>