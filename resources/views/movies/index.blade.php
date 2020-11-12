<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Peliculas') }}
      </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
            <a 
            href="{{ route('movies.create') }}" 
            class="btn btn-primary" 
            title="create a movie">
            Añadir nueva
          </a>

          @if($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
          @endif

          <table class="table table-bordered table-responsive-lg mt-2">
            <tr>
              <th>No</th>
              <th>Título</th>
              <th>Sinopsis</th>
              <th>Año</th>
              <th width="280px"></th>
            </tr>
        
            @foreach($movies as $movie)
              <tr>
                <td> {{ ++$i }} </td>
                <td> {{ $movie->title}} </td>
                <td> {{ $movie->synopsis }} </td>
                <td> {{ $movie->year }} </td>
              
                <td>
                  <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                    
                    <a href="{{ route('movies.show', $movie->id) }}" title="show" class="btn btn-success">
                      Ver
                    </a>
        
                    <a href="{{ route('movies.edit', $movie->id) }}" title="edit" class="btn btn-warning">
                      Editar
                    </a>
        
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" title="delete" class="btn btn-danger">
                      Eliminar
                      <i class="fas fa-trash fa-lg text-danger"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </table>
        
          {!! $movies->links() !!}
        </div>
    </div>
  </div>
</x-app-layout>