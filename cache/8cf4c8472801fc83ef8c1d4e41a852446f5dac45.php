<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
                        <?php 

                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?>
                            <img class='avatar' style="border-radius:50%; margin:5px;"
                            src="<?php echo ($_SESSION['auth']['avatar']) ?>" width="30" height="30">
                            <?php
                            echo "<a style='color: #ddd;padding: 0 25px 0 0px;' class='flex-c-m trans-04 p-lr-25'>".($_SESSION['auth']['name']."</a>");


                            if(($_SESSION['auth']['role']) == 2){
                                echo " <a href='admin'  class='flex-c-m trans-04 p-lr-25'> Quản trị</a>";
                            }
                            echo " <a href='logout' class='flex-c-m trans-04 p-lr-25'> Đăng xuất </a>";

                        }else{
                        
                            echo "<a href='login' class='flex-c-m trans-04 p-lr-25'>Đăng nhập</a>";
                            echo "<a href='logup' class='flex-c-m trans-04 p-lr-25'>Đăng kí</a>";
                        }?>


                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="./" class="logo">
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li >
                                <a href="./">Home</a>
                            </li>

                            <li>
                                <a href="shop">Shop</a>
                            </li>

                            <li class="active-menu">
                                <a href="blog">Blog</a>
                            </li>

                            <li>
                                <a href="about">About</a>
                            </li>

                            <li>
                                <a href="contact">Contact</a>
                            </li>
                        </ul>
                    </div>	

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                        <?php
                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?> <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" 
                            data-notify=" <?php
                                            if(isset($_SESSION['cart']) == true ){
                                                echo count($_SESSION['cart']);
                                             }else{
                                                 echo "0";
                                             }
                                              ?>">
                            <i class="zmdi zmdi-shopping-cart"></i>
                            </div><?php
                        }
                        ?>


                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
            <img src="images/icons/logo-003.png" alt="IMG-LOGO" width="140" height="50" >
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <?php
                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?> <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" 
                            data-notify=" <?php
                                            if(isset($_SESSION['cart']) == true ){
                                                echo count($_SESSION['cart']);
                                             }else{
                                                 echo "0";
                                             }
                                              ?>">
                            <i class="zmdi zmdi-shopping-cart"></i>
                            </div><?php
                        }
                        ?>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">

                        <?php 
                        if(isset($_SESSION['auth']['name']) == "name"){
                            ?>
                            <img class='avatar' style="border-radius:50%; margin:5px;"
                            src="<?php echo ($_SESSION['auth']['avatar']) ?>" width="30" height="30">
                            <?php
                            echo "<a style='color: #ddd;padding: 0 25px 0 0px;' class='flex-c-m p-lr-10 trans-04'>".($_SESSION['auth']['name']."</a>");


                            if(($_SESSION['auth']['role']) == 2){
                                echo " <a href='admin'  class='flex-c-m p-lr-10 trans-04'> Quản trị</a>";
                            }
                            echo " <a href='logout' class='flex-c-m p-lr-10 trans-04'> Đăng xuất </a>";

                        }else{
                        
                            echo "<a href='login' class='flex-c-m p-lr-10 trans-04'>Đăng nhập</a>";
                            echo "<a href='logup' class='flex-c-m p-lr-10 trans-04'>Đăng kí</a>";
                        }?>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="./">Home</a>


                </li>

                <li>
                    <a href="shop">Shop</a>
                </li>
                <li>
                    <a href="blog">Blog</a>
                </li>

                <li>
                    <a href="about">About</a>
                </li>

                <li>
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
					Your Cart
				</span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">

				<?php 
					if(isset($_SESSION['cart']) == true ){

					$tongTien = 0;
					foreach($_SESSION['cart'] as $id_product=>$number){	
						foreach($products as $sp){
						if($sp['id'] == $id_product){	
							$tien_sp = $number * $sp['price'];
							$tongTien += $tien_sp;
							$tien_sp_fm = number_format($tien_sp);
				?>	                  

						<li class="header-cart-item flex-w flex-t m-b-12">
							<a href="<?php echo "delete-cart?id={$sp['id']}" ?>">
								<div class="how-itemcart1">
								<img src="<?php echo e(getClientUrl($sp->image)); ?>" alt="IMG"></div>
							</a>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo"{$sp['name']}" ?>
							</a>

							<span class="header-cart-item-info">
							<?php echo $number ?> x $ <?php echo number_format($sp['price'])?>
							<?php

							?>
							</span>
						</div>
					</li>
				<?php 
				}  }  }
				}else{
					echo " không có sản phẩm nào";
				}

					
				?>

                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $ <?php
                        if(isset($_SESSION['cart']) == true )
                        {
							echo number_format($tongTien); 
                        }
                        else{
                            echo "0";
                        } 
                        ?>

                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="shoping-cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

                        <a href="order-detail" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
						your order
						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<div class="p-b-63">
							<a href="<?php echo e(getClientUrl('blog-detail', ['id'=>$item->id])); ?>" class="hov-img0 how-pos5-parent">
								<img src="<?php echo e(getClientUrl($item->image)); ?>" alt="IMG-BLOG"  header="550" >

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<!-- <span class="ltext-107 cl2 txt-center">
										<?php echo e($item->updated_at); ?>

									</span> -->

									<span class="stext-109 cl3 txt-center">
									<?php echo e($item->updated_at); ?>

									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="<?php echo e(getClientUrl('blog-detail', ['id'=>$item->id])); ?>" class="ltext-108 cl2 hov-cl1 trans-04">
									<?php echo e($item->name); ?>

									</a>
								</h4>

								<p class="stext-117 cl6">
								<?php echo e($item->short_desc); ?>

								</p>

								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
										<?php echo e($item->tags); ?>  
										</span>

									</span>

									<a href="blog-detail.html" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
										Continue Reading

										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<!-- Pagination -->
						<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
								1
							</a>

							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
								2
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Blog News
							</h4>

							<ul>
									<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li class="bor18">
							        <a href="<?php echo e(getClientUrl('blog-detail', ['id'=>$item->id])); ?>" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										<?php echo e($item->name); ?>									
									</a>
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Featured Products
							</h4>

							<ul>

								<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="<?php echo e(getClientUrl($item->image)); ?>" alt="PRODUCT" width="90" header="110">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
										<?php echo e($item->name); ?>

										</a>

										<span class="stext-116 cl6 p-t-20">
											$<?php echo e($item->price); ?>

										</span>
									</div>
								</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


							</ul>
						</div>

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">

								<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<a href="<?php echo e(getClientUrl('blog-detail', ['id'=>$item->id])); ?>" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									<?php echo e($item->tags); ?>

								</a>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
		

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
					<?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li class="p-b-10">
						<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
						<?php echo e($item->cate_name); ?>

						</a>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns 
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in <?php echo e($item->addres); ?>, or call us on <?php echo e($item->phone_number); ?>

                    </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a href="#" class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\Duan1\app\views/layouts2/blog.blade.php ENDPATH**/ ?>