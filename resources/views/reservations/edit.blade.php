<x-app-layout>
    <div class="h-full bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    @if (session('info'))
                        <div
                            class="bg-green-200 px-6 py-4 my-4 rounded-md text-lg flex items-center w-full">
                            <span class="text-green-800">{{ session('info') }}</span>
                        </div>
                    @endif
                    <div class="flex items-center space-x-5">
                        <div
                            class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                            📆</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Crear una reservación</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Rellena los siguientes datos
                                para confirmar tu reservación.</p>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                {!! Form::model($reservation, ['route' => ['reservations.update', $reservation], 'method' => 'put']) !!}
                                {!! Form::label('client_name', 'Nombre del cliente', ['class' => 'leading-loose']) !!}
                                {!! Form::text('client_name', $reservation->client_name, ['class' => 'px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 capitalize', 'placeholder' => 'Nombre del cliente', 'required']) !!}
                                @error('client_name')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                {!! Form::label('persons', 'Comensales', ['class' => 'leading-loose']) !!}
                                {!! Form::number('persons', null, ['class' => 'px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600', 'placeholder' => 'Número de comensales', 'min' => '1', 'required']) !!}
                                @error('persons')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                {!! Form::label('date', 'Fecha', ['class' => 'leading-loose']) !!}
                                {!! Form::date('date', null, ['class' => 'px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600', 'required']) !!}
                                @error('date')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                {!! Form::label('time', 'Hora', ['class' => 'leading-loose']) !!}
                                {!! Form::time('time', null, ['class' => 'px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600', 'required']) !!}
                                @error('time')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-col">
                                {!! Form::label('email', 'Correo electrónico', ['class' => 'leading-loose']) !!}
                                {!! Form::email('email', null, ['class' => 'px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600', 'min' => '2021-07-29', 'placeholder' => 'Jhondiggle@example.com', 'required']) !!}
                                @error('email')
                                    <p class="text-red-700">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{ route('reservations.show', $reservation) }}"
                                class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">Regresar</a>
                            {!! Form::submit('Actualizar', ['class' => 'bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
