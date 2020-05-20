<?php


function lag_horoskop($navn, $md) {
  switch ($md) {
    case 'januar':
      return "Dette blir en knall uke. I alle fall om du liker regnvær.";
      break;
    case 'februar':
      return "Du kommer helt garantert til å vinne i Lotto denne uka. Husk å levere inn en kupong!";
      break;
    case 'mars':
      return "Dette blir ingen god uke, hold deg hjemme.";
      break;    
    case 'april':
      return "Denne uka blir som den forrige. Og den neste. Sånn er det.";
      break;
    case 'mai':
      return "Jeg spår at du snart har bursdag.";
      break;
      case 'juni':
      return "Sommer! Spis masse is!";
      break;   
      case 'juli':
      return "Fremdeles Sommer! Nyt videre!";
      break;   
      case 'august':
      return "Skolen har startet! Nå er det på tide med å jobbe!";
      break;   
      case 'september':
      return "Endelig veldig lite igjen til bursdagen! Hold ut!";
      break;   
      case 'oktober':
      return "YES! ENDELIG BURSDAG! GAVER GAVER GAVER!";
      break;   
      case 'november':
      return "Bursdagen er over, denne måneden er det ingen høydepunkter utenom masse prøver! UGH!.";
      break;   
      case 'desember':
      return "JUL, JUL, JUL! NYTTÅR, NYTTÅR ,NYTTÅR";
      break;   

    default:
      return NULL;
  }  
}

?>
