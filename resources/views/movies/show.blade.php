<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Pelicula') }}
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
          
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Título:</strong>
                {{ $movie->title}}
              </div>
              <div class="form-group">
                <strong>Sinopsis:</strong>
                {{ $movie->synopsis}}
              </div>
              <div class="form-group">
                <strong>Año:</strong>
                {{ $movie->year}}
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</x-app-layout>