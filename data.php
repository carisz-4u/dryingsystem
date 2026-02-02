<?php
file_put_contents("log.txt", date("H:i:s")." HIT\n", FILE_APPEND);


if (isset($_GET['adc'])) {
    $adc = intval($_GET['adc']);

    // threshold hujan (atur sendiri)
    $hujan = ($adc > 3850) ? 1 : 0;

    $data = [
        "adc" => $adc,
        "hujan" => $hujan,
        "waktu" => date("Y-m-d H:i:s")
    ];

    file_put_contents("data.json", json_encode($data));
    echo "OK";
} else {
    echo "NO DATA";
}
?>
