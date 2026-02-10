<x-layouts::app>
    <x-slot name="title">Seguro Celular</x-slot>

    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Celular</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Conte com coberturas contra quebra, roubo e furto para seu aparelho de celular.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="https://porto.vc/RAMOS_ELEMENTARES_7ZZGFF" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            Venha conhecer
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/financeiro/celulares.png') }}" class=" w-96 rounded-lg" alt="" />
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
                            Confira nossos planos
                        </h1>
                        <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                            Tão importante quanto escolher o modelo do seu smartphone é garantir coberturas conforme sua rotina. Descubra o plano que mais combina com você.
                        </p>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-mobile-screen text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Seguro para quebra acidental
                                    </p>

                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-mobile-button text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Seguro para roubo
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-face-frown text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                                        Seguro para quebra e roubo
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-shield-halved text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                                        Seguro para quebra, roubo e furto simples
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
                Proteção para os modelos da marca que você mais gosta
            </h1>

            <div class="mt-6 grid gap-4 lg:grid-cols-4">

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                               Apple - Até 15% de desconto.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Motorola - Até 15% de desconto.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Samsung - Até 15% de desconto.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Xiaomi - Até 15% de desconto.
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
                Por que ter seu seguro para celular
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-laptop text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Sinistro Online</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Atendimento digital 24h para você registrar e acompanhar uma ocorrência de sinistro.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-mobile-screen text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Celular novo e usado</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Proteja seu celular com até 2 anos de uso a partir da compra.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-globe text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Garantia internacional</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Segurana e tranquilidade em sua viagem para qualquer lugar do mundo.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-credit-card text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Pagamento facilitado</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Parcelamento em até 12x sem juros no cartão de crédito.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-credit-card text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Cartão de Crédito Porto Bank</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Facilidade do pagamento em 12X sem juros mais 5% de desconto.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-calendar-days text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Sem carência</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Proteção imediata após contrar o seguro.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-regular fa-calendar text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Cancele quando quiser</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Plano mensal, cancele quando quiser, sem multa.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-star text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Porto Plus</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cadastre-se e aproveite os descontos em produtos e serviços de diversas categorias, como eletrônicos, cultura, lazer, gastronomia e muito mais.
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

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Riscos excluídos do Seguro Celular
            </h1>

            <div class="mt-6 grid gap-4 lg:grid-cols-5">

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Desaparecimento, perda ou extravio.                               
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Furto em decorrência de abandono do celular.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Má utilização e desgaste natural por uso.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Uso inadequada ou não cumprimento das instruções do fabricante.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Danos que já existiam antes da contratação do seguro.
                            </p>
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
                    Tire suas dúvidas sobre o Seguro Celular da Porto Seguro
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como eu contrato o Seguro Celular da Porto Seguro?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                        Para contratar o Seguro Celular da Porto Seguro é muito fácil, basta: • acessar a página; • informar os seus dados; • selecionar o modelo e marca do seu celular; • escolher o plano com as coberturas que mais combinam com você; • definir a melhor forma de pagamento; • realizar o download do app Porto: Seguro Auto, Cartão e + no seu celular; • entrar no app e efetuar a verificação do seu celular; • aguardar o app confirmar que as suas informações foram enviadas e recebidas pela Porto.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais são as formas de pagamentos aceitas no Seguro Celular da Porto Seguro ?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Você pode pagar em até 12x sem juros utilizando seu cartão de crédito. Se utilizar seu Cartão de Crédito Porto Bank, você ainda ganha 5% de desconto. Vale lembrar que seu pagamento só será efetivado no momento da emissão da apólice, após a verificação do celular, feita no app Porto: Seguro Auto > Cartão > +.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como é o processo de verificação?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            A verificação do celular pode ser feita em qualquer lugar de forma rápida e segura. Baixe o app Porto e siga o caminho: Seguro Auto > Cartão > + > informar o IMEI (International Mobile Equipment Identity) > informar o número de identificação único e global do celular > seguir as instruções informadas no próprio processo de verificação.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Em quanto tempo meu Seguro Celular da Porto Seguro estará ativo?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Depois de verificarmos seu aparelho, informaremos o resultado da contratação pelo e-mail cadastrado. Se aprovado, você receberá sua apólice, em até 48h.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Preciso manter o app Porto: Seguro Auto, Cartão e + instalado no meu celular?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Para sua comodidade e segurança, é necessário manter o app Porto: Seguro Auto, Cartão e + instalado no seu celular, durante o período de vigência do seu Seguro Celular da Porto.
                        </p>
                    </div>
                </div>
            </div>



            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Posso cancelar o meu seguro celular a qualquer momento?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Sim, o cancelamento do seu seguro celular pode ser feito a qualquer momento, sem multas ou permanência mínima.                            
                        </p>
                        <p>
                            Você pode solicitar o cancelamento do seu seguro diretamente com seu corretor, ou enviando um e-mail para: cancelamento.segurocelular@portoseguro.com.br. O prazo para retorno é de até 72 horas. 
                        </p>
                        <p>
                            Lembre-se: para que o cancelamento seja processado é preciso que você nos envie as informações relacionadas abaixo. Este procedimento é necessário para podermos garantir sua identidade.
                        </p>
                        <p>
                            - Nome completo do segurado;
                        </p>
                        <p>
                            - Número do CPF;
                        </p>
                        <p>
                            - Número da apólice que deseja cancelar; (você pode encontrar este número na apólice digital (página 4) enviada para você por e-mail após a aquisição do seguro, ou então através do Aplicativo Porto Seguro)
                        </p>
                        <p>
                            - Motivo do cancelamento; - Documento do segurado digitalizado
                        </p>

                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O seguro celular aceita aparelho usado?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Sim, o Seguro Celular da Porto está disponível para aparelhos usados desde que tenham sido adquiridos pelo primeiro dono há, no máximo, 24 meses e que tenham nota fiscal.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual é a vigência do seguro celular da Porto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O Seguro Celular da Porto possui vigência de 365 dias, sem carência, a partir da emissão da apólice do seguro, que é enviada para o seu e-mail cadastrado, após a realização e aprovação de todo o processo de contratação. Garantir 1 ano inteirinho de proteção para o seu aparelho é com a Porto.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Preciso ter a nota fiscal do aparelho para contratar o seguro celular?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Ter a nota fiscal do aparelho não é necessário para adquirir o Seguro Celular da Porto, mas vale ressaltar que, para acionar o seguro, é sim preciso ter comprovação de aquisição do celular através de ao menos um dos seguintes documentos: - Nota fiscal de aquisição; - Comprovante de pagamento do bem; - Manuais do aparelho; - Recibo de Compra e Venda (em que conste a data de aquisição do aparelho) com reconhecimento de firma em cartório; - Invoice; - Declaração de Importação (feita em papel timbrado ou com carimbo de CNPJ da importadora com a descrição e valor do aparelho); - Cupom fiscal.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que está coberto no seguro celular da Porto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O seguro celular da Porto está disponível em 4 planos, com coberturas que se encaixam às suas necessidades. São eles: - Quebra acidental, com cobertura para quebra acidental, oscilações de energia, curto-circuito e oxidação causada por líquido; - Roubo, com cobertura para roubo e furto mediante arrombamento (dentro ou fora da residência do segurado); - Quebra + Roubo, que inclui todas as coberturas dos planos Quebra Acidental e Roubo; - Quebra + Roubo + Furto Simples,  que inclui todas as coberturas dos planos Quebra Acidental e Roubo e cobre também furto sem vestígio de crime.
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
                    Seu planejamento para o futuro começa aqui.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    SOLICITAR UMA PROPOSTA
                </a>
            </div>
        </div>
    </div>










    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Confira nossos planos
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Tão importante quanto escolher o modelo do seu smartphone é garantir coberturas conforme sua rotina. Descubra o plano que mais combina com você:
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Quebra Acidental, Roubo, Quebra + Roubo, Quebra + Roubo + Furto Simples.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    *10% para clientes Porto + 5% em pagamento com Cartão de Crédito da Porto Seguro Bank.
                </p>
            </div>

            <div class="lg:text-center">
                <a href="{{url('https://porto.vc/RAMOS_ELEMENTARES_7ZZGFF')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    SOLICITAR UMA PROPOSTA
                </a>
            </div>
        </div>
    </div>


</x-layouts::app>