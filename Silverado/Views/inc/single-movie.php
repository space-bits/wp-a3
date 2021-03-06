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
					</div>
				</div>
				<div class="description"><?= $movie->description; ?></div>
				<div class="storyline"><?= $movie->storyline; ?></div>
				<div class="more-info btn"><h3 class="more-info-text">More Info</h3></div>

				<div class="screenings round-only" style="display: none">
					<?php
						$days = [];
						foreach ($movie->screenings as $screening) {
							$days[$screening->day][] = $screening;
						}
					?>

					<?php foreach ($days as $day => $sc) { ?>
						<div class="screening">
						<div class="screening-day"><?= $day; ?></div>
						<div class="screening-times">
						<?php foreach ($days[$day] as $screening) { ?>
							<span class="screening-time">
								<a class="book-button" href="<?= getBaseUri() . 'book/' . $screening->id; ?>">
									<?= $screening->time; ?>
								</a>
							</span>
						<?php } ?>
						</div>
						</div>
					<?php } ?>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $movie->trailer ?>" frameborder="1px" allowfullscreen></iframe>
					<p>Release Date:<i><?= $movie->relDate; ?>
					<a href="<?= $movie->offSite; ?>">Official Site</a></i></p>

				</div>
			</div> <!-- .movie-info -->
		</article>
