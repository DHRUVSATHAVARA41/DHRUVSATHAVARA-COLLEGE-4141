<?php 
 require 'db-connect.php';


if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $feedback = $_POST["feedback"];
    $rate = $_POST["rate"];



    $query = "INSERT INTO `feedback`(`name`, `email`, `subject`, `feedback`, `rate`) VALUES ('$name','$email','$subject','$feedback','$rate')";

    $result = mysqli_query($conn, $query);
} 
?>


<!DOCTYPE html>
<html>

<head>
    <title>FEEDBACK FORM</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />

    <style>
        body {
            margin: 0 auto;
            background-image: url(bg-image1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        div.formContainer {
            margin: 4em auto 4em auto;
            width: 80%;
            color: #FCE205;
            border: 1px solid #45acb7;
            border-radius: 2px;
        }

        div.heading {
            margin: 0 auto 0 auto;
            width: 100%;
            padding: 1em 0 1em 0;
            letter-spacing: 0.1em;
            font-size: 1.2em;
            font-weight: bold;
            border-bottom: 1px solid #40ff8c;
            text-align: center;
            background-color: #604c93;
            color: #46ff0a;
        }

        div.description {
            padding: 1em 0 1em 0;
            width: 80%;
            margin: 0 auto 0 auto;
            text-align: center;
        }

        div.form {
            margin: 0 auto 0 auto;
            width: 100%;
        }

        div.form form {
            margin: 0 auto 0 auto;
            width: 80%;
        }

        div.form label {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: #00aafb;
            text-align: center;
            font-weight: bolder;
            letter-spacing: 0.1;
        }

        div.form input {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: #FCE205;
            padding: 1.2em 0 1em 1.2em;
            background-color: #4a6b83;
            border: 0.5px solid palegreen;
        }

        div.form textarea {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            outline: none;
            color: #FCE205;
            padding: 1.2em 0 1em 1.2em;
            background-color: #4a6b83;
            border: 0.5px solid palegreen;
            height: 8em;
            resize: none;
        }

        div.form .button1 {
            outline: none;
            margin: 2em auto 2em auto;
            padding: 2em;
            cursor: pointer;
            border: none;
            display: block;
            width: 60%;
            text-align: center;
            border: 1px solid palegreen;
            background-color: #4a6b83;
            color: #FCE205;
            font-weight: bolder;
            transition: all 0.2s linear;
        }

        div.form input:active,
        div.form input:focus,
        div.form select:active,
        div.form select:focus,
        div.form textarea:active,
        div.form textarea:focus,
        div.form button:active,
        div.form button:hover {
            box-shadow: 0 0 2px 2px white;
        }

        @keyframes status {
            from {
                transform: scale(0);
            }

            to {
                transform: scale(1);
            }
        }

        div.statusActive {
            display: block;
            width: 80%;
            margin: 1em auto 1em auto;
            padding: 1.2em 0 1em 1.2em;
            background-color: #FCE205;
            color: black;
            text-align: center;
            animation-name: status;
            animation-duration: 0.3s;
            transition: all 0.2s linear;
        }

        div.loadingActive {
            width: 90%;
            margin: 4em auto 4em auto;
            grid-template-columns: 33.3% 33.3% 33.3%;
            display: grid;
            transition: all linear 0.2s;
        }

        div.loadingActive div {
            padding: 0.5em;
            background-color: #FCE205;
            animation-name: rotatingDiv;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }

        @keyframes rotatingDiv {
            from {
                transform: rotate(-180deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @media only screen and (min-width: 1224px) {
            div.formContainer {
                width: 500px;
            }
        }

        @media only screen and (min-width: 1824px) {
            div.formContainer {
                width: 500px;
            }
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
            div.formContainer {
                width: 80%;
            }
        }

        ::placeholder {
            color: palegreen;
        }

        .rate {
            float: left;
            display: block;
            width: auto;
            margin: 0.5em 1em 2.5em 5.7em;
            outline: none;
            color: #FCE205;
            padding: 0.2em 2em 0em 2.3em;
            background-color: #4a6b83;
            border: 0.5px solid palegreen;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>

    <script>
        function democonfirm() {
            if (confirm("Are you Sure you want to Submit this Form??")) {
                alert("you have choose Yes option so press ok to Submit the Form");
            } else {
                alert("you have choose No option so press ok to Check the Form");

            }
        }
    </script>


</head>

<body>


    <div class="formContainer">
        <div class="heading">
            MY FEEDBACK
        </div>
        <div class="description">
        </div>
        <div class="form">
            <form id="form" action="" method="post">

                <!-- name section starts here  -->
                <label for="">Name</label>
                <input name="name" type="text" id="name" placeholder="Enter your Name here" required/>

                <!-- Email section starts here  -->

                <label for="">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter your Email here" required/>

                <!-- Subject section starts here  -->

                <label for="">Subject</label>
                <input name="subject" type="text" id="designation" placeholder="Enter your Subject here" required/>

                <!-- feedback section starts here  -->

                <label for="">Feedback</label>
                <textarea name="feedback" id="feedback" placeholder="Enter your feedback here" required></textarea>

                <!-- rating section starts here  -->
                <label for="">How Do You Like Our Services And Website??</label>
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text" required>5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text" required>4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text" required>3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text" required>2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text" required>1 star</label>
                </div>


                <!-- Submit section starts here  -->

                <input type="submit" name="submit" value="submit" class="button1" onclick="if(confirm('Are you Sure you want to Submit this Form??')){
                 alert('you have choose Yes option so press ok to Submit the Form');
                   }else{
                    alert('you have choose No option so press ok to Check the Form');

                      }">
            </form>
        </div>
    </div>

</body>

</html>