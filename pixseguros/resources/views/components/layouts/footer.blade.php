<!-- ====== Footer Section Start -->
<footer class="bg-secondary-100 dark:bg-slate-800 py-8 relative z-0">
  <div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4">
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
            <button @click="open = !open" class="text-primary-600 text-lg font-bold hover:text-primary-700 rounded-md">
              <span href="{{ ('seguros') }}">{{ __('Seguros') }}</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-6 h-6 mt-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-10">
              <div class="w-80 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                <x-layouts.link-header href="{{ ('seguro-para-equipamentos-portateis') }}" :value="__('Equipamentos Portáteis')" />
                <x-layouts.link-header href="{{ ('protecao-combinada') }}" :value="__('Proteção Combinada')" />
                <x-layouts.link-header href="{{ ('seguro-responsabilidade-civil-profissional') }}" :value="__('Responsabilidade Civil Profissional')" />
                <x-layouts.link-header href="{{ ('seguro-auto') }}" :value="__('Seguro Auto')" />
                <x-layouts.link-header href="{{ ('seguro-azul-por-assinatura') }}" :value="__('Seguro Azul por Assinatura')" />
                <x-layouts.link-header href="{{ ('seguro-bike') }}" :value="__('Seguro Bike')" />
                <x-layouts.link-header href="{{ ('seguro-celular') }}" :value="__('Seguro Celular')" />
                <x-layouts.link-header href="{{ ('seguro-fianca') }}" :value="__('Seguro Fiança')" />
                <x-layouts.link-header href="{{ ('seguro-imobiliaria') }}" :value="__('Seguro Imobiliária')" />
                <x-layouts.link-header href="{{ ('seguro-moto') }}" :value="__('Seguro Moto')" />
                <x-layouts.link-header href="{{ ('seguro-residencial') }}" :value="__('Seguro Residência')" />
                <x-layouts.link-header href="{{ ('seguro-viagem') }}" :value="__('Seguro Viagem')" />
                <x-layouts.link-header href="{{ ('seguro-vida') }}" :value="__('Seguro Vida')" />
                <x-layouts.link-header href="{{ ('hdiseguros') }}" :value="__('HdiSeguros')" />
                <x-layouts.link-header href="{{ ('portoseguro') }}" :value="__('PortoSeguro')" />
                <x-layouts.link-header href="{{ ('sulamerica') }}" :value="__('SulAmérica')" />
                <x-layouts.link-header href="{{ ('tokiomarine') }}" :value="__('Tokio Marine')" />
                <x-layouts.link-header href="{{ ('cotar-seguro-auto') }}" :value="__('Cotar Seguro Auto')" />
                <x-layouts.link-header href="{{ ('cotar-seguro-moto') }}" :value="__('Cotar Seguro Moto')" />
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
            <button @click="open = !open" class="text-primary-600 text-lg font-bold hover:text-primary-700 rounded-md">
              <span href="{{ ('consorcio') }}">{{ __('Consórcio') }}</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-6 h-6 mt-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-10">
              <div class="w-80 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                <x-layouts.link-header href="{{ ('consorcio-de-bike') }}" :value="__('Consórcio Bike')" />
                <x-layouts.link-header href="{{ ('consorcio-de-imoveis') }}" :value="__('Consórcio de Imóveis')" />
                <x-layouts.link-header href="{{ ('consorcio-de-motos') }}" :value="__('Consórcio de Motos')" />
                <x-layouts.link-header href="{{ ('consorcio-de-maquinas-agricolas') }}" :value="__('Consórcio de Máquinas Agrícolas')" />
                <x-layouts.link-header href="{{ ('consorcio-de-servicos') }}" :value="__('Consórcio de Serviços')" />
                <x-layouts.link-header href="{{ ('consorcio-sustentavel-de-placas-solares') }}" :value="__('Consórcio Sustentável')" />
                <x-layouts.link-header href="{{ ('consorcio-de-veiculos') }}" :value="__('Consórcio de Veículos')" />
                <x-layouts.link-header href="{{ ('consorcio-de-veiculos-pesados') }}" :value="__('Consórcio de Veículos Pesados')" />
                <x-layouts.link-header href="{{ ('solicitar-consorcio') }}" :value="__('Solicitar Consórcio')" />
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
            <button @click="open = !open" class="text-primary-600 text-lg font-bold hover:text-primary-700 rounded-md">
              <span href="{{ ('financeiro') }}">Financeiro</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-6 h-6 mt-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-10">
              <div class="w-80 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                <x-layouts.link-header href="{{ ('carro-facil') }}" :value="__('Carro Fácil')" />
                <x-layouts.link-header href="{{ ('carro-facil-seminovo') }}" :value="__('Carro Fácil Seminovo')" />
                <x-layouts.link-header href="{{ ('cartao-de-credito') }}" :value="__('Cartão de Crédito')" />
                <x-layouts.link-header href="{{ ('https://porto.vc/cartao_de_credito_porto_bank_2be6eebf43f44ccaa9baf1e0b867cdc7') }}" :value="__('Cartão de Crédito Porto')" />
                <x-layouts.link-header href="{{ ('consignado') }}" :value="__('Consignado')" />
                <x-layouts.link-header href="{{ ('credito-com-garantia-imobiliaria') }}" :value="__('Crédito com Garantia Imobiliária')" />
                <x-layouts.link-header href="{{ ('credito-pessoal') }}" :value="__('Crédito Pessoal')" />
                <x-layouts.link-header href="{{ ('emprestimo') }}" :value="__('Empréstimo')" />
                <x-layouts.link-header href="{{ ('emprestimo-com-garantia-de-veiculo') }}" :value="__('Empréstimo com Garantia de Veículo')" />
                <x-layouts.link-header href="{{ ('seguro-fianca') }}" :value="__('Fiança Locatícia')" />
                <x-layouts.link-header href="{{ ('financiamento-de-imoveis') }}" :value="__('Financiamento de Imóveis')" />
                <x-layouts.link-header href="{{ ('financiamento-de-veiculos') }}" :value="__('Financiamento de Veículos')" />
                <x-layouts.link-header href="{{ ('plano-saude-pets') }}" :value="__('Petlove Saude')" />
                <x-layouts.link-header href="{{ ('portabilidade') }}" :value="__('Portabilidade')" />
                <x-layouts.link-header href="{{ ('refinanciamento') }}" :value="__('Refinanciamento')" />
                <x-layouts.link-header href="{{ ('renegociacao') }}" :value="__('Renegociação')" />
                <x-layouts.link-header href="{{ ('solucoes-para-alugar') }}" :value="__('Soluções para Alugar')" />
                <x-layouts.link-header href="{{ ('tech-facil') }}" :value="__('Tech Fácil')" />
                <x-layouts.link-header href="{{ ('titulo-de-capitalizacao-para-aluguel') }}" :value="__('Título de Capitalização para Aluguel')" />
                <x-layouts.link-header href="{{ ('solicitar-cartao-de-credito') }}" :value="__('Solicitar Cartão de Crédito')" />
                <x-layouts.link-header href="{{ ('solicitar-emprestimo') }}" :value="__('Solicitar Empréstimo')" />
                <x-layouts.link-header href="{{ ('solicitar-emprestimo') }}" :value="__('Solicitar Consignado')" />
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
            <button @click="open = !open" class="text-primary-600 text-lg font-bold hover:text-primary-700 rounded-md">
              <span href="{{ ('plano-de-saude') }}">Plano de Saúde</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-6 h-6 mt-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-10">
              <div class="w-80 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                <x-layouts.link-header href="{{ ('plano-de-saude-coletivo') }}" :value="__('Plano de Saúde Coletivo')" />
                <x-layouts.link-header href="{{ ('plano-de-saude-empresarial') }}" :value="__('Plano de Saúde Empresarial')" />
                <x-layouts.link-header href="{{ ('plano-de-saude-individual') }}" :value="__('Plano de Saúde Individual')" />
                <x-layouts.link-header href="{{ ('plano-odontologico') }}" :value="__('Plano Odontológico')" />
                <x-layouts.link-header href="{{ ('saude-ocupacional') }}" :value="__('Saúde Ocupacional')" />
                <x-layouts.link-header href="{{ ('solicitar-plano-de-saude') }}" :value="__('Solicitar Plano de Saúde')" />
                <x-layouts.link-header href="{{ ('solicitar-plano-odontologico') }}" :value="__('Solicitar Plano Odontológico')" />
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
            <button @click="open = !open" class="text-primary-600 text-lg font-bold hover:text-primary-700 rounded-md">
              <span href="{{ ('previdencia-privada') }}">Previdência</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-6 h-6 mt-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-10">
              <div class="w-80 px-2 py-2 bg-white rounded-md shadow dark-mode:bg-white">
                <x-layouts.link-header href="{{ ('previdencia-privada-empresarial') }}" :value="__('Previdência Privada Empresarial')" />
                <x-layouts.link-header href="{{ ('previdencia-privada-individual') }}" :value="__('Previdência Privada Individual')" />
                <x-layouts.link-header href="{{ ('previdencia-privada-infantil') }}" :value="__('Previdência Privada Infantil')" />
                <x-layouts.link-header href="{{ ('protecao-planejada') }}" :value="__('Proteção Planejada')" />
                <x-layouts.link-header href="{{ ('solicitar-previdencia-privada') }}" :value="__('Solicitar Previdência Privada')" />
              </div>
            </div>
          </div>
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <div class="relative" x-data="{open:false, open: false}" @click.away="open=false">
            <button @click="open = !open" class="text-primary-600 text-lg font-bold hover:text-primary-700 rounded-md">
              <span>Empresariais</span>
              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-6 h-6 mt-1 transition-transform duration-200 transform md:-mt-1">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg z-10">
              <div class="w-80 px-2 py-2 bg-white rounded-md shadow-sm dark-mode:bg-white">
                <x-layouts.link-header href="{{ ('seguros-empresariais') }}" :value="__('Empresariais')" />
                <x-layouts.link-header href="{{ ('seguro-auto-para-empresas') }}" :value="__('Auto Empresarial')" />
                <x-layouts.link-header href="{{ ('empresa-essencial') }}" :value="__('Empresa Essencial')" />
                <x-layouts.link-header href="{{ ('eventos') }}" :value="__('Eventos')" />
                <x-layouts.link-header href="{{ ('maquinas-e-equipamentos') }}" :value="__('Máquinas e Equipamentos')" />
                <x-layouts.link-header href="{{ ('seguro-de-vida-para-empresas') }}" :value="__('Vida Empresarial')" />
                <x-layouts.link-header href="{{ ('seguro-condominio') }}" :value="__('Condomínio')" />
                <x-layouts.link-header href="{{ ('seguro-empresa') }}" :value="__('Seguro Empresarial')" />
                <x-layouts.link-header href="{{ ('seguro-para-agronegocios') }}" :value="__('Agronegócio')" />
                <x-layouts.link-header href="{{ ('seguro-para-caminhoes') }}" :value="__('Caminhão')" />
                <x-layouts.link-header href="{{ ('seguro-para-cargas') }}" :value="__('Transportes de Cargas')" />
                <x-layouts.link-header href="{{ ('seguro-responsabilidade-civil') }}" :value="__('Responsabilidade Civil')" />
                <x-layouts.link-header href="{{ ('seguro-responsabilidade-civil-profissional') }}" :value="__('Responsabilidade Civil Profissional')" />
                <x-layouts.link-header href="{{ ('seguro-taxi') }}" :value="__('Seguro para Taxi')" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap justify-between px-5 py-5 ">
      <span class="inline-flex items-center text-xl">
        <a href="{{ ('/') }}" class="flex shrink-0 items-center">
          <img class="h-16 w-56 lg:block" src="{{ asset('images/logo.svg') }}" alt="Your Company">
        </a>
      </span>
      <x-social-icons class="mb-0"></x-social-icons>
    </div>
    <div class="text-primary-600 text-sm flex flex-col lg:flex-row mb-20 px-5">
      <span class="mb-5 lg:mb-0 lg:mr-5">
        &copy; {{ date('Y') }} Good Corretora de Seguros - Todos os Deireitos Reservados.
      </span>

      <div class="flex flex-wrap lg:block">
        <a href="{{ ('termos-de-servicos') }}" class="mb-4 hover:text-primary-600 hover:font-bold  lg:w-full lg:mb-0 lg:mr-8">
          Termos de Serviços
        </a>
        <a href="{{ ('politica-de-privacidade') }}" class="mb-4 ml-3 hover:text-primary-600 hover:font-bold lg:w-full lg:mb-0 lg:mr-8">
          Política de Privacidade
        </a>
      </div>
    </div>
  </div>
  <div>
    <span class="absolute left-0 bottom-0 z-[-1]">
      <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z" fill="url(#paint0_linear_1179_5)" />
        <defs>
          <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05" gradientUnits="userSpaceOnUse">
            <stop stop-color="#4f46e5" stop-opacity="0.80" />
            <stop offset="1" stop-color="#c7d2fe" stop-opacity="0" />
          </linearGradient>
        </defs>
      </svg>
    </span>
    <span class="absolute top-5 right-10 z-[-1]">
      <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z" fill="url(#paint0_linear_1179_4)" />
        <defs>
          <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75" y2="37.5" gradientUnits="userSpaceOnUse">
            <stop stop-color="#4f46e5" stop-opacity="1.81" />
            <stop offset="1" stop-color="#c7d2fe" stop-opacity="0.5" />
          </linearGradient>
        </defs>
      </svg>
    </span>
  </div>
  <div class="flex justify-items-end fixed bottom-0 end-0 mb-2 mr-0.5 z-10">
    <div>
      <livewire:forms.aceite-wa-form />
    </div>
  </div>
  <div class="relative">
    <div class="absolute bottom-0 right-0 mb-2 mr-0.5 z-10">
      <a title="voltar ao top" href="" target="_blank">
        <i class="fa-solid fa-circle-up text-primary-600 fa-4x inline mr-20"></i>
      </a>
    </div>
  </div>
</footer>
<!-- ====== Footer Section End   -->