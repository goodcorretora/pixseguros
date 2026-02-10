<h2>Nova solicitação de seguro auto</h2><br><br>
Você recebeu uma solicitação de: {{ $name }}<br><br>
<strong>Dados do usuário:</strong><br><br>
Nome: {{ $name }}<br>
Email: {{ $email }}<br>
Celular: {{ $phone_celular }}<br>
CPF/CNPJ: {{ $cpf_cnpj }}<br>
@if(isset($representante) && $representante)
Representante: {{ $representante }}<br>
@endif
Placa: {{ $placa }}<br>
Modificado: {{ $modificado }}<br>
Leilão: {{ $leilao }}<br>
Ano: {{ $ano }}<br>
Ano de Fabricação: {{ $ano_fabricacao }}<br>
Zero Km: {{ $zero_km }}<br>
Modelo: {{ $modelo }}<br>
Uso: {{ $uso }}<br>
Bônus: {{ $bonus }}<br>
Localização: {{ $localizacao }}<br>
Experiência: {{ $experiencia }}<br>
Seguradora: {{ $seguradora }}<br>
Classe de Bônus: {{ $classe_bonus }}<br>
Condutor Principal: {{ $eCondutorPrincipal }}<br>
CPF Condutor: {{ $cpf_condutor }}<br>
Interesse de Comunicações: {{ $interesse_comunicacoes }}<br><br>
<br><br>
Obrigado