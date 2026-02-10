<x-layouts::app>

  <div class="py-2 bg-primary-600">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
      <div class="sm:text-center lg:text-left">
        <h1 class="text-3xl tracking-tight font-bold text-gray-900 ">
          <span class="block text-gray-50 xl:inline">Carro Fácil Seminovo</span>
        </h1>
        <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Diversos carros com ótimas condições e preços imperdíveis.
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
        <img src="{{ asset('images/financeiro/carrofacilseminovo.png') }}" class=" w-96 rounded-lg" alt="" />
      </div>
    </div>
  </div>


  <div class="bg-white py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-3xl font-bold text-secondary-700 leading-tight mb-3">
          Hora de garantir o seu carro dos sonhos
        </h2>
        <p class="text-xl font-bold text-secondary-600 leading-tight mb-3">
          Carros das marcas que você confia com preços e condições especiais.
        </p>
      </div>
    </div>
  </div>


  <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-6xl md:mb-6">
              Confira todas as vantagens de comprar o seu carro seminovo
            </h1>
          </div>
          <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-car-on text-primary-600 fa-4x inline mr-3.5"></i>
                  <h1 class="font-bold text-2xl mb-2">Baixa quilometragem</h1>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                    Até 2 anos de uso, único dono, ótimas condições e sem histórico de sinistro.
                  </p>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-car text-primary-600 fa-4x inline mr-3.5"></i>
                  <h1 class="font-bold text-2xl mb-2">Garantia</h1>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                    6 meses de garantia de motor e câmbio.
                  </p>
                </div>
              </div>
            </a>

            <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
              <div class="bg-white">
                <div class="text-start px-3 pb-6 pt-2">
                  <i class="fa-solid fa-tools text-primary-600 fa-4x inline mr-3.5"></i>
                  <h1 class="font-bold text-2xl mb-2">Boa procedência</h1>
                  <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                    O carro passou por uma checagem completa para ser comercializado com o laudo cautelar em dia.
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
        <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
          SOLICITAR UMA PROPOSTA
        </a>
      </div>
    </div>
  </div>

</x-layouts::app>