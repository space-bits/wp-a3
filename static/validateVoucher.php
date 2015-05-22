<?php
//Not sure if this works or even if it's a good method of validation
if(isset($_POST['code']) && !empty($_POST['code'])) {
  $chkValidate = array (
                        '0'=>'A',
                        '1'=>'B',
                        '2'=>'C',
                        '3'=>'D',
                        '4'=>'E',
                        '5'=>'F',
                        '6'=>'G',
                        '7'=>'H',
                        '8'=>'I',
                        '9'=>'J',
                        '10'=>'K',
                        '11'=>'L',
                        '12'=>'M',
                        '13'=>'N',
                        '14'=>'O',
                        '15'=>'P',
                        '16'=>'Q',
                        '17'=>'R',
                        '18'=>'S',
                        '19'=>'T',
                        '20'=>'U',
                        '21'=>'V',
                        '22'=>'W',
                        '23'=>'X',
                        '24'=>'Y',
                        '25'=>'Z',
                        );

  $voucher = str_split(strtoupper($_POST['code']));

  $a = $voucher[0];
  $b = $voucher[1];
  $c = $voucher[2];
  $d = $voucher[3];
  $e = $voucher[4];
  $chkLet1 = $voucher[12];

  $chkSum1 = $chkValidate[(($a * $b + $c) * $d + $e) % 26];

  $a = $voucher[6];
  $b = $voucher[7];
  $c = $voucher[8];
  $d = $voucher[9];
  $e = $voucher[10];
  $chkLet2 = $voucher[13];

  $chkSum2 = $chkValidate[(($a * $b + $c) * $d + $e) % 26];

  if(($chkSum1 === $chkLet1) && ($chkSum2 === $chkLet2)) {
    echo '<p> SUCCESS! </p>';
    echo $chkSum1 . ' == ' . $chkLet1 . ', ';
    echo $chkSum2 . ' == ' . $chkLet2;
  } else {
    echo '<p> Nooooooo! </p>';
  }
} else {
  echo '<p> No voucher submitted.</p>';
}
?>
