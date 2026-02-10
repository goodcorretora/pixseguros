<x-layouts::app>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro para Caminhão</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    A proteção que acompanha você em qualquer lugar e em qualquer situação.
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
                <img src="{{ asset('images/seguros/caminhoes.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Um seguro completo para seu veículo de trabalho
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    O Seguro Caminhão da Porto garante coberturas e serviços que atendem a sua necessidade, tanto na estrada, quanto fora dela. Além da proteção para o veículo, você conta com serviços residenciais que proporcionam tranquilidade para você e sua família.
                </p>
            </div>
        </div>
    </div>


    
    <div class="overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Com o Seguro Caminhão, você fica bem amparado
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-truck text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Assistência 24h gratuita para envio de guincho ou técnico</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Envio ágil de guincho ou técnico para:  problemas mecânicos, elétricos, falta de combustível, troca de pneus, substituição de bateria, chaveiro.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-home text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Serviços emergenciais e de manutenção para sua casa</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Mão de obra gratuita com segurança e qualidade para: conserto de eletrodomésticos, reparo nas rede elétrica e hidráulica, help desk, desentupimento, limpeza de calhas, chaveiro comum.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-truck-front text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Cobertura para danos causados em operações de basculamento</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                Cobertura para danos causados pelo veículo segurado durante operações de basculamento. A cobertura é válida para o veículo segurado ou terceiros atingidos durante a operação. A garantia segue os limites de indenização contratados.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-link-slash text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Reposição do valor de 0km por até 6 meses</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Nos casos de indenização integral, você tem garantia de até 6 meses para a reposição do caminhão pelo valor de 0km. Cobertura válida para seguros contratados na modalidade de valor de mercado, de acordo com o tipo de caminhão, modelo, região e condições de contratação.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-fire text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Benefícios e vantagens exclusivas</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Mais serviços, vantagens e descontos: benefícios com o Cartão de Crédito Porto Seguro Bank, descontos em despachantes, descontos em aluguel de veículos, PortoPlus: descontos e ofertas em diversos parceiros.
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
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-secondary-900 sm:text-4xl text-center">
                    Confira as coberturas 
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Cobertura básica
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p class="mt-1 font-bold">Cobertura básica</p>
                        <p class="mt-1 font-bold">Total</p>
                        <p class="mt-1">Dano parcial ou integral ao caminhão por colisão, incêndio, roubo e furto.</p>
                        <p class="mt-1 font-bold">Danos a terceiros</p>
                        <p class="mt-1">Danos materiais e corporais decorrentes de acidentes com terceiros.</p>
                        <p class="mt-1 font-bold">Acidentes pessoais de passageiros</p>
                        <p class="mt-1">Danos corporais causados aos passageiros em acidente com o veículo segurado.</p>
                        <p class="mt-1 font-bold">Incêndio, roubo e furto</p>
                        <p class="mt-1">Reembolso de despesas que você possa vir a ter em caso de sinistro de indenização integral, até o limite máximo previsto na apólice.</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Cobertura adicionais
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p class="mt-1 font-bold">Coberturas adicionais</p>
                        <p class="mt-1 font-bold">Lucros cessantes por paralisação do veículo</p>
                        <p class="mt-1">Prevê o pagamento de diárias no caso de acidente em que seja necessária a paralisação do veículo utilizado para trabalho.</p>
                        <p class="mt-1 font-bold">Isenção de franquia no primeiro sinistro (seguro da franquia)</p>
                        <p class="mt-1">Pagamento integral da franquia no primeiro sinistro, quando os prejuízos ultrapassarem o valor da franquia estipulada na apólice.</p>
                        <p class="mt-1 font-bold">Proteção aos vidros</p>
                        <p class="mt-1">Cobertura que prevê a troca ou reparo em caso de danos aos vidros, às lanternas, aos faróis e aos retrovisores.</p>
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
                            Ainda garante descontos especiais
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">


                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                <img class="h-60 w-full object-cover rounded-md" src="./images/seguros/stransitogentil.png" alt="">
                                    <h1 class="font-bold text-2xl mb-2">App Trânsito +Gentil</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        </p>
                                        Até 25% de desconto no Seguro Auto. Ao se cadastrar no app Trânsito+gentil, você ganha 3% de desconto na contratação ou renovação do seu Porto Seguro Auto e pode ganhar até 22% de desconto pelo seu desepenho no volante.
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                <img class="h-60 w-full object-cover rounded-md" src="./images/seguros/sdespachante.png" alt="">
                                    <h1 class="font-bold text-2xl mb-2">Desconto em despachante</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>
                                            Com o Seguro Caminhão, você tem desconto em despachante para resolver a burocracia com facilidade. Assim, você economiza tempo e dinheiro, contando com desconto nos horários.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                <img class="h-60 w-full object-cover rounded-md" src="./images/seguros/saluguel.png" alt="">
                                    <h1 class="font-bold text-2xl mb-2">Desconto em aluguel de veículo</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>
                                            O caminhão está em revisão ou indisponível por qualquer motivo? Cliente do Seguro Caminhão pode alugar um carro com desconto. Uma vantagem para você usar quando precisar, sem necessidade da ocorrência de sinistro.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                <img class="h-60 w-full object-cover rounded-md" src="./images/seguros/sitau.png" alt="">
                                    <h1 class="font-bold text-2xl mb-2">Desconto para correntista Itaú</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>
                                            10% de desconto para correntista Itaú, além de troca de pontos na contratação ou renovação do Seguro Auto.
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
                <p class="text-2xl font-semibold mb-4">
                    Quer mais detalhes? Acesse as Condições Gerais e confira as cláusulas e disposições do seu Seguro Caminhão.
                </p>
                <a href="{{url('https://www.portoseguro.com.br/seguro-para-caminhoes#condicoes-gerais')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Peça uma proposta do seguro para caminhão.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>


</x-layouts::app>