<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Añadir nueva pelicula') }}
    </h2>
      <a 
        href="{{ route('movies.index') }}" 
        class="btn btn-primary" 
        title="Go back">
        Atras
      </a>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
          @if($errors->any())
            <div class="alert alert-danger">
              <strong>Error!</strong><br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
          @endif
        
          <form action="{{ route('movies.store') }}" method="POST">
            @csrf
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Título:</strong>
                  <input type="text" name="title" class="form-control" placeholder="Título">
                </div>
              </div>
          
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Sinopsis:</strong>
                  <textarea name="synopsis" class="form-control" placeholder="Sinopsis"></textarea>
                </div>
              </div>
          
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Año:</strong>
                  <input type="number" class="form-control" name="year" placeholder="Año">
                </div>
              </div>
          
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Añadir</button>
              </div>
            </div>
          </form>
        
        </div>
    </div>
  </div>
</x-app-layout>