<?php
// $string = file_get_contents("sampleData.json");
//echo $string;
//$data = json_decode($string, true);

$jsonData = file_get_contents("sampleData.json");
$phpArray = json_decode($jsonData, true);
//foreach ($phpArray as $key => $value) { 
//    echo "<h2>$key</h2>";
//    foreach ($value as $k => $v) { 
//        echo "$k | $v <br />"; 
//    }
//}
?>
	
	
	<div class="project_page clearfix">
	    <div class="flexslider clearfix">
		<ul class="slides">
		    <li><img src="images/flexslider1.jpg"></li>
		    <li><img src="images/flexslider2.jpg"></li>
		    <li><img src="images/flexslider3.jpg"></li>
		</ul>
	    </div>

	    <div class="project_content clearfix">
		<div class="three_fourth">
		    <h4 class="black mb">Overview</h4>

		    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tellus tellus, auctor eget vestibulum consectetur, euismod et nisi. Suspendisse malesuada pellentesque justo, at molestie dui convallis in. Fusce sollicitudin est ut arcu auctor posuere. In ut urna vel velit condimentum placerat. Proin tortor dolor, porta pharetra blandit non, dictum at risus. Suspendisse at cursus dolor. Etiam nec tincidunt erat.<br>
		    <br>
		    Etiam volutpat feugiat massa non pretium. Integer risus sem, consequat id feugiat ac, placerat tristique sem. Donec vitae felis id lorem imperdiet vestibulum bibendum in mauris. Nullam id sem ligula. Donec tincidunt rhoncus turpis, et pharetra nunc volutpat quis. Curabitur porttitor odio quis velit condimentum dapibus.</p><a class="btn-small" href="#">Launch website</a>
		</div>

		<div class="one_fourth last">
		    <h4 class="black mb">What we did</h4>

		    <ul class="categories">
			<div style="color: #ff0000;">
			    
			    
			Animal selected : <?php  print $phpArray->{'u1'}->{'user'}; ?>
			<?php echo $_GET["animal"]; ?>
</div>
			<li><a href="#">eCommerce</a></li>

			<li><a href="#">Flash Animation &amp; Ads</a></li>

			<li><a href="#">TV Advertising</a></li>

			<li><a href="#">Online Magazines</a></li>

			<li><a href="#">Email marketing</a></li>
		    </ul>
		</div>
	    </div>
	</div>
