<x-layouts::app>
    <x-slot name="title">Consórcio de Motos</x-slot>
  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="w-full md:w-1/2 md:px-3">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block text-gray-50 xl:inline">Consórcio de Motos</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          É importante você conhecer o funcionamento do consórcio como as taxas para cada uma das modalidades.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow-sm">
            <a href="solicitar-consorcio" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
              Solicitar uma proposta
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
        <img src="{{ asset('images/consorcio/consorciomoto.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="lg:text-center">
        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
          Consórcio de Motos
        </h1>
        <p class="text-gray-800 text-lg leading-8 font-medium mb-8">
          É importante você conhecer o funcionamento do consórcio como as taxas para cada uma das modalidades.
        </p>
      </div>

      <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0 mb-12">
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Vantagens do Consórcio de Motos:
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Compre uma nova moto da marca e modelo que preferir;
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>

              <p class="ml-4">Não tem juros, pois você se autofinancia;</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">Parcelas acessíveis ao seu planejamento financeiro.</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Carta de Crédito do Consórcio de Motos.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Use a carta de crédito para comprar marca e modelo de motos e motonetas.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Opções em valores de créditos, parcelas mensais e de tempo para o pagamento.
              </p>
            </li>
          </ul>
        </div>
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Vantagens do Consórcio de Motos:
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Sorteio todo mês, para realizar seu sonho;</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Possibilidade de ser contemplado por meio de um lance;
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Te proporciona mais disciplina financeira.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                A cota de motos também serve para fazer um up grade para a troca de seu veículo.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Temos cartas crédito nos valores de R$ 12.000,00 a R$ 24.000,00.
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p class="ml-4">
                Parcelas nos valores de R$ 253,90 a R$ 916,76.
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
        <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">Perguntas Frequentes:</p>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é Consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>É a reunião de pessoas físicas ou jurídicas, promovida exclusivamente por uma administradora (ou carteiras de instituições financeiras/bancos e/ou da indústria automobilística) devidamente credenciada pelo Banco Central do Brasil para atuação neste segmento, com prazo de duração previamente estabelecido, com a finalidade de propiciar a seus integrantes a aquisição de bens móveis, imóveis e serviços, por meio de autofinanciamento.</p>
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é uma assembleia?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              É a reunião mensal dos consorciados de um mesmo grupo para a realização de sorteios e oferta de lances. Dica: No boleto mensal do consorciado, constam data e horário da próxima assembleia.</p>
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como o consorciado é contemplado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              O consorciado está apto a retirar/comprar/adquirir o bem depois de ocorrida a contemplação de sua carta de crédito, que pode ser através de sorteio ou lance que ocorrem nas assembleias.</p>
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como ofertar o Lance?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Através de atendimento pessoal na unidade de negócio mais próxima, ligando gratuitamente para a Central de Relacionamento através do 0800 648 1504, ou enviando e-mail para falecom@brconsorcios.com.br.</p>
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como funciona o sorteio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Realizado durante as assembleias marcadas pela Administradora (para um ou diversos grupos no mesmo dia), e à vista dos consorciados que estejam presentes na data, o sorteio é feito por meio de globo de acionamento elétrico (tipo “pipoqueira”). No globo estão as bolas numeradas, correspondentes às cotas de todos os participantes ainda não contemplados do(s) grupo(s). Depois de movimentadas no interior do globo, uma única bola é retirada, cujo número representará a cota sorteada. Se a cota do grupo correspondente à bola sorteada não estiver concorrendo à contemplação por sorteio, será considerada contemplada a cota imediatamente seguinte, procurada na ordem numérica alternadamente crescente e decrescente, na seguinte forma: primeiramente, na ordem crescente, soma-se um (+1) ao número da bola sorteada; se a cota correspondente a esse novo número não estiver concorrendo à contemplação por sorteio, volta-se à ordem decrescente, subtraindo-se um (-1) ao número da bola sorteada; e assim, sucessivamente, na ordem crescente e decrescente, até encontrar-se o número da cota que esteja concorrendo ao sorteio.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é uma cota?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              É a parte que cabe ao consorciado. É o número que o identifica no grupo para concorrer ao sorteio e/ ou lance.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quando é o vencimento da prestação?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              O vencimento da prestação ocorre sempre em até três dias úteis antes da realização da assembleia.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quando será a primeira assembleia?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Cabe a administradora fazer o agrupamento das cotas. Tão logo o grupo estiver com o número suficiente de adesões (determinadas pelas diretrizes do Banco Central – Lei dos Consórcios) é marcada a primeira assembleia para a constituição do grupo, com comunicado aos consorciados.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quem é responsável pelo regulamento do consórcio?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              As normas, regulamentos e fiscalização do Sistema de Consórcio estão sob a responsabilidade do Banco Central do Brasil, através da Lei Nº 11.795/08, em vigor desde 6 de fevereiro de 2009.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é fundo de reserva?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Trata-se de fundo de proteção destinado a garantir o funcionamento do grupo em determinadas situações. É importante observar que se houverem recursos nesse fundo quando do encerramento do grupo, serão devolvidos proporcionalmente aos consorciados.
            </p>
          </div>
        </div>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é contemplação?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              É a essência do Consórcio, é com a contemplação (sorteio ou lance), que o consorciado obtém o direito de adquirir o bem ou o serviço objeto do seu plano.
            </p>
          </div>
        </div>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é preciso para retirar o carro, moto, imóvel ou garantir a realização do serviço quando for contemplado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Será necessário a apresentação de documentos pessoais, comprovantes de renda e residência, atualização cadastral e apresentação da documentação relativa ao bem ou o serviço objeto pretendido.
            </p>
          </div>
        </div>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quanto tempo demora para retirar o bem contemplado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Após aprovada a documentação exigida, o crédito será disponibilizado imediatamente para a retirada do bem ou para a execução/realização do serviço contratado.
            </p>
          </div>
        </div>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          No caso de bens móveis (Carro, Moto, Equipamentos e Máquinas), o consorciado pode escolher qualquer modelo ou marca e cor?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Sim. O consorciado pode optar pela marca e modelo de sua preferência.
            </p>
          </div>
        </div>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Se escolher um bem menor, perde o dinheiro?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Não. Caso escolha um bem de menor valor, o restante do crédito poderá ser usado na compra de outro bem ou liquidar as parcelas vincentes.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quanto tempo o consorciado tem para retirar o bem ou o crédito?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Enquanto o bem não for escolhido, o valor referente ao crédito ficará em uma conta vinculada ao Banco Central do Brasil com rendimento diário através do Selic. Trata-se de um rendimento diário e seguro, e poderá ser utilizado até a data de encerramento do grupo.
            </p>
          </div>
        </div>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como as parcelas são atualizadas?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Para grupos de serviços, o reajuste anual é pelo IPCA – Índice Nacional de Preços ao Consumidor Amplo, índice oficial do Governo Federal. Para grupos referenciados em valores de créditos, o reajuste anual é IPCA – Índice Nacional de Preços ao Consumidor Amplo, índice oficial do Governo Federal. Para grupos referenciados em bem móvel caracterizado como objeto do plano, o reajuste se dará quando o fabricante divulgar a variação do preço.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que acontece se houver atraso no pagamento das minhas parcelas?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              O atraso nos pagamentos das parcelas implicará nas seguintes situações: A) O consorciado ficará impedido de participar do sorteio e/ou lance na assembleia de distribuição de bens, em que ocorrer o atraso do pagamento; B) Arcará com juros de 1% ao mês e multa de 2% sobre as parcelas não pagas, cujo valor será calculado sobre o preço atualizado do bem; C) Se o não contemplado atrasar mais de uma prestação, poderá ser excluído do grupo conforme estabelecido em contrato.Caso esteja contemplado e atrase sua prestação por prazo superior a 90 dias, poderá ter sua contemplação e cota cancelada; D) Caso já esteja de posse do bem e o atraso for superior a 30 dias, a administradora poderá executar as garantias fornecidas pelo consorciado, além de cobrar multas e juros.
            </p>
          </div>
        </div>
      </div>


      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como posso restabelecer meus direitos quando atrasar os pagamentos das parcelas, na qualidade de consorciado não contemplado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              A) Se não ocorreu a exclusão do grupo, efetuando o pagamento das parcelas vencidas; B) Se você notar que não vai mesmo conseguir pagar suas prestações, poderá, com a concordância da Administradora, optar por um bem de menor valor. Assim sua prestação diminuirá na mesma proporção do valor do bem escolhido; C) Procure a Administradora para fazer um acordo. Ela não estará obrigada a aceita-lo e algumas vezes não poderá mesmo fazê-lo. Entretanto fará o possível para ajudá-lo.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          É possível transferir a cota do consórcio para outro?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Sim, poderá a transferência ser efetuada a qualquer momento, bastando apenas que o vendedor e o comprador dirijam-se à sede da administradora ou de uma filial, para assinar o documento de cessão e transferência de direitos, bem como preencher a ficha cadastral do adquirente, e efetuar o pagamento da taxa relativa a transferência.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como efetuar o pagamento das parcelas?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Através do boleto bancário enviado mensalmente, podendo ser liquidado em qualquer agência bancária ou casa lotérica até a data do vencimento. Para facilitar, e agilizar o pagamento sem correr o risco de atrasar, pagar juros e multa ou ainda perder a chance de participar das assembleias, o Consórcio União disponibiliza convênios para débito automático em conta corrente com os seguintes bancos: Banco do Brasil, HSBC, Santander, Santander Meridional e Santander Banespa, Banco Itau.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O grupo e as informações sobre seu andamento pode ser acessados via internet?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Sim. Basta acessar o site da marca associada e clicar no Atendimento ao Cliente. Será necessário o uso de sua senha e a informação da cota e grupo para que o consorciado possa acessar todas as informações desejadas.
            </p>
          </div>
        </div>
      </div>


    </div>
  </div>


  <div class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <div class="p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
          <h4 class="mb-6">
            Comece a planejar a compra da sua moto começa aqui.
          </h4>
          <a href="{{url('solicitar-consorcio')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
            Solicitar uma proposta
          </a>
        </div>
      </div>
    </div>
  </div>


</x-layouts::app>