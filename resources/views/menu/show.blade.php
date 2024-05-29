
    
</main>
    @if(session('error'))
        <p>{{ session('error') }}</p>
    @else
        <ul>
            <li><strong>ID:</strong> {{ $servicio->id }}</li>
            <li><strong>Título:</strong> {{ $servicio->titulo }}</li>
            <li><strong>Descripción:</strong> {{ $servicio->descripción }}</li>
            <li><strong>Creado en:</strong> {{ $servicio->created_at }}</li>
            <li><strong>Actualizado en:</strong> {{ $servicio->updated_at }}</li>
        </ul>
    @endif

   
