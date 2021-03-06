<?php include("head/user_header.php") ; ?>

<?php 
require 'mysql/config.php';
    ?>


<section class="site-hero overlay" style="background-image: url(img/hotel.jpg" data-stellar-background-ratio="0.5" id="page-top">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="  family" style="color:#ffffff; font-size:80px;" >ห้องพักเฮือนกิ่งกะหร่า<br>ยินดีต้อนรับ<br></h1>

          </div>

        </div>
      </div>


    </section>
<?php $nowdate=date("Y-m-d"); ?>


<section class="section bg-light" id="booking" >
  <div class="container">
    <div class="row">
      <div class="col-md-7 mx-auto text-center mb-5">
        <h2 style="color: rgb(0, 0, 0);" class="font-weight-bold text-black family">ค้นหาห้องว่าง</h2>
      </div>
    </div>
    <div class="row">
      <div class="block-32">

      <form action="books_form.php" method="GET">
          <div class="row">
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkin_date" style="color: rgb(0, 0, 0);" class="font-weight-bold text-black family">วันที่เช็คอิน</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="icon-calendar"></span></div>
                <input  type="date" name="bkin" value="<?php echo $nowdate; ?>" required class="form-control">
              </div>
            </div>
            <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
              <label for="checkout_date" style="color: rgb(0, 0, 0);" class="font-weight-bold text-black family">วันที่เช็นเอาท์</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="icon-calendar"></span></div>
                <input type="date" name="bkout" value="<?php echo $nowdate; ?>" required class="form-control">
              </div>
            </div>
                   
                    
            <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
              <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="adults" style="color: rgb(0, 0, 0);" class="font-weight-bold text-black family">รูปแบบห้องพัก</label>
                  <div class="field-icon-wrap">
                  <select name="q" id="q" class="form-control">
                  <option value="0">ทั้งหมด</option>
                  <?php 
                        $sql="SELECT * FROM roomtype ORDER BY rmtype ASC";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_array(MYSQLI_ASSOC)){
                        ?>
                          <option value="<?php echo $row['rmtype']; ?>"><?php echo $row['tpname']; ?></option>
                          
                          <?php } ?>
                        </select>

                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label for="children" class="font-weight-bold text-black thaifont">
                  </label>
                  <div class="field-icon-wrap">
                          
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 align-self-end">
              <button type="submit"  style="color: rgb(0, 0, 0);" class="btn btn-primary btn-block text-white  family">ค้นหาห้องพัก</button>
        
            </div>
          </div>          
        </form>  
      </div>


    </div>
  </div>
</section>


<section class="section bg-light" id="rooms">

<div class="container">
  

<?php 
                        $sql="SELECT * FROM roomtype ";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_array(MYSQLI_ASSOC)){
                        ?>

  <div class="site-block-half d-flex bg-white" data-aos="fade-up" data-aos-delay="100">
    <a href="#" class="image d-block bg-image" style="background-image: url('roomtype/<?php echo $row['image'];?>');"></a>
    <div class="text">
      <span class="d-block"><span class="display-4 text-primary family "><?php echo $row['rmprice'];?> </span>THB / คือ </span>
      <h2  class="family" style="font-size:30px;"><?php echo $row['tpname'];?></h2>
      <p class="lead">

      <div class="family" style="font-size:20px; color:#000000;">
      สิ่งอำนวยความสะดวก<br>
      <?php echo $row['rmtype_detail'];?></div>
      
      
      <div class="center"> <button type="button" class="btn btn-primary family" data-toggle="modal"  
                  data-target="#room<?php echo $row['rmtype'];?>">ดูห้องพัก </button> </div>
      </p>
      <!--<p><a href="#" class="btn btn-primary text-white">จอง</a> <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#room1">ดูห้อง</button>--></p>
    </div>
  </div>
                        <?php } ?>
 
</div>
</section>



<section class="section" id="food" >
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-12 col-lg-7 ml-auto order-lg-2" data-aos="fade-up">
      <img src="img/1.jpg" alt="Image" class="img-fluid">
    </div>
    <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
      <h2 class="family">มีอาหาร<em>และ </em>เครื่องดื่ม บริการ</h2>
      <p class="lead family">ร้านอาหารของเราเปิดบริการ <em> 6:00-21:00 และยังมีบริการดนตรีสดทุกวันตั้งแต่เวลา 20:00-21:00 </p>
      
      <p>      <div class="center"> <button type="button" class="btn btn-primary family" data-toggle="modal"  
                  data-target="#foot">ดุร้านอาหาร</button> </div>  
    </div>
    
  </div>
</div>
</section>
<section id="image" > 
                    <div class="col-lg-12 text-center" >
                            <h2 class="section-heading text-uppercase family">อัลบั้มรูปภาพ</h2>
                            <h3 class="section-subheading text-muted family">รวมรูปต่างๆภายในอาควาเรียมไว้บ้างส่วน</h3>
                          </div>
                <div class="row">
                    <div class="col-md-12">
                            <div class="m-p-g">
                                    <div class="m-p-g__thumbs" data-google-image-layout data-max-height="200">
            
                                    <?php 
                        $sql2="SELECT * FROM gallery  WHERE rmtype = 5";
                        $result2 = $conn->query($sql2);
                        while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                        ?>
      <img src="img/<?php echo $row2['src_image']; ?>" data-full="img/<?php echo $row2['src_image']; ?>" class="m-p-g__thumbs-img" />
                        <?php  } ?>
                                    </div>
                                
                                    <div class="m-p-g__fullscreen"></div>
                                </div>
                                
                    </div>
                </div>
            
            </section>
    <!-- END section 
    <section class="section testimonial-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Testimonial</h2>
          </div>
        </div>


        
        <div class="row">
          <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>


            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Et quidem, impedit eum fugiat excepturi iste aliquid suscipit, tempore, delectus rem soluta voluptatem distinctio sed dolores, magni fugit nemo cum expedita. Totam a accusantium sunt aut autem placeat officia.&rdquo;</p>
              </blockquote>
              <p><em>&mdash; Jean Smith</em></p>
            </div> 

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img src="img/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
              </div>
              <blockquote>

                <p>&ldquo;Nostrum, alias, provident magnam sit blanditiis laboriosam unde quaerat, at ipsam, ratione maiores saepe nisi modi corporis quas! Beatae quam, quod aspernatur debitis nesciunt quasi porro ea iste nobis aliquid perspiciatis nostrum culpa impedit aut, iure blanditiis itaque similique sunt!&rdquo;</p>
              </blockquote>
              <p><em>&mdash; John Doe</em></p>
            </div>

          </div>-->
            <!-- END slider 
        </div>

      </div>
    </section>
    <section class="section blog-post-entry bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-8">
            <h2 class="heading" data-aos="fade-up">Events</h2>
            <p class="lead" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_1.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Unwind with Your Family in our Luxury Services</a></h2>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_2.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Unwind with Your Family in our Luxury Services</a></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
            <div class="media media-custom d-block mb-4">
              <a href="#" class="mb-4 d-block"><img src="img/img_3.jpg" alt="Image placeholder" class="img-fluid"></a>
              <div class="media-body">
                <span class="meta-post">February 26, 2018</span>
                <h2 class="mt-0 mb-3"><a href="#">Unwind with Your Family in our Luxury Services</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section border-top">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-md-6" data-aos="fade-up">
            <h2>Make Yourself Comfortable in Any of Our Fully Air-conditioned Rooms</h2>
          </div>
          <div class="col-md-6 text-right" data-aos="fade-up" data-aos-delay="200">
            <a href="reservation.html" class="btn btn-primary py-3 text-white px-5">Reserve Now</a>
          </div>
        </div>
      </div>
    </section>

-->

       <!-- Modal rooms1 ห้องพัดลมเตียงคู่ -->
       <div class="modal bd-example-modal-xl" id="room3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title family" id="exampleModalLabel">รูปภาพห้องพัก ห้องพัดลมเตียงคู่</5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            
<?php 
                        $sql2="SELECT * FROM gallery  WHERE rmtype = 3";
                        $result2 = $conn->query($sql2);
                        while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                        ?>
            
            <div class="slider-item">
                <img src="img/<?php echo $row2['src_image'] ;?>" alt="Image placeholder" class="img-fluid">
              </div>
                        <?php } ?>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

         <!-- Modal rooms1 ห้องพัดลมเตียงเดียว  -->
         <div class="modal bd-example-modal-xl" id="room2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title family" id="exampleModalLabel">รูปภาพห้องพัก ห้องพัดลมเตียงเดียว</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              
              
                  
            
<?php 
                        $sql2="SELECT * FROM gallery  WHERE rmtype = 2";
                        $result2 = $conn->query($sql2);
                        while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                        ?>
            
            <div class="slider-item">
                <img src="img/<?php echo $row2['src_image'] ;?>" alt="Image placeholder" class="img-fluid">
              </div>
                        <?php } ?>


            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary family" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

         <!-- Modal rooms1 ห้องแอร์เตียงเดี่ยว -->
         <div class="modal bd-example-modal-xl" id="room1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title family" id="exampleModalLabel">รูปภาพห้องพัก ห้องแอร์เตียงเดี่ยว</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
           
           
           
           
              
            
<?php 
                        $sql2="SELECT * FROM gallery  WHERE rmtype = 1";
                        $result2 = $conn->query($sql2);
                        while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                        ?>
            
            <div class="slider-item">
                <img src="img/<?php echo $row2['src_image'] ;?>" alt="Image placeholder" class="img-fluid">
              </div>
                        <?php } ?>
             


            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer family">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
         <!-- Modal -->
         <div class="modal bd-example-modal-xl" id="foot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title family" id="exampleModalLabel">ร้านอาหารและ เครื่องดื่ม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            
            
               
<?php 
                        $sql2="SELECT * FROM gallery  WHERE rmtype = 4";
                        $result2 = $conn->query($sql2);
                        while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
                        ?>
            
            <div class="slider-item">
                <img src="img/<?php echo $row2['src_image'] ;?>" alt="Image placeholder" class="img-fluid">
              </div>
                        <?php } ?>
             

        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary family" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

</div>

<?php include("footer.php") ; ?>


  