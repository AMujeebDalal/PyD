<?php
if(isset($_POST['submit']))
{
$allowedExts = array("doc", "docx","pdf","txt");
$extension = end(explode(".", $_FILES["file"]["name"]));
echo explode(".",$_FILES["file"]["name"]);

if ((($_FILES["file"]["type"] == "application/msword")
|| ($_FILES["file"]["type"] == "text/plain")
|| ($_FILES["file"]["type"] == "application/pdf")
)
&& ($_FILES["file"]["size"] < 500000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
   echo("<script> alert('Successfully uploaded')</script>");
	
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo("<script> alert('Invalid File')</script>");
  }
}
?>
