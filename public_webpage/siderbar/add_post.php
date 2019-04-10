<?php 
        $user = 'root'; $password = ''; $db = 'upand_running'; $host = '127.0.0.1'; $port = 3306;
         $conn = mysqli_connect($host, $user, $password, $db, $port);
         $mysqli = new mysqli($host, $user, $password, $db, $port);
         
         if (mysqli_connect_errno()) {
         	die("database connection failed:" .mysqli_connect_error().
         	"(".mysqli_connect_errno().")"
         	);
         }
?>
       <h4 class="mb-3 display-4 text-center">Add Post</h4>
       <div class="well" style="margin:auto; padding:auto; width:100%;">

        <div class="d-flex flex-wrap row-hl">
          <?php 
          if (isset($_GET['btn_search'])) {
                  $search= $_GET['search'];
                  $sql = $conn->query("SELECT * FROM addpost WHERE title LIKE '%$search%' OR
                  date LIKE '%$search%' OR textarea LIKE '%$search%'");
          }else{
          	  $sql = $conn->query("SELECT * FROM addpost");
              while($row = $sql->fetch_array()) {
                  $id= $row['post_id'];
                  $title= $row['title'];
                  $image= $row['image'];
                  $textarea= $row['textarea'];
                  $date= $row['date'];
                  ?>
            <div class="card bg-dark text-white item-hl mr-2 mb-2" style="width:20rem">
               <div class="card-header">
                   My Card <?php echo $title;?>
               </div>
               <img class="px-1 rounded" height="300px" src="../uploads/<?php echo $image;?>">
               <div class="card-body">
                   <h4 class="card-title">Card title</h4>
                   <p class="card-text"><?php 
                    if (strlen($textarea) > 200){
                        echo $textarea= substr($textarea,0,100).".....";
                    }else{
                     echo $textarea;
                    } ?></p>
                    <a href="full_post.php?id=<?php echo $id;?>" name="" id="" class="btn btn-primary"  role="button" style="float:right;">
                    Read More &rsaquo;&rsaquo;&rsaquo;</a>
                   <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
               </div>
               <div class="card-footer text-muted">
                 Last updated <?php echo $date;?>
               </div>
            </div>
            <?php }
        }?>
         </div>
            <br>
        </div>
            

         <!-- <div class="card">
            <div class="card-body">
                <h4 class="card-title">Card Title</h4>
                <h6 class="card-subtitle">Card subtitle</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
                 <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
        </div><br>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Card Title</h4>
                <h6 class="card-subtitle">Card subtitle</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
                 <a href="#" class="btn btn-outline-primary">Read More</a>
            </div> 
        </div><br>
         <div class="card">
            <div class="card-body">
                <h4 class="card-title">Card Title</h4>
                <h6 class="card-subtitle">Card subtitle</h6>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
                 <a href="#" class="btn btn-outline-primary">Read More</a>
            </div>
        </div><br> -->

        <!-- <div class="card" style="width:20rem">
            <img class="card-img-top" src="img/image2.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card Title</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, quas.</p>
                 <a href="#" class="btn btn-success btn-block">Read More</a>
            </div>
        </div>

        <br><br> -->
         <!-- HEADER, FOOTER, CENTERED -->
        <!-- <div class="card text-center" style="width:20rem">
            <div class="card-header">
                My Card
            </div>
            <img class="card-img-top" src="img/image2.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card Title</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, perspiciatis.</p>
                <a href="#" class="btn btn-danger">Read More</a>
            </div>
            <div class="card-footer text-muted">
              2 Days Ago
            </div>
        </div> -->
        