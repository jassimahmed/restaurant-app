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
					<h2>Our Customers</h2>
					<p>
						For us, our most valuable asset is our customers. We are a customer-first restaurant! Any complaint and dissatisfaction is taken very seriously with full refund available upon request. We have become the Montreal standard for client satisfaction and interaction.
					</p>
					<br>
					<p>
						Are you travelling? We are very excited to have you! Every year we welcome thousands of visitors from the United States and around the world. Ask us our servers about exclusive Travelers' Deals, get ready to be surprised.
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
