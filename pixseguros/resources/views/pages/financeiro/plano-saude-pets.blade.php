<x-layouts::app>
    <x-slot name="title">Plano Saúde Pets</x-slot>




    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Petlove Saúde</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Todo cuidado e carinho para você e seu pet
                </p>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Plano de saúde pet a partir de R$ 19,90 com a qualidade Porto.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="{{ ('contato') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            Venha conhecer
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('/images/financeiro/pets.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>




    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Proteja seu pet com amor e um plano de saúde veterinário com qualidade Porto
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Adquirir um plano de saúde para o seu pet é uma forma de retribuir todo o amor e carinho vindo deles, além de trazer mais tranquilidade e segurança para você.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Agora Porto.pet, é Petlove, uma empresa parceira da Porto, com planos e benefícios a partir de R$ 19,90. Trazendo para o seu melhor amigo todo o cuidado, proporcionando assim maior qualidade de vida e longevidade.
                </p>
            </div>

            <div class="lg:text-center">
                <a href="{{ ('contato') }}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma  proposta
                </a>
            </div>
        </div>
    </div>


    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <div class="lg:text-center">
                        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                            Conheça o plano perfeito para seu pet
                        </h1>
                    </div>




                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">



                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="relative group w-full overflow-hidden bg-primary-600 h-12 rounded-t-3xl">
                                <div class="absolute bg-linear-to-t from-black w-full h-full flex items-end justify-center -inset-y-0">
                                    <h1 class="font-bold text-2xl text-white mb-2">Petlove Leve</h1>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="text-center px-3 pb-6 pt-2">
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        A partir de R$19,90/mês
                                    </p>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Consultas generalistas; vacinas simples; exames laboratoriais básicos
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="relative group w-full overflow-hidden bg-primary-600 h-12 rounded-t-3xl">
                                <div class="absolute bg-linear-to-t from-black w-full h-full flex items-end justify-center -inset-y-0">
                                    <h1 class="font-bold text-2xl text-white mb-2">Petlove Tranquilo</h1>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="text-center px-3 pb-6 pt-2">
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        A partir de R$49,90/mês
                                    </p>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Consultas generalistas; vacinas obrigatórias; exames laboratoriais simples e de imagem
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="relative group w-full overflow-hidden bg-primary-600 h-12 rounded-t-3xl">
                                <div class="absolute bg-linear-to-t from-black w-full h-full flex items-end justify-center -inset-y-0">
                                    <h1 class="font-bold text-2xl text-white mb-2">Petlove Ideal</h1>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="text-center px-3 pb-6 pt-2">
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        A partir de R$99,90/mês
                                    </p>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Coberturas do Plano Tranquilo; consulta com especialista; cirurgia, anestesia e internação
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="relative group w-full overflow-hidden bg-primary-600 h-12 rounded-t-3xl">
                                <div class="absolute bg-linear-to-t from-black w-full h-full flex items-end justify-center -inset-y-0">
                                    <h1 class="font-bold text-2xl text-white mb-2">Petlove Essencial</h1>
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="text-center px-3 pb-6 pt-2">
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        A partir de R$159,90/mês
                                    </p>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Coberturas do Plano Ideal; fisioterapia e acupuntura; exames complexos
                                    </p>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>

            <div class="lg:text-center mt-8">
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma  proposta
                </a>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="lg:text-center">
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">
                    Tire suas dúvidas sobre o Petlove Saúde
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais as formas de pagamento da Petlove Saúde?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            A forma mais usual é o cartão de crédito das bandeiras Visa e MasterCard. Caso você opte pelo pagamento mensal, o limite do seu cartão de crédito não será alterado, sendo apenas necessário dispor do valor contratado no dia da cobrança. Caso você escolha o pagamento anual, o valor total da compra é cobrado no momento da contratação.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Tenho plano Porto.pet e agora?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Não se preocupe! Seu plano, cobertura, forma de pagamento e mensalidade permanecem os mesmos. Agora como cliente Petlove Saúde, você tem acesso ao app Petlove, onde você poderá consultar as informações do plano do seu pet.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona o plano?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Somos um Plano de Saúde para Cães e Gatos. Você paga uma mensalidade fixa e o seu pet pode ser atendido em uma das mais de 2000 Clínicas da nossa Rede Credenciada. Faça seu cadastro, adicione o pet e escolha o Plano que mais se encaixa nas suas necessidades. Após a compra, você também poderá adicionar no seu Espaço do cliente: Banhos, Fisioterapia e Acupuntura, caso seu amiguinho precise.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Acabei de contratar o plano, quando começam a contar as carências?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Assim que seu pagamento for processado, você receberá um e-mail onde deverá clicar no link de confirmação da compra. Após esse passo, entre em contato com a Clínica de sua preferência para agendar a colocação do Microchip no seu pet. Lembre-se: suas carências começam a contar a partir da data da Microchipagem. Os procedimentos mais essenciais como consultas, vacinas, procedimentos clínicos e internações têm apenas 45 dias de carência. Os exames e consultas com especialistas têm carência de 60 dias, já as cirurgias e anestesia possuem 120 dias, por serem procedimentos mais delicados. Após a compra, você pode antecipar algumas carências através do Espaço do cliente e utilizar o Plano imediatamente.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona a coparticipação?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            A coparticipação é uma pequena taxa que você paga na utilização de alguns procedimentos. Na maioria das vezes, este valor é pago diretamente para a Clínica, e apenas em anestesias e exames que os valores são pagos para Petlove. Os valores são tabelados, não sofrendo alterações.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Tenho descontos se eu comprar para mais de 1 pet?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                        <p>
                            Com certeza! Nossos descontos são progressivos: para o segundo pet você ganha 10% de desconto, para o terceiro 20% de desconto e do quarto pet em diante você ganha 30% de desconto nos Planos de Saúde contratados. Os descontos são calculados automaticamente no momento da sua compra.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
                <h4>
                    Planos, procedimentos, coparticipação, coberturas e valores variam de acordo com a região. Atendimento dos pets somente na rede credenciada, que pode variar de acordo com o plano e a região. Upgrade pode ocorrer a qualquer momento. O downgrade somente após 12 meses de permanência no plano atual. Índice de reajuste pelo IPCA. A contagem da carência começa após a microchipagem do pet. Todos os planos possuem coparticipação, os valores são por procedimento e pagos na rede credenciada. O pagamento mensal no cartão de crédito é recorrente e não compromete o limite. Pós-venda: 11 3003 7190. Horário de atendimento de segunda a sexta-feira, das 9h às 18h (exceto feriados). Dúvidas comerciais, fale conosco no e-mail: comercial.pet@portoseguro.com.br.
                </h4>
            </div>
        </div>
    </div>

   

    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma  proposta
                </a>
            </div>
        </div>
    </div>



</x-layouts::app>