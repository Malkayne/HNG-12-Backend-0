<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *"); // CORS Handling

    $response = [
        "email" => "kayode.owoseni123@.com",
        "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"),
        "github_url" => "https://github.com/Malkayne/HNG-12-Backend-0"
    ];

    http_response_code(200); // Send 200 OK
    echo json_encode($response);
?>
