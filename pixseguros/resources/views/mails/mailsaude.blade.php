<h2>Nova solicitação de plano de saúde</h2><br><br>
Você recebeu uma solicitação de: {{ $name }}<br><br>
<strong>Dados do usuário:</strong><br><br>
Nome: {{ $name }}<br>
Email: {{ $email }}<br>
Celular: {{ $phone_celular }}<br>
CPF/CNPJ: {{ $cpf_cnpj }}<br>
@if(isset($representante) && $representante)
Representante: {{ $representante }}<br>
@endif
Saúde: {{ $saude }}<br><br>
<br><br>
Obrigado