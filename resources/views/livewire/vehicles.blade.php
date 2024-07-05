<article class="flex flex-row">
<div class="flex flex-col gap-5 p-4 m-4 text-white bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 w-5/12 sm:w-3/12 justify-center">
    <img class="aspect-video w-full h-1/1" src="http://localhost:8000/img/infernus.png" alt="">
    <div class="flex flex-col">
        <span class="text-white text-xl mb-2">Vehículo: Infernus</span>
        <span>Precio: 20 Diamantes</span>
        <span>Combustible: 100 litros</span>
        <span>Velocidad Máxima: 200km/h</span>
    </div>
<div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">

    <button @click="showModal = true" class="w-full flex justify-center gap-3 font-semibold bg-blue-500 hover:bg-blue-600 transition-all duration-200 ease-out py-3 px-6 text-white text-xl rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
        </svg>

    Adquirir
    </button>
   <div x-cloak class="overlay overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"  x-transition>
        <div x-cloak x-show="showModal" class="flex flex-col relative text-center bg-white dark:bg-gray-800 h-fit w-11/12 md:w-6/12 mx-auto rounded shadow-lg p-4 dark:text-white rounded-md"   @click.away="showModal = false">
            <button class="absolute top-0 right-0 my-2 mx-3 w-5 bg-blue-500" @click="showModal=false">X</button>
            <h1 class="text-4xl my-3 text-center">¡ADVERTENCIA!</h1>
            <span>Este vehículo tiene un costo de <span class="text-blue-600">20</span> diamantes</span>
            @if($user[0]->p_id<20)
            <span>No tienes diamantes suficientes para comprar este vehículo.</span>
            @else
            <button @disabled($user[0]->p_id<20) class="disabled:cursor-not-allowed disabled:bg-gray-400 disabled:opacity-50 my-4 font-semibold bg-blue-500 hover:bg-blue-600 transition-all duration-200 ease-out py-3 px-6 text-white text-xl rounded-md">Pagar</button>
            @endif
        </div>
    </div>
</div>
</div>
<div class="flex flex-col gap-5 p-4 m-4 text-white bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 w-5/12 sm:w-3/12 justify-center">
    <img class="aspect-video w-full h-1/1" src="http://localhost:8000/img/infernus.png" alt="">
    <div class="flex flex-col">
        <span class="text-white text-xl mb-2">Vehículo: Infernus</span>
        <span>Precio: 400$</span>
        <span>Combustible: 100 litros</span>
        <span>Velocidad Máxima: 200km/h</span>
    </div>
    <button class="flex justify-center gap-3 font-semibold bg-blue-500 hover:bg-blue-600 transition-all duration-200 ease-out py-3 px-6 text-white text-xl rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
          <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
        </svg>

    Adquirir
    </button>
</div>
</article>