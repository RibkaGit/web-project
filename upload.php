<?php
// print_r($_POST);

session_start();

$info = (object)[];
if (!isset($_SESSION['userid'])) {
    /*if ($_SERVER['PHP_SELF'] != "login.php") {*/
    if ((isset($DATA_OBJ->data_type) && $DATA_OBJ->data_type != "login" && $DATA_OBJ->data_type != "signup")) {
        $info->logged_in = false;
        echo json_encode($info);
        die;
    }
}

require_once __DIR__ . '/classes/autoload.php';
$DB = new DataBase();

$data_type = "";
if (isset($_POST['data_type'])) {
    $data_type = $_POST['data_type'];
}

$distination = "";
if (isset($_FILES['file']) && $_FILES['file']['name'] != "") {

    $allowed[] = 'image/jpeg';
    $allowed[] = 'image/png';
    if ($_FILES['file']['error'] == 0 && in_array($_FILES['file']['type'], $allowed)) {
        $folder = 'uploades/';
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
        $distination = $folder . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $distination);

        $info->message = "Your Image is UpLoaded";
        $info->data_type = $data_type;
        echo json_encode($info);

        // echo "Your Image is UpLoaded";
    }
}


if ($data_type == "change_profile_image") {
    if ($distination != "") {
        //save to the database
        $id = $_SESSION['userid'];
        $quary = "UPDATE users set image = '$distination' WHERE user_id =  '$id' limit 1";
        $DB->write($quary, []);
    }
} else if ($data_type == "send_image") {
    $arr['userid'] = "null";
    if (isset($_POST['userid'])) {
        $arr['userid'] = addslashes($_POST['userid']);
    }
    $arr['message'] = "";
    $arr['date'] = date('Y-m-d H:i:s');
    $arr['sender'] = $_SESSION['userid'];
    $arr['msgid'] = get_random_string_max(60);
    $arr['file'] = $distination;

    $arr2['sender'] = $_SESSION['userid'];
    $arr2['receiver'] = $arr['userid'];
    $sql = "SELECT * FROM messages where (sender = :sender && receiver = :receiver) || (receiver = :sender && sender = :receiver) limit 1";
    $result2 = $DB->read($sql, $arr2);

    if (is_array($result2)) {
        $arr['msgid'] = $result2[0]->msgid;
    }
    $quary = "INSERT INTO messages (sender,receiver,message,date,msgid,files) VALUES (:sender,:userid,:message,:date,:msgid,:file)";
    $DB->write($quary, $arr);
}

//remamber ke index.php formData lay append sinareg string ke hone ke $_POST variabl nw
//ke front end yetlakewin minagnew neger gin file ke hone yetlakew $_FILE be mile variabel nw
//minagnew

function get_random_string_max($length)
{
    $array = array(
        0,
        1,
        2,
        3,
        4,
        5,
        6,
        7,
        8,
        9,
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        'z',
        'A',
        'B',
        'C',
        'D',
        'E',
        'F',
        'G',
        'H',
        'I',
        'J',
        'K',
        'L',
        'M',
        'N',
        'O',
        'P',
        'Q',
        'R',
        'S',
        'T',
        'U',
        'V',
        'W',
        'X',
        'Y',
        'Z'
    );
    $text = "";
    $length = rand(4, $length);
    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, 61);
        $text .= $array[$random];
    }
    return $text;
}
