<x-layouts::app>
    <x-slot name="title">Seguro para Celular</x-slot>

<div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block text-gray-50 xl:inline">Seguro Celular com até 15% de desconto</span>
            </h1>
            <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Proteja seu celular contra quebra acidental, roubo e até mesmo furto.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow-sm">
                    <a href="https://porto.vc/RAMOS_ELEMENTARES_7ZZGFF" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                        Venha conhecer
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
            <img src="{{ asset('images/financeiro/celulares.png') }}" class=" w-96 rounded-lg" alt="" />
        </div>
    </div>
</div>

<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                Confira nossos planos
            </h1>
            <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                Tão importante quanto escolher o modelo do seu smartphone é garantir coberturas conforme sua rotina. Descubra o plano que mais combina com você:
            </p>
            <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                Quebra Acidental, Roubo, Quebra + Roubo, Quebra + Roubo + Furto Simples.
            </p>
            <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                *10% para clientes Porto + 5% em pagamento com Cartão de Crédito da Porto Seguro Bank.
            </p>
        </div>

        <div class="lg:text-center"> 
        <a href="{{url('https://porto.vc/RAMOS_ELEMENTARES_7ZZGFF')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          SOLICITAR UMA PROPOSTA
        </a>
      </div>
    </div>
</div>


</x-layouts::app>