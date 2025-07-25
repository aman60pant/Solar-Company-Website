<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Branch | SHRI SOLAR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content name="keywords">
    <meta content name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>

        #block1 {
            background-color: darkgreen;
            transition: transform 0.3s ease;
        }


        #block1 h1,
        #block1 h4 {
            color: white;
            font-weight: bold;
        }

        #block1 p {
            color: white;

        }

        #block2 label {
            width: 100%;
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        #block2 input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #block2 button {
            padding: 12px 25px;
            font-size: 16px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        #block2 button:hover {
            background-color: #0056b3;
        }

        .button-wrapper {
            display: flex;
            justify-content: center;
        }

        .zoom-div:hover {
            transform: scale(1.01);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Header Start  -->
     <?php
        include 'include/header.php'
     ?>
     <!-- Header End  -->

    <!-- Image Banner Start -->
    <div class="container-fluid" style="position: relative; padding: 0;">
        <img src="img/contact-us.jpg" alt="Banner Solar Power" style="width: 100%; height: 350px; display: block;">

        <div
            style=" position: absolute; bottom: 0; left: 0; width: 100%; background: rgba(0, 0, 0, 0.6); padding: 15px 30px;">
            <h2 style=" color: white; margin: 0; padding: 10px 0px; font-size: 50px; font-weight: bold;">Contact Us</h2>
        </div>
    </div>
    <!-- Image Banner End -->

    <div class="row" style="padding: 80px 30px; height: 700px;">
        <div class="col-lg-6  zoom-div" id="block1">
            <h1>Start a new project?</h1>
            <h4 class="mt-5">Address</h4>
            <p class="mt-5">122, Udyog Kendra 2, Ecotech III, Greater Noida, Tusyana, Uttar Pradesh 201306</p>
            <h4 class="mt-5">Phone</h4>
            <p class="mt-5">Mobile: (+91) 9958552010</p>
            <h4 class="mt-5">E-mail</h4>
            <p class="mt-5">sales@shrisolar.in</p>
            <p>service@shrisolar.in</p>
        </div>
        <div class="col-lg-6" id="block2">
            <h1>Talk To Us..!!</h1>
            <form>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="number">Number</label>
                <input type="tel" id="number" name="number" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email">

                <label for="state">State</label>
                <input type="text" id="state" name="state" required>

                <label for="district">District</label>
                <input type="text" id="district" name="district" required>

                <div class="button-wrapper">
                    <button type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Footer and Copyright -->
    <div id="foot&cpy-placeholder"></div>
    <?php
    include 'include/footer.php'
    ?>
    <!-- Copyright and Footer End -->

</body>

</html>