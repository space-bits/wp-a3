<?php

  foreach($_SESSION['cart'][]->booking as $booking) {
    $booking->save();
  }

?>
