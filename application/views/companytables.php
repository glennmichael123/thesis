
<div id="wrap-students">
    <div class="well dashboard-list">

      <?php if(empty($company_for_graph_count)):?>
          <table id="companyDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
            <thead>
                <tr style="background-color: #f44336; color:white;">
                    <!-- <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th> -->
                    <th>Company Name</th>
                    <th>Number of trainees</th>
                </tr>
            </thead>
          </table>
      <?php else:?>
      <form action="deleteStudent" method="POST" name="formDel">
            <table id="companyDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                    <thead>
                        <tr style="background-color: #f44336; color:white;">
                            <!-- <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th> -->
                            <th>Company Name</th>
                            <th>Number of trainees</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php foreach($company_for_graph_count as $company): ?>
                      <tr>
                         <td><?php echo $company['company_name'] ?></td>
                         <td><?php echo $company['count'] ?></td>
                      </tr>
                    <?php endforeach; ?>
                     
                  </tbody>
              </table>
              <!-- <div><button type="button" class="btn btn-warning" id="btnDelete"><i class="fa fa-trash"></i> Delete Selected Item(s)</button> </div> -->
        <?php endif;?>
        </form>
     </div>
  </div>

<!-- 
<script type="text/javascript">

  $(document).on('click','.resendEmail',function(e){
      e.preventDefault();

      var email=$(this).data('email');
      var username=$(this).data('id-number');
      var name=$(this).data('name');
      var password=$(this).data('password');

      $.ajax({
        url:"retrySendEmail",
        type: "POST",
        data:{
          'name': name,
          'email': email,
          'password': password,
          'username': username,
        },
        success:function(data){
          if($.trim(data) == "true"){
            swal({
              title: "Success!",
              text: "Email sent successfully",
              icon: "success",
            }).then(function(){
              location.reload();
            });
          }else
              swal('Oops...','Email not sent','error');
          
          }
        
      });
  });
</script> -->

<script type="text/javascript">
  var table = $('#companyDataTable').DataTable({
     "bProcessing": true,
      "order": [0, 'asc'],
      "columns": [{"orderable": false },{"orderable": false }],
    });
</script>
<!-- 
<script type="text/javascript">
  $('#checkall').change(function(){
    $('.checkitem').prop("checked",$(this).prop("checked"));
  });

  $('#btnDelete').click(function(e){ 
      var checks = document.getElementsByName("usernames[]");
      var dataUsername = $("input[type='checkbox']:checked").serialize().replace(/%5B%5D/g, '[]');
      var confirm = null;
      for (var i=0; i < checks.length; i++) {
        if(checks[i].checked == true){
          confirm = "yes";break;
        }
      }
      if(confirm == "yes"){
          swal({
            title: "Are you sure?",
            icon: "warning",
            buttons: true,
            buttons: ["No", "Yes"],
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                url: "deleteStudent",
                type: "POST",
                data:dataUsername,
                success: function(data){
                  location.reload(true);
                }
              });
            }
            else{
              e.preventDefault();
            }
          });
      }
    });
</script> -->
