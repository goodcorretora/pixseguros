<x-layouts::app>
    <x-slot name="title">Consórcio de Imóveis</x-slot>
  <div class="py-2 bg-primary-600 z-1">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="w-full md:w-1/2 md:px-3">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block text-gray-50 xl:inline">Consórcio de Imóveis</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Para quem quer comprar casa, apartamento ou terreno; ou mesmo começar uma construção ou reforma.
        </p>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          É importante você conhecer o funcionamento do consórcio como as taxas para cada uma das modalidades.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-center">
          <div class="rounded-md shadow-sm">
            <a href="solicitar-consorcio" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
              Solicitar uma proposta
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
        <img src="{{ asset('images/consorcio/consorcioimoveis.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
          Conte com parcelas reduzidas e sem juros até a contemplação
        </h1>
        <p class="space-y-4  text-gray-800 text-lg leading-8 font-medium md:mb-12">
          Pagamentos em até 200 meses e o seu crédito pode ser utilizado para imóveis residenciais ou comerciais.
        </p>
      </div>
      <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0 mb-12">
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Oções de planos com parcelas reduzidas até a contemplação
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Planos sem juros
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Contemplações mensais por meio de lance ou sorteio
              </p>
            </li>
          </ul>
        </div>
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Possibilidade de utilizar o FGTS de acordo com as regras da Caixa Econômica Federal
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Crédito a partir de R$ 70 mil
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Opções de planos com parcelas reduzidas até a contemplação
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="lg:text-center">
        <a href="{{url('solicitar-consorcio')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          Solicitar uma proposta
        </a>
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <p class="mt-5 mb-12 text-lg leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Planos acessíveis para você adquirir o consórcio imóvel:</p>
      </div>
      <div class="flex flex-wrap -m-4 justify-center text-center">

        <a href="{{url('solicitar-consorcio')}}" class="xl:w-1/4 md:w-1/2 p-4">
          <div class="shadow-lg rounded-lg">
            <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/consorcio/casa.png" alt="content">
            <h2 class="text-lg line-clamp-2 text-gray-900 font-medium title-font mb-2 p-2">
              Consórcio de Casa
            </h2>
          </div>
        </a>
        <a href="{{url('solicitar-consorcio')}}" class="xl:w-1/4 md:w-1/2 p-4">
          <div class="shadow-lg rounded-lg">
            <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/consorcio/apartamento.png" alt="content">
            <h2 class="text-lg line-clamp-2 text-gray-900 font-medium title-font mb-2 p-2">
              Consórcio de Apartamento
            </h2>
          </div>
        </a>

        <a href="{{url('solicitar-consorcio')}}" class="xl:w-1/4 md:w-1/2 p-4">
          <div class="shadow-lg rounded-lg">
            <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/consorcio/terreno.png" alt="content">
            <h2 class="text-lg line-clamp-2 text-gray-900 font-medium title-font mb-2 p-2">
              Consórcio de terreno
            </h2>
          </div>
        </a>

        <a href="{{url('solicitar-consorcio')}}" class="xl:w-1/4 md:w-1/2 p-4">
          <div class="shadow-lg rounded-lg">
            <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/consorcio/reforma.png" alt="content">
            <h2 class="text-lg line-clamp-2 text-gray-900 font-medium title-font mb-2 p-2">
              Consórcio para Reforma
            </h2>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">



      <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
        <div class="mx-auto max-w-lg text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">O que é consórcio?</h2>
          <p class="mt-6 text-xl leading-8  text-gray-900">Assista aos vídeos e conheça mais sobre o consórcio e seus benefícios</p>
        </div>
        <div class="mx-auto max-w-lg text-center rounded-3xl ml-2">
          <iframe class="rounded-2xl w-full aspect-h-56" src="https://www.youtube.com/embed/ztim5vJm5F0?si=s0XYgBvTQvwNhj0N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>



      <div class="my-16 flex items-center justify-center">

        <div class="container mx-auto px-4 sm:px-8 max-w-full">
          <div class="main-images mb-8 ">
            <div class="images grid grid-cols-1 md:grid-cols-4 gap-8">
              <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe width="100%" src="https://www.youtube.com/embed/gTZI6uQjVgM?si=JjPmtXArl0ep4iv3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <span class="text-center p-2 text-gray-700 text-lg inline-block w-full">
                  Passo a passo para contratar um consórcio.
                </span>
              </div>

              <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe width="100%" src="https://www.youtube.com/embed/pyEk60w1Nf0?si=s4FyFRVRWgYPdUwA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <span class="text-center p-2 text-gray-700 text-lg inline-block w-full">
                  Descubra se o consórcio é a melhor opção para você.
                </span>
              </div>

              <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe width="100%" src="https://www.youtube.com/embed/jfqy2kpkakY?si=u3xUpEeM6UsoOYR_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <span class="text-center p-2 text-gray-700 text-lg inline-block w-full">
                  Veja todos os benefícios de um consórcio.
                </span>
              </div>

              <div class="image bg-white rounded-lg shadow-lg overflow-hidden">
                <iframe width="100%" src="https://www.youtube.com/embed/BfET0P7kxa4?si=Zq9yCLUhwlIepUZl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <span class="text-center p-2 text-gray-700 text-lg inline-block w-full">
                  Conheça o bê-a-bá do consórcio.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>





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
      <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
        <h4>
         - Planos de até 200 meses com taxa de administração a partir de 1,11% ao ano e 0,5% de entrada em até 12 vezes e o restante (1,5%) diluído no plano. Valor das parcelas reduzidas em 25% até a contemplação, após o valor será compensado nas parcelas seguintes.
        </h4>
        <h4>
          - Parcelas reajustadas conforme aniversário do grupo.
        </h4>
        <h4>
          - Para saber mais, consulte o regulamento e grupos participantes.
        </h4>
        <h4>
          - Condições válidas de 09/02/2024 a 29/02/2024. 
        </h4>
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
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como fazer consórcio de imóvel?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Para fazer um consórcio de imóvel, basta Solicitar uma proposta pelo nosso site ou procurar seu corretor de seguros.
            </p>
            <p>
              Assim, um especialista em consórcio da Porto Bank poderá te ajudar a escolher o plano que atenda melhor seus objetivos e necessidades. É nessa hora que a duração do contrato, o valor do crédito e o número de parcelas são definidos.
            </p>
            <p>
              Acesse
              <a href="{{ ('consorcio-de-imoveis') }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>site</span>
              </a> para simular consórcio imobiliário, conferir nossas condições exclusivas e todos os benefícios
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como funciona o consórcio de imóveis?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              No consórcio de imóveis, um grupo de pessoas com o mesmo propósito se autofinancia através do pagamento de parcelas mensais para a conquista dos seus objetivos. Tudo isso, com o Consórcio Porto Bank fazendo toda a administração.
            </p>
            <p>
              Porém, para utilização do FGTS, o trabalhador e o imóvel deverão se enquadrar nas normas de liberação da Caixa Econômica Federal, descritas no Manual do FGTS.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Consórcio imobiliário vale a pena?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Entre as vantagens que explicam porque o consórcio imobiliário é cada vez mais procurado estão: ausência de juros, livre de entrada, poder de negociação à vista no momento da compra, possibilidade de uso do FGTS e flexibilidade no uso do crédito.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Posso usar o saldo do FGTS no consórcio de imóvel?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Sim, você pode utilizar até 100% do seu FGTS no Consórcio Porto Bank para oferecer lance ou complementar a carta de crédito, seja para compra ou construção de imóvel residencial. E, depois da compra, você pode abater as parcelas de trás para frente ou, ainda, pagar o seu saldo devedor.
            </p>
            <p>
              Porém, para utilização do FGTS, o trabalhador e o imóvel deverão se enquadrar nas normas de liberação da Caixa Econômica Federal, descritas no site 
              <a href="https://www.caixa.gov.br/voce/habitacao/Paginas/utilizacao-fgts.aspx" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                  <span>FGTS para casa própria</span>
                </a>.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <div class="bg-white">

    <div class="container mx-auto flex justify-center">
      <div class="w-full mx-4 text-center">
        <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
          Confira mais informações sobre o consórcio
        </h1>

        <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">


          <div x-data={show:false} class="mt-5">
            <p class="flex justify-center">
              <button @click="show=!show" class="w-96 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                <i class="fa-solid fa-chalkboard-user text-primary-600 fa-xl inline mr-3.5"></i>
                Informações para o cliente
              </button>
            </p>
            <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 text-gray-700">
              <div class="flex items-start justify-between mt-2">
                <h2 class="text-2xl font-bold leading-6 text-gray-900" id="slide-over-title">Informações para o cliente</h2>
                <button @click="show = !show"  class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                  <i class="fa-solid fa-x fa-2xl"></i>
                </button>
              </div>
              <div class="mt-1 sm:text-base lg:text-xl text-gray-500 lg:mx-auto text-left">
                <p class="mt-1">
                  As transferências de cotas só poderão ser efetuadas com a autorização da Administradora.
                </p>
                <p class="mt-1">
                  Para cotas contempladas será necessário prévia análise de crédito do adquirente.
                </p>
                <p class="mt-1">
                  As datas de vencimento somente serão alteradas em casos de feriados nacionais. Caso seja feriado local, o recomendado é antecipar o pagamento.
                </p>
                <p class="mt-1">
                  O boleto de cobrança é do Banco Bradesco S.A. Atentar-se sempre ao logotipo e ao código do banco, localizados no início da linha digitável (código de barras). O número do Banco Bradesco é 237.

                </p>
                <p class="mt-1">
                  Todas as formas de contemplação estão descritas no Regulamento.
                </p>
                <p class="mt-1">
                  *Os itens acima relacionados servem ao atendimento da Lei Estadual 4.817/2016, de Mato Grosso do Sul.
                </p>
              </div>
            </div>
          </div>

          <div x-data={show:false} class="mt-5">
            <p class="flex justify-center">
              <button @click="show=!show" class="w-96 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                <i class="fa-solid fa-list text-primary-600 fa-xl inline mr-3.5"></i>
                Documentos e formulários
              </button>
            </p>
            <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 text-gray-700">
              <div class="flex items-start justify-between mt-2">
                <h2 class="text-2xl font-bold leading-6 text-gray-900" id="slide-over-title">Documentos e formulários</h2>
                <button @click="show = !show"  class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                  <i class="fa-solid fa-x fa-2xl"></i>
                </button>
              </div>
              <div class="mt-1 sm:text-base lg:text-xl text-gray-500 lg:mx-auto text-left">
                <p class="mt-1">
                  Para garantir que sua carta de crédito seja liberada em poucos dias, manteremos você informado sobre todas as etapas da sua contemplação por e-mail e SMS.
                </p>
                <p class="mt-1">
                  Mas, se você ainda tiver dúvidas sobre o processo de contemplação, consulte os links abaixo:
                </p>
                <p class="mt-1 font-bold">
                  NOVA ANÁLISE DE CRÉDITO
                </p>
                <p class="mt-1">
                  A análise de crédito é realizada automaticamente em até 24h após a contemplação. Seu resultado é válido por 180 dias para grupos de imóvel.
                </p>
                <p class="mt-1">
                  Caso sua análise tenha expirado, você pode solicitar sua atualização por esse
                  <a href="https://www.portoseguro.com.br/NovoInstitucional/static_files/documents/para-veiculos/consorcio-veiculos/Formulario_nova_analise_de_credito.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>formulário</span>
                  </a>.
                </p>
                <p class="mt-1 font-bold">
                  SOLICITAÇÃO DE FIADOR
                </p>
                <p class="mt-1">
                  Em alguns casos, a Porto Bank pode solicitar um fiador para prosseguir com a análise de crédito após a contemplação. Se este for o seu caso, preencha o
                  <a href="https://www.portoseguro.com.br/NovoInstitucional/static_files/documents/para-veiculos/consorcio-veiculos/formulario-do-fiador.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>formulário</span>
                  </a>.
                </p>
                <p class="mt-1 font-bold">
                  ANÁLISE DO BEM
                </p>
                <p class="mt-1">
                  Cada tipo de utilização do consórcio de imóvel precisa de documentos específicos. Por isso, veja todos os documentos necessários de acordo com o seu projeto.
                  <a href="https://www.portoseguro.com.br/NovoInstitucional/static_files/documents/para-imoveis/consorcio-imoveis/Lista_de_Documentos_Pos_Contemplacao_V4.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>Acesse</span>
                  </a>.
                </p>
                <p class="mt-1">
                  JÁ SEPAROU OS DOCUMENTOS DE ACORDO COM SEU PERFIL? ENVIE A DOCUMENTAÇÃO PARA ANÁLISE DO BEM.
                </p>
                <p class="mt-1">
                  <a href="https://webapp.tech4h.com.br/porto/consorcio/login/validar-documento" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>ENVIO DA DOCUMENTAÇÃO</span>
                  </a>.
                </p>
                <p class="mt-1">
                  Se preferir, fale com a gente pelo
                  <a href="https://api.whatsapp.com/send?1=pt_BR&phone=551130039303&utm_source=relacionamento&utm_medium=site&utm_campaign=mkt_produto_caps_lanc_whatsapp_fase4_divulgacao_base_porto_auto_auto_porto_seguro_auto_br&utm_content=cta-add_numero&utm_term=mkt-produto&ref=mkt_7000" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>Chat On-line</span>
                  </a>.
                </p>
                </div>
            </div>
          </div>

          <div x-data={show:false} class="mt-5">
            <p class="flex justify-center"> <button @click="show=!show" class="w-96 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                <i class="fa-solid fa-calendar-days text-primary-600 fa-xl inline mr-3.5"></i>
                Calendário de assembleia
              </button>
            </p>
            <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 text-gray-700">
              <div class="flex items-start justify-between mt-2">
                <h2 class="text-2xl font-bold leading-6 text-gray-900" id="slide-over-title">Calendário de assembleia</h2>
                <button @click="show = !show"  class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                  <i class="fa-solid fa-x fa-2xl"></i>
                </button>
              </div>
              <div class="mt-1 sm:text-base lg:text-xl text-gray-500 lg:mx-auto text-left">
                <p class="mt-1">
                  As assembleias são transmitidas online e você pode acompanhá-las pelo link enviado pela Porto Bank por e-mail ou SMS. Caso você não consiga participar, também é possível verificar o resultado pelo
                  <a href="https://www.portoseguro.com.br/conteudo/app/consorcio/index.html" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>Aplicativo Porto Seguro Consórcio</span>
                  </a> ou
                  <a href="https://www.portoseguro.com.br/pdc/login" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>Área do Cliente</span>
                  </a>.
                </p>

                <p class="mt-1">
                  <a class="relative cursor-pointer bg-white rounded-md font-medium text-center text-gray-800 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    ANO 2025
                  </a>
                  <!-- component -->
                  <table class="border-collapse w-full">
                    <thead>
                        <tr>
                            <th class="p-1 font-bold bg-gray-200 text-center text-gray-600 border border-gray-300 hidden lg:table-cell">Mês</th>
                            <th class="p-1 font-bold bg-gray-200 text-center text-gray-600 border border-gray-300 hidden lg:table-cell">Assembléia</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Janeiro
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              21/01
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Fevereiro
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              21/02
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Março
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              21/03
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Abril
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                            23/04
                          </td>
                      </tr>                     
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Maio
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              21/05
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Junho
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              23/06
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Julho
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              21/07
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Agosto
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            21/08
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Setembro
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            19/09
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Outubro
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              21/10
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Novembro
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              24/11
                          </td>
                      </tr>
                      <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                              Dezembro
                          </td>
                          <td class="w-full lg:w-auto p-1 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            19/12
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </p>

                <p class="py-10 text-xl font-bold text-gray-500 lg:mx-auto text-left">Importante</p>
                <p class="mt-1">
                  Todos os consorciados têm a mesma chance de serem contemplados por sorteio, desde que estejam com o pagamento das parcelas em dia.
                </p>
                <p class="mt-1">
                  As datas de vencimento somente serão alteradas em caso de feriado nacional. Caso seja feriado local, a recomendação é que o pagamento seja antecipado.
                </p>
                <p class="mt-1">
                  As datas de vencimento somente serão alteradas em caso de feriado nacional. Caso seja feriado local, a recomendação é que o pagamento seja antecipado.
                </p>
              </div>
            </div>
          </div>

          <div x-data={show:false} class="mt-5">
            <p class="flex justify-center"> <button @click="show=!show" class="w-96 h-24 text-lg border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                <i class="fa-solid fa-users text-primary-600 fa-xl inline mr-3.5"></i>
                Encerramento de grupo
              </button>
            </p>
            <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 text-gray-700">
              <div class="flex items-start justify-between mt-2">
                <h2 class="text-2xl font-bold leading-6 text-gray-900" id="slide-over-title">Encerramento de grupo</h2>
                <button @click="show = !show"  class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                  <i class="fa-solid fa-x fa-2xl"></i>
                </button>
              </div>
              <div class="mt-1 sm:text-base lg:text-xl text-gray-500 lg:mx-auto text-left">
                <p class="mt-1">
                  Os consorciados participantes do grupo 0I92 deverão entrar em contato com a nossa Central de Relacionamento, a fim de verificar possível devolução de valores.
                </p>
                <p class="mt-1">
                  Central de Relacionamento:
                </p>
                <p class="mt-1">
                  (11) 3366-3006 - (Grande São Paulo)
                </p>

                <p class="mt-1">
                  0800-721-3006 - (Demais localidades)
                </p>
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
        <a href="{{url('solicitar-consorcio')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          Solicitar uma proposta
        </a>
      </div>
    </div>
  </div>


</x-layouts::app>