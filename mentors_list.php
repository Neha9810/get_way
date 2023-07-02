<?php
session_start();
require "includes/database_connect.php";

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$mentor_name = $_GET["mentor_name"];

$sql_1 = "SELECT * FROM mentors WHERE name = '$name'";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$mentor = mysqli_fetch_assoc($result_1);
if (!$mentor) {
    echo "Sorry! The mentor is not available.";
    return;
}
$mentor_id = $mentor['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best mentors in <?php echo $mentor_name ?> | Best Entrepreuners</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/mentors_list.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $city_name; ?>
            </li>
        </ol>
    </nav>

    

        <?php
        foreach ($mentors as $mentor) {
            $mentor_images = glob("get_ur_way/img/" . $mentor['id'] . "/*");
        ?>
            <div class="property-card property-id-<?= $property['id'] ?> row">
                <div class="image-container col-md-4">
                    <img src="<?= $mentor_images[0] ?>" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="row no-gutters">
                            <div class="rent-container col-6">
                                <div class="fee">₹ <?= number_format($mentor['fee']) ?>/-</div>
                            <div class="rent-unit">per month</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        <?php
        }

        if (count($mentors) == 0) {
        ?>
            <div class="no mentor available">
                <p>No mentor to list</p>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="filter-heading">Filters</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h5>Gender</h5>
                    <hr />
                    <div>
                        <button class="btn btn-outline-dark btn-active">
                            No Filter
                        </button>
                        
                          <button class="btn btn-outline-dark">
                             <i class="fas fa-mars"></i>Male
                          </button>
                        <button class="btn btn-outline-dark">
                            <i class="fas fa-venus"></i>Female
                        </button>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-success">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

    <script type="text/javascript" src="js/mentors_list.js"></script>
</body>

</html>
