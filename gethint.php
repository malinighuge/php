<?php
// Array with names
$a[] = "kalyan";
$a[] = "Ambernath";
$a[] = "kanjurmarg";
$a[] = "Ulhasnager";
$a[] = "Parel";
$a[] = "Navi mumbai";
$a[] = "Vitthalvadi";
$a[] = "Thane";
$a[] = "Palasdhari";
$a[] = "Karjat";
$a[] = "Khopoli";
$a[] = "Neral";
$a[] = "Nerul";
$a[] = "Vashi";
$a[] = "Domibivali";
$a[] = "Dadar";
$a[] = "Matunga";
$a[] = "Mulund";
$a[] = "Juhinager";
$a[] = "Mumbra";
$a[] = "Bandra";
$a[] = "Borivali";
$a[] = "Ghatkopar";
$a[] = "Dahisar";
$a[] = "Thakurli";
$a[] = "Palghar";
$a[] = "Ram nager";
$a[] = "Wadala";
$a[] = "Kandivali";
$a[] = "Vikroli";
// get the q parameter from URL
$q = $_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 
