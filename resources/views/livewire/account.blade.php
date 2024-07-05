@php
function nation($nation)
{
    $text='';
    switch($nation)
    {
        case 0: $text = 'Los santos';
        break;
        case 1: $text = 'San Fierro';
        break;
        case 2: $text = 'Las venturas';
        break;
    }
    return $text;
}
@endphp

<div>   
    <div class="container w-3/12 mx-auto h-full">
        <div class="p-5">
            <div class="text-gray-800 dark:text-gray-200">
                <table class="table table-auto">
                    <tbody>
                    @foreach($data as $player)
                    <tr>
                    <td class="p-5  border-b border-slate-700">Nombre:</td>
                    <td class="p-5  border-b border-slate-700">{{$player->p_name}}</td>
                    <td class="p-5  border-b border-slate-700">Email:</td>
                    <td class="p-5  border-b border-slate-700"> {{$player->p_email}}</td>
                    </tr>

                    <tr>
                    <td class="p-5  border-b border-slate-700">DNI:</td>
                    <td class="p-5  border-b border-slate-700">{{number_format($player->p_dni,0,'.','.')}}</td>
                    <td class="p-5  border-b border-slate-700">Nacionalidad:</td>
                    <td class="p-5  border-b border-slate-700">{{nation($player->p_nacionalidad)}}</td>
                    </tr>
                    <tr>
                    <td class="p-5  border-b border-slate-700">Sexo:</td>
                    <td class="p-5  border-b border-slate-700">{{$player->p_sexo?'Femenino':'Masculino'}}</td>
                    <td class="p-5  border-b border-slate-700">Nivel:</td>
                    <td class="p-5  border-b border-slate-700">{{$player->p_score}}</td>
                    </tr>
                    <tr>
                    <td class="p-5  border-b border-slate-700">Dinero:</td>
                    <td class="p-5  border-b border-slate-700">{{number_format($player->p_dinero,0,'.','.')}}$</td>
                    <td class="p-5  border-b border-slate-700">Banco:</td>
                    <td class="p-5  border-b border-slate-700">{{number_format($player->p_dinero,0,'.','.')}}$</td>                    
                    </tr>
                    <tr>
                    <td class="p-5  border-b border-slate-700">Sed:</td>
                    <td class="p-5  border-b border-slate-700">{{$player->p_sed}}%</td>
                    <td class="p-5  border-b border-slate-700">Hambre:</td>
                    <td class="p-5  border-b border-slate-700">{{$player->p_hambre}}%</td>
                    </tr>
                    <tr>
                    <td class="p-5  border-b border-slate-700">Salud:</td>
                    <td class="p-5  border-b border-slate-700">{{$player->p_health}}%</td>
                    <td class="p-5  border-b border-slate-700">Chaleco:</td>
                    <td class="p-5  border-b border-slate-700">{{$player->p_armour}}%</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
