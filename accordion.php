 <div class="accordion-wrapper header-link <?php echo $accordionPosition ?>">
            <a class="accordion broider" href=<?php echo "$accordionUrl" ?>>
                <section class="accordion-item"><?php echo $accordionTitle ?>
                   <div class="accordion-item-content">
                 		<div class="accordion-link-wrapper">
							 <?php
                                    $args = array(
                                      'numberposts' => 100,
                                      'category_name'   => $accordionType,
                                      'orderby' => 'post_date',
                                      'order' => 'ASC',
                                      'post_status' => 'publish'
                                    );

                                    $latest_posts = get_posts( $args );

                                    if (empty($latest_posts)) {
                                        echo '<p class="accordion-link"> nothing here yet </p>';
                                    }
                                    else {
                                        foreach($latest_posts as $item) {
                                            $raw_date = $item->post_date;
                                            $date = date_format(date_create($raw_date),"n.j.y");
                                            $title = $item->post_title;
                                            $link = get_permalink($item);
                                            echo "<p class='accordion-link' data-link='$link'>$title</p>";
                                        }
                                    }
                                 ?>
						</div>
                     </div>
                     </section>
                </a>
		</div>