<table class="table caption-top">
<div class="position-absolute top-50 start-50 translate-middle">
<div class="p-2 bg-light border">
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{ $cliente->nombre}}">
<br>
<label for="Primer Apellido">Primer Apellido</label>
<input type="text" name="primer_apellido" value="{{ $cliente->primer_apellido}}" id="primer_apellido">
<br>
<label for="Segundo Apellido">Segundo Apellido</label>
<input type="text" name="segundo_apellido" value="{{ $cliente->segundo_apellido}}" id="segundo_apellido">
<br>
<label for="Numero Documento">Numero Documento</label>
<input type="text" name="numero_documento" value="{{ $cliente->numero_documento}}" id="numero_documento">
<br>
<label for="Direccion">Direccion</label>
<input type="text" name="direccion" value="{{ $cliente->direccion}}" id="Direccion">
<br>
<label for="Telefono">Telefono</label>
<input type="text" name="telefono" value="{{ $cliente->telefono}}" id="Telefono">
<br>
<label for="fecha ultima compra">Fecha ultima compra</label>
<input type="date" name="fecha_ultima_compra" value="{{ $cliente->fecha_ultima_compra}}" id="fecha_ultima_compra">
<br>
<label for="numero tarjeta asociado">numero tarjeta asociado</label>
<input type="text" name="numero_de_tarjeta_asociado" value="{{ $cliente->numero_de_tarjeta_asociado}}" id="numero_de_tarjeta_asociado">
<br>
<label for="correo electronico">correo electronico</label>
<input type="text" name="correo_electronico" value="{{ $cliente->correo_electronico}}" id="correo_electronico">
<br>
<label for="foto">foto</label>
<input type="file" name="foto" value="{{ $cliente->foto}}" id="foto">
<br>
<br>
<button type="submit" class="btn btn-primary">Actualizar cliente</button>
</div>
</div>
</table>


