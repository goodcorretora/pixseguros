<x-layouts::app>
    <x-slot name="title">Seguro para Agronegócios</x-slot>

    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro para Agronegócios</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    O seguro que oferece mais proteção para quem se dedica ao trabalho no campo.
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
                <img src="{{ asset('images/seguros/agronegocios.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Mais segurança para pequenos, médios e grandes produtores.
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Conte com as garantias do Porto Seguro Agronegócios para evitar prejuízos caso aconteça algum imprevisto.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    São oferecidas coberturas específicas para diferentes ramos agrícolas, como hortas, pomares e grãos, além de seguro para danos a máquinas e equipamentos utilizados na lavoura.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                O Seguro para Agronegócios oferece:
            </h1>

            <div class="mt-6 grid gap-4 lg:grid-cols-4">
                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-regular fa-face-frown text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Sinistro</h1>
                        </div>
                    </div>
                </div>

                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-money-bill-wave text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Pagamento</h1>
                        </div>
                    </div>
                </div>

                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-pencil text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Facilidade de contratação</h1>
                        </div>
                    </div>
                </div>

                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-hand-holding-heart text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Ótimo custo-benefício</h1>
                        </div>
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
                            Conheça as modalidades de seguro agrícola
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">


                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/ssoja.png" alt="Foto de soja">
                                    <h1 class="font-bold text-2xl mb-2">Multirrisco</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>
                                            Seguro agrícola multirrisco para as culturas de soja e milho verão.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/spomar.png" alt="Foto de pomar">
                                    <h1 class="font-bold text-2xl mb-2">Pomar</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>
                                        Proteção para frutas como ameixa, pêssego e uva, contra os danos causados pelo granizo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/shorta.png" alt="Foto de horta">
                                    <h1 class="font-bold text-2xl mb-2">Horta</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>
                                        Seguro para proteger tomate, pimentão, cebola e outras hortaliças de danos decorrentes do granizo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/spenhor.png" alt="Foto de homem de cahpéu no campo">
                                    <h1 class="font-bold text-2xl mb-2">Patrimonial Rural e Penhor Rural</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>
                                            Seguro para perdas e danos físicos de máquinas, equipamentos e muito mais.
                                        </p>
                                    </div>
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

            <div class="lg:text-center">
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">Tire suas dúvidas sobre o Seguro para Agronegócios:</p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais as regiões de atuação do Seguro para Agronegócios?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            O seguro da Porto atende em diversas regiões do Brasil, conforme o produto a ser comercializado. Para saber quais localidades são atendidas pelo seguro, consulte um corretor.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Para quais máquinas posso fazer o Seguro para Agronegócios?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            A Porto Seguro tem uma ampla aceitação de máquinas e equipamentos agrícolas. Consulte um corretor e saiba se é possível contratar o seguro para o seu equipamento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona a subvenção do governo no Seguro para Agronegócios?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Governo Federal pode subsidiar parte do seguro por meio do Programa de Subvenção ao Prêmio do Seguro Rural. Produtores paulistas e paranaenses podem, ainda, contar com o auxílio de subvenção estadual para reduzir custos do seguro. Para mais informações, consulte um corretor ou os órgãos públicos responsáveis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona a subvenção do governo no Seguro para Agronegócios?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Governo Federal pode subsidiar parte do seguro por meio do Programa de Subvenção ao Prêmio do Seguro Rural. Produtores paulistas e paranaenses podem, ainda, contar com o auxílio de subvenção estadual para reduzir custos do seguro. Para mais informações, consulte um corretor ou os órgãos públicos responsáveis.
                        </p>
                    </div>
                </div>
            </div>


            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais são as coberturas básicas obrigatórias do Seguro para Agronegócios?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            As coberturas podem variar conforme produto e são para danos decorrentes de: incêndio, raio, tromba d’água, ventos fortes, ventos frios, granizo, chuva excessiva, seca, geada e variação excessiva de temperatura.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais as modalidades de Seguro para Agronegócios da Porto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            São oferecidas coberturas específicas para quatro modalidades do setor agrícola: Horta, Pomar, Grãos e Máquinas Agrícolas.
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
                    Peça uma proposta do seguro para agronegócios.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>


</x-layouts::app>