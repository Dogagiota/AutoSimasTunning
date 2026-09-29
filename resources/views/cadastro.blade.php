<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro | SIMASTUNNING</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .area-cadastro {
            min-height: 700px;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 40px 0;
        }

        .cadastro-box {
            width: 100%;
            max-width: 500px;

            background-color: white;

            padding: 35px;

            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        .cadastro-box h1 {
            margin-top: 0;
            text-align: center;
        }

        .cadastro-box .subtitulo {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
        }

        .campo {
            margin-bottom: 20px;
        }

        .campo label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .campo input {
            width: 100%;
            padding: 12px;

            border: 1px solid #ccc;

            font-size: 16px;
            box-sizing: border-box;
        }

        .campo input:focus {
            outline: none;
            border-color: #0A8967;
        }

        .btn-cadastro {
            width: 100%;
            padding: 14px;

            border: none;

            background-color: #0A8967;
            color: white;

            font-size: 17px;
            font-weight: bold;

            cursor: pointer;
        }

        .btn-cadastro:hover {
            background-color: #09C184;
        }

        .login {
            text-align: center;
            margin-top: 25px;
        }

        .login a {
            color: #0A8967;
        }
    </style>
</head>

<body>

    <x-header />

    <main class="area-cadastro">

        <div class="cadastro-box">

            <h1>Criar conta</h1>

            <p class="subtitulo">
                Cadastre-se na SIMASTUNNING
            </p>

            <form>

                <div class="campo">
                    <label for="nome">Nome completo</label>

                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome"
                        required
                    >
                </div>


                <div class="campo">
                    <label for="email">E-mail</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                        required
                    >
                </div>


                <div class="campo">
                    <label for="telefone">Telefone</label>

                    <input
                        type="tel"
                        id="telefone"
                        name="telefone"
                        placeholder="(00) 00000-0000"
                        required
                    >
                </div>


                <div class="campo">
                    <label for="senha">Senha</label>

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Crie uma senha"
                        required
                    >
                </div>


                <div class="campo">
                    <label for="confirmar_senha">
                        Confirmar senha
                    </label>

                    <input
                        type="password"
                        id="confirmar_senha"
                        name="confirmar_senha"
                        placeholder="Digite novamente sua senha"
                        required
                    >
                </div>


                <button
                    type="submit"
                    class="btn-cadastro"
                >
                    Criar conta
                </button>

            </form>


            <p class="login">
                Já possui uma conta?

                <a href="{{ url('/login') }}">
                    Fazer login
                </a>
            </p>

        </div>

    </main>

    <x-footer />

</body>
</html>