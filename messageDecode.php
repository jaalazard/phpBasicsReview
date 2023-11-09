<?php

$messages = ['0@sn9sirppa@#?ia\'jgtvryko1','q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj', 'aopi?sgnirts@#?sedhtg+p9l!'];
$result = '';
for($i = 0; $i < count($messages); $i++){
 $decode = strrev(substr($messages[$i], 5, strlen($messages[$i]) / 2));
 $result .= str_replace('?#@', ' ', $decode) . " ";
}
echo $result; 

?>