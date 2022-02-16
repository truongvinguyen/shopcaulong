<?php
include 'inc/header.php';
?>
<?php include '../classes/category.php';
 ?>
<?php include '../classes/product.php'; 
?>

<?php
    $pd = new product();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertProduct = $pd->insert_product($_POST,$_FILES);
        
    }
?>

<?php
 	$cat = new category();
	
?>

<div id="page-content"> 
<div class="col-md-12">
<div class="right-content">
              <div class="container">
                <form  action="themsp.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                 
                    <div class="col-md-6">
                        <label for="">Tên sản phẩm</label>
                     
                      <fieldset>
                        <input name="productName" type="text" class="form-control"  placeholder="Tên sản phẩm" >
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                    <label for="">Gía sản phẩm</label>
                      <fieldset>
                        <input name="price" type="text" class="form-control" placeholder="Gía sản phẩm">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                    <label for="">Hình ảnh sản phẩm</label>
                      <fieldset>
                        <input name="image" type="file" class="form-control"  placeholder="nhập tên hình ảnh" >
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                    <label for="">Trạng thái sản phẩm ()</label>
                      <fieldset>
                      <select name="type" class="form-control" id="">
                            <option value="">-------chọn trạng thái-------</option>
                            <option value="">Nổi bậc</option>
                            <option value="">Không nổi bậc</option>
                          </select>
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                    <label for="">Loại sản phẩm</label>
                      <fieldset>
                      
                          <select name="category" class="form-control" id="">
                            <option value="">-------chọn danh mục-------</option>
                            <?php
                           $showDM = $cat->show_category();
                           if($showDM){

                               $i = 0;
                               while($result = $showDM->fetch_assoc()){
                                 $i++;
                             
                           
                       ?>
                        <option value="<?php echo $result['catId']; ?>"><?php echo $result['catName']; ?></option>
                      <?php   } } ?>
                          </select>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                        <label for="">Mô tả sản phẩm</label>
                      <fieldset>
                        <textarea name="product_desc" rows="6" class="form-control"placeholder="" ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                         <input  type="submit" name="submit" value="Thêm sản phẩm">
                      </fieldset>
                    </div>
                    
                  </div>
                </form>
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