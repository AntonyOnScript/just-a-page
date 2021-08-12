<?php 

$con = new PDO('mysql:host=localhost;dbname=just-a-page', 'root', '');

if(isset($_POST["image"]) && isset($_POST["description"])) {
    
    $stmt = $con->prepare("INSERT INTO posts (imageLink, description) VALUES(:imageUrl, :description)");

    $stmt->bindParam(":imageUrl", $_POST["image"]);
    $stmt->bindParam(":description", $_POST["description"]);

    $stmt->execute();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/normalize.css">
    <link rel="stylesheet" href="src/css/style.css">
    <title></title>
</head>
<body>
    <menu class="top-menu">
        <img src="public/img/logo.svg" alt="">
        <nav class="nav">
            <ul>
                <li><a href="#" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Shop</a></li>
                <li><a href="#" class="nav-link">Gallery</a></li>
                <li><a href="#" class="nav-link">Blog</a></li>
                <li><a href="#" class="nav-link">About</a></li>
            </ul>
        </nav>
    </menu>
    <section class="hero">
        <img src="public/img/hero.jpg" alt="">
        <h1>Hi i guess we can do something together</h1>
        <h3>And what about you?</h3>
        <button class="know-more">Know More</button>
    </section>
    <section class="about-us">
        <h1 class="about-us-title">We are your next employees!</h1>
        <div class="about-container">
            <div class="about-text">
                <h1>The latest technologies.</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, molestiae quod perspiciatis quae cupiditate maxime? Error veritatis illo labore? Expedita natus suscipit sint laborum illum eligendi a, ratione rem minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed doloremque cumque, dolore officiis deserunt repellendus omnis odit fuga. Odit non minima repellendus adipisci voluptates libero sapiente obcaecati ut aliquam. Illum! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi in ad aliquam, repellat exercitationem ipsam hic omnis deserunt! Deleniti nihil harum repudiandae corrupti ipsam sequi illum ducimus distinctio officia ipsum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias ullam dicta vitae. Optio perspiciatis nam, culpa quisquam molestiae, cum obcaecati possimus fugit, dignissimos velit repudiandae qui enim. Aperiam, impedit in?</p>
                <button class="know-more know-more-about">Know more</button>
            </div>
            <div class="about-image">
                <img src="public/img/about-employees.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="blog-section">
        <img src="public/img/blog-section-background.jpg" class="blog-section-background">
        <h1>Blog Section</h1>
        <div class="posts">
            <?php 
                $select = $con->query("SELECT * FROM posts");

                $result = $select->fetchAll(PDO::FETCH_ASSOC);
                $resultLength = count($result);

                for($i = $resultLength - 1; $i > $resultLength - 5; $i--) {
                    echo 
                    '
                        <figure class="post-card">
                            <img src="'.$result[$i]["imageLink"].'" alt="">
                            <figcaption>'.$result[$i]["description"].'</figcaption>
                        </figure>
                    ';
                }
            ?>
        </div>
    </section>
    <section class="post-something">
        <h1>Here we can post something and it will appears on Blog Section!</h1>
        <form method="post">
            <div class="input-field">
                <label for="image"><h1>Image url:</h1></label>
                <br><br>
                <input type="url" name="image" id="image" placeholder="A direct link to an image">
            </div>
            <div class="input-field">
                <label for="description"><h1>Desired description:</h1></label>
                <br><br>
                <textarea name="description" id="description" rows="5" placeholder="Just a description"></textarea>
            </div>
            <button type="submit" class="know-more">Submit</button>
        </form>
    </section>
    <footer>
        <p>Developed by <a href="https://github.com/AntonyOnScript/">Antony</a></p>
    </footer>
</body>
</html>
