<div class="flex justify-center items-center h-full">
    <div class="w-10/12 md:w-4/12 text-center">
        <form action="" class="p-4">
            <select class="my-3 bg-transparent dark:text-white" name="coins">
                <option class="bg-gray-800 dark:text-white" value="1">5 Diamantes - 5USD</option>
                <option class="bg-gray-800 dark:text-white" value="2">10 Diamantes - 10USD</option>
                <option class="bg-gray-800 dark:text-white" value="3">20 Diamantes - 20USD</option>
            </select>
            <button wire:click.prevent="$dispatch('open-modal','payment')" class="w-full flex justify-center gap-3 font-semibold bg-blue-500 hover:bg-blue-600 transition-all duration-200 ease-out py-3 px-6 text-white text-xl rounded-md">Comprar paquete</button>

        </form>
    </div>
    <x-modal name="payment">
    
    <div class="flex flex-col relative text-center bg-white dark:bg-gray-800 h-fit w-full mx-auto rounded shadow-lg p-4 dark:text-white rounded-md">
        <h1 class="text-3xl dark:text-white w-full text-center my-3">Métodos de Pago</h1>
        <nav>
            <ul class="flex flex-row justify-center gap-3">
                <li class="my-3 w-full flex justify-center gap-3 font-semibold bg-blue-500 hover:bg-blue-600 transition-all duration-200 ease-out py-3 px-6 text-white text-xl rounded-md cursor-pointer">Paypal</li>
                <li class="my-3 w-full flex justify-center gap-3 font-semibold bg-blue-500 hover:bg-blue-600 transition-all duration-200 ease-out py-3 px-6 text-white text-xl rounded-md cursor-pointer">Credit Card</li>
            </ul>
        </nav>
    </div>
</x-modal>
</div>