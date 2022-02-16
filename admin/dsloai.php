<?php
include 'inc/header.php';
?>
<?php include '../classes/category.php' ?>
                    <?php
                    	$cat = new category();
                       
	
                    ?>
                    <?php
                      if (isset($_GET['delidCat'])) {  
                       $id = $_GET['delidCat'];
                       $delcat= $cat->del_category($id);
                       echo "<script>window.location='dsloai.php' </script>" ;
                     }
                    ?>



<div id="page-content"> 
                <h3 class="page-header">Danh mục</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                           
                            <th class="text-center">Mã danh mục</th>
                            <th>Tên danh mục</th>
                           
                            <th class="cell-small text-center"><i class="fa fa-bolt"></i> options</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                   
                       <?php
                           $showDM = $cat->show_category();
                           if($showDM){

                               $i = 0;
                               while($result = $showDM->fetch_assoc()){
                                 $i++;
                             
                           
                       ?>
                        <tr>
                           
                            <td class="cell-small text-center"><?php echo $i; ?></td>
                            <td><a href="javascript:void(0)"><?php echo $result['catName']; ?></a></td>
                            
                            <td class="text-center">
                                <div class="btn-group">
                                    
                                    <a href="updateCat.php?idCat=<?php echo $result['catId']; ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-success" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a onclick="return confirm('Bạn có chắc muốn xóa danh mục này ?')" href="dsloai.php?delidCat=<?php echo $result['catId']; ?>" data-toggle="tooltip" title="" class="btn btn-xs btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php   } } ?>
                       
                    </tbody>
                </table>
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