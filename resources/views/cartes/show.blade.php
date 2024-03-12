
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carte de Crédit</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/main.css'>
    <style>
        /* Style adapté pour le champ "montant" */
        .card-amount {
          position: absolute;
          left: 10%;
          top: 79px; /* Ajustez la position verticale selon votre préférence */
          font-family: sans-serif;
          color: white;
          text-transform: uppercase;
          text-shadow: 0px 0px 3px black;
        }
      </style>
  </head>
  <body>
    <div class="card-container">
      <div class="card">
        <p class="bank-name">GèreTonCash</p>
        <img class="chip" src="/images/chip.svg"/>
        <img class="contactless" src="/images/wifi-signal.svg"/>
        <p class="card-number"> {{ $card->card_number }}</p>
        <div class="arrow"></div>
        <p class="card-expire">EXPIRE {{ $card->card_date }}</p>
        <p class="card-name">CVV {{ $card->cvv }}</p>
        <p class="card-amount">Montant: {{ $card->montant }}</p>
        <img class="visa"src="/images/visa.svg"/>
      </div>
    </div>
  </body>
</html>



