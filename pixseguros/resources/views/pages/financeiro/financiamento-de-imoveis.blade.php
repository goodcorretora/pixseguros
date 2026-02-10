<x-layouts::app>
    <x-slot name="title">Financiamento de Imóveis</x-slot>

  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="sm:text-center lg:text-left">
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
          <span class="block text-gray-50 xl:inline">Empréstimo com Garantia de Imóvel</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Crédito de até 60% do valor de um imóvel residencial com até 20 anos para pagar
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
        <img src="{{ asset('images/financeiro/garantiaimobiliaria.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>

  <div class="container mx-auto flex justify-center mt-14">
    <div class="w-full mx-4 text-center">


      <div x-data={show:false} class="mt-5">
        <p class="flex justify-center">
          <button @click="show=!show" class="w-full text-2xl bg-gray-50 text-primary-600 rounded-sm hover:bg-gray-100 px-4 py-3 focus:outline-hidden" type="button">
            Realize projetos e conquiste seus sonhos com incentivo seguro da Porto Bank
            <i class="fa-solid fa-arrow-right text-primary-600"></i>
          </button>
        </p>
        <div x-show="show" class="w-full border px-4 py-3 my-2 text-gray-700">
          <div class="text-right space-x-5 mt-5">
            <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
              <i class="fa-solid fa-x fa-2xl"></i>
            </button>
          </div>
          <p class="mt-4 text-xl text-gray-500 lg:mx-auto text-center">
            O Empréstimo com Garantia de Imóvel da Porto Bank traz segurança para você obter capital e usar da maneira que preferir. Seja na organização da sua vida financeira, seja na realização de um sonho ou projeto, ao usar um imóvel residencial em seu nome como garantia de pagamento, você tem à disposição parcelas menores em comparação aos empréstimos tradicionais.
          </p>
        </div>
      </div>


    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 justify-around">
      <div class="shadow-xl p-3 mb-5 rounded-sm lg:text-center text-gray-800 text-lg leading-8 font-medium">
        <p>
          O produto ficará sujeito à aprovação cadastral e de crédito. Documentaçãoadicional pode ser solicitada, de acordo com a localização do imóvel e perfil da proposta. Para contratar oproduto, procure seu corretor de seguros. Crediporto Promotora de Serviços Ltda CNPJ 08.504.728/0001-62.
        </p>
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
      <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl md:mb-6">
            Com a Porto Bank você tem:
            </h1>
          </div>
          <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-5">

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-money-bill-wave text-primary-600 fa-4x inline mr-3.5"></i>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                    Até 50% do valor do imóvel como crédito                  
                  </p>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-regular fa-calendar-days text-primary-600 fa-4x inline mr-3.5"></i>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                    Pagamento em até 20 anos com parcelas fixas
                  </p>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-clipboard-list text-primary-600 fa-4x inline mr-3.5"></i>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                    Praticidade na liberação de crédito
                  </p>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-regular fa-star text-primary-600 fa-4x inline mr-3.5"></i>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                    Atendimento personalizado
                    </p>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-percent text-primary-600 fa-4x inline mr-3.5"></i>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-4">
                    Menores taxas em comparação a outras modalidades de créditos ou linhas de empréstimos para pessoa física
                    </p>
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
        <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl text-center">
          Tire suas dúvidas sobre o Empréstimo com Garantia de Veículo
        </p>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que é Empréstimo com Garantia de Imóvel, da Porto Bank?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              É uma modalidade de crédito no qual o cliente usa o imóvel dele como garantia da operação. Esse modelo também é conhecido como refinanciamento de imóvel ou home equity.
            </p>
            <p>
              O capital adquirido por meio dessa transação pode ser usado como o cliente desejar.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O imóvel dado como garantia fica alienado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Sim, o imóvel dado como garantia à instituição financeira (alienação fiduciária) fica alienado, ou seja, assegura o pagamento durante todo o período do financiamento. 
            </p>
            <p>
              No entanto, o imóvel continua sendo da pessoa, que pode usufruir como é de direito. Ainda assim, a propriedade fica condicionada ao pagamento total do empréstimo.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O Empréstimo com Garantia do Imóvel pode ser quitado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              Sim, você pode quitar o empréstimo a qualquer momento e o imóvel, neste caso, deixa de ser a garantia de pagamento.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Posso fazer o Empréstimo com Garantia do Imóvel para propriedade com dívida?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
            <p>
              O imóvel não precisa estar quitado, mas você precisa ter o número da matrícula do imóvel e ele precisa estar livre de ônus. Isso significa que o imóvel não pode ser objeto de nenhum tipo de penhora, usufruto ou demais averbações que não permitam a alienação do bem. 
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quais são as etapas até a liberação do crédito?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-gray-900">
              <p>Até a liberação do crédito do Empréstimo com Garantia do Imóvel Porto Bank, existem algumas etapas a seguir. Conheça:</p>

              <p>1. simulação e solicitação de crédito: com o apoio do seu Corretor, você verá qual a melhor condição de crédito (valor, prazo, parcela) para fazer uma solicitação;</p>
              <p>2. avaliação financeira: em seguida, seu perfil será avaliado por especialistas da companhia, a partir de uma análise de crédito rápida e segura. Se tudo estiver certo, você precisará enviar alguns documentos de comprovação;</p>
              <p>3. avaliação do imóvel: como a garantia do empréstimo é seu imóvel, será feita uma vistoria para garantir que está tudo certo;</p>

              <p>4. assinatura de contrato e registro em cartório: você terá acesso a todos os documentos para assinatura e registro em cartório (averbação da matrícula), configurando a alienação fiduciária;</p>

              <p>5. liberação do crédito: após a confirmação do registro em cartório, será depositado o dinheiro na conta corrente indicada por você.</p>

              <p>Não se preocupe, nós cuidamos para que todas as etapas aconteçam de forma rápida, transparente e segura.</p>
             
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
      <div class="lg:text-center">
        <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          SOLICITAR UMA PROPOSTA
        </a>
      </div>
    </div>
  </div>


</x-layouts::app>