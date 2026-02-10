<h2>Nova solicitação ocupacional</h2><br><br>
Você recebeu uma solicitação de: {{ $name }}<br><br>
<strong>Dados do usuário:</strong><br><br>
Nome: {{ $name }}<br>
Email: {{ $email }}<br>
Celular: {{ $phone_celular }}<br>
Telefone Fixo: {{ $phone_fixo }}<br>
CPF/CNPJ: {{ $cpf_cnpj ?? $cnpj }}<br>
@if(isset($representante) && $representante)
Representante: {{ $representante }}<br>
@endif
CEP: {{ $cep }}<br>
Endereço: {{ $endereco }}<br>
Funcionários: {{ $funcionarios }}<br>
Ocupacional: {{ $ocupacional }}<br>
Segurança: {{ $seguranca }}<br>
Ergonômico: {{ $ergonomico }}<br>
Ambulatório: {{ $ambulatorio }}<br>
Perícia: {{ $pericia }}<br>
Promoção: {{ $promocao }}<br><br>
<br><br>
Obrigado