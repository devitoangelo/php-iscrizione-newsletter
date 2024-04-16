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


<?php

require_once __DIR__ . '/layouts/foot.php';

?>

</html>