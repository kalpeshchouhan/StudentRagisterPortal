
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Sin up</title>
</head>
<style>
    * {
        font-family: 'Josefin Sans', sans-serif;
    }

    body {
        background-color: silver;
        /* background: url(https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-fresh-students-on-the-way-to-school-advertising-background-backgroundstudentgrasslandcloudblue-skygo-image_75858.jpg); */


    }

    .container {
        
        height: 350px;
        width: 300px;
        background: white;
        border-radius: 20px;
        margin: auto;
        margin-top: 200px;

        box-shadow: 0px 0px 18px black;
        }
        .eemails{
            margin-left: 30px;
            margin-top: 50px;
        }
        #pass {
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;

    }

    #pass:hover {
        border: 2px solid rgb(3, 255, 200);
        transition-duration: 2s;

    }

    #conpass {
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;


    }

    #conpass:hover {
        border: 2px solid rgb(3, 255, 3);
        transition-duration: 2s;
    }
.container h1{
    font-size: 20px;
    text-align: center;
    padding-top: 20px;
}
#sub {
        height: 40px;
        width: 150px;
        font-size: 20px;
        border-radius: 20px;
        transition: background-color;
        transition-duration: 2s;
        background-color: rgb(247, 137, 11);
        /* box-shadow: 0px 0px 20px rgb(12, 255, 93); */
        outline: none;
        border: none;
    }

    #sub:hover {
        background-color: rgb(43, 255, 0);

    }
.submit{
    margin-left: 60px;
     margin-top: 50px; 
     
}
.pass{
    margin-left: 30px;
}
span1 {
        color: rgb(253, 0, 0);
        font-size: 11px;
        margin-left: 50px;
    }
</style>

<body>
    
    <div class="container">
        <h1>Create-Password</h1>
        <hr>
        <form action="#" autocomplete="off" onsubmit="return validation()" method="POST">
            <div class="sinup-form">

                <input type="password" name="mypassword" id="pass"class=" eemails" placeholder="Enter password">
                <span1 id="passs"></span1>

            </div>
            <br>
            <div class="sinup-form">

                <input type="password" name="confirmpassword" id="conpass" class="pass"  placeholder="Re-enter password ">
                <span1 id="conpasss"></span1>
            </div>
            <div class="submit">
                <input type="submit" name="mysubmit" id="sub">

            </div>
    </div>
    </form>
    <script>
        function validation() {

            var password = document.getElementById('pass').value;
            var conformpassword = document.getElementById('conpass').value;

            if (password == "") {
                document.getElementById('passs').innerHTML = "**please enter password**";
                return false;
            }
            if (password.length < 6 || password.length > 6) {
                document.getElementById('passs').innerHTML = "**length must be six**";
                return false;
            }
            if (password.search(/[0-9]/) == -1) {
                document.getElementById('passs').innerHTML = "**password contain one numeric**";
                return false;
            }
            if (password.search(/[a-z]/) == -1) {
                document.getElementById('passs').innerHTML = "**Enter atleast one lowercase**";
                return false;
            }
            if (password.search(/[A-Z]/) == -1) {
                document.getElementById('passs').innerHTML = "**Enter contain atleast one uppercase**";
                return false;
            }
            if (password.search(/[!\@\#\$\%\^\&\*\(\)\+\_\-\<\>\,\.\?\;\=\:]/) == -1) {
                document.getElementById('passs').innerHTML = "**Enter atleast one special char**";
                return false;
            }
            else {
                document.getElementById('passs').innerHTML = "";
            }
            if (conformpassword != password) {
                document.getElementById('conpasss').innerHTML = "**password doesn't match**";
                return false;
            }
            else {
                document.getElementById('conpasss').innerHTML = "";
            }
        }
        </script>
</body>

</html>
