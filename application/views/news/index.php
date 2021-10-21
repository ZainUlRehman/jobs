<h2><?php echo $title; ?></h2>

<table style="width:100%">
  <tr>
    <th>S.No.</th>
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
    <th>Action</th>
    <th>Delete</th>

  </tr>
<?php
//echo '<pre>'; 
///print_r($news);

foreach ($news as $row): ?>
<!-- 	<table style="width:100%">
  <tr>
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

  </tr> -->
  <tr>
    <td><?php echo $row['jobId']; ?></td>
    <td><?php echo $row['Company_Name']; ?></td>
    <td><?php echo $row['JobCategory']; ?></td>
    <td><?php echo $row['RequiredSkill']; ?></td>
    <td><?php echo $row['Role']; ?></td>
    <td><?php echo $row['Qualification']; ?></td>
    <td><?php echo $row['Max_Age']; ?></td>
    <td><?php echo $row['Salary']; ?></td>
    <td><?php echo $row['JobLocation']; ?></td>
    <td><?php echo $row['Working_hour']; ?></td>
    <td><?php echo $row['JobDescription']; ?></td>
    <td><?php echo $row['Last_ApplyDate']; ?></td>
    <?php echo "<td><a href='updatedata?id=".$row['jobId']."'>Edit</a></td>";?>
    <?php echo "<td><a href='deletedata?id=".$row['jobId']."'>Delete</a></td>";?>
        <!-- <p><a href="<?php echo site_url('news/'.$row['jobId']); ?>">Edit</a></p> -->


  </tr>
</table>

<!--         <h3><?php echo $news_item['Company_Name']; ?></h3>
        <div class="main">
                <?php echo $news_item['JobDescription']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['Company_Name']); ?>">View article</a></p> -->

<?php endforeach; ?>