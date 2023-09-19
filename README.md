<?php
require_once "connection.php";
try{
$sql = "INSERT INTO vidhi(email,review)VALUES(:email,:review)";
$stmt=$pdo->prepares($sql);
$stmt->bindParam(':email',$_REQUEST['email']);
$stmt->bindParam(':review',$_REQUEST['review']);
$stmt->execute();
}
catch(PDOException $e){}
?>

<html>
<head>
    <title>home</title>
    <link rel="stylesheet" href="sp.css">
    <script src="https://kit.fontawesome.com/acb6219ac5.js" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <nav>
            <div class="logo">
                <img src="logo.png">

            </div>
            <ul>
                <li><a href="h1.php">HOME</a></li>
                <li><a href="abt.php">ABOUT US</a></li>
                <li><a href="explore.php">EXPLORE MORE</a></li>
                <li><a href="login.php">LOG IN</a></li>
            </ul>
            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>

            </div>
        </nav>
    </section>
    <section>
        <div class="main">



            <table>
                <tr>
                    <th>
                        <a href="trad.php"><img src="t.jpg" width="60%"></a>
                    </th>
                    <th>
                        <a href="quick.php"><img src="2.jpg" width="62%"></a>
                    </th>
                    <th>
                        <a href="heal.php"><img src="s.jpg" width="60%"></a>
                    </th>

                </tr>
                <tr>
                    <td>
                        <a href="trad.php">TRADITIONAL INDIAN </a>
                    </td>
                    <td>
                        <a href="quick.php">QUICK SNACKS</a>
                    </td>
                    <td>
                        <a href="heal.php">HEALTHY </a>
                    </td>
                </tr>
                <tr>
                    <th>
                        <a href="bev.php"><img src="bv.jpg" width="60%"></a>
                    </th>
                    <th>
                        <a href="des.php"><img src="d3.jpg" width="62%"></a>
                    </th>
                    <th>
                        <a href="atw.php"><img src="w.jpg" width="60%"></a>
                    </th>

                </tr>

                <tr>
                    <td>
                        <a href="bev.php">BEVERAGES</a>
                    </td>
                    <td>
                        <a href="des.php">DESERTS</a>
                    </td>
                    <td>
                        <a href="atw.php">AROUND THE WORLD</a>
                    </td>
                </tr>
                <tr>

                </tr>
            </table>
        </div>



        </div>

    </section>
    
    <footer>

        <ul>
            <li><a href="team.php">CONTACT US</a></li>
            <li>
                <div class="icon">

                    <button class="open-button" onclick="openForm()"><i class="fa-regular fa-envelope"></i></button>
                </div>

                <div class="form-popup" id="myForm" style="display: none">
                    <form method="POST">

                        <h2>Suggestions</h2>
                        <label><b>EMAIL</b></label><br>
                        <input type="text" placeholder="Enter Email" name="email" required><br>
                        <label><b>Suggestion</b></label><br>
                        <textarea rows="10" cols="40" placeholder="Enter your suggestions here." name="review"
                            required></textarea><br>

                        <button type="submit" class="btn"><a href ="h1.php">SUBMIT</a></button>
                        <div class="icon">
                            <button type="button" class="btn cancel" onclick="closeForm()"><i
                                    class="fa-solid fa-rectangle-xmark"name="submit "></i></button>

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

        </ul>

    </footer>
</body>
</html>
 
