<?php

/**
 * Template Name: Employees
 */

get_header();

?>

<div id="primary">
	<div id="content" role="main">

<p><?php the_content(); ?></p>

			<?php
			$rows = get_field('employees');
			//get the specified field, or group of fields
			if( $rows ) {
				//if there are rows, continue through the loop

			    foreach( $rows as $row ) {
						//loop through each row

						echo '<div class="employee">';
							$image = $row['image'];
							//put the image array into a variable

					    if( !empty($image) ):
								//check to see if the image is empty

									echo '<img class="headshot" src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
									//grab items from the array and add to the img tag

					    endif;
							//end the if statement

									echo '<h4>' . $row['name_co'] . ' • ' . $row['title'] . '</h4>';
									//basic text field

									$logo = $row['division_logo'];
                                    //same as $image above

							    if( !empty($logo) ):

											echo '<img class="logo" src="' . $logo['url'] . '" alt="' . $logo['alt'] . '" />';
											echo '<span aria-hidden="true"><caption>' . $logo['caption'] . '</caption></span>';

							    endif;
									//end conditional statement

									echo '<p class="title">' . $row['division_title'] . '</p>';

									echo '<p class="years">Number of Years at Company:  ' . $row['years'] . '</p>';
									echo '<p class="bio">' . $row['bio'] . '</p>';

									echo '</div>';

			    }// end foreach

				}//end conditional
				?>



	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
