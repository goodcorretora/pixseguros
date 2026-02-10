<x-layouts::app>
    <x-slot name="title">Plano de Saúde Empresarial</x-slot>

    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Plano de Saúde Empresarial
            </h1>

            <div class="mt-6 grid gap-2 lg:grid-cols-2">

                <div href="{{ ('plano-de-saude-empresarial') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <img class="h-24 w-24 " src="/images/planodesaude/escolha.svg" alt="car&house">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                A escolha da operadora e do plano de saúde ocorre pela pessoa jurídica(empresa).
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('plano-de-saude-empresarial') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <img class="h-24 w-24 " src="/images/planodesaude/opcao.svg" alt="car&house">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                A sua opção exige vínculo por relação empregatícia ou estatuária com pessoa jurídica(empresa).
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('plano-de-saude-empresarial') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <img class="h-24 w-24 " src="/images/planodesaude/carencia.svg" alt="car&house">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Tem carência para contrato com 30 ou mais beneficiários e para quem ingressa no plano em até 30 dias da celebração do contrato ou da vinculação à empresa
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('plano-de-saude-empresarial') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <img class="h-24 w-24 " src="/images/planodesaude/cobertura.svg" alt="car&house">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Cobertura de acordo com o Contrato e Rol de Procedimentos.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('plano-de-saude-empresarial') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <img class="h-24 w-24 " src="/images/planodesaude/rescisao.svg" alt="car&house">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                Rescisão consta no contrato e somente válida para o contrato como um todo.
                            </p>
                        </div>
                    </div>
                </div>

                <div href="{{ ('plano-de-saude-empresarial') }}" class="py-2 px-2 bg-white rounded-xl shadow-lg space-y-2 flex items-center space-x-6">
                    <img class="h-24 w-24 " src="/images/planodesaude/cobranca.svg" alt="car&house">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                                A cobrança ocorre entre o consumidor e a pessoa jurídica(empresa).
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
                <a href="{{url('solicitar-plano-de-saude')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicite uma proposta
                </a>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">Dicas Importantes!</p>
            </div>
            <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
                <p>
                    Verifique o que você está contratando.
                </p>
                <p>
                    Só pode aderir a um plano coletivo por adesão quem estiver vinculado a uma associação profissional, sindicato ou órgão equivalente.
                </p>
                <p>
                    O plano coletivo tem regras semelhantes ao plano empresarial.
                </p>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 mb-12 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Tipos de Plano e Cobertura</p>
            </div>



            <div class="flex flex-wrap -m-4 justify-center text-center">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-tooth fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Exclusivamente Odontológico
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Só para consultas e exames odontológicos.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                                Solicitar
                            </a>
                        </p>
                    </div>
                </div>

                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-clinic-medical fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Ambulatorial
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Só para consultas, exames e terapias.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2"">
                                Solicitar
                            </a>
                        </p> 
                    </div>
                </div>

                <div class=" xl:w-1/3 md:w-1/2 p-4">
                                <div class="shadow-lg rounded-lg h-80 p-5">
                                    <i class="fa fa-tooth fa-3x mb-6 text-primary-600"></i>
                                    <i class="fa fa-clinic-medical fa-3x mb-6 text-primary-600"></i>
                                    <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                                        Ambulatorial + Odontológico
                                    </h2>
                                    <h2 class="text-lg text-black font-semibold p-4 mb-4">
                                        Só para consultas, exames, terapias e odontológico.
                                    </h2>
                                    <p class="leading-relaxed text-sm mb-4 pb-6">
                                        <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2"">
                                Solicitar
                            </a>
                        </p> 
                    </div>
                </div>
            </div>

            <div class=" flex flex-wrap -m-4 justify-center text-center">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-hospital fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Hospitalar sem obstetrícia
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Só para internação sem cobertura para parto.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                                Solicitar
                            </a>
                        </p>
                    </div>
                </div>

                <div class=" xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-hospital fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-person-pregnant fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Hospitalar com obstetrícia
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Só para internação com cobertura para parto.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                                Solicitar
                            </a>
                        </p>
                    </div>
                </div>

                <div class=" xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-clinic-medical fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-hospital fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Ambulatorial + Hospitalar sem obstetrícia
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Para consultas, exames, terapias e internação.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                                Solicitar
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=" flex flex-wrap -m-4 justify-center text-center">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-clinic-medical fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-hospital fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-person-pregnant fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Ambulatorial + Hospitalar com obstetrícia
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Para consultas, exames, terapias, internação e parto.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                                Solicitar
                            </a>
                        </p>
                    </div>
                </div>

                <div class=" xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-clinic-medical fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-hospital fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-tooth fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Ambulatorial + Hospitalar sem obstetrícia + Odontológico
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Para consultas, exames, terapias, internação e odontológico.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                                Solicitar
                            </a>
                        </p>
                    </div>
                </div>

                <div class=" xl:w-1/3 md:w-1/2 p-4">
                    <div class="shadow-lg rounded-lg h-80 p-5">
                        <i class="fa fa-clinic-medical fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-hospital fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-person-pregnant fa-3x mb-6 text-primary-600"></i>
                        <i class="fa fa-tooth fa-3x mb-6 text-primary-600"></i>
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-4">
                            Ambulatorial + Hospitalar com obstetrícia + Odontológico
                        </h2>
                        <h2 class="text-lg text-black font-semibold p-4 mb-4">
                            Para consultas, exames, terapias, internação, parto e odontológico.
                        </h2>
                        <p class="leading-relaxed text-sm mb-4 pb-6">
                            <a href="solicitar-plano-de-saude" class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                                Solicitar
                            </a>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class=" py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">PLANO DE REFERÊNCIA</p>
            </div>
            <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
                <p>
                    Todas as operadoras de saúde devem apresentar um plano de referênciaengloba assistência médico-ambulatorial e hospitalar com obstetrícia e acomodação em enfermaria.
                </p>
                <p>
                    Sua cobertura mínima também foi estabelecida pela Lei, devendo o atendimento de urgência e emergência ser integral após as 24 horas da sua contratação.
                </p>
                <p>
                    A cobertura odontológica pode ser oferecida adicionalmente em um plano de cobertura médico-hospitalar, exceto na segmentação Referência.
                </p>
            </div>
        </div>
    </div>





    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div x-data={show:false} class="mt-5">
                <p class="flex justify-center">
                    <button @click="show=!show" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                        Preços e Reajustes
                    </button>
                </p>
                <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                    <div class="text-right space-x-5 mt-5">
                        <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                            <i class="fa-solid fa-x fa-2xl"></i>
                        </button>
                    </div>
                    <p class="text-2xl font-semibold mb-4">
                        Fique atento aos Preços e Reajustes.
                    </p>
                    <p class="mb-2">Leia com atenção:</p>
                    <p class="mb-2">Comparar os planos disponíveis no mercado e só depois decida o que melhor atende ao que você deseja.</p>
                    <p class="mb-2">Observar a faixa etária na seção Perguntas Frequentes.</p>
                    <p class="mb-2">As regras de reajuste variam de acordo com o tipo de contratação do plano:</p>
                    <p class="mb-2">Planos individuais/familiares:</p>
                    <p class="mb-2">O percentual máximo de reajuste é definido pela ANS.</p>

                    <p class="mb-2">Planos coletivos empresariais ou por adesão com até 30 beneficiários:</p>
                    <p class="mb-2">O percentual deve ser o mesmo para todos os planos com até 30 pessoas da mesma operadora. O índice deve ser divulgado no site da operadora.</p>

                    <p class="mb-2">Planos coletivos empresariais ou por adesão com mais de 30 beneficiários:</p>
                    <p class="mb-2">O percentual é definido em negociação entre as operadoras e as pessoas jurídicas contratantes – empresas, associações, sindicatos ou entidades de classe.</p>

                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="lg:text-center">
                            <a href="{{url('solicitar-plano-de-saude')}}" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                Solicitar uma proposta
                            </a>
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
                    Perguntas Frequentes:
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como adquirir um plano de saúde?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>- conosco, estamos aqui para lhe prestar as melhores orientações e ajudá-lo no que for preciso;</p>
                        <p>- diretamente com a operadora de planos de saúde;</p>
                        <p>- intermédio de corretores(nosso caso);</p>
                        <p>- planos coletivos, a pessoa jurídica contratante (empresas, associações, sindicatos ou entidades de classe);</p>
                        <p>- com o auxílio de uma administradora de benefícios.</p>
                    </div>
                </div>
            </div>


            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Área de abrangência e atuação dos planos de saúde.
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Plano nacional - atendimento em todo o território nacional.</p>
                        <p>Plano estadual - atendimento em alguns estados Plano grupo de estados.</p>
                        <p>Regional - atendimento em um único estado.</p>
                        <p>Plano de grupo de municípios - atendimento em grupo de municípios.</p>
                        <p>Local - atendimento em um único município.</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais os tipos de acomadações em internação?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Enfermaria - são os planos de saúde que oferecem acomodação coletiva.</p>
                        <p>Apartamento - são os planos de saúde que oferecem acomodação individual.</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funcionam os planos com coparticipação?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Coparticipação é o valor que será cobrado, além da mensalidade, por você já ter utilizado determinado serviço (ex. consultas, exames, internação, etc).
                        </p>
                    </div>
                </div>
            </div>



            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como é a variação da mensalidade por mudança de faixa etária?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Até 2 de janeiro de 1999</p>
                        <p>Deve seguir o que estiver escrito no contrato.</p>
                        <p>Entre 2 de janeiro de 1999 e 1º de janeiro de 2004:</p>
                        <p>0 a 17 anos</p>
                        <p>18 a 29 anos</p>
                        <p>30 a 39 anos</p>
                        <p>40 a 49 anos</p>
                        <p>50 a 59 anos</p>
                        <p>60 a 69 anos</p>
                        <p>70 anos ou mais</p>
                        <p>A Consu 06/98 determina que o preço da última faixa (70 anos ou mais) poderá ser, no máximo, seis vezes maior que o preço da faixa inicial (0 a 17 anos).</p>
                        <p>Consumidores com mais de 60 anos e que participem do contrato há mais de 10 anos não podem sofrer a variação por mudança de faixa etária.</p>
                        <p>Após 1 de janeiro de 2004 - (vigência do Estatuto do Idoso)</p>
                        <p>0 a 18 anos</p>
                        <p>19 a 23 anos</p>
                        <p>24 a 28 anos</p>
                        <p>29 a 33 anos</p>
                        <p>34 a 38 anos</p>
                        <p>39 a 43 anos</p>
                        <p>44 a 48 anos</p>
                        <p>49 a 53 anos</p>
                        <p>54 a 58 anos</p>
                        <p>59 anos ou mais</p>
                        <p>A Resolução Normativa (RN nº 63), publicada pela ANS em dezembro de 2003, determina, que o valor fixado para a última faixa etária (59 anos ou mais) não pode ser superior a seis vezes o valor da primeira faixa (0 a 18).</p>
                        <p>A Resolução determina, também, que a variação acumulada entre a sétima e a décima faixas não pode ser superior à variação acumulada entre a primeira e a sétima faixas.</p>
                    </div>
                </div>
            </div>



            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que devo observar antes de assinar a proposta de adesão?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>É a parte que cabe ao consorciado. É o número que o identifica no grupo para concorrer ao sorteio e/ ou lance.</p>
                    </div>
                </div>
            </div>


            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Eu posso trocar de plano sem carência?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>É possível trocar de plano de saúde sem cumprir carência ou cobertura parcial temporária no plano novo.</p>
                    </div>
                </div>
            </div>



            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como proceder, sou demitido e/ou aposentado?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Se você foi demitido ou se aposentou, verifique se tem direito a permanecer no plano da sua empresa antes de contratar um plano individual.</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais os prazo de cobertura e carência?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Cada plano tem os prazos de carência ou de cobertura parcial temporária para utilização.</p>
                        <p>A lei estipulada os prazos máximos:</p>
                        <p>- Urgências e Emergências 24 horas;</p>
                        <p>- Demais coberturas 180 dias; e</p>
                        <p>- Partos a termo 300 dias.</p>
                        <p>Você deve ficar atento as especificações do contrato da operadora da saúde, ocorrendo caso em que as operadoras que exigem autorização prévia para a realização de procedimentos, como exames e internações.</p>
                    </div>
                </div>
            </div>



            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais os prazos máximos para atendimento?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Prazos máximos de atendimento em dias úteis.</p>
                        <p>Consulta básica - pediatria, clínica médica, cirurgia geral, ginecologia e obstetrícia - 07 (sete)</p>
                        <p>Consulta nas demais especialidades - 14 (catorze)</p>
                        <p>Consulta/ sessão com fonoaudiólogo - 10 (dez)</p>
                        <p>Consulta/ sessão com nutricionista - 10 (dez)</p>
                        <p>Consulta/ sessão com psicólogo - 10 (dez)</p>
                        <p>Consulta/ sessão com terapeuta ocupacional - 10 (dez)</p>
                        <p>Consulta/ sessão com fisioterapeuta - 10 (dez)</p>
                        <p>Consulta e procedimentos realizados em consultório/ clínica com cirurgião-dentista - 07 (sete)</p>
                        <p>Serviços de diagnóstico por laboratório de análises clínicas em regime ambulatorial - 03 (três)</p>
                        <p>Demais serviços de diagnóstico e terapia em regime ambulatorial - 10 (dez)</p>
                        <p>Procedimentos de alta complexidade (PAC) - 21 (vinte e um)</p>
                        <p>Atendimento em regime de hospital-dia 10 (dez)</p>
                        <p>Atendimento em regime de internação eletiva - 21 (vinte e um)</p>
                        <p>Urgência e emergência Imediato.</p>
                        <p>Observações:</p>
                        <p>Para ser atendido dentro dos prazos você deverá ter cumprido os períodos de carência previstos em seu contrato, conforme o tipo do procedimento.</p>
                        <p>Esses prazos valem para atendimento por um dos profissionais ou estabelecimentos de saúde da rede conveniada ao plano, e não para atendimento por um profissional ou estabelecimento específico de preferência do consumidor.</p>
                        <p>O prazo para consulta de retorno ficará a critério do profissional responsável pelo atendimento.</p>
                    </div>
                </div>
            </div>



            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Cuidados antes de assinar uma proposta de plano de saúde.
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Ler atentamente o contrato;</p>
                        <p>Conversar com corretor;</p>
                        <p>Consersar com a Operadora do plano de saúde pretendido;</p>
                        <p>Tirar dúvidas com Agência Nacional de Saúde - ANS;</p>
                        <p>Ler a Carta de Orientação ao Consumidor antes do preenchimento da Declaração de Saúde;</p>
                        <p>Declaração de Saúde - formulário no qual você deve indicar doenças que saiba possuir, com declaraçõescom informações verdadeiras;</p>
                        <p>Tirar dúvidas com médico para preenchimento da Declaração de Saúde; e</p>
                        <p>Verificar se o tipo de contratação do plano indicado é o escolhido por você.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>




    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Sua escolha de um bom plano de saúde coletivo começa aqui.
                </p>
                <a href="{{url('solicitar-plano-de-saude')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>


</x-layouts::app>