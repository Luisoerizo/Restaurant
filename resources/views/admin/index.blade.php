@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
    <h1>Administrador</h1>
@stop

@section('content')


    <div class="row">
        <div class="col-md-8">
            {{-- card-boxes --}}
            <div class="row">
                <div class="col">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                @foreach ($lastWeekReservations as $lastWeekReservation)
                                    {{ $lastWeekReservation->total }}
                                @endforeach
                            </h3>

                            <p>Reservaciones los últimos 7 días</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <a href="{{ route('admin.reservations.index') }}" class="small-box-footer">
                            Más información <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>
                                @foreach ($lastMonthPosts as $lastMonthPost)
                                    {{ $lastMonthPost->total }}
                                @endforeach
                            </h3>

                            <p>Posts publicados los últimos 30 días</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <a href="{{ route('admin.posts.index') }}" class="small-box-footer">
                            Más información <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Posts totales</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="pieChart"></canvas>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
                <span class="info-box-icon"><i class="fas fa-tag"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Etiquetas</span>
                    <span class="info-box-number">
                        @foreach ($tags as $tag)
                            {{ $tag->total }}
                        @endforeach
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fab fa-buffer"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Categorías</span>
                    <span class="info-box-number">
                        @foreach ($categories as $category)
                            {{ $category->total }}
                        @endforeach
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fas fa-clipboard-list"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Posts </span>
                    <span class="info-box-number">
                        @foreach ($posts as $post)
                            {{ $post->total }}
                        @endforeach
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fas fa-clipboard-list"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Reservaciones</span>
                    <span class="info-box-number">
                        @foreach ($reservations as $reservation)
                            {{ $reservation->total }}
                        @endforeach
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
                    <!-- PRODUCT LIST -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Posts añadidos recientemente</h3>
        
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0" style="display: block;">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                                <!-- item -->
                                @foreach ($lastFourPosts as $lastPost)
                                    <li class="item">
                                        <div class="product-img">
                                            @if ($lastPost->image)
                                                <img src="{{ Storage::url($lastPost->image->url) }}" class="img-size-50">
                                            @else
                                                <img src="https://image.freepik.com/vector-gratis/personas-que-buscan-carpeta-pagina-destino_52683-23928.jpg"
                                                    class="img-size-50">
                                            @endif
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route('admin.posts.show', $lastPost) }}"
                                                class="product-title">{{ $lastPost->name }}
                                                <span
                                                    class="badge badge-secondary float-right">{{ $lastPost->category->name }}</span></a>
                                            <span class="product-description">
                                                {!! $lastPost->extract !!}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                                <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center" style="display: block;">
                            <a href="{{ route('admin.posts.index') }}">Ver todos los productos</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
        </div>
    </div>


@stop


@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('admin.chart') }}",
            type: 'POST',
            dataType: "json",
            success: function(data) {
                var status = [];
                var total = [];
                for (var i in data) {
                    status.push(data[i].status);
                    total.push(data[i].total);
                }
                var ctx = document.getElementById('pieChart');
                var MyChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Activo','Inactivo'],
                        datasets: [{
                            label: 'Total',
                            data: total,
                            backgroundColor: [
                                'rgba(0, 179, 0, 0.2)',
                                'rgba(179, 0, 0, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(0, 179, 0, 1)',
                                'rgba(179, 0, 0, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                });
            },
            error: function(error) {
                console.log(error)
            }
        });
    </script>
@endsection
