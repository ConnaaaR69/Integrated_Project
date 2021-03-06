<?php
require_once 'validation.php';
require_once 'classes/DBConnector.php';

session_start();
if (isset($_SESSION["author"]) && isset($_SESSION["errors"])) {
    $data = $_SESSION["author"];
    $errors = $_SESSION["errors"];
}else{
    $data = [];
    $errors = [];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/form.css">
    <!-- Google Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Page Icon -->
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <link rel="icon" href="icon.svg">

    <title>WORLD NEWS | Add New Author</title>
</head>
<body>

    <div class="container">
    <!-- Navigation Bar -->
    <div class=" width-12 navCont nested">
        <a class="width-2 navButtons" href="index.php">HOME</a>
        <a class="width-2 navButtons" href="createStoryForm.php">CREATE Article</a></button>
        <a class="width-2 navButtons" href="addAuthorForm.php">ADD AUTHOR</a></button>
    </div>
    <!-- Logo and Subtitle -->
    <div class="width-12 logo"> <h1>WORLD NEWS</h1> </div>
    <h2 class='width-12'> <b>Add a new author</b> </h2>

    <!-- Form Start -->
        <div class="width-12 nested">
            <form method="POST" action="addAuthor.php" class="width-12 nested">
                <!-- First Name -->
                <div class= "width-12 margin-t20">
                    <label>First Name</label><br>
                    <input id="first_name"type="text" name="first_name" class="textInput" value="<?php if (isset($data["first_name"])) echo $data["first_name"];?>">
                    <div class="error" id="first_name_error"><?php if (isset($errors["first_name"])) echo $errors["first_name"];?></div>
                </div>
                <!-- Last Name -->
                <div class= "width-12 margin-t20">
                    <label>Last Name</label><br>
                    <input id="last_name" type="text" name="last_name" class="textInput" value="<?php if (isset($data["last_name"])) echo $data["last_name"];?>">
                    <div class="error" id="last_name_error"><?php if (isset($errors["last_name"])) echo $errors["last_name"];?></div>
                </div>
                <!-- Author URL -->
                <div class= "width-12 margin-t20">
                    <label>Link</label><br>
                    <input  id="author_link" type="text" name="author_link" class="textInput" value="<?php if (isset($data["author_link"])) echo $data["author_link"];?>">
                    <div class="error" id="author_link_error"><?php if (isset($errors["author_link"])) echo $errors["author_link"];?></div>
                </div>
                <!-- Cancel / Submit -->
                <input type="button" class="formButton width-3 margin-t20" value="Cancel"></button>
                <input id="submit_btn" type="submit" class="formButton width-3 margin-t20" >
            </form>
        </div>
    <!-- Form End -->
    </div>
    
<script src="js/author_validate.js"></script>
</body>
</html>
<?php
    if(isset($_SESSION["data"]) && isset($_SESSION["errors"])){
        unset($_SESSION["data"]);
        unset($_SESSION["errors"]);
    }
 ?>