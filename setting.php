<?php include'include/header.php';  ?>


<div style="height:65.8px"></div>

<section class="page-content">
    <div class="wrapper">
        <div class="page-titlediv">
            <div class="left-div">
                <div class="page-title">
                    <div class="icon-box">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h2>Setting</h2>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="setting_tab_area">
            <ul class="tab_header">
                <li><a  data-tab="setting_tab_8" class="active common_button">Profile</a></li>
                <li><a  data-tab="setting_tab_1" class="common_button">Change Password</a></li>
                <li><a data-tab="setting_tab_2" class=" common_button">Tags</a></li>
                <li><a data-tab="setting_tab_3" class=" common_button">Business Unit</a></li>
                <li><a data-tab="setting_tab_4" class=" common_button">Sub Business Unit</a></li>
                <li><a data-tab="setting_tab_6" class=" common_button">Interbilling Mapping </a></li>
                <li><a data-tab="setting_tab_7" class=" common_button">Interbilling Rate </a></li>
                <li><a data-tab="setting_tab_5" class=" common_button">Administrator</a></li>
                <li><a data-tab="setting_tab_9" class=" common_button">Profit centre</a></li>
            </ul>
            <div class="setting_main_content">
                <div id="setting_tab_8" class="tab_content active">
                    <h2>Profile</h2>
                    <br/><br/>
                    <form>
                        <div class="row">
                            <div class="ch_col_3 lft prof_img_upload">
                                <img src="images/logo.png"  class="lft" />
                                <div class="upload-image lft">
                                    <input id="f02" type="file" multiple="" placeholder="No File chosen">
                                    <label class="upload-btn common_button" for="f02">Choose file</label>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="ch_col_3 lft">
                                <div class="form-group  ">
                                    <label>User Name</label>
                                    <div class="form-field">
                                        <input type="text"  placeholder="Enter User Name" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="ch_col_3 lft">
                                <div class="form-group  ">
                                    <label>Email  </label>
                                    <div class="form-field">
                                        <input type="email"  placeholder="Enter Email " class="form-control ">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="clear"></div>
                        </div>
                        <br/><br/>
                        <div>
                            <button class="common_button popup-btn rgt" type="button" rel="change-profile-successfull-popup">Save Change</button>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
                <div id="setting_tab_1" class="tab_content">
                    <h2>Change Password</h2>
                    <br/><br/>
                    <form>
                        <div class="row">
                            <div class="ch_col_3 lft">
                                <div class="form-group  ">
                                    <label>Current Password</label>
                                    <div class="form-field pass-field">
                                        <input type="password" id="current_password" placeholder="Enter Current Password" class="form-control ">
                                        <a class="dl" href="#" onclick="currentPasswordFunction(this);"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ch_col_3 lft">
                                <div class="form-group  ">
                                    <label>New Password</label>
                                    <div class="form-field pass-field">
                                        <input type="password" id="new_password" placeholder="Enter New Password" class="form-control ">
                                        <a class="dl" href="#" onclick="newPasswordFunction(this);"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ch_col_3 lft">
                                <div class="form-group  ">
                                    <label>Confirm  Password</label>
                                    <div class="form-field pass-field">
                                        <input type="password" id="confirm_password" placeholder="Enter Confirm  Password" class="form-control ">
                                        <a class="dl" href="#" onclick="confirmPasswordFunction(this);"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="clear"></div>
                        </div>
                        <br/><br/>
                        <div>
                            <button class="common_button popup-btn rgt" type="button" rel="change-password-successfull-popup">Save Change</button>
                            <div class="clear"></div>
                        </div>
                    </form>
                </div>
                <div id="setting_tab_2" class="tab_content ">
                    <h2>Tags</h2>
                    <form class="add_tags">
                        <div class="form-group lft">
                            <div class="form-field ">
                                <input type="text"  placeholder="Enter New Tags" class="form-control ">
                            </div>
                        </div>
                        <button class="common_button popup-btn rgt" type="button" rel="tags-add-successfull-popup">Add</button>
                        <div class="clear"></div>
                    </form>
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Tags Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Layout</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-tag-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-tag-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Html</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-tag-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-tag-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Images</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-tag-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-tag-popup"><i class="fa fa-close"></i></a>
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
                    <h2>Business Unit</h2>
                    <form class="add_tags">
                        <!--<div class="form-group lft">
                            <div class="form-field ">
                                <input type="text" value="Enter Business Unit " class="form-control ">
                            </div>
                        </div>-->
                        <button class="common_button popup-btn rgt" type="button" rel="add-business-unit-popup">Add</button>
                        <div class="clear"></div>
                    </form>
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Business Unit</th>
                                <th>Sub Business Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Business Unit 1</td>
                                <td>Sub Business Unit 1</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-business-unit-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-business-unit-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Business Unit 2</td>
                                <td>Sub Business Unit 2</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-business-unit-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-business-unit-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Business Unit 3</td>
                                <td>Sub Business Unit 3</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-business-unit-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-business-unit-popup"><i class="fa fa-close"></i></a>
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
                <div id="setting_tab_4" class="tab_content ">
                    <h2>Sub Business Unit</h2>
                    <form class="add_tags">
                        <!--<div class="form-group lft">
                            <div class="form-field ">
                                <input type="text"  placeholder="Enter New Sub Business Unit" class="form-control ">
                            </div>
                        </div>-->
                        <button class="common_button popup-btn rgt" type="button" rel="add-sub-business-unit-popup">Add</button>
                        <div class="clear"></div>
                    </form>
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Sub Business Unit</th>
                                <!--<th>Business Unit</th>-->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sub Business Unit 1</td>
                                <!--<td>Business Unit 1</td>-->
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-sub-business-unit-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-sub-business-unit-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sub Business Unit 2</td>
                                <!--<td>Business Unit 2</td>-->
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-sub-business-unit-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-sub-business-unit-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sub Business Unit 3</td>
                                <!--<td>Business Unit 3</td>-->
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-sub-business-unit-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-sub-business-unit-popup"><i class="fa fa-close"></i></a>
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
                <div id="setting_tab_5" class="tab_content ">
                    <h2>Administrator</h2>
                    <form class="add_tags">
                        <button class="common_button popup-btn rgt" type="button" rel="add-user-popup">Add</button>
                        <div class="clear"></div>
                    </form>
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Business Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Subhasis Sarkar</td>
                                <td>subhasissarkar@centerprise.co.uk</td>
                                <td>Admin</td>
                                <td>Business Unit 1</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-user-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-user-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jhon Deo</td>
                                <td>jhondeo@centerprise.co.uk</td>
                                <td>Admin</td>
                                <td>Business Unit 2</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-user-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-user-popup"><i class="fa fa-close"></i></a>
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
                <div id="setting_tab_6" class="tab_content ">
                    <h2>Interbilling Mapping</h2>
                    <form class="add_tags">
                        <!--<div class="form-group lft">
                            <div class="form-field ">
                                <input type="text"  placeholder="Enter New Sub Business Unit" class="form-control ">
                            </div>
                        </div>-->
                        <button class="common_button popup-btn rgt" type="button" rel="add-interbilling-mapping-popup">Add</button>
                        <div class="clear"></div>
                    </form>
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Profit Centre</th>
                                <th>Type</th>
                                <th>Chargeable</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CIPO</td>
                                <td>VAR3</td>
                                <td>Service Charge</td>
                                <td>Yes</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-interbilling-mapping-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-interbilling-mapping-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Centreprise</td>
                                <td>VAR3</td>
                                <td>Overhaed </td>
                                <td>Yes</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-interbilling-mapping-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-interbilling-mapping-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Adam</td>
                                <td>VAR3</td>
                                <td>Service Charge</td>
                                <td>Yes</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-interbilling-mapping-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-interbilling-mapping-popup"><i class="fa fa-close"></i></a>
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
                <div id="setting_tab_7" class="tab_content ">
                    <h2>Interbilling Rate</h2>
                    <form class="add_tags">
                        <!--<div class="form-group lft">
                            <div class="form-field ">
                                <input type="text"  placeholder="Enter New Sub Business Unit" class="form-control ">
                            </div>
                        </div>-->
                        <button class="common_button popup-btn rgt" type="button" rel="add-interbilling-rate-popup">Add</button>
                        <div class="clear"></div>
                    </form>
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Responsible Person</th>
                                <th>Business Unit</th>
                                <th>Daily Rate</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Subhasis Sarkar</td>
                                <td>Business Unit 1</td>
                                <td>£115.12</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-interbilling-rate-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-interbilling-rate-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Indian Team</td>
                                <td>Business Unit 2</td>
                                <td>£115.12</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-interbilling-rate-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-interbilling-rate-popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Subhasis Sarkar</td>
                                <td>Business Unit 3</td>
                                <td>£115.12</td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit-interbilling-rate-popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete-interbilling-rate-popup"><i class="fa fa-close"></i></a>
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
                <div id="setting_tab_9" class="tab_content ">
                    <h2>Profit centre</h2>
                    <form class="add_tags">
                        <button class="common_button popup-btn rgt" type="button" rel="add_profit_centre_popup">Add</button>
                        <div class="clear"></div>
                    </form>
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Profit centre</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Subhasis Sarkar</td>
                                <td></td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit_profit_centre_popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete_profit_centre_popup"><i class="fa fa-close"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Jhon Deo</td>
                                <td></td>
                                <td>
                                    <a href="javascript:void(0);" class="edit popup-btn" rel="edit_profit_centre_popup"><i class="fa fa-pencil"></i></a>
                                    <a href="javascript:void(0);" class="delet popup-btn" rel="delete_profit_centre_popup"><i class="fa fa-close"></i></a>
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

<div class="modal" id="tags-add-successfull-popup">
    <div class="modal-header">
    	<h2>Add Tag  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<div class="modal" id="edit-tag-popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Tag  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <div class="form-field ">
                    <input type="text" placeholder="Html" class="form-control ">
                </div>
            </div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit-tag-successfull-popup" type="button" style="    padding: 7px 15px;">Edit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit-tag-successfull-popup">
    <div class="modal-header">
    	<h2>Edit Tag  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<div class="modal" id="delete-tag-popup">
    <div class="modal-header">
    	<h2>Delete Tag </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete-tag-successfull-popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete-tag-successfull-popup">
    <div class="modal-header">
    	<h2>Delete Tag </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3>Entry deleted  successfully</h3>
    </div>
</div>
<!-------->

<div class="modal" id="add-interbilling-mapping-popup" >
    <form>
        <div class="modal-header">
        	<h2>Add Interbilling Mapping  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Project Name</label>
                <div class="form-field">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>CIPO</option>
                        <option>Adam</option>
                        <option>Yoyotech</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Profit Centre</label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>VAR3</option>
                        <option>FINA</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Type </label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>Service Charge</option>
                        <option>Overhead</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Chargeable</label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add-interbilling-mapping-successfull-popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add-interbilling-mapping-successfull-popup">
    <div class="modal-header">
        	<h2>Add Interbilling Mapping  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<div class="modal" id="edit-interbilling-mapping-popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Interbilling Mapping  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Project Name</label>
                <div class="form-field">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>CIPO</option>
                        <option>Adam</option>
                        <option>Yoyotech</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Profit Centre</label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>VAR3</option>
                        <option>FINA</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Type </label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>Service Charge</option>
                        <option>Overhead</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Chargeable</label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit-interbilling-mapping-successfull-popup" type="button" style="    padding: 7px 15px;">Submit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit-interbilling-mapping-successfull-popup">
    <div class="modal-header">
        	<h2>Edit Interbilling Mapping  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<div class="modal" id="delete-interbilling-mapping-popup">
    <div class="modal-header">
    	<h2>Delete Interbilling Mapping </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete-interbilling-mapping-successfull-popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete-interbilling-mapping-successfull-popup">
    <div class="modal-header">
    	<h2>Delete Interbilling Mapping </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3>Entry deleted  successfully</h3>
    </div>
</div>
<!------------>
<div class="modal" id="add-interbilling-rate-popup" >
    <form>
        <div class="modal-header">
        	<h2>Add Interbilling Rate  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name</label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option></option>
                        <option></option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <!--<input type="text" placeholder="" class="form-control " />-->
                </div>
            </div>
            <div class="form-group  ">
                <label>Business Unit </label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Daily Rate </label>
                <input type="text" placeholder="£00.00" class="form-control " />
                </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add-interbilling-rate-successfull-popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add-interbilling-rate-successfull-popup">
    <div class="modal-header">
        	<h2>Add Interbilling Rate  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<div class="modal" id="edit-interbilling-rate-popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Interbilling Rate  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Responsible Person</label>
                <div class="form-field">
                    <input type="text" placeholder="" class="form-control " />
                </div>
            </div>
            <div class="form-group  ">
                <label>Business Unit </label>
                <div class="form-field">
                    <select class="form-control">
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Daily Rate </label>
                <input type="text" placeholder="£00.00" class="form-control " />
                </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit-interbilling-rate-successfull-popup" type="button" style="    padding: 7px 15px;">Submit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit-interbilling-rate-successfull-popup">
    <div class="modal-header">
        	<h2>Edit Interbilling Rate  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<div class="modal" id="delete-interbilling-rate-popup">
    <div class="modal-header">
    	<h2>Delete Interbilling Rate </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete-interbilling-rate-successfull-popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete-interbilling-rate-successfull-popup">
    <div class="modal-header">
    	<h2>Delete Interbilling Rate </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3>Entry deleted  successfully</h3>
    </div>
</div>
<!---------------->
<div class="modal" id="add-business-unit-popup" >
    <form>
        <div class="modal-header">
        	<h2>Add Business Unit  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Business Unit</label>
                <div class="form-field">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                        <option>Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Sub  Business Unit</label>
                <div class="form-field">
                    <select multiple class="form-control multi-select">
                        <option>All</option>
                        <option>Sub Business Unit 1</option>
                        <option>Sub Business Unit 2</option>
                        <option>Sub Business Unit 3</option>
                    </select>
                    <!--<input type="text" value="Business Unit " class="form-control ">-->
                </div>
            </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add-business-unit-successfull-popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add-business-unit-successfull-popup">
    <div class="modal-header">
    	<h2>Add Business Unit  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<div class="modal" id="edit-business-unit-popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Business Unit  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Business Unit</label>
                <div class="form-field">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                        <option>Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            <div class="form-group  ">
                <label>Sub  Business Unit</label>
                <div class="form-field">
                    <select multiple class="form-control multi-select">
                        <option>All</option>
                        <option>Sub Business Unit 1</option>
                        <option>Sub Business Unit 2</option>
                        <option>Sub Business Unit 3</option>
                    </select>
                    <!--<input type="text" value="Business Unit " class="form-control ">-->
                </div>
            </div>
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit-business-unit-successfull-popup" type="button" style="    padding: 7px 15px;">Edit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit-business-unit-successfull-popup">
    <div class="modal-header">
    	<h2>Edit Business Unit  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<div class="modal" id="delete-business-unit-popup">
    <div class="modal-header">
    	<h2>Delete Business Unit </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete-business-unit-successfull-popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete-business-unit-successfull-popup">
    <div class="modal-header">
    	<h2>Delete Business Unit </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3>Entry deleted  successfully</h3>
    </div>
</div>
<!-------->
<!------------>
<div class="modal" id="add-sub-business-unit-popup" >
    <form>
        <div class="modal-header">
        	<h2>Add Sub Business Unit  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Sub  Business Unit</label>
                <div class="form-field">
                    <!--<select  class="form-control">
                        <option>Select</option>
                        <option>Sub Business Unit 1</option>
                        <option>Sub Business Unit 2</option>
                        <option>Sub Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>-->
                    <input type="text"  class="form-control ">
                </div>
            </div>
            <!--<div class="form-group  ">
                <label>Business Unit</label>
                <div class="form-field">
                    <select class="form-control multi-select" multiple>
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                        <option>Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>-->
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add-sub-business-unit-successfull-popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add-sub-business-unit-successfull-popup">
    <div class="modal-header">
    	<h2>Add Sub Business Unit  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<div class="modal" id="edit-sub-business-unit-popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Sub Business Unit  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Sub  Business Unit</label>
                <div class="form-field">
                    <select  class="form-control">
                        <option>Select</option>
                        <option>Sub Business Unit 1</option>
                        <option>Sub Business Unit 2</option>
                        <option>Sub Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <!--<input type="text" value="Business Unit " class="form-control ">-->
                </div>
            </div>
            <!--<div class="form-group  ">
                <label>Business Unit</label>
                <div class="form-field">
                    <select class="form-control multi-select" multiple>
                        <option>Select</option>
                        <option>Business Unit 1</option>
                        <option>Business Unit 2</option>
                        <option>Business Unit 3</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>-->
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit-sub-business-unit-successfull-popup" type="button" style="    padding: 7px 15px;">Edit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit-sub-business-unit-successfull-popup">
    <div class="modal-header">
    	<h2>Edit Sub Business Unit  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<div class="modal" id="delete-sub-business-unit-popup">
    <div class="modal-header">
    	<h2>Delete Sub Business Unit </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this sub entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete-sub-business-unit-successfull-popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete-sub-business-unit-successfull-popup">
    <div class="modal-header">
    	<h2>Delete Sub Business Unit </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3>Entry deleted  successfully</h3>
    </div>
</div>
<!-------->

<div class="modal" id="change-password-successfull-popup">
    <div class="modal-header">
    	<h2>Change Password </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited  successfully</h3>
    </div>
</div>
<!--------->
<div class="modal" id="change-profile-successfull-popup">
    <div class="modal-header">
    	<h2>Change Profile </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3> Entry edited  successfully</h3>
    </div>
</div>
<!--------->
<!------------->
<div class="modal" id="add-user-popup" >
    <form>
        <div class="modal-header">
        	<h2>Add User  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="lft user_left">
                <div class="user_img_box">
                    <img src="images/logo.png" alt="" />
                </div>
                
            </div>
            <div class="rgt user_right modal_body_scroll">
                <div class="form-group  ">
                    <label>Name <ins>*</ins></label>
                    <div class="form-field ">
                        <input type="text" placeholder="Name" class="form-control ">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>User Name <ins>*</ins></label>
                    <div class="form-field ">
                        <input type="text" placeholder="User Name" class="form-control ">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>Email <ins>*</ins> </label>
                    <div class="form-field ">
                        <input type="email" placeholder="email" class="form-control ">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>Position <ins>*</ins> </label>
                    <div class="form-field ">
                        <input type="text" placeholder="Position" class="form-control ">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>Password <ins>*</ins> </label>
                    <div class="form-field pass-field">
                        <input type="password" id="add_password" placeholder=""  class="form-control ">
                        <a class="dl" href="#" onclick="addddPasswordFunction(this);"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="button" class="common_button">Password Generator </button>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="form-field">
                        <div class="upload-image">
                            <input id="f02" type="file" multiple="" placeholder="No File chosen">
                            <label class="upload-btn common_button" for="f02">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field check_ffld">
                        <label class="kb-container">Inform User<input type="checkbox"><span class="kb-checkmark"></span></label>
                        <label class="kb-container">Super Admin<input type="checkbox"><span class="kb-checkmark"></span></label>
                    </div>
                </div>
               
                <div class="form-group  ">
                    <label>Business Unit <ins>(*Multiple Select )</ins></label>
                    <div class="form-field">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <select id="select51" name="select51" multiple class="form-control ">
                            <option value="8" class="option_eight">All</option>
        					<option value="8" class="option_eight">Business Unit 1</option>
        					<option value="9" class="option_nine">Business Unit 2</option>
        					<option value="10" class="option_ten" >Business Unit 3</option>
        					<option value="11" class="option_eleven" >Business Unit 4</option>
        				</select>
    				    <input value="" id="activate_selectator51" type="button">
                        
                        <style>
                            input#activate_selectator51 { display: none; }
                        </style>
                        
                    </div>
                </div>   
                <div class="form-group  ">
                    <label>Sub Business Unit  <ins>(*Multiple Select )</ins></label>
                    <div class="form-field">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <select id="select52" name="select52" multiple class="form-control ">
                            <option value="8" class="option_eight">All</option>
        					<option value="8" class="option_eight">Sub Business Unit 1</option>
        					<option value="9" class="option_nine">Sub Business Unit 2</option>
        					<option value="10" class="option_ten">Sub Business Unit 3</option>
        					<option value="11" class="option_eleven">Sub Business Unit 4</option>
        				</select>
    				    <input value="" id="activate_selectator52" type="button">
                        
                        <style>
                            input#activate_selectator52 { display: none; }
                        </style>
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label>User Type  <ins>(*Multiple Select )</label>
                    <div class="form-field">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <select id="select54" name="select54" multiple class="form-control ">
        					<option value="8" class="option_eight">All</option>
        					<option value="9" class="option_nine">Frontend</option>
        					<option value="10" class="option_ten" >Backend</option>
        				</select>
    				    <input value="" id="activate_selectator54" type="button">
                        
                        <style>
                            input#activate_selectator54 { display: none; }
                        </style>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <div class="form-field">
                        <select  class="form-control ">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add-user-successfull-popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add-user-successfull-popup">
    <div class="modal-header">
    	<h2>Add User  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<div class="modal" id="edit-user-popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit User  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="lft user_left">
                <div class="user_img_box">
                    <img src="images/logo.png" alt="" />
                </div>
                <a style="margin: 10px auto 0 auto;width: 61px;display: block;" class="common_button">Delete </a>
            </div>
            <div class="rgt user_right modal_body_scroll">
                <div class="form-group  ">
                    <label>Name <ins>*</ins></label>
                    <div class="form-field ">
                        <input type="text" placeholder="Name" class="form-control ">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>User Name <ins>*</ins></label>
                    <div class="form-field ">
                        <input type="text" readonly placeholder="User Name" class="form-control gray_bg ">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>Email <ins>*</ins> </label>
                    <div class="form-field ">
                        <input type="email" readonly placeholder="email" class="form-control gray_bg">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>Position <ins>*</ins> </label>
                    <div class="form-field ">
                        <input type="text" placeholder="Position" class="form-control ">
                    </div>
                </div>
                <div class="form-group  ">
                    <label>Password <ins>*</ins> </label>
                    <div class="form-field pass-field">
                        <input type="password" readonly id="add_password" placeholder=""  class="form-control gray_bg">
                        <a class="dl" href="#" onclick="addddPasswordFunction(this);"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                <div class="form-group ">
                    <button type="button" class="common_button">Password Generator </button>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="form-field">
                        <div class="upload-image">
                            <input id="f03" type="file" multiple="" placeholder="No File chosen">
                            <label class="upload-btn common_button" for="f03">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-field check_ffld">
                        <label class="kb-container">Inform User<input type="checkbox"><span class="kb-checkmark"></span></label>
                        <label class="kb-container">Super Admin<input type="checkbox"><span class="kb-checkmark"></span></label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Business Unit  <ins>(* Multiple Select )</ins></label>
                    <div class="form-field">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <select id="select55" name="select55" multiple class="form-control ">
                            <option value="8" class="option_eight">All</option>
        					<option value="8" class="option_eight">Business Unit 1</option>
        					<option value="9" class="option_nine">Business Unit 2</option>
        					<option value="10" class="option_ten" >Business Unit 3</option>
        					<option value="11" class="option_eleven" >Business Unit 4</option>
        				</select>
    				    <input value="" id="activate_selectator55" type="button">
                        
                        <style>
                            input#activate_selectator55 { display: none; }
                        </style>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label>Sub Business Unit  <ins>(* Multiple Select )</ins></label>
                    <div class="form-field">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <select id="select56" name="select56" multiple class="form-control ">
                            <option value="8" class="option_eight">All</option>
        					<option value="8" class="option_eight">Sub Business Unit 1</option>
        					<option value="9" class="option_nine">Sub Business Unit 2</option>
        					<option value="10" class="option_ten" >Sub Business Unit 3</option>
        					<option value="11" class="option_eleven" >Sub Business Unit 4</option>
        				</select>
    				    <input value="" id="activate_selectator56" type="button">
                        
                        <style>
                            input#activate_selectator56 { display: none; }
                        </style>
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label>User Type  <ins>(* Multiple Select )</ins></label>
                    <div class="form-field">
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <select id="select58" name="select58" multiple class="form-control ">
        					<option value="8" class="option_eight">All</option>
        					<option value="9" class="option_nine">Frontend</option>
        					<option value="10" class="option_ten" >Backend</option>
        				</select>
    				    <input value="" id="activate_selectator58" type="button">
                        
                        <style>
                            input#activate_selectator58 { display: none; }
                        </style>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <div class="form-field">
                        <select  class="form-control ">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit-user-successfull-popup" type="button" style="    padding: 7px 15px;">Updated</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit-user-successfull-popup">
    <div class="modal-header">
    	<h2>Edit User  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<div class="modal" id="delete-user-popup">
    <div class="modal-header">
    	<h2>Delete User </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete-user-successfull-popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete-user-successfull-popup">
    <div class="modal-header">
    	<h2>Delete User</h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Entry deleted  successfully</h3>
    </div>
</div>
<!------------->
<div class="modal" id="add_profit_centre_popup" >
    <form>
        <div class="modal-header">
        	<h2>Add Profit Centre  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name </label>
                <div class="form-field ">
                    <input type="text" placeholder="Name" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Profit Centre</label>
                <div class="form-field ">
                    <input type="text"  placeholder="" class="form-control ">
                </div>
            </div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add_profit_centre_successfull_popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add_profit_centre_successfull_popup">
    <div class="modal-header">
    	<h2>Add Profit Centre  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>
<div class="modal" id="edit_profit_centre_popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Profit Centre  </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>Name </label>
                <div class="form-field ">
                    <input type="text" placeholder="Name" class="form-control ">
                </div>
            </div>
            <div class="form-group  ">
                <label>Profit Centre</label>   
                <div class="form-field ">
                    <input type="text"  placeholder="" class="form-control ">
                </div>
            </div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit_profit_centre_successfull_popup" type="button" style="    padding: 7px 15px;">Updated</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit_profit_centre_successfull_popup">
    <div class="modal-header">
    	<h2>Edit Profit Centre  </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>
<div class="modal" id="delete_profit_centre_popup">
    <div class="modal-header">
    	<h2>Delete Profit Centre </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this  entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete_profit_centre_successfull_popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>            
        </div>
    </div>
</div>
<div class="modal" id="delete_profit_centre_successfull_popup">     
    <div class="modal-header">
    	<h2>Delete Profit Centre</h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Entry deleted  successfully</h3>
    </div>
</div>
<!------------->
<?php include'include/footer.php';  ?>

<script>
$(".modal_body_scroll").mCustomScrollbar({
	axis:"y",
	//scrollbarPosition:"outside",
});

$('ul.tab_header li a').click(function(){
	var tab_id = $(this).attr('data-tab');
	$('ul.tab_header li a').removeClass('active');
	$('.tab_content').removeClass('active');
	$(this).addClass('active');
	$("#"+tab_id).addClass('active');
});
   
function addddPasswordFunction(obj) {
	var x =  document.getElementById("add_password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	$(obj).toggleClass("arrow");
}   
   
    
function currentPasswordFunction(obj) {
	var x =  document.getElementById("current_password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	$(obj).toggleClass("arrow");
}
function newPasswordFunction(obj) {
	var x =  document.getElementById("new_password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	$(obj).toggleClass("arrow");
}
function confirmPasswordFunction(obj) {
	var x =  document.getElementById("confirm_password");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
	$(obj).toggleClass("arrow");
}    
    
   
</script>

   
<script src="js/fm.selectator.jquery.js?cb=29"></script>    
<script type="text/javascript">
$(function () {
	var $activate_selectator = $('#activate_selectator51');
	$activate_selectator.click(function () {
		var $select = $('#select51');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
$(function () {
	var $activate_selectator = $('#activate_selectator52');
	$activate_selectator.click(function () {
		var $select = $('#select52');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
$(function () {
	var $activate_selectator = $('#activate_selectator53');
	$activate_selectator.click(function () {
		var $select = $('#select53');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
$(function () {
	var $activate_selectator = $('#activate_selectator54');
	$activate_selectator.click(function () {
		var $select = $('#select54');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
$(function () {
	var $activate_selectator = $('#activate_selectator55');
	$activate_selectator.click(function () {
		var $select = $('#select55');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
$(function () {
	var $activate_selectator = $('#activate_selectator56');
	$activate_selectator.click(function () {
		var $select = $('#select56');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
$(function () {
	var $activate_selectator = $('#activate_selectator57');
	$activate_selectator.click(function () {
		var $select = $('#select57');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
$(function () {
	var $activate_selectator = $('#activate_selectator58');
	$activate_selectator.click(function () {
		var $select = $('#select58');
		if ($select.data('selectator') === undefined) {
			$select.selectator({
				showAllOptionsOnFocus: true,
				useDimmer: true,
				searchFields: 'value text subtitle right'
			});
			//$activate_selectator.val('destroy');
		} else {
			//$select.selectator('destroy');
			$activate_selectator.val('activate');
		}
	});
	$activate_selectator.trigger('click');
});
</script>    
    
    







