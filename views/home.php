

    <!-- Page Wrapper -->
    <div id="wrapper">

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav style="background-color: #4e73df !important;" class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
      
      <a id="logout" class="navbar-brand" >Logout</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new tax payer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">

      <form id="add-form" action="/addtaxpayer" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">TPIN:</label>
            <input type="text" class="form-control php-input-error" id="tpin" name="tpin">
            <div class="tpin php-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control php-input-error" id="email" name="email">
            <div class="email php-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label ">Mobile Number:</label>
            <input type="text" class="form-control php-input-error" id="mobileNumber" name="mobileNumber">
            <div class="mobileNumber php-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label ">TradingName:</label>
            <input type="text" class="form-control php-input-error" id="tradingName">
            <div class="tradingName php-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label ">PhysicalLocation:</label>
            <input type="text" class="form-control php-input-error" id="physicalLocation">
            <div class="physicalLocation php-error  invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Business Certificate Number:</label>
            <input type="text" class="form-control php-input-error" name="bcn" id="businessCertificateNumber">
            <div class="businessCertificateNumber php-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Business Registration Date:</label>
            <input type="text" class="form-control php-input-error" name="brd" id="businessRegistrationDate"/>
            <div class="businessRegistrationDate php-error invalid-feedback"> </div>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="addpayer" type="button" class="btn btn-primary">Add Tax Payer</button>
      </div>
    </div>
  </div>
</div>


                    <!--Update Modal -->
                    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update tax payer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">

      <form id="update-form" action="/addtaxpayer" method="POST">
      <fieldset disabled>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">TPIN:</label>
            <input  type="text" class="form-control update-input-error" id="update-tpin" name="tpin">
            <div class="update-tpin update-error invalid-feedback"> </div>
          </div>
      </fieldset>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control update-input-error" id="update-email" name="email">
            <div class="update-email update-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label ">Mobile Number:</label>
            <input type="text" class="form-control update-input-error" id="update-mobileNumber" name="mobileNumber">
            <div class="update-mobileNumber update-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label ">TradingName:</label>
            <input type="text" class="form-control update-input-error" id="update-tradingName">
            <div class="update-tradingName update-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label ">PhysicalLocation:</label>
            <input type="text" class="form-control update-input-error" id="update-physicalLocation">
            <div class="update-physicalLocation update-error  invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Business Certificate Number:</label>
            <input type="text" class="form-control update-input-error" name="bcn" id="update-businessCertificateNumber">
            <div class="update-businessCertificateNumber update-error invalid-feedback"> </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Business Registration Date:</label>
            <input type="text" class="form-control update-input-error"  id="update-businessRegistrationDate">
            <div class="update-businessRegistrationDate update-error invalid-feedback"> </div>
          </div>
          
         
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="updatepayer" type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

                    <!--end Update modal -->

                    <!-- Page Heading -->
                   
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tax Payer Data Management System</h1>
                        
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"> Add User</a>
                               
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tax Payers</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>TPIN</th>
                                            <th>TradingName</th>
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>PhysicalLocation</th>
                                            <th>Business Certificate Number</th>
                                            <th>Business Registration Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>TPIN</th>
                                            <th>TradingName</th>
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>PhysicalLocation</th>
                                            <th>Business Certificate Number</th>
                                            <th>Business Registration Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="tbody">
                                      <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    

    <script>
      $( document ).ready(function() {

       


        $.get( "/gettaxpayers", function( data ) {
        var taxPayers = JSON.parse(data);
        
        for(let x=0; x<taxPayers.length; x++){

          $('#tbody').append(`<tr class='clickable-row' id="${taxPayers[x]["TPIN"]}">
                              <td>${taxPayers[x]["TPIN"]}</td>
                              <td>${taxPayers[x]["TradingName"]}</td>
                              <td>${taxPayers[x]["Email"]}</td>
                              <td>${taxPayers[x]["MobileNumber"]}</td>
                              <td>${taxPayers[x]["PhysicalLocation"]}</td>
                              <td>${taxPayers[x]["BusinessCertificateNumber"]}</td>
                              <td>${taxPayers[x]["BusinessRegistrationDate"]}</td>
                              <td>
                              <button p-2 type="button"  class="btn btn-update btn-link btn-sm">Update</button>
                              <button p-2 type="button" class="btn btn-delete btn-link  btn-sm">Delete</button>
                             </td>
                            </tr>`);
        }
      }).done(function() {
   
  }).fail(function() {
    alert( "error" );
  })

    });

    document.getElementById("logout").addEventListener('click',logUserOut)
    function logUserOut (){
      $.get( "/logout", function(data) {
        if(data == true){
          location.reload();
        }
        console.log("signout",data)}
        )
    }
    document.getElementById("updatepayer").addEventListener('click',updateData)
    function updateData(){
            var tpin= document.getElementById("update-tpin").value 
            var businessCertificateNumber=  document.getElementById("update-businessCertificateNumber").value 
            var tradingName = document.getElementById("update-tradingName").value 
            var email = document.getElementById("update-email").value 
            var businessRegistrationDate= document.getElementById("update-businessRegistrationDate").value 
            var mobileNumber= document.getElementById("update-mobileNumber").value 
            var physicalLocation = document.getElementById("update-physicalLocation").value 
            var updatedata = {
          'email': email,
          'tpin': tpin,
          'businessCertificateNumber':businessCertificateNumber,
          'tradingName': tradingName,
          'businessRegistrationDate':businessRegistrationDate,
          'mobileNumber':mobileNumber,
          'physicalLocation':physicalLocation
        }

        $.post( "/updatetaxpayer",updatedata, function( data) {
            
            $( ".update-input-error" ).removeClass( "is-invalid" ).addClass( "is-valid" );
           $( ".update-error" ).text( "" );
            console.log(data)
            
            var errorData = JSON.parse(data);
               console.log(errorData)
               ; 
              if(jQuery.isEmptyObject(errorData)){
                //close the dialog
                //add data to the table
                console.log("is emptys")
              }else{
                console.log("am in", errorData.length)
                for (let error  in errorData) {
                  console.log(error)
                  $( "#update-"+error ).removeClass( "is-valid" ).addClass( "is-invalid" );
                  $( ".update-"+error ).text( errorData[error][0] );
                }
              }
              
               
          });
    }
    </script>

<script>
      $( document ).ready(function() {
        $("body").on('click', '.btn-update',function(){
          $('#updateModal').modal('show'); 
          var id = $(this).closest('tr').attr('id')
          $.post( "/singletaxpayer",{"id":id}, function( data) {
        //document.getElementById("myText").value = "Johnny Bravo";
        var singleData = JSON.parse(data);
            console.log(singleData)
            document.getElementById("update-tpin").value =singleData["TPIN"]
            document.getElementById("update-businessCertificateNumber").value = singleData["BusinessCertificateNumber"]
            document.getElementById("update-tradingName").value = singleData["TradingName"]
            document.getElementById("update-email").value = singleData["Email"]
            document.getElementById("update-businessRegistrationDate").value = singleData["BusinessRegistrationDate"]
            document.getElementById("update-mobileNumber").value = singleData["MobileNumber"]
            document.getElementById("update-physicalLocation").value = singleData["PhysicalLocation"]
               
          });

        });


        $("body").on('click', '.btn-delete',function(){
          var id = $(this).closest('tr').attr('id')
          $.post( "/deletetaxpayer",{"id":id}, function( data) {
        //document.getElementById("myText").value = "Johnny Bravo";
              console.log(data)
           });

        });



      })
    </script>

   <script>
    
     document.getElementById("addpayer").addEventListener('click',addData)
      function addData(){
        var tpin =document.getElementById("tpin").value
        var businessCertificateNumber =document.getElementById("businessCertificateNumber").value
        var tradingName =document.getElementById("tradingName").value
        var email = document.getElementById("email").value
        var businessRegistrationDate = document.getElementById("businessRegistrationDate").value
        var mobileNumber = document.getElementById("mobileNumber").value
        var physicalLocation = document.getElementById("physicalLocation").value

        var data1 = {
          'email': email,
          'tpin': tpin,
          'businessCertificateNumber':businessCertificateNumber,
          'tradingName': tradingName,
          'businessRegistrationDate':businessRegistrationDate,
          'mobileNumber':mobileNumber,
          'physicalLocation':physicalLocation
        }

          //console.log('businessRegistrationDate',data1)
          
          $.post( "/addtaxpayer",data1, function( data) {
            
            $( ".php-input-error" ).removeClass( "is-invalid" ).addClass( "is-valid" );
            $( ".php-error" ).text( "" );
            console.log(data)
              var errorData = JSON.parse(data);
               console.log(errorData)
               ; 
              if(jQuery.isEmptyObject(errorData)){
                //close the dialog
                //add data to the table
                console.log("is emptys")
              }else{
                console.log("am in", errorData.length)
                for (let error  in errorData) {
                  //console.log(error[0])
                  $( "#"+error ).removeClass( "is-valid" ).addClass( "is-invalid" );
                  $( "."+error ).text( errorData[error][0] );
                }
              }
               
              
               
          });
  
 
      }



     
   </script>

