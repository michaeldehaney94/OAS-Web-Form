<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/course_selection_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>New Application | Course Selection</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <?php 
    require('./db/db.php');

    $selected_cousre = $_POST['courseSelection'];
    $schedule = $_POST['scheduleOption'];
    $objective = $_POST['textarea'];

    $dbconn->prepare("INSERT INTO public.program_information(program, Program_schedule, objective) VALUES (:program, :Program_schedule, :objective)");
    $dbconn->bindParam(':program', $selected_cousre);
    $dbconn->bindParam(':Program_schedule', $schedule);
    $dbconn->bindParam(':objective', $objective);

    try {
        $add_data = $dbconn->execute();

        if ($add_data) {
            echo 'Successful!';
        }

    } catch (PDOException $e) {
        die();

    }

    $dbconn->prepare("SELECT * FROM public.program_information WHERE program = :program AND Program_schedule = :Program_schedule AND objective = :objective");
    $dbconn->bindParam(':program', $selected_cousre);
    $dbconn->bindParam(':Program_schedule', $schedule);
    $dbconn->bindParam(':objective', $objective);

    try {
        $search_data = $dbconn->execute();

        if(search_data) {
            echo 'Successful!';
        }

    } catch (PDOException $e) {
        die();

    }

    ?>

    <div class="first-container">
        <?php include "incl/header.php" ?>
        <br/>
        <h2>Areas of Study</h2>
        <form action="/education.php" method="post">
            <label for="programme">Programme/Course</label><span>(required)</span><br/>
            <select name="courseSelection" id="form-select" aria-label="Choose..." required>
                <option selected disabled value="">Choose...</option>
                <option value="BTM">Technology Management (Bachelor)</option>
                <option value="ICT">Information & Communication Technology (Bachelor)</option>
                <option value="CST">Computer Systems Technology (Associate)</option>
                <option value="DCST">Computer Systems Technology (Diploma)</option>
                <option value="CG">Computer Graphics Level 1 and 2 (Certificate)</option>
                <option value="ASP">Software Programming (Associate)</option>
                <option value="DSP">Software Programming (Diploma)</option>
                <option value="WD">Web Development (Certificate)</option>
                <option value="MAD">Mobile Apps Development (Certificate)</option>
                <option value="CA">Cybersecurity Analysts (Diploma)</option>
            </select>
       
            <br/>
            <h2>Programme Schedule</h2>
        
            <!-- Day Class -->
            <input type="radio" name="scheduleOption" id="scheduleOption">
            <label>Day</label><br/>
            <label>Mon - Fri, 9:00 am - 4:00 pm</label><br/>
            <br/>
            <!-- Evening Class -->
            <input type="radio" name="scheduleOption" id="scheduleOption">
            <label>Evening</label><br/>
            <label>Mon - Thurs, 5:30 pm - 8:30 pm or</label><br/>
            <label>Tues / Thurs, 9:00 am - 4:00 pm or</label><br/>
            <label>Mon / Wed & Sat, 9:00 pm - 4:00 pm</label><br/>
            <br/>
            
            <h2>What is your objective for the programme being registered for ?</h2>
            <textarea name="textarea" id="textarea" cols="120" rows="4"></textarea>

            <input type="submit" name="saveBtn" id="saveBtn" value="Save & Close">
            <input type="submit" name="prevBtn" id="prevBtn" value="Previous">
            <input type="submit" name="nextBtn" id="nextBtn" value="Next">
        </form>

       
    </div>
    
   </body>
</ht