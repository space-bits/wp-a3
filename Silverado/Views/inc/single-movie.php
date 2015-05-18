		<article class="movie">

			<div class="movie-img">
				<img src="<?= getAssetUri($movie->imgPath); ?>" alt="<?= $movie->name; ?> poster">
			</div>

			<div class="movie-info">
				<div class="movie-info-header">
					<div class="movie-info-header-info">
						<h3><?= $movie->name; ?></h3>
						<div class="meta-info">
							<span class="age-guidance"><?= $movie->ageGuidanceRating; ?></span> |
							<span class="duration"><?= $movie->duration; ?> min</span> |
							<span class="genre"><?= $movie->genre; ?></span>
						</div>
					</div> <!-- .movie-info-header -->
					<!-- <div class="movie-buy-tickets">
						<a href="book.php?movie_id=<?= $movie->id; ?>" class="book-button">Book</a>
					</div> -->
				</div>
				<div class="description"><?= $movie->description; ?></div>
				<div class="storyline"><?= $movie->storyline; ?></div>
				<div class="more-info btn"><h3>Session Times</h3></div>
			 <!-- .movie-info -->

			<!-- .screeings-info -->

				<div class="screenings round-only" style="display: none">
					<?php
						$days = [];
						foreach ($movie->screenings as $screening) {
							$days[$screening->day][] = $screening;
						}
						foreach ($days as $day => $sc) {
							echo '<div class="screening">';
							echo '<div class="screening-day">' . $day . '</div>';
							echo '<div class="screening-times">';
							foreach ($days[$day] as $screening) {
								echo '<span class="screening-time"><a class="book-button" href="' . getBaseUri() . 'book/' . $screening->id . '">' . $screening->time . '</a></span>';
							}
							echo '</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</article>
