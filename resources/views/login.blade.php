<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | SIMASTUNNING</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .area-login {
            min-height: 650px;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 100%;
            max-width: 400px;

            background-color: white;

            padding: 35px;

            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        .login-box h1 {
            margin-top: 0;
            text-align: center;
        }

        .login-box .subtitulo {
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

        .btn-login {
            width: 100%;
            padding: 14px;

            border: none;

            background-color: #0A8967;
            color: white;

            font-size: 17px;
            font-weight: bold;

            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #09C184;
        }

        .cadastro {
            text-align: center;
            margin-top: 25px;
        }

        .cadastro a {
            color: #0A8967;
        }
    </style>
</head>

<body>

    <x-header />

    <main class="area-login">

        <div class="login-box">

            <h1>Login</h1>

            <p class="subtitulo">
                Entre na sua conta SIMASTUNNING
            </p>

            <form>

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
                    <label for="senha">Senha</label>

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha"
                        required
                    >
                </div>

                <button
                    type="submit"
                    class="btn-login"
                >
                    Entrar
                </button>

            </form>

            <p class="cadastro">
                Ainda não possui uma conta?

                <a href="{{ url('/cadastro') }}">
                    Cadastre-se
                </a>
            </p>

        </div>

    </main>

    <x-footer />

</body>
</html>