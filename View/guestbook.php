<?php

if (isset($_POST['submit'])) {


    $title = $_POST['title'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];

    $additionalArray = array(
        'title' => $title,
        'name' => $name,
        'date' => $date,
        'comment' => $comment
    );


    /*if (isset($_POST['submit'])) {
        $file = "guestbook.json";
        $json_string = json_encode($_POST, JSON_PRETTY_PRINT);
        file_put_contents($file, $json_string, FILE_APPEND);

        $title= $_POST['Title'];
        $email = $_POST['Email'];
        $firstname = $_POST['Firstname'];
        $lastname = $_POST['Lastname'];
        $comments = $_POST['Comments'];



        $additionalArray = array(
            'Title' => $title,
            'Email' => $email,
            'Firstname' => $firstname,
            'Lastname' => $lastname,
            'Comments' => $comments,
        );*/

//open or read json data
    $data_results = file_get_contents('guestbook.json');
    $tempArray = json_decode($data_results);

//append additional json to json file
    $tempArray[] = $additionalArray;
    $jsonData = json_encode($tempArray);

    file_put_contents('guestbook.json', $jsonData);


}


?>


<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Book</title>
</head>
<body>


<h1>Form</h1>
<form name="form1" method="post" action="">
    <div class="form-group pt-5">

        <p>
            <label for="dob"> Title:</label>
            <input type="text" name="comment" placeholder="Title" id="comment">
        </p>
        <p>
            <label for="name">Name: </label>
            <input type="text" name="title" id="title" placeholder="Your full name" autofocus required>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="name" placeholder="Enter your email" id="name">
        </p>
        <p>
            <label for="cell">Comment: </label>
            <input type="text" name="date" placeholder="Feedback" id="date">
        </p>

        <p style="text-align: left;">
            <input type="submit" name="submit" id="submit">
        </p>
    </div>
</form>


<!--<div class="container">
    <div class="py-5 text-center">
        <img
                src="https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&ved=2ahUKEwj28LCluK_lAhWCbVAKHfXiDn4QjRx6BAgBEAQ&url=https%3A%2F%2Fresponsive-muse.com%2Fproduct%2Fguestbook-widget%2F&psig=AOvVaw3F0YNE7HFOemCnUf0_d9xW&ust=1571819017354284"
                alt="" width="72"
                height="72">
        <h2>Guest Book</h2>
        <p class="lead"></p>
    </div>-->

    <!--<div class="row">


        <div class="col-md-8 order-md-1">

            <form class="needs-validation" novalidate="">
                <div class="col-md-6 mb-3">

                    <label for="firstName">Title</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" name="Title" required="">
                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="Firstname" placeholder="" name="Firstname"
                                   required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="Lastname" placeholder="" name="Lastname"
                            required="">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Please enter your comments</label>
                        <div class="input-group">

                            <input type="text" class="form-control" id="Comments" placeholder="Comments" name="Comments" required="">

                        </div>
                    </div>-->


    <!--         <div class="mb-3">
                 <label for="address">Enter your e-mail</label>
                 <input type="text" class="form-control" id="address" placeholder="user@hotmail.com" name="Email"
                        required="">

             </div>

             <div class="mb-3">


                 <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="save-info">
                     <label class="custom-control-label" for="save-info">Save this information for next
                         time</label>
                 </div>
                 <hr class="mb-4">


             </div>-->-






<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2019 Becode</p>


    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
        crossorigin="anonymous"></script>
<script src="form-validation.js"></script>


</body>
</html>
