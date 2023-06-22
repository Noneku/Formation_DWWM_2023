<?php
function ouiNon($bool) {
    return $bool ? 'oui' : 'non';
}

echo ouiNon(true); // Affiche 'oui'
echo PHP_EOL;
echo ouiNon(false); // Affiche 'non'
