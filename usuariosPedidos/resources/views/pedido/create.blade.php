Crear Pedido

<form action="{{url('/pedidos')}}" method="post">
@csrf
@include('pedido.formulario')


</form>