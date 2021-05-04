<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation Part 1</title>
</head>

<body>
    <?php 
$name=$email=$mobile=$website=$gender=$comment=$submit = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = output($_POST["name"]);
    $email = output($_POST["email"]);
    $mobile = output($_POST["mobile"]);
    $website = output($_POST["website"]);
    $gender = output($_POST["gender"]);
    $comment = output($_POST["comment"]);



}

function output($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

?>



    <div class="container">
        <h2>PHP FORM VALIDATON</h2>

        <form action="" method="POST" enctype="multipart/form">

            Name: <input type="text" name="name" placeholder="name">
            <br><br>
            E-mail: <input type="text" name="email" placeholder="email">
            <br><br>
            Mobile: <input type="text" name="mobile" placeholder="mobile">
            <br><br>
            Website: <input type="text" placeholder="website" name="website">
            <br><br>
            Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea>
            <br><br>

            Gender: <input type="radio" name="gender" id="" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="Others">Others
            <br><br>
            <input type="submit" value="Submit" name="submit">


    </div>

    </form>

<?php
echo "<br>";
echo "Your Output: ";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $gender;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $submit;




?>


</body>

</html>