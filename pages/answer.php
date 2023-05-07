<?php
include_once '../includes/header_in.php';
$xml = new DOMDocument();
$xml->load("../xml/quizzes.xml");

// Get the quiz id from the URL
if (isset($_GET['id'])&&isset($_GET['lid'])) {
    $id = $_GET['id'];
    $lid = $_GET['lid'];
}

$quiz_id = $lid.$id;
$quizzes = $xml->getElementsByTagName("quiz");

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<?php
foreach ($quizzes as $quiz) {
    $cntr=0;
    $cntrForQuiz=0;
    $cntrForOption=0;
    if ($quiz->getAttribute('id') == $quiz_id) {
        $questions = $quiz->getElementsByTagName("question");
        foreach ($questions as $question) {
            $cntrForQuiz++;
            echo '<div class="card my-3"><div class="card-header">
                <h5 class="card-title">Question #1</h5></div>
                <div class="card-body">';
            echo $question->getElementsByTagName('text')->item(0)->nodeValue;
    
            echo '</div><ul class="list-group list-group-flush">';
            $options = $question->getElementsByTagName('option');
            foreach($options as $option){
                $cntrForOption++;
                echo '<li class="list-group-item"><div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault'.$cntrForQuiz.'" id="flexRadioDefault'.$cntrForQuiz.$cntrForOption.'">
                    <label class="form-check-label" for="flexRadioDefault'.$cntrForQuiz.$cntrForOption.'">';
                echo $option->nodeValue;
                echo '</label></div></li>';
            }
        }
    }
    echo '</ul>
    </div>';
}
?>

                <!-- <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Question</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            This week
                        </button>
                    </div>
                </div>
                <h2>Wuestions</h2>
                <div class="card my-3">
                    <div class="card-header">
                        <h5 class="card-tittle">Question#1</h5>
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Answer 1
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Answer 2
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Answer 3
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    Answer 4
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card my-3">
                    <div class="card-header">
                        <h5 class="card-tittle">Question#2</h5>
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Default checkbox
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    Checked checkbox
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    Checked checkbox
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Checked checkbox
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card my-3">
                    <div class="card-header">
                        <h5 class="card-tittle">Question#3</h5>
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                    <div class="form-check form-check-inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>    
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-header">
                        <h5 class="card-tittle">Question#4</h5>
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                    <div class="form-check form-check-inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                          </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="card-header">
                        <h5 class="card-tittle">Question#5</h5>
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                    <div class="d-block mx-4">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card my-3" style="width: 50rem;">
                    <img src="https://picsum.photos/200" class="float-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Question#6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault5">
                                First item
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                            <label class="form-check-label" for="flexRadioDefault6">
                                A second item
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label" for="flexRadioDefault7">
                            A third item
                        </li>
                    </ul>
                </div>
                <div class="card my-3" style="width: 50rem;">
                    <img src="https://picsum.photos/200" class="float-start" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Question#6</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                    <div class="card-body pt-0">
                        <label for="exampleFormControlTextarea1" class="form-label">Answer here</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                </div> -->
                  
                <button class="btn btn-outline-primary">Previous</button>
                <button class="btn btn-primary">Next</button>
                <button class="btn btn-primary" disabled>Finish</button>
            </main>
<?php
include_once '../includes/footer_in.php'
?>