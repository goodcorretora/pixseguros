<x-layouts::app>
    <x-slot name="title">Seguro Condomínio</x-slot>





    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Condomínio</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Um seguro completo para proteger imóvel, moradores e síndico, com a praticidade dos serviços.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="contato" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            SOLICITAR UMA PROPOSTA
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/seguros/condominio.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Seu condomínio merece um seguro completo, com vantagens e serviços exclusivos
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    O Seguro Condomínio da Porto Seguro oferece coberturas completas e serviços emergenciais para diversos tipos de condomínio: residenciais verticais e horizontais, comerciais, mistos, de escritórios ou consultórios, flats e apart-hotéis. Garantia de proteção e tranquilidade sem esquecer da praticidade.
                </p>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl">
                    Com o Seguro Condomínio da Porto, você tem:
                </h2>
                <p class="mt-6 text-xl leading-8  text-secondary-900">
                    Conheça as coberturas básicas e extras que você pode adicionar ao seu contrato.
                </p>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-clock text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Rapidez na análise e no pagamento de indenizações de sinistro.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-calendar-days text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Pagamento facilitado em até 12 vezes sem juros no Cartão Porto,ou 6 vezes sem juros demais formas de pagamento.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-bolt text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Não depreciação em sinistro de danos elétricos.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="w-full text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl mb-12">
                        Com as coberturas do seguro condomínio, você se protege de imprevistos
                    </h2>
                    <p class="mt-6 text-xl leading-8  text-secondary-900">
                        Informações resumidas. Para mais detalhes, consulte as condições gerais. As coberturas de responsabilidade civil organizador ou expositor são coberturas básicas e obrigatórias. As coberturas adicionais não poderão ser contratadas isoladamente.
                    </p>
                </div>
            </div>

            <div class="lg:text-center">

                <div class="flex flex-wrap" x-data="{ openTab: 1 }">
                    <div class="w-full rounded-lg">
                        <ul id="tabs" class="inline-flex justify-between items-center w-full">
                            <li @click="openTab = 1" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Coberturas Básicas</a>
                            </li>
                            <li @click="openTab = 2" class="-mb-px mr-2 last:mr-0 flex-auto text-center text-lg bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-2 py-2">
                                <a>Coberturas Adicionais</a>
                            </li>
                        </ul>


                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mt-2 rounded-lg border">
                            <div class="flex-auto">
                                <div class="tab-content mt-2 tab-space">
                                    <div class="block" x-show="openTab === 1">
                                        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-fire text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Básica simples</h1>
                                                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                                                            Oferece garantias para os prejuízos em caso de incêndio, explosão, fumaça e queda de aeronaves. Também é possível contratar outras coberturas adicionais para proteger ainda mais o condomínio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <i class="fa-solid fa-truck text-primary-600 fa-2x inline mr-3.5"></i>
                                                        <h1 class="font-bold text-xl mb-2">Básica ampla</h2>
                                                            <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-4">
                                                                Oferece garantias para todos os danos estruturais que possam acontecer ao condomínio em caso de incêndio, explosão, fumaça, queda de aeronaves, vendaval, impacto de veículos, danos elétricos, quebra de vidros, chuveiros automáticos, tumultos, greves e lock out, alagamento, desmoronamento e vazamento de tanques ou tubulações.
                                                            </p>
                                                            <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-4">
                                                                Também é possível contratar outras coberturas adicionais.
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
                                                        <h1 class="font-bold text-2xl mb-2">Reformas</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Ampara as áreas comuns do condomínio segurado durante a reforma de melhoria, manutenção ou instalações de equipamentos.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Perda ou pagamento de aluguel</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante o valor do aluguel mensal ao proprietário do imóvel ou ao inquilino, na impossibilidade do imóvel ser habitado em decorrência de incêndio, vendaval ou tremor de terra.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Alagamento</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os danos materiais que o condomínio sofra pela entrada de água proveniente de enchentes ou chuvas fortes.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Chuveiros automáticos (sprinklers)</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os danos que o condomínio e os bens dos moradores tiverem, por infiltração ou derramamento de água de chuveiros automáticos (sprinklers) e também os danos das instalações desses chuveiros.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Danos ao jardim</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Ampara as árvores, flores, hortas, esculturas, cascatas, chafarizes, mobiliários que estejam ao ar livre, sistemas de irrigação e iluminação destes espaços, em caso de incêndio, vendaval, chuva de granizo, roubo ou furto, desmoronamento ou queda de raios.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Danos elétricos</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante danos em aparelhos, instalações elétricas e eletrônicas do condomínio, causadas por curto circuito ou oscilação de energia.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Danos morais</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Ampara possíveis processos por danos morais que o condomínio sofra, decorrentes de danos materiais ou corporais causados a terceiros, desde que eles sejam indenizados na cobertura de responsabilidade civil do condomínio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Desmoronamento</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os danos causados por desmoronamento total ou parcial do condomínio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Incêndio, fumaça e explosão de conteúdo de apartamentos</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Ampara os danos materiais dos moradores, causados por incêndio e explosão.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Painéis, anúncios luminosos e letreiros</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Cobre os danos causados a anúncios instalados no condomínio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Responsabilidade civil portões</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os danos corporais ou materiais causados a moradores e visitantes por portões e cancelas do condomínio. Ampara também os prejuízos aos portões e cancelas que, por um fechamento brusco ou uma queda, sofrerem danos.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Quebra de vidros</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante a reposição dos vidros das áreas comuns do condomínio que quebrarem acidentalmente. Ampara também os vidros instalados nas fachadas de prédio, muros, janelas, portas e balcões.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Responsabilidade civil do condomínio</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os danos corporais ou materiais causados a moradores e visitantes, pelas instalações e estrutura do condomínio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Responsabilidade civil da guarda de veículos - simples</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante o reembolso em caso de incêndio ou assalto dos carros dos moradores, visitantes ou clientes, quando estiverem estacionados dentro do condomínio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Responsabilidade civil guarda de veículos - ampla</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Nessa cobertura, além das garantias citadas acima, também ampara colisões e batidas, desde que o carro seja conduzido por um manobrista registrado dentro do condomínio. Amparamos em até R$ 2.500 os danos causados a bicicletas que estiverem em bicicletários do condomínio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Responsabilidade civil do síndico</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="bg-white">
                                                <div class="text-start px-3 pb-6 pt-2">
                                                    <h1 class="font-bold text-2xl mb-2">Responsabilidade civil empregador</h1>
                                                    <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                        Garante as despesas médicas, hospitalares e odontológicas dos empregados do condomínio caso eles sofram algum acidente durante o período de trabalho.
                                                    </p>
                                                </div>
                                            </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Subtração de bens do condomínio</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os bens do condomínio, se for vítima de assalto.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Subtração de bens dos moradores</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os bens dos moradores se o condomínio for vítima de assalto.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Subtração de valores</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Cobre valores em dinheiro, cheques, títulos, vale-transporte, vale-refeição, vale-alimentação e vale-combustível do condomínio, que sejam roubados dentro dele ou em trânsito, nas mãos de portadores.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Tumultos, greves e lock-out</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Cobre danos causados ao condomínio durante tumultos e greves. Estão garantidas também as despesas que o condomínio tiver para reprimir ou reduzir as consequências dessas movimentações.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Vazamento de tanques e tubulações</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Ampara danos causados por vazamento das tubulações ou tanques do Condomínio garantindo os danos se uma tubulação ou um tanque se romper e a água danificar o Condomínio: construção, elevador, móveis, equipamentos, e até mesmo conteúdo dos apartamentos dos condôminos. Essa cobertura ampara, inclusive, casos de desabamento de estrutura e também de danos elétricos, em situações onde a água atinja a rede elétrica, queimando equipamentos.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Vendaval e impacto de veículos</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante danos materiais provocados por ventos fortes nas áreas comuns do condomínio e tudo que faça parte da estrutura do prédio.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Vida Ampla para funcionários</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Ampara os eventos decorrentes de: Morte Acidental ou Natural, Invalidez Permanente Acidental Total ou Parcial, Auxilio Funeral, Adiantamento Especial por Doença e Diárias de Incapacidade.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>


                                            <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                                                <div class="bg-white">
                                                    <div class="text-start px-3 pb-6 pt-2">
                                                        <h1 class="font-bold text-2xl mb-2">Tremor de Terra</h1>
                                                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                                            Garante os danos à estrutura do imóvel e bens incorporados, como antenas e placas solares, além de seu conteúdo, caso venham a cair por conta de tremor de terra e terremoto.
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
                    Serviços disponíveis 24h
                </h2>
            </div>



            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-dollar-sign text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">
                                Chaveiro
                            </h1>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-house text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Encanador</h1>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-bolt text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Eletricista</h1>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-tools text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Desentupimento</h2>
                        </div>
                    </div>
                </a>



                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-money-bill-wave text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Porteiro substituto</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Serviços destinados às áreas comuns do condomínio</h1>
            <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                *Serviços disponíveis em caso de sinistro coberto pelo seguro e conforme plano contratado. A disponibilidade dos serviços pode variar de região para região, consulte as condições gerais do Seguro Condomínio da Porto Seguro.
            </p>

            <div class="mt-6 grid gap-3 lg:grid-cols-3">


                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Plano Bronze (gratuito)
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                            <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
             


                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Plano Bronze (gratuito)</p>
                            <p class="mt-1">Encanador</p>
                            <p class="mt-1">Eletricista</p>
                            <p class="mt-1">Desentupimento</p>
                            <p class="mt-1">Chaveiro</p>
                            <p class="mt-1">Limpeza* (em caso de sinistro)</p>
                            <p class="mt-1">Cobertura provisória para telhados* (em caso de sinistro)</p>
                            <p class="mt-1">Cobertura provisória para portas e janelas* (em caso de sinistro)</p>
                            <p class="mt-1">Vigia* (em caso de sinistro)</p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>


                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Plano Prata
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold"> Plano Prata</p>
                            <p class="mt-1">Encanador</p>
                            <p class="mt-1">Eletricista</p>
                            <p class="mt-1">Desentupimento</p>
                            <p class="mt-1">Chaveiro</p>
                            <p class="mt-1">Limpeza* (em caso de sinistro)</p>
                            <p class="mt-1">Cobertura provisória para telhados* (em caso de sinistro)</p>
                            <p class="mt-1">Cobertura provisória para portas e janelas* (em caso de sinistro)</p>
                            <p class="mt-1">Vigia* (em caso de sinistro)</p>
                            <p class="mt-1">Reparos em antena coletiva</p>
                            <p class="mt-1">Reparos em central telefônica e interfone</p>
                            <p class="mt-1">Reparos em bomba d'água</p>
                            <p class="mt-1">Porteiro substituto</p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Plano Ouro
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold"> Plano Ouro</p>
                            <p class="mt-1">Encanador</p>
                            <p class="mt-1">Eletricista</p>
                            <p class="mt-1">Desentupimento</p>
                            <p class="mt-1">Chaveiro</p>
                            <p class="mt-1">Limpeza* (em caso de sinistro)</p>
                            <p class="mt-1">Cobertura provisória para telhados* (em caso de sinistro)</p>
                            <p class="mt-1">Cobertura provisória para portas e janelas* (em caso de sinistro)</p>
                            <p class="mt-1">Vigia* (em caso de sinistro)</p>
                            <p class="mt-1">Reparos em antena coletiva</p>
                            <p class="mt-1">Reparos em central telefônica e interfone</p>
                            <p class="mt-1">Reparos em bomba d'água</p>
                            <p class="mt-1">Porteiro substituto</p>
                            <p class="mt-1">Reparos em refrigerador</p>
                            <p class="mt-1">Reparos em freezer</p>
                            <p class="mt-1">Reparos em fogão a gás</p>
                            <p class="mt-1">Reparos em forno de micro-ondas</p>
                            <p class="mt-1">Manutenção de portões</p>
                            <p class="mt-1">Limpeza de caixa d'água de até 20mil litros</p>
                            <p class="mt-1">Troca de segredo das fechaduras</p>
                            <p class="mt-1">Reparos em geladeira side by side</p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Peça uma proposta para seu Condomínio
                </p>
                <a href="{{url('solicitar-previdencia-privada')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    SOLICITAR UMA PROPOSTA
                </a>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
                <h4>
                    © 2022 Porto Seguro • Todos os direitos reservados.
                    Informações reduzidas. Processo SUSEP Condomínio - 15414.002485/2005-02, Vida e Acidente Pessoal de Funcionários para Condomínio - 15414.002017/2011-78, Responsabilidade Civil - 15414.900937/2017-49. O registro deste plano na SUSEP não implica, por parte da Autarquia, incentivo ou recomendação a sua comercialização.
                </h4>
            </div>
        </div>
    </div>



</x-layouts::app>