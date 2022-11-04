
<form action="{{url('/cliente')}}" method="post" enctype="multipart/form-data">
@csrf
<link rel="stylesheet" href="app.css">
<div class="position-absolute top-50 start-50 translate-middle">
<h3 class="text-info">Crear Cliente</h3>
</div>
@include('Cliente.form2');
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</form>
