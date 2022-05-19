<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>User Login and Registration</title>
</head>

<body>
    <div class="container">
        <div class="Login-box">
            <div class="row">
                <div class="col-md-6 Login-left">
                    <h2> Login </h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>

                        </div>

                        <button type="submit" class="btn btn-primary my-3"> Login </button>

                    </form>
                </div>
                <div class="col-md-6 Login-right register">
                    <h2> Register </h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="Password" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" id="ConfirmPassword" class="form-control"
                                required>
                    <div class="ajaxerror"></div>


                        </div>
                        <div class="registrationFormAlert" style="color:green;" id="">


                            <div class="alert-light text-success text-center py-3" id="CheckPasswordMatch"></div>



                            <button type="submit" class="btn btn-primary my-3"> Register </button>

                    </form>
                </div>
            </div>
        </div>




        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- <script>
        function checkPasswordMatch() {
            var password = $("#Password").val();
            var confirmPassword = $("#ConfirmPassword").val();
            if (password != confirmPassword)
                $("#CheckPasswordMatch").html("Passwords does not match!");
            else
                $("#CheckPasswordMatch").html("Passwords match.");
        }
        $(document).ready(function() {
            $("#ConfirmPassword").keyup(checkPasswordMatch);
        });
        </script> -->
        <script>
$(document).ready(function(){
  $("#ConfirmPassword").keyup(function(){
    //   console.log('tis sis ');
    var password = $("#Password").val();
    var confirmPassword  = $("#ConfirmPassword").val();
    $.ajax({
      url:'showData.php',
      type:'post',
      data:{password:password,confirm_password:confirmPassword},
      success:function(response){
        if(response == 'Password match') {          
        console.log(response);
            $(".ajaxerror").html("Password match.");
        }
        else {      
            console.log($(".ajaxerror"));
            $(".ajaxerror").html("Password does not match.");
           
        }
       
      }
    });
    
});
});
</script>


        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>