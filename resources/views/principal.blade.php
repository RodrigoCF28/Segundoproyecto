<x-header>
</x-header>
<body>
    <div class="content">
        <h1>Cuerpo principal de la página</h1>
        <h2>Mensaje</h2>
        <button type="button" class='btn btn-success'>Entrando</button>

        <h2>Listado de usuarios</h2>
        <ul>
            @if(@isset($listadousuarios))
                <table id="tablausuarios" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Calle</th> 
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($listadousuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->calle }}</td>
                            <td><button class='btn btn-primary' onclick="carga_modal
                            ({{ $usuario->id }}, '{{ $usuario->name }}', '{{ $usuario->calle }}')" data-id="{{$usuario->id}}"
                            data-nombre="{{$usuario->name}}" data-calle="{{$usuario->calle}}" data-toggle="modal"
                            data-target=#myModal><span class="fa-solid fa-pen-to-square"></span></button></td>
                        </tr>
                    @endforeach
                    </tbody> 
                </table>
                @else
                    <p>No hay usuarios registrados</p>
                @endif
        </ul>
    </div>
    <div class="modal" tabindex="-1" id="myModal" role="dialog">
  <form id="editForm" method="POST">
    @csrf @method('PUT')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">@yield('titulo_modal')</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type='hidden' name='id' id='id'>
          <input type='text' name='name' id='name'class='form-control'>
          <input type='text' name='calle' id='calle' class='form-control'>
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </form>
</div>
 
 
</body>
<x-footer></x-footer>
