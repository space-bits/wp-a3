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
		// seat types
		$sts = ['sa', 'sp', 'sc', 'fa', 'fc', 'b1', 'b2', 'b3'];
		$totals = [];

		$total = 0.0;
		foreach ($sts as $st) {
			$totals[$st] = $this->$st * $this->screening->price->$st;
			$total += $totals[$st];
		}
		$totals['total'] = $total;

		if ($this->hasVoucher == 'true') {
			foreach ($totals as $id => $value) {
				$totals[$id] = $value * 0.8;
			}
		}

		return $totals;
	}

	public function getTotals()
	{

		return $this->calculate();

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
