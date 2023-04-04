
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
        
        height: 300px;
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
         #email {
        border: 2px solid rgb(5, 5, 5);
        width: 210px;
        height: 30px;
        outline: none;
        font-size: 15px;
        padding-left: 10px;
        color: rgb(0, 0, 0);
        border-radius: 20px;


    }

    #email:hover {
        border: 2px solid rgb(3, 255, 200);
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

</style>

<body>
    
    <div class="container">
        <h1>Reset-Password</h1>
        <hr>
        <form action="backpasswordrecover.php" autocomplete="off" method="POST">
<div class="sinup-form">

                <input type="Email" name="myemail" id="email" class="eemails" placeholder="Enter email">
                <span1 id="eemail"></span1>
            </div>
            <div class="submit">
                <input type="submit" name="mysubmit" id="sub">

            </div>
    </div>
    </form>