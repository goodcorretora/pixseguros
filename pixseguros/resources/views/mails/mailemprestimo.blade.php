<h2>Nova solicitação de empréstimo</h2><br><br>
Você recebeu uma solicitação de: {{ $name }}<br><br>
<strong>Dados do usuário:</strong><br><br>
Nome: {{ $name }}<br>
Email: {{ $email }}<br>
Celular: {{ $phone_celular }}<br>
CPF/CNPJ: {{ $cpf_cnpj }}<br>
@if(isset($representante) && $representante)
Representante: {{ $representante }}<br>
@endif
Data de Nascimento: {{ $datadenascimento }}<br>
Identidade: {{ $identidade }}<br>
Órgão Expedidor: {{ $orgaoexpedidor }}<br>
Data de Expedição: {{ $datadeexpedicao }}<br>
Gênero: {{ $genero }}<br>
Estado civil: {{ $estadocivil }}<br>
CEP: {{ $cep }}<br>
Endereço: {{ $endereco }}<br>
Número: {{ $numero }}<br>
Complemento: {{ $complemento }}<br>
Bairro: {{ $bairro }}<br>
Cidade: {{ $cidade }}<br>
Estado: {{ $estado }}<br>
Escolha: {{ $escolha }}<br><br>
<br><br>
Obrigado