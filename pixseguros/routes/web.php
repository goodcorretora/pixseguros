<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('sitemap', function () { 
    SitemapGenerator::create(config('app.url'))->configureCrawler(function ($crawler) {
        $crawler->ignoreRobots();
    })->writeToFile(public_path('sitemap.xml'));

        return "Sitemap Generated";

});


Route::view('dashboard', 'pages/dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'pages/profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';








Route::view('/', 'pages/home')->name('home');

Route::view('contato', 'pages/contato')->name('contato')->middleware(['auth', 'verified']);

Route::view('documentos', 'pages/documentos')->name('documentos')->middleware(['auth', 'verified']);
Route::view('endereco', 'pages/endereco')->name('endereco')->middleware(['auth', 'verified']);
  
 
Route::view('politica-de-privacidade', 'pages/politica-de-privacidade')->name('politica-de-privacidade');

Route::view('termos-de-servicos', 'pages/termos-de-servicos')->name('termos-de-servicos');



Route::view('consorcio', 'pages/consorcio/consorcio')->name('consorcio');
Route::view('consorcio-de-bike', 'pages/consorcio/consorcio-de-bike')->name('consorcio-de-bike');
Route::view('consorcio-de-imoveis', 'pages/consorcio/consorcio-de-imoveis')->name('consorcio-de-imoveis');
Route::view('consorcio-de-motos', 'pages/consorcio/consorcio-de-motos')->name('consorcio-de-motos');
Route::view('consorcio-de-veiculos', 'pages/consorcio/consorcio-de-veiculos')->name('consorcio-de-veiculos');
Route::view('consorcio-de-veiculos-pesados', 'pages/consorcio/consorcio-de-maquinas-agricolas-e-veiculos-pesados')->name('consorcio-de-veiculos-pesados');
Route::view('consorcio-de-maquinas-agricolas', 'pages/consorcio/consorcio-de-maquinas-agricolas-e-veiculos-pesados')->name('consorcio-de-maquinas-agricolas');
Route::view('consorcio-sustentavel-de-placas-solares', 'pages/consorcio/consorcio-sustentavel-de-placas-solares')->name('consorcio-sustentavel-de-placas-solares');
Route::view('consorcio-de-servicos', 'pages/consorcio/consorcio-de-servicos')->name('consorcio-de-servicos');
Route::view('solicitar-consorcio', 'pages/consorcio/solicitar-consorcio')->name('solicitar-consorcio')->middleware(['auth', 'verified']);


Route::view('auto-credito', 'pages/financeiro/auto-credito')->name('auto-credito');
Route::view('titulo-de-capitalizacao-para-aluguel', 'pages/financeiro/titulo-de-capitalizacao-para-aluguel')->name('titulo-de-capitalizacao-para-aluguel');
Route::view('carro-facil', 'pages/financeiro/carro-facil')->name('carro-facil');
Route::view('carro-facil-seminovo', 'pages/financeiro/carro-facil-seminovo')->name('carro-facil-seminovo');
Route::view('cartao-de-credito', 'pages/financeiro/cartao-de-credito')->name('cartao-de-credito');
Route::view('cartao-de-credito-porto', 'pages/financeiro/cartao-de-credito-porto')->name('cartao-de-credito-porto');
Route::view('consignado', 'pages/financeiro/consignado')->name('consignado');
Route::view('credito-com-garantia-imobiliaria', 'pages/financeiro/credito-com-garantia-imobiliaria')->name('credito-com-garantia-imobiliaria');
Route::view('emprestimo-com-garantia-de-veiculo', 'pages/financeiro/emprestimo-com-garantia-de-veiculo')->name('emprestimo-com-garantia-de-veiculo');
Route::view('credito-pessoal', 'pages/financeiro/credito-pessoal')->name('credito-pessoal');
Route::view('emprestimo', 'pages/financeiro/emprestimo')->name('emprestimo');
Route::view('financiamento-de-imoveis', 'pages/financeiro/financiamento-de-imoveis')->name('financiamento-de-imoveis');
Route::view('financiamento-de-veiculos', 'pages/financeiro/financiamento-de-veiculos')->name('financiamento-de-veiculos');
Route::view('financiamento-de-veiculos-e-seguro', 'pages/financeiro/financiamento-de-veiculos-e-seguro')->name('financiamento-de-veiculos-e-seguro');
Route::view('plano-saude-pets', 'pages/financeiro/plano-saude-pets')->name('plano-saude-pets');
Route::view('renegociacao', 'pages/financeiro/renegociacao')->name('renegociacao');
Route::view('portabilidade', 'pages/financeiro/portabilidade')->name('portabilidade');
Route::view('tech-facil', 'pages/financeiro/tech-facil')->name('tech-facil');
Route::view('refinanciamento', 'pages/financeiro/refinanciamento')->name('refinanciamento');
Route::view('financiamento', 'pages/financeiro/financiamento')->name('financiamento');
Route::view('solucoes-para-alugar', 'pages/financeiro/solucoes-para-alugar')->name('solucoes-para-alugar');
Route::view('solicitar-emprestimo', 'pages/financeiro/solicitar-emprestimo')->name('solicitar-emprestimo')->middleware(['auth', 'verified']);
Route::view('solicitar-cartao-de-credito', 'pages/financeiro/solicitar-cartao-de-credito')->name('solicitar-cartao-de-credito')->middleware(['auth', 'verified']);


Route::view('plano-de-saude-coletivo', 'pages/plano-de-saude/plano-de-saude-coletivo')->name('plano-de-saude-coletivo');
Route::view('plano-de-saude-empresarial', 'pages/plano-de-saude/plano-de-saude-empresarial')->name('plano-de-saude-empresarial');
Route::view('plano-de-saude-individual', 'pages/plano-de-saude/plano-de-saude-individual')->name('plano-de-saude-individual');
Route::view('plano-odontologico', 'pages/plano-de-saude/plano-odontologico')->name('plano-odontologico');
Route::view('sulamerica-odonto', 'pages/plano-de-saude/sulamerica-odonto')->name('sulamerica-odonto');
Route::view('portoseguro-saude', 'pages/plano-de-saude/portoseguro-saude')->name('portoseguro-saude');
Route::view('saude-ocupacional', 'pages/plano-de-saude/saude-ocupacional')->name('saude-ocupacional');
Route::view('solicitar-plano-de-saude', 'pages/plano-de-saude//solicitar-plano-de-saude')->name('solicitar-plano-de-saude')->middleware(['auth', 'verified']);
Route::view('solicitar-plano-odontologico', 'pages/plano-de-saude/solicitar-plano-odontologico')->name('solicitar-plano-odontologico')->middleware(['auth', 'verified']);


Route::view('previdencia-privada-empresarial', 'pages/previdencia-privada/previdencia-privada-empresarial')->name('previdencia-privada-empresarial');
Route::view('previdencia-privada-individual', 'pages/previdencia-privada/previdencia-privada-individual')->name('previdencia-privada-individual');
Route::view('previdencia-privada-infantil', 'pages/previdencia-privada/previdencia-privada-infantil')->name('previdencia-privada-infantil');
Route::view('porto-previdencia', 'pages/previdencia-privada/porto-previdencia')->name('porto-previdencia');
Route::view('solicitar-previdencia-privada', 'pages/previdencia-privada/solicitar-previdencia-privada')->name('solicitar-previdencia-privada')->middleware(['auth', 'verified']);


Route::view('protecao-planejada', 'pages/previdencia-privada/protecao-planejada')->name('protecao-planejada');
Route::view('seguro-bike', 'pages/seguros/seguro-bike')->name('seguro-bike');
Route::view('seguro-imobiliaria', 'pages/seguros/seguro-imobiliaria')->name('seguro-imobiliaria');
Route::view('protecao-combinada', 'pages/seguros/protecao-combinada')->name('protecao-combinada');
Route::view('seguro-auto', 'pages/seguros/seguro-auto')->name('seguro-auto');
Route::view('seguro-fianca', 'pages/seguros/seguro-fianca')->name('seguro-fianca');
Route::view('seguro-azul-por-assinatura', 'pages/seguros/seguro-azul-por-assinatura')->name('seguro-azul-por-assinatura');
Route::view('seguro-celular', 'pages/seguros/seguro-celular')->name('seguro-celular');
Route::view('seguro-moto', 'pages/seguros/seguro-moto')->name('seguro-moto');
Route::view('seguro-residencial', 'pages/seguros/seguro-residencial')->name('seguro-residencial');
Route::view('seguro-para-equipamentos-portateis', 'pages/seguros/seguro-para-equipamentos-portateis')->name('seguro-para-equipamentos-portateis');
Route::view('seguro-responsabilidade-civil-profissional', 'pages/seguros/seguro-responsabilidade-civil-profissional')->name('seguro-responsabilidade-civil-profissional');
Route::view('seguro-viagem', 'pages/seguros/seguro-viagem')->name('seguro-viagem');
Route::view('seguro-vida', 'pages/seguros/seguro-vida')->name('seguro-vida');
Route::view('cotar-seguro-auto', 'pages/seguros/cotar-seguro-auto')->name('cotar-seguro-auto')->middleware(['auth', 'verified']);
Route::view('cotar-seguro-moto', 'pages/seguros/cotar-seguro-moto')->name('cotar-seguro-moto')->middleware(['auth', 'verified']);



Route::view('seguro-para-empresas', 'pages/seguros-empresariais/seguro-para-empresas')->name('seguro-para-empresas');
Route::view('eventos', 'pages/seguros-empresariais/eventos')->name('eventos');
Route::view('empresa-essencial', 'pages/seguros-empresariais/empresa-essencial')->name('empresa-essencial');
Route::view('seguro-auto-para-empresas', 'pages/seguros-empresariais/seguro-auto-para-empresas')->name('seguro-auto-para-empresas');
Route::view('maquinas-e-equipamentos', 'pages/seguros-empresariais/maquinas-e-equipamentos')->name('maquinas-e-equipamentos');
Route::view('seguro-condominio', 'pages/seguros-empresariais/seguro-condominio')->name('seguro-condominio');
Route::view('seguro-de-vida-para-empresas', 'pages/seguros-empresariais/seguro-de-vida-para-empresas')->name('seguro-de-vida-para-empresas');
Route::view('seguro-empresa', 'pages/seguros-empresariais/seguro-empresa')->name('seguro-empresa');
Route::view('seguro-para-agronegocios', 'pages/seguros-empresariais/seguro-para-agronegocios')->name('seguro-para-agronegocios');
Route::view('seguro-para-caminhoes', 'pages/seguros-empresariais/seguro-para-caminhoes')->name('seguro-para-caminhoes');
Route::view('seguro-para-cargas', 'pages/seguros-empresariais/seguro-para-cargas')->name('seguro-para-cargas');
Route::view('seguro-responsabilidade-civil', 'pages/seguros-empresariais/seguro-responsabilidade-civil')->name('seguro-responsabilidade-civil');
Route::view('seguro-taxi', 'pages/seguros-empresariais/seguro-taxi')->name('seguro-taxi');



Route::view('portoseguro', 'pages/portoseguro/portoseguro')->name('portoseguro');
Route::view('porto-vida-on', 'pages/portoseguro/porto-vida-on')->name('porto-vida-on');
Route::view('portoseguro-acelera', 'pages/portoseguro/portoseguro-acelera')->name('portoseguro-acelera');



Route::view('sulamerica', 'pages/sulamerica/sulamerica')->name('sulamerica');
Route::view('sulamerica-viagem', 'pages/sulamerica/sulamerica-viagem')->name('sulamerica-viagem');
Route::view('sulamerica-odonto', 'pages/sulamerica/sulamerica-odonto')->name('sulamerica-odonto');
Route::view('sulamerica-odonto-individual', 'pages/sulamerica/sulamerica-odonto-individual')->name('sulamerica-odonto-individual');
Route::view('sulamerica-odonto-empresarial', 'pages/sulamerica/sulamerica-odonto-empresarial')->name('sulamerica-odonto-empresarial');



Route::view('tokiomarine', 'pages/tokiomarine/tokiomarine')->name('tokiomarine');
Route::view('tokiomarine-vida', 'pages/tokiomarine/tokiomarine-vida')->name('tokiomarine-vida');
Route::view('tokiomarine-residencial', 'pages/tokiomarine/tokiomarine-residencial')->name('tokiomarine-residencial');
Route::view('tokiomarine-auto', 'pages/tokiomarine/tokiomarine-auto')->name('tokiomarine-auto');
Route::view('tokiomarine-viagem', 'pages/tokiomarine/tokiomarine-viagem')->name('tokiomarine-viagem');
Route::view('tokiomarine-fianca', 'pages/tokiomarine/tokiomarine-fianca')->name('tokiomarine-fianca');





Route::view('hdiseguros', 'pages/hdiseguros/hdiseguros')->name('hdiseguros');
