<?php namespace ProcessWire; ?>

<div id="jumbo-header" class="main-slide" style="background-image: url(<?=page()->images->first()->width(2560)->url?>)">
	<div class="main-slide-content">
		<h1>Naturwissenschaftliches Labor <br>für Schüler am FKG e.V.</h1>
		<h2>Experimental- und Forschungslabor für Schülerinnen und Schüler</h2>
	</div>
</div>

<div id="content-body" class="content">
	<div class="elm-card-grid-3">
		<?php foreach(pages()->get("/news")->children as $child) {
			print '<div class="elm-card">
			<img class="elm-card-img" src="'.$child->images->first()->size(140, 140)->url.'">
			<div class="elm-card-title"><h2>'.$child->title.'</h2></div>
			<div class="elm-card-text">'.$child->headline.'</div>
		</div>';
		} ?>
	</div>

	<br><br>

	<div style="max-width: 370px">
		<h1><?=page()->title?></h1>
		<h2>Subline über mehrere Zeilen sodass man die Seite kurz einleiten kann</h2>
	</div>

	<br><br>
</div>
