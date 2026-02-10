<x-layouts::app>
    <x-slot name="title">Título de Capitalização para Aluguel</x-slot>


  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="sm:text-center lg:text-left">
        <h1 class="text-4xl tracking-tight font-extrabold text-secondary-900 sm:text-5xl md:text-6xl">
          <span class="block text-secondary-50 xl:inline">Título de Capitalização para Aluguel</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-secondary-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Alugue sem fiador ou comprovação de renda e ainda resgate o valor da garantia no final do contrato.
        </p>
        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
          <div class="rounded-md shadow-sm">
            <a href="solicitar-emprestimo" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-secondary-50 hover:bg-secondary-200 md:py-4 md:text-lg md:px-10">
              Solicitar uma Proposta
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
        <img src="{{ asset('images/financeiro/titulodecapitalizacaoparaaluguel.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>

  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">



      <div class="sm:hidden relative isolate overflow-hidden px-6 pt-16 sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
        <div class="mx-auto max-w-lg text-center">
          <h2 class="text-3xl font-bold tracking-tight text-secondary-900 sm:text-4xl">O que é Título de Capitalização?</h2>
          <p class="mt-6 text-xl leading-8  text-secondary-900">
            É uma reserva financeira com valor definido entre o inquilino e o proprietário, usada como garantia no processo de locação de um imóvel.
          </p>
        </div>
        <div class="mx-auto max-w-lg text-center rounded-3xl ml-2">
          <iframe rounded-2xl w-full aspect-h-72 src="https://www.youtube.com/embed/Dn39OngduGc?si=I4ms6k87vRTc7QYh" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>



  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h1 class="text-2xl font-bold text-secondary-900 leading-tight mb-8 lg:text-6xl">
          Conheça os benefícios
        </h1>


        <div x-data="{
        tabSelected: 1,
        tabId: $id('tabs'),
        tabButtonClicked(tabButton){
            this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
            this.tabRepositionMarker(tabButton);
        },
        tabRepositionMarker(tabButton){
            this.$refs.tabMarker.style.width=tabButton.offsetWidth + 'px';
            this.$refs.tabMarker.style.height=tabButton.offsetHeight + 'px';
            this.$refs.tabMarker.style.left=tabButton.offsetLeft + 'px';
        },
        tabContentActive(tabContent){
            return this.tabSelected == tabContent.id.replace(this.tabId + '-content-', '');
        }
    }" x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);" class="relative w-full ">

          <div x-ref="tabButtons" class="relative inline-grid items-center justify-center w-full h-10 grid-cols-3 p-1 text-secondary-50 bg-primary-500 rounded-lg select-none">
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap">Inquilino</button>
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap">Proprietário</button>
            <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-sm font-medium transition-all rounded-md cursor-pointer whitespace-nowrap">Imboliária</button>
            <div x-ref="tabMarker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out" x-cloak>
              <div class="w-full h-full bg-primary-700 text-white rounded-md shadow-xs"></div>
            </div>
          </div>
          <div class="relative w-full mt-2 content">
            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative">
              <!-- Tab Content 1 - Replace with your content -->
              <div class="border rounded-lg shadow-xs bg-card text-neutral-900">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-6">

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-regular fa-circle-check text-primary-600 fa-2x inline mr-3.5"></i>
                        <h1 class="font-bold text-xl mb-2">Contratação fácil</h1>
                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                          Sem análise de crédito ou comprovação de renda.
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-hand-holding text-primary-600 fa-2x inline mr-3.5"></i>
                        <h1 class="font-bold text-xl mb-2">Resgate</h1>
                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                          Até 100% do valor da garantia no final do contrato para o inquilino.
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-credit-card text-primary-600 fa-2x inline mr-3.5"></i>
                        <h1 class="font-bold text-xl mb-2">Pagamento à vista no boleto ou em até 12x no cartão de crédito</h1>
                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                          Acréscimo de juros da administradora do cartão.
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-calendar-days text-primary-600 fa-2x inline mr-3.5"></i>
                        <h1 class="font-bold text-xl mb-2">Sorteios mensais</h2>
                          <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-4">
                            Até 5x o valor da garantia para o contratante do título.
                          </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-tools text-primary-600 fa-2x inline mr-3.5"></i>
                        <h1 class="font-bold text-xl mb-2">Serviços de assistência para o imóvel</h1>
                        <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-3">
                          Chaveiro, reparo elétrico e hidráulico. Saiba mais.
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-truck text-primary-600 fa-2x inline mr-3.5"></i>
                        <h1 class="font-bold text-xl mb-2">Descontos em transportadoras</h2>
                          <p class="mt-2 text-secondary-800 text-base leading-8 font-medium line-clamp-4">
                            Economize ao fazer a sua mudança. Saiba mais.
                          </p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
              <!-- End Tab Content 1 -->
            </div>

            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
              <!-- Tab Content 2 - Replace with your content -->
              <div class="border rounded-lg shadow-xs bg-card text-neutral-900">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-regular fa-square-check text-primary-600 fa-4x inline mr-3.5"></i>
                        <h1 class="font-bold text-2xl mb-2">Não perder a locação</h1>
                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                          Oportunidade do inquilino alugar sem fiador.
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-dollar-sign text-primary-600 fa-4x inline mr-3.5"></i>
                        <h1 class="font-bold text-2xl mb-2">Garantia de recebimento</h1>
                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                          Em caso de inadimplência
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-money-bill-wave text-primary-600 fa-4x inline mr-3.5"></i>
                        <h1 class="font-bold text-2xl mb-2">Valor do título</h1>
                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                          Acordado entre as partes interessadas no ato da contratação.
                        </p>
                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-tools text-primary-600 fa-4x inline mr-3.5"></i>
                        <h1 class="font-bold text-2xl mb-2">Serviços de assistência para o imóvel</h2>
                          <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                            Chaveiro, reparo elétrico e hidráulico. Saiba mais.
                          </p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
              <!-- End Tab Content 2 -->
            </div>


            <div :id="$id(tabId + '-content')" x-show="tabContentActive($el)" class="relative" x-cloak>
              <!-- Tab Content 3 - Replace with your content -->
              <div class="border rounded-lg shadow-xs bg-card text-neutral-900">
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                  <a class="rounded-lg inline-block overflow-hidden shadow-xl  cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-solid fa-list-check text-primary-600 fa-4x inline mr-3.5"></i>
                        <h1 class="font-bold text-2xl mb-2">Garantia de recebimento</h1>
                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                          Receba as taxas administratvas.
                        </p>

                      </div>
                    </div>
                  </a>

                  <a class="rounded-lg inline-block overflow-hidden shadow-xl cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                    <div class="bg-white">
                      <div class="text-start px-3 pb-6 pt-2">
                        <i class="fa-regular fa-circle-check text-primary-600 fa-4x inline mr-3.5"></i>
                        <h1 class="font-bold text-2xl mb-2">Agilidade</h1>
                        <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                          Mais velocidade no processo de locação.
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- End Tab Content 3 -->
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>





  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h1 class="text-2xl font-bold text-secondary-900 leading-tight mb-3 lg:text-6xl">
          Sobre o sorteio de prêmios
        </h1>



        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
          <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
            <div class="bg-white">
              <div class="text-start px-3 pb-6 pt-2">
                <i class="fa-solid fa-dollar-sign text-primary-600 fa-4x inline mr-3.5"></i>
                <h1 class="font-bold text-2xl mb-2">Prêmios em dinheiro</h1>
                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                  Os inquilinos concorrem a prêmios de 1 a 5x o valor do título contratado.
                </p>
              </div>
            </div>
          </a>

          <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
            <div class="bg-white">
              <div class="text-start px-3 pb-6 pt-2">
                <i class="fa-regular fa-calendar-days text-primary-600 fa-4x inline mr-3.5"></i>
                <h1 class="font-bold text-2xl mb-2">Sorteios mensais</h1>
                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                  O sorteio é realizado no último sábado de todo mês.
                </p>
              </div>
            </div>
          </a>

          <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
            <div class="bg-white">
              <div class="text-start px-3 pb-6 pt-2">
                <i class="fa-solid fa-clover text-primary-600 fa-4x inline mr-3.5"></i>
                <h1 class="font-bold text-2xl mb-2">Número da Sorte</h1>
                <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-3">
                  Cada título tem um número da sorte e o sorteio é realizado pela Loteria Federal.
                </p>
              </div>
            </div>
          </a>

          <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
            <div class="bg-white">
              <div class="text-start px-3 pb-6 pt-2">
                <i class="fa-regular fa-star text-primary-600 fa-4x inline mr-3.5"></i>
                <h1 class="font-bold text-2xl mb-2">Muitas chances de ganhar</h2>
                  <p class="mt-2 text-secondary-800 text-lg leading-8 font-medium line-clamp-4">
                    Os inquilinos concorrem a todos os sorteios, durante a vigência do título.
                  </p>
              </div>
            </div>
          </a>









        </div>


      </div>
    </div>
  </div>



  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-secondary-900 sm:text-4xl text-center">
          Tire suas dúvidas sobre o Título de Capitalização
        </p>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Como funciona o Título de Capitalização?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
            <p>
              O Título de Capitalização é uma aplicação financeira com pagamento único e utilizado como garantia para locação de um imóvel.
            </p>
            <p>
              Após escolher o imóvel, o inquilino deve negociar o preço da garantia com o proprietário e a imobiliária. Com a ajuda de um corretor, poderá adquirir um título de capitalização no mesmo valor, utilizado como garantia para locação de um imóvel. Este título de capitalização poderá ter validade de 12, 15, 18, 24 ou 30 meses.
            </p>
            <p>
              Durante o período, o inquilino participa de sorteios mensais pela Loteria Federal e concorre a prêmios de até 5x o valor da garantia conforme a regra do momento da contratação.
            </p>
            <p>
              Além disso, conta com serviços emergenciais à residência alugada e, em caso de permanência até o final sem utilizar a garantia, resgate percentual do valor capitalizado conforme o plano escolhido.
            </p>
            <p>
              Serviços exclusivos para imóvel residencial.
            </p>
            <p>
              O valor capitalizado será atualizado mensalmente (Taxa Referencial + 0,35% ao mês) garantindo o percentual de resgate informado no final do período em validade.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          O que o inquilino deve fazer se o seu Título de Capitalização da Porto Bank for sorteado?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
            <p>
              A Porto Bank fará contato com o inquilino e após confirmar o recebimento da documentação, pagará a premiação que tem retenção de 30% de IR. Além disso, o inquilino participa dos demais sorteios até o final do período em validade.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Posso transferir o Título do PortoCap Aluguel?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
            <p>
              Sim, o inquilino pode transferir o título, desde que haja a liberação da caução pela imobiliária ou pelo proprietário do imóvel. A transferência deve ser solicitada à Porto Bank, sem qualquer encargo.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quais serviços para residência o inquilino tem direito com o Título de Capitalização da Porto Bank?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
            <p>
              Disponibilizamos os seguintes serviços para imóveis residenciais alugados: chaveiro comum, conversão de gás, instalação de fechadura ou trava tetra, reparo hidráulico, reparo elétrico e troca de segredos de fechadura. Para mais informações
              <a href="https://www.portoseguro.com.br/NovoInstitucional/static_files/pdf/para-voce/2614_CG_Reparos_Emergenciais.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                <span>consulte aqui</span>
              </a>.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Quando posso solicitar o resgate do Título de Capitalização da Porto Bank?
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
            <p>
              O resgate da garantia ocorre conforme a liberação da caução (acordo entre inquilino e proprietário do imóvel). Caso o resgate aconteça antes do final da validade do título, a restituição segue conforme a tabela de resgate aplicada para o produto. Por favor, consulte as condições gerais do título.
            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
        <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
        <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
          Condições Gerais
        </div>
        <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </div>
        <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
          <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
            <p>
              Aqui, você encontra as condições de contratação do seu título e informações como cláusulas contratuais, garantias e obrigações.
            </p>

            <div class="mt-6 grid gap-5 lg:grid-cols-1">

              <div x-data={show:false} class="mt-5">
                <p class="flex justify-center">
                  <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                    2023
                    <i class="fa-solid fa-arrow-right text-primary-600"></i>
                  </button>
                </p>
                <div x-show="show" class="border px-4 py-3 my-2 text-secondary-700">
                  <div class="text-right space-x-5 mt-5">
                    <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-secondary-200 text-secondary-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-secondary-50 focus:bg-primary-50 focus:text-primary">
                      <i class="fa-solid fa-x fa-2xl"></i>
                    </button>
                  </div>
                  <div class="mt-4 max-w-2xl text-xl text-secondary-500 lg:mx-auto text-center">
                    <p>2023</p>
                    <p>Condições Gerais Título de Capitalização Aluguel 12 Meses</p>
                    <p> Vigência a partir de 15/08/2023</p>
                    <p> Processo Susep: 15414.628604/2023-25</p>
                    <p> 
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2023/3701-CG-TITULO-DE-CAPITALIZACAO-ALUGUEL-12-MESES-100.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>
                    <p> Condições Gerais Título de Capitalização Aluguel 15 Meses</p>
                    <p> Vigência a partir de 15/08/2023</p>
                    <p> Processo Susep: 15414.628605/2023-70</p>
                    <p> 
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2023/3702-CG-TITULO-DE-CAPITALIZACAO-ALUGUEL-15-MESES-100.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>
                    <p> Condições Gerais Título de Capitalização Aluguel 18 Meses</p>
                    <p> Vigência a partir de 15/08/2023</p>
                    <p> Processo Susep: 15414.628612/2023-71</p>
                    <p> 
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2023/3703-CG-TITULO-DE-CAPITALIZACAO-ALUGUEL-18-MESES-100.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>
                    <p> Condições Gerais Título de Capitalização Aluguel 24 Meses</p>
                    <p> Vigência a partir de 15/08/2023</p>
                    <p> Processo Susep: 15414.628613/2023-16</p>
                    <p> 
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2023/3704-CG-TITULO-DE-CAPITALIZACAO-ALUGUEL-24-MESES-100.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>
                    <p> Condições Gerais Título de Capitalização Aluguel 30 Meses</p>
                    <p> Vigência a partir de 15/08/2023</p>
                    <p> Processo Susep: 15414.628614/2023-61</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2023/3705-CG-TITULO-DE-CAPITALIZACAO-ALUGUEL-30-MESES-100.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>

              <div x-data={show:false} class="mt-5">
                <p class="flex justify-center">
                  <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                    2020
                    <i class="fa-solid fa-arrow-right text-primary-600"></i>
                  </button>
                </p>
                <div x-show="show" class="border px-4 py-3 my-2 text-secondary-700">
                  <div class="text-right space-x-5 mt-5">
                    <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-secondary-200 text-secondary-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-secondary-50 focus:bg-primary-50 focus:text-primary">
                      <i class="fa-solid fa-x fa-2xl"></i>
                    </button>
                  </div>
                  <div class="mt-4 max-w-2xl text-xl text-secondary-500 lg:mx-auto text-center">
                    <p>2020</p>
                    <p> Condições Gerais Título de Capitalização Aluguel 12 Meses 95%</p>
                    <p>Vigência a partir de 10/03/2020</p>
                    <p>Processo Susep: 15414.601011/2020-79</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3745-CG-Instrumento-de-Garantia-Aluguel-12-meses-95-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>


                    <p>Condições Gerais Título de Capitalização Aluguel 15 Meses 97%</p>
                    <p>Vigência a partir de 02/06/2020</p>
                    <p>Processo Susep: 15414.606128/2020-49</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3737-CG-Instrumento-de-Garantia-Aluguel-15-meses-%2097-V2-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>


                    <p>Condições Gerais Título de Capitalização Aluguel 15 Meses 97%</p>
                    <p>Vigência a partir de 10/03 /2020</p>
                    <p>Processo Susep: 15414.601323/2020-82</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3750-CG-Instrumento-de-Garantia-Aluguel-15-meses-%2097-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>


                    <p>Condições Gerais Título de Capitalização Aluguel 18 Meses 100%</p>
                    <p>Vigência a partir de 18/02/2020</p>
                    <p>Processo Susep: 15414.601325/2020-71</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3738-CG-Instrumento-de-Garantia-Aluguel-18-meses-100-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>


                    <p>Condições Gerais Título de Capitalização Aluguel 24 Meses 100%</p>
                    <p>Vigência a partir de 30/09/2020</p>
                    <p>Processo Susep: 15414.612744/2020-39</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3739-CG-Instrumento-de-Garantia-Aluguel-24-meses-100-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>


                    <p>Condições Gerais Título de Capitalização Aluguel 24 Meses 101%
                    <p>Vigência a partir 10/03/2020
                    <p>Processo Susep: 15414.601326/2020-16
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3749-CG-Instrumento-de-Garantia-Aluguel-24-meses-101-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>


                    <p>Condições Gerais Título de Capitalização Aluguel 30 Meses 100%
                    <p>Vigência a partir de 03/06/2020
                    <p>Processo Susep: 15414.606126/2020-50
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3744-CG-Instrumento-de-Garantia-Aluguel-30-meses-100-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>


                    <p>Condições Gerais Título de Capitalização Aluguel 30 Meses 103%
                    <p>Vigência a partir de 10/03/2020
                    <p>Processo Susep: 15414.601327/2020-61
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2020/3744-CG-Instrumento-de-Garantia-Aluguel-30-meses-100-2020.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>

              <div x-data={show:false} class="mt-5">
                <p class="flex justify-center">
                  <button @click="show=!show" class="w-96 h-36 text-2xl bg-secondary-50 text-primary-600 rounded-sm hover:bg-secondary-100 px-4 py-3 focus:outline-hidden" type="button">
                    2019
                    <i class="fa-solid fa-arrow-right text-primary-600"></i>
                  </button>
                </p>
                <div x-show="show" class="border px-4 py-3 my-2 text-secondary-700">
                  <div class="text-right space-x-5 mt-5">
                    <button @click="show = !show" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-secondary-200 text-secondary-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-secondary-50 focus:bg-primary-50 focus:text-primary">
                      <i class="fa-solid fa-x fa-2xl"></i>
                    </button>
                  </div>
                  <div class="mt-4 max-w-2xl text-xl text-secondary-500 lg:mx-auto text-center">
                    <p>2019</p>
                    <p>Condições Gerais Título de Capitalização Aluguel 12 Meses 100%</p>
                    <p>Vigência a partir de 17/05/2019</p>
                    <p>Processo Susep: 5414.901713/2019-16</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2019/3734-CG-Instrumento-de-Garantia-Aluguel-12-meses-100-2019.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>



                    <p>Condições Gerais Título de Capitalização Aluguel 15 Meses 100%</p>
                    <p>Vigência a partir de 08/05/2019</p>
                    <p>Processo Susep: 15414.901622/2019-81</p>
                    <p>
                      <a href="https://www.portoseguro.com.br/content/dam/documentos/condicoes_gerais/solucoes_para_alugar/titulo_de_capitalizacao/2019/3736-CG-Instrumento-de-Garantia-Aluguel-15-meses-100-2019.pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-hidden focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-500">
                        <span>DOWNLOAD</span>
                      </a>
                    </p>
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
        <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-secondary-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          SOLICITAR UMA PROPOSTA
        </a>
      </div>
    </div>
  </div>



</x-layouts::app>