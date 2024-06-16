<div class="col-lg-8 col-xl-6 border p-5 rounded">
    @if (session('status'))
        {{ session('status')}}
        
    @endif
    <form wire:submit="update" >
      
        <div class="form-floating mb-3">
            <input class="form-control" wire:model.blur="title"  type="text">
               
            <label for="title">Titolo </label>
            @error('title')
            {{ $message}}                
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input class="form-control"  wire:model.blur="subtitle" type="text">
               
            <label for="subtitle">Sottotitolo</label>
            @error('subtitle')
            {{ $message}}                
            @enderror
          
        </div>

        <div class=" mb-3">
            <label class="form-label">Content</label>
           <textarea class="form-control " wire:model.blur="content" rows="4"></textarea>
           @error('content')
            {{ $message}}                
            @enderror
        </div>
        <div class="form-floating mb-3">
            
        </div>
        <div class="mb-3">
           
            
         

        </div>
       
       
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Aggiorna</button>
        </div>
    </form>
</div>
