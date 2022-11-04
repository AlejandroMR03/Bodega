<h4 class="text-center fst-italic">Lista de Clientes
<br>
<br>
<button onclick=" location.href='http://127.0.0.1:8000/' "type="button" class="btn btn-outline-warning">Inicio</button>
<br>
<br>
<button onclick=" location.href='http://127.0.0.1:8000/cliente/create' " type="button" class="btn btn-outline-success">Crear nuevo Cliente</button>
</h4>
<link rel="stylesheet" href="app.css">
<table class="table table-bordered mx-auto" style="width: 200px;">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <thead class>
        <div>
    
        <tr>
            <th>#</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Primer<br>Apellido</th>
            <th class="text-center">Segundo<br>Apellido</th>
            <th class="text-center">Numero<br>Documento</th>
            <th class="text-center">Direccion</th>
            <th class="text-center">Telefono</th>
            <th class="text-center">Fecha ultima Compra</th>
            <th class="text-center">Numero Asociado</th>
            <th class="text-center">Correo Electronico</th>
            <th class="text-center">Foto</th>
        
        </tr>
    
</div>
    </thead>

    <tbody class="table table-bordered mx-auto" style="width: 200px;">
        <div class="position-absolute top-50 start-50 translate-middle">
        @foreach ($clientes as $cliente ) {{--recibe el array datos. Toma la posición que se llama clientes y su alias es cliente--}}


        
        <tr>
            <td class="text-center">{{$cliente->id}}</td>
            <td class="text-center">{{$cliente->nombre}}</td>
            <td class="text-center">{{$cliente->primer_apellido}}</td>
            <td class="text-center">{{$cliente->segundo_apellido}}</td>
            <td class="text-center">{{$cliente->numero_documento}}</td>
            <td class="text-center">{{$cliente->direccion}}</td>
            <td class="text-center">{{$cliente->telefono}}</td>
            <td class="text-center">{{$cliente->fecha_ultima_compra}}</td>
            <td class="text-center">{{$cliente->numero_de_tarjeta_asociado}}</td>
            <td class="text-center">{{$cliente->correo_electronico}}</td>
            <td class="text-center"><img src=" {{Storage::url($cliente->foto) }} " width="100" height="100" alt=""></td>
            <td class="text-center">
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
