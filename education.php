<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Application | Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">   
    <link rel="stylesheet" href="./css/education-style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="./js/script-2.js"></script>
    
    <?php include "incl/header.php" ?>

    <br/>
    <div class="container">
        <form action="" method="post">
            <h4  class="header-bar">Secondary Education<a href="" id="add-item1">Add</a></h4>
            <ul>
                
            </ul>
            <h4 class="header-bar">Tertiary Education<a href="" id="add-item2">Add</a></h4>
            <ul>
                
            </ul>
            <h4 >Other Qualifications</h4>
            <textarea name="textbox" id="textbox" cols="150" rows="5">Type here...</textarea>
            <input type="submit" name="saveBtn" id="saveBtn" value="Save & Close">
            <input type="submit" name="prevBtn" id="prevBtn" value="Previous">
            <input type="submit" name="nextBtn" id="nextBtn" value="Next">
        </form>
    </div>
    

    
</body>
</html>