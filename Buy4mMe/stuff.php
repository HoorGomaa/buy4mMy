<?php include('header.php');
include('connection.php') 
?>
<div class="page shirts section">
	    <div class="wrapper">
	        <h1>My Full Catalog of Stuff</h1>
	    
            <?php 
            $stuff = array();
            $query = 'SELECT* FROM stuff' ;
            $result =mysqli=query ($conn,$query);
            while ($row= mysqli_fetch_assoc($result))
            {
                $stuff[$row['ID']]=array(
                    "name" => $row['name'],
                    "img" =>
                )
            }
            ?>
            <ul class="products">
                <?php foreach($stuff as $key => $value) {?>
                   <?php echo '<li><a href="#">
							<img src="'.$value["img"]. '"alt="'.$value["name"].'">
							<p>View Details</p>
						</a>
					</li>	
                    '?>
                    
                    <?php }?>
			</ul>
	    
	    
	    
	    
	    </div>    
	</div>
</div>
<?php include('footer.php'); ?>
