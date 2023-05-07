<?php
include_once '../includes/header_in.php';

$xml = simplexml_load_file('../xml/lessons.xml');

if (isset($_GET['id'])&&isset($_GET['lid'])) {
    $id = $_GET['id'];
    $lid = $_GET['lid'];
    $topic_node = $xml->xpath("/lessons/lesson[@id='$lid']/topic[@id='$id']")[0];

    $prev_topic = null;
    $next_topic = null;
    $prev_lesson = null;
    $next_lesson = null;
    $is_last_topic = false;
    $topics = $xml->xpath("/lessons/lesson[@id='$lid']/topic");
    $lessons = $xml->xpath("/lessons/lesson");
    for($i = 0; $i < count($topics); $i++) {
        if ($topics[$i]['id'] == $id) {
            if ($i > 0) {
                $prev_topic = $topics[$i - 1]['id'];
            }
            if ($i < count($topics) - 1) {
                $next_topic = $topics[$i + 1]['id'];
            }
            if ($i == count($topics) - 1) {
                $is_last_topic = true;
                for ($i = 0; $i < count($lessons); $i++) {
                    if ($lessons[$i]['id'] == $lid) {
                        if ($i > 0) {
                            $prev_lesson = $lessons[$i - 1]['id'];
                        }
                        if ($i < count($lessons) - 1) {
                            $next_lesson = $lessons[$i + 1]['id'];
                        }
                        break;
                    }
                }
            }
            break;
        }
    }
} else {
    echo "<p>Topic ID not specified.</p>";
    return;
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
    <h1 id="display"></h1>
    <h4><?php echo $topic_node->title;?></h4>
    <p><?php echo $topic_node->content;?></p>
    <hr/>
    <p>
       
    <?php
        if ($prev_topic !== null) {
            echo '<a class="btn btn-outline-primary me-2" href="lesson.php?id='.$prev_topic.'&lid='.$lid.'">Previous</a>';
        }
        if ($next_topic !== null) {
            echo '<a class="btn btn-primary me-2" href="lesson.php?id='.$next_topic.'&lid='.$lid.'">Next</a>';
        }
        if ($is_last_topic) {
            echo "<a class='btn btn-primary me-2' href='answer.php?lid=$lid&id=$id'>Take Assessment</a>";
        }
        if ($next_lesson !== null) {
            echo '<a class="btn btn-secondary me-2" href="lesson.php?id=1&lid='.$next_lesson.'">Next Lesson</a>';
        }
        if ($prev_lesson !== null) {
            echo '<a class="btn btn-secondary me-2" href="lesson.php?id=1&lid='.$prev_lesson.'">Previous Lesson</a>';
        }
    ?> 
    </p>
</main>

<?php
include_once '../includes/footer_in.php';
?>