<?php


$conn=mysqli_connect("localhost","root","","entry_details");

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}
echo("Connection Sucessful.");

if(isset($_POST['book']))
{
    $place = $_POST['place'];
    $date = $_POST['date'];
 
    $sql_query = "INSERT INTO entry_details ( place, date) VALUES ('[$place]','[$date]')";

    if (mysqli_query($conn, $sql_query))
    {
    echo "New Details Entry inserted successfully !";
    }
    else
    {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>