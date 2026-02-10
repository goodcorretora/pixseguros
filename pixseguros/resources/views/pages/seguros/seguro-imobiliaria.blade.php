<x-layouts::app>
    <x-slot name="title">Seguro Imobiliária</x-slot>

    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Imobiliária</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    O seguro que oferece tranquilidade para inquilinos e proprietários.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="contato" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            Solicitar uma Proposta
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/seguros/imobiliaria.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Coberturas e serviços para imóveis alugados.
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Além das garantias do seguro, como coberturas para incêndio e perda de aluguel, o Seguro Imobiliária da Porto conta com uma série de facilidades para a manutenção do imóvel alugado para fins residenciais ou não.
                </p>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl md:mb-6">
                            Com o Seguro Imobiliária da Porto, você tem:
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-city text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Garantia para imóveis residenciais ou comerciais
                                    </p>

                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-clock text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Serviços emergenciais 24h
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-rectangle-list text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                                        Flexibilidade de contratação de coberturas de acordo com a necessidade
                                    </p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Com o Seguro Imobiliária da Porto, você tem:
            </h1>

            <div class="mt-6 grid gap-4 lg:grid-cols-3">

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Garantia para imóveis residenciais ou comerciais
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Serviços emergenciais 24h.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Flexibilidade de contrataão de coberturas de acordo com a necessidade.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





    <div class="py-12 overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Coberturas que protegem você e o imóvel
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-bolt text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Incêndio, explosão e fumaça</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobertura para danos materiais causados por incêndio, explosão e fumaça.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-user-injured text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Responsabilidade civil</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobertura da responsabilização civil do segurado por danos corporais e materiais.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-home text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Perda de aluguel do imóvel </h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Garante os valores de aluguel e despesas prediais, em caso de sinistro coberto por incêndio ou explosão.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-atom text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Danos elétricos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Garante os valores de aluguel e despesas prediais, em caso de sinistro coberto por incêndio ou explosão.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-car-burst text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Impacto de veículos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Garante a cobertura dos danos materiais causados ao imóvel por queda de aeronaves e impacto de veículos.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-people-group text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Tumulto</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Garante a cobertura dos danos materiais causados ao imóvel por queda de aeronaves e impacto de veículos.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-wind text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Vendaval, furacão, ciclone, tornado e queda de granizo</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre, entre outros prejuízos, o destelhamento do imóvel causado por vendavais.
                                </p>
                            </div>
                        </a>

                    </div>


                    <div class="flex justify-end">
                        <div class="flex items-center">
                            <div class="w-full text-right">

                                <div @click="scrollTo(prev)" x-show="prev !== null" class=" mt-2 flex left-0 bg-primary-600 p-2 rounded-full group-hover:translate-x-0 cursor-pointer mr-5">
                                    <div class="text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="flex items-center">
                            <div class="w-full">

                                <div @click="scrollTo(next)" x-show="next !== null" class="mt-2 flex right-0 bg-primary-600 p-2 rounded-full group-hover:translate-x-0 cursor-pointer mr-5">
                                    <div class="text-gray-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>


                </div>

            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="w-full text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl mb-12">
                        Diversas facilidades e benefícios para o imóvel alugado
                    </h2>
                    <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                        Tenha acesso a serviços da Porto para reparos emergenciais 24h com mão de obra especializada. Confira os planos disponíveis:
                    </p>
                </div>
            </div>

            <div class="lg:text-center">

                <div class="flex flex-wrap" x-data="{ openTab: 1 }">
                    <div class="w-full rounded-lg">
                        <ul id="tabs" class="inline-flex justify-between items-center w-full">
                            <li @click="openTab = 1" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Plano Padrão gratuito</a>
                            </li>
                            <li @click="openTab = 2" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Plano Intermediário</a>
                            </li>
                        </ul>


                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mt-2 rounded-lg border">
                            <div class="flex-auto">
                                <div class="tab-content mt-2 tab-space">
                                    <div class="block" x-show="openTab === 1">
                                        <div class="mt-6 grid gap-4 lg:grid-cols-4">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Chaveiro
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos hidráulicos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div x-show="openTab === 2">


                                        <div class="mt-6 grid gap-4 lg:grid-cols-4">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Chaveiro
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos hidráulicos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos elétricos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Help desk para smartphones, notebooks e tablets
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>










                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="w-full text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl mb-12">
                        Plano total
                    </h2>
                </div>
            </div>

            <div class="lg:text-center">

                <div class="flex flex-wrap" x-data="{ openTab: 1 }">
                    <div class="w-full rounded-lg">
                        <ul id="tabs" class="inline-flex justify-between items-center w-full">
                            <li @click="openTab = 1" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>
                                    Chaveiro
                                </a>
                            </li>
                            <li @click="openTab = 2" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>
                                    Reparos
                                </a>
                            </li>
                            <li @click="openTab = 3" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>
                                    Assistências
                                </a>
                            </li>
                            <li @click="openTab = 4" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>
                                    Instalação
                                </a>
                            </li>
                            <li @click="openTab = 5" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>
                                    Diversos
                                </a>
                            </li>
                        </ul>


                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mt-2 rounded-lg border">
                            <div class="flex-auto">
                                <div class="tab-content mt-2 tab-space">
                                    <div class="block" x-show="openTab === 1">
                                        <div class="mt-6 grid gap-4 lg:grid-cols-3">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Chaveiro comum
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Troca de segredo de fechadura
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Instalação de fechadura e trava tetra
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div x-show="openTab === 2">

                                        <div class="mt-6 grid gap-4 lg:grid-cols-6">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos elétricos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos hidráulicos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Desentupimento
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos em linha branca
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos em ar-condicionado
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Substituição de telhas e cumeeiras
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div x-show="openTab === 3">

                                        <div class="mt-6 grid gap-4 lg:grid-cols-3">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Assistência à bike
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Assistência em antenas
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Help desk - Atendimento telefônico
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div x-show="openTab === 4">


                                        <div class="mt-6 grid gap-4 lg:grid-cols-6">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Instalação e reinstalação
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Instalação de kit de fixação
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Desentupimento
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos em linha branca
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reparos em ar-condicionado
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Substituição de telhas e cumeeiras
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div x-show="openTab === 5">


                                        <div class="mt-6 grid gap-4 lg:grid-cols-6">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Limpeza e desentupimento de calhas e dutos
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Ventilador de teto
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Central telefônica, interfone e porteiro eletrônico
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Conectividade
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Mudança de mobiliário
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reversão de gás para fogão
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-secondary-900 sm:text-4xl text-center">
                    Tire suas dúvidas sobre o Seguro Imobiliária da Porto Seguro
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que é o Seguro Imobiliária?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Este seguro oferece uma série de facilidades que complementam a cobertura obrigatória por lei contra incêndio para imóveis alugados, com fins residenciais ou não.
                        </p>
                        <p>
                            Além disso, permite reunir diversas propostas de seguros de incêndio em um único “lote”, facilitando o dia a dia das imobiliárias e administradoras de imóveis que movimentam um grande volume desse tipo de apólices por mês em cumprimento de lei.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais as principais coberturas do Seguro Imobiliária?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Cobertura básica de incêndio, explosão, fumaça, queda de raio no imóvel segurado e queda de aeronave ou engenhos aéreos, garantindo proteção exclusiva ao imóvel.
                        </p>
                        <p>
                            E, é concedido um percentual adicional de 10% do valor contratado na cobertura básica com a finalidade de cobrir eventuais danos ao conteúdo referente aos bens do inquilino.
                        </p>
                        <p>
                            Além disso, temos as coberturas adicionais, como:
                        </p>
                        <p>
                            - Danos Elétricos;
                        </p>
                        <p>
                            - Perda de Aluguel;
                        </p>
                        <p>
                            - Impacto de Veículos;
                        </p>
                        <p>
                            - Responsabilidade Civil, entre outras.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O seguro para imóvel alugado é obrigatório?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Isso mesmo, a contratação do seguro de incêndio é definida como obrigação nos artigos 22 e 23 da Lei do Inquilinato (Lei n.º8.245/1991).
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como contratar o Seguro Imobiliária?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Basta conversar nos solicitar uma proposta.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais os principais benefícios que o Seguro Imobiliária oferece?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O Seguro Imobiliária evita possíveis prejuízos aos proprietários e gastos inesperados aos inquilinos, oferecendo coberturas e serviços gratuitos de assistência para o imóvel.
                        </p>
                        <p>
                            Tudo isso com um ótimo custo-benefício e, ainda, acesso ao PortoPlus com benefícios exclusivos.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>








    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Quer mais detalhes? Acesse as Condições Gerais e confira as cláusulas e disposições do Seguro Imobiliária da Porto.
                </p>
                <a href="{{url('https://www.portoseguro.com.br/seguro-imobiliaria#condicoes-gerais')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Seu planejamento para o futuro começa aqui.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    SOLICITAR UMA PROPOSTA
                </a>
            </div>
        </div>
    </div>





</x-layouts::app>