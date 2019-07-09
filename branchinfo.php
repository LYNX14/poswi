<?php
include 'temp/navbar.php';
?>
<?php startblock('branchinfo') ?>

	


                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet box green">
                                    <div class="portlet-title">

                                        <div class="caption font-red">
                                            <i class="icon-layers font-dark"></i>
                                            <span class="caption-subject bold uppercase"> Branch Information</span>
                                        </div>

                                    </div>
                                    <div class="portlet-body">

                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> Branch ID </th>
                                                    <th> Branch Name </th>
                                                   
                                                    <th> Branch Address </th>
                                                    <th> Branch Number </th>
                                                    <th> Branch Open </th>                      
                                                    <th> Status </th>
                                                    <th> Update </th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                   <td class="center"> 1 </td>
                                                    <td class="center"> branch 1 robinson </td>
                                                    <td class="center"> lawaan3 talisay city </td>
                                                    <td class="center"> 123456 </td>
                                                    <td class="center"> march 21, 2010</td>
                                                    
                                                   <td>
                                                            <span class="label label-sm label-danger"> Disabled </span>
                                                   </td>
                                                    <td>
                                                      <a href="javascript:;" class="btn btn-outline btn-circle btn-sm red">
                                                                <i class="fa fa-edit"></i> Edit </a>
                                                     </td>                                               
                                                </tr>


                                                 <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                   <td class="center"> 2</td>
                                                    <td class="center"> branch 2 mandaue </td>
                                                    <td class="center"> lawaan3 talisay city </td>
                                                    <td class="center"> 123456 </td>
                                                    <td class="center"> march 21, 2012</td>
                                                     <td>
                                                            <span class="label label-sm label-success"> Active </span>
                                                    </td>
                                                    <td>
                                                          <a href="javascript:;" class="btn btn-outline btn-circle btn-sm red">
                                                             <i class="fa fa-edit"></i> Edit </a>
                                                      </td>
                                                    
                                                </tr>

                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>



<?php endblock() ?>