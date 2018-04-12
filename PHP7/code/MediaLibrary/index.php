<?php 
  include 'inc/data.php';
  include 'inc/functions.php';
  
    $pageTitle = "My Personal Media Library";
	$section = null;
    include 'inc/header.php';?>
	
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>

				<ul class="items">
				<?php
				$random = array_rand($catalog,4);
				
				foreach($random as $id) {
				   echo get_item_html($id, $catalog[$id]);
				 }	
                ?> 									
				</ul>

			</div>

		</div>	

<?php include 'inc/footer.php';?>

<!--
</div>
	<div class="footer">

		<div class="wrapper">

			<ul>		
				<li><a href="http://twitter.com/treehouse">Twitter</a></li>
				<li><a href="https://www.facebook.com/TeamTreehouse">Facebook</a></li>
			</ul>

			<p>&copy;2015 Personal Media Library</p>

		</div>
	
	</div>

</body>
</html>
-->