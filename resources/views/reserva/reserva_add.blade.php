<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>reserva View</title>
</head>

<body>
  <h1>Inserir reservas</h1>
    <form method="POST" action="{{ route('reserva_store') }}">
    @csrf

    <input id="data" type="date" name="data" placeholder="data"><br/>
    <input id="valor" type="text" name="valor" placeholder="valor"><br/>
    <input id="id_hospede" type="text" name="id_hospede" placeholder="andar"><br/>
    <input id="entrada" type="date" name="entrada" placeholder="entrada"><br/>
    <input id="saida" type="date" name="saida" placeholder="saida"><br/>
    <input id="forma_pagamento" type="text" name="forma_pagamento" placeholder="forma_pagamento"><br/>
    <input id="id_quarto" type="number" name="id_quarto" placeholder="id_quarto"><br/>
    <input id="id_hospede" type="number" name="id_hospede" placeholder="id_hospede"><br/>
    <button type="submit">Inserir</button>
  </form>
</body>

</html>
