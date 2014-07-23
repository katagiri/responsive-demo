<div id="sidebar">
<!--width: <input id="value1" /><br />
remainder: <input id="value2" /><br />
margin: <input id="value3" /><br />
products: <input id="value4" /><br />
display: <input id="value5" /><br />
window: <input id="value6" /><br />-->
    
    <?php
	$search_query = str_replace(" ", "+", $_GET['search']);
	// echo $search_query;
	
	$brands = array(
		array('List Item', 'search+for+item+1'),
		array('List Item', 'search+for+item+2'),
		array('List Item', 'search+for+item+3'),
		array('List Item', 'search+for+item+4')
		);
	foreach ($brands as $brand) {
		$brand2[] = $brand[1]; 
	}
	if (in_array($search_query, $brand2)) {
		$active = 'brands';
	}
		
	$news = array(
		array('List Item', 'search+for+item+5'),
		array('List Item', 'search+for+item+6'),
		array('List Item', 'search+for+item+7'),
		array('List Item', 'search+for+item+8')
		);
	foreach ($news as $new) {
		$new2[] = $new[1]; 
	}
	if (in_array($search_query, $new2)) {
		$active = 'news';
	}
	
		
	$foods = array(
		array('List Item', 'search+for+item+9'),
		array('List Item', 'search+for+item+10'),
		array('List Item', 'search+for+item+11'),
		array('List Item', 'search+for+item+12')
		);
	foreach ($foods as $food) {
		$food2[] = $food[1]; 
	}
	if (in_array($search_query, $food2)) {
		$active = 'foods';
	}
	
	// echo $active;
	?>
		
    
    
    <h3 onclick="javascript: toggleIt('brand')" <?php if ($active == 'brands') {echo 'class="ui-state-active"';} ?>>Brand</h3>
    <div id="brand" class="list <?php if ($active != 'brands') {echo 'hide';} ?>">
        <ul>
            <?php 
			foreach ($brands as $brand) {
				echo '<a href="products.php?search='.$brand[1].'"><li'; 
				if ($search_query == $brand[1]) { echo ' class="highlight"'; } 
				echo '>'.$brand[0].'</li></a>'; 
			}
			?>
        </ul>
    </div>
    
    <h3 onclick="javascript: toggleIt('new')" <?php if ($active == 'news') {echo 'class="ui-state-active"';} ?>>New Products</h3>
    <div id="new" class="list <?php if ($active != 'news') {echo 'hide';} ?>">
        <ul>
            <?php 
			foreach ($news as $new) {
				echo '<li'; 
				if ($search_query == $new[1]) { echo ' class="highlight"'; } 
				echo '><a href="products.php?search='.$new[1].'">'.$new[0].'</a></li>'; 
			}
			?>
        </ul>
    </div>
    
    <h3 onclick="javascript: toggleIt('food')" <?php if ($active == 'foods') {echo 'class="ui-state-active"';} ?>>Food</h3>
    <div id="food" class="list <?php if ($active != 'foods') {echo 'hide';} ?>">
        <ul>
            <?php 
			foreach ($foods as $food) {
				echo '<li'; 
				if ($search_query == $food[1]) { echo ' class="highlight"'; } 
				echo '><a href="products.php?search='.$food[1].'">'.$food[0].'</a></li>'; 
			}
			?>
        </ul>
    </div>

   
</div>