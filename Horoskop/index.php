<?php
require 'horoskopfunksjoner.php';

if (isset($_POST['navn']) && isset($_POST['måned'])) {//Vi har fått verdier fra skjemaet
  $horoskop = lag_horoskop($_POST['navn'], $_POST['måned']);
} else {
  //Initierer med tomme verdier
  $horoskop = "";
  $_POST['navn'] = "";
  $_POST['måned'] = "";
}
?>
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="horoskop.css">
    <title>Personlig horoskop</title>
  </head>
  <body>
    <div id="hoved">
    <img class="float-left" src="Keplers_trigon_skalert.jpg" alt="PD (ingen referanse nødvendig)">
    <h1>Personlig horoskop</h1>
      <p>Denne web-applikasjonen gir det et helt personlig horoskop basert på svært anerkjente naturvitenskaplige metoder. Skriv inn navnet ditt og velg fødselsmåned.</p>
      <form action="index.php" method="post">
        <input type="text"  name="navn" placeholder="Navnet ditt her" value="<?php echo $_POST['navn']?>"/>
        <select name="måned">
          <option value="januar">Januar</option>
          <option value="februar">Februar</option>
          <option value="mars">Mars</option>
          <option value="april">April</option>
          <option value="mai">Mai</option>
          <option value="juni">Juni</option>
          <option value="juli">Juli</option>
          <option value="august">August</option>
          <option value="september">September</option>
          <option value="oktober">Oktober</option>
          <option value="november">November</option>
          <option value="desember">Desember</option>
        </select>
        <input type="submit" value="Beregn!" />
      </form>
      <div id="horoskoptekst">
        <?php if($_POST['navn']) {
          echo "<p>Kjære {$_POST['navn']}, her er ditt helt personlige horoskop for den kommende uka. Horoskopet er veldig nøyaktig, men vi forutsetter at du faktisk er født i {$_POST['måned']}, slik du oppga i skjemaet over.</p>"; 
        }
        echo "<p>{$horoskop}</p>";
        ?>
      </div>
      <iframe width="853" height="480" src="https://www.youtube.com/embed/oQPFoDkGFrU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </body>
</html>
