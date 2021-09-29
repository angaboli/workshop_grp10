<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

add_view($conn, $visitor_ip, $page_id);

?>

<!-- header file -->
<?php require_once('includes/header.php'); ?>

<header class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1600x900')">
    <div class="text-center my-5">
        <h1 class="text-white fs-3 fw-bolder">Mefier vous des mail inconue</h1>
    </div>
</header>
        <!-- Content section-->
<section class="py-5">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2>Mefier vous des mail inconue</h2>
                <p class="lead">A single, lightweight helper class allows you to add engaging, full width background images to sections of your page.</p>
                <p class="mb-0">The universe is almost 14 billion years old, and, wow! Life had no problem starting here on Earth! I think it would be inexcusably egocentric of us to suggest that we're alone in the universe.</p>
				<?php
				$total_website_views = total_views($conn); // Returns total website views
				echo "<strong>Total Website Views:</strong> " . $total_website_views;

				?>
            </div>
        </div>
    </div>
</section>

	
</div>


<!-- footer file -->
<?php require_once('includes/footer.php'); ?>