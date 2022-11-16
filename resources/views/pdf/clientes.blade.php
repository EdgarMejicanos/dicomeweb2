<h1>Clientes</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Nit</th>
      <th>Telefono</th>
      <th>Direccion</th>
      <th>Creado en</th>
      <th>Actualizado en</th>
    </tr>
  </thead>
  <tbody class="table-border-bottom-0">
   @foreach ($clientes as $cliente)

      <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->nit}}</td>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->direccion}}</td>
        <td>{{$cliente->updated_at}}</td>
      </tr>

   @endforeach


  </tbody>
</table>
