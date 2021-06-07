inicio usuario

<a href=" {{ url('usuarios/create') }}"> Crear nuevo usuario </a>


<table class="tab-content table-bordered">
    <tr>
        <th><a class="list-group-item list-group-item-action active" data-toggle="list"  role="tab">###</a></th>
        <th><a class="list-group-item list-group-item-action active" data-toggle="list"  role="tab">Nombre</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">Contraseña</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">Email</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">Direccion</a></th>
        <th><a class="list-group-item list-group-item-action" data-toggle="list"  role="tab">Subscripcion</a></th>
        <th>Acciones</th>
    </tr>
    @foreach($usuarios as $usuario)
    <tr>
  <td class="tab-pane active" id="home" role="tabpanel">{{$usuario->id}}</td>
  <td class="tab-pane" id="profile" role="tabpanel">{{$usuario->user_name}}</td>
  <td class="tab-pane" id="messages" role="tabpanel">{{$usuario->user_password}}</td>
  <td class="tab-pane" id="settings" role="tabpanel">{{$usuario->user_email}}</td>
  <td class="tab-pane" id="settings" role="tabpanel">{{$usuario->user_adress}}</td>
  <td class="tab-pane" id="settings" role="tabpanel">{{$usuario->subscription_type}}</td>
  <td>
    <a href="{{ url('/usuarios/'.$usuario->id.'/edit') }}"> Editar </a>

    <form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" onclick="return confirm('¿Borrar Registro?')" value="Borrar">

    </form>
  </td>
  </tr>
  @endforeach
</table>