

<label for="user_name"> Nombre Usuario </label>
<input type="text" value="{{ isset($usuario->user_name)?$usuario->user_name:'' }}" name="user_name">
<br>
<label for="user_password"> Contraseña </label>
<input type="text"  value="{{ isset($usuario->user_password)?$usuario->user_password:'' }}" name="user_password">
<br>
<label for="user_email"> Email </label>
<input type="text"  value="{{ isset($usuario->user_email)?$usuario->user_password:'' }}" name="user_email">
<br>
<label for="user_adress"> Direccion</label>
<input type="text"  value="{{ isset($usuario->user_adress)?$usuario->user_password:'' }}" name="user_adress">
<label for="subscription_type"> Suscripcion </label>
<input type="enum"  value="{{ isset($usuario->subscription_type)?$usuario->user_password:'' }}" name="subscription_type">

<input type="submit">Enviar</input>
<br>
<br>
<a href=" {{ url('usuarios') }}"> Volver </a>