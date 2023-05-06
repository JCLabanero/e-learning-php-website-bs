<?php
include_once '../includes/header_in.php';

$xml = simplexml_load_file('../xml/lessons.xml');

if (isset($_GET['id'])&&isset($_GET['lid'])) {
    $id = $_GET['id'];
    $lid = $_GET['lid'];
    $topic_node = $xml->xpath("/lessons/lesson[@id='$lid']/topic[@id='$id']")[0];
} else {
    echo "<p>Topic ID not specified.</p>";
    return;
}

$next_id = null;
$prev_id = null;

// find the previous and next topic ids
$lesson_node = $xml->xpath("/lessons/lesson[@id='$lid']")[0];
$topics = $lesson_node->xpath("topic");

for ($i = 0; $i < count($topics); $i++) {
    if ($topics[$i]['id'] == $id) {
        if ($i > 0) {
            $prev_id = $topics[$i - 1]['id'];
        }
        if ($i < count($topics) - 1) {
            $next_id = $topics[$i + 1]['id'];
        }
        break;
    }
}
$lesson_node = $xml->xpath("/lessons/lesson[@id='$lid']")[0];
$topics = $lesson_node->xpath("topic");
for ($i = 0; $i < count($topics); $i++) {
    if ($topics[$i]['id'] == $id) {
        if ($i > 0) {
            $prev_id = $topics[$i - 1]['id'];
        }
        if ($i < count($topics) - 1) {
            $next_id = $topics[$i + 1]['id'];
        }
        break;
    }
}
$is_last_topic = false;
for ($i = 0; $i < count($topics); $i++) {
    if ($topics[$i]['id'] == $id) {
        if ($i == count($topics) - 1) {
            $is_last_topic = true;
        }
        break;
    }
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
    <p></p>
    <?php
        if ($prev_id !== null) {
            echo '<a class="btn btn-outline-primary me-2" href="lesson.php?id='.$prev_id.'&lid='.$lid.'">Previous</a>';
        }
        if ($next_id !== null) {
            echo '<a class="btn btn-primary" href="lesson.php?id='.$next_id.'&lid='.$lid.'">Next</a>';
        }
        if ($is_last_topic) {
            echo "<a class='btn btn-primary' href='answer.php?lid=$lid&id=$id' class='btn btn-primary'>Take Assessment</a>";
        }
    ?>
</main>

<?php
include_once '../includes/footer_in.php';
?>