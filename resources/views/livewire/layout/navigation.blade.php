<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;
use App\Models\User;
new class extends Component
{
    /**
     * Log the current user out of the application.
     *
     */


    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 sm:h-screen">
  <div class="overflow-y-auto w-full flex flex-row justify-evenly items-start sm:flex sm:flex-col sm:items-center sm:justify-start sticky text-white text-center w-full sm:h-full sm:py-4 font-sans">
    <div class="sm:hidden w-full" x-data="{ open: false }">
      <button x-on:click="open = ! open" class="flex flex-row justify-center items-center p-3 text-lg font-semibold mb-2">
        <div class="py-2">
          <img class="w-20 p-3 sm:p-0 sm:w-28 rounded-full" src="/img/user_photo.jpg" alt="User Photo">
        </div>
        {{Auth::user()->p_name}}
            <svg class="fill-current float-right h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
      </button>
      <div x-show="open" x-transition.duration.300ms class="block w-full">
        <x-nav-link class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" :href="route('main')" :active="request()->routeIs('main')" wire:navigate>
          <span class="flex items-center h-full w-7">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
            </svg>
          </span> Principal
        </x-nav-link>
        <x-nav-link class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" :href="route('account')" :active="request()->routeIs('account')" wire:navigate>
          <span class="flex items-center h-full w-7">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
            </svg>
          </span> Perfil
        </x-nav-link>
        <div class="w-full" x-data="{ open: false }">
          <button @click="open = ! open" class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" {{-- :href="route('shop')" :active="request()->routeIs('shop')" --}}>
            <span class="flex items-center w-7">
              <svg class="w-7" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path>
              </svg>
            </span> Tienda <div class="w-full">
              <svg class="fill-current float-right h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </div>
          </button>
          <div x-show="open" x-transition.scale.80 x-transition.duration.300ms class="pb-2 border-b border-gray-600 w-full">
            <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
              </svg> Vehículos </a>
            <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5" viewBox="0 0 2048 2048">
                <path fill="currentColor" d="m2048 384l-128 512h-256v1024H384V896H128L0 384l768-256q0 53 20 99t55 82t81 55t100 20q53 0 99-20t82-55t55-81t20-100l768 256zm-153 84l-524-175q-24 50-60 90t-82 69t-97 44t-108 16q-56 0-108-15t-97-44t-81-69t-61-91L153 468l75 300h284v1024h1024V768h284l75-300z" />
              </svg> Ropa </a>
            <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="-2 -5 24 24">
                <path fill="currentColor" d="M2 0h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 2v10h16V2H2zm3 6h6a1 1 0 0 1 0 2H5a1 1 0 1 1 0-2zm10-5h2v2h-2V3z" />
              </svg> Membresía VIP </a>
          </div>
        </div>
        <x-nav-link class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" :href="route('updates')" :active="request()->routeIs('updates')" wire:navigate>
          <span class="flex items-center h-full w-7">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
            </svg>
          </span> Novedades
        </x-nav-link>
        <button class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" wire:click="logout">
          <span class="flex items-center h-full w-7">
            <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"></path>
            </svg>
          </span> Salir </button>
      </div>
    </div>
       <div class="hidden sm:block py-1">
          <img class="w-20 p-3 sm:p-0 sm:w-28 rounded-full" src="/img/user_photo.jpg" alt="User Photo">
        </div>
    <div class="py-3 mb-3 hidden sm:block">
      <h2 class="text-lg font-semibold mb-2">{{Auth::user()->p_name}}</h2>
      <span class="bg-blue-500 p-1 rounded-md my-1">Nivel: {{Auth::user()->p_score}}</span>
    </div>
    <div class="hidden sm:block w-full">
      <x-nav-link class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" :href="route('main')" :active="request()->routeIs('main')" wire:navigate>
        <span class="flex items-center h-full w-7">
          <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
          </svg>
        </span> Principal
      </x-nav-link>
      <div class="w-full" x-data="{ open: false }">
        <button @click="open = ! open" class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" {{-- :href="route('shop')" :active="request()->routeIs('shop')" --}}>
          <span class="flex items-center">
          <svg class="w-7" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
          </svg>
          </span> 
          Cuenta 
          <div class="w-full">
            <svg class="fill-current float-right h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
        </button>
        <div x-show="open" x-transition.scale.80 x-transition.duration.300ms class="pb-2 border-b border-gray-600 w-full">
          <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">

          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
              <path fill="currentColor" d="M14 2h-4v2H8v2H6v2H4v2H2v12h20V10h-2V8h-2V6h-2V4h-2V2zm0 2v2h2v2h2v4h-2v2h-2v2h-4v-2H8v-2H6V8h2V6h2V4h4zm-8 8v2h2v2h2v2h4v-2h2v-2h2v-2h2v8H4v-8h2z"/>
          </svg>
            Cambiar correo 
            </a>
          <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 36 36">
              <path fill="currentColor" d="M29.29 5H27v2h2v25H7V7h2V5H7a1.75 1.75 0 0 0-2 1.69v25.62A1.7 1.7 0 0 0 6.71 34h22.58A1.7 1.7 0 0 0 31 32.31V6.69A1.7 1.7 0 0 0 29.29 5Z" class="clr-i-outline clr-i-outline-path-1"/>
              <path fill="currentColor" d="M26 7.33A2.34 2.34 0 0 0 23.67 5h-1.8a4 4 0 0 0-7.75 0h-1.79A2.34 2.34 0 0 0 10 7.33V11h16ZM24 9H12V7.33a.33.33 0 0 1 .33-.33H16V6a2 2 0 0 1 4 0v1h3.67a.33.33 0 0 1 .33.33Z" class="clr-i-outline clr-i-outline-path-2"/>
              <path fill="currentColor" d="M11 14h14v2H11z" class="clr-i-outline clr-i-outline-path-3"/>
              <path fill="currentColor" d="M11 18h14v2H11z" class="clr-i-outline clr-i-outline-path-4"/>
              <path fill="currentColor" d="M11 22h14v2H11z" class="clr-i-outline clr-i-outline-path-5"/>
              <path fill="currentColor" d="M11 26h14v2H11z" class="clr-i-outline clr-i-outline-path-6"/>
              <path fill="none" d="M0 0h36v36H0z"/>

          </svg>
            Cambiar nombre 
            </a>
          <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="-2 -5 24 24">
              <path fill="currentColor" d="M2 0h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 2v10h16V2H2zm3 6h6a1 1 0 0 1 0 2H5a1 1 0 1 1 0-2zm10-5h2v2h-2V3z" />
            </svg> Cambiar contraseña </a>
          <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
              <path fill="currentColor" d="M17 1H7c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 18H7V5h10v14zM12 6.72c-1.96 0-3.5 1.52-3.5 3.47h1.75c0-.93.82-1.75 1.75-1.75s1.75.82 1.75 1.75c0 1.75-2.63 1.57-2.63 4.45h1.76c0-1.96 2.62-2.19 2.62-4.45c0-1.96-1.54-3.47-3.5-3.47zM11 16h2v2h-2v-2z"/>
          </svg>
            Cambiar numero 
            </a>
          <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72Z"/>
              <path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" d="M336 304c-65.17 0-127.84 32.37-143.54 95.41c-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304Z"/>
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94Z"/>
              <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M206 306c-18.05-8.27-37.93-11.45-59-11.45c-52 0-102.1 25.85-114.65 76.2c-1.65 6.66 2.53 13.25 9.37 13.25H154"/>
          </svg>
            Cambiar sexo
          </a>
        </div>
      </div>
      <div class="w-full" x-data="{ open: false }">
        <button @click="open = ! open" class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" {{-- :href="route('shop')" :active="request()->routeIs('shop')" --}}>
          <span class="flex items-center w-7">
            <svg class="w-7" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"></path>
            </svg>
          </span>
          Tienda 
          <div class="w-full">
            <svg class="fill-current float-right h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div>
        </button>
        <div x-show="open" x-transition.scale.80 x-transition.duration.300ms class="pb-2 border-b border-gray-600 w-full">
          <x-nav-link class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" :href="route('vehicles')" :active="request()->routeIs('vehicles')" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
            </svg>

              Vehículos 
          </x-nav-link>
          <x-nav-link class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" :href="route('Coins')" :active="request()->routeIs('Coins')" wire:navigate>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 21 21">
                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15.5 4l3 4l-8 10l-8-10l3.009-4zm-13 4h16m-11 0l3 10m3-10l-3 10"/>
                    <path d="M5.509 4L7.5 8l3-4l3 4l2-4"/>
                </g>
            </svg>

              Comprar Diamantes 
          </x-nav-link>
          <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-5" viewBox="0 0 2048 2048">
              <path fill="currentColor" d="m2048 384l-128 512h-256v1024H384V896H128L0 384l768-256q0 53 20 99t55 82t81 55t100 20q53 0 99-20t82-55t55-81t20-100l768 256zm-153 84l-524-175q-24 50-60 90t-82 69t-97 44t-108 16q-56 0-108-15t-97-44t-81-69t-61-91L153 468l75 300h284v1024h1024V768h284l75-300z" />
            </svg> Ropa </a>
          <a class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" href="">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="-2 -5 24 24">
              <path fill="currentColor" d="M2 0h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 2v10h16V2H2zm3 6h6a1 1 0 0 1 0 2H5a1 1 0 1 1 0-2zm10-5h2v2h-2V3z" />
            </svg> Membresía VIP </a>
        </div>
      </div>
      <x-nav-link class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" :href="route('updates')" :active="request()->routeIs('updates')" wire:navigate>
        <span class="flex items-center h-full w-7">
          <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
          </svg>
        </span> Novedades
      </x-nav-link>
      <button class="flex items-center text-left gap-3 py-3 mx-auto transition-all duration-300 px-4 rounded-md hover:bg-slate-950 w-full" wire:click="logout">
        <span class="flex items-center h-full w-7">
          <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25"></path>
          </svg>
        </span> Salir </button>
    </div>
  </div>
</nav>