<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.user-details {
            text-align: left;
        }
        
        table.activity {
            width: 200%;
        }
        
        .user {
            margin-left: 350px;
        }
        
        .bookimage {
            width: 60px;
            height: 70px;
        }
        
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        
        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }
        
        .button3:hover {
            background-color: #555555;
            color: white;
        }
    </style>
<!--Clock Script-->
<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
        setTimeout(startTime, 1000);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
</script>

</head>


    <body onload="startTime()" onload="alert(message)">
    <div>
        <nav>
            <div class="logo" style="font-family: 'Cinzel', serif; text-transform: uppercase;">The Bookshelf</div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="library.html">Library</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Signup</a></li>
                 
                    <a href="profile.php"><i class="fas fa-user-circle" style='font-size:25px;color:rgb(255, 251, 251)'></i></a>
                </ul>
            </div>
        </nav>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>
        <span class="text5" style="font-family:FreightTextPro, Georgia, serif;">Your Profile Page</span><br><br>
        <hr color="brown" width="800px" style="position: relative; left: 20%;">
    </div>
    <div>&nbsp;</div>
    <div>
        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">


                        <i class="fas fa-user-alt fa-5x"></i>
                        <div class="topic">Username</div>
                        <div class="text-one"><?php echo htmlspecialchars($_SESSION["username"]); ?></div>
                        <!-- <div class="text-two">Niraj Matere</div> -->
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">9999999999</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">abc@xyz.com</div>
                        <!-- <div class="text-two">bt20cse138@iiitn.ac.in</div> -->
                    </div>
                    <div>
                        <a href="register.php"> <button class="button button3">Edit Profile</button></a>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text"><u> Recent Activity</u></div>
                    <div>&nbsp;</div>
                    <div>
                        <table class="activity">

                            <tbody>
                                <tr>
                                    <td class="time">1 day ago</td>
                                    <td><img class="bookimage" src="https://img.search.brave.com/I2PETW7BJp3VYsJXAOs8NbBKSWbGMd4TeNVi5blSHy4/fit/318/225/ce/1/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5V/X3pMR2lTcy0zODhk/QmZSdmM5TXlRSGFM/QiZwaWQ9QXBp">
                                    </td>
                                    <td class="path">
                                        <a href="https://en.wikipedia.org/wiki/Wings_of_Fire_(autobiography)" title="Wings of Fire">Wings of fire</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="time">12 days ago</td>
                                    <td><img class="bookimage" src="https://img.search.brave.com/RBeE2rWoWZ523fQe1I_2ptp5fHdOGgkm-hPIEuk1oLg/fit/314/225/ce/1/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5F/LVZiMTBHMkd0N09X/YUxpbFZpYTdnSGFM/SyZwaWQ9QXBp"></td>
                                    <td class="path">

                                        <a href="https://en.wikipedia.org/wiki/War_and_Peace" class="datalink"> War and Peace</a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="time">15 days ago</td>
                                    <td><img class="bookimage" src="https://img.search.brave.com/eFPsb8euudUF7lBHSGbwt8k0_unVr1HZ4qtNNUlKuAM/fit/358/225/ce/1/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5C/Y3VUQ0RDMnV0THdj/dGVQX0dOeVhnSGFK/eSZwaWQ9QXBp"></td>
                                    <td class="path">


                                        <a href="https://en.wikipedia.org/wiki/Introduction_to_Algorithms" title="INtroduction to Algorithms">Introduction to Algorithms</a>
                                    </td>


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>&nbsp;
                    </div>
                    <div>
                        <p>Your Reading Curve</p>
                        <img src="https://img.search.brave.com/yUnTgsF3VJGUvDcN-2wfYs5wHR9rDtzQvlXnl-xcf4c/fit/852/225/ce/1/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5i/M3hTaTExeVBMbjh0/enQ1bzVER0tBQUFB/QSZwaWQ9QXBp" alt="Reading Time Curve">

                    </div>
                </div>

                <div class="right-side">
                    <div class="topic-text">


                    </div>
                </div>

            </div>
        </div>
    </div>
    <div>&nbsp;</div>

    <div class="fbody">
        <footer class="footer">
            <div class="fcontainer">
                <div class="row">
                    <div class="footer-col">
                        <h4>Team</h4>
                        <ul>
                            <li><a href="#">Manisha Koranga BT20CSE033</a></li>
                            <li><a href="#">Niraj Matere BT20CSE138</a></li>
                        </ul>

                    </div>
                    <div class="footer-col">
                        <h4>Quick Find</h4>
                        <ul>
                            <li><a href="science.html">Science and Technology</a></li>
                            <li><a href="fictional.html">Fictional Books</a></li>
                            <li><a href="mythology.html">Mythological Books</a></li>
                            <li><a href="educational.html">Educational Books</a></li>
                            <li><a href="stories.html">Short Stories</a></li>
                        </ul>

                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <div class="footer-col">
                            <div id="txt" style="text-align: center; font-size: 18px; color: #bbbb;margin-top: 10px;margin-left: -14px;">
                            </div>
                        </div>

                        <div class="footer-col">
                            <div class="rig">
                                You Read.You Learn.You Grow.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>
    </div>
</body>

</html>