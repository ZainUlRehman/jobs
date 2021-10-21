<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
  <?php
  foreach($data as $row)
  {
  ?>
  <form method="post">
    <label for="Company_Name">Company_Name</label>
    <input type="text" name="Company_Name" value="<?php echo $row->Company_Name; ?>"/><br />

    <label for="JobCategory">JobCategory</label>
    <input type="text" name="JobCategory" value="<?php echo $row->JobCategory; ?>" /><br />

    <label for="RequiredSkill">RequiredSkill</label>
    <input type="text" name="RequiredSkill" value="<?php echo $row->RequiredSkill; ?>" /><br />

    <label for="Role">Role</label>
    <input type="text" name="Role" value="<?php echo $row->Role; ?>"/><br />

    <label for="Qualification">Qualification</label>
    <input type="text" name="Qualification" value="<?php echo $row->Qualification; ?>"/><br />

    <label for="Max_Age">Max_Age</label>
    <input type="number" name="Max_Age" value="<?php echo $row->Max_Age; ?>"/><br />

    <label for="Salary">Salary</label>
    <input type="text" name="Salary" value="<?php echo $row->Salary; ?>"/><br />

    <label for="Working_hour">Working_hour</label>
    <input type="text" name="Working_hour" value="<?php echo $row->Working_hour; ?>"/><br />

    <label for="JobLocation">JobLocation</label>
    <input type="location" name="JobLocation" value="<?php echo $row->JobLocation; ?>"/><br />

    <label for="JobDescription">JobDescription</label>
    <textarea name="JobDescription" value="<?php echo $row->JobDescription; ?>"></textarea><br />

     <label for="Last_ApplyDate">Last_ApplyDate</label>
    <input type="date" name="Last_ApplyDate" value="<?php echo $row->Last_ApplyDate; ?>"/><br />

  <input type="submit" name="update" value="Update"/></td>

  </form>
    <?php } ?>
</body>
</html>