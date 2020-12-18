@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Book
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('vacas.store') }}">
      @csrf
      <div class="form-row">
          <div class="form-group col-md-4">
              <label for="name">Nombre Vaca:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>
          <div class="form-group col-md-4">
              <label for="price">Raza :</label>
              <input type="text" class="form-control" name="raza"/>
          </div>
          <div class="form-group col-md-4">
              <label for="quantity">Origen:</label>
              <input type="text" class="form-control" name="origen"/>
          </div>
          <div class="form-group col-md-4">
              <label for="quantity">Fecha de Incorporacion:</label>
              <input type="date" class="form-control" name="fecha_inc"/>
          </div>
          <div class="form-group col-md-4">
              <label for="quantity">Fecha Nacimiento:</label>
              <input type="date" class="form-control" name="fecha_nac"/>
          </div>
          <div class="form-group col-md-4">
              <label for="quantity">Edad:</label>
              <input type="text" class="form-control" name="edad"/>
          </div>
          <div class="form-group">
              <label for="quantity">Estatus:</label>
              <input type="text" class="form-control" name="estatus"/>
          </div>
          </div>
          <button type="submit" class="btn btn-primary">Crear Vaca</button>
      </form>
  </div>
</div>
@endsection