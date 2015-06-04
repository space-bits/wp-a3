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

		return $total;
	}

}
