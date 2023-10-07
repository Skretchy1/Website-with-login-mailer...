
        <?php 
          include_once 'header.php';
        ?>


    <div class="galerija-second container">
        <h2>Some upcoming technologies</h2>

        <div class="swiper">
    
            <div class="swiper-wrapper">
                
            <div class="swiper-slide">
                <a href="#"><img src="pictures1/SmartGlasses.jpg" class="picturesgalerija"></a>
            </div>
            <div class="swiper-slide">
                <a href="#"><img src="pictures1/smartlenses.jfif" class="picturesgalerija"></a>
            </div>
            <div class="swiper-slide">
                <a href="#"><img src="pictures1/5gnetwork.jpg" class="picturesgalerija"></a>
            </div>
            <div class="swiper-slide">
                <a href="#"><img src="pictures1/VRgaming.jpg" class="picturesgalerija"></a>
            </div>
            </div>
            <div class="swiper-pagination"></div>
        
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            <div class="swiper-scrollbar"></div>
        </div>
    </div>

    <footer>
        <div class="forth-part">
            <p>New Technolgies | Website &copy; 2022</p>
        </div>
    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
    const swiper = new Swiper('.swiper', {
      
        pagination: {
          el: '.swiper-pagination',
        },
      
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      });
    </script> 

</body>
</html>