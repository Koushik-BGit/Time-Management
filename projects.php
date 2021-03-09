<?php include'include/header.php';  ?>


<div style="height:65.8px"></div>


<section class="page-content  main_project_list">
    <div class="wrapper">
        <div class="page-titlediv">
            <div class="left-div">
                <div class="page-title">
                    <div class="icon-box">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h2>Projects</h2>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="setting_tab_area">
            <ul class="tab_header">
                <li><a  data-tab="setting_tab_201" class="active common_button">Projects</a></li>
                <li><a data-tab="setting_tab_202" class=" common_button">Employee</a></li>
                <li><a data-tab="setting_tab_203" class=" common_button">Clients</a></li>
            </ul>
            <div class="setting_main_content">
                <div id="setting_tab_201" class="tab_content active">
                        
                    <div class="filter_option">
                        <h4>Filter</h4>
                        <form>
                            <div class="lft flter_box">
                                <div class="form-group lft">
                                    <div class="form-field tag_main fatch_clients">
                                        <input type="text" readonly="" placeholder="" class="form-control ">
                                        <span class="value_fatch" >Client</span>
                                        <div class="Selet_drop fatch_clients_drop">
                                            <div class="option">Crate </div>
                                            <div class="option">Centerprise</div>
                                            <div class="option">Yoyotech</div>
                                            <div class="option">Adam</div>
                                        </div>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-group  lft">
                                    <div class="form-field tag_main fatch_project">
                                        <input type="text" readonly="" placeholder="" class="form-control ">
                                        <span class="value_fatch">Project</span>
                                        <div class="Selet_drop fatch_project_drop">
                                            <div class="option">Crate</div>
                                            <div class="option">Centerprise</div>
                                            <div class="option">Yoyotech</div>
                                            <div class="option">Adam</div>
                                        </div>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-group lft">
                                    <div class="form-field ">
                                        <select class="form-control ">
                                            <option>Business Unit</option>
                                            <option>Business Unit 1</option>
                                            <option>Business Unit 2</option>
                                            <option>Business Unit 3</option>
                                        </select>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="form-group lft">
                                    <div class="form-field ">
                                        <select class="form-control ">
                                            <option>Sub Business Unit</option>
                                            <option>Sub Business Unit 1</option>
                                            <option>Sub Business Unit 2</option>
                                            <option>Sub Business Unit 3</option>
                                        </select>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <a href="#" class="lft common_button" style="margin-right:15px;">Apply Filter</a>
                                <div class="form-group ser_by_proj lft">
                                    <div class="form-field">
                                        <input type="text" placeholder="Project Name" class="form-control ">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                                
                                <div class="clear"></div>
                            </div>
                            <a href="#" class="common_button popup-btn rgt" rel="add_new_project_popup"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Add New Project</a>
                            <div class="clear"></div>
                        </form>
                    </div>
                    <div class="time_estimate">
                        <p class="lft">Total Estimate: <strong>50.6 Hours</strong></p>
                        <p class="lft">Total Work: <strong>26.6 Hours</strong></p>
                        <div class="clear"></div>
                    </div>
                    <div class="proj_table">
                        <table class="tags_table">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Client</th>
                                    <th>Status</th>
                                    <th>Estimate Time</th> 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="javascript:void(0);" class="linked_project" data-tab="showProject_1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Crate</a></td>
                                    <td>Crate</td>
                                    <td>
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span>
                                            <span class="tol_time">07.30 Hours</span>
                                            <span class="est_time">(of 32 Hours)</span>
                                        </span>
                                    </td>
                                    <td>80:00 Hours</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_project_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_project_popup"><i class="fa fa-close"></i></a>
                                        <!--<a href="javascript:void(0);"  class="proj_fav" >
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <p class="toltip">Add to Favourite</p>
                                        </a>-->
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="linked_project"  data-tab="showProject_1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Adam</a></td>
                                    <td>Adam</td>
                                    <td>
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span>
                                            <span class="tol_time">07.30 Hours</span>
                                            <span class="est_time">(of 32 Hours)</span>
                                        </span>
                                    </td>
                                    <td>80:00 Hours</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_project_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_project_popup"><i class="fa fa-close"></i></a>
            
                                        <!--<a href="javascript:void(0);"  class="proj_fav" >
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <p class="toltip">Add to Favourite</p>
                                        </a>-->
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="linked_project" data-tab="showProject_1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Yoyotech</a></td>
                                    <td>Yoyotech</td>
                                    <td>
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span>
                                            <span class="tol_time">07.30 Hours</span>
                                            <span class="est_time">(of 32 Hours)</span>
                                        </span>
                                    </td>
                                    <td>80:00 Hours</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_project_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_project_popup"><i class="fa fa-close"></i></a>
                                        <!--<a href="javascript:void(0);"  class="proj_fav" >
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <p class="toltip">Add to Favourite</p>
                                        </a>-->
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
                <div id="setting_tab_202" class="tab_content">
                    
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
                                    <!--<th>Email</th>-->
                                    <th>Business Unit</th>
                                    <th>Sub Business Unit</th>
                                    <!--<th>Position</th>
                                    <th>Billable Rate (GBP)</th>-->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cordelia Morgan</td>
                                    <!--<td>cordelia.mrgan@onelogin.com</td>-->
                                    <td>ADAM</td>
                                    <td>Business Development</td>
                                    <!--<td>Administrator </td>
                                    <td>£115.12</td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_employee_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_employee_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cordelia Morgan</td>
                                    <!--<td>cordelia.mrgan@onelogin.com</td>-->
                                    <td>ADAM</td>
                                    <td>Business Development</td>
                                    <!--<td>Administrator </td>
                                    <td>£115.12</td>-->
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_employee_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_employee_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cordelia Morgan</td>
                                    <!--<td>cordelia.mrgan@onelogin.com</td>-->
                                    <td>ADAM</td>
                                    <td>Business Development</td>
                                    <!--<td>Administrator </td>
                                    <td>£115.12</td>-->
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
                <div id="setting_tab_203" class="tab_content ">
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
        

<!----add project popup-->
<div class="modal " id="add_new_project_popup" >
    <form>
        <div class="modal-header">
        	<h2>Add New Project </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Project Name</label>
                <div class="form-field ">
                    <input type="text" placeholder="" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Estimate Time <ins>( Hours )</ins></label>
                <div class="form-field ">
                   <input type="text" placeholder="00:00 " class="form-control estimate_timepicker">
                </div>
            </div>
            <div class="form-group  ">
                <label>Client</label>
                <div class="form-field tag_main add_fatch_client">
                    <input type="text" readonly="" placeholder="" class="form-control ">
                    <span class="value_fatch" >Clients</span>
                    <div class="Selet_drop add_fatch_client_drop">
                        <div class="option">Crate </div>
                        <div class="option">Centerprise</div>
                        <div class="option">Yoyotech</div>
                        <div class="option">Adam</div>
                    </div>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
           
           
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add_new_project_successfull_popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add_new_project_successfull_popup">
    <div class="modal-header">
        	<h2>Add New Project </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<!----add project popup-->


<!----edit project popup-->
<div class="modal " id="edit_project_popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Project </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Project Name</label>
                <div class="form-field ">
                    <input type="text" placeholder="" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Estimate Time <ins>( Hours )</ins></label>
                <div class="form-field ">
                    <input type="text" placeholder="00:00" class="form-control estimate_timepicker_2">
                </div>
            </div>
            <div class="form-group  ">
                <label>Client</label>
                <div class="form-field tag_main add_fatch_client">
                    <input type="text" readonly="" placeholder="" class="form-control ">
                    <span class="value_fatch" >Clients</span>
                    <div class="Selet_drop add_fatch_client_drop">
                        <div class="option">Crate </div>
                        <div class="option">Centerprise</div>
                        <div class="option">Yoyotech</div>
                        <div class="option">Adam</div>
                    </div>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
           
           
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit_project_successfull_popup" type="button" style="    padding: 7px 15px;">Submit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit_project_successfull_popup">
    <div class="modal-header">
        	<h2>Edit Project </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<!----edit project popup-->


<!----Delete project popup-->
<div class="modal" id="delete_project_popup">
    <div class="modal-header">
    	<h2>Delete Project </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete_project_successfull_popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete_project_successfull_popup">
    <div class="modal-header">
    	<h2>Delete Project </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Entry deleted  successfully</h3>
    </div>
</div>
<!----Delete project popup-->


<!----add employee popup-->
<div class="modal " id="add_new_employee_popup" >
    <form>
        <div class="modal-header">
        	<h2>Assign Team Member </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name</label>
                <div class="form-field ">
                    <input type="text"  placeholder="Enter Name "class="form-control ">
                </div>
            </div>
           <!-- <div class="form-group  ">
                <label>Email</label>
                <input type="email"  placeholder="Enter Email "class="form-control ">
            </div>
            <div class="form-group  ">
                <label>Password</label>
                <input type="password"  placeholder="Enter Password "class="form-control ">
            </div>-->
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
                <!--<div class="col-md-5 lft">
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
                </div>-->
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
    	<h2>Assign Team Member </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry  added successfully</h3>
    </div>
</div>
<!----add employee popup-->

<!----Edit employee popup-->
<div class="modal" id="edit_employee_popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Team Member </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name</label>
                <div class="form-field ">
                   <!-- <input type="text"  placeholder="Enter Name "class="form-control ">-->
                   <select class="form-control">
                       <option>Select</option>
                       <option></option>
                       <option></option>
                       <option></option>
                   </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <!--<div class="form-group  ">
                <label>Email</label>
                <input type="email"  placeholder="Enter Email "class="form-control ">
            </div>
            <div class="form-group  ">
                <label>Password</label>
                <input type="password"  placeholder="Enter Password "class="form-control ">
            </div>-->
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
                <!--<div class="col-md-5 lft">
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
                </div>-->
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
    	<h2>Edit Team Member </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
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
    	<h3>Are you sure to delete this entry?</h3>
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
    	<h3> Entry deleted  successfully</h3>
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
    	<h3>Entry added successfully</h3>
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
    	<h3>Entry edited successfully</h3>
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
    	<h3>Are you sure to delete this entry?</h3>
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
    	<h3>Entry deleted  successfully</h3>
    </div>
</div>
<!----Delete Client popup-->




     
     
     
     
     
     
     
        
       
    </div>
</section>


<section class="page-content showProject " id="showProject_1">
    <div class="wrapper">
        <div class="page-titlediv">
            <div class="left-div">
                <div class="page-title">
                    <div class="icon-box">
                        <i class="fa fa-folder-open" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h2><span style="display:block;">Projects</span>
                            Crate</h2>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="setting_tab_area">
            <ul class="tab_header">
                <li><a  data-tab="setting_tab_1" class="active common_button">Tasks</a></li>
                <li><a data-tab="setting_tab_2" class=" common_button">Assign Employee</a></li>
                <li><a data-tab="setting_tab_3" class=" common_button">Status</a></li>
            </ul>
            <div class="setting_main_content">
                <div id="setting_tab_1" class="tab_content active">
                    
                        <div class="row">
                            <div class="ch_col_3 lft">
                                <form>
                                    <div class="form-group search_by lft">
                                        <div class="form-field">
                                            <input type="text" placeholder="Search by name..." class="form-control ">
                                        </div>
                                    </div>
                                    <button class="common_button rgt" type="button" ><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <div class="ch_col_3 rgt">
                                <button class="common_button popup-btn rgt" type="button" rel="add_new_task_popup"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add New Task</button>
                            </div>
                            
                            <div class="clear"></div>
                        </div>
                        <br/>
                        <table class="tags_table">
                            <thead>
                                <tr>
                                    <th>Task Title</th>
                                    <th>Estimate Time(H)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Crate Directory</td>
                                    <td>12</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_task_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_task_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PHD Frame</td>
                                    <td>12</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_task_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_task_popup"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Design Set</td>
                                    <td>12</td>
                                    <td>
                                        <a href="javascript:void(0);" class="edit popup-btn" rel="edit_task_popup"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:void(0);" class="delet popup-btn" rel="delete_task_popup"><i class="fa fa-close"></i></a>
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
                        
                        <div class="ch_col_3 rgt addd_member_wrapper">
                            <button class="common_button rgt addd_member" type="button" ><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add Employee</button>
                            
                            <div class="ins_tagsss">
                                <form>
                                    <i class="fa fa-close"></i>
                                    <label class="kb-container">Subhasis Sarkar<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Jhon Deo<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    
                                    <div>
                                        <a class="rgt common_button" style="width: auto;height: auto;line-height: initial;color: #fff;float: right;padding: 4px 8px;margin-top: 5px;">Add</a>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                    <br/>
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Name </th>
                                <th>Billable rate(GBP)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Subhasis Sarkar<small>( subhasis.sarkar@centerprise.co.uk )</small></td>
                                <td>£12</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit_bilable_rate_popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete_member_popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jhon deo <small>( jhon.deo@centerprise.co.uk )</small></td>
                                <td>£12</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit_bilable_rate_popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete_member_popup"><i class="fa fa-close"></i></a>
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
                <div id="setting_tab_3" class="tab_content ">
                    
                        
                        
                        <div class="row">
                            <div class="col-md-5 lft">
                                <div class="sts_border">
                                    <span class="lft">ESTIMATE</span>
                                    <span class="rgt" style="color:#42b3f5;font-weight: 600;">32 Hours</span>
                                    <div class="clear"></div>
                                </div>
                                
                                <div class="sts_border">
                                    <span class="lft">TRACKED</span>
                                    <span class="rgt" style="color:#42b3f5;font-weight: 600;">07.30 Hours</span>
                                    <div class="clear"></div>
                                    <br/><br/>
                                    <div class="lineee"></div>
                                    <br/><br/>
                                    <span class="lft">BILLABLE</span>
                                    <span class="rgt" style="color:#42b3f5;font-weight: 600;">03.30 Hours</span>
                                    <div class="clear"></div>
                                    <span class="lft">NON BILLABLE</span>
                                    <span class="rgt" style="color:#42b3f5;font-weight: 600;">04.00 Hours</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="sts_border">
                                    <span class="lft">REMAINING</span>
                                    <span class="rgt" style="color:#42b3f5;font-weight: 600;">32 Hours</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="sts_border">
                                    <span class="lft">AMOUNT</span>
                                    <span class="rgt" style="color:#42b3f5;font-weight: 600;">32 GBP</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-md-5 lft">
                                <div>
                                    <!--<div id="bar6" class="barfiller">
                                	    <div class="tipWrap">
                                		<span class="tip"></span>
                                	    </div>
                                	    <span class="fill" data-percentage="95"></span>
                            	    </div>-->
                            	    <div id="bar6"></div>
                                </div>
                                <div id="hours_pie_chart"  style="height: 300px; width:100%;"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                   
                   
                        <br/>
                        <table class="tags_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th style="width:300px;">Progress</th> 
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Create Layout</td>
                                    <td>
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span>
                                            <span class="tol_time">07.30 Hours</span>
                                            <span class="est_time">(of 32 Hours)</span>
                                        </span>
                                    </td>
                                    <td ><div id="bar77"></div></td>
                                    <td>800 GBP</td>
                                </tr>
                                <tr>
                                    <td>Create Layout</td>
                                    <td>
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        <span>
                                            <span class="tol_time">07.30 Hours</span>
                                            <span class="est_time">(of 32 Hours)</span>
                                        </span>
                                    </td>
                                    <td ><div id="bar54"></div></td>
                                    <td>800 GBP</td>
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
        
    
    

<!----add Task popup-->
<div class="modal " id="add_new_task_popup" >
    <form>
        <div class="modal-header">
        	<h2>Add New Task </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Task Name</label>
                <div class="form-field ">
                    <input type="text" placeholder="" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Estimate Time</label>
                <div class="form-field ">
                   <input type="text" placeholder="00:00 Hours" class="form-control ">
                </div>
            </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add_new_task_successfull_popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add_new_task_successfull_popup">
    <div class="modal-header">
        	<h2>Add New Task </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<!----add Task popup-->

<!---- Edit taaaaaask popup-->
<div class="modal " id="edit_task_popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Task </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Task Name</label>
                <div class="form-field ">
                    <input type="text" placeholder="" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Estimate Time</label>
                <div class="form-field ">
                   <input type="text" placeholder="00:00 Hours" class="form-control ">
                </div>
            </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit_task_successfull_popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit_task_successfull_popup">
    <div class="modal-header">
        	<h2>Edit Task </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<!---- Edit taaaaaask popup-->
    
<!----Delete task popup-->
<div class="modal" id="delete_task_popup">
    <div class="modal-header">
    	<h2>Delete Task </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this task?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete_task_successfull_popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete_task_successfull_popup">
    <div class="modal-header">
    	<h2>Delete Task </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Entry deleted  successfully</h3>
    </div>
</div>
<!----Delete task popup-->

    
<!---- Edit billable rate popup-->
<div class="modal " id="edit_bilable_rate_popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Billable Rate </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>User Name</label>
                <div class="form-field ">
                    <input type="text" placeholder="Subhasis Sarkar" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>User Email</label>
                <div class="form-field ">
                    <input type="text" placeholder="subahsis.sarkar@centerprise.co.uk" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Billable Rate <span style="display:block;font-size: 12px;">We'll apply this rate to all entries of this project.</span></label>
                <div class="form-field ">
                   <input type="text" placeholder="12" class="form-control ">
                </div>
            </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit_bilable_rate_successfull_popup" type="button" style="    padding: 7px 15px;">Submit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit_bilable_rate_successfull_popup">
    <div class="modal-header">
        	<h2>Edit Billable Rate </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<!----add Edit popup-->
       
    
<!----Delete member popup-->
<div class="modal" id="delete_member_popup">
    <div class="modal-header">
    	<h2>Delete Member </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete_member_successfull_popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete_member_successfull_popup">
    <div class="modal-header">
    	<h2>Delete Member </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Entry deleted  successfully</h3>
    </div>
</div>
<!----Delete member popup-->
    
    
    
    
    
    
    
    
        
    </div>
</section>






<?php include'include/footer.php';  ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    //--start  teammet pie chart  
     google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Billable Hours',     11],
          ['Non-Billable Hours',      2],
          ['Remaning Hours',  2],
        ]);

        var options = {
          title: 'Hours',
          pieHole: 0.3,
        };

        var chart = new google.visualization.PieChart(document.getElementById('hours_pie_chart'));
        chart.draw(data, options);
      }
     
      //--end  teammet pie chart 
      
</script>



<script>

$(".addd_member").click(function(e) {
	$('.ins_tagsss').toggleClass('open');
	e.stopPropagation();
});

$(".ins_tagsss .fa-close").click(function() {
	$(this).parent().parent('.ins_tagsss').removeClass('open');
});
$(".ins_tagsss").on('click', function(e) {
	e.stopPropagation();
});
$(document).click(function(){
	$(".ins_tagsss").removeClass('open');
});




$(".proj_fav").click(function() {
	$(this).toggleClass('active');
});

$(".add_fatch_client").click(function(e) {
	$(".add_fatch_client_drop").toggleClass('open');
	
	$(".fatch_clients_drop").removeClass('open');
	$(".fatch_project_drop").removeClass('open');
	e.stopPropagation();
});
$(".add_fatch_client_drop .option").click(function() {
	var text = $(this).html();
	$('.add_fatch_client').children('.value_fatch').html(text);
});

//---------
$(".fatch_clients").click(function(e) {
	$(".fatch_clients_drop").toggleClass('open');
	
	$(".add_fatch_client_drop").removeClass('open');
	$(".fatch_project_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_clients_drop .option").click(function() {
	var text = $(this).html();
	$('.fatch_clients').children('.value_fatch').html(text);
});
//--------
$(".fatch_project").click(function(e) {
	$(".fatch_project_drop").toggleClass('open');
	
	$(".add_fatch_client_drop").removeClass('open');
	$(".fatch_clients_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_project_drop .option").click(function() {
	var text = $(this).html();
	$('.fatch_project').children('.value_fatch').html(text);
});
//----------------------

$(document).click(function(){
	$(".Selet_drop").removeClass('open');
});








$('ul.tab_header li a').click(function(){
	var tab_id = $(this).attr('data-tab');
	$('ul.tab_header li a').removeClass('active');
	$('.tab_content').removeClass('active');
	$(this).addClass('active');
	$("#"+tab_id).addClass('active');
});

$('.linked_project').click(function(){
	var tab_id = $(this).attr('data-tab');
	$('.main_project_list').addClass('active');
	$("#"+tab_id).addClass('active');
});	
	
	
 
</script>

<script src="js/jquery.barfiller.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	//$('#bar6').barfiller({ barColor: '#f54337' });
	
});
</script>

<script src="js/jquery.lineProgressbar.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#bar6').LineProgressbar({
        percentage:70,
        radius: '6px 0 0 6px',
        height: '18px',
        fillBackgroundColor: '#f54337'
    });
	$('#bar77').LineProgressbar({
        percentage:50,
        radius: '6px 0 0 6px',
        height: '18px',
        fillBackgroundColor: 'rgb(152 16 57)'
    });
    $('#bar54').LineProgressbar({
        percentage:30,
        radius: '6px 0 0 6px',
        height: '18px',
        fillBackgroundColor: 'rgb(0 138 255)'
    });
});
</script>

<script type="text/javascript" src="js/timepicker.min.js"></script>
<script>
  $(function () {
    $('.estimate_timepicker').timepicker();
    $('.estimate_timepicker_2').timepicker();
    
  });
</script>

