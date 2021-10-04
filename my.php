<?php
$connect = mysqli_connect("localhost", "root", "", "booking");
$query = "SELECT * FROM seats ORDER BY id ASC";
$result = mysqli_query($connect, $query);
?>

<html>  
<head>  
<title>SEATS</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
    <script src="jquery.tabledit.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /*h1{
      font-size: 30px;
      color: #fff;
      text-transform: uppercase;
      font-weight: 300;
      text-align: center;
      margin-bottom: 15px;
      }*/
      table{
        width:50%;
        table-layout: auto;
      }
      .tbl-header{
        background-color: rgba(255,255,255,0.3);
       }
      .tbl-content{
        height:400px;
        overflow-x:auto;
        margin-top: 0px;
        border: 1px solid rgba(255,255,255,0.3);
      }
      th{
        padding: 20px 15px;
        text-align: left;
        font-weight: 500;
        font-size: 20px;
        color: black;
        text-transform: uppercase;
      }
      td{
        padding: 15px;
        text-align: left;
        vertical-align:middle;
        font-weight: 300;
        font-size: 20px;
        color: black;
        border-bottom: solid 1px rgba(255,255,255,0.1);
      }
      /* demo styles */
      /*@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
      body{
        background: -webkit-linear-gradient(left, #25C481, #25B7C4);
        background: linear-gradient(to right, #25C481, #25B7C4);
        font-family: 'Roboto', sans-serif;
      }*/
      section{
        margin: 50px;
      }
      /* for custom scrollbar for webkit browser
      ::-webkit-scrollbar {
          width: 6px;
      }
      ::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      }
      ::-webkit-scrollbar-thumb {
          -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
      }*/
      p.pos_left {
          position: relative;
          bottom:40px;
          right: 80px;
      }
    </style>
</head>  

<body style="background-image: url('bg-01.jpg'); background-size: cover; ">   
  <div class="container">  
    <br />  
    <br />  
    <br />  
    <p class=" pos_left" align="left">
      <a href="dashboard.php"><i style="font-size:40px" class="fa">&#xf060;</i></a>
    </p>
    <div class="table-responsive">  
      <h2 align="center"><b>VIEW SEATS</b></h2><br />  
      <table id="editable_table" class="table table-bordered ">
        <thead>
          <tr> 
            <th><b>Department</b></th>
            <th><b>Seats</b></th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_array($result))
            {
              echo '
              <tr>
               <td style="display:none;">'.$row["id"].'</td>
               <td>'.$row["Department"].'</td>
               <td>'.$row["Seats"].'</td>
              </tr>
              ';
            }
          ?>
        </tbody>
      </table>
    </div>  
  </div>  
</body>  
</html>

<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'Department'], [2, 'Seats']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     }); 
});  
</script>