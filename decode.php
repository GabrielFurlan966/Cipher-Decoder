<?php
function decodeCipher($encodedText, $shift) {
    $decoded = '';

    foreach (str_split($encodedText) as $char) {
        if (ctype_alpha($char)) {
            $isUpper = ctype_upper($char);
            $base = $isUpper ? ord('A') : ord('a');
            $offset = (ord($char) - $base - $shift) % 26;
            if ($offset < 0) $offset += 26;
            $decoded .= chr($base + $offset);
        } else {
            $decoded .= $char;
        }
    }

    return $decoded;
}

echo "=== Caesar Cipher Decoder ===\n";
echo "Enter the encoded text:\n> ";
$encodedText = trim(fgets(STDIN));

echo "Enter the shift value:\n> ";
$shift = intval(trim(fgets(STDIN)));

echo "\nDecoded text:\n";
echo decodeCipher($encodedText, $shift) . "\n";
?>
