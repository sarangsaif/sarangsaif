<!doctype html>
<html>
<head>
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
                <th>pic</th>
                <th>gender</th>
                <th>country</th>
            </tr>
        </thead>
        <tbody>
   
   <?php
   $con = mysqli_connect("sql207.freecluster.eu","epiz_22772312","3YB7Z18c","epiz_22772312_sarangdata");
   $data = mysqli_query($con,"select * from qr");
   while($row = mysqli_fetch_array($data))
   {
	   echo "<tr>
	   <td>$row[1]</td>
	   <td>$row[2]</td>
	   <td>$row[3]</td>
	   <td>$row[4]</td>
	   <td>$row[5]</td>
	   <td>$row[6]</td>
	   </tr>";
   }
   ?>
   </tbody>
   </table>
   
</body>
</html>