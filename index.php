<!DOCTYPE html>
<html>
    <head>
        <title>My Chat App</title>
        <link rel="stylesheet" href="style.css" media="all" />
    </head>
    <body>
        <div id="container">
            <div id="chat_box">
                <div id="chat_data">
                    <span style="color:green;"></span>
                    <span style="color:brown;"></span>
                    <span style="float:right;"></span>
                </div>
            </div>
            <form method="get" action="index.php">
                <input type="text" name="name" placeholder="Enter Name: " />
                <textarea name="enter_message" placeholder="Enter Message"></textarea>
                <input type="submit" name="submit" value="Send!" />
            </form>
        </div>
    </body>
</html>
