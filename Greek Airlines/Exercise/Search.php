<style>

  h1 {text-align: center;font-size:40pt; font-family:Georgia; color:#33AEFF; background-color:#FDFDFD;
  letter-spacing:2.5pt}

  h2 {text-align: center;font-size:18pt; font-family:Georgia;}

  h3 {text-align: left;font-size:18pt; font-family:Georgia;}

  th, td {
    border-bottom: 1px solid #ddd;
  }

  tr:hover {background-color: #33AEFF;}

</style>
<?php

Echo
"<h1 > Greek Airlines</h1>";

$cn = pg_connect("host=localhost port=5432 dbname=Personal_1 user=postgres password=1204");
if ($cn) {
    echo "<hr><br>";
    echo  "\n <h2>Successful connect to database</h2> ";
    echo "<hr><br>";
} else {
    die("<br>Failed, reason: check db configurations.");
}


$email = $_POST['search_email'];
$pass = $_POST['search_password'];
if($email and $pass){
  $rq = "select * from me where email='$email'and password='$pass';";
  $rq_result = pg_query($cn,$rq) or die("Something wrong.. maybe the email doesnt exist for this data;");
  $rq_final = pg_fetch_assoc($rq_result);
  echo "<h3>This is your data : </h3>";
  //print_r($rq_final);
  echo "<table style='border:1px '>";
  echo "<tr><th>Name</th><th>Surname</th><th>Address</th><th>Email</th><th>Passaword</th><th>Country</th>
        <th>Zip</th> <th>Telephone</th><th>Card Number</th><th>Card Type</th><th>Gender</th></tr>";

  $row = pg_fetch_array($rq_result, 0, PGSQL_NUM);
    echo "<tr><td>".$row[0]."</td>"."<td>".$row[1]."</td>"."<td>".$row[2]."</td>"
        ."<td>".$row[3]."</td>"."<td>".$row[4]."</td>"."<td>".$row[5]."</td>"
        ."<td>".$row[6]."</td>"."<td>".$row[7]."</td>"."<td>".$row[8]."</td>"
        ."<td>".$row[9]."</td>"."<td>".$row[10]."</td>"."</tr>";

  }else{
    echo "<h2>Wrong Search </h2>";
  }
pg_close($cn);
?>
