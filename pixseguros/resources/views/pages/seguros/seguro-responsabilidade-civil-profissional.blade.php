<x-layouts::app>
    <x-slot name="title">Seguro de Responsabilidade Civil Profissional</x-slot>





    <div class="py-2 bg-primary-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block text-gray-50 xl:inline">Seguro Responsabilidade Civil e Profissional</span>
                </h1>
                <p class="mt-3 text-lg leading-8 font-medium  text-gray-50 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Você protegido contra os imprevistos da profissão.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow-sm">
                        <a href="contato" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-gray-50 hover:bg-gray-200 md:py-4 md:text-lg md:px-10">
                            Solicitar uma Proposta
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 sm:mr-4 flex items-center lg:mt-0 lg:shrink-0">
                <img src="{{ asset('images/seguros/responcivil.png') }}" class=" w-96 rounded-lg" alt="" />
            </div>
        </div>
    </div>



    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-3 lg:text-3xl">
                    Proteja o seu patrimônio com o seguro de RC Profissional
                    Seu patrimônio protegido com a qualidade Porto Seguro
                </h1>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    O produto de Responsabilidade Civil Profissional foi desenvolvido para profissionais de diversas áreas e o seu objetivo é protegê-los diante de reclamações de terceiros decorrentes de alegadas falhas profissionais por erros ou omissões.
                </p>
                <p class="text-base mt-12 mb-6 md:text-lg md:mb-12">
                    As coberturas garantem as perdas associadas à responsabilidade atribuída ao profissional em consequência da sua prestação de serviços, como custos de defesa, indenizações estipuladas em ações judiciais ou arbitrais contra o segurado, bem como valores decorrentes de acordos celebrados com a anuência prévia e por escrito da seguradora. Há também cobertura para danos morais e custos com restituição de imagem, dentre outros.
                </p>
            </div>
        </div>
    </div>


    <div class="container mx-auto flex justify-center mt-14">
        <div class="w-full mx-4 text-center">
            <h1 class="text-2xl font-bold text-gray-900 leading-tight mb-3 lg:text-4xl">
                Conheça as profissioes e coberturas disponíveis:
            </h1>

            <div class="mt-6 grid gap-3 lg:grid-cols-3">

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Médicos e Outros Profissionais da Saúde
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Médicos e Outros Profissionais da Saúde</p>
                            <p class="mt-1 font-bold">Serviços profissionais</p>
                            <p class="mt-1">Ampara o profissional por qualquer ato danoso voltado para saúde humana, como prestar socorro ou assistência, buscar a cura ou o tratamento de doenças, enfermidades, ferimentos, lesões ou males, aliviar a dor, preservar o bem-estar, a saúde física, mental e a vida, cometido por ele(a) na realização de seus serviços.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade da pessoa segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando os custos para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custo de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Ato do bom samaritano
                            </p>
                            <p class="mt-1">Ampara o segurado diante de reclamações por ter agido em uma situação de emergência em que esteja presente por acaso, seja fora do seu horário de expediente ou do seu âmbito de atuação.
                            </p>
                            <p class="mt-1 font-bold">Responsável Médico
                            </p>
                            <p class="mt-1">Perdas incorridas pela pessoa segurada em consequência de reclamações que venham a recair sobre ele por conta de ocupação de cargo ou exercício de função de responsável médico por quem é segurado, exclusivamente na(s) entidades devidamente mencionadas(s) nas especificações.
                            </p>
                            <p class="mt-1 font-bold">Chefe de Equipe
                            </p>
                            <p class="mt-1">Refere-se aos serviços profissionais voltados a saúde realizados sob chefia, comando, orientação ou subordinação direta e presencial da pessoa segurada na área da saúde humana, com o objetivo de: prestar socorro ou assistência, buscar a cura ou o tratamento de doenças, enfermidades, ferimentos, lesões ou males, aliviar a dor, preservar o bem-estar, a saúde física e mental.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>


                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Advogados e/ou Escritórios de Advocacia
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold"> Advogados e/ou Escritórios de Advocacia</p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">A seguradora irá arcar com as perdas financeiras (incluindo custos de defesa) decorrentes de atos danosos cometidos por profissionais, escritórios de advocacia bem como suas filiais que prestam conselhos jurídicos ou outros serviços legais a terceiros.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas financeiras decorrentes de qualquer ato danoso cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço (responsabilidade conjunta).
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, roubo ou furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados por ele, durante o período de vigência da apólice.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>

                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Engenheiros, Arquitetos e/ou Escritórios
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Engenheiros, Arquitetos e/ou Escritórios
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Ampara aqueles que realizam serviços profissionais de arquitetura, engenharia, desenhos, supervisão de obras, assim como quem supervisiona ou controla diretamente os estudos de viabilidade, levantamento de informações técnicas, cálculos ou pesquisas.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Seguradora pagará as Perdas, decorrentes de qualquer Reclamação de Terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque Atos Danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o Segurado ou uma Subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma Subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, roubo ou furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                            <p class="mt-1 font-bold">Poluição, contaminação ou vazamento súbito e acidental
                            </p>
                            <p class="mt-1">Poluição, contaminação ou vazamento súbito e acidental.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>


                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Designer de Interiores e/ou Escritórios
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Designer de Interiores e/ou Escritórios
                            </p>
                            <p class="mt-1 font-bold">Serviço Profissional
                            </p>
                            <p class="mt-1">Ampara o profissional por qualquer Ato Danoso cometido por ele ao terceiro, na realização de seus serviços profissonais prestados, como intervenções projetuais na área interna das edificações ou controla diretamente os serviços.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando os custos para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Contador e/ou Escritórios
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Contador e/ou Escritórios
                            </p>
                            <p class="mt-1 font-bold">Serviço Profissional
                            </p>
                            <p class="mt-1">Ampara o profissional por qualquer Ato Danoso cometido por ele ao terceiro, na realização de seus serviços profissonais prestados, como o de contador ou de auditor de um terceiro pelo segurado ou sua subsidiárias.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando os custos para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custo de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Seguradora pagará as Perdas, decorrentes de qualquer Reclamação de Terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque Atos Danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o Segurado ou uma Subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma Subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, roubo ou furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Administrador e Corretor de Imóveis, Imobiliária e Síndico Profissional
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">
                                Administrador e Corretor de Imóveis, Imobiliária e Síndico Profissional
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Refere-se aos serviços profissionais de administração de imóveis com amparo profissional por qualquer Ato Danoso cometido por ele na realização de seus serviços de gestão ou a compra, venda, permuta, arrendamento ou locação de bens entre o Segurado.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custo de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Corretores de Seguros
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Corretores de Seguros
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Ampara o profissional por qualquer Ato Danoso cometido por ele na realização de seus serviços como corretor de seguros, como acordo descrito entre o Segurado em contratação de seguro a terceiros.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>

                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Agentes de Viagem e/ou Agências
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Agentes de Viagem e/ou Agências
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Refere-se aos serviços profissionais de Agente de Viagens onde visa amparar o profissional por qualquer Ato Danoso ao terceiro, cometido por ele na realização de seus serviços, incluindo aconselhamento no serviço de um agente de viagem.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custo de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>


                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Certificação Digital e/ou Escritórios
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Certificação Digital e/ou Escritórios
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Cobre as perdas, incluindo os custos de defesa, relacionados a qualquer reclamação de terceiros sobre qualquer ato prejudicial que tenha sido cometido pelo segurado durante as atividades profissionais relacionados aos serviços de emissão de certificação digital.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custo de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                            <p class="mt-1 font-bold">Responsável por produtos de tecnologia
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado por causa de falha em produto de tecnologia.
                            </p>
                            <p class="mt-1 font-bold">Violação de privacidade
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros por violação de direitos de privacidade cometida pelo segurado.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade na internet
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros por causa de ação incorreta na internet.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Empresas e/ou Profissionais de Mídia
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Empresas e/ou Profissionais de Mídia
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Ampara todos os serviços de transmissão, impressão, pesquisa, preparação, publicação, edição, criação, exibição ou distribuição dos conteúdos suscetíveis à publicação e outros serviços profissionais relacionados prestados pelo segurado ou qualquer subsidiária a terceiros.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Empresas de Tecnologia
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Empresas de Tecnologia
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Ampara os serviços de consultoria em tecnologia da informação, como ação incorreta na internet, desde que cometida involuntariamente pelo segurado, além de dados e materiais digitalizados e armazenados, falha em produto de tecnologia, serviços profissionais de software, dados e outros serviços profissionais específicos prestados pelo segurado a ou qualquer subsidiária a terceiros.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade por produto de tecnologia
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado por causa de falha em produto de tecnologia.
                            </p>
                            <p class="mt-1 font-bold">Violação de Privacidade
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros por violação de direitos de privacidade cometida pelo segurado.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade na internet
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros por causa de ação incorreta na internet.
                            </p>
                        </div>
                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>

                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Intermediário de Jogador de Futebol
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Intermediário de Jogador de Futebol
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Refere-se aos serviços de representação de jogadores e/ou de clubes, seja gratuito ou remunerado. E o seguro visa amparar perdas, incluindo os custos de defesa, relacionados a qualquer reclamação de terceiros sobre qualquer ato prejudicial que tenha sido cometido pelo segurado durante as atividades profissionais de serviços de representação de jogadores e/ou de clubes, com o intuito de negociar ou renegociar a celebração, alteração ou renovação de um contrato de trabalho desportivo e/ou como representante de clube visando a negociar a transferência, temporária ou definitiva, de jogador entre clubes.
                            </p>
                            <p class="mt-1">Âmbito geográfico previsto: mundial.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            Notários e Registradores
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Notários e Registradores
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Cobre as perdas, incluindo os custos de defesa, relacionados a qualquer reclamação de terceiros sobre qualquer ato prejudicial que tenha sido cometido pelo segurado durante as atividades profissionais como autenticidade de documentos, autorizações, alterações de instrumentos legais, copias autenticadas, lavração de escrituras, procurações, testamento e outros serviços profissionais relacionados prestados pelo Segurado ou qualquer subsidiária a Terceiros.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                        </div>

                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>
                    </div>
                </div>

                <div x-data={show:false} class="mt-5 border-2 border-primary-600 bg-gray-50 text-gray-700 rounded-sm hover:bg-gray-100 focus:outline-hidden">
                    <p class="flex justify-center">
                        <button @click="show=!show" class="w-76 h-24 text-lg px-4 py-4" type="button">
                            <i class="fa-solid fa-chalkboard-user text-primary-600 fa-xl inline mr-3.5"></i>
                            Veterinário
                        </button>
                    </p>
                    <div x-show="show" class="max-w-3xl overflow overflow-auto fixed inset-0 z-40 justify-center items-center bg-gray-50 border px-4 py-3 my-2 text-gray-700">
                        <div class="text-right space-x-5 mt-5">
                            <button @click="show = !show" class="px-4 py-2 text-sm transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-hidden focus:ring-0 font-bold hover:bg-gray-50 focus:bg-primary-50 focus:text-primary">
                                <i class="fa-solid fa-x fa-2xl"></i>
                            </button>
                        </div>
                        <div class="mt-4 text-xl text-gray-500 lg:mx-auto text-left">
                            <p class="mt-1 font-bold">Veterinário
                            </p>
                            <p class="mt-1 font-bold">Serviços Profissionais
                            </p>
                            <p class="mt-1">Cobre as perdas, incluindo os custos de defesa, relacionados a qualquer reclamação de terceiros sobre serviços profissionais, incluindo aconselhamento, fornecidas pelo segurado como um veterinário em relação ao exame, tratamento e/ou assistência a qualquer animal.
                            </p>
                            <p class="mt-1 font-bold">Dano Moral
                            </p>
                            <p class="mt-1">Reclamados por terceiros, desde que resultantes de evento coberto e qualificado como ato de negligência, ação ou emissão inerente à prática profissional de responsabilidade do Segurado.
                            </p>
                            <p class="mt-1 font-bold">Custos de comparecimento ao tribunal
                            </p>
                            <p class="mt-1">Reembolsa as despesas, considerando as tarifas para cada dia que for preciso comparecer a julgamento.
                            </p>
                            <p class="mt-1 font-bold">Custos de restituição de imagem
                            </p>
                            <p class="mt-1">Cobre os custos de restituição da imagem do segurado em consequência de uma reclamação.
                            </p>
                            <p class="mt-1 font-bold">Responsabilidade Solidária
                            </p>
                            <p class="mt-1">A Porto Seguro pagará as perdas, decorrentes de qualquer reclamação de terceiros apresentada contra o Segurado baseada em responsabilidade conjunta de qualque atos danosos cometido por qualquer empregado independente, ou subcontratado ou pessoa contratada para a prestação de um serviço, que possua um contrato assinado com o segurado ou uma subsidiárias, e que preste serviços sob a direção e supervisão do Segurado ou uma subsidiária.
                            </p>
                            <p class="mt-1 font-bold">Difamação, Calúnia e Injúria
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre difamação, calúnia ou injúria feita involuntariamente pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Propriedade Intelectual
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros sobre violação não intencional de direito de propriedade intelectual, exceto patentes e segredos comerciais cometidos pelo segurado durante a atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Extravio, Roubo ou Furto de documentos
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação por danos a documentos de terceiros, dos quais o segurado seja legalmente responsável e que tenham sido destruídos, danificados, perdidos, alterados, roubados eliminados ou extraviados durante o período de vigência da apólice em consequência da prestação ou falta de prestação dos serviços profissionais.
                            </p>
                            <p class="mt-1 font-bold">Ato desonesto de empregados
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado, a respeito de conduta de má-fé de algum empregado em sua atividade profissional.
                            </p>
                            <p class="mt-1 font-bold">Novas Subsidiárias
                            </p>
                            <p class="mt-1">Cobre as perdas relacionadas a qualquer reclamação de terceiros contra o segurado a respeito de conduta de má-fé de um empregado durante as atividades profissionais.
                            </p>
                        </div>
                        <button @click="show = !show" class="mt-5 item-center w-full mb-3 lg:w-auto lg:mr-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-xs text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            Fechar
                        </button>



                    </div>
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
                            Com a Porto Seguro sua empresa tem:
                        </h1>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-6">

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-calendar-days text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Muitas possibilidades de pagamento: cartão de crédito, boleto bancário e débito em conta.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-money-bill-wave text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Parcelamento em até 12x sem juros no Cartão Porto ou em até 10x sem juros em cartões de outras bandeiras.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-regular fa-clock text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Atendimento 24 horas por dia, 07 dias por semana.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-user-tie text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Equipe técnica especializada e dedicada para regulação de sinistros do produto.
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-users text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Proteção da imagem do profissional
                                    </p>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
                            <div class="bg-white">
                                <div class="text-start px-3 pb-6 pt-2">
                                    <i class="fa-solid fa-umbrella text-primary-600 fa-4x inline mr-3.5"></i>
                                    <p class="mt-2 text-gray-800 text-lg leading-8 font-medium line-clamp-3">
                                        Coberturas personalizadas para cada atividade profissional
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
                <p class="mt-2 mb-8 text-3xl leading-8 font-extrabold tracking-tight text-secondary-900 sm:text-4xl text-center">
                    Tire suas dúvidas sobre o Seguro de Responsabilidade Civil
                </p>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quem pode contratar o Seguro de Responsabilidade Civil Profissional?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Pessoas físicas (PF) e jurídicas (PJ) de acordo com as atividades disponíveis para contratação. Entretanto, para profissionais da saúde, a contratação será exclusivamente para pessoa física.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Quais são os principais motivos para contratar o Seguro de Responsabilidade Civil Profissional?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Ao adquirir uma apólice desta natureza, o profissional ficará protegido contra reclamações de clientes e terceiros referentes à alegadas falhas profissionais.
                        </p>
                        <p>
                            Por mais que o profissional tenha um histórico positivo e julgue não estar sujeito a erros, qualquer pessoa pode reclamar judicialmente e ele precisará se defender, o que pode trazer a necessidade de gastos com contratação de advogados para sua defesa.
                        </p>
                        <p>
                            Legislações e normas referentes à sua atividade profissional podem ser alteradas e/ou atualizadas com frequência, trazendo riscos à sua operação.
                        </p>
                        <p>
                            Com o Seguro de Responsabilidade Civil Profissional (RCP), o profissional poderá realizar suas atividades com maior segurança e tranquilidade, além de ter sua imagem profissional preservada.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Temos aceitação para harmonização orofacial realizada por dentista?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Sim, através da especialidade: Odontologia com Implantodontia, Cirurgia Buco Maxilo Facial, Procedimentos Estéticos da Face e Harmonização Orofacial, desde que o profissional esteja devidamente regulamentado pelo Conselho Federal de Odontologia.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden flex flex-col border-4 border-primary-600 rounded-2xl shadow-sm mb-2 ">
                <input type="checkbox" class="peer absolute top-0 inset-x-0 w-full h-16 opacity-0 z-10 cursor-pointer">
                <div class="p-4 flex items-center cursor-pointer sm:text-sm lg:text-xl text-primary-600 font-semibold tracking-wide mr-5">
                    Somente ações judiciais de terceiros possuem cobertura?
                </div>
                <div class="absolute top-4 right-3 text-primary-600 transition-transform duration-500 rotate-0 peer-checked:rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div class="border-t overflow-hidden transition-all duration-500 max-h-0 peer-checked:max-h-full">
                    <div class="p-4 text-lg leading-8 font-medium text-secondary-900">
                        <p>
                            Sendo relacionado à sua atividade profissional, não apenas ações judiciais, mas também reivindicações ou requerimentos por escrito de indenização, remediação ou reparação (notificações extrajudiciais), além de processo, procedimento ou inquérito na esfera administrativa, inclusive perante autoridades competentes.
                        </p>
                    </div>
                </div>
            </div>

         

        </div>
    </div>




    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <a href="{{url('solicitar-emprestimo')}}" class="text-2xl bg-primary-600 text-secondary-200 rounded-sm hover:bg-primary-500 px-4 py-3 focus:outline-hidden" type="button">
                    Solicitar uma proposta
                </a>
            </div>
        </div>
    </div>







</x-layouts::app>