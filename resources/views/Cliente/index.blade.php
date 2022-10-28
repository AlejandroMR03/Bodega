<h4 class="text-center fst-italic">Lista de Clientes</h4>
<br>
<link rel="stylesheet" href="app.css">
<table class="table caption-top">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <thead class="table table-striped">
        <div class="position-absolute top-50 start-50 translate-middle">

        <tr>
            <th>#</th>
            <th class="col">Nombre</th>
            <th class="col">Primer<br>Apellido</th>
            <th class="col">Segundo<br>Apellido</th>
            <th class="col">Numero<br>Documento</th>
            <th class="col">Direccion</th>
            <th class="col">Telefono</th>
            <th class="col">Fecha ultima Compra</th>
            <th class="col">Numero Asociado</th>
            <th class="col">Correo Electronico</th>
            <th class="col">Foto</th>

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
            <td><img src=" {{Storage::url($cliente->foto) }} " width="100" height="100" alt=""></td>
            <td>
        </div>
            <div>
                <a class="btn btn-outline-success" href="{{Route('edit')}}?id={{$cliente->id}}">Editar</a>
            </div>
                
                <form action="{{url('/cliente/'. $cliente->id) }}" method="post">

                <input class="btn btn-outline-danger" type="submit" value="Borrar">
                @csrf
                {{method_field('DELETE')}}
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>

</table>
