

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="bg-white dark:bg-gray-800 max-w-xs">
                <div class="text-white m-3 p-3">

                    <button onclick="window.location.href='samp://server.sampcloud.online:7777'" class="bg-blue-500 my-3 p-3 font-semibold rounded-md w-full">Jugar</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
