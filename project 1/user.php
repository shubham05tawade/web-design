<!DOCTYPE html>
<html>
    <head>
        <title>filtercodes.ml</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body style="background: #fafafa">
        <nav class="banner-navbar">
            <center>
            <h1><span>filter</span><span>&lt;</span><span>/</span>codes<span>&gt;</span></h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Help</a></li>
            </ul>
            <input type="search" placeholder="Search filtercodes">
            <a href="#">Sign in</a>
            or
            <a href="#">Sign up</a>
            </center>
        </nav>
        <?php if($_SESSION['username']): ?>
        <div class="dashboard">
            <div class="dashboard-left-panel">
                <div class="user-image">
                    <img srcs="#">
                </div>
                <div class="user-detail">
                    <table class="user-detail-table">
                        <tr>
                            <td>First Name :</td>
                            <td><?php echo($_SESSION['fname']);?></td>
                        </tr>
                        <tr>
                            <td>Last Name :</td>
                            <td><?php echo($_SESSION['lname']);?></td>
                        </tr>
                        <tr>
                            <td>Mobile No :</td>
                            <td><?php echo($_SESSION['mobile']);?></td>
                        </tr>
                        <tr>
                            <td>Country :</td>
                            <td><?php echo($_SESSION['country']);?></td>
                        </tr>
                        <tr>
                            <td>State :</td>
                            <td><?php echo($_SESSION['town']);?></td>
                        </tr>
                    </table>
                    <form method="POST" action="/includes/logoutanddelete.inc.php" class="user-buttons">
                        <input type="submit" name="logout" value="Logout">
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </div>
            </div>
            <div class="dashboard-right-panel">
                <div class="card-section" onclick="location.href='/includes/java_level.inc.php'">
                    <h1>JAVA</h1>
                    <p>Modules : 40</p>
                    <div class="card-section-progress">
                        <div class="card-section-progress-bar" style="width: <?php echo($_SESSION['java']);?>%";></div>
                   </div>
                </div>
                <div class="card-section">
                    <h1>ANDROID</h1>
                    <p>Modules : 30</p>
                    <div class="card-section-progress">
                        <div class="card-section-progress-bar" style="width: <?php echo($_SESSION['android']);?>%";></div>
                    </div>
                </div>
                <div class="card-section">
                    <h1>PHP</h1>
                    <p>Modules : 60</p>
                    <div class="card-section-progress">
                        <div class="card-section-progress-bar" style="width: <?php echo($_SESSION['php']);?>%";></div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: echo '<div id="user-session-error">', "Oop's something wen't wrong!!", '</div>'; ?>
        <?php endif?>
        <div class="footer">
            <h1>Designed and developed by: Shubham Tawade</h1>
            <p>Contact information: <a href="mailto:shubham05tawade@gmail.com">shubham05tawade@gmail.com</a></p>
        </div>
    </body>
</html>
