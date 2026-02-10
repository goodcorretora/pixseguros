<x-layouts::app>
    <x-slot name="title">Seguros para Eventos</x-slot>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Eventos</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Confiança e credibilidade para realizar seu evento com as coberturas e o atendimento especial da Porto Seguro.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="contato" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            Solicite uma Proposta
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/seguros/eventos.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Seu evento merece a proteção da Porto Seguro para resolver qualquer imprevisto.
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Quem planeja um evento, espera que tudo saia perfeito. Pensando nisso, o Porto Seguro Eventos possui coberturas que amparam desde a montagem até a desmontagem, além de garantir os terceiros participantes do evento. Com o Porto Seguro Eventos, organizadores e convidados ficam tranquilos do começo ao fim.
                </p>
            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Com o Seguro para Eventos, você tem:
            </h1>

            <div class="mt-6 grid gap-4 lg:grid-cols-4">

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <i class="fa-solid fa-star text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="text-lg text-black font-semibold">
                                Coberturas que vão do inicio ao fim do evento, para eventos abertos, fechados ou semiabertos.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <i class="fa-solid fa-person text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="text-lg text-black font-semibold">
                                Contratação por pessoa física ou jurídica, seja cliente final, empresa especializada ou expositor do evento.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <i class="fa-solid fa-map text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="text-lg text-black font-semibold">
                                Contratação personalizada e ágil, em qualquer lugar do Brasil.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('consorcio-de-motos') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <i class="fa-solid fa-truck text-primary-600 fa-4x inline mr-3.5"></i>
                            <p class="text-lg text-black font-semibold">
                                10% de desconto no aluguel de ambulâncias Med Salva emergências médicas .
                            </p>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Com o Seguro para Eventos, você tem:
            </h1>

            <div class="mt-6 grid gap-3 lg:grid-cols-3">

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Eventos corporativos
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Eventos corporativos
                        </p>

                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Direcionados a empresas e seus funcionários e colaboradores. Abrange palestras, congressos, simpósios, confraternizações, entre outros.
                        </p>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Eventos sociais
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Eventos sociais
                        </p>

                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Celebram os momentos especiais, como casamentos, formaturas, aniversários, bailes de debutantes, batizados, bodas, etc.
                        </p>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Eventos esportivos
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Eventos esportivos
                        </p>

                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Promovem a prática de diversos esportes, sejam campeonatos, torneios, grandes ou pequenas competições, atividades de lazer, treinos, gincanas, entre outros.
                        </p>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Eventos religioso
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Eventos religioso
                        </p>

                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Reúnem fiéis para celebrações de cultos, retiros, palestras, caminhadas, shows, festas e outras atividades de interação com motivação religiosa.
                        </p>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Eventos promocionais
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Eventos promocionais
                        </p>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Ações pontuais para promoção de marcas, produtos, lançamentos, serviços e outras atividades como exposições e feiras.
                        </p>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Eventos culturais
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Eventos culturais
                        </p>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Direcionado para empresas que promovem shows musicais, peças de teatro, apresentações de circo, entre outros.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Coberturas exclusivas para não correr nenhum risco:
            </h1>
            <div class="mt-6 grid gap-3 lg:grid-cols-2">
                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
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
                            <p class="mt-1 font-bold">Responsabilidade Civil Expositor</p>
                            <p class="mt-1">Cobre os danos corporais ou materiais causados a terceiros em razão de acidentes ocorridos no espaço destinado ao expositor.</p>
                            <p class="mt-1 font-bold">Responsabilidade Civil Organizador</p>
                            <p class="mt-1">Cobre os danos corporais ou materiais causados a terceiros em razão de acidentes relacionados à realização do evento.</p>
                        </div>
                    </div>
                </div>
                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Coberturas Adicionais
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Coberturas Adicionais</p>
                            <p class="mt-1 font-bold">Acidentes Pessoais</p>
                            <p class="mt-1">Garante o pagamento de despesas em casos de morte acidental e invalidez permanente total ou parcial, decorrente de acidente durante o evento segurado, além das despesas médicas, hospitalares e odontológicas.</p>
                            <p class="mt-1 font-bold">Instalação, Montagem e Desmontagem</p>
                            <p class="mt-1">Ampara os danos materiais ou corporais causados a terceiros e às empresas contratadas pelo segurado durante a instalação, montagem e desmontagem da estrutura temporária necessária à realização do evento.</p>
                            <p class="mt-1 font-bold">Responsabilidade Civil Danos Morais</p>
                            <p class="mt-1">Cobre possíveis processos por danos morais que o segurado sofra devido a danos materiais ou corporais causados a terceiros em decorrência dos riscos cobertos no contrato do seguro.</p>
                            <p class="mt-1 font-bold">Responsabilidade Civil de Guarda de Veículos de Terceiros</p>
                            <p class="mt-1">Existem duas modalidades de contratação para essa cobertura. Simples: garante o reembolso das despesas relativas aos reparos de danos causados aos veículos de terceiros que ficam sob a guarda do segurado durante o evento. Ampla: garante a cobertura para os veículos de terceiros que sofrerem danos ao serem conduzidos por manobrista vinculado ao segurado ou ao local destinado para estacionamento durante o evento.</p>
                            <p class="mt-1 font-bold">Responsabilidade Civil Fogos de Artifício</p>
                            <p class="mt-1">Cobre os danos materiais ou corporais involuntários causados a terceiros em razão de acidentes com o lançamento de fogos de artifício durante a realização do evento.</p>
                            <p class="mt-1 font-bold">Responsabilidade Civil Fornecimento de Bebidas e Comestíveis</p>
                            <p class="mt-1">Cobre os danos causados a terceiros pelo fornecimento de bebidas e alimentos para consumo durante o evento, desde que o fornecimento seja feito por empresas contratadas pelo segurado.</p>
                            <p class="mt-1 font-bold">Responsabilidade Civil para Pessoas Designadas</p>
                            <p class="mt-1">Ampara os danos materiais ou corporais causados às pessoas indicadas no contrato como participantes da realização do evento.</p>
                            <p class="mt-1 font-bold">Responsabilidade Civil para Prédios e Construções de Terceiros</p>
                            <p class="mt-1">Ampara os danos materiais involuntários causados a imóveis vizinhos ao local de realização do evento ou a espaços locados pelo segurado para realização do evento.</p>
                            <p class="mt-1 font-bold">Danos ao Conteúdo do Local de Risco</p>
                            <p class="mt-1">Garante as despesas decorrentes de prejuízos causados aos bens de propriedade do segurado ou por ele utilizados, durante a realização do evento segurado e exclusivamente nas dependências do local de risco.</p>
                            <p class="mt-1 font-bold">Equipamentos Eletroeletrônicos Musicais e Cinematográficos</p>
                            <p class="mt-1">Ampara os danos causados a computadores, câmeras de circuito interno, aparelhos telefônicos, instrumentos musicais, equipamentos cinematográficos, de iluminação, fotográficos, eletrônicos de áudio e vídeo, entre outros.</p>
                            <p class="mt-1 font-bold">Não-utilização do Local</p>
                            <p class="mt-1">Ampara as despesas decorrentes da impossibilidade de utilização do local para onde estava prevista a realização do evento em consequência de incêndio, desmoronamento, alagamento, entre outros.</p>
                            <p class="mt-1 font-bold">Objetos e Equipamentos em Exposição</p>
                            <p class="mt-1">Cobre os prejuízos causados aos objetos e equipamentos expostos durante o evento.</p>
                            <p class="mt-1 font-bold">Subtração de Valores em Bilheteria</p>
                            <p class="mt-1">Ampara valores em dinheiro e cheque relacionados à venda de ingressos para o evento segurado, que sejam roubados ou furtados no interior da bilheteria ou em trânsito, nas mãos de portadores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                    Tire suas dúvidas sobre o Seguro para Eventos
                </h1>
            </div>
            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona o seguro de eventos da Porto Seguros?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>

                            O seguro de eventos atende às necessidades de organizadores e convidados e ampara todos os participantes, em diversas situações, desde a montagem até a desmontagem do evento.
                        </p>
                        <p>
                            As coberturas podem ser personalizadas de acordo com a necessidade de cada contratante.
                        </p>
                        <p>
                            Pode ser contratado por pessoas físicas e empresas que atuam na prestação de serviços em eventos (organização, promoção ou exposição). Também é possível contratar mais de um evento por apólice, desde que já tenham um cronograma com as datas dos eventos.
                        </p>
                    </div>
                </div>
            </div>


            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como posso utilizar o benefício da Med Salva?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Med Salva é um serviço de atendimento Pré-Hospitalar e emergências médicas que oferece atendimento aos segurados do Seguro Eventos, mediante consulta de localização. </p>
                        <p>Basta entrar em contato com o parceiro por meio do telefone 11 3225 2277 e se identificar como cliente Seguro Eventos ao solicitar o serviço de locação de ambulância.

                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Para quais categorias posso contratar o Seguro para Eventos da Porto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p> É possível fazer a contratação do Seguro para Eventos da Porto para:</p>
                        <p> Feiras;</p><p> Exposições; </p><p> Recreação;</p><p> Eventos técnicos;</p>
                        <p> Encontros religiosos;</p><p> Torneios esportivos com/sem motor e similares;</p>
                        <p> Exibições artísticas e políticas;</p>
                        <p> Torneios desportivos radicais e similares;</p>
                        <p> Confraternizações; </p>
                        <p> Shows;</p>
                        <p> Espetáculos teatrais e circenses;</p>
                        <p> Entre outros, mediante consulta.</p>
                    </div>
                </div>
            </div>


            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que exatamente o seguro para eventos garante e protege?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                        O Seguro para Eventos da Porto Seguro tem o objetivo de proteger  possíveis prejuízos que venham a acontecer em virtude de imprevistos durante o evento. A proteção abrange desde os organizadores convidados, artistas e até itens que compõem a mobília, desde que contratado a cobertura.
                        </p>
                    </div>
                </div>
            </div>


            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quem pode contratar o Seguro para Eventos da Porto Seguro?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            O Seguro para Eventos da Porto pode ser contratado por pessoa física que vai se casar por exemplo e deseja proteção para sua festa de casamento. Também pode ser contratado por pessoa jurídica para diversos tipos de eventos e até órgãos públicos através do processo de licitação.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                Além dos organizadores, expositores e convidados, o que mais o seguro protege?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>De acordo com as coberturas contratadas, o seguro para Eventos da Porto protege também:</p>
                        <p>Objetos de decoração;</p>
                        <p>Mobiliário;</p>
                        <p>Eletrodomésticos;</p>
                        <p>Painéis;</p>
                        <p>Letreiros não eletrônicos;</p>
                        <p>Anúncios luminosos;</p>
                        <p>Estruturas temporárias, desde que montadas exclusivamente para o evento;</p>
                        <p>Objetos cenográficos;</p>
                        <p>Geradores.</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais as formas de pagamento do Seguro para Eventos da Porto Seguro?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>É possível realizar o pagamento do seguro através de boleto bancário, débito em conta corrente, em até 12x sem juros no Cartão de Crédito Porto Bank, ou em até 6x sem juros em cartões de crédito de outras bandeiras.</p>
                        <p>A quantidade de parcelas dependerá do período de duração do evento. Ex.: Se a vigência da apólice for maior ou igual a 60 dias, o valor poderá ser parcelado em 2 vezes com a 1ª parcela a vista,  e a 2° parcela para 30 dias e assim por diante.</p>
                    </div>
                </div>
            </div>

            
            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual a validade do Seguro para Eventos da Porto Seguro?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            A vigência inicia-se às 24 horas do primeiro dia das operações de Instalação, Montagem e Desmontagem (quando contratada a cobertura acessória) e termina às 24 horas do último dia das operações de desmontagem. Quando não contratada a cobertura de Instalação, Montagem e Desmontagem, a vigência se iniciará às 24 horas da data do evento e findará às 24 horas da data de seu término. O período máximo de contratação permitido é 365 dias.
                        </p>
                    </div>
                </div>
            </div>            

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como acionar o Seguro para Eventos da Porto Seguro?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>Para acionar o Seguro para Eventos da Porto, basta entrar em contato com seu corretor ou ligar nos seguintes telefones:</p>
                        <p>11 3366 3110 Central de Serviços - Grande São Paulo </p>
                        <p>11 3004 6268 Central de Serviços - Capitais e Regiões Metropolitanas</p>
                        <p>0800 727 8118 Central de Serviços - Demais localidades</p>
                        <p>0800 727 2765 SAC</p>
                        <p>0800 727 8736 SAC - Deficientes auditivos.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Veja mais detalhes sobre as coberturas, condições de contratação, limites de indenizações e outras informações sobre o Porto Seguro Eventos.
                </p>
                <a href="{{url('https://www.portoseguro.com.br/eventos#condicoes-gerais')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Faça o seguro do seu Evento aqui.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>



</x-layouts::app>