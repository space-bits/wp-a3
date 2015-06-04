<?php
namespace Silverado\Models;

class BookingModel extends AbstractModel {

	// Database Fields
	protected $userId;
	protected $screeningId;
	protected $sa;
	protected $sp;
	protected $sc;
	protected $fa;
	protected $fc;
	protected $b1;
	protected $b2;
	protected $b3;

	// Magic Fields
	protected $user;
	protected $screening;

	//
	protected $hasVoucher;

	public function calculate()
	{

		$total = $this->sa * $this->screening->price->sa;
		$total += $this->sp * $this->screening->price->sp;
		$total += $this->sc * $this->screening->price->sc;
		$total += $this->fa * $this->screening->price->fa;
		$total += $this->fc * $this->screening->price->fc;
		$total += $this->b1 * $this->screening->price->b1;
		$total += $this->b2 * $this->screening->price->b2;
		$total += $this->b3 * $this->screening->price->b3;

		if ($this->hasVoucher == 'true') {
			return 0.8 * $total;
		} else {
			return $total;
		}
	}


	public function validateVoucher($code)
	{

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
			'25'=>'Z'
		);

		if (strlen($code) == 14) {
			$voucher = str_split(strtoupper(trim($code)));

			$chkSum1 = $chkValidate[(($voucher[0] * $voucher[1] + $voucher[2]) * $voucher[3] + $voucher[4]) % 26];
			$chkSum2 = $chkValidate[(($voucher[6] * $voucher[7] + $voucher[8]) * $voucher[9] + $voucher[10]) % 26];

			// Set session to store the validation to calculate discounted price if true
			return (($chkSum1 === $voucher[12]) && ($chkSum2 === $voucher[13])) ? 'true' : 'false';
		} else {
			return 'false';
		}
	}

	// public function createBarcode()
	// {
	//
	// 	$barcode
	// }

}
