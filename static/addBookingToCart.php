<?php
use Silverado\Models\BookingModel;

$booking = new BookingModel();

$_SESSION['booking'][] = $booking;
//$_SESSION['user']['cart'][] = $booking;
