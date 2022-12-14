<?php
include_once('includes/functions.php');
$function = new functions;
include_once('includes/custom-functions.php');
$fn = new custom_functions;

?>
<?php
if (isset($_GET['id'])) {
    $ID = $db->escapeString($_GET['id']);
} else {
    // $ID = "";
    return false;
    exit(0);
}

if (isset($_POST['btnEdit'])) {

	$link = $db->escapeString(($_POST['link']));


	if (!empty($link) ) 
	{
		if ($_FILES['image']['size'] != 0 && $_FILES['image']['error'] == 0 && !empty($_FILES['image'])) {
			//image isn't empty and update the image
			$old_image = $db->escapeString($_POST['old_image']);
			$extension = pathinfo($_FILES["image"]["name"])['extension'];
	
			$result = $fn->validate_image($_FILES["image"]);
			$target_path = 'upload/advertisement/';
			
			$filename = microtime(true) . '.' . strtolower($extension);
			$full_path = $target_path . "" . $filename;
			if (!move_uploaded_file($_FILES["image"]["tmp_name"], $full_path)) {
				echo '<p class="alert alert-danger">Can not upload image.</p>';
				return false;
				exit();
			}
			if (!empty($old_image)) {
				unlink($old_image);
			}
			$upload_image = 'upload/advertisement/' . $filename;
			$sql = "UPDATE homeadvertisement SET `image`='" . $upload_image . "' WHERE `id`=" . $ID;
			$db->sql($sql);
		}  
				$sql_query = "UPDATE homeadvertisement SET link='$link' WHERE id=$ID";
				$db->sql($sql_query);
				$result = $db->getResult();
			if (!empty($result)) {
				$result = 0;
			} else {
				$result = 1;
			}

			if ($result == 1) {
				
				$error['update_advertisement'] = "<section class='content-header'>
												<span class='text text-success'>Advertisement Updated Successfully</span> </section>";
			} else {
				$error['update_advertisement'] = " <span class='text text-danger'>Failed</span>";
			}
			}

	}
// create array variable to store previous data
$data = array();

$sql_query = "SELECT * FROM homeadvertisement WHERE id =" . $ID;
$db->sql($sql_query);
$res = $db->getResult();

if (isset($_POST['btnCancel'])) { ?>
	<script>
		window.location.href = "homeadvertisement.php";
	</script>
<?php } ?>

    <?php echo isset($error['update_advertisement']) ? $error['update_advertisement'] : ''; ?>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

		<!-- Content wrapper start -->
		<div class="content-wrapper">

					<!-- Row Start -->
					<div class="row gutters">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							
							<div class="card">
								
								<form name="edit_advertisement_form" method="post" enctype="multipart/form-data">
									<div class="card-body">
									<input type="hidden" id="old_image" name="old_image"  value="<?= $res[0]['image']; ?>">
											<h3>Edit Advertisement</h3>
											<section>
												<h6 class="h-0 m-0">&nbsp;</h6>
												   <div class="row gutters">
														<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
															
															<div class="field-wrapper">
																<input type="text" placeholder="Enter Link" name="link" value="<?php echo $res[0]['link']; ?>">
																<div class="field-placeholder">Link<i class="text-danger asterik">*</i><?php echo isset($error['link']) ? $error['link'] : ''; ?></div>
															</div>

														</div>
													</div>
												    <div class="row gutters">
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border:1px solid;">
																<div class="field-wrapper" >
																	<div class="field-placeholder">Upload Image <span class="text-danger">*</span></div>

																		<div class="dz-message needsclick">
																		<input type="file" accept="image/png,  image/jpeg" onchange="readURL(this);"  name="image" id="image">
                                                                         <p class="help-block"><img id="blah" src="<?php echo $res[0]['image']; ?>" style="margin:10px;" /></p>
																		</div>					
															    </div>
														    </div>
												    </div>
											</section>
		                            </div>

									<div class="card-footer">
											<button type="submit" class="btn btn-primary" name="btnEdit">Update</button>
									</div>
								</form>

							</div>

						</div>
					</div>
					<!-- Row End -->

		</div>
		<!-- Content wrapper end -->

		<!-- App footer start -->
		<div class="app-footer">?? kaalgyaan 2022</div>
		<!-- App footer end -->

</div>
<!-- Content wrapper scroll end -->


<div class="separator"> </div>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(500)
                        .height(400);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<?php $db->disconnect(); ?>