<h1>Editar Nota: {{$nota->id}}</h1>

<div class="p-1 mx-5">
  @if(session('mensaje'))
    <div class="alert alert-success">
    {{session('mensaje')}}
    </div>
  @endif
  </div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<form action="{{route('notas.modificar', $nota->id)}}" method="POST">
  @method('PUT')
  @csrf
    <input type="text" name="nombre" placeholder="Nombre"  value="{{ $nota->nombre}}" class="form-control mb-2">
    <input type="text" name="descripcion" placeholder="Apellido" value="{{ $nota->descripcion}}" class="form-control mb-2">
    <!--<input type="text" name="correo" placeholder="Correo" class="form-control mb-2">-->

    <button class="btn btn-warning btn-block" type="submit">Modificar datos</button>
  </form>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>