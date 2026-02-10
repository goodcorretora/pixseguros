<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(): void
    {
        Auth::logout();
        Session::invalidate();
        Session::regenerateToken();
        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-secondary-100 border-b border-secondary-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-secondary-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-1 sm:-my-px sm:ml-2 lg:flex ">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>

                    <div class="relative" x-data="{ open: false }" @click.outside="open=false">
                        <button @click="open = !open"
                            class="text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md px-2 py-2 text-base mt-3">
                            <span href="{{ ('consorcio') }}">Consórcio</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-6 h-6 mt-1 -ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-40 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="w-96 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                                <x-layouts.link-header href="{{ ('consorcio-de-bike') }}"
                                    :value="__('Consórcio Bike')" />
                                <x-layouts.link-header href="{{ ('consorcio-de-imoveis') }}"
                                    :value="__('Consórcio de Imóveis')" />
                                <x-layouts.link-header href="{{ ('consorcio-de-motos') }}"
                                    :value="__('Consórcio de Motos')" />
                                <x-layouts.link-header href="{{ ('consorcio-de-maquinas-agricolas') }}"
                                    :value="__('Consórcio de Máquinas Agrícolas')" />
                                <x-layouts.link-header href="{{ ('consorcio-de-servicos') }}"
                                    :value="__('Consórcio de Serviços')" />
                                <x-layouts.link-header href="{{ ('consorcio-sustentavel-de-placas-solares') }}"
                                    :value="__('Consórcio Sustentável')" />
                                <x-layouts.link-header href="{{ ('consorcio-de-veiculos') }}"
                                    :value="__('Consórcio de Veículos')" />
                                <x-layouts.link-header href="{{ ('consorcio-de-veiculos-pesados') }}"
                                    :value="__('Consórcio de Veículos Pesados')" />
                                <x-layouts.link-header href="{{ ('solicitar-consorcio') }}"
                                    :value="__('Solicitar Consórcio')" />
                            </div>
                        </div>
                    </div>

                    <div class="relative" x-data="{ open: false }" @click.outside="open=false">
                        <button @click="open = !open"
                            class="text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md px-2 py-2 text-base mt-3">
                            <span href="{{ ('financeiro') }}">Financeiro</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-6 h-6 mt-1 -ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-40 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="w-96 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                                <x-layouts.link-header href="{{ ('auto-credito') }}" :value="__('Auto Crédito')" />
                                <x-layouts.link-header href="{{ ('carro-facil') }}" :value="__('Carro Fácil')" />
                                <x-layouts.link-header href="{{ ('carro-facil-seminovo') }}"
                                    :value="__('Carro Fácil Seminovo')" />
                                <x-layouts.link-header href="{{ ('cartao-de-credito') }}"
                                    :value="__('Cartão de Crédito')" />
                                <x-layouts.link-header
                                    href="{{ ('https://porto.vc/cartao_de_credito_porto_bank_2be6eebf43f44ccaa9baf1e0b867cdc7') }}"
                                    :value="__('Cartão de Crédito Porto')" />
                                <x-layouts.link-header href="{{ ('consignado') }}" :value="__('Consignado')" />
                                <x-layouts.link-header href="{{ ('credito-com-garantia-imobiliaria') }}"
                                    :value="__('Crédito com Garantia Imobiliária')" />
                                <x-layouts.link-header href="{{ ('credito-pessoal') }}"
                                    :value="__('Crédito Pessoal')" />
                                <x-layouts.link-header href="{{ ('emprestimo') }}" :value="__('Empréstimo')" />
                                <x-layouts.link-header href="{{ ('emprestimo-com-garantia-de-veiculo') }}"
                                    :value="__('Empréstimo com Garantia de Veículo')" />
                                <x-layouts.link-header href="{{ ('seguro-fianca') }}" :value="__('Fiança Locatícia')" />
                                <x-layouts.link-header href="{{ ('financiamento-de-imoveis') }}"
                                    :value="__('Financiamento de Imóveis')" />
                                <x-layouts.link-header href="{{ ('financiamento-de-veiculos') }}"
                                    :value="__('Financiamento de Veículos')" />
                                <x-layouts.link-header href="{{ ('plano-saude-pets') }}" :value="__('Petlove Saude')" />
                                <x-layouts.link-header href="{{ ('portabilidade') }}" :value="__('Portabilidade')" />
                                <x-layouts.link-header href="{{ ('refinanciamento') }}"
                                    :value="__('Refinanciamento')" />
                                <x-layouts.link-header href="{{ ('renegociacao') }}" :value="__('Renegociação')" />
                                <x-layouts.link-header href="{{ ('solucoes-para-alugar') }}"
                                    :value="__('Soluções para Alugar')" />
                                <x-layouts.link-header href="{{ ('tech-facil') }}" :value="__('Tech Fácil')" />
                                <x-layouts.link-header href="{{ ('titulo-de-capitalizacao-para-aluguel') }}"
                                    :value="__('Título de Capitalização para Aluguel')" />
                                <x-layouts.link-header href="{{ ('solicitar-cartao-de-credito') }}"
                                    :value="__('Solicitar Cartão de Crédito')" />
                                <x-layouts.link-header href="{{ ('solicitar-emprestimo') }}"
                                    :value="__('Solicitar Empréstimo')" />
                                <x-layouts.link-header href="{{ ('solicitar-emprestimo') }}"
                                    :value="__('Solicitar Consignado')" />
                            </div>
                        </div>
                    </div>

                    <div class="relative" x-data="{ open: false }" @click.outside="open=false">
                        <button @click="open = !open"
                            class="text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md px-2 py-2 text-base mt-3">
                            <span href="{{ ('plano-de-saude') }}">Plano de Saúde</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-6 h-6 mt-1 -ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-40 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="w-96 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                                <x-layouts.link-header href="{{ ('plano-de-saude-coletivo') }}"
                                    :value="__('Plano de Saúde Coletivo')" />
                                <x-layouts.link-header href="{{ ('plano-de-saude-empresarial') }}"
                                    :value="__('Plano de Saúde Empresarial')" />
                                <x-layouts.link-header href="{{ ('plano-de-saude-individual') }}"
                                    :value="__('Plano de Saúde Individual')" />
                                <x-layouts.link-header href="{{ ('plano-odontologico') }}"
                                    :value="__('Plano Odontológico')" />
                                <x-layouts.link-header href="{{ ('saude-ocupacional') }}"
                                    :value="__('Saúde Ocupacional')" />
                                <x-layouts.link-header href="{{ ('solicitar-plano-de-saude') }}"
                                    :value="__('Solicitar Plano de Saúde')" />
                                <x-layouts.link-header href="{{ ('solicitar-plano-odontologico') }}"
                                    :value="__('Solicitar Plano Odontológico')" />
                            </div>
                        </div>
                    </div>

                    <div class="relative" x-data="{ open: false }" @click.outside="open=false">
                        <button @click="open = !open"
                            class="text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md px-2 py-2 text-base mt-3">
                            <span href="{{ ('previdencia-privada') }}">Previdência Privada</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-6 h-6 mt-1 -ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-40 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="w-96 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                                <x-layouts.link-header href="{{ ('previdencia-privada-empresarial') }}"
                                    :value="__('Previdência Privada Empresarial')" />
                                <x-layouts.link-header href="{{ ('previdencia-privada-individual') }}"
                                    :value="__('Previdência Privada Individual')" />
                                <x-layouts.link-header href="{{ ('previdencia-privada-infantil') }}"
                                    :value="__('Previdência Privada Infantil')" />
                                <x-layouts.link-header href="{{ ('protecao-planejada') }}"
                                    :value="__('Proteção Planejada')" />
                                <x-layouts.link-header href="{{ ('solicitar-previdencia-privada') }}"
                                    :value="__('Solicitar Previdência Privada')" />
                            </div>
                        </div>
                    </div>

                    <div class="relative" x-data="{ open: false }" @click.outside="open=false">
                        <button @click.prevent="open=!open"
                            class="text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md px-2 py-2 text-base mt-3">
                            <span href="{{ ('seguros') }}">Seguros</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-6 h-6 mt-1 -ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-40 right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="w-96 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                                <ul class="list-reset">
                                    <li class="relative" x-data="{open:false}" @mouseleave="open=false"
                                        @mouseenter="open=true">
                                        <a
                                            class="block text-primary-600 hover:bg-primary-600 hover:text-white rounded-md px-3 py-2 text-base font-bold">
                                            <span href="{{ ('seuguros-pessoais') }}" class="flex-1">Para Você</span>
                                            <span class="ml-2">
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    :class="{'rotate-180': open, 'rotate-0': !open}"
                                                    class="inline w-6 h-6 mt-1 -ml-1 transition-transform duration-200 transform md:-mt-1">
                                                    <path fill-rule="evenodd"
                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="bg-white shadow-md rounded border border-secondary-300 text-sm absolute inset-l-full top-0 start-0 min-w-full w-96 z-30 mt-1"
                                            x-show="open" x-transition:enter="transition ease duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-2"
                                            x-transition:enter-end="opacity-100 translate-y-0"
                                            x-transition:leave="transition ease duration-300 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0"
                                            x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                            <span
                                                class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -ml-1 mt-2"></span>
                                            <div class="bg-white rounded w-full relative z-10 px-3 py-2">
                                                <ul class="list-reset">
                                                    <x-layouts.link-header
                                                        href="{{ ('seguro-para-equipamentos-portateis') }}"
                                                        :value="__('Equipamentos Portáteis')" />
                                                    <x-layouts.link-header href="{{ ('protecao-combinada') }}"
                                                        :value="__('Proteção Combinada')" />
                                                    <x-layouts.link-header
                                                        href="{{ ('seguro-responsabilidade-civil-profissional') }}"
                                                        :value="__('Responsabilidade Civil Profissional')" />
                                                    <x-layouts.link-header href="{{ ('seguro-auto') }}"
                                                        :value="__('Seguro Auto')" />
                                                    <x-layouts.link-header href="{{ ('seguro-azul-por-assinatura') }}"
                                                        :value="__('Seguro Azul por Assinatura')" />
                                                    <x-layouts.link-header href="{{ ('seguro-bike') }}"
                                                        :value="__('Seguro Bike')" />
                                                    <x-layouts.link-header href="{{ ('seguro-celular') }}"
                                                        :value="__('Seguro Celular')" />
                                                    <x-layouts.link-header href="{{ ('seguro-fianca') }}"
                                                        :value="__('Seguro Fiança')" />
                                                    <x-layouts.link-header href="{{ ('seguro-imobiliaria') }}"
                                                        :value="__('Seguro Imobiliária')" />
                                                    <x-layouts.link-header href="{{ ('seguro-moto') }}"
                                                        :value="__('Seguro Moto')" />
                                                    <x-layouts.link-header href="{{ ('seguro-residencial') }}"
                                                        :value="__('Seguro Residência')" />
                                                    <x-layouts.link-header href="{{ ('seguro-viagem') }}"
                                                        :value="__('Seguro Viagem')" />
                                                    <x-layouts.link-header href="{{ ('seguro-vida') }}"
                                                        :value="__('Seguro Vida')" />
                                                    <x-layouts.link-header href="{{ ('hdiseguros') }}"
                                                        :value="__('HdiSeguros')" />
                                                    <x-layouts.link-header href="{{ ('portoseguro') }}"
                                                        :value="__('PortoSeguro')" />
                                                    <x-layouts.link-header href="{{ ('sulamerica') }}"
                                                        :value="__('SulAmérica')" />
                                                    <x-layouts.link-header href="{{ ('tokiomarine') }}"
                                                        :value="__('Tokio Marine')" />
                                                    <x-layouts.link-header href="{{ ('cotar-seguro-auto') }}"
                                                        :value="__('Cotar Seguro Auto')" />
                                                    <x-layouts.link-header href="{{ ('cotar-seguro-moto') }}"
                                                        :value="__('Cotar Seguro Moto')" />
                                                </ul>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="relative z-10" x-data="{open:false}" @mouseleave="open=false"
                                        @mouseenter="open=true">
                                        <a
                                            class="block text-primary-600 hover:bg-primary-600 hover:text-white rounded-md px-3 py-2 text-base font-bold">
                                            <span href="{{ ('seguro-para-empresas') }}" class="flex-1">Para
                                                Empresa</span>
                                            <span class="ml-2">
                                                <svg fill="currentColor" viewBox="0 0 20 20"
                                                    :class="{'rotate-180': open, 'rotate-0': !open}"
                                                    class="inline w-6 h-6 mt-1 -ml-1 transition-transform duration-200 transform md:-mt-1">
                                                    <path fill-rule="evenodd"
                                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="bg-white shadow-md rounded border border-secondary-300 text-sm absolute inset-l-full top-0 left-50% min-w-full w-56 z-30 mt-1"
                                            x-show="open" x-transition:enter="transition ease duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-2"
                                            x-transition:enter-end="opacity-100 translate-y-0"
                                            x-transition:leave="transition ease duration-300 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0"
                                            x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                                            <span
                                                class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -ml-1 mt-2"></span>
                                            <div class="bg-white rounded w-full relative z-10 px-3 py-2">
                                                <ul class="list-reset">
                                                    <x-layouts.link-header href="{{ ('seguro-auto-para-empresas') }}"
                                                        :value="__('Auto Empresarial')" />
                                                    <x-layouts.link-header href="{{ ('empresa-essencial') }}"
                                                        :value="__('Empresa Essencial')" />
                                                    <x-layouts.link-header href="{{ ('eventos') }}"
                                                        :value="__('Eventos')" />
                                                    <x-layouts.link-header href="{{ ('maquinas-e-equipamentos') }}"
                                                        :value="__('Máquinas e Equipamentos')" />
                                                    <x-layouts.link-header href="{{ ('seguro-de-vida-para-empresas') }}"
                                                        :value="__('Vida Empresarial')" />
                                                    <x-layouts.link-header href="{{ ('seguro-condominio') }}"
                                                        :value="__('Condomínio')" />
                                                    <x-layouts.link-header href="{{ ('seguro-empresa') }}"
                                                        :value="__('Seguro Empresarial')" />
                                                    <x-layouts.link-header href="{{ ('seguro-para-agronegocios') }}"
                                                        :value="__('Agronegócio')" />
                                                    <x-layouts.link-header href="{{ ('seguro-para-caminhoes') }}"
                                                        :value="__('Caminhão')" />
                                                    <x-layouts.link-header href="{{ ('seguro-para-cargas') }}"
                                                        :value="__('Transportes de Cargas')" />
                                                    <x-layouts.link-header
                                                        href="{{ ('seguro-responsabilidade-civil') }}"
                                                        :value="__('Responsabilidade Civil')" />
                                                    <x-layouts.link-header
                                                        href="{{ ('seguro-responsabilidade-civil-profissional') }}"
                                                        :value="__('Responsabilidade Civil Profissional')" />
                                                    <x-layouts.link-header href="{{ ('seguro-taxi') }}"
                                                        :value="__('Seguro para Taxi')" />
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="-mr-2 flex items-center">

                <div class="hidden lg:flex lg:items-center md:hidden sm:hidden mr-1">
                    <a href="{{ ('contato') }}"
                        class="p-1 rounded-md text-secondary-700 hover:text-primary-600 focus:outline-none focus:bg-secondary-100 focus:text-secondary-500">
                        <span class="sr-only">Contato por email</span>
                        <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="2.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </a>
                </div>

                <!-- Settings Dropdown -->
                <div class="sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @guest
                            <svg class="h-8 w-8 text-secondary-700 hover:text-primary-600 focus:outline-none focus:bg-secondary-100 focus:text-secondary-500"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            @if (Route::has('register'))
                            @endif
                            @else
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-secondary-500 bg-white hover:text-secondary-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            @endguest
                        </x-slot>

                        <x-slot name="content">
                            @guest
                            <x-dropdown-link :href="route('login')">
                                {{ __('Login') }}
                            </x-dropdown-link>
                            @if (Route::has('register'))
                            <x-dropdown-link :href="route('register')">
                                {{ __('Register') }}
                            </x-dropdown-link>
                            @endif
                            @else

                            <x-dropdown-link :href="route('profile')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                            @endguest
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <button @click="open = ! open"
                    class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-secondary-700 hover:text-primary-600 focus:outline-none focus:text-primary-600 transition duration-150 ease-in-out">
                    <svg class="h-10 w-10 font-bold" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden ">
        <div class="pt-2 pb-3 ml-4 space-y-1">
            <x-responsive-nav-link href="{{ route ('home') }}" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <div class="relative mt-2" x-data="{open:false, open: false}" @click.away="open=false">
                <button @click="open = !open"
                    class="px-3 py-2 w-full text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md text-base text-left">
                    <span href="{{ ('consorcio') }}">Consórcio</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-5 h-5 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full origin-top-right rounded-md shadow-lg z-10">
                    <div class="w-full px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                        <x-layouts.link-header href="{{ ('consorcio-de-bike') }}" :value="__('Consórcio Bike')" />
                        <x-layouts.link-header href="{{ ('consorcio-de-imoveis') }}"
                            :value="__('Consórcio de Imóveis')" />
                        <x-layouts.link-header href="{{ ('consorcio-de-motos') }}" :value="__('Consórcio de Motos')" />
                        <x-layouts.link-header href="{{ ('consorcio-de-maquinas-agricolas') }}"
                            :value="__('Consórcio de Máquinas Agrícolas')" />
                        <x-layouts.link-header href="{{ ('consorcio-de-servicos') }}"
                            :value="__('Consórcio de Serviços')" />
                        <x-layouts.link-header href="{{ ('consorcio-sustentavel-de-placas-solares') }}"
                            :value="__('Consórcio Sustentável')" />
                        <x-layouts.link-header href="{{ ('consorcio-de-veiculos') }}"
                            :value="__('Consórcio de Veículos')" />
                        <x-layouts.link-header href="{{ ('consorcio-de-veiculos-pesados') }}"
                            :value="__('Consórcio de Veículos Pesados')" />
                        <x-layouts.link-header href="{{ ('solicitar-consorcio') }}"
                            :value="__('Solicitar Consórcio')" />
                    </div>
                </div>
            </div>

            <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
                <button @click="open = !open"
                    class="px-3 py-2 w-full text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md text-base text-left">
                    <span href="{{ ('financeiro') }}">Financeiro</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-5 h-5 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full origin-top-right rounded-md shadow-lg z-10">
                    <div class="w-full px-2 py-2 bg-white rounded-md shadow-sm dark-mode:bg-white">
                        <x-layouts.link-header href="{{ ('auto-credito') }}" :value="__('Auto Crédito')" />
                        <x-layouts.link-header href="{{ ('carro-facil') }}" :value="__('Carro Fácil')" />
                        <x-layouts.link-header href="{{ ('carro-facil-seminovo') }}"
                            :value="__('Carro Fácil Seminovo')" />
                        <x-layouts.link-header href="{{ ('cartao-de-credito') }}" :value="__('Cartão de Crédito')" />
                        <x-layouts.link-header
                            href="{{ ('https://porto.vc/cartao_de_credito_porto_bank_2be6eebf43f44ccaa9baf1e0b867cdc7') }}"
                            :value="__('Cartão de Crédito Porto')" />
                        <x-layouts.link-header href="{{ ('consignado') }}" :value="__('Consignado')" />
                        <x-layouts.link-header href="{{ ('credito-com-garantia-imobiliaria') }}"
                            :value="__('Crédito com Garantia Imobiliária')" />
                        <x-layouts.link-header href="{{ ('credito-pessoal') }}" :value="__('Crédito Pessoal')" />
                        <x-layouts.link-header href="{{ ('emprestimo') }}" :value="__('Empréstimo')" />
                        <x-layouts.link-header href="{{ ('emprestimo-com-garantia-de-veiculo') }}"
                            :value="__('Empréstimo com Garantia de Veículo')" />
                        <x-layouts.link-header href="{{ ('seguro-fianca') }}" :value="__('Fiança Locatícia')" />
                        <x-layouts.link-header href="{{ ('financiamento-de-imoveis') }}"
                            :value="__('Financiamento de Imóveis')" />
                        <x-layouts.link-header href="{{ ('financiamento-de-veiculos') }}"
                            :value="__('Financiamento de Veículos')" />
                        <x-layouts.link-header href="{{ ('plano-saude-pets') }}" :value="__('Petlove Saude')" />
                        <x-layouts.link-header href="{{ ('portabilidade') }}" :value="__('Portabilidade')" />
                        <x-layouts.link-header href="{{ ('refinanciamento') }}" :value="__('Refinanciamento')" />
                        <x-layouts.link-header href="{{ ('renegociacao') }}" :value="__('Renegociação')" />
                        <x-layouts.link-header href="{{ ('solucoes-para-alugar') }}"
                            :value="__('Soluções para Alugar')" />
                        <x-layouts.link-header href="{{ ('tech-facil') }}" :value="__('Tech Fácil')" />
                        <x-layouts.link-header href="{{ ('titulo-de-capitalizacao-para-aluguel') }}"
                            :value="__('Título de Capitalização para Aluguel')" />
                        <x-layouts.link-header href="{{ ('solicitar-cartao-de-credito') }}"
                            :value="__('Solicitar Cartão de Crédito')" />
                        <x-layouts.link-header href="{{ ('solicitar-emprestimo') }}"
                            :value="__('Solicitar Empréstimo')" />
                        <x-layouts.link-header href="{{ ('solicitar-emprestimo') }}"
                            :value="__('Solicitar Consignado')" />
                    </div>
                </div>
            </div>

            <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
                <button @click="open = !open"
                    class="px-3 py-2 w-full text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md text-base text-left">
                    <span href="{{ ('previdencia-privada') }}">Previdência</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-5 h-5 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full origin-top-right rounded-md shadow-lg z-10">
                    <div class="w-full px-2 py-2 bg-white rounded-md shadow-sm dark-mode:bg-white">
                        <x-layouts.link-header href="{{ ('previdencia-privada-empresarial') }}"
                            :value="__('Previdência Privada Empresarial')" />
                        <x-layouts.link-header href="{{ ('previdencia-privada-individual') }}"
                            :value="__('Previdência Privada Individual')" />
                        <x-layouts.link-header href="{{ ('previdencia-privada-infantil') }}"
                            :value="__('Previdência Privada Infantil')" />
                        <x-layouts.link-header href="{{ ('porto-previdencia') }}"
                            :value="__('Porto Seguro Previdência')" />
                        <x-layouts.link-header href="{{ ('protecao-planejada') }}" :value="__('Proteção Planejada')" />
                        <x-layouts.link-header href="{{ ('solicitar-previdencia-privada') }}"
                            :value="__('Solicitar Previdência Privada')" />
                    </div>
                </div>
            </div>

            <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
                <button @click="open = !open"
                    class="px-3 py-2 w-full text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md text-base text-left">
                    <span href="{{ ('plano-de-saude') }}">Plano de Saúde</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-5 h-5 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full origin-top-right rounded-md shadow-lg z-10">
                    <div class="w-full px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                        <x-layouts.link-header href="{{ ('plano-de-saude-coletivo') }}"
                            :value="__('Plano de Saúde Coletivo')" />
                        <x-layouts.link-header href="{{ ('plano-de-saude-empresarial') }}"
                            :value="__('Plano de Saúde Empresarial')" />
                        <x-layouts.link-header href="{{ ('plano-de-saude-individual') }}"
                            :value="__('Plano de Saúde Individual')" />
                        <x-layouts.link-header href="{{ ('plano-odontologico') }}" :value="__('Plano Odontológico')" />
                        <x-layouts.link-header href="{{ ('portoseguro-saude') }}" :value="__('Porto Seguro Saúde')" />
                        <x-layouts.link-header href="{{ ('sulamerica-odonto') }}" :value="__('SulAmérica Odonto')" />
                        <x-layouts.link-header href="{{ ('saude-ocupacional') }}" :value="__('Saúde Ocupacional')" />
                        <x-layouts.link-header href="{{ ('solicitar-plano-de-saude') }}"
                            :value="__('Solicitar Plano de Saúde')" />
                        <x-layouts.link-header href="{{ ('solicitar-plano-odontologico') }}"
                            :value="__('Solicitar Plano Odontológico')" />
                    </div>
                </div>
            </div>

            <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
                <button @click="open = !open"
                    class="px-3 py-2 w-full text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md text-base text-left">
                    <span>Seguros para Você</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-5 h-5 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full origin-top-right rounded-md shadow-lg z-10">
                    <div class="w-full px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                        <x-layouts.link-header href="{{ ('seguro-para-equipamentos-portateis') }}"
                            :value="__('Equipamentos Portáteis')" />
                        <x-layouts.link-header href="{{ ('protecao-combinada') }}" :value="__('Proteção Combinada')" />
                        <x-layouts.link-header href="{{ ('seguro-responsabilidade-civil-profissional') }}"
                            :value="__('Responsabilidade Civil Profissional')" />
                        <x-layouts.link-header href="{{ ('seguro-auto') }}" :value="__('Seguro Auto')" />
                        <x-layouts.link-header href="{{ ('seguro-azul-por-assinatura') }}"
                            :value="__('Seguro Azul por Assinatura')" />
                        <x-layouts.link-header href="{{ ('seguro-bike') }}" :value="__('Seguro Bike')" />
                        <x-layouts.link-header href="{{ ('seguro-celular') }}" :value="__('Seguro Celular')" />
                        <x-layouts.link-header href="{{ ('seguro-fianca') }}" :value="__('Seguro Fiança')" />
                        <x-layouts.link-header href="{{ ('seguro-imobiliaria') }}" :value="__('Seguro Imobiliária')" />
                        <x-layouts.link-header href="{{ ('seguro-moto') }}" :value="__('Seguro Moto')" />
                        <x-layouts.link-header href="{{ ('seguro-residencial') }}" :value="__('Seguro Residência')" />
                        <x-layouts.link-header href="{{ ('seguro-viagem') }}" :value="__('Seguro Viagem')" />
                        <x-layouts.link-header href="{{ ('seguro-vida') }}" :value="__('Seguro Vida')" />
                        <x-layouts.link-header href="{{ ('hdiseguros') }}" :value="__('HdiSeguros')" />
                        <x-layouts.link-header href="{{ ('portoseguro') }}" :value="__('PortoSeguro')" />
                        <x-layouts.link-header href="{{ ('sulamerica') }}" :value="__('SulAmérica')" />
                        <x-layouts.link-header href="{{ ('tokiomarine') }}" :value="__('Tokio Marine')" />
                        <x-layouts.link-header href="{{ ('cotar-seguro-auto') }}" :value="__('Cotar Seguro Auto')" />
                        <x-layouts.link-header href="{{ ('cotar-seguro-moto') }}" :value="__('Cotar Seguro Moto')" />
                    </div>
                </div>
            </div>

            <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
                <button @click="open = !open"
                    class="px-3 py-2 w-full text-secondary-900 hover:text-secondary-50 hover:bg-primary-600 hover:font-bold rounded-md text-base text-left">
                    <span>Seguros para Empresa</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                        class="inline w-5 h-5 ml-1 transition-transform duration-200 transform md:-mt-1">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute right-0 w-full origin-top-right rounded-md shadow-lg z-10">
                    <div class="w-full px-2 py-2 bg-white rounded-md shadow-sm dark-mode:bg-white">
                        <x-layouts.link-header href="{{ ('seguro-auto-para-empresas') }}"
                            :value="__('Auto Empresarial')" />
                        <x-layouts.link-header href="{{ ('empresa-essencial') }}" :value="__('Empresa Essencial')" />
                        <x-layouts.link-header href="{{ ('eventos') }}" :value="__('Eventos')" />
                        <x-layouts.link-header href="{{ ('maquinas-e-equipamentos') }}"
                            :value="__('Máquinas e Equipamentos')" />
                        <x-layouts.link-header href="{{ ('seguro-de-vida-para-empresas') }}"
                            :value="__('Vida Empresarial')" />
                        <x-layouts.link-header href="{{ ('seguro-condominio') }}" :value="__('Condomínio')" />
                        <x-layouts.link-header href="{{ ('seguro-empresa') }}" :value="__('Seguro Empresarial')" />
                        <x-layouts.link-header href="{{ ('seguro-para-agronegocios') }}" :value="__('Agronegócio')" />
                        <x-layouts.link-header href="{{ ('seguro-para-caminhoes') }}" :value="__('Caminhão')" />
                        <x-layouts.link-header href="{{ ('seguro-para-cargas') }}"
                            :value="__('Transportes de Cargas')" />
                        <x-layouts.link-header href="{{ ('seguro-responsabilidade-civil') }}"
                            :value="__('Responsabilidade Civil')" />
                        <x-layouts.link-header href="{{ ('seguro-responsabilidade-civil-profissional') }}"
                            :value="__('Responsabilidade Civil Profissional')" />
                        <x-layouts.link-header href="{{ ('seguro-taxi') }}" :value="__('Seguro para Taxi')" />
                    </div>
                </div>
            </div>

            <x-responsive-nav-link href="{{ ('contato') }}" :active="request()->routeIs('home')">
                {{ __('Contato') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
