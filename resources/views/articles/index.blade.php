<x-main>
</div class="container">

<div class="rounded-3 py-5 px-4 px-md-5 mb-5">
  
  <div class="text-center container">
          <h1>Elenco articoli presenti</h1>
          <button type="button" class="btn btn btn-success me-md-2 mb-5" >
            Crea nuovo articolo
  
          </button>
          <form  class="d-flex" role="search" method="POST" action="#">
            <input class="form-control me-2" name="search" type="search" placeholder="Cerca Articolo" aria-label="Search">
          </form>
            {{-- @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif --}}
        </div>
        <div class="container mt-1">
            
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sottotitolo</th>
                        
                    </tr>
                </thead>
                <tbody>
                 
                        <tr>
                            <th scope="row">#</th>
                            <td></td>
                            <td></td>
                            
                            <td>
                              
                            </td>
                            <td>

                               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                  
                                        <a href=""
                                            class="btn btn-warning me-md-2 ">
                                            Modifica
                                        </a>
                                        <a href=""
                                            class="btn btn-primary me-md-2">
                                            Visualizza
                                        </a>
                                        <a href=""
                                            class="btn btn-danger me-md-2">
                                            Elimina
                                        </a>

                                       
                                  

                                  
                                </div> 
                            </td>
                        </tr>
                   

                </tbody>
            </table>
            {{-- {{ $books->links() }} --}}
        </div>


    </div>
    
</x-main>