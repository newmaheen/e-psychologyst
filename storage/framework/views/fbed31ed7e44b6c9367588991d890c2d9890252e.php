<!DOCTYPE html>

<html class="no-js">
<!-- Mirrored from webdesign-finder.com/html/psychologist/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 12:37:03 GMT -->
<?php echo $__env->make('front-end.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->
<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="http://webdesign-finder.com/html/psychologist/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>


<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">

        <!-- template sections -->

<?php echo $__env->make('front-end.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class = "ls section_padding_top_130 section_padding_bottom_100">
<div class="container">
<div class="row topmargin_60 bottommargin_60">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 text-center">
							<article class="vertical-item content-padding post format-standard with_shadow">

								<div class="item-media entry-thumbnail">
									<img src="images/blog_post1.jpg" alt="">
								</div>

								<div class="item-content entry-content">
									<header class="entry-header">

										<div class="entry-date small-text highlight">
											<a href="blog-right.html" rel="bookmark">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                <?php echo e($post->posting_date); ?>

                                                </time>
											</a>
										</div>

										<h4 class="entry-title">
											<a href="blog-single-right.html" rel="bookmark">How to avoid hostile attitude</a>
										</h4>

									</header>
									<!-- .entry-header -->

									<p class="fontsize_18">Exercitation cupim ex, short ribs cow in ullamco corned beef veniam kevin eu frankfurter...</p>

								</div>
								<!-- .item-content.entry-content -->
							</article>
						</div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
					</div>

</div>
</section>


<?php echo $__env->make('front-end.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<script src="js/compressed.js"></script>
<script src="js/main.js"></script>
<script src="js/switcher.js"></script>

</body>


<!-- Mirrored from webdesign-finder.com/html/psychologist/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 12:38:36 GMT -->
</html>

<?php /**PATH C:\xampp\htdocs\Psychologist\resources\views/front-end/Blog/blog.blade.php ENDPATH**/ ?>