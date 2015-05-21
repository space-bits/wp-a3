<?php
namespace Silverado\Models;

class SeatModel extends AbstractModel {

	// Database fields
	protected $row;
	protected $column;
	protected $sectorId;

	// Magic fields
	protected $sector;

	public function getStatus()
	{
		
		$status = ['Available', 'Reserved', 'Taken'];

		return $status[rand(0, 2)];

	}

}
