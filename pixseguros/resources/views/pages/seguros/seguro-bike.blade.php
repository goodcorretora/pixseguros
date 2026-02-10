<x-layouts::app>
    <x-slot name="title">Seguro Bike</x-slot>

    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Bike</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Uma solução completa que oferece proteção e serviços para você se aventurar sem medo.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="solicitar-bike" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            Entrar em Contato
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/seguros/segurobike.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                    Com o Seguro Bike da Porto Seguro, é pedalar e relaxar
                </h1>
                <p class="space-y-4  text-gray-800 text-lg leading-8 font-medium md:mb-12">
                    O Seguro Bike é uma solução completa, que cuida não só da bicicleta e do ciclista, mas dos terceiros.
                </p>
                <p class="space-y-4  text-gray-800 text-lg leading-8 font-medium md:mb-12">
                    São garantias e serviços pensados para cada modelo e perfil de cliente, com contratação simples e rápida, sem burocracia.
                </p>
            </div>
        </div>
    </div>


    <div class="py-12 overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Conheça as coberturas
            </h1>
            <div class="ml-6 mb-5 text-gray-800 text-lg leading-8 font-medium">
                Informações resumidas. Para mais detalhes, consulte as condições gerais. As coberturas de responsabilidade civil organizador ou expositor são coberturas básicas e obrigatórias. As coberturas adicionais não poderão ser contratadas isoladamente.
            </div>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-bicycle text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Danos à bike</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre os danos causados por incêndio, queda, tentativa de roubo e, ainda, situações em que a bicicleta estiver sendo levada por um veículo transportador.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-regular fa-face-frown text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Subtração da bike</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre contra roubo, ou seja, quando há ameaça direta ou uso de violência ao segurado ou arrombamento do local onde a bicicleta estiver guardada.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-user-injured text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Acidentes pessoais Individual</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre as despesas em casos de morte acidental e invalidez permanente (total ou parcial), decorrente de acidente, além das despesas médicas, hospitalares e odontológicas.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-globe text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Garantia Internacional</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre as despesas em casos de morte acidental e invalidez permanente (total ou parcial), decorrente de acidente, além das despesas médicas, hospitalares e odontológicas.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-regular fa-id-badge text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Bike bagagem</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre o extravio da bicicleta em viagens aéreas e/ou rodoviárias, durante o trajeto de ida e volta de viagem do segurado, desde que tenha com o ticket de embarque. Para efeito dessa cobertura, entende-se como bagagem a bicicleta segurada e a mala utilizada para transporte da bicicleta, comprovadamente sob a responsabilidade da companhia aérea ou rodoviária.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-moto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-shield-halved text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Responsabilidade Civil</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre os danos materiais e/ou corporais causados a terceiros durante o uso da sua bicicleta.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-celular') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-bolt text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Danos Elétricos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre os danos causados por oscilações de energia , descargas elétricas e curtos-circuitos em bikes elétricas.
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
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Todo cuidado é Porto: seguro completo e com serviços para a sua bike.
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Além de ser o seguro mais completo do mercado, com o Seguro Bike da Porto Seguro, você conta agora com novos planos de serviços que trarão muito mais segurança para você e cuidados para a sua bicicleta.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    CONHEÇA NOSSOS PLANOS DE SERVIÇOS
                </p>
            </div>
            <div class="flex flex-wrap -m-4 justify-center text-center ">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg">
                        <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/seguros/thumb-banner-pedal-essencial.jpg" alt="content">
                        <h2 class="text-base text-gray-900 font-medium title-font mb-4 p-3">
                            O plano gratuito* para você experimentar um dos serviços essenciais oferecidos, de acordo com as suas necessidades.
                        </h2>
                        <h2 class="text-base text-gray-900 font-medium title-font mb-4">
                            Veja Plano Pedal Essencial
                        </h2>
                        <a href="solicitar-bike" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
                            Solicitar uma Proposta
                        </a>
                    </div>
                </div>

                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg">
                        <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/seguros/thumb-banner-pedal-leve.jpg" alt="content">
                        <h2 class="text-base text-gray-900 font-medium title-font mb-4 p-3">
                            Você gosta de pedalar e está buscando um plano de serviços intermediário? O Pedal Leve da Porto é para você.
                        </h2>

                        <h2 class="text-base text-gray-900 font-medium title-font mb-4">
                            Veja Plano Pedal Leve
                        </h2>


                        <a href="solicitar-bike" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
                            Solicitar uma Proposta
                        </a>

                    </div>
                </div>

                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg">
                        <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/seguros/thumb-banner-pedal-elite.jpg" alt="content">
                        <h2 class="text-base text-gray-900 font-medium title-font mb-4 p-3">
                            Conte com diversos serviços capazes de elevar suas aventuras para o próximo nível.
                        </h2>

                        <h2 class="text-base text-gray-900 font-medium title-font mb-4 p-3">
                            Veja Plano Pedal Elite
                        </h2>


                        <a href="solicitar-bike" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
                            Solicitar uma Proposta
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl md:mb-6">
                            Com o Seguro Bike da Porto, você tem:
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-credit-card text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Descontos e vantagens</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Parcelamento em até 10x sem juros no Cartão de Crédito, ou 12x sem juros + 5% de desconto no Cartão Porto Bank.
                                    </p>

                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-credit-card text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Pagamento facilitado</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        6x sem juros com débito em conta e cartões de demais bandeiras
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-bicycle text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Desconto no seguro para a 2ª bike</h2>
                                        <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                                            Desconto de 5% na contratação de mais de uma bike em uma única apólice
                                        </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-globe text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Ampla cobertura nacional e internacional</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Tenha proteção e serviços para você se aventurar sem medo.
                                    </p>
                                </div>
                            </div>
                        </a>




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
                        Bicicletas e acessórios cobertos
                    </h2>
                </div>
            </div>

            <div class="lg:text-center">

                <div class="flex flex-wrap" x-data="{ openTab: 1 }">
                    <div class="w-full rounded-lg">
                        <ul id="tabs" class="inline-flex justify-between items-center w-full">
                            <li @click="openTab = 1" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Bicicletas cobertas</a>
                            </li>
                            <li @click="openTab = 2" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Acessórios cobertos</a>
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
                                                            Urbana
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Mountain Bike
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Speed
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Elétrica
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Dobrável
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            BMX
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Downhill
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Trial
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Fixa
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Reclinada
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Handbike
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                    <div x-show="openTab === 2">


                                        <div class="mt-6 grid gap-4 lg:grid-cols-3">

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Velocímetro digital
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            GPS
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                                                <div class="text-center space-y-2 sm:text-left">
                                                    <div class="space-y-0.5">
                                                        <p class="text-lg text-black font-semibold">
                                                            Ciclocomputador
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
                    Tire suas dúvidas sobre o Seguro Bike
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quanto custa o seguro de uma bike?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                        Para calcular o valor, precisamos de alguns dados da pessoa e da bike. Informações como idade da   bicicleta, modelo, forma de uso (lazer, esporte, trabalho) são essenciais para a precificação, por isso, o valor do seguro varia de acordo com cada perfil e tipo de bike.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual é o valor da franquia do Seguro Bike da Porto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O valor da franquia, ou seja, participação do segurado na hora de pagar pela reparação de um dano,  pode variar de acordo com o preço da sua bike e essa informação está detalhada no documento do seguro (apólice). Este valor é o mesmo que foi definido junto ao corretor no momento da negociação do seguro e só ocorre quando há indenização por parte da seguradora.
                        </p>
                        <p>
                            Por exemplo, o cliente registrou uma ocorrência na seguradora após sofrer uma queda com danos em sua bike, após a análise da Porto Seguro para apuração do prejuízo causado pela queda, o valor da franquia será reduzida do valor da indenização (se tiver).
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais são as formas de pagamento aceitas no seguro bike?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Até 6x sem juros por débito automático em conta corrente ou 10x sem juros no cartão de crédito de qualquer bandeira;
                        </p>
                        <p>
                            Até 12x sem juros no Cartão de Crédito Porto Bank, com desconto especial de 5%
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O seguro bike tem cobertura para terceiros?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Sim, de forma opcional. Chamamos de cobertura de Responsabilidade Civil, que oferece amparo  para  danos materiais ou corporais causados a terceiros durante o uso da bicicleta. Ex.: a bike atingiu uma pessoa ou veículo de alguém, a cobertura ampara essas situações, desde que a pessoa atingida não seja alguém da sua família.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que devo fazer em uma situação de sinistro - dano no bem coberto pelo seguro?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            É importante nos comunicar sobre a ocorrência imediatamente ou assim que possível. 
                        </p>
                        <p>
                            O aviso de sinistro pode ser feito pelo 
                            <a href="{{ (' ') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                <span>WhatsApp 11 3003 9303</span>
                            </a>
                            ou pelo
                            <a href="{{ ('https://www.portoseguro.com.br/') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                <span>site Porto Seguro</span>
                            </a> 
                            . 
                        </p>
                        <p>
                            A partir do aviso, damos início ao processo de análise e indenização.
                        </p>
                        <p>
                            Para saber mais,
                            <a href="{{ ('https://blog.portoseguro.com.br/como-acionar-o-seguro-bike') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                <span>clique aqui</span>
                            </a>.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O Seguro Bike da Porto oferece cobertura para acessórios?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Tem cobertura: ciclocomputadores, GPS e velocímetros. 
                        </p>
                        <p>
                            Não tem cobertura: acessórios de uso pessoal não acoplados à bicicleta, como capacetes, luvas, squeezes, mochilas, roupas e ferramentas.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Posso contratar o seguro de bike para bicicleta usada?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Você pode contratar o seguro para:
                        </p>
                        <p>
                            Bicicleta tradicional nova;
                        </p>
                        <p>
                            Bicicleta tradicional com até 8 anos de uso;
                        </p>
                        <p>
                            Bicicleta elétrica com até 3 anos de uso.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O seguro bike oferece cobertura para furto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Furtos simples, como o desaparecimento da bicicleta ou roubo sem vestígios, não são cobertos pelo seguro bike.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    É necessário apresentar algum documento para contratar o seguro de bike?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Em algumas situações, principalmente em caso de sinistro, a Porto solicitará a nota fiscal da bike. Caso tenha sido comprada no exterior, também pode ser necessário apresentar o documento que confirma o país de origem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual é o valor mínimo da bicicleta para que eu possa contratar o Seguro Bike da Porto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                        Você pode contratar o seguro para bicicletas com valores a partir de R$ 2.000,00
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais são os planos de serviços que o seguro bike oferece?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            1. Pedal Essencial: plano gratuito que oferece reparo e/ou troca de câmaras de ar, correntes, coroas, manetes de freios, além de lubrificação de correntes.
                        <p>
                            2. Pedal Leve: mesmas garantias do plano Pedal Essencial, com um benefício a mais: transporte do segurado e sua bike em caso de quebra ou acidente, com limite de 50 km.
                        </p>
                        <p>
                            3. Pedal Elite: Tem tudo o que o plano Pedal Essencial oferece, com um benefício a mais: transporte do segurado e sua bike em caso de quebra ou acidente, com limite de 150 km.
                        </p>
                    </div>
                </div>
            </div>




            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Condições Gerais
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Manual do Segurado e Condições Gerais
                        </p>
                        <p>
                            Escolha o ano para ver cada condição geral
                        </p>
                        <div class="mt-6 grid gap-5 lg:grid-cols-2">

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2023
                                        <i class="fa-solid fa-arrow-right text-primary-600"></i>
                                    </button>
                                </p>
                                <div x-show="show" class="border px-4 py-3 my-2 text-secondary-700">
                                    <div class="text-right space-x-5 mt-5">
                                        <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-secondary-200 text-secondary-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-secondary-50 focus:bg-primary-50 focus:text-primary">
                                            <i class="fa-solid fa-x fa-2xl"></i>
                                        </button>
                                    </div>
                                    <div class="mt-4 max-w-2xl text-xl text-secondary-500 lg:mx-auto text-center">
                                        <p>2023</p>
                                        <p>VERSÃO 116 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência: a partir de 01/08/2023</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>


                                        <p>VERSÃO 114 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 01/05/2023 a 31/07/2023</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 113 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 01/04/2023 a 30/04/2023 </p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 112 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 01/02/2023 a 31/03/2023 </p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2022
                                        <i class="fa-solid fa-arrow-right text-primary-600"></i>
                                    </button>
                                </p>
                                <div x-show="show" class="border px-4 py-3 my-2 text-secondary-700">
                                    <div class="text-right space-x-5 mt-5">
                                        <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-secondary-200 text-secondary-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-secondary-50 focus:bg-primary-50 focus:text-primary">
                                            <i class="fa-solid fa-x fa-2xl"></i>
                                        </button>
                                    </div>
                                    <div class="mt-4 max-w-2xl text-xl text-secondary-500 lg:mx-auto text-center">
                                        <p>2022</p>
                                        <p>VERSÃO 111 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência: de 01/12/2022 a 30/03/2023</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 110 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 01/10/2022 a 30/11/2022</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 109 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 01/09/2022 a 30/09/2022</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 108 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 01/08/2022 a 31/08/2022</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 107 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 01/07/2022 a 31/07/2022</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 106 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS</p>

                                        <p>Vigência de 01/05/2022 a 30/06/2022</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 105 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL</p>

                                        <p>Vigência de 19/02/2022 a 30/04/2022</p>

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 104 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL

                                        <p>Vigência de 15/02/2022 a 18/02/2022

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>



                                        <p>VERSÃO 102 - MANUAL DO SEGURADO E CONDIÇÕES GERAIS AUTOMÓVEL

                                        <p>Vigência de 28/12/2021 a 14/02/2022

                                        <p>
                                            <a href=" " class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
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






    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Acesse as Condições Gerais e confira as cláusulas e disposições do seu Seguro Bike da Porto Seguros.
                </p>
                <a href="{{url('https://www.portoseguro.com.br/seguro-bike#condicoes-gerais')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Faça o seguro da sua Bike.
                </p>
                <a href="{{url('cotar-seguro-auto')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    SOLICITAR UMA PROPOSTA
                </a>
            </div>
        </div>
    </div>




</x-layouts::app>