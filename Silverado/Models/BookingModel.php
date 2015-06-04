<?php
namespace Silverado\Models;

class BookingModel extends AbstractModel {

	// Database Fields
	protected $userId;
	protected $screeningId;
	protected $status;

	// Magic Fields
	protected $user;
	protected $screening;

}
