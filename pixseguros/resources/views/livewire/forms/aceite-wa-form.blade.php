<?php

use Livewire\Component;
use App\Models\TermosWa;

new class extends Component 
{
    public $mostrarAceite = false;
    public $aceito = false;

    public function mostrarTelaAceite()
    {
        $this->mostrarAceite = true;
    }

    public function fecharTelaAceite()
    {
        // Lógica necessária antes de fechar o modal

        $this->mostrarAceite = false; // Fechar o modal
    }

    public function aceitarTermos()
    {
       TermosWa::create([
            'aceito' => true,
        ]);

        $this->aceito = true;
        $this->fecharTelaAceite(); // Fechar o modal após aceitar os termos
    }

    public function render()
    {
        return view('livewire.forms.aceite-wa-form');
    }
};
?>

<div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false" :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
    @if (!$aceito)
        @if ($mostrarAceite)
            <div x-show="modalOpen" class="fixed top-0 left-0 z-99 flex items-center justify-center w-screen h-screen" x-cloak>
                <div x-show="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="modalOpen=false" class="absolute inset-0 w-full h-full bg-white backdrop-blur-xs bg-opacity-70"></div>
                <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95" class="relative w-full py-6 bg-white border shadow-lg px-7 border-neutral-200 sm:max-w-lg sm:rounded-lg">
                    <div class="flex items-center justify-between pb-3">
                        <h3 class="text-lg font-semibold">Seja Bem-Vindo(a)</h3>
                        <button wire:click="fecharTelaAceite" @click="modalOpen=false" class="inline-flex items-center justify-center p-2 rounded-md text-secondary-700 hover:text-primary-600 focus:outline-hidden focus:text-primary-600 transition duration-150 ease-in-out">
                            <svg class="h-8 w-8 font-bold" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        
                    </div>
                <div class="relative w-auto pb-8">
                <x-checkbox  wire:model="aceito" name="aceito" id="aceito" name="aceito" :value="old('aceito')" required />
                <span class="ml-2 text-lg">
                    Eu aceito os
                    <a href="{{ ('termos-de-servicos') }}" class="underline items-center justify-center rounded-md border border-transparent bg-white text-lg font-medium text-primary-600 hover:bg-primary-50">Termos de Serviços</a> e <a href="{{ ('politica-de-privacidade') }}" class="underline items-center justify-center rounded-md border border-transparent bg-white text-lg font-medium text-primary-600 hover:bg-primary-50">Política de Privacidade</a>.
                
                </span>
                
                <div class="flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-4 mt-4">
                    <button wire:click="fecharTelaAceite" @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-2 mt-4 text-lg font-medium transition-colors border rounded-md focus:outline-hidden focus:ring-2 focus:ring-primary-300 focus:ring-offset-2">Cancelar</button>
                    <a wire:click="aceitarTermos" href="https://wa.me/5531984415566" @click="modalOpen=false" type="button" class="inline-flex items-center justify-center h-10 px-4 py-3 mt-4 text-lg font-medium text-white transition-colors border border-transparent rounded-md focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2 bg-primary-700 hover:bg-primary-700">Aceitar</a>
                </div>
            </div>
        @else
            <i wire:click="mostrarTelaAceite" @click="modalOpen=true" class="fa-brands fa-whatsapp text-primary-600 fa-4x inline mr-0.5 cursor-pointer"></i>
        @endif
    @endif
    </div>
    </template>
</div>