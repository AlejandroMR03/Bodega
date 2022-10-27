Mostrar la lista de clientes
<link rel="stylesheet" href="app.css">
<table class="index">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <thead class="table table-striped">
        <div class="position-absolute top-50 start-50 translate-middle">

        <tr>
            <th>#</th>
            <th class="text-warning bg-dark-text-center">Nombre</th>
            <th class="text-warning bg-dark-text-center">Primer<br>Apellido</th>
            <th class="text-warning bg-dark-text-center">Segundo<br>Apellido</th>
            <th class="text-warning bg-dark-text-center">Numero<br>Documento</th>
            <th class="text-warning bg-dark-text-center">Direccion</th>
            <th class="text-warning bg-dark-text-center">Telefono</th>
            <th class="text-warning bg-dark-text-center">Fecha<br>ultima<br>Compra</th>
            <th class="text-warning bg-dark-text-center">Numero<br>Tarjeta<br>Asociado</th>
            <th class="text-warning bg-dark-text-center">Correo<br>Electronico</th>
            <th class="text-warning bg-dark-text-center">Foto</th>

        </tr>
    
</div>
    </thead>

    <tbody class="table table-striped">
        <div class="position-absolute top-50 start-50 translate-middle">
        @foreach ($clientes as $cliente ) {{--recibe el array datos. Toma la posición que se llama clientes y su alias es cliente--}}

        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->primer_apellido}}</td>
            <td>{{$cliente->segundo_apellido}}</td>
            <td>{{$cliente->numero_documento}}</td>
            <td>{{$cliente->direccion}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->fecha_ultima_compra}}</td>
            <td>{{$cliente->numero_de_tarjeta_asociado}}</td>
            <td>{{$cliente->correo_electronico}}</td>
            <td>{{$cliente->foto}}</td>
            <td>
        </div>
            <div>
                <a href="{{Route('edit')}}?id={{$cliente->id}}">Editar</a>
            </div>
                
                <form action="{{url('/cliente/'. $cliente->id) }}" method="post">

                <input type="submit" value="Borrar">
                @csrf
                {{method_field('DELETE')}}
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>

</table>
