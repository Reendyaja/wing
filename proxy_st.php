<?php
header('Content-Type: application/json');

// Ambil data dari API pertama (curRound)
$cur = file_get_contents("https://didihub111.top/api/main/lottery/curRound?type=2");
$curData = json_decode($cur, true);

// Ambil data dari API kedua (rounds)
$rounds = file_get_contents("https://didihub111.top/api/main/lottery/rounds?page=1&count=11&type=2");
$roundsData = json_decode($rounds, true);

// Gabungkan data curRound dan rounds
echo json_encode([
    "period" => $curData["period"] ?? "-",
    "items" => $roundsData["items"] ?? []
]);
