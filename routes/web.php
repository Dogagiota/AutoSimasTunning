<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
});


/*
|--------------------------------------------------------------------------
| CADASTRO
|--------------------------------------------------------------------------
*/

Route::get('/cadastro', function () {
    return view('cadastro');
});


/*
|--------------------------------------------------------------------------
| DETALHES DOS CARROS
|--------------------------------------------------------------------------
*/

Route::get('/carros/{id}', function ($id) {

    $carros = [


        1 => [
            'nome' => 'Saveiro Turbo',
        
            'marca' => 'Volkswagen',
            'modelo' => 'Saveiro',
            'versao' => 'Turbo',
        
            'ano' => '2001/2001',
            'preco' => '89.900,00',
        
            'quilometragem' => '187.000 km',
            'cor' => 'Branco',
            'combustivel' => 'Gasolina',
            'cambio' => 'Manual',
        
            'potencia' => '510whp',
            'motor' => 'AP 2.0',
        
            'pasta' => 'Images/carros/SAVEIRO TURBO',
        
            'descricao' => 'Volkswagen Saveiro
            Motor: Ap 2.0
            Potência: 510whp
            Pistão AFP 83,5mm 800cv
            Biela Pure 800cv
            Oring Bloco Peccins
            Junta cabeçote
            Cabeçote Fluxo cruzado
            Admissão Stronger
            TBI Expert 60mm
            Pressurização Alumínio
            Coletor Escape inox
            Escape inox capô (posso mandar com escape pra baixo)
            Capo de carbono 4kg (tenho original)
            Turbina HX40 com inconel
            Wastegate W45 inox
            Todas as conexões AN
            Linha combustível inox
            Balança tubular
            Camber plate
            Dosador MTR
            Bico Deka 80
            Radiador Leonelo
            Tampa de válvula Indutech
            Embreagem ceramic power
            Volante FT
            Alavanca poke parts (tenho original)
            Banco concha Metalhorse (tenho original)
            Rodas prostar com pneu Toyo R888
            Shift light odg
            Suspensão feita
            Buchas agregado alumínio
            Roda fônica
            CO2
            3 ps10
            Documentação legalizado turbo PR',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        2 => [
            'nome' => 'Civic Hatch',
        
            'marca' => 'Honda',
            'modelo' => 'Civic',
            'versao' => 'Hatchback',
        
            'ano' => '1993/1993',
            'preco' => '150.000,00',
        
            'quilometragem' => '10.000 km',
            'cor' => 'Vermelho',
            'combustivel' => 'Gasolina',
            'cambio' => 'Manual',
        
            'potencia' => '200whp',
            'motor' => 'K20',
        
            'pasta' => 'Images/carros/CIVIC HATCH',
        
            'descricao' => 'Honda Civic
            Versão: HATCHBACK
            Motor: K20
            Potência: 200
            Civic hatch Swap K20Z3
            Placa preta
            Capo fibra carbono
            Retrovisor fibra carbono
            Aero fibra carbono
            Suporte motor Hybrid Racing
            Shifter cabe Hybrid Racing
            Shifter billet
            Bielas skunk2 Alpha
            Pistão Nippon Racing
            Bronzinas ACL
            Bomba óleo TypeS
            Carte Accord
            Bicos injetores Bosch 65lbs
            FT550
            Nano pro
            Elétrica completa de injeção
            Conector CPC
            Coletor escape inox
            Escapamento full inox ressonador e abafador
            Radiador alumínio
            Roda rodera 15
            Pneus semi slick
            Pinça e disco SI 300mm
            Banco SI suede
            Interior all black
            Ar cond. Gelando
            Embreagem Exedy
            Lanterna red clear
            Farol lente lisa
            Setas âmbar',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        3 => [
            'nome' => 'Audi A3',
        
            'marca' => 'Audi',
            'modelo' => 'A3',
            'versao' => 'TSI',
        
            'ano' => '2012/2012',
            'preco' => '225.000,00',
        
            'quilometragem' => '4.748 km',
            'cor' => 'Prata',
            'combustivel' => 'Gasolina',
            'cambio' => 'Automático',
        
            'potencia' => '310whp',
            'motor' => ' 2.0 TSI',
        
            'pasta' => 'Images/carros/A3',
        
            'descricao' => 'Audi A3 Sport
            Versão: DTCC
            Motor: 2.0 TSI
            Potência: 310whp
            Documentação: NF de Fábrica
            Um pouco da história:
            O A3 DTCC (Driver Touring Car Cup), marcou a história do automobilismo brasileiro em 2011, foi a primeira vez que a montadora alemã chancelou um campeonato monomarca em todo o mundo. O carro protagonizou o campeonato e turismo nacional nos anos de 2011 e 2012.
            Estrutura:
            O Roll Cage (santo antônio) homologado pela CBA é feito de estrutura de aço, ele que garante a integridade do habitáculo em caso de eventuais acidentes. Além disso o carro conta com sistema de macaco pneumático (Air Jacks), facilitando a vida dos mecânicos nos boxes, garantindo a troca de pneus mais rápida.
            Motor e Freios:
            O 2.0 Turbo foi Modificado na parte eletrônica para render cerca de 200 cavalos de potência com estabilidade térmica sob altas temperaturas. Os freios são originais, com discos soltados e pastilhas de competição com sistema ABS ativo.
            Câmbio e Alívio de Peso:
            A transmissão automatizada original deu lugar a um câmbio manual de seis marchas. Houve Exclusão de itens de conforto, as peças de lataria foram substituídas por fibra, os vidros laterais e traseiros deram lugar aos Lexan, os bancos, volante e cintos foram trocados por itens de competição da marca italiana Sparco. Com tudo isso, o carro ficou com aproximadamente 980kg, garantindo uma relação peso X potência excelente para as pistas.
            Suspensão, Rodas e Pneus:
            A suspensão é da marca Alemã KW, sendo independente da dianteira com camber plate e multilink na traseira, todas com regulagem de altura e pressão dos amortecedores. As Rodas são nacionais da marca Scorro, foram feitas especialmente para a categoria, usando um material mais resistente e leve para as pistas, tudo isso aliado aos Pneus Slick Pirelli PZero 235/645/18.
            Upgrades:
            Freios Flutuantes Willwood 6 pistões
            Intake de carbono APR
            Mapa APR STG
            K04 APR
            310 WHP, 44,5Kgf.m
            Rodas VMR V710FF + Pneus Pirelli PZero Slick 265/645/18 (Dot 2025)
            Instalado Banco Sparco carona com cinto de segurança Sparco.
            Acompanha no Valor
            Jogo de Lexan Reserva, verde by Orlando Belmonte Júnior
            Aparelho RaceBox para medições de tempo
            Rodas forjadas ENKEI 18 + Pneus de Chuva Pirelli 235/645/18 (Novos)
            Carretinha de reboque de 1 eixo com sistema basculante para transporte do carro.
            Carro totalmente revisado, foram investidos mais de R$100 mil reais em revisões, upgrades e restauro.
            Oportunidade única, carro muito raro numa apresentação impecável.
            READY TO RACE',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        4 => [
            'nome' => 'Astra',
        
            'marca' => 'Chevrolet',
            'modelo' => 'Astra',
            'versao' => 'GLS Turbo',
        
            'ano' => '1999/1999',
            'preco' => '66.900,00',
        
            'quilometragem' => '111.111 km',
            'cor' => 'Branco',
            'combustivel' => 'Gasolina',
            'cambio' => 'Manual',
        
            'potencia' => '336whp',
            'motor' => '2.0 16v turbo',
        
            'pasta' => 'Images/carros/ASTRA',
        
            'descricao' => 'Chevrolet Astra GLS
            Motor: 2.0 16v turbo
            Potência: 336whp
            repaginado pelo modelo 2011
            suspensão fixa
            motor forjado
            bielas Régis Racing 1000cv
            pistões AFP
            reforço no bloco galeria de água
            Oring JE,
            prisioneiro cabeçote
            turbina Aviônics 50/48
            intercooler
            bicos 142lbs
            2 bomba mercedez
            Cash tank RGTX
            FT450
            Leitor de sonda nano FT
            embreagem Displatec pedal leve
            pneus novos,
            volante FT
            alavanca engate rapido
            câmbio F23
            336whp com 1.5bar acertado no Dino',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        5 => [
            'nome' => 'Gol Turbo',
        
            'marca' => 'Volkswagen',
            'modelo' => 'Gol',
            'versao' => 'g4',
        
            'ano' => '2006/2006',
            'preco' => '80.000,00',
        
            'quilometragem' => '6.000 km',
            'cor' => 'preto',
            'combustivel' => 'Gasolina',
            'cambio' => 'Manual',
        
            'potencia' => '700whp',
            'motor' => 'Cabeçote estagio 2 salsa',
        
            'pasta' => 'Images/carros/GOL',
        
            'descricao' => 'Volkswagen Gol G4
            Motor:Cabeçote estigio 2 salsa
            Pistão 1000cv
            Biela 1000cv
            Pino forjado
            Virabrequim de Golf
            Câmbio forjado da 1º a 4º
            Bloqueante sapinho
            Carro tem tudo de ponta
            Potência: 700cv
            ',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        6 => [
            'nome' => 'Voyage GL Turbo',
        
            'marca' => 'Volkswagen',
            'modelo' => 'Voyage',
            'versao' => 'GL',
        
            'ano' => '1990/1990',
            'preco' => '145.900,00',
        
            'quilometragem' => '100.000 km',
            'cor' => 'Verde',
            'combustivel' => 'Gasolina',
            'cambio' => 'Manual',
        
            'potencia' => ' APROX. 1000cv rodando com metanol',
            'motor' => 'AP 2.0',
        
            'pasta' => 'Images/carros/VOYAGE',
        
            'descricao' => 'VW VOYAGE GL
            Motor: 2.0
            Potência: APROX. 1000cv rodando com metanol
            Pronto para rodar em qualquer lista
            Turbina PSR 7975
            Cabeçote nível 3 japa Cabeçote
            Coletor de admissão Neis
            8 bicos Deca 225lbs
            Bomba de combustível mecânica de 10 galões
            Interculer Super Cooler
            Motor 2.0 bloco baixo com plat e macal
            Pistão AFP caixa branca 1.200cv
            Biela MTR 1.200 cv
            Embreagem Cerâmic Power centrifuga impulse
            FT 550
            Cambio BF forjado 1° a 4° engate rápido
            Eixo ponta de ducato
            Bolachao de ômega
            Suspensão completa Dragster
            Eixo traseiro AG
            Rodas Weld Magnum tala 8 dianteira
            Rodas Weld Magnum tala 4,5 traseira cubo rápido
            Pneu dianteiro AG
            Pneu traseiro AG
            Freios a disco Billet traseiro line lock
            Alavanca de freio hidráulica
            Alavanca AG engate rápido
            Paraquedas Spot Machine
            Tanque de combustível 20 lts inox
            Santo Antônio/ Nilson Flores
            Banco de Alumínio Dominator
            Volante Fuel Tech saque rápido
            Linha de incêndio inteiro feito
            Eletrica Nilson Flores
            Cintos 4 pontas simpson',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        7 => [
            'nome' => 'Peugeot 206 Rally',
        
            'marca' => 'Peugeot',
            'modelo' => '206',
            'versao' => 'Rally',
        
            'ano' => '2003/2003',
            'preco' => '48.500,00',
        
            'quilometragem' => '71.125 km',
            'cor' => 'Branco',
            'combustivel' => 'Gasolina',
            'cambio' => 'Manual',
        
            'potencia' => '110cv',
            'motor' => '1.6 16v',
        
            'pasta' => 'Images/carros/206',
        
            'descricao' => 'Carro feito pela própria preparadora da Peugeot para correr a copa rally, foi comprado zero quilômetro montado do jeito que está.
            Bancos sparco
            Volante sparco
            Cinto cinco pontas sabert
            Roll cage original Peugeot
            Regulagem de freio traseiro original no interior do carro
            Manômetro de pressão da linha de combustível
            Carro bem esperto, gira 8 mil rpm original
            Documentação: regularizado',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        8 => [
            'nome' => 'BMW 320i Turbo',
        
            'marca' => 'BMW',
            'modelo' => '320i',
            'versao' => 'Turbo',
        
            'ano' => '2017/2017',
            'preco' => '204.990,00',
        
            'quilometragem' => '103.000 km',
            'cor' => 'Roxo',
            'combustivel' => 'Gasolina',
            'cambio' => 'Manual',
        
            'potencia' => '280whp',
            'motor' => 'N20 2.0 Turbo',
        
            'pasta' => 'Images/carros/320i',
        
            'descricao' => 'BMW 320i
            SPORT M WIDEBODY MDR 01
            pintura exclusiva do projeto
            Motor: N20 2.0 Turbo
            Potência: 280whp
            Kit M Sport original de fábrica
            Teto solar
            Teto interno preto
            Acabamentos e detalhes M originais
            Display/multimídia maior
            Volante M original
            Widebody MDR 01
            Cor exclusiva desenvolvida especialmente para o projeto
            Carro de exposição
            Projeto legalizado para rodar na rua
            Stage 2+
            Downpipe
            Escapamento full inox
            Ponteiras Luzian
            Intake/filtro de ar Haustech
            Válvula DV
            Intercooler Metal Horse
            Suspensão a ar Castor Air Ride Black
            Sistema com 2 cilindros
            2 compressores de ar
            Rodas Advan GT customizadas
            Rodas tala 10 dianteira / 11 traseira
            Capô em PPF carbono Teckwrap
            Aero Ducktail
            Faróis customizados
            Lanternas Dragon Style LED
            Detalhes externos em preto
            Neon/iluminação externa
            Neon/iluminação interna',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

        9 => [
            'nome' => 'Caravan Deluxe',
        
            'marca' => 'Chevrolet',
            'modelo' => 'Caravan',
            'versao' => 'Deluxe',
        
            'ano' => '1978/1978',
            'preco' => '198.000,00',
        
            'quilometragem' => '1.000 km',
            'cor' => 'Bege Areia',
            'combustivel' => 'Álcool',
            'cambio' => 'Manual',
        
            'potencia' => 'o suficiente para se divertir e se fizer cagada ser preso',
            'motor' => '6 cil. (5100)',
        
            'pasta' => 'Images/carros/Caravan',
        
            'descricao' => 'Chevrolet Caravan Deluxe
            KM: 1000 depois de montada
            Motor: 6 cil. (5100)
            Motor Cursado 5.1 de Alto Nível!
            Para quem busca exclusividade, força e um carro montado rigorosamente sem economia de recursos. Um clássico na cor Bege Areia, com histórico completo de notas fiscais e acerto fino realizado pelo mestre Heraldo Bueno. Potência real para diversão garantida, sem mentiras de dinamômetro.
            Destaques do Projeto:
            Motor 5.1 a Álcool Cursado (regularizado e cadastrado no documento)
            Pistões e bielas forjados com virabrequim de curso sob encomenda
            Injeção FuelTech FT 550 em modo sequencial e elétrica nova em malha náutica
            Admissão Quadrijet Moroso BBK II (item raríssimo)
            Câmbio 260F (Dodge) e Diferencial Dana 44
            Controle de tração ativo via sensores de velocidade de roda
            Controle de largada com acionamento via Bluetooth
            Acessórios:
            Faróis de milha originais Cibié Sierra II
            Rodas US Wheels (15x6 na frente e 15x7 na traseira)
            Suspensão de alta performance Impacto com Ladder Bar
            Sistema de freio a disco nas 4 rodas
            Volante esportivo Grant
            Documentação Perfeita:
            Licenciado 2026
            Sem débitos ou restrições
            DUT em branco pronto para transferência
            Valores e Condições:
            Trocas: Outro valor (preferência por veículos automáticos)
            Potência: o suficiente para se divertir e se fizer cagada ser preso',
        
            'pagamento' => 'PIX, transferência bancária, cartão ou financiamento.',
        
            'parcelamento' => 'Parcelamento disponível conforme as condições de pagamento.'
        ],

    ];

    if (!isset($carros[$id])) {
        abort(404);
    }

    $carro = $carros[$id];

    return view('carros.detalhes', compact('carro'));

});
/*
|--------------------------------------------------------------------------
| CARRINHO
|--------------------------------------------------------------------------
*/

Route::get('/carrinho', function () {

    $carrinho = session()->get('carrinho', []);

    return view('carrinho', compact('carrinho'));
});


Route::post('/carrinho/adicionar', function (\Illuminate\Http\Request $request) {

    $carro = [
        'id' => $request->id,
        'nome' => $request->nome,
        'marca' => $request->marca,
        'preco' => $request->preco,
        'imagem' => $request->imagem,
    ];

    $carrinho = session()->get('carrinho', []);

    $carrinho[$carro['id']] = $carro;

    session()->put('carrinho', $carrinho);

    return redirect('/carrinho');
});


Route::post('/carrinho/remover/{id}', function ($id) {

    $carrinho = session()->get('carrinho', []);

    if (isset($carrinho[$id])) {
        unset($carrinho[$id]);
    }

    session()->put('carrinho', $carrinho);

    return redirect('/carrinho');
});
