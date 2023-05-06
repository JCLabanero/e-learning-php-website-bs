<?php

$xml = new DOMDocument();
$xml->load("../xml/lessons.xml");

$lessons = $xml->getElementsByTagName("lesson");
$count=0;
foreach ($lessons as $lesson) {
    $lesson_name = $lesson->getAttribute("name");
    $title = $lesson->getElementsByTagName("title")->item(0)->nodeValue;
    $topics = $lesson->getElementsByTagName("topic");
    $id = $lesson->getAttribute("id");
    $count++;
    echo '<div class="container mb-1 mw-100 p-0" id="control_content">';
    echo '<button class="btn btn-primary rounded-0 w-100 text-start" id="control_lesson' . $count .'" 
    type="button" data-bs-toggle="collapse" data-bs-target="#control_lesson_topics'.$count.'" aria-expanded="false" aria-controls="control_lesson_topics'.$count.'">';
    echo $lesson_name;
    echo '</button>';
    echo '<div class="collapse" id="control_lesson_topics'.$count.'">';
	$topics = $lesson->getElementsByTagName("topic"); 
	foreach ($topics as $topic) {
		$topic_title = $topic->getElementsByTagName("title")->item(0)->nodeValue;
		$topic_id = $topic->getAttribute("id");
        echo '<a href="lesson.php?id='.$topic_id.'&lid='.$id.'" class="list-group-item list-group-item-action list-group-item-primary p-2">' . $topic_title . '</a>';

	}
    echo '<div class="list-group rounded-0">';
    echo '</div></div></div>';
}
?>