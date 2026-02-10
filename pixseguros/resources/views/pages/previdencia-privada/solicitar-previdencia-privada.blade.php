<x-layouts::app>
    <x-slot name="title">Solicitar Previdência Privada</x-slot>


  <div class="py-2 bg-primary-600 z-0">
      <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
          <div class="sm:text-center md:text-center lg:text-center">
              <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                  <span class="block text-gray-50 xl:inline">Solicitar Previdência Privada</span>
              </h1>
          </div>
          <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
              <img src="{{ asset('images/contato.png') }}" class=" w-96 rounded-lg" alt="" />
          </div>
      </div>
  </div>

  <livewire:forms.previdencia-form />




</section>
</x-layouts::app>