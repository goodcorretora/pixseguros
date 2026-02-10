<x-layouts::app>
   <x-slot name="title">Consórcio Sustentável de Placas Solares</x-slot>
  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="w-full md:w-1/2 md:px-3">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block text-gray-50 xl:inline">Consórcio Sustentável</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Conte com uma energia renovável e eficiente para sua casa ou empresa.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow-sm">
            <a href="solicitar-consorcio" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
              Solicite uma proposta
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
        <img src="{{ asset('images/consorcio/consorciosustentavel.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
          Quais as vantagens de ter uma placa solar?
        </h1>
      </div>
      <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0 mb-12">
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Contribui para preservação do meio ambiente.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                É fácil de instalar e pouca necessidade de manutenção.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Tem, em média, 20 anos de durabilidade.
              </p>
            </li>
          </ul>
        </div>
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Economia na conta de energia.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Valoriza o imóvel, seja sua casa ou empresa.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Pode ser utilizada em áreas remotas.
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


  <div class="bg-white">

    <div class="container mx-auto flex justify-center">
      <div class="w-full mx-4 text-center">
        <div class="mt-6 grid gap-3 lg:grid-cols-1">
          <div x-data={show:false} class="mt-5">
            <p class="flex justify-center">
              <button @click="show=!show" class="w-full h-24 text-2xl border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
                <i class="fa-solid fa-chalkboard-user text-primary-600 fa-xl inline mr-3.5"></i>
                A Porto tem história com a energia sustentável
              </button>
            </p>
            <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 text-gray-700">
              <div class="flex items-start justify-between mt-2">
                <h2 class="text-2xl font-bold leading-6 text-gray-900" id="slide-over-title">A Porto tem história com a energia sustentável</h2>
                <button @click="show = !show"  class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                  <i class="fa-solid fa-x fa-2xl"></i>
                </button>
              </div>
              <div class="mt-1 sm:text-base lg:text-xl text-gray-500 lg:mx-auto text-left">
                <p class="mt-1">
                  Em 2016, a Porto decidiu buscar alternativas que viabilizassem não só a redução dos gastos com energia, mas que fossem também sustentáveis. Após vários estudos, a empresa decidiu instalar placas solares em alguns de seus prédios.
                </p>
                <p class="mt-1">
                  Atualmente, já são 26 prédios espalhados por todo o Brasil, que utilizam as placas solares, ocasionando uma redução de 65% no gasto com energia.
                </p>
                <p class="mt-1">
                  A prática também gerou cerca de 927.000 kwh e deixou de emitir 69 toneladas de gás carbônico na atmosfera, uma economia acima de R$ 331 mil.
                </p>
                <p class="mt-1">
                  Além disso, em 2008, influenciada pelo movimento de conscientização ambiental, Hora do Planeta, criou o projeto Hora da Terra e, diariamente, passou a desligar ou deixar de ligar uma determinada quantidade de luzes dos seus ambientes, em todo o Brasil.
                </p>
                <p class="mt-1">
                  Ao aproveitar a luz natural, em mais de 12 anos, a Porto teve uma economia de 7 milhões de kWh, o que equivale ao consumo médio de 44 mil casas brasileiras em 1 mês. Em 2013, também obteve a certificação LEED, um documento concedido a edifícios sustentáveis para construir um de seus prédios, que possibilitou a redução de 14% no consumo de energia.
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
      <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
        <div class="mx-auto max-w-lg text-center">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Saiba mais sobre o Consórcio Sustentável</h2>
        </div>
        <div class="mx-auto max-w-lg text-center rounded-3xl ml-2">
          <iframe width="100%" class="rounded-2xl w-full aspect-h-56" src="https://www.youtube.com/embed/aMWmg0HrGk0?si=rCnNNhEwscsqevxW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
              Saiba onde você ou sua empresa podem utilizar placas solares energéticas
            </h1>
          </div>
          <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none sm:grid-cols-2 lg:grid-cols-4">

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-check text-primary-600 fa-4x inline mr-3.5"></i>
                  <h1 class="font-bold text-2xl mb-2">Automação industrial de todos os portes.</h1>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-regular fa-lightbulb text-primary-600 fa-4x inline mr-3.5"></i>
                  <h1 class="font-bold text-2xl mb-2">100% dos eletrônicos da sua casa.</h1>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-battery-empty text-primary-600 fa-4x inline mr-3.5"></i>
                  <h1 class="font-bold text-2xl mb-2">Sustentação energética para baterias.</h1>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-hand-holding-droplet text-primary-600 fa-4x inline mr-3.5"></i>
                  <h1 class="font-bold text-2xl mb-2">Irrigação e automação agropecuária.</h2>
                </div>
              </div>
            </a>
          </div>
        </div>
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
          Posso vender energia solar para a concessionária da minha cidade?</div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              A legislação brasileira permite apenas a compensação de energia, portanto não é possível. Quando a produção for maior que o consumo em 1 mês, a concessionária de energia elétrica da sua cidade gera créditos a serem utilizados nos meses seguintes (em até 60 meses), na mesma unidade consumidora ou em outra que pertence ao mesmo CPF ou CNPJ, dentro da mesma concessionária de energia elétrica.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Pessoa jurídica também pode fazer o consórcio sustentável?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Sim, tanto pessoa física quanto jurídica podem comprar cotas do Consórcio Porto Bank.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Condomínio de apartamentos pode utilizar painel fotovoltaico?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              É importante consultar o regulamento do condomínio e a ata de eleição do síndico para saber se ele tem autonomia para contratar um consórcio em nome do condomínio.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Ao ser contemplado, os produtos de instalação também são considerados para compra?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              O Consórcio Sustentável Porto Bank paga pelo projeto completo de instalação, considerando inversor, estrutura, cabos, conectores e tudo mais que for preciso para finalizar seu projeto.
            </p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Posso produzir energia solar em um apartamento?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Para moradores de apartamento, só é possível utilizar painel solar quando já há instalação de um sistema de energia solar em toda área social do prédio.
            </p>
            <p>
              Em caso de apartamentos na cobertura, pode haver um acordo para a instalação com o restante dos condôminos, em assembleia.
            </p>

          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como devo emitir a nota fiscal de compra e instalação de placa solar?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              O Consórcio Sustentável Porto Bank cobre tanto a compra do equipamento quanto a instalação e os dois devem constar na mesma nota fiscal.
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
         - Plano de 30 meses </h4>
        <h4>
          - Taxa de administração a partir de 0,73% ao mês
        </h4>
        <h4>
          - Parcelas reajustadas de acordo com a correção anual pelo IPCA. 
        </h4>
        <h4>
          - Para saber mais, consulte grupos participantes. 
        </h4>
        <h4>
          - Para mais informações, consulte o regulamento.
        </h4>
      </div>
    </div>
  </div>




  <div class="bg-white">

    <div class="container mx-auto flex justify-center">
      <div class="w-full mx-4 text-center">
        <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
          Confira mais informações sobre o consórcio
        </h1>

        <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">


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
                <i class="fa-regular fa-rectangle-list text-primary-600 fa-xl inline mr-3.5"></i>
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
                  A análise de crédito é realizada automaticamente em até 24h após a contemplação. Seu resultado é válido por 90 dias para os grupos de automóveis.
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
                  Já escolheu o bem que deseja adquirir? Envie a documentação para análise do bem.
                  <a href="https://webapp.tech4h.com.br/porto/consorcio/" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>Acesse</span>
                  </a>.
                </p>
                <p class="mt-1 font-bold">
                  LIBERAÇÃO DE CRÉDITO
                </p>
                <p class="mt-1">
                  <a href="https://www.portoseguro.com.br/NovoInstitucional/static_files/documents/para-veiculos/consorcio-veiculos/3227.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                    <span>LINK</span>
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
                <i class="fa-regular fa-rectangle-list text-primary-600 fa-xl inline mr-3.5"></i>
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

                <p class="py-10 text-xl font-bold text-gray-500 lg:mx-auto text-left">
                  Importante
                </p>
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