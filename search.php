<?php
    include_once "includes/connection.php";
    $no_intro = '';
    include_once "includes/functions.php";
    include 'init.php';
if(!isset($_GET['s'])){
	header("Location: work.php");
	exit();
}else{
	$search = mysqli_real_escape_string($conn, $_GET['s']);
	

    ?>

<div class="whitespace"></div>
            <!--------------- projects section starts here --------------->
            <div class="container">
            <h1>Showing All Results for <?php echo $search; ?></h1>
            <div class="row">
		<?php 
			$sql = "SELECT * FROM `post` WHERE `post_title` LIKE '%$search%' OR `post_content` LIKE '%$search%' OR `post_keywords` LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result)<=0){
				echo "No results Found";
				exit();
			}else{
			while($row=mysqli_fetch_assoc($result)){
				$post_title = $row['post_title']; 
				$post_image = $row['post_image']; 
				$post_author = $row['post_author']; 
				$post_content = $row['post_content'];
				$post_id = $row['post_id'];
				
			$sqlauth = "SELECT * FROM author WHERE author_id='$post_author'";
			$resultauth = mysqli_query($conn, $sqlauth);
			while($authrow=mysqli_fetch_assoc($resultauth)){
				$post_author_name = $authrow['author_name'];
			
			
		?>
			
			<div class="col-md-4 col-sm-6 padleft-right" style="width: 18rem;">
				<figure class="imghvr-fold-up">
                    <img class="img-responsive" src="<?php echo $post_image ?>" alt="Card image project">
				        <figcaption>
				            <h3><?php echo $post_title ?></h3>
				            <p><?php echo substr(strip_tags($post_content),0,10)."..."; ?></p>
                        </figcaption>
                    <a href="project.php?id=<?php echo $post_id; ?>"></a>
                </figure>
            </div>  
			
			<?php }}?>
        </div>
    </div>
    <?php }} ?>
<?php include $tpl .'footer.php'; ?>
