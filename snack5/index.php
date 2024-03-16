<?php
/*
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/


$paragraph = "Ciao sono io che scrivo un paragrafo per fare un esercizio . Adesso devo scrivere cose a caso giusto per. Ora devo scrivere altre cose a caso. Abbiamo quasi finito di scrivere per riempire questo paragrafo. Va bene così , non abbiamo bisogno di alre minchiate.";


$explodedParagraph = explode('.', $paragraph);


var_dump($explodedParagraph);











?>