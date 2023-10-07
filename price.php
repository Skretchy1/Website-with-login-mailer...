
        <?php 
          include_once 'header.php';
        ?>
    
    <section class="container" style="padding-bottom: 60%;">
        <div class="row mt-5 justify-content-center d-flex p-2">
            
        <!-- <p id="example" style="float: left;"></p> -->
        <!-- <div class="second1"> -->
            <h1>Prices for our packages</h1>


            <!-- <div class="nav5"> -->
                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                <div class="col11">
                    <div class="col3">
                        <h1>1 MONTH</h1>
                        <h6 class="col4">One month premium package.</h6>
                        <p class="col4">To be up to date with<br> the news about the technology.</p>
                        <div class="col4">
                            <p>Get started at</p>
                            <h3>$19.99</h3>
                        </div>
                        <a href="shoppcart.html"><button type="button" class="btn btn-primary" id="#">ORDER NOW ></button></a>
                    </div>
                </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                <div class="col11">
                    <div class="col3">
                        <h1>3 MONTHS</h1>
                        <h6 class="col4">Three months premium package.</h6>
                        <p class="col4">To be up to date with<br> the news about the technology.</p>
                        <div class="col4">
                            <p>Get started at</p>
                            <h3>$49.99</h3>
                        </div>
                        <a href="shoppcart.html"><button type="button" class="btn btn-primary" id="#">ORDER NOW ></button></a>
                    </div>
                </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 justify-content-center">
                <div class="col11">
                    <div class="col3">
                        <h1>6 MONTHS</h1>
                        <h6 class="col4">Six months of premium package.</h6>
                        <p class="col4">To be up to date with<br> the news about the technology.</p>
                        <div class="col4">
                            <p>Get started at</p>
                            <h3>$99.99</h3>
                        </div>
                        <a href="shoppcart.html"><button type="button" class="btn btn-primary" id="#">ORDER NOW ></button></a>
                    </div>
                </div>
                </div>
                
            <!-- </div> -->



            <div class="action">
                <p class="action11">LIMITED OFFER AVAILABLE UNTIL:</p>
                <p class="Pdesc" id="dateExp"></p>
                <hr style="width: 50%; color: #13b693;">
                <p class="action11">TIME LEFT:</p>
                <p class="Pdesc" id="dateLeft"></p>
            

                <div class="nav5" style="padding-top: 2%;">
                    <div class="col3">
                        <h1>1 YEAR</h1>
                        <h6 class="col4">One year premium package.</h6>
                        <p class="col4">To be up to date with<br> the news about the technology.</p>
                        <div class="col4">
                            <p>Get started at</p>
                            <h3>$149.99</h3>
                        </div>
                        <a href="shoppcart.html"><button type="button" class="btn btn-primary" id="#">ORDER NOW ></button></a>
                    </div>
                </div>
            </div> 
            
            
            <div class="nav5" style="padding-top: 2%;">
                <div class="col3">
                    <h2> Calculator for the +12% VAT included</h2>
                    <form name="cena" action="" method="GET" onsubmit="return calculator()">
                        <label>Package type:</label>
                        <select id="type" name="type">
                            <option value="0">Select</option>
                            <option value="20">1 month</option>
                            <option value="50">3 months</option>
                            <option value="100">6 months</option>
                            <option value="150">1 year</option>
                        </select>
                        <br>
                        <label>Number of packages:</label>
                        <input type="number" name="quantity" min="0" value="1"><br>
                        <input type="submit" value="Calculate" class="btn btn-primary" id="#" style="padding: 2% 5% 2% 5%;">
                    </form>
                </div>
            </div>
        <!-- </div> -->
        </div>
        </div>
    </section>

    <footer>
        <div class="forth-part">
            <p>New Technolgies | Website &copy; 2022</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>