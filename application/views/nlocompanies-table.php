<div class="well dashboard-list" style="margin-top: 20px;">
      <?php if(empty($companies)):?>
          <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
            <thead>
                <tr style="background-color: #f44336; color:white;">
                    <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th>
                    <th>Company Name</th>
                    <th>Company Address</th>
                    <th>Designated Person</th>
                    <th>Position</th>
                    <th>Contact Number</th>
                    <th>Watchlisted</th>
                    <th>MOA</th>
                    <th></th>
                </tr>
            </thead>
          </table>
      <?php else:?>
      <form action="deleteCompany" method="POST" name="formDel">
            <table id="adminDataTable" class="table table-bordered" cellspacing="0" width="100%" style="font-size: 13px;">
                    <thead>
                        <tr style="background-color: #db3c30; color:white;">
                            <th style="text-align: center;width: 45px"><input type="checkbox" id="checkall"></th>
                            <th>Company Name</th>
                            <th>Company Address</th>
                            <th>Designated Person</th>
                            <th>Position</th>
                            <th>Contact Number</th>
                            <th>Watchlisted</th>
                            <th>MOA</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($companies as $company):?>
                        <tr class="dashTable">
                              <td style="text-align: center;width: 45px"><input type="checkbox" class="checkitem" value="<?php echo $company['id']?>" name="usernames[]"></td>
                              <td><?php echo $company['company_name']; ?></td>
                              <td><?php echo $company['address']; ?></td>
                              <td><?php echo $company['designated_person']; ?> </td>
                                 <td><?php echo $company['position']; ?> </td>
                              <td><?php echo $company['contact_no']; ?></td>
                              <td style="color:<?php echo ($company['watchlisted'] == 1 ? 'red' : 'green') ?>"><?php echo($company['watchlisted'] == 1 ? 'Yes' : 'No')?></td>
                              <?php if ($company['moa'] == 1):?>
                                <td style="color:green">With MOA</td>
                              <?php else: ?>
                                <td style="color:red">No MOA</td>
                              <?php endif; ?>
                              <td><button type="button" data-company-id="<?php echo $company['id']?>" class="btn btn-success btn-xs edit-view" data-toggle="modal" data-target="#editModal">Edit <i class="fa fa-pencil"></i></button></td>

                          </tr>
                      <?php endforeach;?>
                  </tbody>
              </table>
              <div><button type="button" class="btn btn-warning" id="btnDelete"><i class="fa fa-trash"></i> Delete Selected Item(s)</button>
              </div>
            <?php endif;?>
        </form>
    </div>


<!--data-table-->
<script type="text/javascript">
  var table = $('#adminDataTable').DataTable({
   "bProcessing": true,
    "order": [1, 'asc'],
    "columns": [{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false },{"orderable": false }, {"orderable": false },{"orderable": false }],
  });
</script>