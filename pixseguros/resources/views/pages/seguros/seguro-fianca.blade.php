<x-layouts::app>
    <x-slot name="title">Seguro Fiança</x-slot>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-secondary-900 sm:text-5xl md:text-6xl">
                    <span class="block text-secondary-50 xl:inline">Fiança Locatícia</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-secondary-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Uma solução cheia de vantagens para você não se preocupar com fiador ou caução na hora de alugar.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="solicitar-emprestimo" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-secondary-50 hover:bg-secondary-200 md:py-4 md:text-lg md:px-10">
                            Solicitar uma proposta
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/seguros/fianca.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                    Mais autonomia para inquilinos e mais segurança para proprietários e imobiliárias
                </h1>
                <p class="space-y-4  text-gray-800 text-lg leading-8 font-medium md:mb-12">
                    Alugar um imóvel residencial ou comercial ficou muito mais fácil. O Fiança Locatícia é um seguro completo que substitui o fiador ou o caução, garante o recebimento dos alugueis ao proprietário e ainda possibilita a contratação de uma série de coberturas adicionais para o imóvel.
                </p>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="w-full text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl mb-12">
                        Conheça os benefícios
                    </h2>
                </div>
            </div>

            <div class="lg:text-center">

                <div class="flex flex-wrap" x-data="{ openTab: 1 }">
                    <div class="w-full rounded-lg">
                        <ul id="tabs" class="inline-flex justify-between items-center w-full">
                            <li @click="openTab = 1" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Inquilino</a>
                            </li>
                            <li @click="openTab = 2" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Proprietário</a>
                            </li>

                            <li @click="openTab = 3" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Imobiliária</a>
                            </li>
                        </ul>


                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mt-2 rounded-lg border">
                            <div class="flex-auto">
                                <div class="tab-content mt-2 tab-space">
                                    <div class="block" x-show="openTab === 1">
                                        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-6">

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-house text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Mais praticidade</h1>
                                                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                                                            Alugue muito mais rápido.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-truck text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Descontos em transportadoras</h2>
                                                            <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-4">
                                                                Economize ao fazer a sua mudança. Saiba mais.
                                                            </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-credit-card text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Parcelamento do aluguel</h1>
                                                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                                                            Em até 10x sem juros, caso não haja aviso de sinistro
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-lock text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Garantias adicionais</h1>
                                                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                                                            Para encargos mensais, pintura e danos ao imóvel.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-address-card text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Acesso ao PortoPlus</h2>
                                                            <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-4">
                                                                Benefícios exclusivos para clientes Porto.
                                                            </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-arrow-rotate-left text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Renovação simplificada</h1>
                                                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                                                            Mais uma facilidade para você.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <div x-show="openTab === 2">
                                        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-dollar-sign text-primary-600 fa-4x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-2xl mb-2">Garantia de recebimento</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                                            Em caso de inadimplência
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-magnifying-glass text-primary-600 fa-4x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-2xl mb-2">Análise cadastral rápida</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                                            A Porto analisa o cadastro do inquilino.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-tools text-primary-600 fa-4x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-2xl mb-2">Serviços de assistência para o imóvel</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                                            Chaveiro, reparo elétrico e hidráulico.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-address-card text-primary-600 fa-4x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-2xl mb-2">Acesso ao App Porto</h2>
                                                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                                Acompanhe os pagamentos e dados da apólice.
                                                            </p>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <div x-show="openTab === 3">
                                        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl  cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-list-check text-primary-600 fa-4x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-2xl mb-2">Garantia de recebimento</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                                            Receba as taxas administratvas.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-users-viewfinder text-primary-600 fa-4x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-2xl mb-2">Equipe Especializada</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                                            Sem custo em uma eventual ação de despejo
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-dollar-sign text-primary-600 fa-4x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-2xl mb-2">Pagamento facilitado</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                                            Até 60x sem juros na fatura da imobiliária.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


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
                <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl">
                    Coberturas e garantias de pagamento
                </h2>
                <p class="mt-6 text-xl leading-8  text-secondary-900">
                    Conheça as coberturas básicas e extras que você pode adicionar ao seu contrato.
                </p>
            </div>



            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-6">
                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-dollar-sign text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-1 text-secondary-800 text-lg leading-8 font-medium ">Básica</p>
                            <h1 class="font-bold text-2xl mb-2">Aluguel e multa por atraso</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Até 30x o valor do aluguel.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-house text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-1 text-secondary-800 text-lg leading-8 font-medium ">Adicional</p>
                            <h1 class="font-bold text-2xl mb-2">Condomínio e IPTU</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Até 30x a verba declarada na apólice para cada item.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-house-user text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-1 text-secondary-800 text-lg leading-8 font-medium ">Adicional</p>
                            <h1 class="font-bold text-2xl mb-2">Danos ao imóvel</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Até 6x o valor do aluguel.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-paint-roller text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-1 text-secondary-800 text-lg leading-8 font-medium ">Adicional</p>
                            <h1 class="font-bold text-2xl mb-2">Pinturas internas e externas</h2>
                                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                    Até 3x o valor do aluguel.
                                </p>
                        </div>
                    </div>
                </a>



                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-money-bill-wave text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-1 text-secondary-800 text-lg leading-8 font-medium ">Adicional</p>
                            <h1 class="font-bold text-2xl mb-2">Multa por rescisão contratual</h2>
                                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                    Até 3x o valor do aluguel.
                                </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-regular fa-lightbulb text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-1 text-secondary-800 text-lg leading-8 font-medium ">Adicional</p>
                            <h1 class="font-bold text-2xl mb-2">Água, luz e gás canalizado</h2>
                                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                    Até 6x o valor declarado na apólice para cada item.
                                </p>
                        </div>
                    </div>
                </a>







            </div>


        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-secondary-900 sm:text-4xl text-center">
                    Tire suas dúvidas sobre o Seguro Fiança da Porto Bank
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que é o Seguro Fiança Locatícia da Porto Bank?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O Seguro Fiança Locatícia é uma solução que permite a locação de um imóvel residencial ou comercial sem a necessidade de um fiador ou caução. Serve como garantia para o proprietário e ainda possibilita a contratação de uma série de coberturas adicionais como: danos ao imóvel e pintura.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona o Seguro Fiança Locatícia da Porto Bank?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Caso haja inadimplência por parte do inquilino, o Seguro Fiança Locatícia garante o pagamento dos alugueis ao proprietário. Por isso é usado como substituto ao fiador ou caução na jornada de locação de um imóvel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual é a duração do contrato do Seguro Fiança Locatícia da Porto Bank?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>A validade do seguro deve ser igual ao prazo do contrato de locação, limitado a 5 anos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como pagar o Seguro Fiança Locatícia da Porto Bank?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Você pode fazer o pagamento em até 60x sem juros no cartão de crédito ou em até 12x no débito automático.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como é feita a análise do inquilino para contratar o Seguro Fiança Locatícia da Porto Bank?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O cadastro é realizado de forma simples e a resposta da análise é imediata e on-line. A solicitação de documentos para conclusão da análise ficará a critério da Porto Bank.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O inquilino pode ter restrição e contratar o Seguro Fiança Locatícia da Porto Bank?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Sim, pois a análise considera vários fatores. Mesmo em casos em que há restrições, o cadastro deve ser encaminhado para a análise da Porto Bank.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais as vantagens em contratar o Seguro Fiança Locatícia da Porto Bank?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Além de toda segurança oferecida pela Porto Bank no recebimento do aluguel, você conta com coberturas adicionais para IPTU, condomínio, água, luz, gás canalizado, multa por rescisão, pintura e danos ao imóvel.
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
                            Aqui, você encontra as condições de contratação do seu seguro e informações como cláusulas contratuais, garantias e obrigações.
                        </p>
                        <p>
                            Selecione o ano de contratação do seu seguro para acessar o arquivo de Condições Gerais correspondente.
                        </p>
                        <div class="mt-6 grid gap-5 lg:grid-cols-3">

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
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 08/2023</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2023/CG-Fianca-Versao-julho.23.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
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
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 01/05/2022</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2022/2022_cg_Solucoes_para_alugar_Fianca_Locaticia_01-05-2022.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2021
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
                                        <p>2021</p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 25/08/2021</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2021/2021_cg_Solucoes_para_alugar_Fianca_Locaticia_25-08-2021.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 25/08/2021</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2021/2021_cg_Solucoes_para_alugar_Fianca_Locaticia_25-08-2021.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2020
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
                                        <p>2020</p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 07/03/2020</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2020/2020_cg_Solucoes_para_alugar_Fianca_Locaticia_07-03-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 06/08/2020</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2020/2020_cg_Solucoes_para_alugar_Fianca_Locaticia_06-08-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 06/08/2020</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2020/2020_cg_Solucoes_para_alugar_Fianca_Locaticia_06-08-2020-.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2019
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
                                        <p>2019</p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 18/05/2018</p>
                                        <p>
                                            <a href="http://content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2019/2019_cg_Solucoes_para_alugar_Fianca_Locaticia_18-05-2018.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2018
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
                                        <p>2018</p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 18/05/2018</p>
                                        <p>
                                            <a href="http://content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2019/2019_cg_Solucoes_para_alugar_Fianca_Locaticia_18-05-2018.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2017
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
                                        <p>2017</p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 01/01/2017</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2017/2017_cg_Solucoes_para_alugar_Fianca_Locaticia_01-01-2017.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div x-data={show:false} class="mt-5">
                                <p class="flex justify-center">
                                    <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                                        2016
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
                                        <p>2016</p>
                                        <p>CG - Fiança Locatícia</p>
                                        <p>Vigência a partir de 01/06/2016</p>
                                        <p>
                                            <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/fianca_locaticia/2016/2016_cg_Solucoes_para_alugar_Fianca_Locaticia_01-06-2016.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                                <span>DOWNLOAD</span>
                                            </a>
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
                <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-secondary-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>








</x-layouts::app>