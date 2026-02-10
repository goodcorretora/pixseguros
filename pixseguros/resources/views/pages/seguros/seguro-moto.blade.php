<x-layouts::app>
    <x-slot name="title">Seguro Moto</x-slot>





    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro para Motos</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Mais segurança para suas aventuras.
                </p>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    O seguro que combina com seu estilo, com cobertura completa e assistência 24h.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="cotar-seguro-auto" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            Solicite uma proposta
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/seguros/seguromoto.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">

        <div class="container mx-auto flex justify-center">
            <div class="w-full mx-4 text-center">
                <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                    Por que contratar o Seguro Moto da Porto Seguro
                </h1>


                <div class="mt-6 grid gap-3 lg:grid-cols-5">


                    <div x-data={show:false} class="mt-5">
                        <p class="flex justify-center">
                            <button @click="show=!show" class="w-76 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                                <i class="fa-solid fa-chalkboard-user text-primary-600 fa-xl inline mr-3.5"></i>
                                Desconto de 25% na franquia
                            </button>
                        </p>
                        <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                            <div class="text-right space-x-5 mt-5">
                                <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                    <i class="fa-solid fa-x fa-2xl"></i>
                                </button>
                            </div>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                                Desconto de 25% na franquia
                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                                Em caso de sinistro, ganhe desconto na franquia para reparo da moto em uma oficina referenciada da Porto.
                            </p>
                        </div>
                    </div>

                    <div x-data={show:false} class="mt-5">
                        <p class="flex justify-center">
                            <button @click="show=!show" class="w-76 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                                <i class="fa-solid fa-list text-primary-600 fa-xl inline mr-3.5"></i>
                                Reposição do valor da moto 0km por até 6 meses
                            </button>
                        </p>
                        <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                            <div class="text-right space-x-5 mt-5">
                                <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                    <i class="fa-solid fa-x fa-2xl"></i>
                                </button>
                            </div>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                                Reposição do valor da moto 0km por até 6 meses
                            </p>
                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                                Em caso de indenização integral, você pode ter garantia de até 6 meses para a reposição da moto pelo valor de 0km. Vale para contratos na modalidade valor de mercado, de acordo com o tipo de moto, modelo, região e condições de contratação.
                            </p>
                        </div>
                    </div>

                    <div x-data={show:false} class="mt-5">
                        <p class="flex justify-center"> <button @click="show=!show" class="w-76 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                                <i class="fa-solid fa-calendar-days text-primary-600 fa-xl inline mr-3.5"></i>
                                Serviço opcional de assistências pra casa
                            </button>
                        </p>
                        <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 overflow border px-4 py-3 my-2 text-gray-700">
                            <div class="text-right space-x-5 mt-5">
                                <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                    <i class="fa-solid fa-x fa-2xl"></i>
                                </button>
                            </div>
                            <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
                                Serviço opcional de assistências pra casa
                            </p>
                            <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
                                Você pode contar com assistências para residência, como reparos em eletrodomésticos, eletricista, encanador e chaveiro, de acordo com a apólice contratada.
                            </p>
                        </div>
                    </div>

                    <div x-data={show:false} class="mt-5">
                        <p class="flex justify-center"> <button @click="show=!show" class="w-76 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                                <i class="fa-solid fa-calendar-days text-primary-600 fa-xl inline mr-3.5"></i>
                                Descontos em estacionamentos da rede Estapar
                            </button>
                        </p>
                        <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 overflow border px-4 py-3 my-2 text-gray-700">
                            <div class="text-right space-x-5 mt-5">
                                <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                    <i class="fa-solid fa-x fa-2xl"></i>
                                </button>
                            </div>
                            <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
                                Descontos em estacionamentos da rede Estapar
                            </p>
                            <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
                                Com o Seguro Moto da Porto, você tem até 30% de desconto em estacionamentos selecionados da rede Estapar.
                            </p>
                        </div>
                    </div>

                    <div x-data={show:false} class="mt-5">
                        <p class="flex justify-center"> <button @click="show=!show" class="w-76 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                                <i class="fa-solid fa-users text-primary-600 fa-xl inline mr-3.5"></i>
                                Extensão de perímetro gratuita
                            </button>
                        </p>
                        <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 overflow border px-4 py-3 my-2 text-gray-700">
                            <div class="text-right space-x-5 mt-5">
                                <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                    <i class="fa-solid fa-x fa-2xl"></i>
                                </button>
                            </div>
                            <p class="mt-4 max-w-6xl text-xl text-gray-500 lg:mx-auto text-center">
                                Extensão de perímetro gratuita
                            </p>

                            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                                Conte com extensão gratuita da cobertura nos países do Mercosul para danos na moto.
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
                Coberturas que você pode contar
            </h1>
            <div class="ml-6 mb-5 text-gray-800 text-lg leading-8 font-medium">
                Com coberturas básicas e adicionais, você garante a proteção ideal para o seu veículo, do seu jeito.
            </div>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-user-injured text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Danos a terceiros</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Indenização para danos materiais e danos corporais, em casos de acidentes com terceiros.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-helmet-safety text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Cobertura para acessórios</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobertura adicional para capacete, jaqueta, botas, luvas, calça e intercomunicador. 
                                </p>
                            </div>
                        </a>

                        
                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-truck text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Assistência 24h gratuita para envio de guincho ou técnico</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Agilidade no envio de guincho ou técnico para problemas mecânicos ou elétricos, falta de combustível e chaveiro. 
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-solid fa-fire text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Incêndio, roubo e furto</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobertura para dano parcial ou sinistro indenização integral da moto ocasonado por incêndio, roubo e furto. Não contempla colisão.

                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
                            <div class="border rounded-lg p-5 h-full">
                                <i class="fa-regular fa-circle-check text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Furto</h2>
                                <p class="line-clamp-2 mt-2 text-lg text-gray-700">
                                    Cobertura para dano parcial ou integral da moto por colisão, incêndio, roubo e furto.
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
                    Tire suas dúvidas sobre o Seguro Moto
                </p>

            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais são os locais de abrangência do Seguro Moto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O Seguro Moto tem abrangência em todo o território nacional. Você pode acionar os serviços de sinistro e os benefícios em qualquer cidade e estado brasileiro que possua o atendimento. Caso você viaje com sua moto para países do Mercosul, a Porto Seguros oferece o seguro Carta Verde, que é obrigatório nesses locais.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais fatores interferem no valor do meu Seguro Moto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Para fazer o cálculo do seguro para o sua moto, os principais fatores que determinam o preço são: cilindradas, marca, modelo e ano da moto, em quais áreas e cidades a moto circula e fica estacionado a maior parte do tempo, quem é e qual a idade do condutor principal. As diferentes cláusulas e coberturas a serem contratadas, bem como o valor da franquia, também podem alterar o valor final do seguro.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que é franquia de seguro?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            O termo franquia, refere-se ao valor previsto em contrato que deve ser pago quando a seguradora for acionada pelo cliente. Esse valor deve cobrir algum sinistro de perda parcial, exceto nos casos de incêndio, explosão acidental ou em consequências de raios.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Em caso de alagamento, as motocicletas na garagem estão cobertas pelo Seguro Moto?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Sim, a cobertura compreensiva indeniza o segurado dos prejuízos que venha a sofrer em consequência de danos materiais, causados à moto segurada, provenientes dos riscos cobertos a seguir relacionados: a submersão parcial ou total do veículo em água doce, proveniente de enchentes ou inundações, inclusive nos casos de motocicletas guardadas no subsolo.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Pelo Aplicativo Porto: Seguro Auto, Cartão e +
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Baixe o App Porto: Seguro Auto, Cartão e + pela loja de aplicativos do seu celular.
                            <p>
                        <p>
                            Acesse a área de cliente. Caso não tenha acesso, preencha seus dados na opção “cadastre-se”.Clique na opção “solicitar socorro”, disponível na parte inferior da tela.Preencha as informações solicitadas (tipo de serviço, localização, endereço de destino, referência do veículo, pontos de referência e telefone do local onde está o veículo).Pronto! O seu guincho já está a caminho.
                        <p>
                        <p>
                            SOS Seguro Auto
                        <p>
                        <p>
                            Acesse o SOS Seguro Auto, preencha as informações solicitadas (placa do veículo e CPF/CNPJ), confirme o endereço que precisa do guincho, e pronto! Já estaremos a caminho.
                        <p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Acesse as Condições Gerais e confira as cláusulas e disposições do seu Seguro Moto da Porto Seguros.
                </p>
                <a href="{{url('https://www.portoseguro.com.br/seguro-moto')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Peça uma proposta para proteger seu veículo.
                </p>
                <a href="{{url('cotar-seguro-auto')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>




</x-layouts::app>