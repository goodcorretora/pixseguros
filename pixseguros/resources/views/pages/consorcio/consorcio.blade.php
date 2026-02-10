<x-layouts::app>
   <x-slot name="title">Consórcio</x-slot>
  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="w-full md:w-1/2 md:px-3">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block text-gray-50 xl:inline">Consórcio</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Consórcio de Imóvel, Auto, Moto, Bike, Sustentável, Serviços e Veículos Pesados
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow-sm">
            <a href="solicitar-consorcio" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
              Solicite uma proposta
            </a>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1">
        <img src="{{ asset('images/consorcio/consorciosx.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>




  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Conheça os planos do Consórcio </h2>
      </div>

      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">



        <a href="{{url('consorcio-de-veiculos')}}" class="flex max-w-xl flex-col items-start justify-between">
          <img class="h-40 rounded-sm w-full mb-6" src="./images/consorcio/consorcioauto.png" alt="content">
          <h2 class="text-xl text-gray-900 font-bold title-font mb-4 p-2">
            Consórcio de Veículo
          </h2>
          <p class="text-lg mb-4 p-2 line-clamp-3">
            Carros, motos e náuticos com pagamento em até 90 meses. Crédito de R$ 25mil a R$ 200 mil.
          </p>
          <button href="consorcio-de-veiculos" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary-50 bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
            Veja as vantangens
          </button>
        </a>

        <a href="{{url('consorcio-de-veiculos-pesados')}}" class="flex max-w-xl flex-col items-start justify-between">
          <img class="h-40 rounded-sm w-full object-center mb-6" src="./images/consorcio/consorciocaminhao.png" alt="content">

          <h2 class="text-xl text-gray-900 font-bold title-font mb-4 p-2">
            Consórcio de Veículo Pesado
          </h2>
          <p class="text-lg mb-4 p-2 line-clamp-3">
            Caminhões, ônibus, tratores, equipamentos rodoviários, agrícolas e linha amarela com pagamento em até 120 meses. Crédito de R$ 180 mil a R$ 360 mil.
          </p>
          <button href="consorcio-de-veiculos-pesados" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary-50 bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
            Saiba Mais
          </button>
        </a>

        <a href="{{url('consorcio-de-imoveis')}}" class="flex max-w-xl flex-col items-start justify-between">
          <img class="h-40 rounded-sm w-full object-center mb-6" src="./images/consorcio/consorcioimoveis.png" alt="content">

          <h2 class="text-xl text-gray-900 font-bold title-font mb-4 p-2">
            Consórcio de Imóvel
          </h2>
          <p class="text-lg mb-4 p-2 line-clamp-3">
            Casa, apartamento, terreno, construção, reforma e quitação de financiamento com pagamento em até 200 meses. Crédito de R$ 70 mil a R$ 900 mil.
          </p>
          <button href="consorcio-de-imoveis" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary-50 bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
            Conheça
          </button>
        </a>

        <a href="{{url('consorcio-de-motos')}}" class="flex max-w-xl flex-col items-start justify-between">
          <img class="h-40 rounded-sm w-full object-center mb-6" src="./images/consorcio/consorciomoto.png" alt="content">

          <h2 class="text-xl text-gray-900 font-bold title-font mb-4 p-2">
            Consórcio de Moto
          </h2>
          <p class="text-lg mb-4 p-2 line-clamp-3">
            Conheça as vantagens de adquirir uma moto através do consórcio de Motos.
          </p>
          <button href="consorcio-de-motos" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary-50 bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
            Veja as vantangens
          </button>
        </a>

        <a href="{{url('consorcio-de-servicos')}}" class="flex max-w-xl flex-col items-start justify-between">
          <img class="h-40 rounded-sm w-full object-center mb-6" src="./images/consorcio/consorcioservicos.png" alt="content">

          <h2 class="text-xl text-gray-900 font-bold title-font mb-4 p-2">
            Consórcio de Serviços
          </h2>
          <p class="text-lg mb-4 p-2 line-clamp-3">
            Você pode realizar procedimentos estéticos, cirúrgicos, contratar profissionais para festas e eventos (fotografia e filmagem, buffet, decoração, som, luzes, etc.), fazer viagens (férias ou intercâmbios), cursos de ensino superior, contratar mão-de-obra especializada e muitos outros.
          </p>
          <button href="consorcio-de-servicos" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary-50 bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
            Saiba Mais
          </button>
        </a>

        <a href="{{url('consorcio-sustentavel-de-placas-solares')}}" class="flex max-w-xl flex-col items-start justify-between">
          <img class="h-40 rounded-sm w-full object-center mb-6" src="./images/consorcio/consorciosustentavel.png" alt="content">

          <h2 class="text-xl text-gray-900 font-bold title-font mb-4 p-2">
            Consórcio de Sustentável
          </h2>
          <p class="text-lg mb-4 p-2 line-clamp-3">
            Compra e instalação de placa solar e seus componentes com pagamento em até 30 meses. Crédito de R$ 10 mil a R$ 20 mil.
          </p>
          <button href="consorcio-sustentavel-de-placas-solares" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary-50 bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
            Contrate
          </button>
        </a>

        <a href="{{url('consorcio-de-bike')}}" class="flex max-w-xl flex-col items-start justify-between">
          <img class="h-40 rounded-sm w-full object-center mb-6" src="./images/consorcio/consorciobike.png" alt="content">

          <h2 class="text-xl text-gray-900 font-bold title-font mb-4 p-2">
            Consórcio de Bike
          </h2>
          <p class="text-lg mb-4 p-2 line-clamp-3">
            De urbana a elétrica, sua nova bike é garantida sem juros e com planos a partir de R$ 8 mil em até 30 meses.
          </p>
          <button href="consorcio-de-bike" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-secondary-50 bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
            Descubra
          </button>
        </a>


        <!-- More posts... -->
      </div>
    </div>
  </div>


  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="w-full">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Os benefícios para você fechar seu consórcio com a Porto</h2>
      </div>
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <i class="fa-solid fa-hammer text-primary-600 fa-4x inline mr-3.5"></i>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                Parcelas reduzidas até a contemplação.
              </a>
            </h3>
          </div>
        </article>

        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <i class="fa-solid fa-hand text-primary-600 fa-4x inline mr-3.5"></i>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                Uso de parte do crédito para potencializar lances.
              </a>
            </h3>
          </div>
        </article>
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <i class="fa-solid fa-credit-card text-primary-600 fa-4x inline mr-3.5"></i>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                Parcelamento facilitado no cartão Porto Bank.
              </a>
            </h3>
          </div>
        </article>
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <i class="fa-solid fa-users text-primary-600 fa-4x inline mr-3.5"></i>
          </div>
          <div class="group relative">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
              <a href="#">
                Grupos com qualidade e segurança.
              </a>
            </h3>
          </div>
        </article>

        <!-- More posts... -->
      </div>
    </div>
  </div>



  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">Perguntas Frequentes:</p>
      </div>
      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como fazer um consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">

            <p>Para fazer um consórcio, é necessário definir qual é o seu objetivo, seja a compra de um imóvel, carro, caminhão, bike ou placa solar. Com o objetivo definido, basta solicitar uma proposta pelo nosso site ou procurar seu corretor de seguros.</p>



            <p>Assim, um especialista em consórcio da Porto Bank poderá te ajudar a escolher o plano que atenda melhor seus objetivos e necessidades. É nessa hora que a duração do contrato, o valor do crédito e o número de parcelas são definidos.</p>

            <p>Acesse a Porto para conhecer os tipos de consórcio, simular consórcio, conferir nossas condições exclusivas e todos os benefícios que só quem tem Porto tem!</p>



            <p>
              <a href="{{ ('consorcio-de-veiculos') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Consórcio de Veículos</span>
              </a>para carros, motos, vans, náuticos e outros veículos novos e seminovos.
            </p>



            <p>
              <a href="{{ ('consorcio-de-imoveis') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Consórcio Imobiliário</span>
              </a>
              Consórcio Imobiliário para adquirir sua casa, apartamento, para a compra de imóveis comerciais, de veraneio, de terrenos, ou ainda para reformar ou quitar um financiamento. Nessa modalidade você pode utilizar 100% do saldo do seu FGTS para ofertar lance.
            </p>



            <p>
              <a href="{{ ('consorcio-de-bike') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Consórcio de Bike</span>
              </a> para a aquisição de bike urbana, elétrica, de estrada, mountain bike ou moto elétrica.
            </p>



            <p>
              <a href="{{ ('consorcio-de-maquinas-agricolas-e-veiculos-pesados') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Consórcio de Veículos Pesados </span>
              </a> para compra de caminhão, ônibus, tratores e implementos agrícolas e rodoviários.
            </p>



            <p>
              <a href="{{ ('consorcio-sustentavel-de-placas-solares') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Consórcio Sustentável</span>
              </a> para compra e instalação de placas solares em casas ou empresas.
            </p>

            <p class="py-4 font-bold">
              Os consórcios de Serviços não são oferecidos pela Porto Seguro:

            </p>

            <p>
              <a href="{{ ('consorcio-de-servicos') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Consórcio de Serviços</span>
              </a> você pode realizar procedimentos estéticos, cirúrgicos, contratar profissionais para festas e eventos (fotografia e filmagem, buffet, decoração, som, luzes, etc.), fazer viagens (férias ou intercâmbios), cursos de ensino superior, contratar mão-de-obra especializada e muitos outros.

            </p>

            <p>
              <a href="{{ ('consorcio-de-motos') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Consórcio de Motos</span>
              </a>
            </p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O consórcio é um bom investimento?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>O consórcio é uma boa opção para adquirir bens de maior valor pois, diferente dos empréstimos e financiamentos, é livre de juros. Além disso, a modalidade oferece parcelamento integral e variedade de planos e prazos.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que vale mais a pena, consórcio ou financiamento?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>A grande diferença entre consórcio e financiamento é que no primeiro não existe a cobrança de juros, só a correção do crédito — afinal, ele se assemelha a uma poupança. O bem ou serviço só vai poder ser adquirido na hora da contemplação, que pode acontecer da primeira à última prestação a ser paga.</p>
            <p>Já no financiamento, há cobrança de juros, mas o bem ou serviço é adquirido imediatamente. O consórcio, portanto, é uma modalidade indicada às pessoas que não têm pressa para adquirir o seu bem por um preço mais justo.</p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Qual o tempo médio de fechamento dos grupos de consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>Conforme definido pela
              <a href="https://www.planalto.gov.br/ccivil_03/_ato2007-2010/2008/lei/l11795.htm" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Lei do Consórcio</span>
              </a>
              (Lei 11.795/2008) , todas as administradoras têm até 90 dias a partir da venda da primeira cota para inaugurar um grupo.
            </p>
            <p>No Consórcio Porto Bank, nunca tivemos grupos cancelados ou deixamos de contemplar nossos consorciados por falta de recursos no fundo comum. Além disso, a baixa inadimplência dos nossos grupos permite um fundo de reserva de apenas 0,5%, o qual, geralmente, é devolvido aos participantes após o encerramento do grupo.</p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como acessar as informações da minha cota?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>Acompanhe todas as informações do seu consórcio, sempre que precisar e com toda praticidade no
              <a href="https://www.portoseguro.com.br/conteudo/app/consorcio/index.html" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Aplicativo do Consórcio</span>
              </a> ou na
              <a href="https://www.portoseguro.com.br/pdc/login" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Área do Cliente</span>
              </a>. Nestes canais, você pode:

            <p>Atualizar seus dados;</p>
            <p>Emitir 2ª via de boleto;</p>

            <p>Antecipar parcelas e quitar seu consórcio;</p>

            <p>Emitir o extrato da sua cota;</p>

            <p>Acompanhar o andamento do grupo;</p>

            <p>Simular e oferecer um lance;</p>

            <p>Conferir o resultado da assembleia.</p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como acessar os resultados das assembleias?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>Os resultados das assembleias podem ser conferidos pelo seu
              <a href="https://www.portoseguro.com.br/conteudo/app/consorcio/index.html" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Aplicativo do Consórcio</span>
              </a> ou pela
              <a href="https://www.portoseguro.com.br/pdc/login" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>Área do Cliente</span>
              </a>. Você também pode acompanhar a assembleia online, ao vivo, através do link enviado por e-mail e SMS.
            </p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como funciona o lance no consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>O lance é uma das formas de acelerar a contemplação no consórcio.</p>

            <p>Funciona assim: todo mês, até o início da respectiva assembleia, você pode oferecer um lance pelo
            <p>Os resultados das assembleias podem ser conferidos pelo seu
              <a href="https://www.portoseguro.com.br/conteudo/app/consorcio/index.html" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>App do Consórcio</span>
              </a>.
            </p>

            <p>O valor oferecido é referente à antecipação do pagamento das parcelas futuras. Ou seja, caso seja contemplado, o valor pago poderá ser utilizado para reduzir o valor das parcelas restantes ou antecipar parcelas, reduzindo o prazo total de pagamento.</p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como funcionam os sorteios no consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>O sorteio é uma das formas de contemplação no consórcio. Na primeira assembleia do grupo, é realizado pela Porto Bank. E nos demais meses, ocorre por meio da primeira extração de cada mês da Loteria Federal.</p>



            <p>Todos os consorciados têm a mesma chance de serem contemplados por sorteio, desde que estejam com o pagamento das parcelas em dia.
            </p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é a taxa de administração do consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>A taxa de administração do consórcio é o valor, incluído na sua parcela, pago ao Consórcio Porto Bank pela criação e gestão do grupo. Seu percentual varia conforme o plano contratado. É com essa taxa que a administradora consegue manter a estrutura necessária para realizar as assembleias de contemplação e a gestão dos recursos financeiros, garantindo que o contrato seja cumprido por todos do grupo. Essa taxa não caracteriza uma forma de juros composto, pois representa um valor bem inferior quando comparada aos juros cobrados no financiamento. No Consórcio Porto Bank, por exemplo, a taxa de administração do consórcio de automóveis varia entre 15% e 18%, conforme o plano escolhido.</p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é o fundo de reserva no consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>O fundo de reserva no consórcio é o percentual, incluído na sua parcela, utilizado como garantia para possíveis imprevistos, como inadimplência ou demandas jurídicas. Caso esta reserva não seja utilizada, o valor será devolvido aos consorciados no encerramento do grupo, conforme sua contribuição.</p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Todos são contemplados até o final do grupo de consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Isso mesmo. Todos têm as mesmas chances de serem contemplados por sorteio ou lance durante as assembleias mensais. Mas, ao final da vigência do grupo, todos que ainda não receberam sua carta de crédito serão contemplados.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como solicitar o resgate de valores de um grupo de consórcio já encerrado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>Se o seu grupo já está encerrado e você foi comunicado que tem valores para resgatar, você deverá abrir um ticket no canal de atendimento da Porto, inserindo seus dados pessoais, dados do consórcio e informações bancárias para pagamento. Após o envio do formulário, manteremos você informado sobre o andamento da sua solicitação por e-mail ou SMS. O formulário está disponível neste

              <a href="https://www.portoseguroatendimento.com.br/pagamento_rnp" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>link</span>
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como transferir a titularidade do meu consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>A transferência da cota para outra pessoa é uma alternativa prevista na Lei do Consórcio (Lei 11.795/2008), podendo ser realizada em dois momentos: antes ou após a contemplação. No momento da transferência, o novo titular adquire os direitos previstos no regulamento e, também, passa a ser responsável por todas as obrigações da cota.</p>

            <p>Caso queira transferir a sua cota, entre em contato com a nossa Central de Relacionamento, de segunda a sexta-feira, das 8h às 20h (exceto feriados):</p>
            <p>Grande São Paulo: (11) 3366-3006</p>
            <p>Demais localidades: 0800-721-3006</p>

            <p>Após entrar em contato via Central, o consorciado receberá por email o Formulário de Transferência que deverá ser preenchido e devolvido à administradora. Retornaremos sua solicitação em 3 dias úteis após o recebimento do formulário assinado.</p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como solicito o termo de quitação do consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>Para solicitar o termo de quitação do seu consórcio, basta acessar o nosso Chat On-line, pelo

              <a href="https://prime.altubots.com/chats/portoassistencia/8e525c6a71acc64d1ef320e92ef1088a/index.html" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>link</span>
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-lg lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Ao cancelar o consórcio, quando terei a devolução dos valores pagos?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>Caso você precise cancelar o consórcio existem dois cenários:</p>

            </p>Se seu grupo faz parte da Lei do Consórcio (Lei 11.795/2008) e foi inaugurado após 06/02/2009, você continuará participando de sorteio mensais, exclusivos para as cotas canceladas em cada grupo, realizados pela extração da Loteria Federal. E, caso não sejam sorteadas, terão seus valores devolvidos no encerramento do grupo. Ao ser contemplado terá a restituição do valor pago referente ao fundo comum, abatido a multa contratual.</p>
            </p>Se o seu grupo é anterior à criação da lei, o prazo para devolução dos valores pagos é de 60 dias após o encerramento do grupo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>








  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
        <h4>
          Os valores de crédito podem ser alterados conforme atualização de índices – como o INCC e IPCA - e da tabela de preços de comercialização das montadoras.
        </h4>
      </div>
    </div>

    <div class="py-12 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
          <h4>
            A Porto Seguro Administradora de Consórcio e a Porto Seguro Cia de Seguros Gerais são empresas integrantes do Grupo Porto, controladas pela Porto Seguro S.A.

          </h4>
        </div>
      </div>
    </div>

    <div class="py-12 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <a href="{{url('solicitar-consorcio')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
            SOLICITAR UMA PROPOSTA
          </a>
        </div>
      </div>
    </div>
  </div>




</x-layouts::app>