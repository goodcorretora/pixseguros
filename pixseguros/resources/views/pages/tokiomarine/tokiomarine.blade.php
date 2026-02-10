<x-layouts::app>
    <x-slot name="title">Tokiomarine</x-slot>



<div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="w-full mx-4 text-center mb-16">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl">
                Tokio Marine
            </h1>
            <div class="mb-5 text-gray-900 text-lg  lg:text-2xl leading-8 font-medium">
                Uma seguradora séria com produtos excelente, que procura fazer o melhor para os segurados.
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 xl:gap-x-8">
            
        <a href="{{ ('tokiomarine-residencial') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/seguros/seguroresidencial.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900 mb-4">Seguro Residência</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">Cotação e contratação do seu Seguro Residencial online.</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>

        <a href="{{ ('tokiomarine-auto') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/seguros/seguromoto.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900">Moto</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">Contrate o Moto Você Escolhe de maneira 100% digital</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>

        <a href="{{ ('tokiomarine-vida') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/seguros/vida.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900">Seguro Vida</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">Cotação e contratação do seu Seguro de Vida Individual.</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>

        <a href="{{ ('tokiomarine-fianca') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/seguros/fianca.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900">Seguro Fiança</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">soluções para o seu negócio.</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>

        <a href="{{ ('tokiomarine-viagem') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/consorcio/viagem.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900">Seguro Viagem</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">Coberturas válidas para Transporte Aéreo e/ou Marítimo</h1>
                <div class="text-center">
                    <button class="px-4 py-1 text-lg text-primary-600 font-semibold rounded-full border border-primary-200 hover:text-white hover:bg-primary-600 hover:border-transparent focus:outline-hidden focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">Saíba Mais</button>
                </div>
            </div>
        </a>
        
        <a href="{{ ('tokiomarine-auto') }}" class="max-w-sm rounded-lg overflow-hidden shadow-lg">
            <img class="w-full h-56" src="/images/seguros/seguroauto.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="text-3xl font-bold text-center text-gray-900">Seguro Auto</div>
                <h1 class="text-lg font-bold text-center text-gray-700 mb-4">Contrate o Auto Você Escolhe de maneira 100% digital.</h1>
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