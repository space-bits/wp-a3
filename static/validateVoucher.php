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
  $chkSum1 = $chkValidate[(($voucher[0] * $voucher[1] + $voucher[2]) * $voucher[3] + $voucher[4]) % 26];
  $chkSum2 = $chkValidate[(($voucher[6] * $voucher[7] + $voucher[8]) * $voucher[9] + $voucher[10]) % 26];

  if(($chkSum1 === $voucher[12]) && ($chkSum2 === $voucher[13])) {
    //pplaceholder output.
    echo '<p> SUCCESS! </p>';
    echo $chkSum1 . ' == ' . $voucher[12] . ', ';
    echo $chkSum2 . ' == ' . $voucher[13];
  } else {
    echo '<p> Nooooooo! </p>';
  }
} else {
  echo '<p> No voucher submitted.</p>';
}
?>
