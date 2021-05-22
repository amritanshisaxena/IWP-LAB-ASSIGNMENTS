<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ques 5</title>
</head>
<body>
<h1>Form</h1>
<form action="labda3esubmit.php" method="POST">
      
              <br><br>  <label for="uname">Name</label>
                <input type="text" id="uname" name="username">
              <br><br>  <label for="pass">Password</label>
                <input type="password" id="pass" name="pass">
              <br><br>  <label>Gender</label>
              <br><br>  <label>
                <input type="radio" value="female" name="gender"> Female</label>
              <br><br>  <label>
                <input value="male" type="radio" name="gender"> Male</label>
              <br><br>  <label for="city">Date Of Birth</label>     
                <SELECT id ="year" name = "yyyy" onchange="change_year(this)">
                </SELECT>
                <SELECT  id ="month" name = "mm" onchange="change_month(this)">
                </SELECT>
                <SELECT id ="day" name = "dd" >
                </SELECT>
              <br><br>  <label>Education</label>      
              <br><br>  <label>
                <input type="checkbox" name="education[]" id="education" value="UG"> UG
                </label>
              <br><br>  <label>
                <input type="checkbox" name="education[]" id="education" value="PG"> PG
                </label>
              <br><br>  <label>
                <input type="checkbox" name="education[]" id="education" value="Professional"> Professional
                </label>        
              <br><br>  <label for="uemail">Email</label>       
                <input type="text" id="uemail" name="usermail"> <br><br>         
                <input type="submit" name="submit" formmethod="POST" formaction="labda3esubmit.php" value="Submit">
            
</form>
  <?php

echo "The details entered are: ","<br>";
echo "Name: ",$_POST["username"],"<br>";
echo "Password: ",$_POST["pass"],"<br>";
if (isset($_POST["gender"])){
echo "Gender: ",$_POST["gender"],"<br>";}
echo "Date of birth: ",$_POST["dd"],"/",$_POST["mm"],"/",$_POST["yyyy"],"<br>";
echo "Education: ";
if(!empty($_POST['education'])) {
    foreach($_POST['education'] as $checked){
        echo $checked.",";
    }

}
echo "<br>";
echo "Email: ",$_POST["usermail"],"<br>";

?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
var Days = [31,28,31,30,31,30,31,31,30,31,30,31];
$(document).ready(function(){
    var option = '<option value="day">day</option>';
    var selectedDay="day";
    for (var i=1;i <= Days[0];i++){ 
        option += '<option value="'+ i + '">' + i + '</option>';
    }
    $('#day').append(option);
    $('#day').val(selectedDay);

    var option = '<option value="month">month</option>';
    var selectedMon ="month";
    for (var i=1;i <= 12;i++){
        option += '<option value="'+ i + '">' + i + '</option>';
    }
    $('#month').append(option);
    $('#month').val(selectedMon);

    var d = new Date();
    var option = '<option value="year">year</option>';
    selectedYear ="year";
    for (var i=1930;i <= d.getFullYear();i++){
        option += '<option value="'+ i + '">' + i + '</option>';
    }
    $('#year').append(option);
    $('#year').val(selectedYear);
});
function isLeapYear(year) {
    year = parseInt(year);
    if (year % 4 != 0) {
          return false;
      } else if (year % 400 == 0) {
          return true;
      } else if (year % 100 == 0) {
          return false;
      } else {
          return true;
      }
}

function change_year(select)
{
    if( isLeapYear( $(select).val() ) )
      {
            Days[1] = 29;
            if( $("#month").val() == 2)
            {
                   var day = $('#day');
                   var val = $(day).val();
                   $(day).empty();
                   var option = '<option value="day">day</option>';
                   for (var i=1;i <= Days[1];i++){ 
                         option += '<option value="'+ i + '">' + i + '</option>';
             }
                   $(day).append(option);
                   if( val > Days[ month ] )
                   {
                          val = 1;
                   }
                   $(day).val(val);
             }
    }
    else {
        Days[1] = 28;
    }
}

function change_month(select) {
    var day = $('#day');
    var val = $(day).val();
    $(day).empty();
    var option = '<option value="day">day</option>';
    var month = parseInt( $(select).val() ) - 1;
    for (var i=1;i <= Days[ month ];i++){ 
        option += '<option value="'+ i + '">' + i + '</option>';
    }
    $(day).append(option);
    if( val > Days[ month ] )
    {
        val = 1;
    }
    $(day).val(val);
}
</script>
</html>
