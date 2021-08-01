<x-app-layout>
    <div class="container py-8">
        <div class="flex flex-col justify-center h-44 mb-8 lg:h-96  w-full rounded-md " style="background-image: url(https://media-cdn.tripadvisor.com/media/photo-m/1280/1a/e4/f3/d8/interior-porfirios-puebla.jpg)">
            <h1 class="text-6xl text-center uppercase text-white bg-black bg-opacity-20">Tu Restaurante</h1>
        </div>
        <div class="flex flex-col justify-center mb-4 items-center">
            <a href="{{route('reservations.create')}}" class="text-blue-800  text-3xl uppercase leading-loose">
                ¿Aún no tienes tu reservación? ¡Creala ahóra!
            </a>
            <a href="{{route('reservations.index')}}" class="text-blue-800 text-base uppercase leading-loose mb-2">¿Ya tienes una? ¡Revísala aquí!</a>
            @if (session('info'))
            <div
                class="bg-green-200 px-6 py-4 my-4 rounded-md text-lg flex flex-col justify-center items-center w-full text-center">
                <span class="text-green-800 ">{{ session('info') }}</span>
            </div>
        @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 ">
            @foreach ($posts as $post)
                <article class="shadow-lg rounded-md w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 lg:col-span-2 @endif" style="background-image: url(@if($post->image){{Storage::url($post->image->url)}} @else https://image.freepik.com/vector-gratis/personas-que-buscan-carpeta-pagina-destino_52683-23928.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                        <a href="{{route('posts.category',$post->category)}}" class="inline-block px-3 my-2 h-6 bg-gray-500 bg-opacity-80 text-white rounded-full"> {{$post->category->name}}</a>
                        </div>
                        <h1 class="text-2xl my-3 text-white leading-8 font-bold">
                            <a href="{{ route('posts.show',$post)}}">
                                {{$post->name}}
                            </a>
                        </h1>
                        <div >
                            <span class="text-base text-white">{{$post->extract}}</span>
                        </div>
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{route('posts.tag',$tag)}}" class="inline-block px-3 my-3 h-6 bg-{{$tag->color}}-600  bg-opacity-80 text-white rounded-r-lg">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>
