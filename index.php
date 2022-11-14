<?php
session_start();
include("dbcon.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Chat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="icon" href="Image/logo.png">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="JS/main.js"></script>
</head>

<body onload="focusIn()">
    <div class="header">
        <div class="main">
            <div class="top">
                <div class="top1">
                    <span> <a href="https://henil.rf.gd/Live_Chat/" class="logo">Web Chat </a></span>
                    <h3 class="live_User"> Welcome <span class="live_U"> <?php if (isset($_SESSION['User_N'])) {
                                                                                $live_U = $_SESSION['User_N'];
                                                                                echo $live_U;
                                                                            } else {
                                                                                echo "Guest";
                                                                            }  ?></span> </h3>
                </div>
                <div class="top2">
                    <a href="whatsapp://send?text=Join With Me for Live Chatting https://henil.rf.gd/Web_Chat/ Come Fast." class="invite_a bi bi-whatsapp" title="Send To What's app"></a>
                    <a class="bi bi-arrow-clockwise" href="index.php" id="ref"></a>
                    <?php if (isset($_SESSION['User_N'])) {
                    ?>
                        <form action="logout_Code.php" method="post" class="log_Form">
                            <button name="Log_Out" type="submit" class='login_log'>Log out</button>
                        </form>
                    <?php
                    } else {
                    ?>
                        <a href="Form_login.php" name="Log_Out" type="submit" class='login_log'>Log in</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="chats" id="chat_s">

                <?php

                date_default_timezone_set("Asia/Calcutta");
                $time_C = date('d-M-Y g:i a');

                if (isset($_POST['Done'])) {

                    $file = $_FILES["u_file"]["name"];
                    $cha = str_ireplace("<", "&lt;", $_POST['chat_u']);
                    $chat = base64_encode($cha);
                    $u_file_name = time() . "-" . $file;

                    move_uploaded_file($_FILES['u_file']['tmp_name'], 'U_Files/' . $u_file_name);

                    $in = "insert into message (User_Name,Message,file,File_Name,Time_Stamps) values ('$live_U','$chat','$u_file_name','$file','$time_C')";
                    mysqli_query($conn, $in);
                }
                $select = "SELECT * FROM message";
                $result = mysqli_query($conn, $select);
                while ($r = mysqli_fetch_array($result)) {
                    echo  " <div class='message'>
                            <div class='user'>
                            <span> " . $r['User_Name'] . "</span>
                            </div>
                            <div class='userchat'>
                            <span >" . base64_decode($r['Message']) . " </span>
                            <span > <a target='_blank' class='hiper' href='U_Files/" . $r['file'] . "'>" . $r['File_Name'] . " </a></span>
                            </div>
                            <div class='time'>
                                <span>" . $r['Time_Stamps'] . "</span>
                            </div>
                            </div> ";
                }
                ?>
                <p id="HP"></p>
            </div>
            <div class="optionB">
                <label for="file_input" class="bi bi-file-earmark-plus opt" id="pdf_B"></label>
                <span class="bi bi-chat-dots opt" id="chat_B"></span>
            </div>
            <div class="bottom">
                <?php
                if (isset($_SESSION['User_N'])) {
                ?>
                    <div id="chat_in">
                        <form method="POST" enctype="multipart/form-data" class="form">
                            <span class="bi bi-link-45deg" id="option"></span>
                            <input type="text" class="input" id="ChatsBox" name="chat_u" autocomplete="off" placeholder="Type Message" title="Type Message">
                            <input type='file' class='file_in none' id='file_input' name='u_file'>
                            <button class="send bi bi-send" name="Done"> </button>
                        </form>
                    </div>
                <?php
                } else {
                ?>
                    <script>
                        setInterval(() => {
                            location.href = "Form_login.php";
                        }, 5000)
                    </script>
                    <div class="SignUp">
                        <h1>Start Live Chat <a href="Form_sigup.php" class="login">Sign up</a> </h1>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    function focusIn() {
        window.location = "index.php#HP";
        document.getElementById("ChatsBox").focus();
    }
</script>