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
				<div class="more-info btn"><h3>Session Times</h3></div>


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

						<video width="400" controls>
						<source src="<?= $movie->trailer; ?>" type="video/mp4">
						<source src="<?= $movie->trailer; ?>" type="video/ogg">
						Your browser does not support HTML5 video.
						</video>
						<p>Release Date:<i> <?= $movie->relDate; ?> </i> </p>
						<p><i><a href="<?= $movie->offSite; ?>">Official Site</a></i></p>
				</div>
			</div> <!-- .movie-info -->
		</article>
