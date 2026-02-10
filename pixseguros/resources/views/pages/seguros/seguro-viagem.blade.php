<x-layouts::app>
    <x-slot name="title">Seguro Viagem</x-slot>

    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Viagem</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Contrate o Seguro Viagem e viaje sem preocupações para destinos nacionais e internacionais.
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
                <img src="{{ asset('images/seguros/viagem.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Confira
                    <a href="{{url('https://www.portoseguro.com.br/NovoInstitucional/FAQ-seguro-viagem.pdf')}}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500" class="block text-primary-600">
                        aqui
                    </a>
                    as dúvidas frequentes do Seguro Viagem
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    O Seguro Viagem da Porto conta com + de 20 tipos de proteções para destinos nacionais e internacionais, garantindo que você aproveite o passeio com toda tranquilidade e segurança que precisa.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Com coberturas para qualquer situação emergencial em saúde, decorrente ou não de doenças preexistentes, inclusive para acionamentos de COVID-19*
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    *Cobertura para eventos ocorridos a partir de 08/10/2021, observando-se os termos e coberturas contratadas.
                </p>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl">
                    Por que contratar o Seguro Viagem da Porto Seguro
                </h2>
            </div>



            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sencanador.png" alt="">
                            <h1 class="font-bold text-2xl mb-2">Cobertura para Covid-19</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Atendimento sem custos em caso de contágio de Covid-19 na viagem.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sencanador.png" alt="">
                            <h1 class="font-bold text-2xl mb-2">Parcelamento em até 12x</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                20% de desconto no aluguel de malas e malas de vinho, em cidades selecionadas.*
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sencanador.png" alt="">
                            <h1 class="font-bold text-2xl mb-2">Malas com desconto</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Até 6x o valor do aluguel.
                            </p>
                        </div>
                    </div>
                </a>

           

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/seguros/sencanador.png" alt="">
                            <h1 class="font-bold text-2xl mb-2">Proteção para seu pet</h2>
                                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                    10% de desconto na DogHero para seu pet durante a viagem.
                                </p>
                        </div>
                    </div>
                </a>







            </div>


        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl">
                    Coberturas e serviços que a Porto oferece
                </h2>
            </div>



            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-notes-medical text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Assistência médica e odontológica</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Amparo médico, inclusive para COVID-19, em qualquer país do mundo.                                
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-hand-holding-dollar text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Indenização de bagagem extraviada</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Em caso de extravio de bagagem, o Seguro Viagem da Porto Seguro realizada a indenização.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-dumbbell text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Cobertura para esportes radicais</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                No Plano Aventura, vocÊ conta com cobertura específica para a prática de esportes radicais.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-solid fa-money-bill-wave text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Cobertura em dólar e euro</h2>
                                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                    Conte com as coberturas do seu seguro em dólar ou euro, a depender do seu destino.
                                </p>
                        </div>
                    </div>
                </a>


            </div>


        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl">
                    Controte online em poucos passos
                </h2>
            </div>



            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-laptop text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Passo 1 - Cotação</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Dentre os planos sugeridos, escolha o que melhor atende a sua viagem.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-display text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Passo 2 - Escolha o plano</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Dentre os planos sugeridos, escolha o que melhor atende a sua viagem.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-circle-info text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Passo 3 - Cadastro</h1>
                            <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                                Preencha os dados pessoais de cada um dos viajantes.
                            </p>
                        </div>
                    </div>
                </a>

                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-solid fa-credit-card text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Passo 2 - Pagamento</h2>
                                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                    Insira os dados de pagamento do seu seguro viagem.
                                </p>
                        </div>
                    </div>
                </a>



                <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                        <div class="text-start px-3 pb-6 pt-2">
                            <i class="fa-regular fa-circle-check text-primary-600 fa-4x inline mr-3.5"></i>
                            <h1 class="font-bold text-2xl mb-2">Passo 2 - Finalização</h2>
                                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                                    Salve o seu voucher eletrônico, pois ele serve como comprovante do seu seguro.
                                </p>
                        </div>
                    </div>
                </a>

            </div>


        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-secondary-900 sm:text-4xl text-center">
                    Tire suas dúvidas sobre o Seguro Viagem
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como ter assistência emergencial durante a viagem?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Você pode acionar a assistência para atendimento emergencial, de qualquer lugar do mundo, durante o período de viagem, ligando para 55 11 3366 3330 (inclusive a cobrar). Há alguns países que contam com um serviço da Embratel chamado "Brasil Direto" e têm números pré-definidos para realizar ligações, disponíveis no site da Embratel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O seguro viagem possui cobertura para pandemias e epidemias?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Acionamentos decorrentes de COVID-19 estarão cobertos desde 8/10/2021, observando-se os termos e coberturas contratadas. Para mais informações, confira o pdf da FAQ do Seguro Viagem, consulte seu corretor ou fale com a nossa central de atendimento.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona o pagamento de despesas com médico, hospital ou dentista, se eu precisar usar mais de uma vez na mesma viagem?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Para esse tipo de cobertura, é realizada a prestação de serviço através da Assistência 24h ou reembolso, limitado ao valor do capital segurado.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quem pode contratar o seguro viagem?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Podem contratar o seguro as pessoas físicas com idade de até 70 anos ou 90 anos, dependendo do plano a ser contratado e período de viagem. Mulheres grávidas também podem contratar o Seguro Viagem da Porto Seguro, lembrando apenas que, em todos os planos disponibilizados para comercialização pela Porto Seguro, estão excluídos problemas de gravidez após o 7º mês (28º semana) de gestação, quando decorrentes de doença. OBS.: O seguro viagem pode ser contratado até um dia antes do início da viagem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais documentos receberei na contratação do seguro viagem?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Após a contratação, o segurado receberá dois e-mails. O primeiro terá a Carta Garantia, com os dados do plano, coberturas e limites, bem como os telefones da Central de Atendimento e como entrar em contato. O segundo e-mail terá o documento da Apólice do Seguro e Manual da Assistência.
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
                    Acesse os Manuais de Assistência para cada plano e as Condições Gerais do Seguro Viagem da Porto Seguros, com as especificações de coberturas e limites de contratação.
                </p>
                <a href="{{url('https://www.portoseguro.com.br/seguro-viagem#condicoes-gerais')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Contrate logo seu Seguro Viagem e seja feliz!
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    SOLICITAR UMA PROPOSTA
                </a>
            </div>
        </div>
    </div>



</x-layouts::app>