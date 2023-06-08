
<input type="submit" name="fetch" value="fetch data">
<?PHP

if($_POST['fetch'])
{
  $query2="SELECT facultydb.id,facultydb.FacultyName,facatt.id,facatt.Attendence
  FROM facultydb,facatt
  WHERE facatt.id=facultydb.id
  ORDER BY facatt.id
  $data2= mysqli_query($conn, $query2);"
  $total2 = mysqli_num_rows($data);
}
?>