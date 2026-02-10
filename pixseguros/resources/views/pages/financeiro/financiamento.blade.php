<x-layouts::app>
    <x-slot name="title">Financiamento</x-slot>


<div class="py-2 bg-primary-600">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <div class="sm:text-center lg:text-left">
      <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
        <span class="block text-gray-50 xl:inline">Financiamento de Veículos</span>
      </h1>
      <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
        A escolha segura na hora de realizar o sonho de comprar seu carro.
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
      <img src="{{ asset('images/seguros/auto.png') }}" class=" w-96 rounded-lg" alt="" />
    </div>
  </div>
</div>


<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
        Condições especiais para comprar seu veículo
      </h1>
      <p class="text-gray-800 text-lg leading-8 font-medium mb-8">
        Com a Porto Bank, você tem vantagens e taxas exclusivas para financiar seu veículo: despachante e vistoria grátis.
      </p>
    </div>
    <div class="lg:text-center">
      <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
        Conheça as modalidades de Financiamento de Veículos 
      </h1>
    </div>
      <div class="flex flex-wrap -m-4 justify-center text-center ">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="shadow-lg rounded-lg">
                    <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/financeiro/financiamento-veiculo.png" alt="content">
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                      Financiamento de veículos
                    </h2>
                    <h2 class="text-base text-gray-900 h-32 font-medium title-font mb-4 p-3">
                      Crédito para financiar até 100% do seu carro novo usado e pagar em até 60 meses
                    </h2>
                    <a href="financiamento-de-veiculos" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
                        Saíba Mais
                    </a>
                </div>
            </div>

            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="shadow-lg rounded-lg">
                    <img class="h-40 rounded-sm w-full object-cover object-center mb-6" src="./images/financeiro/financiamento-e-seguro-de-carro.png" alt="content">
                    <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                      Financiamento + Seguro veículo
                    </h2>
                    <h2 class="text-base text-gray-900 h-32 font-medium title-font mb-4 p-3">
                      Inclua o Seguro Auto da Porto Seguro nas parcelas do financiamento e tenha coberturas exclusivas.
                    </h2>
                    <a href="financiamento-de-veiculos-e-seguro" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
                        Saíba Mais
                    </a>
                </div>
            </div>

      </div>

  </div>
</div>


<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-8 lg:text-6xl">
        Com a Porto Bank, você tem
      </h1>
    </div>

    <div class="flex flex-col items-center px-4 lg:flex-row lg:px-0 mb-12">
      <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
        <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
          <li class="flex items-center">
            <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
            <p class="ml-4">
              Taxas personalizadas para clientes Porto
            </p>
          </li>
          <li class="flex items-center">
            <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
            <p class="ml-4">
              Possibilidade de contratar o financiamento com proteção financeira
            </p>
          </li>
        </ul>
      </div>
      <div class="w-full mb-8 lg:w-1/2 lg:mb-0 lg:mr-16">
        <ul class="space-y-4  text-gray-800 text-lg leading-8 font-medium">
          <li class="flex items-center">
            <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
            <p class="ml-4">
              Vistoria e honorário de despachante gratuito
            </p>
          </li>
          <li class="flex items-center">
            <i class="fa-solid fa-circle-check fa-xl text-primary-600 mr-2"></i>
            <p class="ml-4">
            Até 45 dias para pagar a primeira parcela, após a contratação
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
    <div class="lg:text-center">
      <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
        Dicas de combate a fraudes
      </h1>
      <p class="text-gray-800 text-lg leading-8 font-medium mb-8">
        Com a maior utilização da Internet e do Correio Eletrônico (e-mail) e com a maior acessibilidade a operações de crédito e financiamento, a Porto disponibiliza algumas dicas de prevenção e combate a fraudes.
      </p>
    </div>
    <div x-data={show:false} class="mt-5">
      <p class="flex justify-center">
        <button @click="show=!show" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          LEIA MAIS
        </button>
      </p>
      <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
        <div class="text-right space-x-5 mt-5">
          <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
            <i class="fa-solid fa-x fa-2xl"></i>
          </button>
        </div>
        <p class="text-2xl font-semibold mb-4">
          Dicas de combate a fraudes
        </p>
        <p class="mb-2">
          Com a maior utilização da Internet e do Correio Eletrônico (e-mail) e com a maior
          acessibilidade a operações de crédito e financiamento pelos mais diversos meios, o risco de
          fraudes também aumentou. Pensando nisso, a Porto Seguro disponibiliza algumas dicas de
          prevenção e combate a fraudes:
        </p>
        <p class="text-red-500 mb-2">
          Atenção: A Porto Seguro não oferta empréstimos via site de terceiros e não solicita pagamentos antecipados para concessão de financiamento.
        </p>
        <p class="text-2xl font-semibold mb-4">
          Fraude de Boleto
        </p>
        <p class="mb-2">
          Atente-se ao pagar o seu boleto do seu financiamento, empréstimo ou fatura do Cartão de Crédito. Confira se o nome do beneficiário e CNPJ estão corretos. Fique atento!
        </p>
        <p class="text-2xl font-semibold mb-4">
          Roubo de Identidade
        </p>
        <p class="mb-2">
          Esse tipo de fraude ocorre quando o fraudador tem acesso às suas informações pessoais como
          RG, CPF, número de cartão de crédito, dados bancários e outras informações. De posse delas,
          o fraudador poderá assumir sua identidade e abrir contas bancárias, contratar operações de
          crédito, financiar veículos, efetuar compras com cartão de crédito, etc. Esse tipo de crime gera
          grandes transtornos às vítimas, por isso é importante destacar algumas formas de prevenção:
        </p>
        <p class="mb-2">
          Em caso de perda, furto ou roubo de seus documentos pessoais ou cartões, comunique
          imediatamente a autoridade policial competente, registrando boletim de ocorrência, e efetue
          o cancelamento de todos os cartões envolvidos;
        </p>
        <p class="mb-2">
          Nunca forneça dados pessoais a desconhecidos. A Porto Seguro nunca liga aos clientes solicitando informações pessoais;
        </p>
        <p class="mb-2">
          Confira a fatura de seus cartões e extratos bancários.
        </p>
        <p class="text-2xl font-semibold mb-4">
          E-mail/Internet
        </p>
        <p class="mb-2">
          Outra categoria de fraude que tem aumentando consideravelmente é a fraude eletrônica,
          como o Phishing (golpe por e-mail para obter informações pessoais), programas espiões
          (cavalo de Tróia e spyware) e por meio de spam (mensagens indesejadas via e-mail), Para
          prevenção contra essas práticas, seguem algumas dicas:
        </p>
        <p class="mb-2">
          Mantenha seu antivírus, firewall e antispyware sempre atualizados e ativos;
        </p>

        <p class="mb-2">
          Crie senhas difíceis de serem descobertas, se possível com números e caracteres especiais (@, $, %, &, *);
        </p>
        <p class="mb-2">
          Faça download apenas de arquivos conhecidos e sites confiáveis. Desconfie das extensões “.exe”, “.scr” e “.zip”, pois podem ser programas espiões;
        </p>
        <p class="mb-2">
          Suspeite de e-mails de remetentes desconhecidos ou que solicitam dados pessoais;
        </p>
        <p class="mb-2">
          Não forneça seus dados a sites duvidosos.
        </p>

        <p class="text-2xl font-semibold mb-4">
          Fraude do boleto
        </p>
        <p class="mb-2">
          A linha digitável da fatura do Cartão de Crédito Porto Seguro sempre começa com o número
          39994.08580. Dessa forma, antes de efetuar o pagamento, confira o número inicial. Caso
          receba a fatura com números diferentes, não efetue o pagamento e entre em contato com a
          Central de Relacionamento.
        </p>
        <p class="mb-2">
          (*) código de segurança – 3 dígitos no verso do cartão.
        </p>
        <p class="mb-2">
          A Porto Seguro possui um canal de denúncia para receber toda e qualquer informação que
          configure suspeita ou ocorrência de fatos dessa natureza.
        </p>
        <p class="mb-2">
          O canal de denúncia pode ser utilizado sem a necessidade de identificação.
        </p>
        <p class="mb-2">
          As denúncias podem ser realizadas pelos seguintes meios:
        </p>
        <p class="mb-2">
          E-mail: denuncia@portoseguro.com.br
        </p>
      </div>
    </div>
  </div>
</div>






<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">Tire suas dúvidas sobre o Empréstimo com Garantia de Veículo</p>
    </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-96 opacity-0 z-10 cursor-pointer">
          <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
            Como faço um financiamento de veículo com seguro já adicionado?
          </div>      
          <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
          <div class="overflow-hidden transition-all duration-500 rounded-2xl max-h-0 peer-checked:max-h-full">
            <div class="p-4 text-lg leading-8 font-medium text-gray-900">
              <p>Você pode fazer uma 
                <a href="{{url('solicitar-emprestimo')}}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                  <span>simulação</span>
                </a>
                e contratar diretamente com seu corretor de seguros.
                <a href="{{url('solicitar-emprestimo')}}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                  <span>simulação</span>
                </a>
              </p>
              <p>
                <a href="{{url('solicitar-emprestimo')}}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                  <span>simulação</span>
                </a>
              </p>
            </div>
          </div>   
      </div> 

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-96 opacity-0 z-10 cursor-pointer">
          <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
            O que é Financiamento + Seguro Auto?
          </div>      
          <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
          <div class="overflow-hidden transition-all duration-500 rounded-2xl max-h-0 peer-checked:max-h-full">
            <div class="p-4 text-lg leading-8 font-medium text-gray-900">
              <p>
                É um produto que permite agrupar o financiamento de um automóvel novo e o valor do Seguro Auto da Porto Seguro ou Azul Seguros na mesma parcela.
              </p>
              <p>
                O Financiamento + Seguro Auto oferece parcelamento em até 48 meses. Além disso, a vigência do seguro segue o prazo de financiamento.
              </p>
            </div>
          </div>   
      </div> 

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-96 opacity-0 z-10 cursor-pointer">
          <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
            Quais são os veículos de aceitação para o Financiamento + Seguro Auto?
          </div>      
          <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
          <div class="overflow-hidden transition-all duration-500 rounded-2xl max-h-0 peer-checked:max-h-full">
            <div class="p-4 text-lg leading-8 font-medium text-gray-900">
              <p>
                Esta condição é exclusiva para automóveis de passeio, de uso particular e com ano/modelo de até 10 anos.
              </p>
              <p>
                O Financiamento + Seguro Auto não está disponível para:
              </p>
              <p>
                Veículos utilitários;
              </p>
              <p>
                Carros blindados; 
              </p>
              <p>
                Automóveis de taxistas e/ou de motoristas de aplicativo;
              </p>
              <p>
                Veículos com kit gás; 
              </p>
              <p>
                Caminhões;
              </p>
              <p>
                Motos;
              </p>
              <p>
                Pessoa jurídica.
              </p>
            </div>
          </div>   
      </div> 

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-96 opacity-0 z-10 cursor-pointer">
          <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
            Posso comprar carro de vendedor particular ou concessionária?
          </div>      
          <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
          <div class="overflow-hidden transition-all duration-500 rounded-2xl max-h-0 peer-checked:max-h-full">
            <div class="p-4 text-lg leading-8 font-medium text-gray-900">
              <p>
                No Financiamento + Seguro Auto, você tem apoio para fazer um bom negócio e comprar seu automóvel novo em concessionárias ou de vendedores particulares.
              </p>
            </div>
          </div>   
      </div> 

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-96 opacity-0 z-10 cursor-pointer">
          <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
            Posso financiar o veículo sem o seguro?
          </div>      
          <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
          <div class="overflow-hidden transition-all duration-500 rounded-2xl max-h-0 peer-checked:max-h-full">
            <div class="p-4 text-lg leading-8 font-medium text-gray-900">
              <p>
                Claro, você pode fazer o financiamento sem o seguro. Pode pedir a simulação sem seguro.Site
              </p>
            </div>
          </div>   
      </div> 


  </div>
</div>


<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div x-data={show:false} class="mt-5">
      <p class="flex justify-center">
        <button @click="show=!show" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          Sistema de Informações de Crédito - SCR
        </button>
      </p>
      <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
        <div class="text-right space-x-5 mt-5">
          <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
            <i class="fa-solid fa-x fa-2xl"></i>
          </button>
        </div>


        <p class="text-2xl font-semibold mb-4">
          SISTEMA DE INFORMAÇÕES DE CRÉDITO - SCR
        </p>
        <p class="mb-2">
          O Sistema de Informações de Crédito do Banco Central do Brasil (SCR) é um sistema constituído por informações remetidas ao Banco Central do Brasil sobre operações de crédito.
        </p>
        <p class="mb-2">
          Ele tem como finalidade prover informações ao Banco Central do Brasil, para fins de monitoramento do crédito no sistema financeiro e para o exercício de suas atividades de fiscalização; e propiciar o intercâmbio de informações entre instituições financeiras sobre o montante de responsabilidades dos clientes em operações de crédito.
        </p>
        <p class="mb-2">
          O acesso ao SCR pode ser feito pelas áreas especializadas do Banco Central, pelas Instituições Financeiras, pelos Clientes e por outras classes de instituições autorizadas a realizar ou adquirir operações de crédito, desde que exista convênio firmado entre o Banco Central e o(s) órgão(s) fiscalizador(es) dessas entidades.
        </p>
        <p class="mb-2">
          Além das entidades citadas no parágrafo anterior, podem, ainda, ter acesso ao SCR as câmaras e prestadores de serviços de compensação e liquidação, no âmbito do Sistema de Pagamentos Brasileiro; e as entidades autorizadas a exercer as atividades de depósito centralizado ou de registro de ativos financeiros e de valores mobiliários.
        </p>
        <p class="mb-2">
          O Banco Central e as demais instituições autorizadas acessam as informações por meio de perfil específico criado dentro do SCR, porém, para isso, devem possuir autorização expressa do cliente, conforme determinação da Resolução CMN 4571.
        </p>
        <p class="mb-2">
          Clientes devem utilizar o sistema Registrato, criado pelo Banco Central do Brasil para facilitar o acesso dos consumidores de crédito à consulta aos seus dados comunicados pelas instituições participantes.
        </p>
        <p class="mb-2">
          As informações apresentadas no SCR correspondem ao saldo contábil das operações de crédito referente ao último dia de cada mês.
        </p>
        <p class="mb-2">
          Somente a instituição financeira responsável pela inserção de informações no SCR poderá alterá-las ou excluí-las, portanto, nas hipóteses de necessidade de correção de informações, de cadastramento de medida judicial ou de manifestação de discordância em relação às notações constantes do sistema, o cliente deverá formalizar o requerimento por escrito à instituição que comunicou a(s) operação(ões).
        </p>
        <p class="mb-2">
          Importante destacar que o processamento de dados do SCR não é feito em tempo real, conforme informações do Banco Central e, em caso de solicitação de alguma adequação, o prazo para visualização desta no citado sistema poderá alcançar até 60 (sessenta) dias, pois as instituições têm até o 10º dia útil de cada mês para enviar as informações relativas ao final do mês anterior e, após essa data, há ainda o prazo de processamento das informações pela própria Autarquia.
        </p>
        <p class="mb-2">
          ¹Para fins de registro no SCR, são consideradas operações de crédito, por definição do Banco Central do Brasil (Resolução CMN 4571, artigo 3°): empréstimos e financiamentos; adiantamentos; operações de arrendamento mercantil; prestação de aval, fiança, coobrigação ou qualquer outra modalidade de garantia pessoal do cumprimento de obrigação financeira de terceiros; compromissos de crédito não canceláveis incondicional e unilateralmente pela instituição concedente; créditos contratados com recursos a liberar; créditos baixados como prejuízo; operações de crédito que tenham sido objeto de negociação com retenção substancial de riscos e de benefícios ou de controle; operações com instrumentos pós-pagos; outras operações ou contratos com características de crédito, que sejam assim reconhecidos pelo Banco Central do Brasil.
        </p>
        <p class="mb-2">
          <a href="https://www.bcb.gov.br/fis/crc/port/SCR_Manual_cidadao.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
            <span>²http://www.bcb.gov.br/pre/bc_atende/port/registrato.asp</span>
          </a>
        </p>
        <p class="mb-2">
          Ficam disponíveis para consulta através do SCR os dados dos últimos 60 (sessenta) meses (60 datas-base).
        </p>
        <p class="mb-2">
          Central de Atendimento ao Público do Banco Central - 0800-979-2345. Também está disponível o número 0800-642-2345, de atendimento exclusivo ao surdo e deficiente auditivo e da fala.
        </p>
        <p class="mb-2">Consulte o
          <a href="https://www.bcb.gov.br/fis/crc/port/SCR_Manual_cidadao.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
            <span>Manual do Cidadão</span>.
          </a>
        </p>


      </div>
    </div>
  </div>
</div>

<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <p class="text-2xl font-semibold mb-4">
      Você pode visualizar e fazer o download da Tabela de Tarifas praticadas pela Porto Seguro nas operações de crédito e também do Contrato de Financiamento. Acesse os links abaixo para abrir os arquivos.
    </p>


    <div x-data={show:false} class="mt-5">
      <p class="flex justify-center">
        <button @click="show=!show" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          Tabela de Tarifas
        </button>
      </p>
      <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
        <div class="text-right space-x-5 mt-5">
          <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
            <i class="fa-solid fa-x fa-2xl"></i>
          </button>
        </div>
        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
          TABELA DE TARIFAS
        </p>
        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
          Você pode visualizar e fazer o download da Tabela de Tarifas praticadas pela Porto Seguro nas operações de crédito e também do Contrato de Financiamento. Acesse os links abaixo para abrir os arquivos.
        </p>
        <p class="mt-2 text-xl text-gray-500 lg:mx-auto text-center">
        <div class="lg:text-center">
          <a href="https://www.portoseguro.com.br/NovoInstitucional/static_files/documents/para-veiculos/financiamentos/20220601_Tabela_Tarifas_Dez18_CDC%20(2).pdf" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            TABELA DE TARIFAS
          </a>
        </div>
        </p>
        <p class="mt-2 text-xl text-gray-500 lg:mx-auto text-center">
          Vigente a partir de 01/01/2022
        </p>

        <p class="mt-2 text-xl text-gray-500 lg:mx-auto text-center">
        <div class="lg:text-center">
          <a href="https://www.portoseguro.com.br/NovoInstitucional/static_files/documents/para-veiculos/financiamentos/CCB_Produto_38541313.pdf" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            CONTRATO DE FINANCIAMENTO
          </a>
        </div>
        </p>
        <p class="mt-2 text-xl text-gray-500 lg:mx-auto text-center">
          Emissão de Cédula de Crédito Bancário
        </p>
      </div>
    </div>
  </div>
</div>




<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div x-data={show:false} class="mt-5">
      <p class="text-2xl font-semibold mb-4">
        Veja mais detalhes sobre as condições de contratação, taxas de juros e outras informações sobre o Empréstimo com crédito de veículo Porto Seguro Bank.
      </p>
      <p class="flex justify-center">
        <button @click="show=!show" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          CONDIÇÕES GERAIS
        </button>
      </p>
      <div x-show="show" class="border px-4 py-3 my-2 text-gray-700">
        <div class="text-right space-x-5 mt-5">
          <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
            <i class="fa-solid fa-x fa-2xl"></i>
          </button>
        </div>
        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
          TABELA DE TARIFAS
        </p>
        <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
          Condições gerais da cédula de crédito bancário

        </p>
        <p class="mt-2 text-xl text-gray-500 lg:mx-auto text-center">
        <div class="lg:text-center">
          <a href="https://portoseguro.com.br/NovoInstitucional/static_files/CGs/auto_credito_porto_seguro/cg_cedula_de_credito_bancario.pdf" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            CONDIÇÕES GERAIS DA CÉDULA DE CRÉDITO BANCÁRIO  - Download
          </a>
        </div>
        </p>
        <p class="mt-2 text-xl text-gray-500 lg:mx-auto text-center">          
          Termo de renegociação financiamento
        </p>

        <p class="mt-2 text-xl text-gray-500 lg:mx-auto text-center">
        <div class="lg:text-center">
          <a href="https://portoseguro.com.br/NovoInstitucional/static_files/documents/para-veiculos/financiamentos/Termo%20de%20Renegocia%C3%83%C2%A7%C3%83%C2%A3o%20Financiamento.pdf" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            TERMO DE RENEGOCIAÇÃO FINANCIAMENTO  - Download
          </a>
        </div>
        </p>
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



</x-layouts::app>