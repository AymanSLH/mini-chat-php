<!DOCTYPE html>
<html>
    <head>
        <title>My Chat App</title>
        <link rel="stylesheet" href="style.css" media="all" />

<!--         <script>
    function chat_ajax(){
        var req = new XMLHttpRequest();
        req.onreadystatechange = function() {
            if(req.readyState == 4 && req.status == 200){
                document.getElementById('chat').innerHTML = req.responseText;
            }
        }
        req.open('GET', 'chat.php', true);
        req.send(); 
    }
    
    setInterval(function(){chat_ajax()}, 1000)
        </script> -->



    </head>
    <body>
        <?php include 'db.php' ?>
        <div id="container">
            <div id="chat_box">

                <?php
                $query = "SELECT * FROM chat ORDER BY id";
                $run = $con->query($query);
                while($row = $run->fetch_array()) :
                ?>

                <div id="chat_data">
                    <span style="color:green;"><?php echo $row['Name']?></span>
                    <span style="color:brown;"><?php echo $row['Message']?></span>
                    <span style="float:right;"><?php echo $row['Date']?></span>
                </div>
            <?php endwhile  ; ?>
            </div>
            
            <form method="post" action="index.php">
                <input type="text" name="name" placeholder="Enter Name: " />
                <textarea name="enter_message" placeholder="Enter Message"></textarea>
                <input type="submit" name="submit" value="Send!" />
            </form>

            <?php
            if(isset($_POST['submit'])){
                if ($_POST['name'] != "" and $_POST['enter_message'] != "")
                {
                $name = $_POST['name'];
                $msg = $_POST['enter_message'];

                $query = "INSERT INTO chat (Name,Message) VALUES ('$name','$msg')";
                $run = $con->query($query);
                }
               else 
               {
                echo "Please Enter your name And you Message !!" ; 
               } 

            }  
            ?>
        </div>
    </body>
</html>
