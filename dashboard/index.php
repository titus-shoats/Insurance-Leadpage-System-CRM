<?php
require("../includes/header.php");
require("../db_connect/db_connect.php");
?>

    <header><h2><strong>Admin Dashboard</strong></h2></header>
   <div>

       <script>
           $(document).ready(function(){


               $('#table').DataTable();

               var submit_dash = document.getElementById('submit-dash');
               var submit_dash_parent = submit_dash.parentNode.parentNode;
               var td =submit_dash.parentNode.parentNode;
               var main_row = submit_dash_parent.parentNode;

               if(document.getElementsByClassName("id")){
                   var id = document.getElementsByClassName("id");
                   for(var i = 0; i < document.getElementsByClassName("id").length; i++ ){
                       var delete_btn =  document.getElementsByClassName("id")[i].nextElementSibling;
                       delete_btn.onclick = function(){

                           var that = this;
                           var form_data = {id:this.previousElementSibling.value};

                           $.ajax({
                               url:"http://instanthealthyquotes.com/http/post.php",
                               type:"POST",
                               data:form_data,
                               success:function(data,status,jqxhr){


                                  document.getElementById("alert").style.display = "";
                                  that.parentNode.parentNode.parentNode.parentNode.removeChild(that.parentNode.parentNode.parentNode);
                               },
                               error:function(){

                               }
                           })

                       }
                   }
               }








           });

       </script>


           <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
           <thead>
           <div id="alert" class="alert alert-success" role="alert" style="display: none">
                   <h3 style="text-align: center; color: #007dc0  ">Successfully Deleted</h3>
           </div>
           <tr>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Address</th>
               <th>City</th>
               <th>State</th>
               <th>Zip Code</th>
               <th>DOB</th>
               <th>Delete</th>
           </tr>
           </thead>
           <tfoot>

           </tfoot>
           <tbody>
              <?php

              $fetch_leads = new Db_Connect();
              $get_leads = $fetch_leads->fetch_leads();
              for($i = 0; $i < count($get_leads); $i++){
                //  echo $get_leads[$i]['fname'];
                  ?>
                  <tr>
                      <td><?php  echo $get_leads[$i]['fname'];?></td>

                      <td><?php  echo $get_leads[$i]['lname'];?></td>

                      <td><?php  echo $get_leads[$i]['email'];?></td>

                      <td><?php  echo $get_leads[$i]['phone'];?></td>

                      <td><?php  echo $get_leads[$i]['address'];?></td>

                      <td><?php  echo $get_leads[$i]['city'];?></td>

                      <td><?php  echo $get_leads[$i]['state'];?></td>

                      <td><?php  echo $get_leads[$i]['zipcode'];?></td>

                      <td><?php  echo $get_leads[$i]['dob'];?></td>

                      <td>
                          <form  method="post" enctype="application/x-www-form-urlencoded">
                              <input type="hidden" name="id" id="id" class="id" value="<?php echo $get_leads[$i]['id'] ?>"/>
                              <input type="button" id="submit-dash" name="submit" value="Delete"/>
                          </form>
                      </td>

                  <?php
              }

               ?>
                  </tr>
           </tbody>
           </table>
       </table>
   </div>

<?php
require("../includes/footer.php");
?>