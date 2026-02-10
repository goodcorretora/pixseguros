<h2>Nova solicitação de seguro moto</h2><br><br>
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
Ano: {{ $ano }}<br>
Ano de Fabricação: {{ $ano_fabricacao }}<br>
Zero Km: {{ $zero_km }}<br>
Modelo: {{ $modelo }}<br>
Localização: {{ $localizacao }}<br>
Condutor Principal: {{ $eCondutorPrincipal }}<br>
CPF Condutor: {{ $cpf_condutor }}<br>
Interesse de Comunicações: {{ $interesse_comunicacoes }}<br><br>
<br><br>
Obrigado