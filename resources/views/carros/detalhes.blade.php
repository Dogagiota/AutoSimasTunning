<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $carro['nome'] }} | SIMASTUNNING</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .detalhes-carro {
            width: 90%;
            max-width: 1300px;
            margin: 40px auto;
        }

        .voltar {
            display: inline-block;
            margin-bottom: 20px;
            color: #0A8967;
            text-decoration: none;
        }

        .conteudo-carro {
            display: flex;
            gap: 40px;
        }

        /* =========================
           GALERIA
        ========================= */

        .galeria {
            width: 65%;
        }

        .imagem-principal {
            position: relative;
            width: 100%;
        }

        .imagem-principal img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
        }

        /* SETAS */

        .seta {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);

            width: 45px;
            height: 60px;

            border: none;
            background: rgba(0, 0, 0, 0.5);
            color: white;

            font-size: 35px;
            cursor: pointer;
        }

        .seta:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .anterior {
            left: 10px;
        }

        .proxima {
            right: 10px;
        }

        /* MINIATURAS */

        .miniaturas {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 8px;

            margin-top: 10px;
        }

        .miniatura {
            width: 100%;
            height: 90px;

            object-fit: cover;

            cursor: pointer;
            box-sizing: border-box;

            border: 2px solid transparent;
        }

        .miniatura:hover {
            border-color: #09C184;
        }

        .miniatura.ativa {
            border-color: #0A8967;
        }

        /* =========================
           INFORMAÇÕES
        ========================= */

        .informacoes-carro {
            width: 35%;
        }

        .informacoes-carro h1 {
            margin-top: 0;
            font-size: 32px;
        }

        .informacoes-carro p {
            font-size: 18px;
            margin: 15px 0;
        }

        .preco {
            font-size: 27px !important;
            font-weight: bold;
            color: #0A8967;
        }

        .informacoes-carro hr {
            margin: 25px 0;
            border: 0;
            border-top: 1px solid #ddd;
        }

        /* RESPONSIVO */

        @media (max-width: 850px) {

            .conteudo-carro {
                flex-direction: column;
            }

            .galeria,
            .informacoes-carro {
                width: 100%;
            }

            .imagem-principal img {
                height: 350px;
            }

            .miniaturas {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>

</head>

<body>

    <x-header />


    <main class="detalhes-carro">

        <a href="{{ url('/') }}" class="voltar">
            ← Voltar
        </a>


        <div class="conteudo-carro">


            <!-- =====================
                 GALERIA
            ====================== -->

            <div class="galeria">

                <div class="imagem-principal">

                    <img
                        id="imagemPrincipal"
                        src="{{ asset($carro['pasta'] . '/1.webp') }}"
                        alt="{{ $carro['nome'] }}"
                    >

                    <button
                        class="seta anterior"
                        onclick="voltarImagem()"
                    >
                        ‹
                    </button>

                    <button
                        class="seta proxima"
                        onclick="proximaImagem()"
                    >
                        ›
                    </button>

                </div>


                <!-- MINIATURAS -->

                <div class="miniaturas">

                    @for ($i = 1; $i <= 9; $i++)

                        <img
                            src="{{ asset($carro['pasta'] . '/' . $i . '.webp') }}"
                            class="miniatura {{ $i == 1 ? 'ativa' : '' }}"
                            onclick="selecionarImagem({{ $i }})"
                            alt="Foto {{ $i }} de {{ $carro['nome'] }}"
                        >

                    @endfor

                </div>

            </div>


            <!-- =====================
                 INFORMAÇÕES
            ====================== -->

                <div class="informacoes-carro">

            <h1>{{ $carro['nome'] }}</h1>

            <div class="dados-veiculo">

            <p>
                <strong>Marca:</strong>
                {{ $carro['marca'] }}
            </p>

            <p>
                <strong>Modelo:</strong>
                {{ $carro['modelo'] }}
            </p>

            <p>
                <strong>Versão:</strong>
                {{ $carro['versao'] }}
            </p>

            <p>
                <strong>Ano:</strong>
                {{ $carro['ano'] }}
            </p>

            <p>
                <strong>Quilometragem:</strong>
                {{ $carro['quilometragem'] }}
            </p>

            <p>
                <strong>Cor:</strong>
                {{ $carro['cor'] }}
            </p>

            <p>
                <strong>Combustível:</strong>
                {{ $carro['combustivel'] }}
            </p>

            <p>
                <strong>Câmbio:</strong>
                {{ $carro['cambio'] }}
            </p>

            <p>
                <strong>Motor:</strong>
                {{ $carro['motor'] }}
            </p>

            <p>
                <strong>Potência:</strong>
                {{ $carro['potencia'] }}
            </p>

            </div>


            <p class="preco">
            R$ {{ $carro['preco'] }}
            </p>


            <hr>


            <h3>Descrição</h3>

            <p>
            {{ $carro['descricao'] }}
            </p>

            <hr>


            <h3>Opções de pagamento</h3>

            <p>
            {{ $carro['pagamento'] }}
            </p>


            <h3>Opções de parcelamento</h3>

            <p>
            {{ $carro['parcelamento'] }}
            </p>


            <form action="{{ url('/carrinho/adicionar') }}" method="POST">
            @csrf

            <input
                type="hidden"
                name="id"
                value="{{ $carro['nome'] }}"
            >

            <input
                type="hidden"
                name="nome"
                value="{{ $carro['nome'] }}"
            >

            <input
                type="hidden"
                name="marca"
                value="{{ $carro['marca'] }}"
            >

            <input
                type="hidden"
                name="preco"
                value="{{ $carro['preco'] }}"
            >

            <input
                type="hidden"
                name="imagem"
                value="{{ $carro['pasta'] }}/1.webp"
            >

            <button
                type="submit"
                class="btn-carrinho"
            >
                Adicionar ao carrinho
            </button>

            </form>

            </div>

        </div>

    </main>


    <x-footer />


    <script>

        let imagemAtual = 1;

        const totalImagens = 9;

        const pasta = @json(asset($carro['pasta']));


        function selecionarImagem(numero) {

            imagemAtual = numero;

            atualizarImagem();

        }


        function proximaImagem() {

            imagemAtual++;

            if (imagemAtual > totalImagens) {
                imagemAtual = 1;
            }

            atualizarImagem();

        }


        function voltarImagem() {

            imagemAtual--;

            if (imagemAtual < 1) {
                imagemAtual = totalImagens;
            }

            atualizarImagem();

        }


        function atualizarImagem() {

            const imagemPrincipal =
                document.getElementById('imagemPrincipal');

            imagemPrincipal.src =
                pasta + '/' + imagemAtual + '.webp';


            const miniaturas =
                document.querySelectorAll('.miniatura');


            miniaturas.forEach(function(miniatura, indice) {

                miniatura.classList.remove('ativa');

                if (indice === imagemAtual - 1) {
                    miniatura.classList.add('ativa');
                }

            });

        }

    </script>

</body>

</html>