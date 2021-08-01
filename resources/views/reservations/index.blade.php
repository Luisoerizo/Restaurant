<x-app-layout> 
    <div class="h-full bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
      <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
              <div class="max-w-md mx-auto">
                  @if (session('info'))
                  <div
                      class="bg-green-200 px-6 py-4 my-4 rounded-md text-lg flex items-center w-full">
                      <span class="text-green-800 text-center">{{ session('info') }}</span>
                  </div>
              @endif
                  <div class="flex items-center space-x-5">
                      <div
                          class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                          📆</div>
                      <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                          <h2 class="leading-relaxed">Busca tu reservación</h2>
                          <p class="text-sm text-gray-500 font-normal leading-relaxed">Rellena los siguientes datos
                              para buscar tu reservación.</p>
                      </div>
                  </div>
                  <div class="divide-y divide-gray-200">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="flex flex-col">
                              {!! Form::open(['route'=> 'reservation.buscador']) !!}
                              {!! Form::label('reference', 'Número de referencia', ['class' => 'leading-loose']) !!}
                              {!! Form::text('reference', null, ['class' => 'px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600', 'placeholder' => 'alfo973hdnasjg4y31jd', 'required']) !!}
                              @error('client_name')
                                  <p class="text-red-700">{{ $message }}</p>
                              @enderror
                          </div>
                      </div>
                      <div class="pt-4 flex items-center space-x-4">
                          <a href="{{route('posts.index')}}"
                              class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"></path>
                              </svg> Cancelar
                          </a>
                          {!! Form::submit('Buscar reservación', ['class' => 'bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md']) !!}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </x-app-layout>
  
  