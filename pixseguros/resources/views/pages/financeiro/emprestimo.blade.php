<x-layouts::app>
    <x-slot name="title">Empréstimo</x-slot>


  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="sm:text-center lg:text-left">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block text-gray-50 xl:inline">Empréstimo Pessoal</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Precisando de dinheiro?
        </p>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Empréstimo Consignado?
        </p>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Renegociação
        </p>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Portabilidade
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow-sm">
            <a href="solicitar-emprestimo" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
              Solicite uma proposta
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
        <img src="{{ asset('images/financeiro/creditopessoal.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center mb-12">
        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
          Conheça mais!
        </h1>
      </div>
      <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0 mb-12">
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>
                Precisando de dinheiro?
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>
                Empréstimo Consignado?
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>Renegociar suas Dívidas.</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>Renegociação</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>Portabilidade</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>
                A prestação é descontada diretamente do seu salário ou aposentadoria e você pode antecipar a liquidação quando quiser.
              </p>

            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>O valor é calculado até o limite de 35% do que você recebe.</p>
            </li>
          </ul>
        </div>
        <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
          <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>
                CONSIGNADO
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>
                Desconto em Folha
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>Consignado Para Servidores Públicos e Aposentados</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>Portabilidade do Consignado</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>Refinanciamento de Consginado</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>Contratação Simples</p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>
                VANTAGENS
              </p>
            </li>
            <li class="flex items-center">
              <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
              <p>
                O órgão ou empresa convenciada são aos bancos e instituições, facilitando a operação.
              </p>
            </li>
          </ul>
        </div>
      </div>
      <div class="lg:text-center">
        <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          Solicitar uma Proposta
        </a>
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
        <h4 class="text-4xl">
          Dicas Importantes!
        </h4>
        <h4>
          Não existe cobrança de taxa antecipada.
        </h4>
        <h4>
          Não existe necessidade de fornecimento de senhas de contas e cartões de débito ou crédito.
        </h4>

      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <div x-data={show:false} class="mt-5">
          <p class="flex justify-center">
            <button @click="show=!show" class="text-3xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
              Alertas de segurança para você.
            </button>
          </p>
          <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
            <div class="text-right space-x-5 mt-5">
              <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                <i class="fa-solid fa-x fa-2xl"></i>
              </button>
            </div>
            <p class="mt-4 max-w-2xl text-4xl text-gray-500 lg:mx-auto text-center">
              Prevenir é melhor do que remediar.
            </p>
            <hr>
            <p class="text-xl mb-6 md:text-lg md:mb-2">
              Leia com atenção:
            </p>


            <p class="text-xl mb-6 md:text-lg md:mb-2">Procure usar suas senhas de modo restrito;</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Quando a situação não lhe oferecer segurança, não faça;</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Se a situação não é usual, procure se informar, antes de fazê-la;</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Os bancos e instituições financeiras não ligam para o cliente pedindo senha nem o número do cartão;</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Os bancos e instituições financeiras não mandam empregado/motoboy para a casa do cliente para retirar o cartão, por qualquer motivo;</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Os bancos e instituições financeiras não ligam para pedir para realizar uma transferência ou qualquer tipo de pagamento em nome de terceiros;</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Ao receber uma ligação dizendo que o cartão foi clonado, o cliente deve desligar, e ligar para o número de telefone que está no verso do cartão para confirmar se houve problema no cartão diretamente com a instituição financeira;</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Os bancos e instituições financeiras não mandam mensagem no e-mail, Whatsapp ou SMS com link sem a solicitação do cliente.</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Para isso, selecionamos várias dicas de segurança para que você possa fazer suas atividades bancárias com mais tranquilidade.</p>
            <p class="text-xl mb-6 md:text-lg md:mb-2">Quando um amigo, familiar, ou qualquer pessoa de confiança pedir dinheiro emprestado, ou dados, pelos meios de comunicação comum, ligue para alguém próximo a ele e pergunte.</p>



            <div class="lg:text-center">
              <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                SOLICITAR UMA PROPOSTA
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
        <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
          Perguntas Frequentes:
        </h1>
      </div>
      <div class="p-4">
        <div x-data="{ opened_tab: null }" class="flex flex-col">


          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Você precisa contratar? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>
                  Procure pesquisar, você realmente precisa do dinheiro e analise se os encargos e prazo do empréstimo compensam.
                </p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              O que é o "CET"? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>CET significa Custo Efetivo Total, é o quanto você vai pagar pelo valor emprestado. </p>
                <p>Taxa que corresponde a todos os encargos e despesas incidentes nas operações de crédito.</p>
                <p>Inclui a taxa de juros, as tarifas, os impostos e outras despesas.</p>
                <p>O CET precisa ser informado antes da concessão do empréstimo ou de um financiamento.</p>
              </div>
            </div>
          </div>


          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              O que é margim consignável? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>A margem consignável é a disponibilidade para efetuar o desconto sem comprometer seu o limite máximo máximo permitido, que normalmente é de 30%.</p>

              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Qual é o prazo ideal para fazer o empréstimo? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Você terá o valor descontado no seu benefício ou salário peço prazo escolhido.</p>
                <br>
                <p>Também nunca deixamos de contemplar nossos consorciados por falta de recursos no fundo, comum.</p>
                <br>
                <p>E quanto maior o prazo maior a quantidade de encargos "CET".
                </p>
              </div>
            </div>
          </div>


          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Eu devo fazer um empréstimo com toda minha margin consignável? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Não, você deve sempre reservar uma parte para uma eventual necessidade.</p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Responsabilidade pela operação? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Bancos, instituições financeiras, correspondentes, terceiros... todos são responsáveis por problemas decorrentes do contrato.</p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Onde reclamar?</div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Serviço de Apoio ao Consumidor - SAC - dos bancos e instituições financeiras.</p>
                <br>
                <p>Caso o atendimento prestado pelo SAC não seja satisfatório, procure a Ouvidoria do banco ou instituição financeira.</p>
                <br>
                <p>As reclamações também podem ser feitas ao Banco Central, ao INSS, ou aos órgãos de defesa do consumidor (PROCONSS).</p>
                <br>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              O que são encargos financeiros? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>São taxas de juros, tarifas dos bancos e financeiras que remuneram que está lhe emprestando o dinheiro.</p>
                <Br>
                <p>CET significa Custo Efetivo Total, é o quanto você vai pagar pelo valor emprestado.</p>
                <Br>
              </div>
            </div>
          </div>


          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Onde posso ver essas taxas? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Nos bancos ou instituições financeiras, mas também podem ser observadas no site do Banco Central do Brasil:</p>
                <a href="https://www.bcb.gov.br/estatisticas/txjuros">Banco Central do Brasil - BCB</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:218;encargo:101">Pessoa Física - Crédito pessoal consignado INSS</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:219;encargo:101">Pessoa Física - Crédito pessoal consignado privado</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:220;encargo:101">Pessoa Física - Crédito pessoal consignado público</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:221;encargo:101">Pessoa Física - Crédito pessoal não consignado</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:401;encargo:101">Pessoa Física - Aquisição de veículos</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:1205;encargo:101">Leasing de Veículos</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:203;encargo:101">Pessoa Física - Cartão de credito rotativo não regular</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:202;encargo:101">Pessoa Física - Cartão de crédito rotativo regular</a><BR>
                <a href="https://www.bcb.gov.br/estatisticas/reporttxjuros/?parametros=tipopessoa:1;modalidade:204;encargo:101">Pessoa Física - Cartão de crédito rotativo</a><BR>
              </div>
            </div>
          </div>


          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Como fazer a Portabilidade do meu empréstimo consignado? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>A autorização de Portabilidade tem apenas uma anuência. A consignatária (Instituição financeira) onde o servidor possui o empréstimo atual também receberá uma notificação do pedido de portabilidade para que possa renegociar o contrato vigente. Após a negociação e assinatura do novo contrato, a consignação já estará autorizada, não sendo necessária uma segunda anuência.</p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Refinanciamento, portabilidade ou renegociação? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>As operações se confundem por isto é importante analisar com bastante cautela para não aumentar o custo da operação.</p>
                <p>Refinanciamento tem garantia, portabilidade é a troca da instituição e renegociação ocorrerá por motivos de melhor opção, dificuldade financeira...</p>
                <p>Lembre, sempre, que o custo da operação "CET" pode ficar dissolvido na quantidade de prestações.</p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Empregado com carteira assinada pode fazer consignado? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Sim. Os trabalhadores com carteira assinada podem fazer o Consignado Privado, mas depende da empresa empregadora fazer uma acordo com o banco ou instituição financeira.</p>
                <p>Procure o Recursos Humanos - RH da empresa em que trabalha e se informe.
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Diferença entre empréstimo e financiamento? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Empréstimo - A pessoa ou a empresa contrata a operação e não especifica como utilizará o dinheiro que pode ser usado livremente.</p>
                <p>Financiamento - A pessoa ou a empresa contrata a operação para comprar um bem ou adquirir um serviço específicos.</p>
                <p>No financiamento de um veículo ou uma moto, o bem fica em garantia por isto as taxas e juros são menores.</p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Diferença entre Alienação Fiduciária e Leasing? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Alienação fiduciária - o consumidor transmite a propriedade do bem móvel ou imóvel para o banco ou instituição financeira, como garantia</p>
                <p>Efetuado o pagamento integral da dívida, o consumidor recebe o termo de quitação, que será levando, por exemplo, no DETRAN ou no Cartório de Imóveis para extinção da alienação fiduciária em garantia, voltando a propriedade do imóvel para o consumidor.</p>

                <p>Leasing - arrendamento mercantil - é o aluguel do carro por um período, onde o banco ou instituição oferece a opção de compra do mesmo ao final do contrato no valores de tabela FIPE.</p>
                <p>Tem prazo variado ao fim do qual, é possível a quitação, devolução, compra ou renovação.</p>

                <p>O valor mensal das parcelas são inclusos as parcelas o aluguel e o VRG (Valor Residual Garantido).</p>
                <p>VRG (Valor Residual Garantido) é o valor pago para a aquisição do veículo.</p>
                <p>Existem diversas forma de Leasing e forma de VRG.</p>

              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Como fazer a Portabilidade do meu empréstimo consignado? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>A autorização de Portabilidade tem apenas uma anuência. A consignatária (Instituição financeira) onde o servidor possui o empréstimo atual também receberá uma notificação do pedido de portabilidade para que possa renegociar o contrato vigente. Após a negociação e assinatura do novo contrato, a consignação já estará autorizada, não sendo necessária uma segunda anuência.</p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Diferença entre Hipóteca e Financiamento de Imóvel? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Hipoteca imobiliária é um contrato no qual o devedor(consumidor) dá um imóvel ao credor como garantia.</p>
                <p>No financiamento imobiliário, o consumidor faz o empréstimos e hipoteca o imóvel. </p>
                <p>O devedor se mantém na posse do bem (mora) e pode sobre ele exercer todos os direitos de proprietário mas, caso a dívida não seja paga, perderá o bem para o credor.</p>
              </div>
            </div>
          </div>

          <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
            <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
            <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
              Existe Alienação Fiduciária de imóvel? </div>
            <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
              <div class="p-4 text-lg leading-8 font-medium text-gray-900">
                <p>Sim. Medida Provisória 992 em 16.07.2020, ampliou permitindo que sobre um mesmo imóvel haja a constituição compartilhada de duas garantias.</p>
                <p>É bom observar que a Lei 9.514/97 assegura ao credor uma rápida retomada do imóvel (média de 90 dias) para levá-lo a leilão extrajudicial.</p>
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
        <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          SOLICITAR UMA PROPOSTA
        </a>
      </div>
    </div>
  </div>
  </div>


</x-layouts::app>