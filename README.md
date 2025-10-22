# Caesar Cipher Decoder in PHP

This project decodes a message encrypted with the Caesar Cipher by shifting each letter backward according to a given shift value.

## How it works

The `decodeCipher($encodedText, $shift)` function processes the encoded text by analyzing each character and applying a reverse alphabetic shift.

Steps of the logic:

1. Each character in the string is evaluated individually.  
2. If the character is a letter:
   - Identify whether it is uppercase or lowercase.  
   - Shift it backward in the alphabet by the specified amount.  
   - If it goes past the beginning of the alphabet, wrap around to the end (for example, "A" becomes "Z").  
3. If the character is not a letter (such as a space, comma, or number), it remains unchanged.  
4. All processed characters are concatenated to produce the decoded message.

## How to run (Linux)

php decode.php

=== Caesar Cipher Decoder ===
Enter the encoded text:
> Aopz pz aol huzdly, dlss kvul!
Enter the shift value:
> 7

Decoded text:
This is the answer, well done!
