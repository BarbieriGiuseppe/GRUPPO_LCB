<!DOCTYPE html>
    <html lang="en-US">
      <head>
      <meta charset="utf-8">
      </head>
      <body>
      <h2>  Hai effettuato la prenotazione con successo!
          di seguito trovate il riepilogo della prenotazione<br>
      </h2>
      
      @php
      use App\Models\Prenotazione_Privato;
      @endphp
 <h3>Data: {{ Prenotazione_Privato::latest()->first()->datatampone }}</h3><br>
 <h3>Orario: {{ Prenotazione_Privato::latest()->first()->orario }}</h3><br>
 <h3>Metodo di pagamento :{{ Prenotazione_Privato::latest()->first()->metodopagamento }}</h3><br>
 <h3>Presso : {{ Prenotazione_Privato::latest()->first()->codicelabpubblico }}</h3><br>
 <p>Cordiali Saluti,</p>
 <p>Gruppo LCB</p>
 </body>
 </html>