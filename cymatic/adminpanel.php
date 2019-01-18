<?php
$conn = mysqli_connect("localhost","root","","cymatic");
$data = mysqli_query($conn,"SELECT firstname,surname,id from users");


?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style type="text/css">
    #myInput {
      background-image: url('/css/searchicon.png'); /* Add a search icon to input */
      background-position: 10px 12px; /* Position the search icon */
      background-repeat: no-repeat; /* Do not repeat the icon image */
      width: 100%; /* Full-width */
      font-size: 16px; /* Increase font-size */
      padding: 12px 20px 12px 40px; /* Add some padding */
      border: 1px solid #ddd; /* Add a grey border */
      margin-bottom: 12px; /* Add some space below the input */
    }

    #myTable {
      border-collapse: collapse; /* Collapse borders */
      width: 100%; /* Full-width */
      border: 1px solid #ddd; /* Add a grey border */
      font-size: 18px; /* Increase font-size */
    }

    #myTable th, #myTable td {
      text-align: left; /* Left-align text */
      padding: 12px; /* Add padding */
    }

    #myTable tr {
      /* Add a bottom border to all table rows */
      border-bottom: 1px solid #ddd; 
    }

    #myTable tr.header, #myTable tr:hover {
      /* Add a grey background color to the table header and on hover */
      background-color: #f1f1f1;
    }
  </style>
  <script>

    function fetch(data){
      window.location.href = "./fetchdetail.php?q="+data;
    }

    function myFunction() {
      // Declare variables 
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        } 
      }
    }
</script>
</head>
<body>
<div class="container" style="margin-top: 200px" id="searchbox">
  <div class="row">
    <div class="col-md-12">
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
      <table id="myTable">
        <tr class="header">
          <th style="width:60%;">Name</th>
          <th style="width:40%;">Country</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($data)){ ?>
        <tr>
          <td><?php echo $row["firstname"]." ".$row["surname"]?></td>
          <td><button onclick="fetch(<?php echo $row['id'] ?>)">Fetch Data</button></td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 200px" id="fetchresult">
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="usr">Full Name:</label>
        <input type="text" class="form-control" id="usr" disabled="true">
      </div>
    </div>
  </div>
</div>
</body>
</html>