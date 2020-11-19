<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
    // TODO 1: Create short variable names.
        $isbn;
        $author;
        $title;
        $price;
    // TODO 2: Check and filter data coming from the user.
        $isbn=isset($_POST["isbn"])?$_POST["isbn"]:"";
        $author=isset($_POST["author"])?$_POST["author"]:"";
        $title=isset($_POST["title"])?$_POST["title"]:"";
        $price=isset($_POST["price"])?$_POST["price"]:"";
    // TODO 3: Setup a connection to the appropriate database.  
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "book";
        $conn = new mysqli($servername,$username,$password,$database);
        if($conn->connect_error){ 
            die("database Connect failed".$conn->connect_error);
        }
    // TODO 4: Query the database.
        $query="INSERT INTO catalogs VALUES('$isbn','$author','$title','$price')";
    // TODO 5: Display the feedback back to user.
         $result = $conn->query($query);
                if(!$result) {
                    die ("Insert failed");
                }else{
                    echo "Insert Success";
                }
    // TODO 6: Disconnecting from the database.
                $conn->close();

    ?>
</body>
</html>