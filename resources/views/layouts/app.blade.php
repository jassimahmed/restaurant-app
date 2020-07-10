<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.meta-tags')
    </head>
    <body>
        @include('includes.header')
      <section id="app-layout">
        @include('includes.side-menu')
        <section id="content-section">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
           @yield('content')
        </section>
      </section>

      {{-- Bootstrap scripts --}}
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


      <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
      <script>
      	let slides = $('.sliding-system a.slide').length;
      	let maxslides;
      	let moveTotal;
      	let currentSlide = 0;

      	$(window).resize(function(){
      		currentSlide = 0;
      		$('.sliding-system').css('transform', 'translate3d(-0%, 0, 0)');
      	});

      	function desktopSlider(){
      		if(a.matches){
      			maxSlides = Math.ceil((slides*20)/100);
      			moveTotal = 100;
      			// Right button
      			$('.right-btn').on('click', ()=> {
      				console.log("Clicked right btn")
      				console.log(`cs: ${currentSlide} ms: ${maxSlides}`)
      				if (currentSlide < maxSlides) {
      					console.log("inside")
      					currentSlide += 100;
      					$('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
      				}
      			})
      			// Left button
      			$('.left-btn').on('click', ()=> {
      				console.log("Clicked right btn")
      				console.log(`cs: ${currentSlide} ms: ${maxSlides}`)
      				if (currentSlide != 0) {
      					console.log("inside")
      					currentSlide -= 100;
      					$('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
      				}
      			})
      		}
      	}
      	var a = window.matchMedia("(min-width: 998px)");
      	desktopSlider(a);
      	a.addListener(desktopSlider);

      	function tabletSlider() {
      		if (b.matches){
      			maxSlides = Math.ceil((slides*50)/100);
      			moveTotal = 100;
      			// Right button
      			$('.right-btn').on('click', ()=> {
      				console.log("Clicked right btn")
      				console.log(`cs: ${currentSlide} ms: ${maxSlides}`)
      				if (currentSlide < ((maxSlides * 100)-100)) {
      					console.log("inside")
      					currentSlide += 50;
      					$('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
      				}
      			})
      			// Left button
      			$('.left-btn').on('click', ()=> {
      				console.log("Clicked right btn")
      				console.log(`cs: ${currentSlide} ms: ${maxSlides}`)
      				if (currentSlide != 0) {
      					console.log("inside")
      					currentSlide -= 50;
      					$('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
      				}
      			})
      		}
      	}

      	var b = window.matchMedia("(min-width: 768px) and (max-width: 998px)");
      	tabletSlider(b);
      	b.addListener(tabletSlider);
      </script>

    </body>
</html>
