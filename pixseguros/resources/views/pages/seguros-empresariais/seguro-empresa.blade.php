<x-layouts::app>
    <x-slot name="title">Seguro Empresa</x-slot>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Empresarial</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Seguro empresarial com coberturas e serviços especiais para atender as necessidades da sua empresa.
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
                <img src="{{ asset('images/seguros/seguroempresa.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    O seguro Empresa da Porto Seguro tem a proteção ideal para empresas de todos os tamanhos e seguimentos
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    O seguro empresarial da Porto Seguro garante a proteção na medida certa para pequenas, médias e grandes empresas que atuam nos setores de comércio, indústria ou serviço. Além das diversas opções de coberturas, sua empresa pode contar com serviços de assistência de profissionais especializados, como encanador, eletricista, técnico em desentupimento, chaveiro, entre outros. Tudo para facilitar o dia a dia do seu negócio.
                </p>
            </div>
        </div>
    </div>

    <div class="overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">
            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Coberturas e serviços personalizados para cada segmento
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sacademia.png" alt="foto de academia">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Academias</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Ambiente seguro para a prátca de atividades.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sbares.png" alt="Foto de bar">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Bares e restaurantes</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Estabelecimentos e clientes protegidos.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sclinica.png" alt="Foto de clínica">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Clínicas e consultórios</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Mais tranquidade para atender os pacientes.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sconcessionario.png" alt="Foto de concessionário">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Concessionárias</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Coberturas completas para os veículos.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/scoworking.png" alt="Foto de coworking">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Coworking</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Segurança financeira para do nos e administradores de espaços de trabalho compartilhado.
                                </p>
                            </div>
                        </a>


                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sescola.png" alt="Foto de escola">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Escola</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Garantia de segurança no ambiente escolar.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sestetica.png" alt="Foto procedimento de estética">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Estética e beleza</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Espaços protegidos para garantir o bem-estar de todos.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/shotel.png" alt="Foto de quarto de hotel">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Hotéis e pousadas</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Coberturas exclusivas para o espaço e seus hóspedes.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sperfumaria.png" alt="Foto de perfumaria">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Perfumaria</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Lojas, mercadorias e clientes mais seguros.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/spetshop.png" alt="Foto de pet shop">
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Pet shop e clínicas veterinárias</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cuidados extras para proteger seu negócio.
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
            <div class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl md:mb-6">
                            Coberturas que amparam sua empresa
                        </h1>
                        <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                            Para mais detalhes sobre cada cobertura e garantia, consulte as Condições Gerais do Seguro Empresa da Porto.
                        </p>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-fire text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Incêndio, explosão, implosão, fumaça e queda de aeronave</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Cobre os danos materiais causados à empresa, mesmo se o incidente iniciar fora do local segurado. Amparo para a estrutura física, o mobiliário e as mercadorias.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-people-roof text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Responsabilidade civil gestão empresarial (D&O)</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Protege o patrimônio dos administradores, diretores e empregados com cargos de gestão na empresa, quando responsabilizados, judicial ou administrativamente, por danos a terceiros.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-bolt text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Danos elétricos</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Garante danos a aparelhos e instalações elétricas por curto-circuito, variação de energia ou queda de raio.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-face-frown text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Subtração de bens e mercadorias</h1>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Em caso de assalto à mão armada ou arrombamento da empresa, cobre mercadorias, máquinas, equipamentos e a danos causados ao imóvel.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-6 grid">
                        <div x-data={show:false} class="mt-5">
                            <p class="flex justify-center">
                                <button @click="show=!show" class="w-96 h-24 border-2 border-primary-600 text-3xl font-bold bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-200 px-4 py-3 focus:outline-hidden" type="button">
                                    Ver todas coberturas
                                </button>
                            </p>
                            <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                                <div class="text-right space-x-5 mt-5">
                                    <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                        <i class="fa-solid fa-x fa-2xl"></i>
                                    </button>
                                </div>
                                <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                                    <p class="mt-1 font-bold">Ver todas coberturas</p>
                                    <p class="mt-1 font-bold">Responsabilidade civil empregador</p>
                                    <p class="mt-1">Cobre os danos materiais ou corporais sofridos pelos funcionários, dentro ou fora da empresa, desde que estejam em serviço. Abrange, inclusive, despesas médico-hospitalares, odontológicas e funerárias desses funcionários.</p>
                                    <p class="mt-1 font-bold">Subtração de Valores</p>
                                    <p class="mt-1">Cobre os valores monetários da empresa segurada em caso de assalto à mão armada ou arrombamento do local. Até 50% do valor contratado para a cobertura pode ser utilizado para garantir valores nas mãos de portadores, quando estiverem em trânsito para remessa a bancos, pagamentos e cobranças de terceiros, em caso de assalto à mão armada.</p>
                                    <p class="mt-1 font-bold">Bullying</p>
                                    <p class="mt-1">Na cobertura de Danos Morais, é possível contratar de forma adicional os danos por bullying, causados aos alunos das instituições, seja por outros colegas ou até por funcionários da escola, desde que a instituição seja responsável judicialmente pela situação.</p>
                                    <p class="mt-1 font-bold">Contaminação e Deterioração de Mercadorias em Ambiente Frigorificado</p>
                                    <p class="mt-1">Garante a reposição de mercadorias armazenadas em geladeiras, freezers ou câmaras frias, danificadas por falta de energia elétrica por mais de 24h ou por falha no sistema de refrigeração.</p>
                                    <p class="mt-1 font-bold">Danos Morais</p>
                                    <p class="mt-1">Cobre os danos morais de terceiros, se a empresa for responsabilizada civilmente a indenizá-los, por conta de um dano material e/ou corporal.</p>
                                    <p class="mt-1 font-bold">Delivery</p>
                                    <p class="mt-1">As mercadorias transportadas em veículo próprio da empresa segurada, durante um percurso de até 100km, para entrega a clientes, estarão protegidas em caso de roubo e de acidentes com o veículo transportador.</p>
                                    <p class="mt-1 font-bold">Desmoronamento</p>
                                    <p class="mt-1">Cobre os danos por desmoronamento de muros, paredes, queda de marquises e beirais, inclusive os equipamentos, móveis e mercadorias danificados pelo desmoronamento. Cobre, também, os custos para proteger um desabamento e as despesas com a retirada de entulho.</p>
                                    <p class="mt-1 font-bold">Despesas Fixas</p>
                                    <p class="mt-1">Garante o pagamento de contas fixas, como água, luz, impostos, salários, entre outras, caso a empresa tenha que ser paralisada por causa de incêndio, danos elétricos, tumultos ou vendaval.</p>
                                    <p class="mt-1 font-bold">Despesas com Instalação em Novo Local</p>
                                    <p class="mt-1">Cobre as despesas com a mudança para um novo local se, por causa de um sinistro, a empresa tiver que se mudar definitivamente.</p>
                                    <p class="mt-1 font-bold">Equipamentos Cinematográficos</p>
                                    <p class="mt-1">Cobre os danos causados a filmadoras, máquinas fotográficas, lentes e demais equipamentos de áudio e vídeo da empresa, em caso de acidentes, inclusive durante atividades externas.</p>
                                    <p class="mt-1 font-bold">Equipamentos Eletrônicos com ou sem Subtração</p>
                                    <p class="mt-1">Garantia de cobertura para os equipamentos eletrônicos, como computadores, impressoras, televisores, entre outros, caso sejam danificados acidentalmente durante transporte interno ou por incêndio, danos elétricos, desmoronamento ou vendaval. Para a opção ‘com subtração’, os equipamentos eletrônicos também estarão amparados se houver um assalto na empresa.</p>
                                    <p class="mt-1 font-bold">Equipamentos Estacionários</p>
                                    <p class="mt-1">Cobre os danos causados a equipamentos estacionários, em acidentes dentro da empresa. Os equipamentos estacionários são aqueles de uso comercial ou industrial de uso fixo, ou seja, que não se deslocam por si só.</p>
                                    <p class="mt-1 font-bold">Fidelidade Empregados</p>
                                    <p class="mt-1">Cobre os prejuízos que a empresa possa ter por causa de crime de roubo ou furto praticado por seus empregados contra seu patrimônio.</p>
                                    <p class="mt-1 font-bold">Incêndio de bens em Locais de Terceiro</p>
                                    <p class="mt-1">Cobre danos por incêndio causados a bens, mercadorias e matérias-primas que estiverem em locais de terceiros, se a empresa utilizar serviços terceirizados durante processos de fabricação, beneficiamento, guarda ou outros.</p>
                                    <p class="mt-1 font-bold">Home Office</p>
                                    <p class="mt-1">Ampara os móveis e equipamentos da empresa, que estiverem com os funcionários que trabalham remotamente. Se esses itens sofrerem danos de causa externa, como quedas ou assaltos, inclusive no trajeto entre a empresa e a casa do funcionário, o valor de reposição desses itens estará garantido.</p>
                                    <p class="mt-1 font-bold">Impacto de Veículos Terrestres e Aéreos</p>
                                    <p class="mt-1">Cobre danos em caso de acidentes de trânsito, em que um veículo desgovernado atinge a empresa, danificando portões, muros, vitrines, paredes e demais bens segurados. Essa cobertura cobre também os danos em caso de queda de aeronaves.</p>
                                    <p class="mt-1 font-bold">Jardins Corporativos</p>
                                    <p class="mt-1">Árvores, flores, hortas, esculturas, cascatas, chafarizes, mobiliários, sistemas de irrigação e até a iluminação de jardins estarão amparados de danos por incêndio, vendaval, granizo, roubo ou furto, desmoronamento, queda de raios, entre outras situações.</p>
                                    <p class="mt-1 font-bold">Lucros Cessantes</p>
                                    <p class="mt-1">Garante a perda do lucro líquido e o pagamento das despesas fixas, caso a empresa precise ser paralisada por causa de incêndio, danos elétricos, tumultos ou vendaval, durante o período de paralisação.</p>
                                    <p class="mt-1 font-bold">Painéis, Anúncios Luminosos e Letreiros</p>
                                    <p class="mt-1">Cobre os danos a anúncios e antenas do estabelecimento em caso de acidentes, inclusive por incêndio e ventos fortes.</p>
                                    <p class="mt-1 font-bold">Perda ou Pagamento de Aluguel do Imóvel</p>
                                    <p class="mt-1">Garante o pagamento do valor do aluguel e das parcelas de IPTU de um novo local provisório, durante o período de reparo, caso a empresa não possa realizar suas atividades no local em que está, devido a danos causados por incêndio. Se o imóvel tiver um inquilino, garante também o aluguel que o proprietário deixa de receber.</p>
                                    <p class="mt-1 font-bold">Quebra de Vidros</p>
                                    <p class="mt-1">Garante a reposição dos vidros e espelhos da empresa, incluindo janelas, prateleiras, balcões, mesas, portas e demais vidros que compõem a construção do imóvel segurado.</p>
                                    <p class="mt-1 font-bold">Recomposição de Registros e Documentos</p>
                                    <p class="mt-1">Garante o reembolso das despesas com a recomposição de documentos destruídos acidentalmente dentro da empresa, inclusive custos com cartório, serviços de digitação e reimpressão.</p>
                                    <p class="mt-1 font-bold">Responsabilidade Civil Guarda de Veículos de Terceiros</p>
                                    <p class="mt-1">Cobre os danos causados a veículos de terceiros estacionados na empresa, em caso de incêndio e assalto. A cobertura ampla ampara, também, danos por batidas durante manobras, danos pela queda de objetos nos veículos, além de danos por desabamento ou desmoronamento do local.</p>
                                    <p class="mt-1 font-bold">Responsabilidade Civil</p>
                                    <p class="mt-1">Garante o reembolso das despesas com danos causados a terceiros dentro da loja.</p>
                                    <p class="mt-1 font-bold">Sprinklers</p>
                                    <p class="mt-1">Ampara as mercadorias e bens danificados se os chuveiros automáticos (sprinklers) forem acionados acidentalmente e também os custos para normalização do sistema de sprinklers.</p>
                                    <p class="mt-1 font-bold">Tremor de Terra e Terremoto</p>
                                    <p class="mt-1">Garante os danos a estrutura do imóvel e bens incorporados, como antenas e placas solares, além de seu conteúdo, caso venham a cair por conta de tremor de terra e terremoto.</p>
                                    <p class="mt-1 font-bold">Tumultos</p>
                                    <p class="mt-1">Cobre a depredação sofrida pela empresa segurada, por causa de tumultos ou greves.</p>
                                    <p class="mt-1 font-bold">Vazamento de Tubulações</p>
                                    <p class="mt-1">Ampara danos causados por problemas com as tubulações ou tanques da empresa. Se uma tubulação ou um tanque se romper e a água danificar a construção ou os móveis, equipamentos, estoque e até matéria-prima de uma empresa, iremos garantir todos esses danos. Essa cobertura ampara, inclusive, casos de desabamento de estrutura e também de danos elétricos, em situações onde a água atinja a rede elétrica, queimando equipamentos.</p>
                                    <p class="mt-1 font-bold">Vendaval, Furacão, Ciclone, Tornado e Queda de Granizo</p>
                                    <p class="mt-1">Cobre danos decorrentes de ventos fortes, ciclone, tornado ou queda de granizo, que causem destelhamento do imóvel, quebra de letreiros, danos a janelas, portas e inclusive o conteúdo (móveis e mercadorias), danificados ou molhados por esses acidentes naturais.</p>
                                    <p class="mt-1 font-bold">Responsabilidade Civil (Farmácia)</p>
                                    <p class="mt-1">Amparar os danos aos clientes em caso de erro na interpretação da receita médica ou na aplicação de curativos e injeções.</p>
                                    <p class="mt-1 font-bold">Reformas</p>
                                    <p class="mt-1">Conte com proteção para os bens existentes no local durante situações de reforma, seja para iniciar suas atividades ou mesmo para melhorar as instalações de sua empresa.</p>
                                    <p class="mt-1 font-bold">Alagamento</p>
                                    <p class="mt-1">Com contratação liberada para todo o Brasil e para qualquer atividade, essa cobertura protege contra excesso de água de chuva que cause enchentes ou ruptura de reservatórios de água com origem fora do local do segurado.</p>
                                    <p class="mt-1 font-bold">Equipamentos móveis e Movimentação interna</p>
                                    <p class="mt-1">A cobertura oferece proteção tanto para situações de movimentação interna, como para os seus equipamentos. Cobre danos materiais, dentro do local de risco, decorrentes de acidentes de causa externas.</p>
                                    <p class="mt-1 font-bold">Informações resumidas. Para mais detalhes, consulte as Condições Gerais.</p>
                                    <p class="mt-1">As coberturas de Responsabilidade Civil Organizador ou Expositor são coberturas básicas e obrigatórias. As coberturas adicionais não poderão ser contratadas isoladamente.</p>



                                </div>
                                <div class="text-right space-x-5 mt-5">
                                    <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                        Fechar
                                    </button>
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
                Coberturas
            </h1>

            <div class="mt-6 grid gap-4 lg:grid-cols-5">
                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-wrench text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Encanador</h1>
                        </div>
                    </div>
                </div>

                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-bolt text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Eletricista</h1>
                        </div>
                    </div>
                </div>

                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-arrows-rotate text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Reparos em ar-condicionado</h1>
                        </div>
                    </div>
                </div>

                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-phone text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Reparos em telefonia</h1>
                        </div>
                    </div>
                </div>

                <div href="{{ ('contato') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-key text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Chaveiro</h1>
                        </div>
                    </div>
                </div>

            </div>


            <div class="mt-6 grid">

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-96 h-24 border-2 border-primary-600 text-3xl font-bold bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-200 px-4 py-3 focus:outline-hidden" type="button">
                            Ver todos os serviços
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                            Ver todos os serviços
                        </p>

                        <div class="rounded-sm mx-auto mt-4">
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                                TABELA DE SERVIÇOS E PLANOS
                            </p>

                            <!-- Tab Contents -->

                            <div id="tab-contents">
                                <div id="first">
                                    <table class="w-full text-center rounded-lg">
                                        <thead>
                                            <tr class="text-sm text-gray-800 border border-b-0">
                                                <th class="px-4 py-4">Serviços</th>
                                                <th class="px-4 py-4">Plano compacto - gratuito¹ </th>
                                                <th class="px-4 py-4">Plano Bronze</th>
                                                <th class="px-4 py-4">Plano Prata</th>
                                                <th class="px-4 py-4">Plano Ouro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Cobertura provisória de telhados</td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Coberturas provisórias de portas, janelas, divisórias e vitrines </td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Limpeza</td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Segurança e vigilância</td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Chaveiro comum</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Substituição de telha</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Instalação de espelho²</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Instalação e montagem de prateleiras²</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Reparos de cadeira para manicure (cirandinha)²</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Reparos hidráulicos para cadeira lavatório²</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Reparos em compressor de ar³ </td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Encanador</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Eletricista</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Reparos de telefonia</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Reparos em bebedouro</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Check-up informática</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Desentupimento</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Reparos em condicionador de ar</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Vigia (vigilância)</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Reparos de refrigerador, geladeira e frigobar</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Reparos de congelador(freezer)</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Reparos de fogão a gás</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Reparos de microondas </td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Instalação e reinstalação de ventilador de teto</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Porteiro substituto</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Reparos em central telefônica interfones, porteiros eletrônicos(sem imagem de vídeo)</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Limpeza de caixa d’água de até 20.000 litros</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Colocação de revestimento cerâmico(limitada a 2m²) </td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Reparos em gesso(limitados a 2m²)</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 bg-gray-100 whitespace-no-wrap border border-b-0">
                                                <td class="px-4 py-4">Instalação de chave tetra</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>
                                            <tr class="w-full font-base text-gray-700 whitespace-no-wrap border">
                                                <td class="px-4 py-4">Troca de segredos das fechaduras</td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"></td>
                                                <td class="px-4 py-4"><i class="fa-solid fa-x fa-xl text-primary-600 mr-2"></i></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <p class="mt-6">1. serviços disponíveis em caso de sinistro</p>

                                    <p class="mt-6">2. serviços exclusivos para Estética e Beleza</p>

                                    <p class="mt-6">3. serviço exclusivo para Clínicas e Consultórios</p>

                                    <p class="mt-6">Os serviços podem variar de acordo com a disponibilidade e região de abrangência. Consulte detalhes nas Condições Gerais do Porto Seguro Empresa.
                                    </p>



                                    <a href="{{ ('contato') }}" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                        Solicitar uma Proposta
                                    </a>

                                    <div class="text-right space-x-5 mt-5">
                                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                            Fechar
                                        </button>
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
            <div class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:text-center">
                        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl md:mb-6">
                            O Seguro Empresa da também oferece:
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-5">

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-clock text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Assistência 24h.
                                    </p>

                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-calendar-days text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        5% de desconto para pagamentos à vista com Cartão Porto Bank Empresarial.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-credit-card text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">Pagamento do seguro em até 12 vezes sem juros no Cartão Porto ou em até 10X sem juros demais bandeiras.</p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-location-dot text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">Desconto na contratação de mais de um local por apólice.</p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-video text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">Desconto para empresas com sistema de alarme monitorado.</p>
                                </div>
                            </div>
                        </a>


                    </div>
                    <div class="mt-6 grid">

                        <div x-data={show:false} class="mt-5">
                            <p class="flex justify-center">
                                <button @click="show=!show" class="w-96 h-24 border-2 border-primary-600 text-3xl font-bold bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-200 px-4 py-3 focus:outline-hidden" type="button">
                                    Ver todos os benefícios
                                </button>
                            </p>
                            <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                                <div class="text-right space-x-5 mt-5">
                                    <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                        <i class="fa-solid fa-x fa-2xl"></i>
                                    </button>
                                </div>
                                <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                                    </p>
                                    <p class="mt-1 font-bold">Na Porto Seguro sua empresa fica protegida e ainda conta com vantagens exclusivas.</p>
                                    <p class="mt-1 font-bold">Diferenciais</p>
                                    <p class="mt-1">• Pagamento facilitado em até 12 vezes sem juros no Cartão Porto,ou 6 vezes sem juros demais formas de pagamento.;</p>
                                    <p class="mt-1">• Livre escolha da melhor data de pagamento;</p>
                                    <p class="mt-1">• Sem interrupção das coberturas contratadas durante as férias coletivas.</p>
                                    <p class="mt-1 font-bold">Vantagens na locação de box em empresas de self storage</p>
                                    <p class="mt-1">Alugue um box de até 80m², pelo tempo que precisar, para guardar móveis, estoques ou outros produtos. O primeiro mês do aluguel é por conta da Porto Seguro! Para ter o desconto, identifique-se como cliente do Porto Seguro Empresa.</p>
                                    <p class="mt-1 font-bold">Descontos especiais</p>
                                    <p class="mt-1">• 5% de desconto no seguro para pagamento à vista e no Cartão Porto Seguro Empresarial;</p>
                                    <p class="mt-1">• Desconto na contratação de várias coberturas;</p>
                                    <p class="mt-1">• Desconto na adoção da Participação Obrigatória do Segurado (POS) em caso de sinistro;</p>
                                    <p class="mt-1">• Desconto para clientes Porto Seguro;</p>
                                    <p class="mt-1">• Desconto para empresa com sistema de alarme monitorado;</p>
                                    <p class="mt-1">• Desconto para estabelecimentos em shoppings centers, hipermercados e aeroportos;</p>
                                    <p class="mt-1">• Desconto para contratação exclusiva de edifícios;</p>
                                    <p class="mt-1">• Desconto na contratação de mais de um local em uma mesma apólice.</p>
                                    <p class="mt-1 font-bold">Desconto no aluguel de carro</p>
                                    <p class="mt-1">Vantagens para alugar um carro quando precisar de um. Para fazer a reserva, é só ligar para a Central de Atendimento 24h.</p>
                                    <p class="mt-1 font-bold">Desconto em transportadoras</p>
                                    <p class="mt-1">Se sua empresa for mudar de endereço, ganhe descontos em transportadoras parceiras.</p>
                                    <p class="mt-1">Os benefícios podem variar por região e de acordo com a disponibilidade de cada parceiro.</p>
                                </div>


                                <div class="text-right space-x-5 mt-5">
                                    <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                        Fechar
                                    </button>
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
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Saiba mais sobre o Seguro para Empresa da Porto</h2>
                    <p class="mt-6 text-lg leading-8  text-gray-900">Assista ao vídeo e descubra como a sua empresa pode ficar bem amparada com a proteção na medida certa para o seu empreendimento.</p>
                </div>
                <div class="mx-auto max-w-lg text-center rounded-3xl ml-2">
                    <iframe class="rounded-2xl w-96 h-56"  src="https://www.youtube.com/embed/HCy7HESMN14?si=0p2ykr7Dzy7EWFyj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="py-24 sm:px-6 lg:px-8">
            <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="mx-auto max-w-lg text-center">
                    <iframe class="rounded-2xl w-96 h-56"  src="https://www.youtube.com/embed/AYMmc1ec8HU?si=GSFUysXhFkRieZFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="mx-auto max-w-lg text-center rounded-3xl ml-2">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tranquilidade para o seu negócio</h2>
                    <p class="mt-6 text-lg leading-8  text-gray-900">Mais de 20 coberturas para reduzir as preocupações do seu dia a dia. Assista ao vídeo e confira.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="lg:text-center">
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">
                    Tire suas dúvidas sobre o Seguro Empresa da Porto
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Qual cobertura do Seguro Empresa é ideal para meu negócio?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Cada cobertura do Seguro Empresa garante tranquilidade financeira em situações inesperadas e prejuízos que possam paralisar seu negócio.
                        </p>
                        <p>
                            Antes de contratar, é fundamental consultar seu Corretor. Dessa forma, você garante proteção para estrutura, bens e colaboradores.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como acionar os serviços de assistência do seguro empresarial?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Você pode solicitar serviços de assistência para sua empresa, 24h por dia, 7 dias por semana, pelo
                            <a href="{{ ('https://prime.altubots.com/chats/portoassistencia/f7b9b3edac30c4b98af76512473d3e93/index.html') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                <span>Chat On-line</span>
                            </a>.
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
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>




</x-layouts::app>