<section class="carousel">

    <div class="slides">
        <img class="slide" src="{{ asset('images/carrossel/carrossel1.png') }}" alt="Carro 1">
        <img class="slide" src="{{ asset('images/carrossel/carrossel2.png') }}" alt="Carro 2">
        <img class="slide" src="{{ asset('images/carrossel/carrossel3.png') }}" alt="Carro 3">
    </div>

</section>

<script>
    let slideAtual = 0;
    const slides = document.querySelectorAll('.slide');

    function mostrarSlide(numero) {
        slides.forEach(slide => {
            slide.style.display = 'none';
        });

        slides[numero].style.display = 'block';
    }

    function avancar() {
        slideAtual++;

        if (slideAtual >= slides.length) {
            slideAtual = 0;
        }

        mostrarSlide(slideAtual);
    }

    function voltar() {
        slideAtual--;

        if (slideAtual < 0) {
            slideAtual = slides.length - 1;
        }

        mostrarSlide(slideAtual);
    }

    mostrarSlide(slideAtual);

    setInterval(avancar, 5000);
</script>