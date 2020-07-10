<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.meta-tags')
    </head>
    <body>
        @include('includes.header')
      <section id="app-layout">
        @include('includes.side-menu')
        <div class="welcome-jumbo">
          <div class="welcome-message">
            <div class="status">  The New </div>
            <h1>Billy Burger</h1>
          </div>
          <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
        </div>
      </section>
      @yield('content')
    </body>


    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js">
    </script>

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

</html>
