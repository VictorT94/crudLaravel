

<label class="col-form-label" for="producto_id"> producto id </label>
<input type="integer"  value="{{ isset($pedido->producto_id)?$pedido->producto_id:'' }}" name="producto_id">
<br>
<label class="col-form-label" for="usuarios_id"> usuario id </label>
<input type="integer"  value="{{ isset($pedido->usuarios_id)?$pedido->usuarios_id:'' }}" name="usuarios_id">
<br>
<label class="col-form-label" for="number_products"> numero productos </label>
<input type="integer"  value="{{ isset($pedido->number_products)?$pedido->number_products:'' }}" name="number_products">
<br>
<label class="col-form-label" for="total_price"> Precio total </label>
<input type="double"  value="{{ isset($pedido->total_price)?$pedido->total_price:'' }}" name="total_price">
<label class="col-form-label" for="discount"> Descuento </label>
<input type="integer"  value="{{ isset($pedido->discount)?$pedido->discount:'' }}" name="discount">

<input type="submit">Enviar</input>
<br>
<br>
<a href=" {{ url('pedidos') }}"> Volver </a>