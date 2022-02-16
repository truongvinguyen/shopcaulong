<?php
include 'inc/header.php';
?>
<?php include '../classes/category.php' ?>
<?php
 
	$cat = new category();
	if (!isset($_GET['idCat']) || $_GET['idCat'] == NULL) {
     echo "<script>window.location='dsloai.php' </script>" ;
	}else{
    $id = $_GET['idCat'];
  }
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $catName = $_POST['catName'];
  

    $updateCat = $cat->update_category($catName,$id);
    echo "<script>window.location='dsloai.php'</script>";
    
}
?>


<div id="page-content"> 
<div class="col-md-12">
            <div class="right-content">
              <div class="container">
               
                      <?php
                             if(isset($updateCat)){
                                 echo $updateCat;
                             }
                          ?>

                          <?php
                             $cat_name =$cat->getcatbyId($id);
                             if( $cat_name){
                               while($result = $cat_name->fetch_assoc()){

                            
                          ?>
                      </div>
                <form id="contact" action="updateCat.php?idCat=<?php echo $result['catId']; ?>" method="POST">
                  <div class="row">
                      <div class="col-md-6">
                    <div class="col-md-12">
                        <label for="">Tên danh mục</label>
                         

                      <fieldset>
                        <input name="catName" value="<?php echo $result['catName'] ?>" type="text" class="form-control"  placeholder="Tên danh mục" required="">
                      </fieldset>
                    </div>
                   
                    <div class="col-md-12">
                      <fieldset>
                      <input style="background: rgb(16,0,255);
    background: linear-gradient(90deg, rgba(16,0,255,1) 0%, rgba(255,0,0,1) 100%);color:white;border:none;padding:10px;" type="submit" value="Cập nhật sản phẩm">
                      </fieldset>
                    </div>
                    
                  </div>
                </form>
                <?php
                 }
                }
                ?>
              </div>
            </div>
          </div>  
</div>



                <!-- Footer -->
                <footer>
                    <span id="year-copy"></span> &copy; <strong><a href="http://goo.gl/9QhXQ">uAdmin 2.1</a></strong> - Crafted with <i class="fa fa-heart text-danger"></i> by <strong><a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a></strong>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>

  

        <!-- Excanvas for canvas support on IE8 -->
        <!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
      
    </body>
</html>