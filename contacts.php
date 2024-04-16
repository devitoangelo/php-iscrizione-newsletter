<?php

require_once __DIR__ . '/layouts/head.php';

?>




    <main>







        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold"> Contact me</h1>
                <p class="col-md-8 fs-4">
                    Lorem ipsum dolor
                </p>
                <button class="btn btn-primary btn-lg" type="button">
                    Browse me
                </button>
            </div>
        </div>


        <div class="container">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, natus. Accusamus soluta minima blanditiis ut, aut natus veritatis officiis voluptate maiores repudiandae eum dolore, praesentium velit deleniti 
            </p>

            <form action="" method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="Mario Rossi" />
                    <small id="nameHelper" class="form-text text-muted"> type your name</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="Mario Rossi" />
                    <small id="emailHelper" class="form-text text-muted"> type your name</small>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>


                <button type="submit" class="btn btn-dark mb-3">Send</button>





            </form>

        </div>

    </main>





    <!-- footer -->


    <footer class="pv-4 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">Maxime.</a></li>
                        <li><a href="">Quam!</a></li>
                        <li><a href="">Expedita.</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Quick links</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">Maxime.</a></li>
                        <li><a href="">Quam!</a></li>
                        <li><a href="">Expedita.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>








    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>