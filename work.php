<?php 

      $no_intro = '';
      include_once "includes/functions.php";
      include_once "includes/connection.php";
      include 'init.php';
		?>

            <div class="whitespace"></div>

            <!--------------- hero section starts here --------------->
            <div class="container">

                  <div class="hero-content">
                        <br><br>

                        <div class="row">
                              <div class="col-lg-8">

                                    <h3 class="wow fadeInUp" data-wow-delay="1s"><?=$lang['work']?>.</h3><br>
                                    <p class="wow fadeInUp" data-wow-delay="1.2s"><?=$lang['work-intro']?></p>

                              </div>
                        </div>



            <!--------------- hero section ends here --------------->
		<div class="whitespace"></div>

		<form action="search.php" class="form-inline my-2 my-lg-0">
			  <input name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		</div>
            </div>
            <!--------------- projects section starts here --------------->
            <div class="container">
		<?php
			//pagination
			$sqlpg = "SELECT * FROM `post`";
			$resultpg = mysqli_query($conn, $sqlpg);
			$totalposts = mysqli_num_rows($resultpg);
			$totalpages = ceil($totalposts/9);
		?>
		<?php 
			//pagination get
			if(isset($_GET['p'])){
				$pageid = $_GET['p'];
				$start = ($pageid*9)-9;
				$sql = "SELECT * FROM `post` ORDER BY post_id DESC LIMIT $start,9";
			}else{
				$sql = "SELECT * FROM `post` ORDER BY post_id DESC LIMIT 0,9";
			}
		?>
<!--		<div class="card-columns"> -->
  <div class="row">
		<?php 
			
			$result = mysqli_query($conn, $sql);
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
    <div class="whitespace"></div>
			<?php 
				echo "<center>";
				for($i=1;$i<=$totalpages;$i++){
					?>
					<a href="project.php?p=<?php echo $i; ?>"><button class="btn btn-info"><?php echo $i; ?></button></a>&nbsp;
					<?php
				}
				echo "</center>";
			?>
		</div>
	<br><br>

  <div class="whitespace"></div>
            <!--------------- projects section ends here --------------->

<?php include $tpl .'footer.php'; ?>