<div>
    <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
  
        <div class="text-center container">
      <h1>Elenco articoli presenti</h1>
      <a href="{{ route('articles.create')}}" type="button" class="btn btn btn-success me-md-2 mb-5" >
        Crea nuovo articolo

      </a>
      <form  class="d-flex">
        <input class="form-control me-2"  wire:model.live="search" name="search" type="search" placeholder="Cerca Articolo" aria-label="Search">
      </form>
        
     </div>
        <div class="container mt-1">
        
        <table class="table border mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Sottotitolo</th>
                    <th scope="col">Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $articles as $article )
                <tr>
                    <th scope="row">#{{ $article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->subtitle}}</td>
                    <td>{{$article->content}}
                  
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            
                            <a href="{{ route('articles.edit', ['article' => $article])}}"
                                 class="btn btn-warning me-md-2 ">
                                 Modifica
                            </a>
                            <a href=""
                                 class="btn btn-primary me-md-2">
                                 Visualizza
                            </a>
                            <a href="#" wire:click.prevent="destroy({{$article}})"
                                class="btn btn-danger me-md-2">
                                Elimina
                            </a>
                        </div> 
                        
                    </td>
                    
                </tr>    
                    
                @endforeach
                
            </tbody>
            
        </table>
                    {{-- {{ $books->links() }} --}}
</div>
                    
                    
                        
                    
                        
                                   
                              

                              
                            
                        
               


     </div>
</div>
