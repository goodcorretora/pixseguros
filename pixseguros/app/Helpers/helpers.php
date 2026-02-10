<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('get_seo_meta')) {
    function get_seo_meta()
    {
        $routeName = Route::currentRouteName();
        
        $seoData = [
            'home' => [
                'title' => config('app.name') . ' - Seguros para você',
                'description' => 'Encontre os melhores seguros para automóvel, residência e vida. Proteção completa para você e sua família.',
                'keywords' => 'Seguro Auto, Seguro Residencial, Seguro Viagem, Seguro Celular, Seguro Vida, Seguro Moto, Seguro Notebook e Tablet, Novo, Seguro Foto e Vídeo, Novo, Seguro Smart e Games, Novo, Seguro Bike, Seguro Imobiliária, Seguro Carta Verde, Proteção Combinada, Responsabilidade Civil Profissional, Seguro Fiança, Seguro Mudança, Máquinas e Equipamentos, Eventos, Agronegócio, Táxi, Seguro Auto Frota, Condomínio, Vida Empresarial, Táxi, Caminhão, Eventos, Responsabilidade Civil Geral, Responsabilidade Civil Profissional, Transporte de Cargas, Seguro Empresarial, Agronegócio, Máquinas e Equipamentos, Empresa Essencial, RC Adms. e Diretores - D&O, Carta Azul, Equipamentos Portáteis, Benefícios Título de Capitalização, Serviços para Casa e Carro, Serviços para Casa, Serviços para Carro, Plano Anual de Assinatura, Petlove Saúde, Centro Automotivo Porto Serviço, Porto Serviço Resolve, Renova Ecopeças, Conheça a Porto Serviço, Cartão de Crédito, Tag de Pedágio e Estacionamento, Empréstimos e Financiamento, Consórcio, Investimentos, Soluções para Alugar, Fiança Locatícia, Fiança Locatícia Essencial, Título de Capitalização para Aluguel, Financiamento, Empréstimo com Garantia de Imóvel, Empréstimo com Garantia de Veículo, Empréstimo Pessoal Cartão, Empréstimo Consignado, Previdência Privada, Conta Porto Bank, Conheça a Porto Bank, Seguro Saúde, Plano de Saúde Porto Bairros, Odontológico, Saúde Ocupacional, Plano de Saúde Empresarial, Plano de Saúde Individual, Plano de Saúde Familiar, Seguro Saúde para MEI, Seguro Saúde para Autônomos, Seguro Saúde para Profissionais Liberais, Seguro Saúde para Empresas, Seguro Saúde para Pequenas Empresas, Seguro Saúde para Médicos'
            ],
            'contato' => [
                'title' => 'Contato | ' . config('app.name'),
                'description' => 'Entre em contato conosco para tirar dúvidas sobre seguros e solicitar uma cotação personalizada.',
                'keywords' => 'contato, seguro, cotação, dúvidas'
            ],
            'consorcio' => [
                'title' => 'Consórcio | ' . config('app.name'),
                'description' => 'Consórcio sem juros para veículos e imóveis. Planeje seu futuro com nossas opções flexíveis. Consórcio de Veículos, Consórcios de Bike, Consórcio de Terrenos, Consórcio de Imóveis, Consórcio de Formatura, Consórcio de Festas, Consórcio de Viagem, Consórcio para Cirurgias Estéticas.',
                'keywords' => 'Consórcio, Consórcio de Veículos, Consórcios de Bike, Consórcio de Terrenos, Consórcio de Imóveis, Consórcio de Formatura, Consórcio de Festas, Consórcio de Viagem, Consórcio para Cirurgias Estéticas'
            ],
            'consorcio-de-veiculos' => [
                'title' => 'Consórcio de Veículos | ' . config('app.name'),
                'description' => 'Consórcio de veículos novos e seminovos. Realize o sonho do carro zero sem juros, com parcelas que cabem no seu bolso e a possibilidade de ser contemplado por sorteio ou lance.',
                'keywords' => 'Consórcio de Veículos, Consórcio de Carros, Consórcio Auto, Carro Zero, Veículo Novo, Veículo Seminovo, Sem Juros'
            ],
            'consorcio-de-motos' => [
                'title' => 'Consórcio de Motos | ' . config('app.name'),
                'description' => 'Consórcio de motos novas e seminovos. Conquiste sua moto dos sonhos sem juros, com flexibilidade de pagamento e chances de contemplação por sorteio ou lance.',
                'keywords' => 'Consórcio de Motos, Consórcio de Motocicletas, Moto Nova, Moto Zero, Sem Juros, Contemplação'
            ],
            'consorcio-de-imoveis' => [
                'title' => 'Consórcio de Imóveis | ' . config('app.name'),
                'description' => 'Consórcio imobiliário para casa, apartamento ou terreno. Planeje a compra do seu imóvel sem juros, com cartas de crédito que se valorizam e diversas opções de contemplação.',
                'keywords' => 'Consórcio de Imóveis, Consórcio Imobiliário, Casa Própria, Apartamento, Terreno, Imóvel Próprio, Sem Juros'
            ],
            'consorcio-de-bike' => [
                'title' => 'Consórcio de Bike | ' . config('app.name'),
                'description' => 'Consórcio de bicicletas de alta performance. Adquira sua bike dos sonhos sem juros, com parcelas acessíveis e possibilidade de contemplação rápida.',
                'keywords' => 'Consórcio de Bike, Consórcio de Bicicleta, Bike, Bicicleta, Mountain Bike, Speed, Sem Juros'
            ],
            'consorcio-sustentavel-de-placas-solares' => [
                'title' => 'Consórcio Sustentável de Placas Solares | ' . config('app.name'),
                'description' => 'Consórcio de energia solar fotovoltaica. Invista em sustentabilidade e economia com placas solares, sem juros e com benefícios de longo prazo para sua casa ou empresa.',
                'keywords' => 'Consórcio de Placas Solares, Energia Solar, Placas Fotovoltaicas, Sustentabilidade, Energia Limpa, Economia de Energia'
            ],
            'consorcio-de-servicos' => [
                'title' => 'Consórcio de Serviços | ' . config('app.name'),
                'description' => 'Consórcio para serviços diversos como reformas, festas, viagens, cursos e procedimentos estéticos. Realize seus projetos sem juros e com flexibilidade de pagamento.',
                'keywords' => 'Consórcio de Serviços, Consórcio de Reforma, Consórcio de Festa, Consórcio de Viagem, Consórcio de Curso, Cirurgia Estética'
            ],
            'consorcio-de-veiculos-pesados' => [
                'title' => 'Consórcio de Veículos Pesados | ' . config('app.name'),
                'description' => 'Consórcio de caminhões, ônibus e veículos comerciais pesados. Expanda seu negócio com investimento programado, sem juros e com cartas de crédito de alto valor.',
                'keywords' => 'Consórcio de Veículos Pesados, Consórcio de Caminhão, Consórcio de Ônibus, Veículos Comerciais, Frota Pesada'
            ],
            'consorcio-de-maquinas-agricolas' => [
                'title' => 'Consórcio de Máquinas Agrícolas | ' . config('app.name'),
                'description' => 'Consórcio de tratores, colheitadeiras e equipamentos agrícolas. Modernize sua produção rural sem juros, com cartas de alto valor e prazos estendidos.',
                'keywords' => 'Consórcio de Máquinas Agrícolas, Consórcio de Trator, Consórcio de Colheitadeira, Equipamentos Agrícolas, Agronegócio'
            ],
            'solicitar-consorcio' => [
                'title' => 'Solicitar Consórcio | ' . config('app.name'),
                'description' => 'Solicite seu consórcio online de forma rápida e segura. Preencha o formulário e receba uma proposta personalizada para realizar seus sonhos sem juros.',
                'keywords' => 'Solicitar Consórcio, Proposta de Consórcio, Simulação de Consórcio, Cotação Online'
            ],
            'financeiro' => [
                'title' => 'Financeiro | ' . config('app.name'),
                'description' => 'Financiamento de Veículos e Imóveis com as melhores condições do mercado. Crédito Pessoal, Empréstimos e Refinanciamento. Soluções financeiras para você realizar seus sonhos. Consignado, Crédito com Garantia Imobiliária, Crédito Pessoal, Empréstimo com Garantia de Veículo, Empréstimo Consignado, Empréstimo Pessoal Cartão, Portabilidade, Renegociação, Refinanciamento, Soluções para Alugar, Título de Capitalização para Aluguel, Cartão de Crédito, Solicitar Cartão de Crédito, Solicitar Empréstimo, Solicitar Consignado',
                'keywords' => 'Financeiro, Auto Crédito, Carro Fácil, Carro Fácil Seminovo, Cartão de Crédito, Cartão de Crédito Porto, Consignado, Crédito com Garantia Imobiliária, Crédito Pessoal, Empréstimo, Empréstimo com Garantia de Veículo, Fiança Locatícia, Financiamento de Imóveis, Financiamento de Veículos, Petlove Saude, Portabilidade, Refinanciamento, Renegociação, Soluções para Alugar, Tech Fácil, Título de Capitalização para Aluguel, Solicitar Cartão de Crédito, Solicitar Empréstimo, Solicitar Consignado'
            ],
            'auto-credito' => [
                'title' => 'Auto Crédito | ' . config('app.name'),
                'description' => 'Auto crédito com as melhores taxas do mercado. Financie seu veículo com parcelas que cabem no bolso e condições especiais.',
                'keywords' => 'Auto Crédito, Crédito de Veículo, Financiamento de Carro, Empréstimo Auto'
            ],
            'carro-facil' => [
                'title' => 'Carro Fácil | ' . config('app.name'),
                'description' => 'Carro Fácil: financiamento de veículos com aprovação rápida e condições facilitadas. Realize o sonho do carro próprio.',
                'keywords' => 'Carro Fácil, Financiamento Facilitado, Aprovação Rápida, Carro Próprio'
            ],
            'carro-facil-seminovo' => [
                'title' => 'Carro Fácil Seminovo | ' . config('app.name'),
                'description' => 'Financiamento de veículos seminovos com as melhores taxas. Carro Fácil Seminovo com aprovação ágil e parcelas acessíveis.',
                'keywords' => 'Carro Fácil Seminovo, Financiamento Seminovo, Veículo Usado, Aprovação Facilitada'
            ],
            'cartao-de-credito' => [
                'title' => 'Cartão de Crédito | ' . config('app.name'),
                'description' => 'Cartão de crédito com benefícios exclusivos, programa de pontos e acesso a ofertas especiais. Solicite já o seu.',
                'keywords' => 'Cartão de Crédito, Programa de Pontos, Benefícios, Cashback, Anuidade'
            ],
            'cartao-de-credito-porto' => [
                'title' => 'Cartão de Crédito Porto | ' . config('app.name'),
                'description' => 'Cartão de Crédito Porto com vantagens exclusivas, proteção completa e programa de recompensas. Aproveite condições especiais.',
                'keywords' => 'Cartão Porto, Cartão de Crédito Porto Seguro, Programa de Recompensas, Benefícios Porto'
            ],
            'consignado' => [
                'title' => 'Empréstimo Consignado | ' . config('app.name'),
                'description' => 'Empréstimo consignado com desconto em folha de pagamento. Taxas reduzidas, prazos estendidos e aprovação facilitada.',
                'keywords' => 'Consignado, Empréstimo Consignado, Desconto em Folha, Crédito Consignado, INSS, Servidor Público'
            ],
            'credito-com-garantia-imobiliaria' => [
                'title' => 'Crédito com Garantia Imobiliária | ' . config('app.name'),
                'description' => 'Crédito com garantia de imóvel: taxas reduzidas, prazos longos e valores mais altos. Use seu imóvel como garantia.',
                'keywords' => 'Crédito com Garantia Imobiliária, Home Equity, Empréstimo com Imóvel, Refinanciamento Imobiliário'
            ],
            'emprestimo-com-garantia-de-veiculo' => [
                'title' => 'Empréstimo com Garantia de Veículo | ' . config('app.name'),
                'description' => 'Empréstimo com garantia do seu veículo. Taxas reduzidas, aprovação rápida e você continua usando seu carro normalmente.',
                'keywords' => 'Empréstimo com Garantia de Veículo, Crédito com Carro, Garantia Veicular, Refinanciamento de Veículo'
            ],
            'credito-pessoal' => [
                'title' => 'Crédito Pessoal | ' . config('app.name'),
                'description' => 'Crédito pessoal rápido e sem burocracia. Dinheiro na conta em até 24 horas com as melhores taxas do mercado.',
                'keywords' => 'Crédito Pessoal, Empréstimo Pessoal, Dinheiro Rápido, Sem Burocracia'
            ],
            'emprestimo' => [
                'title' => 'Empréstimo | ' . config('app.name'),
                'description' => 'Empréstimo com as melhores condições do mercado. Simule, compare e contrate online de forma rápida e segura.',
                'keywords' => 'Empréstimo, Crédito, Financiamento, Dinheiro Rápido, Taxas Baixas'
            ],
            'financiamento-de-imoveis' => [
                'title' => 'Financiamento de Imóveis | ' . config('app.name'),
                'description' => 'Financiamento imobiliário para casa própria ou investimento. Condições especiais, prazos longos e taxas competitivas.',
                'keywords' => 'Financiamento de Imóveis, Financiamento Imobiliário, Casa Própria, Apartamento, Imóvel'
            ],
            'financiamento-de-veiculos' => [
                'title' => 'Financiamento de Veículos | ' . config('app.name'),
                'description' => 'Financiamento de veículos novos e seminovos com as melhores taxas. Aprove seu crédito e realize o sonho do carro próprio.',
                'keywords' => 'Financiamento de Veículos, Financiamento de Carros, Financiamento Auto, Carro Novo, Seminovo'
            ],
            'financiamento-de-veiculos-e-seguro' => [
                'title' => 'Financiamento de Veículos e Seguro | ' . config('app.name'),
                'description' => 'Financiamento de veículos com seguro auto incluído. Pacote completo com proteção total e parcelas facilitadas.',
                'keywords' => 'Financiamento com Seguro, Financiamento e Seguro Auto, Pacote Completo Veículo'
            ],
            'plano-saude-pets' => [
                'title' => 'Plano de Saúde para Pets | ' . config('app.name'),
                'description' => 'Plano de saúde para pets com cobertura veterinária completa. Cuide da saúde do seu animal de estimação.',
                'keywords' => 'Plano de Saúde Pet, Seguro Pet, Plano Veterinário, Saúde Animal, Cachorro, Gato'
            ],
            'renegociacao' => [
                'title' => 'Renegociação de Dívidas | ' . config('app.name'),
                'description' => 'Renegocie suas dívidas com descontos e condições especiais. Limpe seu nome e recupere seu crédito.',
                'keywords' => 'Renegociação, Renegociar Dívidas, Limpar Nome, Acordo de Dívida, Desconto'
            ],
            'portabilidade' => [
                'title' => 'Portabilidade de Crédito | ' . config('app.name'),
                'description' => 'Portabilidade de crédito com taxas menores. Transfira seu empréstimo e economize nas parcelas mensais.',
                'keywords' => 'Portabilidade, Portabilidade de Crédito, Transferência de Empréstimo, Taxas Menores'
            ],
            'tech-facil' => [
                'title' => 'Tech Fácil | ' . config('app.name'),
                'description' => 'Tech Fácil: financiamento de eletrônicos e tecnologia. Notebooks, tablets, celulares e mais com parcelas acessíveis.',
                'keywords' => 'Tech Fácil, Financiamento de Eletrônicos, Notebook, Celular, Tablet, Tecnologia'
            ],
            'refinanciamento' => [
                'title' => 'Refinanciamento | ' . config('app.name'),
                'description' => 'Refinanciamento com condições melhores. Reduza suas parcelas e tenha mais fôlego financeiro.',
                'keywords' => 'Refinanciamento, Refinanciar Dívida, Reduzir Parcelas, Trocar Empréstimo'
            ],
            'financiamento' => [
                'title' => 'Financiamento | ' . config('app.name'),
                'description' => 'Financiamento para diversas necessidades: veículos, imóveis, reformas e mais. Simule e contrate online.',
                'keywords' => 'Financiamento, Crédito, Parcelamento, Financiamento Online'
            ],
            'solucoes-para-alugar' => [
                'title' => 'Soluções para Alugar | ' . config('app.name'),
                'description' => 'Soluções para locação: seguro fiança, título de capitalização e mais. Alugue sem fiador e sem caução.',
                'keywords' => 'Soluções para Alugar, Seguro Fiança, Título de Capitalização, Aluguel sem Fiador'
            ],
            'titulo-de-capitalizacao-para-aluguel' => [
                'title' => 'Título de Capitalização para Aluguel | ' . config('app.name'),
                'description' => 'Título de capitalização que substitui o depósito caução. Alugue sem imobilizar seu dinheiro.',
                'keywords' => 'Título de Capitalização, Título para Aluguel, Substituir Caução, Aluguel'
            ],
            'solicitar-emprestimo' => [
                'title' => 'Solicitar Empréstimo | ' . config('app.name'),
                'description' => 'Solicite seu empréstimo online de forma rápida e segura. Preencha o formulário e receba uma proposta personalizada.',
                'keywords' => 'Solicitar Empréstimo, Pedido de Crédito, Proposta de Empréstimo, Simulação Online'
            ],
            'solicitar-cartao-de-credito' => [
                'title' => 'Solicitar Cartão de Crédito | ' . config('app.name'),
                'description' => 'Solicite seu cartão de crédito online com aprovação rápida. Preencha o cadastro e receba seu cartão em casa.',
                'keywords' => 'Solicitar Cartão, Pedido de Cartão de Crédito, Cartão Online, Aprovação Rápida'
            ],
            'plano-de-saude' => [
                'title' => 'Plano de Saúde | ' . config('app.name'),
                'description' => 'Plano de Saúde completo para você e sua família. Cobertura ampla, atendimento de qualidade e planos personalizados. Plano de Saúde Coletivo, Plano de Saúde Empresarial, Plano de Saúde Individual, Plano Odontológico, Porto Seguro Saúde, SulAmérica Odonto, Saúde Ocupacional, Solicitar Plano de Saúde, Solicitar Plano Odontológico',
                'keywords' => 'Plano de Saúde, Plano de Saúde Coletivo, Plano de Saúde Empresarial, Plano de Saúde Individual, Plano Odontológico, Porto Seguro Saúde, SulAmérica Odonto, Saúde Ocupacional, Solicitar Plano de Saúde, S0licitar Plano Odontológico'
            ],
            'plano-de-saude-empresarial' => [
                'title' => 'Plano de Saúde Empresarial | ' . config('app.name'),
                'description' => 'Plano de saúde empresarial a partir de 2 vidas. Ofereça benefícios de qualidade aos seus colaboradores com coberturas completas.',
                'keywords' => 'Plano de Saúde Empresarial, Plano Coletivo, Saúde Corporativa, PME, Benefícios Empresariais'
            ],
            'plano-de-saude-individual' => [
                'title' => 'Plano de Saúde Individual | ' . config('app.name'),
                'description' => 'Plano de saúde individual e familiar com rede credenciada ampla. Proteção completa para você e quem você ama.',
                'keywords' => 'Plano de Saúde Individual, Plano Familiar, Saúde Individual, Cobertura ANS'
            ],
            'plano-odontologico' => [
                'title' => 'Plano Odontológico | ' . config('app.name'),
                'description' => 'Plano odontológico com cobertura completa: limpeza, tratamentos, ortodontia e mais. Cuide do seu sorriso.',
                'keywords' => 'Plano Odontológico, Plano Dental, Odonto, Ortodontia, Saúde Bucal'
            ],
            'sulamerica-odonto' => [
                'title' => 'SulAmérica Odonto | ' . config('app.name'),
                'description' => 'Plano odontológico SulAmérica com rede credenciada nacional, sem carências e tratamentos completos.',
                'keywords' => 'SulAmérica Odonto, Plano SulAmérica Dental, SulAmérica Saúde Bucal'
            ],
            'portoseguro-saude' => [
                'title' => 'Porto Seguro Saúde | ' . config('app.name'),
                'description' => 'Plano de saúde Porto Seguro com cobertura nacional, telemedicina e atendimento de excelência.',
                'keywords' => 'Porto Seguro Saúde, Plano Porto, Porto Saúde, Seguro Saúde Porto'
            ],
            'saude-ocupacional' => [
                'title' => 'Saúde Ocupacional | ' . config('app.name'),
                'description' => 'Saúde ocupacional para empresas: exames admissionais, periódicos, ASO e medicina do trabalho completa.',
                'keywords' => 'Saúde Ocupacional, Medicina do Trabalho, Exame Admissional, ASO, PCMSO'
            ],
            'solicitar-plano-de-saude' => [
                'title' => 'Solicitar Plano de Saúde | ' . config('app.name'),
                'description' => 'Solicite seu plano de saúde online. Preencha o formulário e receba cotações das melhores operadoras.',
                'keywords' => 'Solicitar Plano de Saúde, Cotação Plano de Saúde, Contratar Plano'
            ],
            'solicitar-plano-odontologico' => [
                'title' => 'Solicitar Plano Odontológico | ' . config('app.name'),
                'description' => 'Solicite seu plano odontológico online. Compare preços e coberturas das principais operadoras.',
                'keywords' => 'Solicitar Plano Odontológico, Cotação Odonto, Contratar Plano Dental'
            ],
            'previdencia-privada' => [
                'title' => 'Previdência Privada| ' . config('app.name'),
                'description' => 'Previdência Privada para garantir seu futuro com segurança e planejamento. Planos personalizados para todas as idades e necessidades. Previdência Privada Empresarial, Previdência Privada Individual, Previdência Privada Infantil, Proteção Planejada',
                'keywords' => 'Previdência Privada, Previdência Privada Empresarial, Previdência Privada Individual, Previdência Privada Infantil, Proteção Planejada'
            ],
            'previdencia-privada-empresarial' => [
                'title' => 'Previdência Privada Empresarial | ' . config('app.name'),
                'description' => 'Previdência empresarial para benefício dos colaboradores. Retenha talentos e ofereça planejamento de futuro com benefícios fiscais.',
                'keywords' => 'Previdência Empresarial, Previdência Corporativa, PGBL Empresarial, Benefícios para Funcionários'
            ],
            'previdencia-privada-individual' => [
                'title' => 'Previdência Privada Individual | ' . config('app.name'),
                'description' => 'Previdência individual com flexibilidade e benefícios fiscais. Planeje sua aposentadoria com PGBL ou VGBL.',
                'keywords' => 'Previdência Individual, PGBL, VGBL, Aposentadoria Privada, Plano de Previdência'
            ],
            'previdencia-privada-infantil' => [
                'title' => 'Previdência Privada Infantil | ' . config('app.name'),
                'description' => 'Previdência infantil para garantir o futuro dos seus filhos. Invista desde cedo na educação e realização de sonhos.',
                'keywords' => 'Previdência Infantil, Previdência para Filhos, Investimento Infantil, Futuro dos Filhos'
            ],
            'porto-previdencia' => [
                'title' => 'Porto Previdência | ' . config('app.name'),
                'description' => 'Planos de previdência Porto Seguro com gestão profissional e diversas opções de fundos de investimento.',
                'keywords' => 'Porto Previdência, Previdência Porto Seguro, PGBL Porto, VGBL Porto'
            ],
            'protecao-planejada' => [
                'title' => 'Proteção Planejada | ' . config('app.name'),
                'description' => 'Proteção Planejada: combine previdência e seguro de vida em um único plano. Proteja sua família e planeje o futuro.',
                'keywords' => 'Proteção Planejada, Previdência com Seguro, Seguro e Previdência, Proteção Familiar'
            ],
            'solicitar-previdencia-privada' => [
                'title' => 'Solicitar Previdência Privada | ' . config('app.name'),
                'description' => 'Solicite sua previdência privada online. Receba simulações e escolha o melhor plano para seu perfil.',
                'keywords' => 'Solicitar Previdência, Contratar Previdência, Simulação Previdência'
            ],
            'seguros-para-voce' => [
                'title' => 'Seguros para Você | ' . config('app.name'),
                'description' => 'Seguros para você e sua família com cobertura completa e atendimento personalizado. Seguro Auto, Seguro Residencial, Seguro Viagem, Seguro Celular, Seguro Vida, Seguro Moto, Seguro Notebook e Tablet, Seguro Foto e Vídeo, Seguro Smart e Games, Seguro Bike, Seguro Imobiliária, Seguro Carta Verde, Proteção Combinada, Responsabilidade Civil Profissional, Seguro Fiança, Seguro Mudança, Máquinas e Equipamentos, Eventos, Agronegócio, Táxi',
                'keywords' => 'Seguros para Você, Seguro Auto, Seguro Residencial, Seguro Viagem, Seguro Celular, Seguro Vida, Seguro Moto, Seguro Notebook e Tablet, Novo, Seguro Foto e Vídeo, Novo, Seguro Smart e Games, Novo, Seguro Bike, Seguro Imobiliária, Seguro Carta Verde, Proteção Combinada, Responsabilidade Civil Profissional, Seguro Fiança, Seguro Mudança, Máquinas e Equipamentos, Eventos, Agronegócio, Táxi'
            ],
            'seguro-auto' => [
                'title' => 'Seguro Auto | ' . config('app.name'),
                'description' => 'Seguro auto com cobertura completa: roubo, furto, colisão, assistência 24h e carro reserva. Proteja seu veículo.',
                'keywords' => 'Seguro Auto, Seguro de Carro, Seguro Automóvel, Proteção Veicular, Assistência 24h'
            ],
            'seguro-moto' => [
                'title' => 'Seguro Moto | ' . config('app.name'),
                'description' => 'Seguro de moto com proteção total: roubo, furto, acidentes e assistência 24 horas. Pilote tranquilo.',
                'keywords' => 'Seguro Moto, Seguro de Motocicleta, Proteção para Moto, Seguro Duas Rodas'
            ],
            'seguro-residencial' => [
                'title' => 'Seguro Residencial | ' . config('app.name'),
                'description' => 'Seguro residencial completo: incêndio, roubo, danos elétricos, responsabilidade civil e assistência 24h para sua casa.',
                'keywords' => 'Seguro Residencial, Seguro Casa, Seguro Apartamento, Proteção Residencial'
            ],
            'seguro-viagem' => [
                'title' => 'Seguro Viagem | ' . config('app.name'),
                'description' => 'Seguro viagem internacional e nacional com assistência médica, extravio de bagagem e cancelamento. Viaje seguro.',
                'keywords' => 'Seguro Viagem, Seguro Internacional, Assistência Viagem, Seguro Schengen'
            ],
            'seguro-vida' => [
                'title' => 'Seguro de Vida | ' . config('app.name'),
                'description' => 'Seguro de vida com cobertura para morte, invalidez e doenças graves. Proteja sua família e garanta tranquilidade.',
                'keywords' => 'Seguro de Vida, Seguro Vida, Proteção Familiar, Invalidez, Doenças Graves'
            ],
            'seguro-bike' => [
                'title' => 'Seguro Bike | ' . config('app.name'),
                'description' => 'Seguro para bicicleta: roubo, furto, acidentes pessoais e danos à bike. Pedale com segurança.',
                'keywords' => 'Seguro Bike, Seguro Bicicleta, Proteção Bike, Seguro Ciclista'
            ],
            'seguro-celular' => [
                'title' => 'Seguro Celular | ' . config('app.name'),
                'description' => 'Seguro de celular contra roubo, quebra de tela, oxidação e danos. Proteja seu smartphone.',
                'keywords' => 'Seguro Celular, Seguro Smartphone, Proteção Celular, Quebra de Tela'
            ],
            'seguro-fianca' => [
                'title' => 'Seguro Fiança | ' . config('app.name'),
                'description' => 'Seguro fiança locatícia que substitui o fiador. Alugue sem burocracia e sem comprometer seu limite de crédito.',
                'keywords' => 'Seguro Fiança, Fiança Locatícia, Aluguel sem Fiador, Garantia Locatícia'
            ],
            'seguro-para-equipamentos-portateis' => [
                'title' => 'Seguro para Equipamentos Portáteis | ' . config('app.name'),
                'description' => 'Seguro para notebooks, tablets e equipamentos eletrônicos portáteis. Proteção contra roubo, quebra e danos.',
                'keywords' => 'Seguro Equipamentos Portáteis, Seguro Notebook, Seguro Tablet, Proteção Eletrônicos'
            ],
            'seguro-imobiliaria' => [
                'title' => 'Seguro Imobiliária | ' . config('app.name'),
                'description' => 'Seguro imobiliária para proteção de imóveis alugados. Cobertura contra danos, inadimplência e mais.',
                'keywords' => 'Seguro Imobiliária, Seguro Aluguel, Proteção Imobiliária, Inadimplência'
            ],
            'protecao-combinada' => [
                'title' => 'Proteção Combinada | ' . config('app.name'),
                'description' => 'Proteção combinada: múltiplas coberturas em um único seguro. Residencial, vida, acidentes e mais.',
                'keywords' => 'Proteção Combinada, Seguro Combinado, Multi Coberturas, Pacote de Seguros'
            ],
            'seguro-responsabilidade-civil-profissional' => [
                'title' => 'Seguro Responsabilidade Civil Profissional | ' . config('app.name'),
                'description' => 'Seguro RC profissional para médicos, advogados, engenheiros e outros. Proteção contra erros e omissões.',
                'keywords' => 'RC Profissional, Responsabilidade Civil, Seguro Profissional, Erros e Omissões'
            ],
            'seguro-azul-por-assinatura' => [
                'title' => 'Seguro Azul por Assinatura | ' . config('app.name'),
                'description' => 'Seguro Azul com pagamento por assinatura mensal. Flexibilidade e proteção completa com cobertura renovável.',
                'keywords' => 'Seguro Azul, Seguro por Assinatura, Assinatura Mensal, Carta Azul'
            ],
            'cotar-seguro-auto' => [
                'title' => 'Cotar Seguro Auto | ' . config('app.name'),
                'description' => 'Faça cotação de seguro auto online e compare preços das melhores seguradoras. Economize na contratação.',
                'keywords' => 'Cotar Seguro Auto, Cotação Seguro Carro, Comparar Seguros, Preço Seguro Auto'
            ],
            'cotar-seguro-moto' => [
                'title' => 'Cotar Seguro Moto | ' . config('app.name'),
                'description' => 'Cotação de seguro moto online com as melhores seguradoras. Compare e contrate com desconto.',
                'keywords' => 'Cotar Seguro Moto, Cotação Moto, Preço Seguro Moto, Comparar Seguros'
            ],
            'seguros-para-empresas' => [
                'title' => 'Seguros para Empresas | ' . config('app.name'),
                'description' => 'Seguros para empresas com soluções completas e personalizadas. Auto Empresarial, Empresa Essencial, Eventos, Máquinas e Equipamentos, Vida Empresarial, Condomínio, Seguro Empresarial, Agronegócio, Caminhão, Transportes de Cargas, Responsabilidade Civil, Responsabilidade Civil Profissional',
                'keywords' => 'Seguros para Empresas, Auto Empresarial, Empresa Essencial, Eventos, Máquinas e Equipamentos, Vida Empresarial, Condomínio, Seguro Empresarial, Agronegócio, Caminhão, Transportes de Cargas, Responsabilidade Civil, Responsabilidade Civil Profissional'
            ],
            'seguro-para-empresas' => [
                'title' => 'Seguro para Empresas | ' . config('app.name'),
                'description' => 'Seguro empresarial completo: patrimônio, responsabilidade civil, equipamentos e mais. Proteja seu negócio.',
                'keywords' => 'Seguro Empresarial, Seguro para Empresas, Proteção Empresarial, Seguro Comercial'
            ],
            'eventos' => [
                'title' => 'Seguro para Eventos | ' . config('app.name'),
                'description' => 'Seguro para eventos corporativos, shows, feiras e congressos. Cobertura contra cancelamento, RC e mais.',
                'keywords' => 'Seguro de Eventos, Seguro Show, Seguro Feira, Cancelamento de Evento, RC Eventos'
            ],
            'empresa-essencial' => [
                'title' => 'Empresa Essencial | ' . config('app.name'),
                'description' => 'Seguro Empresa Essencial com coberturas completas para PMEs: incêndio, roubo, equipamentos e RC.',
                'keywords' => 'Empresa Essencial, Seguro PME, Seguro Pequena Empresa, Proteção Empresarial'
            ],
            'seguro-auto-para-empresas' => [
                'title' => 'Seguro Auto para Empresas | ' . config('app.name'),
                'description' => 'Seguro de frota empresarial com gestão centralizada, assistência 24h e condições especiais para empresas.',
                'keywords' => 'Seguro Auto Empresarial, Seguro Frota, Frota Empresarial, Auto Corporativo'
            ],
            'maquinas-e-equipamentos' => [
                'title' => 'Seguro de Máquinas e Equipamentos | ' . config('app.name'),
                'description' => 'Seguro para máquinas e equipamentos industriais: quebra acidental, roubo e danos. Proteja seu maquinário.',
                'keywords' => 'Seguro Máquinas, Seguro Equipamentos, Máquinas Industriais, Equipamentos Pesados'
            ],
            'seguro-condominio' => [
                'title' => 'Seguro Condomínio | ' . config('app.name'),
                'description' => 'Seguro condomínio para edifícios residenciais e comerciais: incêndio, RC, equipamentos e áreas comuns.',
                'keywords' => 'Seguro Condomínio, Seguro Edifício, Seguro Prédio, RC Condomínio'
            ],
            'seguro-de-vida-para-empresas' => [
                'title' => 'Seguro de Vida para Empresas | ' . config('app.name'),
                'description' => 'Seguro de vida empresarial para colaboradores. Benefício estratégico para retenção de talentos.',
                'keywords' => 'Seguro Vida Empresarial, Vida em Grupo, Seguro Funcionários, Benefícios Corporativos'
            ],
            'seguro-empresa' => [
                'title' => 'Seguro Empresa | ' . config('app.name'),
                'description' => 'Seguro empresarial completo com múltiplas coberturas: patrimônio, RC, interrupção de negócios e mais.',
                'keywords' => 'Seguro Empresa, Proteção Empresarial, Seguro Comercial, Seguro Negócio'
            ],
            'seguro-para-agronegocios' => [
                'title' => 'Seguro para Agronegócios | ' . config('app.name'),
                'description' => 'Seguro agrícola para plantações, equipamentos e instalações rurais. Proteção completa para o campo.',
                'keywords' => 'Seguro Agrícola, Seguro Rural, Agronegócio, Seguro Plantação, Seguro Fazenda'
            ],
            'seguro-para-caminhoes' => [
                'title' => 'Seguro para Caminhões | ' . config('app.name'),
                'description' => 'Seguro de caminhão com cobertura completa: roubo, colisão, RC e assistência 24h para veículos pesados.',
                'keywords' => 'Seguro Caminhão, Seguro Veículo Pesado, Seguro Truck, Proteção Caminhão'
            ],
            'seguro-para-cargas' => [
                'title' => 'Seguro de Transporte de Cargas | ' . config('app.name'),
                'description' => 'Seguro de cargas para transporte rodoviário, aéreo e marítimo. Proteja sua mercadoria durante o transporte.',
                'keywords' => 'Seguro de Cargas, Transporte de Cargas, RCF-DC, Seguro Mercadoria, Logística'
            ],
            'seguro-responsabilidade-civil' => [
                'title' => 'Seguro Responsabilidade Civil Empresarial | ' . config('app.name'),
                'description' => 'Seguro RC empresarial para proteção contra danos a terceiros, produtos, operações e mais.',
                'keywords' => 'RC Empresarial, Responsabilidade Civil, Seguro RC, Danos a Terceiros'
            ],
            'seguro-taxi' => [
                'title' => 'Seguro Táxi | ' . config('app.name'),
                'description' => 'Seguro para táxi e transporte de passageiros com cobertura completa: RC, APP e assistência 24h.',
                'keywords' => 'Seguro Táxi, Seguro Uber, Seguro App, Transporte Passageiros, RC Passageiros'
            ],
        ];
        
        return $seoData[$routeName] ?? [
            'title' => config('app.name'),
            'description' => config('app.description', 'Descrição padrão'),
            'keywords' => config('app.keywords', '')
        ];
    }
}