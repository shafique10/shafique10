
<!DOCTYPE HTML>
<html lang="en-UK">
<head>
	<title>Employees</title>
	<meta charset="UTF-8">
	<style>
		
	</style>
	
	
	<style type="text/css"> 
<!-- 
 
 #navbar ul { 
        margin: 0; 
        padding: 5px; 
        list-style-type: none; 
        text-align: center; 
        background-color: #000; 
        } 
 
#navbar ul li {  
        display: inline; 
        } 
 
#navbar ul li a { 
        text-decoration: none; 
        padding: .2em 1em; 
        color: #fff; 
        background-color: #000; 
        } 
 
#navbar ul li a:hover { 
        color: #000; 
        background-color: #fff; 
        } 
 
--> 
</style> 


</head>
<body>

	
		
		
	
	
	
	
	<h1> Your Results </h1>
            	<table>
            	<thead>
                		<th>Employee_No</th>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Gender</th>
                        <th>Hire_date</th>
                        
                        
                </thead>
                
                <tbody>
                	<?php foreach($employees as $employee): ?>
                    <tr>
                    	<td> <?php echo($employee->emp_no); ?></td>
                        <td> <?php echo($employee->first_name); ?></td>
                        <td> <?php echo($employee->last_name); ?></td>
                        <td> <?php echo($employee->gender); ?></td>
                        <td> <?php echo($employee->hire_date); ?></td>
                    </tr>   
					<?php endforeach; ?>
                </tbody>
                
                </table>

<?php if (strlen($pagination)): ?>
	<div>
		Pages: <?php echo $pagination; ?>
	</div>
	<?php endif; ?>
                
 <br/>

            
<hr width = "100%" size = "2"/>
<p>

</p>        
                
</body>
</html>

