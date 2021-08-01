<x-app-layout>
    <div class=" bg-gray-100 py-6 flex flex-col justify-center sm:py-12 ">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10 ">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div
                            class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                            📆</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Tu reservación</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Los datos de tu reservación son
                                los siguientes.</p>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label class="leading-loose font-bold">Nombre:</label>
                                <span
                                    class="text-lg  px-4 py-2 w-full text-gray-600 capitalize">{{ $reservation->client_name }}</span>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose font-bold">Email:</label>
                                <span class="text-lg  px-4 py-2 w-full text-gray-600">{{ $reservation->email }}</span>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose font-bold">Comensales:</label>
                                <span
                                    class="text-lg  px-4 py-2 w-full text-gray-600">{{ $reservation->persons }}</span>
                            </div>
                            <div class="flex flex-col">
                                <label class="leading-loose font-bold">Fecha de reservación:</label>
                                <span class="text-lg  px-4 py-2 w-full text-gray-600">{{ $reservation->date }}</span>
                                <label class="leading-loose font-bold">Hora de reservación:</label>
                                <span class="text-lg  px-4 py-2 w-full text-gray-600">{{ $reservation->time }}</span>
                            </div>

                            <div class="flex flex-col">
                                <label class="leading-loose font-bold">Número de referencia:</label>
                                <span
                                    class="text-lg  px-4 py-2 w-full text-gray-600">{{ $reservation->reference }}</span>
                            </div>
                        </div>
                        <div class="">

                        </div>


                        <div class="sm:flex sm:flex-col lg:flex sm:items-center sm:justify-center lg:flex-row ">
                            <a href="{{ route('posts.index') }}"
                                class="flex justify-center items-center md:w-full sm:w-full  text-gray-900 px-4 py-3 rounded-md focus:outline-none mx-4 my-2">
                                Regresar
                            </a>
                            <a href="{{ route('reservations.edit',$reservation) }}"
                                class="bg-blue-500 flex justify-center items-center md:w-full sm:w-full  text-white px-4 py-3 rounded-md focus:outline-none mx-4 my-2">
                                editar
                            </a>
                            <form action="{{ route('reservations.destroy', $reservation) }}" method="POST"
                                class="bg-red-500 flex justify-center items-center md:w-full sm:w-full  text-white px-4 py-3 rounded-md focus:outline-none mx-4 my-2">
                                @csrf
                                @method('delete')
                                <button type="submit" class="">Eliminar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
