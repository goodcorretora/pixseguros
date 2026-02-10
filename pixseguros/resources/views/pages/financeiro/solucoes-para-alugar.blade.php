<x-layouts::app>
    <x-slot name="title">Soluções para Alugar</x-slot>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Soluções para Alugar</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Garantias práticas e seguras que substituem o fiador ou caução.
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
                <img src="{{ asset('images/financeiro/fsolucoesparaalugar.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>



    <div class="overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">
            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Soluções sob medida para o seu momento de vida
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/ffiancalocaticia.png" alt="foto de academia">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Fiança Locatícia</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro completo para você alugar o imóvel que deseja com agilidade. Para pessoas físicas e jurídicas.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/ffiancaessencial.png" alt="Foto de bar">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Fiança locatícia Essencial</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    A garantia que facilita a sua locação pelo melhor custo-benefício.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/fcapitalizacao.png" alt="Foto de clínica">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Título de Capitalização</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Alugue sem fiador ou comprovação de renda e ainda resgate o valor da garantia no final do contrato.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/fimobiliaria.png" alt="Foto de concessionário">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Imobiliária</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Proteção obrigatória contra incêndio com a qualidade da Porto para você que vai alugar um imóvel.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/fincendio.png" alt="Foto de coworking">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">seguro Incêndio</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    conte com o cuidado e a qualidade da Porto para proteger seu lar, seja ele alugado ou próprio.
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

    <div class="bg-white">
        <div class="py-24 sm:px-6 lg:px-8">
            <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="mx-auto max-w-lg text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Alugar um imóvel nunca foi tão fácil</h2>
                    <p class="mt-6 text-lg leading-8  text-gray-900">As Soluções para Alugar da Porto Bank foram cuidadosamente pensadas para trazer tranquilidade e agilidade para inquilinos, proprietários e imobiliárias.</p>
                </div>
                <div class="mx-auto max-w-lg text-center rounded-3xl ml-2">
                    <iframe class="rounded-2xl w-96 h-56" src="https://www.youtube.com/embed/iURM27bmQKg?si=JZXVKv6LtSTJPyoZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                            Soluções para proprietários e imobiliárias
                        </h1>
                        <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                            As soluções trazem benefícios diretos para quem aluga também. Proprietários contam com a proteção do seu imóvel e imobiliárias têm apoio especializado, assinatura eletrônica grátis e um portal exclusivo para fechar mais negócios.
                        </p>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-6">

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-dollar-sign text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Proprietário</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Garantia do recebimento dos aluguéis
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-magnifying-glass text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Proprietário</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Agilidade na análise cadastral do seu inquilino
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-tools text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Proprietário</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Serviços de assistência para o imóvel: chaveiro, reparo elétrico e hidráulico
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-hammer text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Imobiliária</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Assessoria em eventual ação de despejo 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-magnifying-glass-dollar text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Imobiliária</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Pagamento em até 60x sem juros na Fatura da Imobiliária
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-file-invoice-dollar text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Imobiliária</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Garantia do recebimento das taxas administrativas
                                    </p>
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
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>




</x-layouts::app>