<div>
    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Self-18-crud-livewire</title>
       @vite(['resources/css/app.css', 'resources/js/app.js'])
      </head>
      <body>
        <x-navbar :title="'Self-18'"/>
       
        <main>
          <div class="container">
            
            {{ $slot }}
          </div>
        </main>
       
      </body>
    </html>
</div>