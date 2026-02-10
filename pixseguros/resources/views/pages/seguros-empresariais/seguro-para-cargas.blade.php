<x-layouts::app>
    <x-slot name="title">Seguro para Cargas</x-slot>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro para Cargas</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Transporte cargas com segurança e receba nossos benefícios e serviços exclusivos.
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
                <img src="{{ asset('images/seguros/cargas.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    A proteção que você precisa para o transporte de cargas
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Além de garantir que tudo chegue ao destino em perfeitas condições, um seguro para transporte de cargas garante o ressarcimento dos imprevistos que podem acontecer, seja por operações terrestres, aéreas ou aquaviárias. Além das coberturas, com o Seguro para Cargas, você conta com serviços exclusivos da Porto.
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
                            Com o seguro sua empresa tem:
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-lock text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Gerenciamento de riscos</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        Saiba mais sobre gerenciamento de riscos, equipamentos de rastreamento e empresas de cadastro e liberação, consulte o arquivo abaixo:
                                    </p>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <a href="{{ ('https://www.portoseguro.com.br/NovoInstitucional/static_files/documents/para-empresas/Transportes/3342.pdf') }}" class="px-2 relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                            Gerenciamento de riscos
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-laptop text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Averbação eletrônica</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Facilidade de comunicação para fazer os avisos de embarque de maneira prática com envio de dados pela internet.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-truck text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Assistência à carga</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Cobertura adicional para limpeza de pista, contenção e remoção da carga, em caso de acidente rodoviário.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">
            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Conheça as coberturas e serviços exclusivos para Embarcadores (proprietários das mercadorias) e Transportadoras
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sservicos.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro para Mudança</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro mudana é indicado para quem deseja transportar seus bens com segurana e sem preocupação.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/svigilancia.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Transportes Mais Simples - Seguro para Embarcadores</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Contratação facilitada para micro e pequenas empresas de diversos segmentos.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sobras.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Transportes Embarcador - Seguro para Embarcadores</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Coberturas especiais para atender diversos segmentos de indústrias, comércios e serviços.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/santenas.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Transportes Embarcador Programável - Seguro para Embarcadores</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Solução para embarcadores (proprietários de mercadorias ) de médio e grande porte.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sindustrial.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Transporte Internacional - Seguro para Embarcadores</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Para operações de importação ou exportação, com garantias conforme o perfil de risco.
                                </p>
                            </div>
                        </a>

                        
                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/srambiental.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">RC Ambiental</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Solução para transporte de cargas perigosas ou poluentes.
                                </p>
                            </div>
                        </a>

                        
                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sresponsabilidade.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Responsabilidade Civil - Seguro para Transportadoras</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Conheça as modalidades de Responsabilidade Civil que o Seguro Transportes oferece.
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
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">Tire suas dúvidas sobre o Seguro para Cargas:</p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como posso contratar um seguro para cargas?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Para contratar, basta acessar a página do seguro de carga de sua escolha, clicar no botão Solicite uma proposta e preencher o formulário.
                        </p>
                        <p>
                            O Seguro Transportes pode ser contratado tanto por donos de mercadorias a serem transportadas, para cobrir danos à carga, quanto por empresas transportadoras, para garantir segurança no transporte de cargas de terceiros sob sua responsabilidade.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais são as opções de seguros para cargas?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Temos 6 opções, veja qual delas atende às suas necessidades:
                        </p>
                        <p>
                            Transporte Embarcador
                        </p>
                        <p>
                            Transportes Mais Simples
                        </p>
                        <p>
                            Transporte Internacional
                        </p>
                        <p>
                            Seguro RCTR-C e RCF-DC
                        </p>
                        <p>
                            RC Ambiental Transportes
                        </p>
                        <p>
                            Transportes Embarcador Programável
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual é o principal diferencial do Seguro para Cargas - Transportes Mais Simples?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Com a contratação do Transportes Mais Simples, sua empresa não precisa fazer a comunicação de embarques de mercadorias (averbação).
                        </p>
                        <p>
                            As taxas são aplicadas de acordo com o segmento das suas mercadorias, tornando o seguro mais acessível e fácil de contratar.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quem pode contratar o Seguro para Cargas - Transporte Internacional?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            O Seguro Transporte Internacional pode ser contratado por Importadores, exportadores, trading e despachantes aduaneiros.
                        </p>
                    </div>
                </div>
            </div>


            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Posso contratar seguros para transporte de cargas avulsas?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Pode, sim. Temos os seguros de transporte nacional e internacional (proprietário da mercadoria), pessoa jurídica ou pessoa física (somente em casos de mudanças). Dependendo da operação o pagamento pode ser feito por boleto ou débito em conta.
                        </p>
                        <p>
                        Para contratar o Seguro para Cargas, você precisa preencher o formulário de proposta, clicando no botão Solicite uma proposta, disponível nesta página.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Em quais modalidades de seguro posso contratar o seguro exclusivamente para uma viagem?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Pode-se contratar para Transporte Nacional (viagens em território nacional) e Internacional (Importação e Exportação), e é denominado seguro avulso ou específico.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual a diferença entre um Seguro a averbar e Seguro Avulso?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Seguro a averbar é uma apólice com vigência anual ou semestral, onde o segurado necessita fazer a comunicação do embarque conforme prazo estipulado na apólice.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que é uma averbação?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            É a comunicação do embarque a seguradora, com dados da viagem, que constarão no documento fiscal (nota fiscal ou conhecimento de transporte rodoviário).
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Posso contratar o seguro direto, como Transportador (transporte de mercadorias de terceiros) ou Embarcador (transporte de mercadoria própria)?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Não, o seguro deverá ser contratado através do corretor de seguros. Ele encaminhará um questionário com os dados para analise da contratação do seguro.
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
                    Consulte detalhes sobre contratação, coberturas e muito mais a respeito do Seguro Transporte, de acordo com a data de vigência da sua apólice.
                </p>
                <a href="{{url('https://portoseguro.com.br/seguro-para-cargas#condicoes-gerais')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Peça uma proposta.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>


</x-layouts::app>