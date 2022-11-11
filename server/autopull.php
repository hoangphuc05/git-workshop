<?php

/* Endpoint for handling Github Webhook event
* Auto pull from Github
* Made by Phuc Cai for Whitworth ACM
*/
$inputJSON;
function run() {
    // $postBody = $_POST['payload'];
    global $inputJSON;
    $inputJSON = file_get_contents('php://input');
    $payload = json_decode($inputJSON);
    
    // check that the webhook coming from the expected repo and branch
    if (($payload->repository->url === "https://github.com/hoangphuc05/git-workshop") 
        && $payload->ref === "refs/heads/main") {
        echo ("pulling");
        shell_exec("./git-pull.sh"); 
    }
    else {
        http_response_code(400);
        echo("Not pulling");
    }
}

try {
    if($_SERVER['REQUEST_METHOD'] === "POST") {
        run();
    } else {
        http_response_code(400);
        //echo var_dump($_POST);
    }
} catch (Exception $e){
    http_response_code(500);
    $msg = $e->getMessage();
    echo $msg;
}