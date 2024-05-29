@extends('layouts.master')
<title>@yield('title', 'Personas')</title>
@section('contenido')
    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>@yield('title', 'Lista de Personas')</h2>

                </div>



                <div class="row">
                    <!-- Verificar si hay personas -->
                    @if ($persona)
                        <!-- Recorrer la lista de personas -->
                        @foreach ($persona as $item)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <div class="accordion-item">
                                                <h3 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#persona-content-{{ $item->nPerCodigo }}"
                                                            aria-expanded="false">
                                                        <h5 class="title text-primary">
                                                            <a>
                                                                {{ $item->cPerApellido }}, {{ $item->nPerNombre }}
                                                            </a>
                                                        </h5>
                                                    </button>
                                                </h3>
                                            </div>
                                        </h5>
                                        <div id="persona-content-{{ $item->nPerCodigo }}" class="accordion-collapse collapse"
                                             data-bs-parent="#personasList">
                                            <div class="accordion-body">
                                                <!-- Aquí se mostrará la información detallada de la persona -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><strong>Código:</strong> {{ $item->nPerCodigo }}</li>
                                                            <li class="list-group-item"><strong>Apellido:</strong> {{ $item->cPerApellido }}</li>
                                                            <li class="list-group-item"><strong>Nombre:</strong> {{ $item->nPerNombre }}</li>
                                                            <li class="list-group-item"><strong>Dirección:</strong> {{ $item->nPerDireccion }}</li>
                                                            <li class="list-group-item"><strong>Fecha de Nacimiento:</strong> {{ $item->nPerFecNac }}</li>
                                                            <li class="list-group-item"><strong>Edad:</strong> {{ $item->nPerEdad }}</li>
                                                            <li class="list-group-item"><strong>Sueldo:</strong> {{ $item->nPerSueldo }}</li>
                                                            <li class="list-group-item"><strong>RND:</strong> {{ $item->cPerRnd }}</li>
                                                            <li class="list-group-item"><strong>Estado:</strong> {{ $item->nPerEstado }}</li>
                                                            <li class="list-group-item"><strong>Token:</strong> {{ $item->remenber_token }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="text-primary">Detalle de persona</h1> 
                                    <h5 class="card-title bg-warning">No existen personas para mostrar</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function () {
                        // Manejar el evento de clic en los botones del acordeón
                        $('.accordion-button').click(function () {
                            // Obtener el ID de la persona desde el atributo data-bs-target del botón
                            var personaId = $(this).data('bs-target').replace('#persona-content-', '');
                
                            // Hacer una solicitud AJAX para obtener la información de la persona
                            $.ajax({
                                url: '/personas/' + personaId,
                                type: 'GET',
                                dataType: 'json',
                                success: function (data) {
                                    // Actualizar el contenido de la sección de respuesta con la información de la persona
                                    $('#persona-content-' + personaId + ' .accordion-body').html(`
                                        <ul>                                                                                    
                                            <li><strong>Código:</strong> ${data.nPerCodigo}</li>
                                            <li><strong>Apellido:</strong> ${data.cPerApellido}</li>
                                            <li><strong>Nombre:</strong> ${data.nPerNombre}</li>
                                            <li><strong>Dirección:</strong> ${data.nPerDireccion}</li>
                                            <li><strong>Fecha de Nacimiento:</strong> ${data.nPerFecNac}</li>
                                            <li><strong>Edad:</strong> ${data.nPerEdad}</li>
                                            <li><strong>Sueldo:</strong> ${data.nPerSueldo}</li>
                                            <li><strong>RND:</strong> ${data.cPerRnd}</li>
                                            <li><strong>Estado:</strong> ${data.nPerEstado}</li>
                                            <li><strong>Token:</strong> ${data.remember_token}</li>
                                        </ul>
                                    `);
                                },
                                error: function (xhr, status, error) {
                                    console.error(error);
                                }
                            });
                        });
                    });
                </script>
                


            </div>
        </section>



    </main>
@endsection
