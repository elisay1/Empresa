@extends('layouts.master')
<title>@yield('title', 'Servicios')</title>
@section('contenido')
    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>@yield('title', 'Servicios')</h2>

                </div>



                <div class="row">
                    <!-- Verificar si hay servicios -->
                    @if ($servicios)
                        <!-- Recorrer la lista de servicios -->
                        @foreach ($servicios as $item)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <div class="accordion-item">
                                                <h3 class="accordion-header">

                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#faq-content-{{ $item->id }}"
                                                        aria-expanded="false">
                                                        <h5 class="title text-primary">
                                                            <a>
                                                                {{ $item['titulo'] }}
                                                            </a>
                                                        </h5>
                                                    </button>
                                                </h3>
                                        </h5>
                                        <p>{{ $item['descripción'] }}</p>
                                        <div id="faq-content-{{ $item->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#faqlist">
                                            <div class="accordion-body">
                                                <!-- Aquí se mostrará la información detallada del servicio -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <ul class="list-group">
                                                            <li class="list-group-item"><strong>ID:</strong> {{ $item->id }}</li>
                                                            <li class="list-group-item"><strong>Título:</strong> {{ $item->titulo }}</li>
                                                            <li class="list-group-item"><strong>Descripción:</strong> {{ $item->descripción }}</li>
                                                            <li class="list-group-item"><strong>Creado en:</strong> {{ $item->created_at }}</li>
                                                            <li class="list-group-item"><strong>Actualizado en:</strong> {{ $item->updated_at }}</li>
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
                                    <h5 class="card-title bg-warning">No existe ningun servicio para mostrar</h5>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        // Manejar el evento de clic en los botones del acordeón
                        $('.accordion-button').click(function() {
                            // Obtener el ID del servicio desde el atributo data-bs-target del botón
                            var servicioId = $(this).data('bs-target').replace('#faq-content-', '');

                            // Hacer una solicitud AJAX para obtener la información del servicio
                            $.ajax({
                                url: '/servicios/' + servicioId,
                                type: 'GET',
                                dataType: 'json',
                                success: function(data) {
                                    // Actualizar el contenido de la sección de respuesta con la información del servicio
                                    $('#faq-content-' + servicioId + ' .accordion-body').html(`
                                    <ul>
                                        <li><strong>ID:</strong> ${data.id}</li>
                                        <li><strong>Título:</strong> ${data.titulo}</li>
                                        <li><strong>Descripción:</strong> ${data.descripción}</li>
                                        <li><strong>Creado en:</strong> ${data.created_at}</li>
                                        <li><strong>Actualizado en:</strong> ${data.updated_at}</li>
                                    </ul>
                                `);
                                },
                                error: function(xhr, status, error) {
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
