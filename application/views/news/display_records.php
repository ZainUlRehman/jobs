 <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>Company Name</th>
    <th>Job Category</th>
    <th>Required Skills</th>
    <th>Role</th>
    <th>Qualification</th>
    <th>Max. Age</th>
    <th>Salary</th>
    <th>Job Location</th>
    <th>Working Hours</th>
    <th>Job Description</th>
    <th>Last Apply Date</th>
    <th>Edit</th>
    <th>Delete</th>
   
  </tr>
  <?php
  foreach($data as $news_item) { ?>
  <tr>
    <td><?php echo $news_item['jobId']; ?></td>
    <td><?php echo $news_item['Company_Name']; ?></td>
    <td><?php echo $news_item['JobCategory']; ?></td>
    <td><?php echo $news_item['RequiredSkill']; ?></td>
    <td><?php echo $news_item['Role']; ?></td>
    <td><?php echo $news_item['Qualification']; ?></td>
    <td><?php echo $news_item['Max_Age']; ?></td>
    <td><?php echo $news_item['Salary']; ?></td>
    <td><?php echo $news_item['JobLocation']; ?></td>
    <td><?php echo $news_item['Working_hour']; ?></td>
    <td><?php echo $news_item['JobDescription']; ?></td>
    <td><?php echo $news_item['Last_ApplyDate']; ?></td>
    <?php echo "<td><a href='updatedata?id=".$row->jobId."'>Edit</a></td>";?>
    <?php echo "<td><a href='deletedata?id=".$row->jobId."'>Delete</a></td>";?>
    <?php echo "</tr>";?>
  <?php } ?>
</table>