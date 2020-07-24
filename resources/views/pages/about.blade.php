@extends('layouts.page')

@section('title')
About - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="about-page" class="col-12">
		<div class="content-box">
			<div class="row">
				<div class="col">
					<h1>About page</h1>
					<h2>Our Beginnings</h2>
					<p>
						Our business is truly rooted in tradition. We started off in the 1960s when Verdun was bustling with new French immigrants. In order to maintain the French tradition and keep the French appetite up-tight, one such immigrant a Mr. Alain Chouinard founded {{$settings['general']->site_title}} & Sons. in 1964.
					</p>
					<br>
					<p>
						Initially Mr. Chouinard focused on maintaining the <span class="font-italic">goût</span> of <span class="font-italic"> La Midi</span>. He soon realized few and few people in Verdun wanted the flavours of the Old World. In the New World, they wanted to experiment new work, new clothes and of course develop a new taste.
					</p>
					<br>
					<p class="mb-4">
						In our 50 years of history, if we have kept anything, it is this spirit of experimentation. Every year ever since the 70s we have added new menu items, delicacies and desserts. Not only have we become a Verdun icon, but also a symbol of the free spirit of Montreal.
					</p>
					<h2>Present</h2>
					<p>
			           Chef Francois-Blanch introduces a casually elegant restaurant ensconced in the picturesque town of Verdun, Montreal. Here, Francois-Blanch cultivates a truly seasonal, farm-to-table cuisine, with ingredients sourced from the Hudson Valley and New England, whenever possible. Constructed in 1833 as a residence and serving later as an inn, the building has been painstakingly renovated to preserve as many of the original materials as possible, including four working fireplaces. Thomas Juul-Hansen designed the restaurant’s interior with a modern yet rustic sensibility; zinc and marble accent stone and reclaimed wood. The restaurant’s lighting, artfully conceived by Hervé Descottes, employs paper shades and Edison fixtures to create warmth throughout.
			        </p>
					<br>
					<p class="mb-4">
			            The down-to-earth food and contemporary country feel makes the Inn at Pound Ridge a convivial, family friendly restaurant frequented by neighbors and tourists alike. Stop in for a glass of wine and a pizza, or come out for a special occasion dinner. With two dining rooms, two full bars, and a candle only illuminated wine cellar for private dining, we are equipped to accommodate events of all sizes, from intimate dinner parties to full-scale weddings. Francois-Blanch welcomes you, to the Inn at Pound Ridge and looks forward to providing you with a thoroughly enjoyable culinary experience.
			        </p>
					<h2>Our Customers</h2>
					<p class="mb-4">
						For us, our most valuable asset is our customers. We are a customer-first restaurant! Any complaint and dissatisfaction is taken very seriously with full refund available upon request. We have become the Montreal standard for client satisfaction and interaction.
					</p>
					<h2>Are you travelling?</h2>
					<p>
						We are very excited to have you! Every year we welcome thousands of visitors from the United States and around the world. Ask us our servers about exclusive Travelers' Deals, get ready to be surprised.
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
