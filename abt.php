<html>

<head>
    <title>about us</title>
    <link rel="stylesheet" href="v3.css">
    <script src="https://kit.fontawesome.com/acb6219ac5.js" crossorigin="anonymous"></script>
</head>

<body>

    <section>
        <nav>
            <div class="logo">
                <img src="photo\logo.png">

            </div>
            <ul>
                <li><a href="h1.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="explore.php">EXPLORE MORE</a></li>
        
                <li><a href="login.php">LOG IN</a></li>
            </ul>
            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>

            </div>
        </nav>
    </section>

    <div class="abt">
        <section>
            <header>
                <h1>
                    ABOUT US
                </h1>
            </header>
        </section>



        <p>Our elders cooked for the necessity, but today's generation cooks for passion and eats to enjoy.</p>
        <p>Our website has traditional recipes + quick recipes + healthy recipes and much more.
        </p>
        <p>
            We have something for everyone.
        </p>
        <p>Here you can learn, explore, enjoy and compete.
        </p>


    </div>
    <footer>

        <ul>
            <li><a href="team.php">CONTACT US</a></li>
            <li>
                <div class="icon">
                   
                    <button class="open-button" onclick="openForm()"><i class="fa-regular fa-envelope"></i></button>
                </div>

                    <div class="form-popup" id="myForm" style="display: none">
                        <form action="/action_page.php" class="form-container">
                    
                            <h2>Review / Suggestions</h2>
                            <label ><b>EMAIL</b></label><br>
                            <input type="text" placeholder="Enter Email" name="email" required><br>
                            <label ><b>Review or Suggestion</b></label><br>
                            <textarea rows="10" cols="40" placeholder="Enter your review or suggestions here." required></textarea><br>

                            <button type="submit" class="btn"><u>SUBMIT</u></button>
                            <div class="icon">
                                <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa-solid fa-rectangle-xmark"></i></button>

                            </div>
                        </form>
                    </div>
                    <script>
                        function openForm() {
                            document.getElementById("myForm").style.display = "block";
                        }

                        function closeForm() {
                            document.getElementById("myForm").style.display = "none";
                        }
            
                    </script>


            </li>
            </div>
        </ul>

    </footer>


</body>

</html>