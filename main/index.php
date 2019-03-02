<!DOCTYPE html>
<?php
if (isset($_POST['finished'])) {
    $medicalQuestions = [];
    $l = 10;
    for ($i = 0; $i < $l; $i++) {
        if(isset($_POST[$i])) {
            $medicalQuestions[$i] = 1;
        }
        else $medicalQuestions[$i] = 0;
    }
    $symptomQuestions = [];
    $l = 10;
    for ($i = 0; $i < $l; $i++) {
        $symptomQuestions[$i] = $_POST[$i + 10];
    }
    //var_dump($symptomQuestions);
    //echo '<br>';
    //var_dump($medicalQuestions);
}
include 'header.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Main Page</title>

    <!-- Bootstrap CSS CDN -->
    <!-- Our Custom CSS -->
    <!--<link rel="stylesheet" href="style.css">-->
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

<form method="POST" id="questionnaire" onsubmit="load()">
    <ul>
        <li>Do you have any history of the following medical conditions? (Check all that apply)
            <br>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="input0" name="0">
                <label class="custom-control-label" for="input0">Check this custom checkbox</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="input1" name="1">
                <label class="custom-control-label" for="input1">Check this custom checkbox</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="input2" name="2">
                <label class="custom-control-label" for="input2">Check this custom checkbox</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="input3" name="3">
                <label class="custom-control-label" for="input3">Check this custom checkbox</label>
            </div>
        </li>
        <li>Have you ever experienced unexpected decreased endurance performace?
            <br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="input4yes" name="4" class="custom-control-input" required>
                <label class="custom-control-label" for="input4yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="input4no" name="4" class="custom-control-input" required>
                <label class="custom-control-label" for="input4no">No</label>
            </div>
        </li>
        <li>question 2
            <br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="input5yes" name="5" class="custom-control-input" required>
                <label class="custom-control-label" for="input5yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="input5no" name="5" class="custom-control-input" required>
                <label class="custom-control-label" for="input5no">No</label>
            </div>
        </li>
        <li>question 3
            <br>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="input6yes" name="6" class="custom-control-input" required>
                <label class="custom-control-label" for="input6yes">Yes</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="input6no" name="6" class="custom-control-input" required>
                <label class="custom-control-label" for="input6no">No</label>
            </div>
        </li>
        <br>
        <button type="submit" form="questionnaire" value="Submit" class="btn btn-info" id="button">
            Submit
        </button>
    </ul>
</form>
<script>
    function load() {
        let button = $("#button");
        button.attr("disabled", "disabled");
        button.html("Loading... <span class=\"sr-only\">Loading...</span><span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span>");
        //$("#register").submit();
    }
</script>

</body>

</html>