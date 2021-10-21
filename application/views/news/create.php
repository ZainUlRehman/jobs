<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="Company_Name">Company_Name</label>
    <input type="text" name="Company_Name" /><br />

    <label for="JobCategory">JobCategory</label>
    <input type="text" name="JobCategory" /><br />

    <label for="RequiredSkill">RequiredSkill</label>
    <input type="text" name="RequiredSkill" /><br />

    <label for="Role">Role</label>
    <input type="text" name="Role" /><br />

    <label for="Qualification">Qualification</label>
    <input type="text" name="Qualification" /><br />

    <label for="Max_Age">Max_Age</label>
    <input type="number" name="Max_Age" /><br />

    <label for="Salary">Salary</label>
    <input type="text" name="Salary" /><br />

    <label for="Working_hour">Working_hour</label>
    <input type="text" name="Working_hour" /><br />

    <label for="JobLocation">JobLocation</label>
    <input type="location" name="JobLocation" /><br />

    <label for="JobDescription">JobDescription</label>
    <textarea name="JobDescription"></textarea><br />

     <label for="Last_ApplyDate">Last_ApplyDate</label>
    <input type="date" name="Last_ApplyDate" /><br />

    


    

    <input type="submit" name="submit" value="Create new job" />

</form>