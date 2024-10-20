<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.odometer.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/gsap.js')}}"></script>
<script src="{{asset('assets/js/ScrollTrigger.js')}}"></script>
<script src="{{asset('assets/js/SplitText.js')}}"></script>
<script src="{{asset('assets/js/gsap-animation.js')}}"></script>
<script src="{{asset('assets/js/jquery.parallaxScroll.min.js')}}"></script>
<script src="{{asset('assets/js/swiper-bundle.js')}}"></script>
<script src="{{asset('assets/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    const circles = document.querySelectorAll(".circle");
    circles.forEach((circle) => {
        circle.innerHTML = circle.textContent.replace(/\S/g, "<span>$&</span>");
        const elements = circle.querySelectorAll("span");
        for (let i = 0; i < elements.length; i++) {
            elements[i].style.transform = "rotate(" + i * 17 + "deg)";
        }
    });
</script>