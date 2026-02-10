<?php

use Livewire\Component;
use App\Models\Ocupacional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public $title = 'OcupacionalForm';
    public $step = 1; 
    public $name; 
    public $email; 
    public $cpf_cnpj; 
    public $representante; 
    public $isCnpj; 
    public $phone_celular; 
    public $phone_fixo; 
    public $cep; 
    public $endereco; 
    public $numero; 
    public $complemento; 
    public $bairro; 
    public $cidade; 
    public $estado; 
    public $funcionarios; 
    public $ocupacional; 
    public $seguranca; 
    public $ergonomico; 
    public $ambulatorio; 
    public $pericia; 
    public $promocao;

    protected $rules = [
        'name' => 'required',
        'representante' => 'required_if:isCnpj,true',
        'email' => 'required|email',
        'phone_celular' => 'required',
        'phone_fixo' => 'nullable',
        'cpf_cnpj' => 'required',
        'cep' => 'required',
        'endereco' => 'required',
        'numero' => 'required',
        'complemento' => 'nullable',
        'bairro' => 'required',
        'cidade' => 'required',
        'estado' => 'required',
        'funcionarios'=> 'required',
        'ocupacional' => 'nullable',
        'seguranca' => 'nullable',
        'ergonomico' => 'nullable',
        'ambulatorio' => 'nullable',
        'pericia' => 'nullable',
        'promocao' => 'nullable',
    ];

    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone_celular = $user->phone_celular ?? '';
            $this->cpf_cnpj = $user->cpf_cnpj ?? '';
            $this->representante = $user->representante ?? '';
        }
    }

    public function updatedCpfCnpj($value)
    {
        $this->isCnpj = preg_match('/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/', $value);
    }

        public function buscarCep()
    {
        // Ignora verificação SSL apenas em ambiente local
        $http = Http::withOptions([
            'verify' => app()->environment('local') ? false : true
        ]);
        $response = $http->get("https://viacep.com.br/ws/{$this->cep}/json/");
        if ($response->successful()) {
            $data = $response->json();
            if (isset($data['logradouro'])) {
                $this->endereco = $data['logradouro'];
                $this->bairro = $data['bairro'];
                $this->cidade = $data['localidade'];
                $this->estado = $data['uf'];
            } else {
                session()->flash('message', 'CEP inválido. Por favor, insira um CEP válido.');
            }
        } else {
            session()->flash('message', 'Erro ao consultar o serviço de CEP. Tente novamente mais tarde.');
        }
    }

    public function save()
    {
        if (!Auth::check()) {
            session()->flash('error', 'Você precisa estar logado para enviar o formulário.');
            return;
        }

        $this->validate();
        Ocupacional::create([
            'user_id' => Auth::id(),
            'name' => $this->name,
            'representante' => $this->representante,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'phone_fixo' => $this->phone_fixo,
            'cnpj' => $this->cpf_cnpj,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'funcionarios'=> $this->funcionarios,
            'ocupacional'=> (bool) $this->ocupacional,
            'seguranca'=> (bool) $this->seguranca,
            'ergonomico'=> (bool) $this->ergonomico,
            'ambulatorio'=> (bool) $this->ambulatorio,
            'pericia'=> (bool) $this->pericia,
            'promocao'=> (bool) $this->promocao
        ]);

        Mail::send('mails.mailocupacional', [
            'user_id' => Auth::id(),
            'name' => $this->name,
            'representante' => $this->representante,
            'email' => $this->email,
            'phone_celular' => $this->phone_celular,
            'phone_fixo' => $this->phone_fixo,
            'cnpj' => $this->cpf_cnpj,
            'cep' => $this->cep,
            'endereco' => $this->endereco,
            'numero' => $this->numero,
            'complemento' => $this->complemento,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'funcionarios' => $this->funcionarios,
            'ocupacional' => $this->ocupacional,
            'seguranca' => $this->seguranca,
            'ergonomico' => $this->ergonomico,
            'ambulatorio' => $this->ambulatorio,
            'pericia' => $this->pericia,
            'promocao' => $this->promocao,
        ], function($message) {
            $message->to('contato@pixseguros.com.br', 'Saude Ocupacional')
                    ->to('goodcorretora@gmail.com', 'Saude Ocupacional')
                    ->subject($this->name);
        });

        session()->flash('message', 'Recebemos a sua mensagem e gostaríamos de lhe agradecer por nos escrever.');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.forms.ocupacional-form');
    }
};
?>

<div>
    <div class="bg-white py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <p class="mt-12 mb-12 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Conheça os serviços, selecione os mais adequados a sua empresa e solicite uma proposta
                    </p>
                </div>


                <div class="mt-5 md:mt-0 md:col-span-2">
                    <!-- Success message -->
                    @if ($message = Session::get('message'))
                    <div class="p-3 rounded-sm bg-primary-600 text-gray-100 mb-4">
                        <span>{{ $message }}</span>
                    </div>
                    @endif

                    @if(session()->has('error'))
                    <div class="p-3 rounded-sm bg-primary-600 text-gray-100 mb-4">
                        {{ session('error') }}
                        <div class="flex items-center justify-between mt-4">
                            <a class="underline text-base text-secondary-50" href="{{ route('register') }}">
                                {{ __('Não Sou Cadastrado') }}
                            </a>

                            <a class="underline text-base text-secondary-50 rounded-md focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-600" href="{{ route('login') }}" wire:navigate>
                                {{ __('Sou Cadastrado') }}
                            </a>
                        </div>
                    </div>
                    @endif

                    <form wire:submit="save" method="post">
                    <div class="shadow-sm overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            @if($step === 1)                            
                            <!-- Etapa 1: Checkout Options -->
                            <div class="col-span-6">
                                <div class="mt-4 space-y-4">

                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input wire:model="ocupacional" id="ocupacional" name="ocupacional" type="checkbox" class="h-4 w-4 rounded-sm border-gray-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ocupacional" class="font-medium text-gray-700">
                                                <div x-data="{ opened_tab: null }" class="flex flex-col">
                                                    <div class="flex flex-col">
                                                        <div @click="opened_tab = opened_tab == 0 ? null : 0 " class="-mt-2 flex justify-between items-center cursor-pointer sm:text-sm lg:text-xl text-gray-700 font-semibold tracking-wide ">
                                                            <span>
                                                                Saúde Ocupacional
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </div>
                                                        <div x-show="opened_tab==0" class="px-4 pb-4 text-lg leading-8 font-medium text-gray-900">
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Na área de Saúde Ocupacional, a Porto Seguro oferece as seguintes opções:
                                                            </p>

                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Programa de Controle Médico de Saúde Ocupacional (PCMSO) – NR 7
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Programa obrigatório para todas as empresas com funcionários registrados. Possui caráter preventivo e contempla as ações de saúde para monitoramento dos trabalhadores com base nos riscos identificados no ambiente de trabalho. Além disso, tem como objetivo o rastreamento e o diagnóstico precoce dos possíveis agravos à saúde dos colaboradores, com foco na promoção e manutenção da saúde.
                                                            </p>
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Programa de Conservação Auditiva (PCA) – NR 7 e NR 9
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Programa que visa prevenir e identificar o desencadeamento ou agravamento das perdas auditivas ocupacionais, causadas pela exposição a níveis sonoros elevados, tendo como prioridade o acompanhamento e o diagnóstico precoce. Além disso, no programa estão descritas as ações que as empresas devem tomar para evitar danos à audição dos trabalhadores.
                                                            </p>
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Fator Acidentário de Prevenção (FAP)/Nexo Técnico Epidemiológico Previdenciário (NTEP)
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Acompanhamento e gestão técnica especializada dos afastamentos médicos previdenciários, identificando os casos de conversão de benefício previdenciário (B-31) para acidentário (B-91). Entre outras vantagens está a possibilidade de traçar um panorama gerencial, com informações substanciais de retorno financeiro para a empresa ao atuar sobre o FAP.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input wire:model="seguranca" id="seguranca" name="seguranca" type="checkbox" class="h-4 w-4 rounded-sm border-gray-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="seguranca" class="font-medium text-gray-700">
                                                <div x-data="{ opened_tab: null }" class="flex flex-col">
                                                    <div class="flex flex-col">
                                                        <div @click="opened_tab = opened_tab == 0 ? null : 0 " class="-mt-2 flex justify-between items-center cursor-pointer sm:text-sm lg:text-xl text-gray-700 font-semibold tracking-wide ">
                                                            <span>
                                                                Segurança no Trabalho
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </div>
                                                        <div x-show="opened_tab==0" class="px-4 pb-4 text-lg leading-8 font-medium text-gray-900">
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Para a área de Segurança no Trabalho a Porto Seguro disponibiliza os seguintes serviços:
                                                            </p>

                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Programa de Prevenção de Riscos Ambientais (PPRA) – NR 9
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Obrigatório pelas leis trabalhistas, tem como objetivo analisar os riscos ambientais físicos, químicos e biológicos do local de trabalho, estabelecendo medidas para sua eliminação, redução e controle, preservando a saúde e a integridade física dos colaboradores.
                                                            </p>
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Perfil Profissiográfico Previdenciário (PPP)
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Documento previdenciário que tem por objetivo informar o histórico do trabalhador durante seu período laboral, relacionando os riscos aos quais o mesmo estava exposto, para fins de aposentadoria especial.
                                                            </p>
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Comissão Interna de Prevenção de Acidentes (CIPA) – NR 5
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Formada por funcionários da empresa, tem como objetivos proporcionar um ambiente mais seguro e saudável a todos os colaboradores, analisar os acidentes do trabalho, identificar riscos, elaborar o Mapa de Risco e promover a Semana Interna de Prevenção de Acidentes do Trabalho (SIPAT), entre outras atividades internas.

                                                                Entre os treinamentos, destacam-se os de CIPA (além da sua implantação e participação de reuniões mensais); Brigada de Incêndio (NR-23); Trabalho em Altura (NR-35); Riscos Elétricos (NR-10); Uso de EPI’s (NR-6); Ergonomia (NR-17); entre outros.
                                                            </p>
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Laudos
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Laudo Técnico das Condições Ambientais do Trabalho (LTCAT)</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Laudo de Insalubridade</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Laudo de Periculosidade</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Laudo Elétrico (NR-10)</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Sistema de Proteção contra Descargas Elétricas (SPDA)</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Relatório de Acessibilidade</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Relatório de Ruído Externo (NBR 10156)</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Relatório de Iluminamento</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Outros.
                                                            </p>
                                                        </div>


                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input wire:model="ergonomico" id="ergonomico" name="ergonomico" type="checkbox" class="h-4 w-4 rounded-sm border-gray-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ergonomico" class="font-medium text-gray-700">
                                                <div x-data="{ opened_tab: null }" class="flex flex-col">
                                                    <div class="flex flex-col">
                                                        <div @click="opened_tab = opened_tab == 0 ? null : 0 " class="-mt-2 flex justify-between items-center cursor-pointer sm:text-sm lg:text-xl text-gray-700 font-semibold tracking-wide ">
                                                            <span>
                                                                Análise Ergonômica
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </div>
                                                        <div x-show="opened_tab==0" class="px-4 pb-4 text-lg leading-8 font-medium text-gray-900">
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                A Porto Seguro oferece serviços em Ergonomia para atender as necessidades da sua empresa:
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                A Análise Ergonômica tem como foco avaliar o potencial de doenças relacionadas à repetitividade, postura, força física e condições do ambiente de trabalho.
                                                                Contempla tanto os aspectos biomecânicos quanto os aspectos organizacionais do trabalho, com o objetivo de mapear os pontos de desconformidades ergonômicas de acordo com a NR-17.
                                                            </p>
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Pode ser realizada e contratada nas seguintes categorias:
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Análise Ergonômica Administrativa;</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Análise Ergonômica Operacional;</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Análise Ergonômica Individual;</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Análise Ergonômica Call Center.</p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input wire:model="ambulatorio" id="ambulatorio" name="ambulatorio" type="checkbox" class="h-4 w-4 rounded-sm border-gray-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ambulatorio" class="font-medium text-gray-700">
                                                <div x-data="{ opened_tab: null }" class="flex flex-col">
                                                    <div class="flex flex-col">
                                                        <div @click="opened_tab = opened_tab == 0 ? null : 0 " class="-mt-2 flex justify-between items-center cursor-pointer sm:text-sm lg:text-xl text-gray-700 font-semibold tracking-wide ">
                                                            <span>
                                                                Ambulatório
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </div>
                                                        <div x-show="opened_tab==0" class="px-4 pb-4 text-lg leading-8 font-medium text-gray-900">
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Tudo o que a empresa necessita para a implantação e gestão de ambulatório médico:
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Serviços e assessoria para implantação de ambulatório médico ocupacional e/ou assistencial, desde a contratação de profissionais especializados, recursos e medicamentos até a análise das instalações físicas, orientação de melhorias, assessoria para montagem e regularização de documentações perante os órgãos legais.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input wire:model="pericia" id="pericia" name="pericia" type="checkbox" class="h-4 w-4 rounded-sm border-gray-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pericia" class="font-medium text-gray-700">
                                                <div x-data="{ opened_tab: null }" class="flex flex-col">
                                                    <div class="flex flex-col">
                                                        <div @click="opened_tab = opened_tab == 0 ? null : 0 " class="-mt-2 flex justify-between items-center cursor-pointer sm:text-sm lg:text-xl text-gray-700 font-semibold tracking-wide ">
                                                            <span>
                                                                Perícia
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </div>
                                                        <div x-show="opened_tab==0" class="px-4 pb-4 text-lg leading-8 font-medium text-gray-900">
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Orientação, análise e acompanhamento de perícias:
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Faz parte do escopo de trabalho: análise do processo, elaboração de quesitos, acompanhamento da diligência pericial, elaboração de laudo, análise do laudo elaborado pelo perito judicial e eventuais impugnações.
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                As perícias podem ser: Médicas, Engenharia (envolvem insalubridade e periculosidade) e Mistas (envolvem questões médicas e de engenharia).
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                Análise Ergonômica Administrativa;
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex h-5 items-center">
                                            <input wire:model="promocao" id="promocao" name="promocao" type="checkbox" class="h-4 w-4 rounded-sm border-gray-300 text-primary-600 focus:ring-primary-500">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="promocao" class="font-medium text-gray-700">
                                                <div x-data="{ opened_tab: null }" class="flex flex-col">
                                                    <div class="flex flex-col">
                                                        <div @click="opened_tab = opened_tab == 0 ? null : 0 " class="-mt-2 flex justify-between items-center cursor-pointer sm:text-sm lg:text-xl text-gray-700 font-semibold tracking-wide ">
                                                            <span>
                                                                Promoção da Saúde
                                                                <i class="fa-solid fa-arrow-right"></i>
                                                            </span>
                                                        </div>
                                                        <div x-show="opened_tab==0" class="px-4 pb-4 text-lg leading-8 font-medium text-gray-900">
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                Ações para a promoção da saúde e qualidade de vida dos seus funcionários:
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">
                                                                As ações têm o objetivo de induzir a comportamentos e hábitos de vida mais saudáveis, que possam resultar em benefícios individuais e coletivos.
                                                            </p>
                                                            <p class="mt-2 text-lg font-bold text-gray-900 ">
                                                                São oferecidas as seguintes atividades:
                                                            </p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Ginástica Laboral</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Bioimpedância</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Palestras (mais de 60 temas disponíveis)</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Screening</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Programa de Combate ao Sedentarismo</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Programa de Alimentação Saudável</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Programa de Gerenciamento do Estresse</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Programa de Combate ao Tabagismo</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Eventos</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Treinamentos</p>
                                                            <p class="mt-2 text-lg font-normal text-gray-900 ">Campanhas</p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                </select>
                            </div>
                            <div class="text-center">
                                <button wire:click="nextStep" class="text-2xl bg-primary-600 text-gray-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                                    Solicite uma Proposta
                                </button>
                            </div>
                            @elseif($step === 2)
                            <!-- Etapa 2: Nome, Telefone e Email -->

                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="name" class="block text-base font-medium text-gray-700">Nome da Empresa</label>
                                    <input wire:model="name" type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-lio-300 focus:border-lio-300 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('name') <span>{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="representante" class="block text-base font-medium text-gray-700">Representante da Empresa</label>
                                    <input wire:model="representante" type="text" name="representante" id="representante" autocomplete="given-representante" class="mt-1 focus:ring-lio-300 focus:border-lio-300 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('representante') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                                    <input wire:model="email" id="email" type="email" required name="email" autocomplete="email" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('email') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Mobile Phone Number -->
                                <div class="col-span-6 sm:col-span-2" x-data>
                                    <label for="phone_celular" class="block text-gray-700 text-sm font-bold mb-2">Celular</label>
                                    <input
                                        wire:model="phone_celular"
                                        id="phone_celular"
                                        type="text"
                                        required
                                        name="phone_celular"
                                        autocomplete="phone_celular"
                                        x-mask="(99) 99999-9999"
                                        x-mask:dynamic="(99) 9999-9999"
                                        placeholder="Celular"
                                        class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md"
                                    >
                                    @error('phone_celular') <span>{{ $message }}</span> @enderror
                                </div>

                                <!-- Fixed Phone Number (optional) -->
                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="phone_fixo" class="block text-gray-700 text-sm font-bold mb-2">Fixo</label>
                                    <input wire:model="phone_fixo" id="phone_fixo" type="text" name="phone_fixo" autocomplete="phone_fixo" x-mask="(99) 9999 99 99" placeholder="Fixo" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('phone_fixo') <span>{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="cnpj" class="block text-gray-700 text-sm font-bold mb-2">CNPJ</label>
                                    <input wire:model="cpf_cnpj" type="text" id="cnpj" name="cnpj" x-mask="99 999 999/9999-99" placeholder="Digite o CNPJ" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md">
                                    @error('cnpj') <span>{{ $message }}</span> @enderror
                                </div>



                                <div class="inline col-span-6 sm:col-span-1">
                                    <label for="cep" class="block text-gray-700 text-sm font-bold mb-2">CEP</label>
                                    <input wire:model.debounce.150ms="cep" type="text" name="cep" id="cep" autocomplete="cep" 
                                    x-mask="99999-999" placeholder="Digite o CEP"
                                    class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('cep') <span>{{ $message }}</span> @enderror
                                </div>

                                <div class="px-5 mb-4 lg:mt-6 col-span-6 sm:col-span-1 ">
                                    <div class="mt-2 flex items-center gap-x-3">
                                        <button type="button" wire:click="buscarCep" wire:loading.attr="disabled" class="bg-primary-600 text-white px-4 py-2 rounded-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-3">
                                    <label for="endereco" class="block text-gray-700 text-sm font-bold mb-2">Endereço</label>
                                    <input wire:model="endereco" type="text" name="endereco" id="endereco" autocomplete="endereco" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número</label>
                                    <input wire:model="numero" type="text" name="numero" id="numero" autocomplete="numero" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="complemento" class="block text-gray-700 text-sm font-bold mb-2">Complemento</label>
                                    <input wire:model="complemento" type="text" name="complemento" id="complemento" autocomplete="complemento" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="bairro" class="block text-gray-700 text-sm font-bold mb-2">Bairro</label>
                                    <input wire:model="bairro" type="text" name="bairro" id="bairro" autocomplete="bairro" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-2">
                                    <label for="cidade" class="block text-gray-700 text-sm font-bold mb-2">Cidade</label>
                                    <input wire:model="cidade" type="text" name="cidade" id="cidade" autocomplete="cidade" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="mb-4 col-span-6 sm:col-span-1">
                                    <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado</label>
                                    <input wire:model="estado" type="text" name="estado" id="estado" autocomplete="estado" class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="funcionarios" class="block text-base font-medium text-gray-700">Número de Funcionário</label>
                                    <input wire:model="funcionarios" type="text" name="funcionarios" id="funcionarios" autocomplete="funcionarios" class="mt-1 focus:ring-lio-300 focus:border-lio-300 block w-full shadow-xs sm:text-sm border-gray-300 rounded-md">
                                    @error('funcionarios') <span>{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-4 px-4 py-3 bg-secondary-50 text-right sm:px-6">
                                <button wire:click="prevStep" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Voltar</button>
                                <div class="hidden md:block w-16"></div> <!-- Espaço entre os botões apenas em telas maiores -->
                                <button type="submit" class="rounded-md bg-primary-600 px-3.5 py-2.5 text-base font-semibold text-white shadow-xs hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">ENVIAR</button>
                            </div>
                            @endif

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
