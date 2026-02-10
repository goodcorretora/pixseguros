<x-layouts::app>



  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="sm:text-center lg:text-left">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block text-gray-50 xl:inline">Cartão de Crédito</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          O cartão que combina com você. Escolha o seu!
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow-sm">
            <a href="solicitar-cartao-de-credito" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
              Peça seu Cartão
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
        <img src="{{ asset('images/financeiro/cartao.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>



  <div class="overflow-x-hidden mt-8 lg:mt-2">
    <div class="container mx-auto lg:px-12">

      <div class="lg:text-center">
        <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
          Conheça os nossos cartões
        </h1>


      </div>

      <div class="mt-12 flex mx-auto items-center">
        <div x-data="carousel()" x-init="init()" class="relative overflow-hidden group">
          <div x-ref="container" class="md:-ml-4 flex overflow-x-scroll scroll-snap-x md:space-x-4 space-y-4 md:space-y-0 no-scrollbar">

            <div class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
              <div class="border rounded-lg p-5 h-full">
                <img class="h-60 w-full object-cover rounded-md" src="./images/financeiro/portobanksemanuidade.png" alt="">
                <h1 class="font-bold text-2xl mb-2">Porto Bank Sem Anuidade</h1>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Anuidade gráts
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Tag de pedágio grátis sem anuidade.
                </p>
                <div x-data={show:false} class="pt-5">
                  <p class="flex justify-left">
                    <button @click="show=!show" class="relative cursor-pointer underline decoration-primary-500/30 font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                      <span>Ver detalhes</span>
                    </button>
                  </p>
                  <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-secondary-100 border px-4 py-3 my-2 text-secondary-700">
                    <div class="text-right space-x-5 mt-5">
                      <button @click="show = !show" class="px-4 py-2 text-smtransition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                        <i class="fa-solid fa-x fa-2xl"></i>
                      </button>
                    </div>
                    <div class="mt-4 text-xl text-secondary-500 lg:mx-auto text-left">
                      <p>Detalhes do Porto Bank Sem Anuidade</p>
                      <p>Sobre Detalhes do Porto Bank Sem Anuidade</p>
                      <p>- Renda mínima: R$ 1.000,00</p>
                      <p>- Cobertura internacional</p>



                      <p>Sobre a anuidade</p>
                      <p>Sem anuidade</p>
                      <p>Até 1 cartão adicional sem anuidade.</p>



                      <p>Benefícios Porto</p>

                      <p>- PortoPlus: Aproveite as ofertas exclusivas em mais de 200 lojas parceiras. Este cartão não possui acúmulo de pontos;</p>
                      <p>- Tag Porto grátis e sem mensalidade;</p>
                      <p>- Desconto em combustíveis com Shell Box;</p>
                      <p>- Pré-vendas e descontos exclusivos em shows/eventos;</p>
                      <p>- Porto Faz: 20% de desconto na contratação;</p>
                      <p>- Reppara!: 20% de desconto na assinatura;</p>

                      <p>Conheça os benefícios da bandeira</p>

                      <p>- Serviço de Saque Emergencial;</p>
                      <p>- Substituição emergencial de cartão;</p>
                      <p>- Programa Vai de Visa;</p>
                    </div>
                  </div>

                </div>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                  <a href="{{ ('solicitar-cartao-de-credito') }}" class="w-full mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">
                    Peça agora
                  </a>
                </div>
              </div>
            </div>

            <div class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
              <div class="border rounded-lg p-5 h-full">
                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/portobankgold.png" alt="content">
                <h1 class="font-bold text-2xl mb-2">Porto Bank Gold</h1>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  12 meses de anuidade grátis
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Tag de pedágio grátis sem anuidade.
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  PortoPlus: Acumule até 1,5 ponto para dólar gasto.
                </p>
                <div x-data={show:false} class="pt-5">
                  <p class="flex justify-left">
                    <button @click="show=!show" class="relative cursor-pointer underline decoration-primary-500/30 font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                      <span>Ver detalhes</span>
                    </button>
                  </p>
                  <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-secondary-100 border px-4 py-3 my-2 text-secondary-700">
                    <div class="text-right space-x-5 mt-5">
                      <button @click="show = !show" class="px-4 py-2 text-smtransition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                        <i class="fa-solid fa-x fa-2xl"></i>
                      </button>
                    </div>
                    <div class="mt-4 text-xl text-secondary-500 lg:mx-auto text-left">
                      <p class="mt-1">Detalhes do Porto Bank Gold</p>
                      <p class="mt-1">Renda mínima: R$ 1.000,00</p>
                      <p class="mt-1">Cobertura internacional</p>


                      <p class="mt-1">Sobre a anuidade</p>

                      <p class="mt-1">Grátis nos 12 primeiros meses*</p>
                      <p class="mt-1">Depois disso, são apenas R$ 37,00 por mês e o valor pode diminuir conforme seu gasto mensal:</p>



                      <p class="mt-1">Inferior ou igual a R$ 2.499,99</p>

                      <p class="mt-1">R$ 37,00/mês;</p>



                      <p class="mt-1">Entre R$ 2.500,00 e R$ 3.999,99</p>
                      <p class="mt-1">R$ 18,50/mês;</p>



                      <p class="mt-1">Superior ou igual a R$ 4.000,00</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita;</p>



                      <p class="mt-1">Ou a partir de R$ 50 mil em fundos de investimento no Conquista</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita.</p>



                      <p class="mt-1">Até 3 cartões adicionais sem anuidade.</p>
                      <p class="mt-1">*Esta condição se aplica à primeira bandeira. Na aquisição de um novo cartão de 2ª bandeira, o cliente será isento e poderá somar os gastos dos dois cartões para isenção total ou parcial da anuidade do 1º cartão.</p>



                      <p class="mt-1">Benefícios Porto</p>

                      <p class="mt-1">PortoPlus: Acumule até 1,5 pontos a cada dólar gasto no Cartão de Crédito Porto Bank Platinum.
                        <a href="{{ ('https://www.portoseguro.com.br/content/dam/documentos/porto_bank/Regulamento_PortoPlus_VF.pdf') }}" class="text-primary-600 focus:outline-hidden" type="button">
                          Consulte as regras e condições
                        </a>
                      </p>

                      <p class="mt-1">Tag Porto grátis e sem mensalidade;</p>
                      <p class="mt-1">Desconto em combustíveis com Shell Box;</p>
                      <p class="mt-1">Descontos no Porto Seguro Auto ou Azul Seguro Auto;</p>
                      <p class="mt-1">5% de desconto nos demais seguros: Residencial, Bike, Celular, Viagem, Vida e Equipamentos Portáteis;</p>
                      <p class="mt-1">Pré-vendas e descontos exclusivos em shows/eventos;</p>
                      <p class="mt-1">Porto Faz: 20% de desconto na contratação;</p>
                      <p class="mt-1">Reppara!: 20% de desconto na assinatura;</p>

                      <p class="mt-1">Benefícios das bandeiras</p>


                      <p class="mt-1">Proteção de compras;</p>

                      <p class="mt-1">Proteção de preço;</p>
                      <p class="mt-1">Garantia estendida original;</p>
                      <p class="mt-1">Assistência nacional e internacional.</p>
                      <p class="mt-1">Veja mais sobre os benefícios</p>
                      <p class="mt-1">Opções Mastercard e Visa</p>
                    </div>
                  </div>
                </div>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                  <a href="{{ ('solicitar-cartao-de-credito') }}" class="w-full mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">
                    Peça agora
                  </a>
                </div>
              </div>
            </div>

            <div class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
              <div class="border rounded-lg p-5 h-full">
                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/portobankplatinum.png" alt="content">
                <h1 class="font-bold text-2xl mb-2">Porto Bank Platinum</h1>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  12 meses de anuidade grátis
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Tag de pedágio grátis sem mensalidade.
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  PortoPlus: Acumule até 2 ponto para dólar gasto.
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Sala VIP: 50% de desconto para você e uma acompanhante.
                </p>
                <div x-data={show:false} class="pt-5">
                  <p class="flex justify-left">
                    <button @click="show=!show" class="relative cursor-pointer underline decoration-primary-500/30 font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                      <span>Ver detalhes</span>
                    </button>
                  </p>
                  <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-secondary-100 border px-4 py-3 my-2 text-secondary-700">
                    <div class="text-right space-x-5 mt-5">
                      <button @click="show = !show" class="px-4 py-2 text-smtransition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                        <i class="fa-solid fa-x fa-2xl"></i>
                      </button>
                    </div>
                    <div class="mt-4 text-xl text-secondary-500 lg:mx-auto text-left">
                      <p class="mt-1">Detalhes do Porto Bank Platinum</p>

                      <p class="mt-1">Detalhes do Porto Bank Platinum</p>
                      <p class="mt-1"> - Renda mínima: R$ 10.000,00</p>
                      <p class="mt-1"> - Cobertura internacional</p>


                      <p class="mt-1">Sobre a anuidade</p>

                      <p class="mt-1">Grátis nos 12 primeiros meses*</p>
                      <p class="mt-1"> Depois disso, são apenas R$ 54,00 por mês e o valor pode diminuir conforme seu gasto mensal:</p>



                      <p class="mt-1">Inferior ou igual a R$ 4.499,99</p>
                      <p class="mt-1">R$ 54,00/mês;</p>



                      <p class="mt-1">Entre R$ 4.500,00 e R$ 6.999,99</p>

                      <p class="mt-1">R$ 27,00/mês;</p>



                      <p class="mt-1">Superior ou igual a R$ 7.000,00</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita;</p>



                      <p class="mt-1">Ou a partir de R$ 50 mil em fundos de investimento no Conquista</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita.</p>



                      <p class="mt-1">Até 4 cartões adicionais sem anuidade.</p>

                      <p class="mt-1">*Esta condição se aplica à primeira bandeira. Na aquisição de um novo cartão de 2ª bandeira, o cliente será isento e poderá somar os gastos dos dois cartões para isenção total ou parcial da anuidade do 1º cartão.</p>



                      <p class="mt-1">Benefícios Porto</p>


                      <p class="mt-1"> - PortoPlus: Acumule até 2 pontos a cada dólar gasto no Cartão de Crédito Porto Bank Platinum.
                        <a href="{{ ('https://www.portoseguro.com.br/content/dam/documentos/porto_bank/Regulamento_PortoPlus_VF.pdf') }}" class="text-primary-600 focus:outline-hidden" type="button">
                          Consulte as regras e condições
                        </a>;
                      </p>

                      <p class="mt-1"> - Sala VIP Coworking no Aeroporto de Congonhas: 50% de desconto para você e um acompanhante;</p>
                      <p class="mt-1"> - Tag Porto grátis e sem mensalidade;</p>
                      <p class="mt-1"> - Desconto em combustíveis com Shell Box;</p>
                      <p class="mt-1"> - Descontos no Porto Seguro Auto ou Azul Seguro Auto;</p>
                      <p class="mt-1"> - 5% de desconto nos demais seguros: Residencial, Bike, Celular, Viagem, Vida e Equipamentos Portáteis;</p>
                      <p class="mt-1"> - Pré-vendas e descontos exclusivos em shows/eventos;</p>
                      <p class="mt-1"> - Porto Faz: 20% de desconto na contratação;</p>
                      <p class="mt-1"> - Reppara!: 20% de desconto na assinatura;</p>

                      <p class="mt-1">Benefícios das bandeiras</p>


                      <p class="mt-1"> - Seguro médico em viagem;</p>

                      <p class="mt-1"> - Assistência nacional e internacional.</p>

                      <p class="mt-1">Veja mais sobre os benefícios</p>
                      <p class="mt-1">Opções Mastercard e Visa</p>
                    </div>
                  </div>
                </div>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                  <a href="{{ ('solicitar-cartao-de-credito') }}" class="w-full mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">
                    Peça agora
                  </a>
                </div>
              </div>
            </div>

            <div class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
              <div class="border rounded-lg p-5 h-full">
                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/portobankvisainfinite.png" alt="content">
                <h1 class="font-bold text-2xl mb-2">Porto Bank Visa Infinite</h1>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Anuidade flexível
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Tag de pedágio grátis sem mensalidade.
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  PortoPlus: Acumule até 3,5 ponto para dólar gasto.
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Sala VIP: acesso gratuito para você e dois acompanhantes.
                </p>
                <div x-data={show:false} class="pt-5">
                  <p class="flex justify-left">
                    <button @click="show=!show" class="relative cursor-pointer underline decoration-primary-500/30 font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                      <span>Ver detalhes</span>
                    </button>
                  </p>
                  <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-secondary-100 border px-4 py-3 my-2 text-secondary-700">
                    <div class="text-right space-x-5 mt-5">
                      <button @click="show = !show" class="px-4 py-2 text-smtransition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                        <i class="fa-solid fa-x fa-2xl"></i>
                      </button>
                    </div>
                    <div class="mt-4 text-xl text-secondary-500 lg:mx-auto text-left">
                      <p class="mt-1">Detalhes do Porto Bank Visa Infinite</p>

                      <p class="mt-1"> - O valor é de R$ 130,00 por mês* e pode diminuir conforme seu gasto mensal:</p>


                      <p class="mt-1">Inferior ou igual a R$ 9.999,99</p>
                      <p class="mt-1">R$ 130,00/mês;</p>



                      <p class="mt-1">Entre R$ 10.000,00 e R$ 19.999,99</p>
                      <p class="mt-1">R$ 65,00/mês;</p>



                      <p class="mt-1">Maior ou igual a 20.000,00</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita*;</p>



                      <p class="mt-1">Ou a partir de R$ 100 mil em fundos de investimento no Conquista</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita.</p>



                      <p class="mt-1">Até 3 cartões adicionais sem anuidade.</p>
                      <p class="mt-1">*Valores vigentes desde 26/06/23. Esta condição se aplica à primeira bandeira. Na aquisição de um novo cartão de 2ª bandeira, o cliente será isento e poderá somar os gastos dos dois cartões para isenção total ou parcial da anuidade do 1º cartão.</p>


                      <p class="mt-1">Benefícios Porto</p>


                      <p class="mt-1"> - PortoPlus: Acumule até 3,5 pontos a cada dólar gasto no Cartão de Crédito Porto Bank Visa Infinite.
                        <a href="{{ ('https://www.portoseguro.com.br/content/dam/documentos/porto_bank/Regulamento_PortoPlus_VF.pdf') }}" class="text-primary-600 focus:outline-hidden" type="button">
                          Consulte as regras e condições
                        </a>;
                      </p>

                      <p class="mt-1"> - Salas VIP: acesso gratuito e ilimitado para você e 2 acompanhantes à Sala VIP Coworking, no Aeroporto de Congonhas e 10 acessos gratuitos por ano em mais de 2 mil salas VIP nos principais aeroportos;</p>
                      <p class="mt-1"> - Tag Porto grátis e sem mensalidade;</p>
                      <p class="mt-1"> - Desconto em combustíveis com Shell Box;</p>
                      <p class="mt-1"> - Descontos no Porto Seguro Auto ou Azul Seguro Auto;</p>
                      <p class="mt-1"> - 5% de desconto nos demais seguros: Residencial, Bike, Celular, Viagem, Vida e Equipamentos Portáteis;</p>
                      <p class="mt-1"> - Pré-vendas e descontos exclusivos em shows/eventos;</p>
                      <p class="mt-1"> - Porto Faz: 20% de desconto na contratação;</p>
                      <p class="mt-1"> - Reppara!: 20% de desconto na assinatura;</p>

                      <p class="mt-1">Benefícios Visa Infinite</p>


                      <p class="mt-1"> - Seguro médico em viagem;</p>

                      <p class="mt-1"> - Proteção de compras;</p>
                      <p class="mt-1"> - Garantia estendida original;</p>
                      <p class="mt-1"> - Assistência nacional e internacional.</p>
                      <p class="mt-1">Veja mais sobre os benefícios</p>




                      <p class="mt-1">Opção Visa</p>
                    </div>
                  </div>
                </div>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                  <a href="{{ ('solicitar-cartao-de-credito') }}" class="w-full mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">
                    Peça agora
                  </a>
                </div>
              </div>
            </div>

            <div class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
              <div class="border rounded-lg p-5 h-full">
                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/portobankmastercardblack.png" alt="content">
                <h1 class="font-bold text-2xl mb-2">Porto Bank Mastercard Black</h1>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Anuidade flexível
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Tag de pedágio grátis sem mensalidade.
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  PortoPlus: Acumule até 3,5 ponto para dólar gasto.
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  Sala VIP: acesso gratuito para você e dois acompanhantes.
                </p>
                <div x-data={show:false} class="pt-5">
                  <p class="flex justify-left">
                    <button @click="show=!show" class="relative cursor-pointer underline decoration-primary-500/30 font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                      <span>Ver detalhes</span>
                    </button>
                  </p>
                  <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-secondary-100 border px-4 py-3 my-2 text-secondary-700">
                    <div class="text-right space-x-5 mt-5">
                      <button @click="show = !show" class="px-4 py-2 text-smtransition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                        <i class="fa-solid fa-x fa-2xl"></i>
                      </button>
                    </div>
                    <div class="mt-4 text-xl text-secondary-500 lg:mx-auto text-left">
                      <p class="mt-1">Detalhes do Porto Bank Mastercard® Black</p>


                      <p class="mt-1">Benefícios Mastercard® Black</p>
                      <p class="mt-1">Cobertura internacional</p>


                      <p class="mt-1">Sobre a anuidade</p>
                      <p class="mt-1">O valor é de R$ 130,00 por mês* e pode diminuir conforme seu gasto mensal:</p>



                      <p class="mt-1">Inferior ou igual a R$ 9.999,99</p>
                      <p class="mt-1">R$ 130,00/mês;</p>



                      <p class="mt-1">Entre R$ 10.000,00 e R$ 19.999,99</p>
                      <p class="mt-1">R$ 65,00/mês;</p>



                      <p class="mt-1">Superior ou igual a R$ 20.000,00</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita*;</p>



                      <p class="mt-1">Ou a partir de R$ 100 mil em fundos de investimento no Conquista</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita.</p>

                      <p class="mt-1">Até 3 cartões adicionais sem anuidade.</p>
                      <p class="mt-1">*Valores vigentes desde 26/06/23. Esta condição se aplica à primeira bandeira. Na aquisição de um novo cartão de 2ª bandeira, o cliente será isento e poderá somar os gastos dos dois cartões para isenção total ou parcial da anuidade do 1º cartão.</p>


                      <p class="mt-1">Benefícios Porto</p>


                      <p class="mt-1"> - PortoPlus: Acumule até 3,5 pontos a cada dólar gasto no Cartão de Crédito Porto Bank Mastercard Black.
                        <a href="{{ ('https://www.portoseguro.com.br/content/dam/documentos/porto_bank/Regulamento_PortoPlus_VF.pdf') }}" class="text-primary-600 focus:outline-hidden" type="button">
                          Consulte as regras e condições
                        </a>;
                      </p>

                      <p class="mt-1"> - Salas VIP: acesso gratuito e ilimitado para você e 2 acompanhantes à Sala VIP Coworking, no Aeroporto de Congonhas (CGH) e 10 acessos gratuitos por ano em mais de 2 mil salas VIP nos principais aeroportos;</p>
                      <p class="mt-1"> - Tag Porto grátis e sem mensalidade;</p>
                      <p class="mt-1"> - Desconto em combustíveis com Shell Box;</p>
                      <p class="mt-1"> - Descontos no Porto Seguro Auto ou Azul Seguro Auto;</p>
                      <p class="mt-1"> - 5% de desconto nos demais seguros: Residencial, Bike, Celular, Viagem, Vida e Equipamentos Portáteis;</p>
                      <p class="mt-1"> - Pré-vendas e descontos exclusivos em shows/eventos;</p>
                      <p class="mt-1"> - Porto Faz: 20% de desconto na contratação;</p>
                      <p class="mt-1"> - Reppara!: 20% de desconto na assinatura.</p>

                      <p class="mt-1">Benefícios Mastercard® Black</p>


                      <p class="mt-1"> - Seguro médico em viagem;</p>

                      <p class="mt-1"> - Proteção de compras;</p>
                      <p class="mt-1"> - Garantia estendida original;</p>
                      <p class="mt-1"> - Assistência nacional e internacional.</p>
                      <p class="mt-1">Veja mais sobre os benefícios</p>




                      <p class="mt-1">Opções Mastercard</p>
                    </div>
                  </div>
                </div>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                  <a href="{{ ('solicitar-cartao-de-credito') }}" class="w-full mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">
                    Peça agora
                  </a>
                </div>
              </div>
            </div>

            <div class="ml-4 flex-auto grow-0 shrink-0 w-96 rounded-lg bg-gray-100 items-center justify-center snap-center overflow-hidden shadow-md">
              <div class="border rounded-lg p-5 h-full">
                <img class="h-50 w-full object-cover rounded-md" src="./images/financeiro/portobankinternacional.png" alt="content">
                <h1 class="font-bold text-2xl mb-2">Porto Bank Internacional</h1>
                <p class=" text-gray-800 text-lg leading-8 font-medium">
                  Cartão esgotado
                </p>
                <p class="mt-2 text-gray-800 text-lg leading-8 font-medium">
                  PortoPlus: Acumule até 1 ponto para cada 1 dólar gasto.
                </p>
                <div x-data={show:false} class="pt-5">
                  <p class="flex justify-left">
                    <button @click="show=!show" class="relative cursor-pointer underline decoration-primary-500/30 font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                      <span>Ver detalhes</span>
                    </button>
                  </p>
                  <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-secondary-100 border px-4 py-3 my-2 text-secondary-700">
                    <div class="text-right space-x-5 mt-5">
                      <button @click="show = !show" class="px-4 py-2 text-smtransition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                        <i class="fa-solid fa-x fa-2xl"></i>
                      </button>
                    </div>
                    <div class="mt-4 text-xl text-secondary-500 lg:mx-auto text-left">
                      <p class="mt-1">Detalhes do Porto Bank Internacional</p>

                      <p class="mt-1">Este cartão não está mais disponível para contratação</p>
                      <p class="mt-1">Cobertura internacional</p>


                      <p class="mt-1">Sobre a anuidade</p>
                      <p class="mt-1">Grátis nos 12 primeiros meses*</p>
                      <p class="mt-1">Depois disso, são apenas R$ 34,00 por mês e o valor pode diminuir conforme seu gasto mensal:</p>



                      <p class="mt-1">Inferior ou igual a R$ 1.999,99</p>
                      <p class="mt-1">R$ 34,00/mês;</p>



                      <p class="mt-1">Entre R$ 2.000,00 e R$ 3.799,99</p>
                      <p class="mt-1">R$ 17,00/mês;</p>



                      <p class="mt-1">Superior ou igual a R$ 3.800,00</p>
                      <p class="mt-1">Parcela mensal da anuidade gratuita.</p>

                      <p class="mt-1">*Valores vigentes a partir de 26/06/23. Esta condição se aplica à primeira bandeira. Na aquisição da 2ª bandeira, os 6 primeiros meses são gratuitos.</p>


                      <p class="mt-1">Benefícios Porto</p>


                      <p class="mt-1">- PortoPlus: acumule até 3,5 pontos a cada dólar gasto em compras nacionais e internacionais no Mastercard Black e no Visa Infinite. Para os Cartões Platinum, você ganha até 2 pontos por dólar gasto e nos Cartões Gold até 1,5 pontos por dólar gasto.
                        <a href="{{ ('https://www.portoseguro.com.br/content/dam/documentos/porto_bank/Regulamento_PortoPlus_VF.pdf') }}" class="text-primary-600 focus:outline-hidden" type="button">
                          Consulte as regras e condições
                        </a>;
                      </p>

                      <p class="mt-1">- Tag Porto grátis e sem mensalidade;</p>
                      <p class="mt-1">- Desconto em combustíveis com Shell Box;</p>
                      <p class="mt-1">- Descontos no Porto Seguro Auto ou Azul Seguro Auto;</p>
                      <p class="mt-1">- 5% de desconto nos demais seguros: Residencial, Bike, Celular, Viagem, Vida e Equipamentos Portáteis;</p>
                      <p class="mt-1">- Pré-vendas e descontos exclusivos em shows/eventos;</p>
                      <p class="mt-1">- Porto Faz: 20% de desconto na contratação;</p>
                      <p class="mt-1">- Reppara!: 20% de desconto na assinatura;,</p>
                      <p class="mt-1">Veja mais sobre os benefícios</p>




                      <p class="mt-1">Oções Matercard e Visa</p>
                    </div>
                  </div>
                </div>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
                  <a href="{{ ('solicitar-cartao-de-credito') }}" class="w-full mt-4 px-6 py-3 rounded-md bg-primary-600 text-gray-50 font-bold border border-primary-200 hover:text-gray-50 hover:bg-primary-400 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-gray-50 focus:ring-offset-2">
                    Peça agora
                  </a>
                </div>
              </div>
            </div>

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
        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
          Explore os benefícios de ter um Cartão Porto Bank
        </h1>
      </div>
      <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0 mb-12">
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Programa de relacionamento PortoPlus
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Tag Porto Bank grátis sem mensalidade
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Desconto em combustível Shell Box
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Desconto no Seguro Auto
              </p>
            </li>
          </ul>
        </div>
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Seguros e serviços especiais
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                20% de desconto no app Vá de Táxi
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Crediário do Cartão Porto Bank
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Desconto Blue Note São Paulo
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="lg:text-center">
        <a href="{{url('solicitar-cartao-de-credito')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          Solicitar uma Proposta
        </a>
      </div>
    </div>
  </div>







</x-layouts::app>