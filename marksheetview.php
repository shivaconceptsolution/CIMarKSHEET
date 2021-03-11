<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Marksheet Entry Form</h1>
   <form action="<?php echo site_url(); ?>/MarksheetController/markslogic" method="post">
    <table>
     <tr><td><input type="text" name="txtsub1" placeholder="Enter First Subject Name " /></td><td><input type="text" name="txtmark1" placeholder="Enter First Subject Marks " /></td></tr>
     <tr><td><input type="text" name="txtsub2" placeholder="Enter Second Subject Name " /></td><td><input type="text" name="txtmark2" placeholder="Enter Second Subject Marks " /></td></tr>
     <tr><td><input type="text" name="txtsub3" placeholder="Enter Third Subject Name " /></td><td><input type="text" name="txtmark3" placeholder="Enter Third Subject Marks " /></td></tr>
     <tr><td><input type="text" name="txtsub4" placeholder="Enter Fourth Subject Name " /></td><td><input type="text" name="txtmark4" placeholder="Enter Fourth Subject Marks " /></td></tr>
    <tr><td><input type="text" name="txtsub5" placeholder="Enter Fifth Subject Name " /></td><td><input type="text" name="txtmark5" placeholder="Enter Fifth Subject Marks " /></td></tr>
    
     <tr><td colspan="2"><input type="submit" name="btnsubmit" value="Calculate"></td></tr>

    </table>


   </form>

</body>
</html>