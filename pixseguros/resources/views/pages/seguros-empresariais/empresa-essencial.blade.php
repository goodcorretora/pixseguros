<x-layouts::app>
    <x-slot name="title">Seguro Empresa Essencial</x-slot>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Empresa Essencial</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Proteção indispensável e exclusiva para micro e pequenas empresas.
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
                <img src="{{ asset('images/seguros/empresaessencial.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Coberturas essenciais e na medida certa para sua empresa
                </h1>
                <p class="text-xl mt-12 mb-6 md:text-lg md:mb-12">
                    O Porto Seguro Empresa Essencial é simples na contratação e completo na proteção. É o seguro pensado para atender microempreendedores, empreendedores, microempresas e pequenas empresas que atuam no comércio, indústria ou serviço. Pode cuidar do seu negócio, que nós cuidamos da proteção da sua empresa.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Conheça as coberturas básicas que amparam sua empresa e seus bens
            </h1>
            <div class="mt-6 grid gap-3 lg:grid-cols-2">

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full border-2 border-primary-600 h-24 text-3xl font-bold bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                                Coberturas Básicas
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">

                            <p class="mt-1 font-bold">Coberturas Básicas</p>
                            <p class="mt-1 font-bold">Incêndio, Explosão, Implosão e Fumaça</p>
                            <p class="mt-1">Cobre os danos materiais causados à empresa por incêndio, explosão, implosão ou fumaça, mesmo se iniciarem fora do local segurado.</p>
                            <p class="mt-1">Essa cobertura poderá amparar, tanto a estrutura física quanto o mobiliário e as mercadorias.</p>
                            <p class="mt-1 font-bold">Roubo ou furto por meio de arrombamento</p>
                            <p class="mt-1">Assegura a proteção se houver roubo ou furto por meio de arrombamento do local, ou ameaça a funcionários, ou ao dono da empresa.</p>
                            <p class="mt-1">A cobertura abrange os bens, valores e mercadorias que estavam na empresa.</p>                        
                            <p class="mt-1 font-bold">Danos Elétricos e Eventos da Natureza</p>
                            <p class="mt-1">Cobre os danos a aparelhos e instalações elétricas danificados por curto-circuito, variação de energia ou queda de raio.</p>
                            <p class="mt-1">Também garante a cobertura de danos causados por eventos da natureza, como ventos fortes, vendaval, furacão, ciclone, tornado, queda de granizo e tremor de terra.</p>
                            <p class="mt-1">Esses prejuízos podem ser:</p>
                            <p class="mt-1">destelhamento do imóvel;</p>
                            <p class="mt-1">quebra de letreiros;</p>
                            <p class="mt-1">danos a janelas e portas;</p>
                            <p class="mt-1">conteúdo (móveis e mercadorias) danificado ou molhado por esses acidentes naturais.</p>                        
                            <p class="mt-1 font-bold">Perda de Lucro por Incêndio</p>
                            <p class="mt-1">Garante o pagamento das despesas fixas com água e energia elétrica, impostos, salários e até se empresa estiver paralisada em caso de incêndio.</p>
                            <p class="mt-1">A cobertura também assegura proteção se a empresa não puder realizar suas atividades no local em que estava instalada por conta de sinistro. Dessa forma, poderá ter o pagamento do aluguel de um local temporário durante o período de reparo.</p>
                            <p class="mt-1">Se for necessária a mudança para um novo local, também haverá cobertura para despesas com transporte.</p>
                            <p class="mt-1 font-bold">Danos a Terceiros</p>
                            <p class="mt-1">Garante o reembolso das despesas com danos causados a terceiros na empresa. A cobertura de Responsabilidade Civil também abrange danos morais de terceiros, se a empresa for responsabilizada civilmente a indenizá-los, por dano material e/ou corporal. Da mesma forma, a cobertura se estende aos danos materiais ou corporais sofridos pelos funcionários (Responsabilidade Civil Empregador), dentro ou fora da empresa, desde que estejam em serviço. Abrange inclusive as despesas médico-hospitalares, odontológicas e funerárias desses funcionários.</p>

                        </div>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full border-2 border-primary-600 h-24 text-3xl font-bold bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                                Coberturas Opicionais
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">

                            <p class="mt-1 font-bold">Coberturas Opicionais</p>
                            <p class="mt-1 font-bold">Mercadorias frigorificadas</p>
                            <p class="mt-1">Garante a reposição de mercadorias armazenadas em geladeiras, freezers ou câmaras frias, danificadas por falta de energia elétrica por mais de 24h ou por falha no sistema de refrigeração.</p>
                            <p class="mt-1 font-bold">Vazamento de Tubulações</p>
                            <p class="mt-1">Cobre os danos causados por problemas com tubulações ou tanques de água da empresa.</p>
                            <p class="mt-1">Se houver rompimento em que a água danifique a construção ou móveis, equipamentos, estoques e até matéria-prima de uma empresa, a cobertura poderá ser acionada.</p>        
                            <p class="mt-1">Casos de desabamento de estrutura e de danos elétricos em que a água atinja a rede elétrica, queimando os equipamentos, também estão inclusas.</p>
                            <p class="mt-1 font-bold">Tumultos</p>
                            <p class="mt-1">Cobre a depredação sofrida pela empresa segurada, devido a tumultos ou greves.</p>
                            <p class="mt-1 font-bold">Danos a Veículos de Terceiros</p>
                            <p class="mt-1">Cobre os danos causados a veículos de terceiros estacionados na empresa, em caso de incêndio e assalto. A cobertura também ampara danos por queda de objetos nos veículos e por desabamento ou desmoronamento do local.</p>
                            <p class="mt-1 font-bold">Quebra de Vidros</p>
                            <p class="mt-1">Garante a reposição dos vidros e espelhos da empresa, incluindo instalados e utilizados em paredes divisórias, balcões, prateleiras, vitrines, provadores, muros, portões, portas e janelas.</p>
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
                            Seguro Empresa Essencial oferece:
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-handshake text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Contratação rápida: escolha o pacote de coberturas que combina com o perfil da sua empresa
                                    </p>

                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-calendar-days text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Parcelamento mensal que cabe no seu bolso
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-clock text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Serviços emergenciais 24h, como: chaveiro, encanador e eletricista
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
            <div class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl md:mb-6">
                            Em caso de sinistro, acesse também
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-shop text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Coberturas Provisória de portas, janelas, divisória e vitrines
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-people-roof text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Coberturas Provisório de Telhados
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-soap text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Limpeza
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-person-military-pointing text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Vigia
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
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    A proteção da sua empresa começa aqui.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>



</x-layouts::app>