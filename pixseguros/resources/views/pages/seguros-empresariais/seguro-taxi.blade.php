<x-layouts::app>

    <x-slot name="title">Seguro para Táxi</x-slot>



    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Táxi</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    O seguro que oferece serviços gratuitos, assistência rápida e descontos especiais para taxistas.
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
                <img src="{{ asset('images/seguros/taxi.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    A companhia da Porto por onde for com seu táxi
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Aqui, taxistas contam com as vantagens do aplicativo Vá de Táxi para facilitar as corridas e fidelizar os clientes.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Se der algum problema no veículo, é só solicitar a assistência pelo WhatsApp. Os benefícios vão desde a troca gratuita do filtro de óleo e das pastilhas de freio até a cobertura para colisão, incêndio, roubo e furto.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    Não fique parado no ponto de táxi. Ligue o taxímetro e vá em frente!
                </p>
            </div>
        </div>
    </div>

    <div class="overflow-x-hidden mt-8 lg:mt-2">
        <div class="container mx-auto lg:px-12">

            <h1 class="ml-6 text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Coberturas que protegem você e seu táxi
            </h1>

            <div class="mt-12 flex mx-auto items-center">
                <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
                    <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-shield-halved text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Total</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Cobetura para dano parcial ou sinistro de indenização integral ao táxi por colisão incêndio, roubo e furto.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-user-injured text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Acidentes pessoais de passageiros</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Indenização por danos corporais causados aos passgeiros em razão de acidente com o veículo segurado.
                                </p>
                            </div>
                        </a>

                        <a class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-car text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Lucros cessantes por paralisaão do veículo</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Pagamento de diárias no caso de acidente em que seja necessária a paralisação do veículo utilizado para trabalho.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-link-slash text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Proteção de vidros</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Troca ou reparo em caso de danos aos vidros, lanternas, faróis e retrovisores.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-fire text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Incêndio, roubo e furto</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Reembolso de despesas que você possa vir a ter em caso de sinistro de ndenização integral, até o limite máximo previsto na apólice.
                                </p>
                            </div>
                        </a>

                        <a href="{{ ('protecao-combinada') }}" class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg  items-center justify-center snap-center overflow-hidden">
                            <div class="rounded-lg p-5 h-full">
                                <i class="fa-solid fa-car-burst text-primary-600 fa-4x inline mr-3.5"></i>
                                <h2 class="mt-2 text-2xl font-bold text-gray-900">Danos a terceiros</h2>
                                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                    Cobertura para danos materiais e danos corporais decorrentes de acidentes com terceiros.
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
                    Busca ainda mais proteção? Confira as coberturas adicionais
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Isenção de franquia no primeiro sinistro (seguro da franquia)
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Cobertura que garante o pagamento integral da franquia (participação do segurado na hora de pagar pela reparação de um dano) no primeiro sinistro, quando os prejuízos ultrapassarem o valor da franquia estipulada na apólice.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Higienização em caso de alagamento
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Essa cobertura garante a limpeza do veículo em consequência de enchentes, alagamentos ou inundações, quando o sinistro não atingir o valor da franquia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Carro reserva porte médio ou crédito em aplicativos de mobilidade
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Em caso de sinistro de perda parcial ou integral, a cobertura de carro reserva permite a locação de um veículo de marca nacional, de porte médio, modelo sedan 1.4, pelo período de 7, 15 ou 30 dias. Ou, o segurado pode optar por crédito em aplicativos de mobilidade como Vá de Táxi ou Uber por até 30 dias ou até o término dos créditos (o que ocorrer primeiro).</p>
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
                            Com o Seguro Táxi da Porto, você tem
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">


                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-brands fa-whatsapp text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Solicitação de socorro pelo WhatsApp</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        </p>Solicite assistência para seu carro ou casa*</p>
                                        </p>11 3366 3848</p>
                                        </p>Nosso número não possui o 9 na frente, portanto, é importante que você salve como descrito acima. Atendimento 24 horas, 7 dias por semana.</p>
                                        </p>*Serviços residenciais previstos na contratação do seu Seguro Auto. Consulte sua apólice.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-rotate-left text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Troca de pastilha de freio gratuita</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>Com o Seguro Táxi, você terá direito a uma troca gratuita do par de pastilhas dianteiras de freio em qualquer um dos mais de 270 Centros Automotivos Porto.</p>

                                        <p>*Serviço limitado a uma troca durante a vigência da apólice, com a marca de pastilha que estiver disponível. A disponibilidade do benefício pode variar de acordo com o modelo do veículo.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-oil-can text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Troca do filtro de óleo gratuita</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>Ao realizar a troca de óleo em um dos mais de 270 Centros Automotivos Porto, você ganha uma troca do filtro de óleo.</p>
                                        <p>*O filtro de óleo concedido será da marca que estiver disponível no local e o produto não será entregue em mãos. Consulte limites de utilização e abrangência nas Condições Gerais.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-car text-primary-600 fa-4x inline mr-3.5"></i>
                                    <h1 class="font-bold text-2xl mb-2">Reposição do valor do táxi 0km por até 6 meses</h1>
                                    <div class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-5">
                                        <p>Nos casos de indenização integral, você tem garantia de até 6 meses para a reposição do veículo pelo valor de 0km, para seguros contratados na modalidade de Valor de Mercado.</p>
                                        <p>*Na apólice de Seguro Auto de Valor de Mercado, o valor da indenização do veículo será variável e estipulado de acordo com a tabela de preço vigente no momento da indenização integral.</p>
                                    </div>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <div class="mt-6 grid gap-2 lg:grid-cols-1 space-x-5">

                <div x-data={show:false} class="mt-5">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-full h-24 border-2 border-primary-600 text-2xl font-bold bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                            VANTAGENS COM O APLICATIVO VÁ DE TÁXI
                        </button>
                    </p>
                    <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-3 text-sm  rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <p class="mt-4 text-xl font-bold text-gray-500 lg:mx-auto text-left">
                            VANTAGENS COM O APLICATIVO VÁ DE TÁXI
                        </p>

                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Vantagens para taxistas e passageiros que usam o app
                        </p>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            Na plataforma Vá de Táxi, você recebe pagamentos feitos no cartão de crédito ou celular diretamente na sua conta, sem o uso da máquina, taxa de adesão ou mensalidade. Seus passageiros ainda poderão contar com 20% de desconto* ao pagar com o Cartão de Crédito Porto Bank, e não se preocupe, você receberá o valor integral da corrida e o passageiro terá o desconto na fatura do cartão. E tem mais: você ganha 5% de desconto** na contratação ou renovação do seu Seguro Táxi da Porto ao usar o aplicativo.
                        </p>
                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <a href="{{ ('https://www.portoseguro.com.br/beneficios/va-de-taxi-taxista') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                                <span>Saiba mais</span>
                            </a>
                        </p>

                        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            *Desconto concedido no ato para pagamento via aplicativo Vá de Táxi, limitado a R$20 por transação e a 5 corridas por mês, por CPF. Os pontos em dobro serão creditados na fatura do cartão em até 30 dias após a utilização. Desconto válido por tempo indeterminado, sujeito à alteração a exclusivo critério da Porto Seguro, mediante aviso prévio. **O desconto é válido para o taxista que utiliza o aplicativo Vá de Táxi por, no mínimo, 40 horas semanais.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-secondary-900 sm:text-4xl text-center">
                    Tire suas dúvidas sobre o Seguro Táxi da Porto Seguro
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Como funciona o seguro para táxi?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            É um seguro tão completo quanto o que é feito para veículos de uso particular, mas com vantagens específicas como a indicação de até três condutores que dirigem o veículo habitualmente e a cobertura para taxímetro e luminoso — incluída em caso de sinistro indenizável de perda parcial por colisão e/ou incêndio do automóvel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    O que o seguro para táxi cobre?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Além de cobrir tudo que um seguro para veículo de passeio cobre, oferece ainda dois benefícios gratuitos a serem aproveitados nos Centro Automotivos Porto Seguros:
                        </p>
                        <p>• Troca do filtro de óleo</p>

                        <p>• Troca da pastilha de freio dianteira</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Existe carro reserva no seguro para táxi?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>Assim como nos seguros para veículos de passeio, é possível contratar uma cláusula que inclui o carro reserva, mas o uso do veículo locado não pode ter fins lucrativos.</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Recebo indenização se meu táxi ficar parado?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            No momento da contratação do seu Seguro Táxi, você pode optar pela cobertura de Lucros Cessantes que garante o pagamento de diárias conforme o número de dias que seu veículo estiver no conserto e, por essa razão, você estiver impossibilitado de trabalhar.
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
                    Acesse as Condições Gerais e confira as cláusulas e disposições do seu Porto Seguros Táxi.
                </p>
                <a href="{{url('https://www.portoseguro.com.br/seguro-taxi#condicoes-gerais')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    CONDIÇÕES GERAIS
                </a>
            </div>
        </div>
    </div>


    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-2xl font-semibold mb-4">
                    Peça uma proposta seguro táxi.
                </p>
                <a href="{{url('contato')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>





</x-layouts::app>