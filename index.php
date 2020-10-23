<?php

  // classe del vicinato
  class Vicini {
    public $nome;
    public $cognome;
    public $anzianita;
    public $scontoCondominio = "no";

    // funzione di sconto sul condominio per i vecchi condomini
    public function sconto()
    {
      if($anzianita > 20){
        $this->scontoCondominio = "Sconto 20%";
      }
      elseif ($anzianita > 30){
        $this->scontoCondominio = "Sconto 50%";
      }
      else{
        $scontoCondominio = "No Sconto";
      }
    }

    // funzione costruttore per modificare il valore di sconto
    function _costructor($scontoCondominio)
    {
      $this->scontoCondominio = $scontoCondominio;
    }

  }


  // Utenti del Condominio
  $int1 = new Vicini("Gabriele", "Musumeci", 21, sconto());
  // $int2 = new Vicini("Gino", "Alibaba", 30, sconto());
  // $int3 = new Vicini("Maurizio", "Bau", 39, sconto());
  // $int4 = new Vicini("Alfonzo", "Pascucci", 5, sconto());

  $condominio = [$int1, $int2, $int3, $int4];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OOP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <table>
      <!-- intestazione tabella -->
      <thead>
        <tr>
          <th>Nome</th>
          <th>Cognome</th>
          <th>Anzianita'</th>
          <th>Sconto</th>
        </tr>
      </thead>
      <!--// intestazione tabella -->

      <!-- corpo tabella -->
      <tbody>
        <?php foreach ($condominio as $condomine): ?>
          <tr>
            <td><?php echo $condomine->name; ?></td>
            <td><?php echo $condomine->cognome; ?></td>
            <td><?php echo $condomine->anzianita; ?></td>
            <td><?php echo $condomine->scontoCondominio; ?></td>
          </tr>
        <?php endforeach ?>

      </tbody>
    <!--// corpo tabella -->
    </table>
  </body>
</html>
