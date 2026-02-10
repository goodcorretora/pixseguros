<x-layouts::app>
<x-slot name="title">SulAmérica</x-slot>

<div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="w-full mx-4 text-center mb-16">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                SulAmérica
            </h1>
            <div class="mb-5 text-gray-900 text-lg  lg:text-2xl leading-8 font-medium">
                Uma seguradora séria com produtos excelente, que procura fazer o melhor para os segurados.
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 xl:gap-x-8">
            
        <a href="{{ ('sulamerica-odonto') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/planodesaude/odonto.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900 mb-4">Plano Odontológico</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">O SulAmérica Odonto tem um plano ideal para cada perfil.</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>

        <a href="{{ ('sulamerica-odonto-individual') }}"class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/planodesaude/odonto1.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900 mb-4">SulAmérica Odonto Individual</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">Cuidar do seu sorriso também é parte da sua saúde integral.</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>

        <a href="{{ ('sulamerica-odonto-empresarial') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/planodesaude/odonto2.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900 mb-4">SulAmérica Odonto Empresarial</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">A maneira fácil de contratar os melhores planos odonto para emprsas de 2 a 29 vidas.</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>

        <a href="{{ ('sulamerica-viagem') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/consorcio/viagem.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900">Seguro Viagem</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">Contratação simples e rápida em 4 passos.</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>
       



      <!-- More products... -->
    </div>
  </div>
</div>


</x-layouts::app>