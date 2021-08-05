<div class="card">
    <div class="card-header">
        <label>
        Buscar registros
        </label>
        <input wire:model="search" type="text"placeholder="Ingresa el nombre del cliente" class="form-control">
    </div>
    @if ($reservations->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Comensales</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    
                    <th colspan="2">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{$reservation->client_name}}</td>
                        <td>{{$reservation->persons}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->time}}</td>

                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.reservations.edit',$reservation)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.reservations.destroy',$reservation)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$reservations->links()}}
    </div>
    @else
        <div class="card-body text-center g">
            <span class="text-muted font-italic">No se han encontrado registros</span>
        </div>
    @endif


</div>
