<?php

function writeSecretSentence(string $animal, string $element) {
    return $animal . " s'incline face à " . $element;
};

echo writeSecretSentence('chat', 'eau')
?>