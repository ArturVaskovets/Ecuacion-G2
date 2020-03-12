
<?php

require_once "../vendor/autoload.php";
$data = json_decode(file_get_contents('php://input'),true);
if (isset($data["action"]))
{
    switch ($data["action"])
    {
        case "calc":
        {
            if (isset($data["data"]))
            {
                if (isset($data["data"]["a"]) && isset($data["data"]["b"]) && isset($data["data"]["c"]))
                {
                    $a = $data["data"]["a"];
                    $b = $data["data"]["b"];
                    $c = $data["data"]["c"];
                    calcEquation($a, $b, $c);
                }
                else
                {
                    //Error
                    header('HTTP/1.1 400 Bad Request');
                    header('Content-Type: application/json; charset=UTF-8');
                    echo json_encode(array("success" => false));
                }
            }
            else
            {
                //Error
                header('HTTP/1.1 400 Bad Request');
                header('Content-Type: application/json; charset=UTF-8');
                echo json_encode(array("success" => false));
            }
            break;
        }
        default:
        {
            //Error
            header('HTTP/1.1 400 Bad Request');
            header('Content-Type: application/json; charset=UTF-8');
            echo json_encode(array("success" => false));
            break;
        }
    }
}

function calcEquation($a, $b, $c) {
    $response = array(
        "success" => false,
        "data" => array()
    );
    $calculator = new \model\EcuacionGrado2($a,$b,$c);
    for ($i = 1; $i <= 10; $i++)
    {
        $response["data"][] = array(
            "x" => $i,
            "y" => $calculator->calc($i)
        );
    }
    $response["success"] = true;
    echo json_encode($response);
}
