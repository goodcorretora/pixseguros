<x-layouts::app>
    <x-slot name="title">Home</x-slot>

 <!-- Slide -->

    <!-- Implement the carousel -->
    <div class="relative  w-full mx-auto">

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-10">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Proteção Combinada
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                Mais comodidade com seu carro e sua casa protegidos em um só contrato.
                            </div>


                            <a href="{{ ('protecao-combinada') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-car fa-xl text-gray-100 mr-2"></i>
                                Solicite uma proposta
                            </a>

                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('./images/seguros/protecaocombinada.png') }}" class="w-full rounded-lg" alt="Foto com um automóvel com anúncio do financimento e logo da Porto Seguro" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-10">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Consórcios
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                Consórcio de Imóvel, Automóvel, Moto, Bike, Sustentável e Serviços.
                            </div>


                            <a href="{{ ('consorcio') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-car fa-xl text-gray-100 mr-2"></i>
                                Solicite uma proposta
                            </a>

                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('/images/consorcio/consorcios.png') }}" class="w-full rounded-lg" alt="Foto com um automóvel com anúncio do financimento e logo da Porto Seguro" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-10">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Empréstimo com Garantia de Veículos
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                Crédito rápido com até 60 meses para pagar.
                            </div>


                            <a href="{{ ('auto-credito') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-car fa-xl text-gray-100 mr-2"></i>
                                Solicite uma proposta
                            </a>

                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('/images/financeiro/financiamentodeveiculo1.png') }}" class="w-full rounded-lg" alt="Foto com um automóvel com anúncio do financimento e logo da Porto Seguro" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-10">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Plano de Saúde
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                    Escolha o plano de saúde para você, sua família ou seus colaboradores com carinho, escolhendo as melhores proteções.
                            </div>


                            <a href="{{ ('plano-de-saude-coletivo') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-user-group fa-xl text-gray-100 mr-2"></i>
                                Coletivo
                            </a>

                            <a href="{{ ('plano-de-saude-empresarial') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-gray-300 rounded-md shadow-xs text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-handshake fa-xl text-primary-600 mr-2"></i>
                                Empresarial
                            </a>

                            <a href="{{ ('plano-de-saude-individual') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-user fa-xl text-gray-100 mr-2"></i>
                                Individual
                            </a>

                            <a href="{{ ('plano-odontologico') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-gray-300 rounded-md shadow-xs text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-tooth fa-xl text-primary-600 mr-2"></i>
                                Odontológico
                            </a>


                            <a href="{{ ('auto-credito') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-car fa-xl text-gray-100 mr-2"></i>
                                Solicite uma proposta
                            </a>

                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('/images/planodesaude/planodesaude.png') }}" class="w-full rounded-lg" alt="Foto com um automóvel com anúncio do financimento e logo da Porto Seguro" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-10">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Celular por Assinatura
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                Um benefício exclusivo para clientes do Cartão Porto Bank.

                            </div>


                            <a href="https://www.techfacil.com.br/Home-Tech-Facil.html?utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_7ZZGFF&utm_content=TECH_FACIL_GOOD_CORRETORA_DE_SEGUROS&susep=7ZZGFF&origem=techfacilrn" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Faça uma cotação
                            </a>


                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('/images/financeiro/celulares.png') }}" class="w-full h-80 rounded-lg" alt="Foto de celulares e relógio (Smartwatch) para anunciar as opções de assinaturas para celulares" />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-20">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Carro por assinatura
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                Mais econômico que comprar e com zero burocracia, você ainda tem Facilidades, Proteção 24h e Benefícios.
                            </div>

                            <a href="{{ ('carro-facil') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-car fa-xl text-gray-100 mr-2"></i>
                                Solicite uma Proposta
                            </a>

                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('/images/financeiro/carrofacil.png') }}" class="w-full rounded-lg" alt="Foto de um automóvel com fundo de árvores e terreno sem pavimentação para anunciar as opções de carro por assinatura." />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-20">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Financiamento de Imóveis
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                Mais econômico que comprar e com zero burocracia, você ainda tem Facilidades, Proteção 24h e Benefícios.
                            </div>

                            <a href="{{ ('financiamento-de-imoveis') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-car fa-xl text-gray-100 mr-2"></i>
                                Solicite uma Proposta
                            </a>

                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('/images/financeiro/financiamentodeimoveis.png') }}" class="w-full h-72 rounded-lg" alt="Foto com uma casa sobre diversas mãos juntas para anunciar as opções de financiamentos de imóveis." />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-12 lg:mt-20">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Seguro Auto por assinatura
                            </h1>
                            <div class="mb-5 text-gray-800 text-lg leading-8 font-medium">
                                O seguro do tamanho que você precisa com pagamento mês a mês.

                            </div>


                            <a href="https://assinatura.azulseguros.com.br/?utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_7ZZGFF&utm_content=AZUL_GOOD_CORRETORA_DE_SEGUROS&susep=7ZZGFF&origem=rn" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-user-group fa-xl text-gray-100 mr-2"></i>
                                Faça uma cotação
                            </a>

                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
                            <img src="{{ asset('/images/seguros/azulsegurosporassinatura102024.png') }}" class="w-full h-72 rounded-lg" alt="Foto com veículos off-road com rodas grandes e suspensão alta com uma bela moça com sorriso com calça e coton azul e blusa e tênis amarelo para indicar as opções de seguro auto por assinatura." />
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="slide relative">
            <section class="overflow-x-hidden mt-6 lg:mt-10">
                <div class="container mx-auto lg:px-12">
                    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0">
                        <div class="lg:w-1/2">
                            <img src="{{ asset('images/previdencia/previdencia.png') }}" class="w-full rounded-lg" alt="Foto com cartões de crédito máquinas de crédito e vaso de flor para indicar as oções de previdência privada." />
                        </div>

                        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-4">
                            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                                Previdência Privada
                            </h1>

                            <div class="mb-5">
                                <blockquote class="text-gray-800 text-lg leading-8 font-medium">
                                    Pensando no futuro
                                    <span class="relative">
                                        <span class="block absolute -inset-1 -skew-y-3 bg-primary-600 mr-2" aria-hidden="true"></span>
                                        <span class="relative text-white">você</span>
                                    </span>
                                    ,
                                    comece uma previdência privada
                                    <span class="relative">
                                        <span class="block absolute -inset-1 -skew-y-3 bg-primary-600 mr-2" aria-hidden="true"></span>
                                        <span class="relative text-white">hoje</span> .
                                    </span>
                                </blockquote>
                            </div>


                            <a href="{{ ('previdencia-privada-individual') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-user fa-xl text-gray-100 mr-2"></i>
                                Para Você
                            </a>

                            <a href="{{ ('previdencia-privada-infantil') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-gray-300 rounded-md shadow-xs text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-children fa-xl text-primary-600 mr-2"></i>
                                Para Criança
                            </a>

                            <a href="{{ ('previdencia-privada-empresarial') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-transparent rounded-md shadow-xs text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-handshake fa-xl text-gray-100 mr-2"></i>
                                Empresarial
                            </a>

                            <a href="{{ ('protecao-planejada') }}" class="w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-5 py-3 border border-gray-300 rounded-md shadow-xs text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i class="fa-solid fa-hand-holding-hand fa-xl text-primary-600 mr-2"></i>
                                Proteção Planejada
                            </a>
                        </div>


                    </div>
                </div>
            </section>
        </div>


        <!-- The previous button -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-primary-600 hover:bg-primary-700 text-white hover:text-secondary-50 cursor-pointer" onclick="moveSlide(-1)">❮</a>

        <!-- The next button -->
        <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-primary-600 hover:bg-primary-700 text-white  hover:text-secondary-50 cursor-pointer" onclick="moveSlide(1)">❯</a>

    </div>
    <br>

    <!-- The dots -->
    <div class="flex justify-center items-center space-x-5">
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(6)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(7)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(8)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(9)"></div>
    </div>

    <!-- /Slide -->


    <!-- Seguros -->
    <div class="overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Seguros
            </h1>
            <div class="ml-6 mb-5 text-gray-800 text-lg leading-8 font-medium">
                Conheça os seguros que agregam facilitam sua vida.
            </div>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">



                        <a href="{{ ('https://porto.vc/seguro_auto_91e8e30e91964c268b360f14e7738ba6') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/seguroauto.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Auto</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Com coberturas básicas e adicionais, você garante a proteção ideal para o seu veículo, do seu jeito.
                                </p>
                                <button href="{{ ('https://porto.vc/seguro_auto_91e8e30e91964c268b360f14e7738ba6') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/segurobike.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Bike</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Com o Seguro Bike da Porto Seguro é pedalar e relaxar
                                </p>
                                <button href="{{ ('seguro-bike') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/fianca.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Fiança</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro com vantagens que substitui o papel do fiador.
                                </p>
                                <button href="{{ ('seguro-fianca') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/imobiliaria.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Imobiliário</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro que oferece tranquilidade para inquilinos e proprietários.
                                </p>
                                <button href="{{ ('seguro-imobiliaria') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://wwws.portoseguro.com.br/vendaonline/moto/home.ns?cod=698ac878c77240e18744a2b5d74e4b1b&utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_QB73YF&utm_content=GOOD_CORRETORA_DE_SEGUROS') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/seguromoto.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Moto</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro que combina com seu estilo, com cobertura completa e assistência 24h.
                                </p>
                                <button href="{{ ('https://wwws.portoseguro.com.br/vendaonline/moto/home.ns?cod=698ac878c77240e18744a2b5d74e4b1b&utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_QB73YF&utm_content=GOOD_CORRETORA_DE_SEGUROS') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://porto.vc/seguro_celular_53fd49e27d6c4b13a83ed7f4fea9a419') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/celular.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguros para Celular</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Proteja seu celular contra quebra acidental, roubo e até mesmo furto.
                                </p>
                                <button href="{{ ('https://porto.vc/seguro_celular_53fd49e27d6c4b13a83ed7f4fea9a419') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://wwws.portoseguro.com.br/vendaonline/equipamentosportateis/home.ns?cod=a89f89a03b0047acaf3fe43e32a2f72e&utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_QB73YF&utm_content=GOOD_CORRETORA_DE_SEGUROS') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/portateis.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Equipamentos Portáteis</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Proteger seu aparelho traz tranquilidade e custa menos do que você imagina.
                                </p>
                                <button href="{{ ('https://wwws.portoseguro.com.br/vendaonline/equipamentosportateis/home.ns?cod=a89f89a03b0047acaf3fe43e32a2f72e&utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_QB73YF&utm_content=GOOD_CORRETORA_DE_SEGUROS') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://porto.vc/residencia_essencial_f509d61021154759bc3f2eed06f7c4e9') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/seguroresidencial.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Residencial</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Tudo que você precisa para proteção e assistência do seu lar.
                                </p>
                                <button href="{{ ('https://porto.vc/residencia_essencial_f509d61021154759bc3f2eed06f7c4e9') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-responsabilidade-civil-profissional') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/responcivil.png" alt="">
                                <h2 class="line-clamp-1 mt-2 text-2xl font-bold text-gray-900">Responsabilidade Civil e Profissional</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro de Responsabilidade Civil Profissional da Porto Seguro é um produto completo para eventuais falhas profissionais.
                                </p>
                                <button href="{{ ('seguro-responsabilidade-civil-profissional') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://porto.vc/seguro_viagem_4a87c3927d304c00b179c822726dd347') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/viagem.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Viagem</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O Seguro Viagem conta com + de 20 tipos de proteções para destinos nacionais e internacionais, garantindo que você aproveite o passeio
                                </p>
                                <button href="{{ ('https://porto.vc/seguro_viagem_4a87c3927d304c00b179c822726dd347') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-vida') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/vida.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Vida</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Benefícios em vida, contratos descomplicados e coberturas especialmente para você.
                                </p>
                                <button href="{{ ('seguro-vida') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/protecaocombinada.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Proteção Combinada</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Mais comodidade com seu carro e sua casa protegidos em um só contrato.
                                </p>
                                <button href="{{ ('protecao-combinada') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/azulsegurosporassinatura102024.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Auto por assinatura</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro do tamanho que você precisa com pagamento mês a mês.
                                </p>
                                <button href="{{ ('https://assinatura.azulseguros.com.br/?utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_7ZZGFF&utm_content=AZUL_GOOD_CORRETORA_DE_SEGUROS&susep=7ZZGFF&origem=rn') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
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

    <!-- /Seguros -->

    <!-- /Financeiro -->

    <div class="overflow-x-hidden mt-2 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Financeiro
            </h1>
            <div class="ml-6 mb-5 text-gray-800 text-lg leading-8 font-medium">
                Conheça as oportunidades financeiras para você realizar seus projetos com responsabilidade.
            </div>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">


                        <a href="{{ ('https://porto.vc/cartao_de_credito_porto_bank_2be6eebf43f44ccaa9baf1e0b867cdc7') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/cartaoporto.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Cartão de Crédito Porto</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    A adrenalina das ultrapassagens faz parte do seu novo cartão
                                </p>
                                <button href="{{ ('https://porto.vc/cartao_de_credito_porto_bank_2be6eebf43f44ccaa9baf1e0b867cdc7') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://porto.vc/TECH_FACIL_7ZZGFF') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/celulares.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Tech Fácil</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O serviço de assinatura anual de Smartphones da Porto.
                                </p>
                                <button href="{{ ('https://porto.vc/TECH_FACIL_7ZZGFF') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://financeiraportoseguro.com.br/reff/corsus/7ZZGFF') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/autocredito.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Empréstimo com Garantia de Veículo</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Dinheiro rápido para você, que tem um carro quitado, mas não quer se desfazer dele para realizar seus projetos.
                                </p>
                                <button href="{{ ('https://financeiraportoseguro.com.br/reff/corsus/7ZZGFF') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('carro-facil') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/carrofacil.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Carro Fácil</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Mais econômico que comprar e com zero burocracia, você ainda tem Facilidades, Proteção 24h e Benefícios.
                                </p>
                                <button href="{{ ('carro-facil') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('carro-facil-seminovo') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/carrofacilseminovo.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Carro Fácil Seminovo</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Diversos carros com ótimas condições e preços imperdíveis.
                                </p>
                                <button href="{{ ('carro-facil-seminovo') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>


                        <a href="{{ ('credito-com-garantia-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/garantiaimobiliaria.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Empréstimo com Garantia de Imóvel</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Crédito de até 60% do valor de um imóvel residencial com até 20 anos para pagar.
                                </p>
                                <button href="{{ ('credito-com-garantia-imobiliaria') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('cartao-de-credito') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/cartao.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Cartão de Crédito</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Com 12 meses de anuidade grátis e muitos benefícios exclusivos!
                                </p>
                                <button href="{{ ('cartao-de-credito') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://financeiraportoseguro.com.br/auto/corsus/7ZZGFF') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/emprestimocomgarantiadeveiculo.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Financiamento de Veículos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    A escolha segura na hora de realizar o sonho de comprar seu carro.
                                </p>
                                <button href="{{ ('https://financeiraportoseguro.com.br/auto/corsus/7ZZGFF') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('titulo-de-capitalizacao-para-aluguel') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/titulodecapitalizacaoparaaluguel.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Título de Capitalização para Aluguel</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Garanta a locação do imóvel sem fiador com possibilidade de parcelamento em até 12x e ainda concorre a sorteios com prêmios de até R $150 mil, de acordo com o plano contratado.
                                </p>
                                <button href="{{ ('titulo-de-capitalizacao-para-aluguel') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('financiamento-de-imoveis') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/garantiaimobiliaria.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Financiamento de Imóveis</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    A escolha segura na hora de realizar o sonho de comprar seu imóvel.
                                </p>
                                <button href="{{ ('financiamento-de-imoveis') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consignado') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/consignado.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Consignado</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Empréstimo para desconto em folha.
                                </p>
                                <button href="{{ ('consignado') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('credito-pessoal') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/creditopessoal.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Crédito Pessoal</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Precisando de dinheiro? Empréstimo rápido.
                                </p>
                                <button href="{{ ('credito-pessoal') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('emprestimo') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/emprestimopessoal.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Empréstimo Pessoal</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Crédito rápido para atender você.
                                </p>
                                <button href="{{ ('emprestimo') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('portabilidade') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/portabilidade.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Portabilidade</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Precisando de dinheiro? Empréstimo Consignado?
                                </p>
                                <button href="{{ ('portabilidade') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('renegociacao') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/renegociacao.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Renegociação</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Precisando de dinheiro? Empréstimo Consignado?
                                </p>
                                <button href="{{ ('renegociacao') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('refinanciamento') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/refinanc.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Refinanciamento</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Benefícios em vida, contratos descomplicados e coberturas especialmente para você.
                                </p>
                                <button href="{{ ('refinanciamento') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('plano-saude-pets') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/financeiro/pets.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Petlove</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Todo cuidado e carinho para você e seu pet.
                                </p>
                                <button href="{{ ('plano-saude-pets') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('https://www.portosegurofaz.com.br/?cod=5fcecc4f11cc4e0499ff0062546e3b49&utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_QB73YF&utm_content=CORRETOR&origem=') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="/images/seguros/portoservicos102024.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Porto Serviço</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Porto Servico agora é Serviços para Casa e Auto.
                                </p>
                                <button href="{{ ('https://www.portosegurofaz.com.br/?cod=5fcecc4f11cc4e0499ff0062546e3b49&utm_source=7ZZGFF&utm_medium=geradorLinks&utm_campaign=GeradordeLinks_QB73YF&utm_content=CORRETOR&origem=') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
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

    <!-- /Financeiro  -->



    <!-- Consórcio -->

    <div class="overflow-x-hidden mt-2 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Consórcio
            </h1>
            <div class="ml-6 mb-5 text-gray-800 text-lg leading-8 font-medium">
                Comece a realizar seus sonhos com planejamento.
            </div>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a href="{{ ('consorcio-de-imoveis') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/consorcioimoveis.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Consórcio de Imóveis</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Casa, apartamento, terreno, construção e reforma.
                                </p>
                                <button href="{{ ('consorcio-de-imoveis') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-motos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/consorciomoto.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Consórcio de Motos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    É importante você conhecer o funcionamento do consórcio como as taxas para cada uma das modalidades.
                                </p>
                                <button href="{{ ('consorcio-de-motos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-servicos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/estetico.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Procedimento Estético</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Conheça o consórcio de serviços e saiba como ele pode ajudar nas realizações em diversas áreas de sua vida. Faça uma simulação e se surpreenda!
                                </p>
                                <button href="{{ ('consorcio-de-servicos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-servicos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/consorcioservicos.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Consórcio de Serviços</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Faça um investimento inteligente para contratar serviços que você tanto sonhou.
                                </p>
                                <button href="{{ ('consorcio-de-servicos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/consorciobike.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Consórcio de Bike</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Consórcio para adquirir sua bike.
                                </p>
                                <button href="{{ ('consorcio-de-bike') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-sustentavel-de-placas-solares') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/placa.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Consórcio Sustentável</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Compra e instalação de placa solar e seus componentes. Pagamento em até 50 meses. Crédito de R$ 25 mil a R$ 50 mil.
                                </p>
                                <button href="{{ ('consorcio-sustentavel-de-placas-solares') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-veiculos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/consorcioauto.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Consórcio de Veículos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Com o consórcio de veículos você pode: comprar um automóvel novo ou semi novo com parcelas acessíveis, motos e náuticos, sem juros e sem entrada.
                                </p>
                                <button href="{{ ('consorcio-de-veiculos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-maquinas-agricolas-e-veiculos-pesados') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/trator.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Máquinas Agrícolas</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Vem fazer acontecer de forma programada a sua frota de caminhões, ônibus, tratores, máquinas e implementos agrícolas e rodoviários.
                                </p>
                                <button href="{{ ('consorcio-de-maquinas-agricolas-e-veiculos-pesados') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-servicos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/formatura.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Formatura e Intercâmbio</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Conheça o consórcio de serviços e saiba como ele pode ajudar nas realizações em diversas áreas de sua vida. Faça uma simulação e se surpreenda!
                                </p>
                                <button href="{{ ('consorcio-de-servicos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-maquinas-agricolas-e-veiculos-pesados') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/veicpesados.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Veículos Pesados</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Vem fazer acontecer de forma programada a sua frota de caminhões, ônibus, tratores, máquinas e implementos agrícolas e rodoviários.
                                </p>
                                <button href="{{ ('consorcio-de-maquinas-agricolas-e-veiculos-pesados') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-servicos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/festabrinde.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Festas e Eventos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Conheça o consórcio de serviços e saiba como ele pode ajudar nas realizações em diversas áreas de sua vida. Faça uma simulação e se surpreenda!
                                </p>
                                <button href="{{ ('consorcio-de-servicos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('consorcio-de-servicos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/consorcio/viagem.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Viagem</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Conheça o consórcio de serviços e saiba como ele pode ajudar nas realizações em diversas áreas de sua vida. Faça uma simulação e se surpreenda!
                                </p>
                                <button href="{{ ('consorcio-de-servicos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
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

    <!-- /Consórcio -->


    <!-- Seguros Empresariais -->


    <div class="overflow-x-hidden mt-2 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Seguros Empresariais
            </h1>
            <div class="ml-6 mb-5 text-gray-800 text-lg leading-8 font-medium">
                Seguros para proteger sua empresa para você cuidar dos seus negócios.
            </div>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">


                        <a href="{{ ('seguro-condominio') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-50 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/condominio.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Condomínio</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Seu condomínio merece um seguro completo, com vantagens e serviços exclusivos.
                                </p>
                                <button href="{{ ('seguro-condominio') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-de-vida-para-empresas') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/vidaempresarial.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Vida Empresarial</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O cuidado com os colaboradores que se reflete no sucesso da sua empresa.
                                </p>
                                <button href="{{ ('seguro-vida-empresarial') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-empresa') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/seguroempresa.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Empresarial</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Seguro empresarial com coberturas e serviços especiais para atender as necessidades da sua empresa.
                                </p>
                                <button href="{{ ('seguro-empresa') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-para-agronegocios') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/agronegocios.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro para Agronegócios</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro que oferece mais proteção para quem se dedica ao trabalho no campo.
                                </p>
                                <button href="{{ ('seguro-para-agronegocios') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('empresa-essencial') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/empresaessencial.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Empresa Essencial</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Seguros para proteger sua empresa para você cuidar dos seus negócios.
                                </p>
                                <button href="{{ ('empresa-essencial') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('eventos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/eventos.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Eventos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Confiança e credibilidade para realizar seu evento com coberturas e atendimento especial da Porto.
                                </p>
                                <button href="{{ ('eventos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('maquinas-e-equipamentos') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/maqequip.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Máquinas e Equipamentos</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro que protege seus equipamentos e a produtividade do seu negócio
                                </p>
                                <button href="{{ ('maquinas-e-equipamentos') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto-para-empresas') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/autoempresarial.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Auto Empresarial</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Proteção para os veículos da sua empresa
                                </p>
                                <button href="{{ ('seguro-auto-para-empresas') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-para-caminhoes') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/caminhoes.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro para Caminhão</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    A proteção que acompanha você em qualquer lugar e em qualquer situação.
                                </p>
                                <button href="{{ ('seguro-para-caminhao') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-para-cargas') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/cargas.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Transportes de Carga</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Transporte cargas com segurança e receba nossos benefícios e serviços exclusivos.
                                </p>
                                <button href="{{ ('seguro-para-cargas') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>

                        <a href="{{ ('seguro-responsabilidade-civil') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/rcivil.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Responsabilidade Civil</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro para danos causados involuntariamente a terceiros.
                                </p>
                                <button href="{{ ('seguro-responsabilidade-civil') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
                            </div>
                        </a>
                        
                        <a href="{{ ('seguro-taxi') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-48 w-full object-cover rounded-md" src="./images/seguros/taxi.png" alt="">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Seguro Táxi</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    O seguro que oferece serviços gratuitos, assistência rápida e descontos especiais para taxistas.
                                </p>
                                <button href="{{ ('seguro-taxi') }}" class="mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">Saíba mais</button>
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

    <!-- /Seguros Empresariais -->
    <!-- Seguradoras -->

    <div class="py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <p class="line-clamp-2 mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Cote rápido.</p>
            </div>

            <div class="grid justify-center">
                <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none sm:grid-cols-2 lg:grid-cols-4">
                    <a href="{{ ('hdiseguros') }}" class="bg-linear-to-t from-gray-900 via-green-600 to-green-400 border border-gray-200 rounded-xl drop-shadow-md shadow-current p-5  hover:shadow-lg hover:transform hover:scale-105 duration-500 ease-in-out ">
                        <div class="flex flex-col justify-center items-center text-white p-2 ">
                            <div class="bg-linear-to-t from-gray-900 via-green-600 to-green-400 rounded-full p-2">
                                <img class="h-24 w-24 rounded-full" src="./images/seguradoras/hdi.png" alt="">
                            </div>
                            <div class="text-3xl m-2 ">HDI Seguros</div>
                        </div>
                    </a>
                    <a href="{{ ('portoseguro') }}" class="bg-linear-to-bl from-slate-900 via-primary-600 to-indigo-400 border border-gray-200 rounded-xl drop-shadow-md shadow-current p-5  hover:shadow-lg hover:transform hover:scale-105 duration-500 ease-in-out ">
                        <div class="flex flex-col justify-center items-center text-white p-2 ">
                            <div class="bg-linear-to-bl from-slate-900 via-indigo-600 to-indigo-400 rounded-full p-2">
                                <img class="h-24 w-24 rounded-full" src="./images/seguradoras/porto.png" alt="">
                            </div>
                            <div class="text-3xl m-2 ">Porto Seguro</div>
                        </div>
                    </a>


                    <a href="{{ ('tokiomarine') }}" class="bg-linear-to-br from-gray-400 via-teal-800 to-teal-400 border border-gray-200 rounded-xl drop-shadow-md shadow-current p-5  hover:shadow-lg hover:transform hover:scale-105 duration-500 ease-in-out ">
                        <div class="flex flex-col justify-center items-center text-white p-2 ">
                            <div class="bg-linear-to-br from-gray-400 via-teal-800 to-teal-400 rounded-full p-2">
                                <img class="h-24 w-24 rounded-full" src="./images/seguradoras/tokio.png" alt="">
                            </div>
                            <div class="text-3xl m-2 ">Tokio Marine</div>
                        </div>
                    </a>


                    <a href="{{ ('sulamerica') }}" class="bg-linear-to-bl from-slate-900 via-orange-600 to-orange-400 border border-gray-200 rounded-xl drop-shadow-md shadow-current p-5  hover:shadow-lg hover:transform hover:scale-105 duration-500 ease-in-out ">
                        <div class="flex flex-col justify-center items-center text-white p-2 ">
                            <div class="bg-linear-to-bl from-slate-900 via-orange-600 to-orange-400 rounded-full p-2">
                                <img class="h-24 w-24 rounded-full" src="./images/seguradoras/logosulamerica.png" alt="">
                            </div>
                            <div class="text-3xl m-2 ">SulAmérica</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

 <!-- /Seguradoras -->
    <!-- script Slide -->

    <script>
        // set the default active slide to the first one
        let slideIndex = 1;
        showSlide(slideIndex);

        // change slide with the prev/next button
        function moveSlide(moveStep) {
            showSlide(slideIndex += moveStep);
        }




        // change slide with the dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            let i;
            const slides = document.getElementsByClassName("slide");
            const dots = document.getElementsByClassName('dot');

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

            // hide all slides
            for (i = 0; i < slides.length; i++) {
                slides[i].classList.add('hidden');
            }

            // remove active status from all dots
            for (i = 0; i < dots.length; i++) {
                dots[i].classList.remove('bg-primary-600');
                dots[i].classList.add('bg-red-400');
            }

            // show the active slide
            slides[slideIndex - 1].classList.remove('hidden');

            // highlight the active dot
            dots[slideIndex - 1].classList.remove('bg-red-400');
            dots[slideIndex - 1].classList.add('bg-primary-600');
        }
    </script>


    <!-- /script Slide -->

</x-layouts::app>