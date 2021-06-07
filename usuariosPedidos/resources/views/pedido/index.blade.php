Inicio Pedido

<a href=" {{ url('pedidos/create') }}" class="btn-lg"> Crear nuevo pedido </a>


<table class="tab-content table-bordered">
    <tr>
        <th><a class="list-group-item list-group-item-action active" data-toggle="list"  role="tab">###</a></th>
        <th><a class="list-group-item list-group-item-action active" data-toggle="list"  role="tab">producto_id</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">usuarios_id</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">number_products</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">total_price</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">discount</a></th>
        <th>Acciones</th>
    </tr>
    @foreach($pedidos as $pedido)
    <tr>
  <td class="tab-pane active" id="home" role="tabpanel">{{$pedido->id}}</td>
  <td class="tab-pane" id="profile" role="tabpanel">{{$pedido->producto_id}}</td>
  <td class="tab-pane" id="messages" role="tabpanel">{{$pedido->usuarios_id}}</td>
  <td class="tab-pane" id="settings" role="tabpanel">{{$pedido->number_products}}</td>
  <td class="tab-pane" id="settings" role="tabpanel">{{$pedido->total_price}}</td>
  <td class="tab-pane" id="settings" role="tabpanel">{{$pedido->discount}}</td>
  <td>
  
    <a href="{{ url('/pedidos/'.$pedido->id.'/edit') }}"> Editar </a>

    <form action="{{ url('/pedidos/'.$pedido->id) }}" method="post">
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" onclick="return confirm('¿Borrar Registro?')" value="Borrar">

    </form> 
  </td>
  </tr>
  @endforeach
</table>