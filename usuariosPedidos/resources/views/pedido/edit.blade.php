Edit Pedido

<form action="{{ url('/pedidos/'.$pedido->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('pedido.formulario');


</form>