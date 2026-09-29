<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Carrinho | SIMASTUNNING</title>

    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .carrinho {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .carrinho h1 {
            margin-bottom: 30px;
        }

        .carrinho-vazio {
            background-color: white;
            padding: 40px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .carrinho-vazio a {
            display: inline-block;

            margin-top: 15px;
            padding: 12px 20px;

            background-color: #0A8967;
            color: white;

            text-decoration: none;
        }


        /* ITEM */

        .item-carrinho {
            display: flex;
            align-items: center;

            gap: 25px;

            background-color: white;

            border: 1px solid #ddd;

            padding: 20px;
            margin-bottom: 20px;
        }

        .item-carrinho img {
            width: 220px;
            height: 150px;

            object-fit: cover;
        }

        .informacoes {
            flex: 1;
        }

        .informacoes h2 {
            margin-top: 0;
        }

        .informacoes p {
            font-size: 17px;
        }

        .preco {
            color: #0A8967;
            font-size: 22px !important;
            font-weight: bold;
        }


        /* REMOVER */

        .btn-remover {
            padding: 12px 18px;

            border: none;

            background-color: #c0392b;
            color: white;

            cursor: pointer;
        }

        .btn-remover:hover {
            background-color: #a93226;
        }


        /* RESUMO */

        .resumo {
            background-color: white;

            border: 1px solid #ddd;

            padding: 25px;

            margin-top: 30px;

            text-align: right;
        }

        .resumo h2 {
            color: #0A8967;
        }

        .btn-finalizar {
            display: inline-block;

            padding: 15px 30px;

            border: none;

            background-color: #0A8967;
            color: white;

            font-size: 17px;
            font-weight: bold;

            cursor: pointer;
        }

        .btn-finalizar:hover {
            background-color: #09C184;
        }


        @media (max-width: 700px) {

            .item-carrinho {
                flex-direction: column;
                align-items: stretch;
            }

            .item-carrinho img {
                width: 100%;
                height: 250px;
            }

        }

    </style>

</head>

<body>

    <x-header />


    <main class="carrinho">

        <h1>Meu Carrinho</h1>


        @if(count($carrinho) == 0)

            <div class="carrinho-vazio">

                <h2>Seu carrinho está vazio</h2>

                <p>
                    Escolha um veículo para adicionar ao carrinho.
                </p>

                <a href="{{ url('/') }}">
                    Ver veículos
                </a>

            </div>

        @else


            @php
                $total = 0;
            @endphp


            @foreach($carrinho as $item)

                @php

                    $valor = str_replace('.', '', $item['preco']);
                    $valor = str_replace(',', '.', $valor);

                    $total += (float) $valor;

                @endphp


                <div class="item-carrinho">

                    <img
                        src="{{ asset($item['imagem']) }}"
                        alt="{{ $item['nome'] }}"
                    >


                    <div class="informacoes">

                        <h2>
                            {{ $item['nome'] }}
                        </h2>

                        <p>
                            <strong>Marca:</strong>
                            {{ $item['marca'] }}
                        </p>

                        <p class="preco">
                            R$ {{ $item['preco'] }}
                        </p>

                    </div>


                    <form
                        action="{{ url('/carrinho/remover/' . $item['id']) }}"
                        method="POST"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="btn-remover"
                        >
                            Remover
                        </button>

                    </form>

                </div>

            @endforeach


            <div class="resumo">

                <p>Valor total</p>

                <h2>
                    R$
                    {{ number_format($total, 2, ',', '.') }}
                </h2>

                <button class="btn-finalizar">
                    Finalizar compra
                </button>

            </div>


        @endif

    </main>


    <x-footer />

</body>

</html>