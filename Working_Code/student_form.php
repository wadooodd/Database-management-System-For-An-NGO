<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="p-3 mb-2 bg-info text-dark">
<head><title>Student Admission Form</title></head>
<body>
    <H1 align="center">HAMARAY BACHAY</H1>
    <H1 align="center">STUDENT ADMISSION FORM</H1>
</body>
<hr>

<br>

<form method='post' action="student_insert.php">
    <div>
        <b>Student ID: </b><input type="text" name="studentid" placeholder="Enter Student ID" class='form-control' required>        
    </div>
    <div>
        <b>Order Number: </b><input type="text" name="ordernumber" placeholder="Enter Order Number" class='form-control' required>        
    </div>
    <div>
        <b>Student Name: </b><input type="text" name="studentname" placeholder="Enter Student Name" class='form-control' required>        
    </div>
    <div>
        <b>Age: </b><input type="text" name="studentage" placeholder="Enter Student Age" class='form-control' required>        
    </div>
    <div>
        <b>Parent ID: </b><input type="text" name="parentid" placeholder="Enter Parent ID" class='form-control' required>        
    </div>
    <div>
        <b>Course ID: </b><input type="text" name="courseid" placeholder="Enter Course ID" class='form-control' required>        
    </div>
    <div>
        <b>Class ID: </b><input type="text" name="classid" placeholder="Enter Class ID" class='form-control' required>        
    </div>
    <div>
        <b>Caretaker ID: </b><input type="text" name="caretakerid" placeholder="Enter Caretaker ID" class='form-control' >        
    </div>
    <br>
    <button type="submit" class="btn btn-danger active">Submit</button>
</form>
</div>