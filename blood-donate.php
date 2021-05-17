<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<style type="text/css"> 


.bg-name{
  background-color: #FFC7C9;
}
.bg-address{
  background-color: #DA2A47;
}

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

</style>

                  <!-- Home Banner -->
     <br><br><br>
            
   <img src="img/blood/blood.jpg" class="img-fluid" width="100%" >
      
         <!-- /Home Banner -->
    <br><br>    <br><br>
            
     <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">

          <div class="col-lg-12">
              <h2 class="title-1 m-b-25">BloodBank Lists</h2>
              <div class="table-responsive table--no-card m-b-40">

              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for District" title="Type in a name"> 

                                    <table class="table table-borderless table-striped table-earning"  id="bloodcenters"  data-aos-delay="200">

                                    <br>

                                            <thead>
                                              <th class="bg-name">S.No.</th>
                                              <th  class="bg-address">Blood Bank Name</th>

                                              <th class="bg-name">Address</th>
                                              <th class="bg-address">City</th>

                                              <th class="bg-name" >District</th>
                                              <th  class="bg-address">Category</th>

                                              <th  class="bg-name">Mobile No.</th>
                                              <th  class="bg-address">Landline</th>

                                            </thead>

                                            <tbody>
                                              
                                            </tbody>
                                            
                                            </table>
                                        </div>
                                        </div>
                                      </div>

                                  </div>





 <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
<script type="text/javascript">


  $.ajax({
    url:"https://api.data.gov.in/resource/fced6df9-a360-4e08-8ca0-f283fc74ce15?api-key=579b464db66ec23bdd0000016eb95066326649877300f6063b2b8d14&format=json&offset=0&limit=3000",
    type:"GET",
    dataType:"JSON",
    success : function(blood_data) {



    console.log(blood_data.records[0].__state);
    




    var newArray = blood_data.records.filter(function (el) {

      return el.__state === 'Arunachal Pradesh';

    });

    console.log(newArray);


    var sno = 1;

    $.each(newArray, function(key, value){


      $("#bloodcenters").append("<tr>" + 
        "<td>" + sno + " </td>" +
        "<td>" + value._blood_bank_name + "</td>" +
        "<td>" + value.__address + "</td>" +
        "<td>" + value.__district + "</td>" +
        "<td>" + value.__city + "</td>" +
        "<td>" + value.__category + " </td>" +
        "<td>" + value._mobile + "</td>" +
        "<td>" + value.__contact_no + "</td>" +
        "</tr>" );
      sno++;


    });

      
    }
  

  });

</script>



<script type="text/javascript">
  
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("bloodcenters");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
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

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>
