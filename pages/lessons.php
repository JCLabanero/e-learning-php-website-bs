<?php
include_once '../includes/header_in.php'
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lessons</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse"
                    data-bs-target=".lsn" aria-expanded="false" aria-controls="row">View All</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div>
    </div>
    <!-- HERE -->
    <?php include "../php/lessons_read.php"?>
</main>

<script>
    // Send an AJAX request to the PHP script to get the lesson title
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Parse the XML response and update the button text
            var xmlDoc = this.responseXML;
            var lessonTitle = xmlDoc.getElementsByTagName("title")[0].childNodes[0].nodeValue;
            document.getElementById("lesson-button").innerHTML = lessonTitle;
        }
    };
    xhttp.open("GET", "../php/lessons_read.php", true);
    xhttp.send();
</script>

<?php
include_once '../includes/footer_in.php'
?>


    <!-- <div class="container mw-100 p-0" id="control_content">
        <h4>New select</h4>
        <h4>Selection</h4>
        <button class="btn btn-primary w-100 rounded-0 text-start" id="control_lesson" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLesson" aria-expanded="false" aria-controls="collapseExample">
            Introduction to PHP
        </button>
        <div class="collapse" id="collapseLesson">
            <div class="list-group rounded-0">
                <a href="lesson.php" class="list-group-item list-group-item-action list-group-item-primary">What is PHP</a>
                <a href="lesson.php" class="list-group-item list-group-item-action list-group-item-primary">Understanding PHP</a>
                <a href="lesson.php" class="list-group-item list-group-item-action list-group-item-primary">How PHP is used</a>
                <a href="lesson.php" class="list-group-item list-group-item-action list-group-item-primary">Real World Applications</a>
            </div>
        </div>
    </div> -->