<?php
include_once '../includes/header_in.php';

$lesson = simplexml_load_file('../xml/lessons.xml');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = null;
    foreach ($lesson->topic as $t) {
        if ($t->getAttribute('id') == $id) {
            $topic = $t;
            break;
        }
    }
    if ($topic !== null) {
        $title = (string) $topic->title;
        $content = (string) $topic->content;
    } else {
        echo "<p>Topic not found.</p>";
    }
} else {
    echo "<p>Topic ID not specified.</p>";
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="lessons.php" class="h2 text-dark" style="text-decoration:none;">Lessons</a>
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
    <h4><?php echo $title;?></h4>
    <h6><?php echo $description;?></h6>
    <p><?php echo $content;?></p>
    <button class="btn btn-outline-primary">Previous</button>
    <button class="btn btn-primary">Next</button>
    <a href="./answer.php"><button class="btn btn-primary">Take Assement</button></a>
    <button class="btn btn-primary" disabled>Next Lesson</button>
</main>

<?php
include_once '../includes/footer_in.php';
?>