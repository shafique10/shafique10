<!DOCTYPE HTML>
<html lang="en-UK">
<head>
	<title>Employees</title>
	<meta charset="UTF-8">
	
	  <style type="text/css">
 
  </style>
	
	<script type='text/javascript'> function submit(){alert("success);}
		
		
		 #hire_date({
        useMode:2,
        target:"aFieldId",        
        isStripped:false,
        selectedDate:{
            year:2009,
            month:4,
            day:16
       	},
        yearsRange: new Array(1971,2100),
        limitToToday:true,
    });
		
		
		
		</script>
	
</head>

<body>

		<h2>Add Employee</h2>
		<center>
		<form action="" method="POST">
			
		 Employee Number 	 <input type="text" id="emp_no" name="emp_no"/><br/>
			 First Name <input type="text" id="first_name" name="first_name"/><br/>
			  Second Name <input type="text" id="last_name" name="last_name"/> <br/>
			    Gender<input type="text" id="gender" name="gender"/> <br/>
			    Hire date <input type="text" id="hire_date" name="hire_date"/> <br/>
			<input type="submit" name="submit" value="submit" onclick="submit()"/>	
		              
			
		</form></center>
		
 <br/>

            
<hr width = "100%" size = "2"/>
<p>
</p>        
                
</body>
</html>

