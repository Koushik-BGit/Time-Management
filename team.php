<?php include'include/header.php';  ?>


<div style="height:65.8px"></div>


<section class="page-content">
    <div class="wrapper">
        <div class="page-titlediv">
            <div class="left-div">
                <div class="page-title">
                    <div class="icon-box">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h2>Team</h2>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="setting_tab_area">
            <ul class="tab_header">
                <li><a  data-tab="setting_tab_1" class="active common_button">Employee</a></li>
                <li><a data-tab="setting_tab_2" class=" common_button">Clients</a></li>
            </ul>
            <div class="setting_main_content">
                <div id="setting_tab_1" class="tab_content active">
                    
                        <div class="row">
                            <div class="ch_col_3 lft">
                                <form>
                                    <div class="form-group search_by lft">
                                        <div class="form-field">
                                            <input type="text" placeholder="Search by name or email..." class="form-control ">
                                        </div>
                                    </div>
                                    <button class="common_button rgt" type="button" ><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <div class="ch_col_3 rgt">
                                <button class="common_button popup-btn rgt" type="button" rel="add_new_employee_popup">Add New Employee</button>
                            </div>
                            
                            <div class="clear"></div>
                        </div>
                        <br/>
                        <table class="tags_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Business Unit</th>
                                    <th>Sub Business Unit</th>
                                    <th>Position</th>
                                    <th>Billable Rate (GBP)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cordelia Morgan</td>
                                    <td>cordelia.mrgan@onelogin.com</td>
                                    <td>ADAM</td>
                                    <td>Business Development</td>
                                    <td>Administrator </td>
                                    <td>£115.12</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_employee_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_employee_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cordelia Morgan</td>
                                    <td>cordelia.mrgan@onelogin.com</td>
                                    <td>ADAM</td>
                                    <td>Business Development</td>
                                    <td>Administrator </td>
                                    <td>£115.12</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_employee_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_employee_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cordelia Morgan</td>
                                    <td>cordelia.mrgan@onelogin.com</td>
                                    <td>ADAM</td>
                                    <td>Business Development</td>
                                    <td>Administrator </td>
                                    <td>£115.12</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_employee_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_employee_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="pagination rgt">
                            <a class="prev"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                            <a>1</a>
                            <a>2</a>
                            <a>3</a>
                            <a class="next"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="clear"></div>
                </div>
                <div id="setting_tab_2" class="tab_content ">
                   <div class="row">
                            <div class="ch_col_3 lft">
                                <form>
                                    <div class="form-group search_by lft">
                                        <div class="form-field">
                                            <input type="text" placeholder="Search by name or email..." class="form-control ">
                                        </div>
                                    </div>
                                    <button class="common_button rgt" type="button" ><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <div class="ch_col_3 rgt">
                                <button class="common_button popup-btn rgt" type="button" rel="add_new_client_popup">Add New Client</button>
                            </div>
                            
                            <div class="clear"></div>
                        </div>
                        <br/>
                        <table class="tags_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Business Unit</th>
                                    <th>Sub Business Unit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Crate</td>
                                    <td>Business Unit 1</td>
                                    <td>Sub Business Unit 1</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_client_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_client_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adam</td>
                                    <td>Business Unit 2</td>
                                    <td>Sub Business Unit 2</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_client_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_client_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Yoyotech</td>
                                    <td>Business Unit 3</td>
                                    <td>Sub Business Unit 3</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_client_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_client_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                        
                        <div class="pagination rgt">
                            <a class="prev"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
                            <a>1</a>
                            <a>2</a>
                            <a>3</a>
                            <a class="next"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="clear"></div>
                    
                    
                    
                    
                </div>
            </div>            
        </div>
        
    </div>
</section>

<!----add employee popup-->
<div class="modal " id="add_new_employee_popup" >
    <form>
        <div class="modal-header">
        	<h2>Add New Employee </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name</label>
                <div class="form-field ">
                    <input type="text"  placeholder="Enter Name "class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Email</label>
                <input type="email"  placeholder="Enter Email "class="form-control ">
            </div>
            <div class="form-group  ">
                <label>Password</label>
                <input type="password"  placeholder="Enter Password "class="form-control ">
            </div>
            <div class="row">
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Business unit</label>
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Business Development</option>
                                <option>Central</option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>Sub Business unit</label>
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Business Development</option>
                                <option>Property</option>
                                <option>Central IT</option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Position </label> 
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Member </option>
                                <option>Administrator</option>
                                <option>Group Leader</option>
                                <option>Team Leader</option>
                                <option>Line Manager  </option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>Under </label>
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Jhon Doe </option>
                                <option>Subhashis Sarkar</option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add_new_employee_successfull_popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add_new_employee_successfull_popup">
    <div class="modal-header">
    	<h2>Add New Employee </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Employee added successfully</h3>
    </div>
</div>
<!----add employee popup-->

<!----Edit employee popup-->
<div class="modal" id="edit_employee_popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Employee </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name</label>
                <div class="form-field ">
                    <input type="text"  placeholder="Enter Name "class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Email</label>
                <input type="email"  placeholder="Enter Email "class="form-control ">
            </div>
            <div class="form-group  ">
                <label>Password</label>
                <input type="password"  placeholder="Enter Password "class="form-control ">
            </div>
            <div class="row">
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Business unit</label>
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Business Development</option>
                                <option>Central</option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>Sub Business unit</label>
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Business Development</option>
                                <option>Property</option>
                                <option>Central IT</option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Position </label> 
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Member </option>
                                <option>Administrator</option>
                                <option>Group Leader</option>
                                <option>Team Leader</option>
                                <option>Line Manager  </option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>Under </label>
                        <div class="form-field ">
                            <select class="form-control ">
                                <option>Select</option>
                                <option>Jhon Doe </option>
                                <option>Subhashis Sarkar</option>
                            </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit_employee_successfull_popup" type="button" style="    padding: 7px 15px;">Submit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit_employee_successfull_popup">
    <div class="modal-header">
    	<h2>Edit Employee </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Employee Edited successfully</h3>
    </div>
</div>
<!----Edit employee popup-->


<!----Delete employee popup-->
<div class="modal" id="delete_employee_popup">
    <div class="modal-header">
    	<h2>Delete Employee </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this employee?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete_employee_successfull_popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete_employee_successfull_popup">
    <div class="modal-header">
    	<h2>Delete Employee </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Employee deleted  successfully</h3>
    </div>
</div>
<!----Delete employee popup-->


<!----add Client popup-->
<div class="modal " id="add_new_client_popup" >
    <form>
        <div class="modal-header">
        	<h2>Add New Client </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name</label>
                <div class="form-field ">
                    <input type="text"  placeholder="Enter Name "class="form-control ">
                </div>
            </div>
            
            <div class="form-group ">
                <label>Business Unit</label>
                <div class="form-field ">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                        <option>Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group ">
                <label>Sub Business Unit</label>
                <div class="form-field ">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Sub Business Unit 1</option>
                        <option>Sub Business Unit 2</option>
                        <option>Sub Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <!--<div class="form-group  ">
                <label>Password</label>
                <input type="password"  placeholder="Enter Password "class="form-control ">
            </div>-->
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add_new_client_successfull_popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add_new_client_successfull_popup">
    <div class="modal-header">
    	<h2>Add New Client </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Client added successfully</h3>
    </div>
</div>
<!----add Client popup-->

<!----Edit Client popup-->
<div class="modal" id="edit_client_popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Client </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name</label>
                <div class="form-field ">
                    <input type="text"  placeholder="Enter Name "class="form-control ">
                </div>
            </div>
            
            <div class="form-group ">
                <label>Business Unit</label>
                <div class="form-field ">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                        <option>Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group ">
                <label>Sub Business Unit</label>
                <div class="form-field ">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Sub Business Unit 1</option>
                        <option>Sub Business Unit 2</option>
                        <option>Sub Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <!--<div class="form-group  ">
                <label>Password</label>
                <input type="password"  placeholder="Enter Password "class="form-control ">
            </div>-->
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit_client_successfull_popup" type="button" style="    padding: 7px 15px;">Submit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit_client_successfull_popup">
    <div class="modal-header">
    	<h2>Edit Client </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Client Edited successfully</h3>
    </div>
</div>
<!----Edit Client popup-->


<!----Delete Client popup-->
<div class="modal" id="delete_client_popup">
    <div class="modal-header">
    	<h2>Delete Client </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this client?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete_client_successfull_popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete_client_successfull_popup">
    <div class="modal-header">
    	<h2>Delete Client </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Client deleted  successfully</h3>
    </div>
</div>
<!----Delete Client popup-->





<?php include'include/footer.php';  ?>


<script>
    $('ul.tab_header li a').click(function(){
		var tab_id = $(this).attr('data-tab');
		$('ul.tab_header li a').removeClass('active');
		$('.tab_content').removeClass('active');
		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
	});
 
</script>
















