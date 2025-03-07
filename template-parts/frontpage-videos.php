<section class="videos">
	<div class="videos__container">
		<div class="video__wrapper">
			<iframe src="https://www.youtube.com/embed/nPd0adJ5ghE?si=v4oE4qLGyF9P17Po" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
		<div class="video__wrapper">
			<iframe src="https://www.youtube.com/embed/cEB0AuUqNEs?si=EwLvGwblxusHLBuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
		<div class="video__wrapper">
			<iframe src="https://www.youtube.com/embed/GeVLUZLkr40?si=jgwf4WAAXRmT-w1O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		</div>
		
	</div>
	<style>
		.videos {
			width: 100%;
			padding-top: 8rem;
			padding-bottom: 8rem;
		}
		.videos__container {
			width: 90%;
			max-width: 1440px;
			margin-left: auto;
			margin-right: auto;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			column-gap: 2rem;
		}
		.video__wrapper {
			position: relative;
			width: 100%;
			aspect-ratio: 16/9;
		}
		.video__wrapper iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			display: block;
		}
		@media screen and (max-width: 760px) {
			.videos__container {
				grid-template-columns: 1fr;
				row-gap: 2rem;
			}
		}
	</style>
</section>
