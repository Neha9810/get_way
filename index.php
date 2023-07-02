<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Achieve your goals</title>

    <?php
    include "includes/head_links_ur_way.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Choose on your own</h2>

        <form id="search-form" action="mentors_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-name" id='name' name='name' placeholder="Enter name" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="recruiters-heading">
            Enlisting your choice   
        </h1>

        
        <div class="row">
            <div class="circle">
            <img src="img/R.jpeg" alt="Rishabh">
            <span class="name">Rishabh</span>
        </div>

        <div class="circle">
            <img src="img\H.jpeg" alt="Hemang">
            <span class="name">Hemang</span>
        </div>

        <div class="circle">
            <img src="img\K.jpeg" alt="Kirtika">
            <span class="name">Kirtika</span>
        </div>

        <div class="circle">
            <img src="img\P.jpeg" alt="Puneet">
            <span class="name">Puneet</span>
        </div>

            
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>
