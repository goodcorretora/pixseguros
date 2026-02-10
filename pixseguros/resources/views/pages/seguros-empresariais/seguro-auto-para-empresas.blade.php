<x-layouts::app>
    <x-slot name="title">Seguro Auto para Empresas</x-slot>


    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Auto Frota</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Proteja os veículos da sua empresa com a qualidade dos serviços Porto.
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
                <img src="{{ asset('images/seguros/autoempresarial.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Proteção para os veículos da sua empresa
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Com um produto personalizado, de acordo com o perfil do seu negócio.
                </p>
            </div>
        </div>
    </div>


    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Por que contratar o Seguro Auto Frota Tradicional
            </h1>
            <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                Com o Seguro Auto Frota Tradicional da Porto, você conta com coberturas especiais e assistência 24 horas para o negócio da sua empresa continuar crescendo.
            </p>

            <div class="mt-6 grid gap-3 lg:grid-cols-2">

            <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Coberturas que protegem você e seus veículos
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Coberturas que protegem você e seus veículos</p>
                            <p class="mt-1 font-bold">Total</p>
                            <p class="mt-1">Cobre os danos parciais ou integrais que aconteçam ao veículo em casos de colisão, incêndio, roubo e furto.</p>
                            <p class="mt-1 font-bold">Danos a Terceiros</p>
                            <p class="mt-1">Garante a cobertura de gastos em reparo de danos materiais e corporais causados a terceiros em acidentes.</p>

                            <p class="mt-1 font-bold">Acidentes Pessoais de Passageiros</p>
                            <p class="mt-1">Garante a indenização em caso de morte, invalidez e/ou despesas médico-hospitalares ocorridas com os passageiros do veículo segurado.</p>

                            <p class="mt-1 font-bold">Assistência 24h</p>
                            <p class="mt-1">Assistência para passageiros e veículos com: guincho até 2000 Km para pane, chaveiro, retorno para reaver veículo, hospedagem e outros.</p>

                            <p class="mt-1 font-bold">Acessórios e Equipamentos</p>
                            <p class="mt-1">Cobre equipamentos como kit-gás, carroceria, munck, entre outros.</p>

                            <p class="mt-1 font-bold">Reposição de 0km por até 6 meses</p>
                            <p class="mt-1">Garante a reposição do bem, sem nenhum custo para o cliente durante o prazo de 6 meses, desde que esteja nas condições preestabelecidas no contrato.</p>

                            <p class="mt-1 font-bold">Blindagem</p>
                            <p class="mt-1">Opção de contratação de cobertura específica para veículos com blindagem.</p>

                            <p class="mt-1 font-bold">Danos Morais e Estéticos</p>
                            <p class="mt-1">Reembolsa a indenização paga a terceiros — em decorrência de danos morais — envolvidos em acidente de trânsito com o veículo segurado, coberto e indenizável devido a um acionamento judicial. Há, também, as opções de 2º risco, ou seja, quando há necessidade de contratar valores excedentes à contração da mesma cobertura em uma congênere.</p>

                            <p class="mt-1 font-bold">Danos materiais e corporais a terceiros - Desatrelado</p>
                            <p class="mt-1">Cobre eventuais dados corporais e/ou patrimônio de terceiros. Oferece, ainda, as opções de 2º risco, quando há necessidade de contratar valores excedentes a contração da mesma cobertura em uma congênere.</p>

                            <p class="mt-1 font-bold">Danos Materiais e Corporais a terceiros - Garantia única</p>
                            <p class="mt-1">Cobre eventuais dados corporais e/ou patrimônio de terceiros. Há, ainda, as opções de 2º risco: quando há necessidade de contratar valores excedentes a contração da mesma cobertura em uma congênere.</p>

                            
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>


                    </div>
                </div>
                
                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            Tire suas dúvidas sobre o Seguro Auto para Frotas
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold"> Tire suas dúvidas sobre o Seguro Auto para Frotas</p>
                            <p class="mt-1 font-bold">Para quem é o produto Auto Frota?
                            <p class="mt-1">Para Clientes PJ com 1 ou mais veículos a serviço da empresa.

                            <p class="mt-1 font-bold">Qualquer empresa pode fazer esse seguro?
                            <p class="mt-1">O seguro é direcionado para pequenas, médias e grandes empresas e seus diferentes tipos de atividade comercial. Toda proposta passará por uma análise de  aceitação. 

                            

                            <p class="mt-1 font-bold">Quais os planos de assistência 24h e a KM de guincho?
                            <p class="mt-1">São 2 planos:

                            <p class="mt-1">- Básica: 200 km de guincho para pane e 2000 km para sinistro 

                            <p class="mt-1">- Completo: 2000 km para pane e 2000 km para sinistro.

                            

                            <p class="mt-1 font-bold">Além do serviço do guincho, o que mais oferece a assistência 24h?
                            <p class="mt-1">Socorro mecânico, no local, transporte para recuperação do veículo, hospedagem, chaveiro, troca de pneu, transporte dos passageiros do veículo, entre outros e conforme contratação da apólice.

                            

                            <p class="mt-1 font-bold">Esse seguro é extensível a carga transportada?
                            <p class="mt-1">Não.

                            <p class="mt-1 font-bold">Existe cobertura para o Mercosul?
                            <p class="mt-1">Sim. Para isso é preciso contratar a Extensão de perímetro.




                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="py-12 overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Saiba quais são as cláusulas do Seguro Auto Frota Tradicional
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-link-slash text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Vidros</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                Cobre a troca ou reparo dos vidros, em caso de quebra ou trincamento de acordo com as condições que foram contratadas no seguro.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-auto') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-car-side text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Despesas Extraordinárias</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                Contratação de importância extra limitada aos critérios da seguradora, que será reembolsada ao segurado em momento de sinistro exclusivo de indenização integral.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-bike') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-location-dot text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Extensão de perímetro</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                Garante atendimento, exclusivo para o veículo segurado, em caso de sinistro, na Argentina, Paraguai e Uruguai.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-fianca') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-truck text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Extensão de cobertura para veículos rebocados</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobre danos materiais ocasionados ao veículo rebocado de terceiros (automotor de via terrestre) em poder do segurado. Cobre, ainda, danos materiais e/ou corporais causados a terceiros pelo veículo rebocado durante uma operação (de reboque).
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-list-check text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Beneficiária</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Identifica os veículos que estão alienados e quem será o beneficiário em caso de sinistro de Indenização Integral, ou seja, à pessoa jurídica que é responsável pelo empréstimo financeiro.
                                </p>
                            </div>
                        </a>
                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-hands-holding text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Extensão de cobertura para sócios e diretores (DMT ou DCT)</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Extensão de cobertura da apólice para pessoa jurídica, onde a seguradora indeniza o segurado em situações de ocorrência de sinistro de danos materiais entre veículos assegurados do mesmo CNPJ, fora do limítrofe da empresa.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('seguro-imobiliaria') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-car-rear text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Carro Reserva</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Veículo reserva por 7,15 ou 30 dias em vasos de sinistros cobertos e ndenizáveis.
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
                <p class="text-2xl font-semibold mb-4">
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    SOLICITAR UMA PROPOSTA
                </a>
            </div>
        </div>
    </div>



</x-layouts::app>