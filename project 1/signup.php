<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("form").submit(function(event){
            event.preventDefault();
            var fname=$("#fname").val();
            var lname=$("#lname").val();
            var username=$("#username").val();
            var password=$("#password").val();
            var email=$("#email").val();
            var mobile=$("#mobile").val();
            var country=$("#country").val();
            var state=$("#state").val();
            var town=$("#town").val();
            var signup=$("#signup").val();
            $(".form-error").load("signup.inc.php",{
            fname: fname,
            lname: lname,
            username: username,
            password: password,
            email: email,
            mobile: mobile,
            country: country,
            state: state,
            town: town,
            signup: signup
            });
        });
        });
</script>
    </head>
    <body>
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
        <div class="signups-section">
            <div class="signups-container">
                <div class="signup-section-logo">
                    <div class="logo-shape"></div>
                    <div class="logo-shape"></div>
                    <div class="logo-shape"></div>
                </div>
                <form class="signups-container-body">
                    <span>
                        <label>First Name</label>
                        <input type="text" name="fname" id="fname" onfocus="funky(0)">
                    </span>
                    <span>
                        <label>Last Name</label>
                        <input type="text" name="lname" id="lname" onfocus="funky(1)"> 
                    </span>
                    <span>
                        <label>Username</label>
                        <input type="text" name="username" id="username" onfocus="funky(2)">
                    </span>
                    <span>
                        <label>Email</label>
                        <input type="text" name="email" id="email" onfocus="funky(3)">
                    </span>
                    <span>
                        <label>Password</label>
                        <input type="password" name="password" id="password" onfocus="funky(4)">
                    </span>
                    <span>
                        <label>Mobile</label>
                        <input type="text" name="mobile" id="mobile" onfocus="funky(5)">  
                    </span>
                    <span>
                        <label>Town</label>
                        <input type="text" name="town" id="town" onfocus="funky(6)">  
                    </span>
                    <span>
                        <label>State</label>
                        <input type="text" name="state" id="state" onfocus="funky(7)">  
                    </span>
                    <span>
                        <label>Country</label>
                        <input type="text" name="country" id="country" onfocus="funky(8)">  
                    </span>
                    <span>
                        <label>Pin Code</label>
                        <input type="text" name="pincode" id="pincode" onfocus="funky(9)">  
                    </span>
                    <p>Use at least one letter, one numeral, and seven characters.</p>
                    <center>
                        <br/>
                        <input type="submit" name="submit" id="signup" class="submit-btn" value="Sign up for filtercodes">
                    </center>
                </form>
            </div>
            <div class="logins-container">
                    <div class="signup-section-logo">
                        <div class="logo-shape"></div>
                        <div class="logo-shape"></div>
                        <div class="logo-shape"></div>
                    </div>
                    <form class="logins-container-body">
                        <span>
                            <label>Username</label>
                            <input type="text" name="username" onfocus="funky(10)">
                        </span>
                        <span>
                            <label>Email</label>
                            <input type="text" name="email" onfocus="funky(11)">
                        </span>
                        <span>
                            <label>Password</label>
                            <input type="password" name="email" onfocus="funky(12)">
                        </span>
                        <p>Use at least one letter, one numeral, and seven characters.</p>
                        <center>
                            <br/>
                            <input type="submit" name="submit" class="submit-btn" value="Sign in for filtercodes">
                        </center>
                        <p class="form-error" style="color: #fff;"></p>
                    </form>
               </div>
           </div>
           <div class="footer">
            <h1>Designed and developed by: Shubham Tawade</h1>
            <p>Contact information: <a href="mailto:shubham05tawade@gmail.com">shubham05tawade@gmail.com</a></p>
          </div>
          <script type="text/javascript">
              function funky(id){
                  document.getElementsByTagName("label")[id].style.position="relative";
                  document.getElementsByTagName("label")[id].style.bottom="-14px";
                  document.getElementsByTagName("label")[id].style.left="9px";
                  document.getElementsByTagName("label")[id].style.color="#00f";
                  document.getElementsByTagName("label")[id].style.transition="0.3s all ease-in";

                  for(var i=0; i<=12; i++){
                    if(i!=id){
                        document.getElementsByTagName("label")[i].style.position="relative";
                        document.getElementsByTagName("label")[i].style.bottom="0px";
                        document.getElementsByTagName("label")[i].style.left="0px";
                        document.getElementsByTagName("label")[i].style.color="#586069";
                    }
                  } 


              }

          </script>
       </body>
</html>