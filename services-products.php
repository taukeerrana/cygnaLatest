<?php
	session_start();
	$pageTitle = 'Services&Products';
	include ('v-templates/header.php');
?>
<?php
	$page_id = 'p53a574c01b459';
?>
<?php
	//including post header to this page
	include ("v-templates/post-header.php");
?>

<!-- body starts here -->
<div id="profile_body_outline">
	
    <!-- div for showing success message--->
	<div class="alert alert-success" id="success_msg"></div>
	<!-- div for showing warning message--->
	<div class="alert alert-danger" id="warning_msg"></div>
    

	<div class="container">
    	<div class="row profile_body_row">
        	<!-- body left section starts here -->
        	<div class="col-md-10 profile_left_part_outline">
            	<div class="advertisement_body_outline">
                	<?php
						//get values
						$manageContent->getDynamicPageContent($page_id);
					?>
                </div>
            </div>
            <!-- body left section ends here -->
            <!-- body right section starts here -->
            <?php
            	//add add section
            	include 'v-modules/ads.php';
            ?>
            <!-- body right section ends here -->
        </div>
    </div>
</div>
<!-- body ends here -->
<?php
	if(isset($GLOBALS['_COOKIE']['uid']) || isset($_SESSION['user_id']))
	{
		include 'v-templates/post-footer.php';
	}
	else
	{
		include 'v-templates/footer.php';
	}
?>
