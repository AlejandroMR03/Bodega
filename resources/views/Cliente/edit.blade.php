<form action="/cliente/{{$cliente->id}}" method="post" enctype="multipart/form-data">
    @method('put')
    @csrf
@include('Cliente.form')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</form>
