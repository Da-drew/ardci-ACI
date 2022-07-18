<?php include 'includes/main-header.php'?>

<section class="gallery-banner-section">
    <div class="gallery-banner-overlay"></div>
    <div class="container-fluid gallery-banner-container">
        <div class="gallery-name">
            <div class="gallery-title-div">
                <h2 class="gallery-title">Gallery</h2>
                <hr class="gallery-banner-hr">
            </div>
        </div>
    </div>
</section>

<section class="gallery-body">
    <div class="container-fluid m-0 p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-md-4 col-6">
                <div class="gallery-item"> 
                    <a href="assets/image/gallery/g10.jpg" class="glightbox">
                        <img src="assets/image/gallery/g10-front.jpg" alt="image" class="img-fluid d-block mx-auto"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <div class="gallery-item">
                    <a href="assets/image/gallery/g11.jpg" class="glightbox">
                        <img src="assets/image/gallery/g11-front.jpg" alt="image" class="img-fluid d-block mx-auto"/>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6">
                <div class="gallery-item"> 
                    <a href="assets/image/gallery/g12.jpg" class="glightbox">
                        <img src="assets/image/gallery/g12-front.jpg" alt="image" class="img-fluid d-block mx-auto"/>
                    </a>
                </div>
            </div>
        </div>

        <div class="ab-pagination">
           <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Page 2 of 2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="gallery.php" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="gallery.php">1</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="gallery-page2.php">2</a></li>
                    <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                </ul>
            </nav>
        </div>
        
    </div>
</section>

<?php include 'includes/footer.php'?>