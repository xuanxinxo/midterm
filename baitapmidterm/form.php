<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./index.css">

<head>
    <title>Đăng nhập</title>
</head>


<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Login Form
            </div>
            <div class="title signup">
                Signup Form
            </div>
        </div>
        <div class="form-container">
            <div class="form-inner">
                <form action="#" class="signup" method='post'>
                    <div class="field">
                        <label>email</label>
                        <input type="text" name='email' placeholder="">
                    </div>
                    <div class="field">
                        <label>lastname</label>
                        <input type="text" name='lastname' placeholder="">
                    </div>
                    <div class="field">
                        <label>firstname</label>
                        <input type="text" name='firstname' placeholder="">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="text" name='pass' placeholder="Enter Pass">
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="btn" value="Login">
                    </div>
                    <?php
                    if (isset($_POST['btn'])) {

                        function checkfirstname($firstname)
                        {

                            if (empty($firstname)) {
                                return "Firstname không được để rỗng <br>";
                            } else {
                                if (is_string($firstname)) {
                                    return "true";
                                } else {
                                    return "First Name không được chứa số <br>";
                                }
                            }
                        }
                        function checklasttname($lastname)
                        {
                            if (empty($lastname)) {
                                return "Lastname không được để rỗng <br>";
                            } else {
                                if (is_string($lastname)) {
                                    return "true";
                                } else {
                                    return "Last Name không được chứa số <br>";
                                }
                            }
                        }
                        function checkPassword($pass)
                        {
                            $n = strlen($pass);
                            if (empty($pass)) {
                                return "Mật khẩu không được để rỗng <br>";
                            } elseif ($n >= 8) {
                                return "Mật khẩu không quá 8 kí tự <br>";
                            } else {
                                return "true";
                            }
                        }

                        function checkEmail($email)
                        {
                            if (empty($email)) {
                                return "Email không được để rỗng <br>";
                            } else {
                                return "true";
                            }
                        }

                        $email = $_POST['email'];
                        $Cemail = checkEmail($email);

                        $fistname= $_POST['fistname'];
                        $Cfname = checkfirstname($fname);

                        $lastname = $_POST['lastname'];
                        $Clname = checklasttname($lname);

                        $password = $_POST['password'];
                        $Cpassword = checkPassword($password);

                        if ($Cemail == "true" && $Cpassword == "true" && $Cfname == "true" && $Clname == "true") {
                            echo "<table class='table'>";
                            echo "<tr>";
                            echo "<th>Email</th>";
                            echo "<th>FirstName</th>";
                            echo "<th>LastName</th>";
                            echo "<th>Password</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>" . $email . "</td>";
                            echo "<td>" . $fname . "</td>";
                            echo "<td>" . $lname . "</td>";
                            echo "<td>" . $password . "</td>";
                            echo "</tr>";
                            echo "</table>";
                        } else {
                            if ($Cemail != "true") {
                                echo $Cemail;
                            }
                            if ($Cfname != "true") {
                                echo $Cfname;
                            }
                            if ($Clname != "true") {
                                echo $Clname;
                            }
                            if ($Cpassword != "true") {
                                echo $Cpassword;
                            }
                        }
                    }

                    ?>
</body>

</html>