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
                <li>Home</li>
                <li>Shop</li>
                <li>Gallery</li>
                <li>Blog</li>
                <li>About</li>
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
        <h1>Blog Section</h1>
        <div class="posts">
            <?php 
                for($i = 0; $i < 4; $i++) {
                    echo 
                    '
                        <figure class="post-card">
                            <img src="public/img/hammer-post-example.jpg" alt="">
                            <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aliquid consequatur deserunt fugit vero, ipsum laborum quia repellat doloribus minima similique commodi dicta molestiae itaque ab sed voluptates! Nam, blanditiis?</figcaption>
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
                <label for="image">Image url:</label>
                <input type="url" name="image" id="image" placeholder="A direct link to an image">
            </div>
            <div class="input-field">
                <label for="description">Desired description:</label>
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
