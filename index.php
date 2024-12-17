<?php
    include_once 'php/submit.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta name="author" content="Patryk Jankowiak">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Patryk Jankowiak</title>
    <script>
        if(window.history.replaceState){
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</head>
<body>
    <header>
        <div class="menucontainer">
            <ul>
                <div>
                    <a href="index.php">Home</a>
                </div>
                <div>
                    <a href="#projekty">Projekty</a>
                </div>
                <div>
                    <a href="files/CV_PatrykJankowiak.pdf" target="_blank">CV</a>   
                </div>
                <div>
                    <a href="#kontakt">Kontakt</a>
                </div>
                <div class="sourceCodeMobile">
                    <a href="https://github.com/patrykJankowiak1102/portfolio" target="_blank"><img src="img/github_logo.png" alt="github logo"></a>
                </div>
            </ul>
        </div>
        <div class="sourceCode">
            <a href="https://github.com/patrykJankowiak1102/portfolio" target="_blank"><img src="img/github_logo.png" alt="github logo"></a>
        </div>
    </header>
    <main>
        <div class="name">
            <h1>Patryk Jankowiak</h1>
            <h2>Frontend developer</h2>
        </div>
        <div class="night">
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
            <div class="shooting_star"></div>
        </div>
        
        <!-- <div class="languages">
            <img src="img/HTML5_logo.svg" alt="HTML5 logo">
            <img src="img/CSS3_logo.svg" alt="CSS3 logo">
            <img src="img/scss_logo.png" alt="SCSS logo">
            <img src="img/javaScript_logo.svg" alt="JS logo" id="imgRounded">
            <img src="img/typeScript_logo.svg" alt="TS logo" id="imgRounded">
            <img src="img/php_logo.svg" alt="PHP logo">
            <img src="img/sql_logo.svg" alt="SQL logo">
            
            <img src="img/reactjs_logo.svg" alt="React.js logo" id="learning">
            
            <img src="img/nodejs_logo.png" alt="Node.js logo" id="learning" >
            <div id="learningText"><p>Nadal się uczę:)</p></div>
        </div> -->
        <div class="arrow bounce"></div>
    </main>
    <!-- <section id="doswiadczenie">
        <h3>Doświadczenie</h3>
    </section> -->
    <section id="kontakt">
        <div class="kontakt_box">
            <h3>Kontakt</h3>
            <p>E-mail: <a href="mailto:patryk@patrykjankowiak.dev">patryk@patrykjankowiak.dev</a></p>
            <form id="contactForm" action="" method="POST">

                <?php if(!empty($statusMsg)){ ?>
                    <p class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                <?php } ?>

                    <div>
                        <input type="email" name="email" placeholder="Email" required value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>">
                    </div>
                    <div>
                        <input type="text" name="name" placeholder="Imię i Nazwisko" required value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>">
                    </div>
                    <div>
                        <textarea name="message" maxlength="2000" placeholder="Wiadomość"  required value="<?php echo !empty($postData['message'])?$postData['message']:''; ?>"></textarea>
                    </div>
                <input type="hidden" name="submit_frm" value="1">
                <button class="g-recaptcha" 
                    data-sitekey="6LdQzZwqAAAAAP9RalVKpbZo95JCQ1bwTBBhHfcO" 
                    data-callback='onSubmit' 
                    data-action='submit'>Wyślij</button>
                <script>
                    function onSubmit(token) {
                        document.getElementById("contactForm").submit();
                    }
                </script>
            </form>
        </div>
    </section>
    <section id="projekty">
        <div class="projekty_box">
            <div>
                <p>Snake</p>
                <a href="snake.html">
                    <img src="img/snake.png" alt="Snake game">
                </a>
            </div>
            <div>
                <p>To Do List</p>
                <a href="lista.html">
                    <img src="img/todo.png" alt="To do List">
                </a>
            </div>
            <div>
                <p>Pogoda</p>
                <a href="index.php">
                    <img src="img/tmpphoto.png" alt="Pogoda">
                </a>
            </div>
        </div>
    </section>
</body>
</html>