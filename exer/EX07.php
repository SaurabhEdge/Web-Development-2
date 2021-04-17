<!-- Saurabh Shukla -->
<!-- 04/10/2021 --> 
<!-- ISTE646 Exercise 7 – PHP – Part 2 - MySQL -->

<?php

#php output display


    $db= "localhost";
    $dbname = "ss7586";
    $username = "ss7586";
    $password = "Bleep7&antler";




    // Create connection
    $conn = new mysqli($db,$username, $password, $dbname,);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if($conn){
        if(!empty($_POST["name"]) && !empty($_POST["comment"])){

            $stmt = $conn->prepare("INSERT INTO comments (name, comment) VALUES (?, ?)");
            $stmt->bind_param("ss", $_POST["name"], $_POST["comment"]);           
            $stmt->execute();           
            $stmt->close();

        }
    }

    $result = $conn->query("SELECT * FROM comments");

    if($result){
        while($row_holder =mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $records[] = $row_holder;

        }
    }
    $conn->close();

?>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Exercise 7</title>
    <link href="/~ss7586/ISTE646/exer/assets/css/Ex07.css" rel="stylesheet" >
</head>
<body>
    <h3>What do you think?</h3>
    <ul>
       <?php
        foreach($records as $this_row){
            echo "<br><li style= color:green>". $this_row["name"]. "</li>: " . $this_row["comment"]. "@ " . $this_row["last modified date"]. "<br>";
        }
        ?>

      </ul>


    <form action="/~ss7586/ISTE646/exer/EX07.php" method="POST">
        <br><hr><h3>What do you have to say?</h3>
        <div>
            First Name: &nbsp;
            <input type="text" name="name">
        </div>
        <br/>
        <div>
            <textarea id="cmtTEXT" name="comment" rows="4" cols="50" placeholder="say what?"></textarea>
        </div>
        <br/>
        <div>
            <input type="submit" value="Add to List">
        </div>
    </form>
</body>
</html>