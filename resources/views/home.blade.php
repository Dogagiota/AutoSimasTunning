<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMASTUNNING</title>

    <style>
    body {
        margin: 0;
    }

    /* CARROSSEL */
    .carousel {
        width: 90%;
        max-width: 1600px;
        margin: 20px auto;
        overflow: hidden;
    }

    .slide {
        width: 100%;
        height: 450px;
        object-fit: cover;
        display: none;
    }

    /* ÁREA DOS CARROS */
    .carros {
        width: 95%;
        max-width: 1500px;
        margin: 40px auto;

        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
    }

    /* CARD INTEIRO */
    .card-carro {
        width: 100%;
        min-height: 550px;

        border: 1px solid #ddd;
        background-color: white;

        padding: 15px;
        box-sizing: border-box;

        text-decoration: none;
        color: black;

        cursor: pointer;
    }

    /* FOTO DO CARRO */
    .card-carro img {
        width: 100%;
        height: 350px;

        object-fit: cover;
        display: block;
    }

    /* NOME */
    .card-carro h3 {
        font-size: 24px;
        margin: 18px 0;
    }

    /* INFORMAÇÕES */
    .card-carro p {
        margin: 10px 0;
        font-size: 16px;
    }

    /* VER DETALHES */
    .card-carro span {
        display: inline-block;
        margin-top: 15px;
    }

    /* EFEITO AO PASSAR O MOUSE */
    .card-carro:hover {
        border-color: #0A8967;
    }
</style>  

</head>

<body>

    <x-header />

    <x-carousel />

    <main>
        <h2>Veículos disponíveis</h2>

        <section class="carros">

<a href="{{ url('/carros/1') }}" class="card-carro">
    <img src="{{ asset('images/carros/SAVEIRO TURBO/1.webp') }}" alt="Carro">

    <h3>Saveiro Turbo</h3>

    <p>Marca: Volkswagen</p>
    <p>Ano/Modelo: 2001/2001</p>
    <p>Preço: R$ 89.900,00</p>
    <p>Potência: 510whp</p>
    <p>Motor: Ap 2.0 </p>

</a>

<a href="{{ url('/carros/2') }}" class="card-carro">
    <img src="{{ asset('images/carros/CIVIC HATCH/1.webp') }}" alt="Carro">

    <h3>Civici Hatch</h3>

    <p>Marca: Honda</p>
    <p>Ano/Modelo: 1993/1993</p>
    <p>Preço: R$ 150.000,00</p>
    <p>Potência: 200</p>
    <p>Motor: K20</p>

</a>

<a href="{{ url('/carros/3') }}" class="card-carro">
    <img src="{{ asset('images/carros/A3/1.webp') }}" alt="Carro">

    <h3>Audi A3</h3>

    <p>Marca: Audi </p>
    <p>Ano/Modelo: 2012/2012</p>
    <p>Preço: R$ 225.000,00</p>
    <p>Potência: 310whp</p>
    <p>Motor: 2.0 TSI</p>

</a>

<a href="{{ url('/carros/4') }}" class="card-carro">
    <img src="{{ asset('images/carros/ASTRA/1.webp') }}" alt="Carro">

    <h3>Astra</h3>

    <p>Marca: Chevrolet</p>
    <p>Ano/Modelo: 1999/1999</p>
    <p>Preço: R$ 66.900,00</p>
    <p>Potência: 336whp</p>
    <p>Motor: 2.0 16v turbo</p>

</a>

<a href="{{ url('/carros/5') }}" class="card-carro">
    <img src="{{ asset('images/carros/GOL/1.webp') }}" alt="Carro">

    <h3>Gol Turbo</h3>

    <p>Marca: VOLKSWAGEN</p>
    <p>Ano/Modelo: 2006/2006</p>
    <p>Preço: R$ 80.000,00</p>
    <p>Potência: 700cv</p>
    <p>Motor: Cabeçote estagio 2 salsa</p>

</a>

<a href="{{ url('/carros/6') }}" class="card-carro">
    <img src="{{ asset('images/carros/VOYAGE/1.webp') }}" alt="Carro">

    <h3>Voyage GL Turbo</h3>

    <p>Marca: Volkswagen</p>
    <p>Ano/Modelo: 1990/1990</p>
    <p>Preço: R$ 145.900,00</p>
    <p>Potência: APROX. 1000cv rodando com metanol</p>
    <p>Motor: 2.0 bloco baixo com plat e macal</p>

</a>

<a href="{{ url('/carros/7') }}" class="card-carro">
    <img src="{{ asset('images/carros/206/1.webp') }}" alt="Carro">

    <h3>Peugeot 206 Rally</h3>

    <p>Marca: Peugeot</p>
    <p>Ano/Modelo: 2003/2003</p>
    <p>Preço: R$ 48.500,00</p>
    <p>Potência: 110CV</p>
    <p>Motor: 1.6 16v</p>

</a>

<a href="{{ url('/carros/8') }}" class="card-carro">
    <img src="{{ asset('images/carros/320i/1.webp') }}" alt="Carro">

    <h3>BMW 320i Turbo</h3>

    <p>Marca: BMW</p>
    <p>Ano/Modelo: 2017/2017</p>
    <p>Preço: R$ 204.990,00</p>
    <p>Potência: 280whp</p>
    <p>Motor: N20 2.0 Turbo</p>

</a>

<a href="{{ url('/carros/9') }}" class="card-carro">
    <img src="{{ asset('images/carros/CARAVAN/1.webp') }}" alt="Carro">

    <h3>Caravan Deluxe</h3>

    <p>Marca: Chevrolet</p>
    <p>Ano/Modelo: 1978/1978</p>
    <p>Preço: R$ 198.000,00</p>
    <p>Potência: O suficiente para se divertir e se fizer cagada ser preso</p>
    <p>Motor: 5.1 a Álcool Cursado</p>
</a>


</section>
    </main>

    <x-footer />

</body>

</html>