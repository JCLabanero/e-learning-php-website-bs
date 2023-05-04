<?php
include_once '../includes/header_in.php'
?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Lesson 1</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#drop"
                                aria-expanded="false" aria-controls="dropdown-menu">
                              Dropdown button
                            </button>
                            <ul class="dropdown-menu" id="drop">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4>What is PHP</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis unde, minus modi adipisci ducimus, quos porro ab
                    vitae, totam aperiam nemo. Consequatur id quis ad quasi minima vitae cumque ut numquam, rerum repudiandae labore eum
                    in quae illo doloribus earum eius neque, blanditiis recusandae ipsam. Ipsam asperiores maxime ratione rem magni
                    repellendus accusamus reiciendis illo eaque rerum eum quos delectus, porro obcaecati quisquam tempora incidunt
                    soluta inventore, atque perspiciatis labore tenetur, at minima. Rem, itaque, officia quasi officiis laborum
                    molestias, quis accusantium quas exercitationem sequi mollitia perferendis porro illo atque deleniti modi eaque
                    ducimus aspernatur dolores ea molestiae ab. Repellat?</p>
                <button class="btn btn-outline-primary">Previous</button>
                <button class="btn btn-primary">Next</button>
                <a href="./answer.php"><button class="btn btn-primary">Take Assement</button></a>
                <button class="btn btn-primary" disabled>Next Lesson</button>
            </main>

            <?php
include_once '../includes/footer_in.php'
?>