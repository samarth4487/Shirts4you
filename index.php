<?php
$pageTitle = 'Shirts 4 Mike';
include('includes/header.php');
?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<?php include('products.php'); ?>
				<ul class="products">
					<?php $total = count($products);
						  $initial = 0;
					?>
					<?php foreach($products as $product_id => $product) { 
						$initial = $initial + 1;
						if($total - $initial < 4){
							echo '<li>';
							echo '<a href="shirt.php?id=' . $product_id . '">';
							echo '<img src="' . $product['img'] . '" alt="' . $product['name'] . '">';
							echo '<p>View Details</p>';
							echo '</a>';
							echo '</li>';
					}
					}
					?>
				</ul>

			</div>

		</div>
<?php
include('includes/footer.php');
?>