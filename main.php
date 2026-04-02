<?php
$filmes = [
    [
        "titulo" => "DUNA: PARTE 2 (2024)",
        "sinopse" => "Paul Atreides vive entre os Fremen de Arrakis e descobre seu destino como líder messiânico.",
        "resumo" => "🔥 Guerra épica no deserto com vermes gigantes!",
        "trailer" => "https://www.youtube.com/embed/Way9Dexny3w"
    ],
    [
        "titulo" => "DEADPOOL & WOLVERINE (2024)",
        "sinopse" => "Wade Wilson entra no multiverso e se junta ao Wolverine.",
        "resumo" => "🔥 Humor + violência + multiverso!",
        "trailer" => "https://www.youtube.com/embed/73_1biulkYk"
    ],
    [
        "titulo" => "FURIOSA: MAD MAX SAGA (2024)",
        "sinopse" => "A origem da guerreira Furiosa em um mundo pós-apocalíptico.",
        "resumo" => "🔥 Perseguições INSANAS!",
        "trailer" => "https://www.youtube.com/embed/XJMuhwVlca4"
    ],
    [
        "titulo" => "OPPENHEIMER (2023)",
        "sinopse" => "A história do cientista que criou a bomba atômica.",
        "resumo" => "🔥 7 Oscars e atuação absurda!",
        "trailer" => "https://www.youtube.com/embed/uYPbbksJxIg"
    ],
    [
        "titulo" => "BARBIE (2023)",
        "sinopse" => "Barbie sai do mundo perfeito e descobre a realidade.",
        "resumo" => "🔥 Fenômeno mundial!",
        "trailer" => "https://www.youtube.com/embed/pBk4NYhWNMM"
    ],
    [
        "titulo" => "GUARDIÕES VOL. 3 (2023)",
        "sinopse" => "Rocket revela seu passado enquanto o grupo luta para salvá-lo.",
        "resumo" => "🔥 Final emocionante!",
        "trailer" => "https://www.youtube.com/embed/u3V5KDHRQvk"
    ],
    [
        "titulo" => "JOHN WICK 4 (2023)",
        "sinopse" => "John Wick enfrenta a Alta Cúpula em uma guerra global.",
        "resumo" => "🔥 Ação brutal e coreografias perfeitas!",
        "trailer" => "https://www.youtube.com/embed/qEVUtrk8_B4"
    ],
    [
        "titulo" => "SPIDER-VERSE 2 (2023)",
        "sinopse" => "Miles Morales viaja pelo multiverso enfrentando novas ameaças.",
        "resumo" => "🔥 Animação INSANA!",
        "trailer" => "https://www.youtube.com/embed/cqGjhVJWtEg"
    ],
    [
        "titulo" => "TOP GUN: MAVERICK (2022)",
        "sinopse" => "Maverick treina pilotos para uma missão impossível.",
        "resumo" => "🔥 Aviões reais e ação absurda!",
        "trailer" => "https://www.youtube.com/embed/giXco2jaZ_4"
    ],
    [
        "titulo" => "EVERYTHING EVERYWHERE ALL AT ONCE (2022)",
        "sinopse" => "Uma mulher comum descobre múltiplos universos.",
        "resumo" => "🔥 Criatividade absurda e 7 Oscars!",
        "trailer" => "https://www.youtube.com/embed/wxN1T1uxQ2g"
    ]
];

$acao = $_GET['acao'] ?? '';
$filme_id = $_GET['filme'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CineFoda</title>
</head>

<body>

<h1>🎬 CINEFODA</h1>

<a href="?">Início</a> |
<a href="?acao=lista">Ver Filmes</a>

<hr>

<?php

// LISTA
if ($acao == "lista") {
    foreach ($filmes as $i => $f) {
        echo "<h3>{$f['titulo']}</h3>";
        echo "<a href='?acao=ver&filme=$i'>Ver detalhes</a>";
        echo "<hr>";
    }
}

// DETALHES
elseif ($acao == "ver" && isset($filmes[$filme_id])) {
    $f = $filmes[$filme_id];

    echo "<h2>{$f['titulo']}</h2>";

    echo "<p><b>📖 Sinopse:</b><br>{$f['sinopse']}</p>";
    echo "<p><b>🔥 Resumo:</b><br>{$f['resumo']}</p>";

    echo "<h3>🎬 Trailer:</h3>";
    echo "<iframe width='560' height='315' src='{$f['trailer']}' frameborder='0' allowfullscreen></iframe>";
}

// HOME
else {
    echo "<p>🔥 Bem-vindo ao CineFoda!</p>";
    echo "<p>Clique em 'Ver Filmes' para começar.</p>";
}

?>

</body>
</html>