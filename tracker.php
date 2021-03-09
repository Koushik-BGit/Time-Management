
<?php include'include/header.php';  ?>


<div style="height:65.8px"></div>

<section class="page-content">
    <div class="wrapper">
        <div class="page-titlediv">
            <div class="left-div">
                <div class="page-title">
                    <div class="icon-box">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h2>Time Tracker <span>( 6 Projects )</span> </h2>
                    </div>
                </div>
            </div>
            <div class="right-div">
                <div class="next-pre-control ml-3">
                    <div class="border-box show_cal custom_date">
                        <i class="fa fa-calendar-o " aria-hidden="true"></i>
                    </div>
                    <div>
                        <input type="text" placeholder="" class="cust-date-range " id="date_filtter_tracker" value="01/01/2020 - 15/01/2020">
                    </div>
                    
                    <a href="#" style="margin-left:10px;" rel="add-tracker-popup" class="popup-btn common_button "><i class="fa fa-anchor" aria-hidden="true"></i>&nbsp;&nbsp; Add Manual</a>
                </div> 
                
            </div>
        </div>
        
        <div class="timeTracker_option">
            <!--<div class="form-group  lft">
                <div class="form-field ">
                    <input type="text" placeholder="What are you working on?" class="form-control ">
                </div>
            </div>-->
            <div class="lft timeTracker_box">
                <div class="lft" style="position:relative; margin-right: 5px;">
                        <a class="aaTags" >Add Tags</a>
                        <div class="ins_tagsss">
                            <form>
                            <i class="fa fa-close"></i>
                            <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                            
                            <div>
                                <a class="rgt common_button" style="color: #fff;background: #42b3f5;padding: 4px 8px;margin-top: 5px;">Add</a>
                                <div class="clear"></div>
                            </div>
                            </form>
                            
                        </div>
                </div>
                <div class="form-group lft" style="min-width: 160px;">
                    <div class="form-field ">
                        <div class="form-control open_proj_list" style=" background: #fff; line-height: 33px;padding-right:30px;cursor: pointer;">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                            <span>Project:</span>&nbsp;&nbsp;<strong class="proj_val_fatch">Crate</strong>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                
                <div class="select_proj_wrapper">
                    <div class="proj_wrapper_header">
                        <h3 class="lft">Project</h3>
                        <i class="fa rgt fa-close"></i>
                        <div class="clear"></div>
                    </div>
                    <form style="padding: 10px 0;">
                        <div class="form-group">
                            <div class="form-field">
                                <input type="text" placeholder="Search heare..." class="form-control ">
                            </div>
                        </div>
                        <div class="clear"></div>
                    </form>
                    
                    
                    <div class="proj_scroll">
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head">
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap">
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <a href="#" download="" class=" common_button rgt">Download XLS </a>
            <div class="clear"></div>
            
        </div>
        
        
        <!--
        <div class="timeTracker_option">
            <div class="form-group  lft">
                <div class="form-field ">
                    <input type="text" placeholder="What are you working on?" class="form-control ">
                </div>
            </div>
            <div class="rgt timeTracker_box">
                <div class="lft" style="position:relative; margin-right: 5px;">
                        <a class="aaTags" >Add Tags</a>
                        <div class="ins_tagsss">
                            <form>
                            <i class="fa fa-close"></i>
                            <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                            
                            <div>
                                <a class="rgt common_button" style="color: #fff;background: #42b3f5;padding: 4px 8px;margin-top: 5px;">Add</a>
                                <div class="clear"></div>
                            </div>
                            </form>
                            
                        </div>
                </div>
                <div class="form-group lft" style="min-width: 160px;">
                    <div class="form-field ">
                        <div class="form-control open_proj_list" style=" background: #fff; line-height: 33px;padding-right:30px;cursor: pointer;">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                            <span>Project:</span>&nbsp;&nbsp;<strong class="proj_val_fatch">Crate</strong>
                        </div>
                    </div>
                </div>
                <div class="form-group lft"  style="width: 100px;">
                    <div class="form-field ">
                        <input type="text" value="00:00:00" class="form-control" style="text-align: center;">
                    </div>
                </div>
                
                <button class="common_button lft start_btn"type="button" style="    padding: 8px 20px;">Start</button>
                <div class="clear"></div>
                
                <div class="select_proj_wrapper">
                    <div class="proj_wrapper_header">
                        <h3 class="lft">Project</h3>
                        <i class="fa rgt fa-close"></i>
                        <div class="clear"></div>
                    </div>
                    <form style="padding: 10px 0;">
                        <div class="form-group">
                            <div class="form-field">
                                <input type="text" placeholder="Search heare..." class="form-control ">
                            </div>
                        </div>
                        <div class="clear"></div>
                    </form>
                    
                    
                    <div class="proj_scroll">
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head">
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap">
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="clear"></div>
        </div>
        -->
        
        <!--
        <div class="timesheet_option">
        
            <div class="lft timeTracker_box" style="position:relative; ">
                <div class="lft" style="position:relative; margin-right: 5px;">
                        <a class="aaTags" >Add Tags</a>
                        <div class="ins_tagsss">
                            <form>
                            <i class="fa fa-close"></i>
                            <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                            <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                            
                            <div>
                                <a class="rgt common_button" style="color: #fff;background: #42b3f5;padding: 4px 8px;margin-top: 5px;">Add</a>
                                <div class="clear"></div>
                            </div>
                            </form>
                            
                        </div>
                </div>
                <div class="form-group lft" style="min-width: 160px;">
                    <div class="form-field ">
                        <div class="form-control open_proj_list" style=" background: #fff; line-height: 33px;padding-right:30px;cursor: pointer;">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                            <span>Project:</span>&nbsp;&nbsp;<strong class="proj_val_fatch">Crate</strong>
                        </div>
                    </div>
                </div>
                
                <div class="clear"></div>
                
                <div class="select_proj_wrapper">
                    <div class="proj_wrapper_header">
                        <h3 class="lft">Project</h3>
                        <i class="fa rgt fa-close"></i>
                        <div class="clear"></div>
                    </div>
                    <form style="padding: 10px 0;">
                        <div class="form-group">
                            <div class="form-field">
                                <input type="text" placeholder="Search heare..." class="form-control ">
                            </div>
                        </div>
                        
                        <div class="clear"></div>
                    </form>
                    
                    
                    <div class="proj_scroll">
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head">
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap">
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="project_row" onclick="acordianFunction(this);">
                            <div class="project_row_head" >
                                <h6 class="lft">Subhasis Sarkar</h6>
                                <h6 class="rgt">5 Projects</h6>
                                <div class="clear"></div>
                            </div>
                            <div class="project_cont_wrap" >
                                <div class="proj_inner_row">
                                    <h4 class="lft">Crate</h4>
                                    <span class="rgt">4 Task</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="inner_task_list">
                                    <label class="kb-container">Html<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Layout<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">PSD<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Images<input type="checkbox"><span class="kb-checkmark"></span></label>
                                    <label class="kb-container">Banner<input type="checkbox"><span class="kb-checkmark"></span></label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <a href="#" download="" class=" common_button rgt">Download XlS </a>
            <div class="clear"></div>
        </div>
        -->
        
        <div class="tracker_table_list">
            <table class="tags_table">
                <thead>
                    <tr>
                        <!--<th></th>-->
                        <th>Title</th>
                        <th>Project Name</th>
                        <th>User</th>
                        <th>Tags</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Total Time</th>
                        <th style="text-align:left;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--<td><a class="acc_arrow " data-tab="child_row_1" ><i class="fa fa-caret-down" aria-hidden="true"></i></a></td>-->
                        <td>Time Tracker</td>
                        <td>Crate</td>
                        <td>Subhasis Sarkar</td>
                        <td ></td>
                        <td>15/01/2020</td>
                        <td>20:15:21</td>
                        <td>20:15:21</td>
                        <td><strong>14:38:41</strong></td>
                        <td><a class="acc_arrow " data-tab="child_row_1" ><i class="fa fa-caret-down" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr class="child_row" id="child_row_1">
                        <td class="line"></td>
                        <td>Crate</td>
                        <td>Subhasis Sarkar</td>
                        <td >#</td>
                        <td>15/01/2020</td>
                        <td>20:15:21</td>
                        <td>20:15:21</td>
                        <td><strong>14:38:41</strong></td>
                        <td>
                            <a href="javascript:void(0);" class="edit popup-btn" rel="edit-tracker-popup"><i class="fa fa-pencil"></i></a> <!--popup-btn-->
                            <a href="javascript:void(0);" class="delet popup-btn" rel="delete_tracker_popup"><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <!--<td><a class="acc_arrow " data-tab="child_row_2" ><i class="fa fa-caret-down" aria-hidden="true"></i></a></td>-->
                        <td>Time Tracker</td>
                        <td>Adam</td>
                        <td>Subhasis Sarkar</td>
                        <td ></td>
                        <td>15/01/2020</td>
                        <td>20:15:21</td>
                        <td>20:15:21</td>
                        <td><strong>14:38:41</strong></td>
                        <td><a class="acc_arrow " data-tab="child_row_2" ><i class="fa fa-caret-down" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr class="child_row" id="child_row_2">
                        <td class="line"></td>
                        <td>Adam</td>
                        <td>Subhasis Sarkar</td>
                        <td >#</td>
                        <td>15/01/2020</td>
                        <td>20:15:21</td>
                        <td>20:15:21</td>
                        <td><strong>14:38:41</strong></td>
                        <td>
                            <a href="javascript:void(0);" class="edit popup-btn" rel="edit-tracker-popup"><i class="fa fa-pencil"></i></a> <!--popup-btn-->
                            <a href="javascript:void(0);" class="delet popup-btn" rel="delete_tracker_popup"><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            
        </div>
        <div style="background:#fff;">
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
</section>


<div class="modal large-modal" id="add-tracker-popup" >
    <form>
        <div class="modal-header">
        	<h2>Add Tracker </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>What are you working on?</label>
                <div class="form-field tag_main what_work">
                    <input type="text" placeholder="" class="form-control ">
                    <span class="value_fatch"></span>
                    <div class="Selet_drop what_work_drop">
                        <div  class="option">Email</div>
                        <div  class="option">Checkbox</div>
                        <div  class="option">Phone</div>
                        <div  class="option">Other</div>
                    </div>
                </div>
            </div>
            <div class="form-group  ">
                <label>Tags</label>
                <div class="form-field">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <select id="select3" name="select3" multiple class="form-control ">
    					<option value="8" class="option_eight">Payment Gateway</option>
    					<option value="9" class="option_nine">Layout</option>
    					<option value="10" class="option_ten" >Images</option>
    					<option value="11" class="option_eleven" >Html</option>
    					<option value="12" class="option_twelve">Map</option>
    					<option value="13" class="option_thirteen">Convert</option>
    					<option value="14" class="option_fourteen">PHD</option>
    				</select>
				    <input value="" id="activate_selectator4" type="button">
                    
                    <style>
                        input#activate_selectator4 { display: none; }
                    </style>
                    
                </div>
            </div>
            <div class="form-group  ">
                <label>Projects</label>
                <div class="form-field ">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Crate</option>
                        <option>Cenreprise</option>
                        <option>Adam</option>
                        <option>Yoyotech</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Billable</label>
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>Date</label>
                        <div class="form-field ">
                            <input type="text" readonly   value="15/01/2020" class="form-control track_date ">
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="row">
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Start Time</label>
                        <div class="form-field ">
                            <input type="text"   placeholder="00:00:00" class="form-control strat_time">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>End Time </label>
                        <div class="form-field ">
                            <input type="text" placeholder="00:00:00" class="form-control end_time">
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="add-tracker-successfull-popup" type="button" style="    padding: 7px 15px;">Add</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="add-tracker-successfull-popup">
    <div class="modal-header">
    	<h2>Add Tracker</h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry added successfully</h3>
    </div>
</div>



<div class="modal large-modal" id="edit-tracker-popup" >
    <form>
        <div class="modal-header">
        	<h2>Edit Tracker </h2>
            <div class="close"><i class="fa fa-close"></i></div>
        </div>
        <div class="modal-body">
            <div class="form-group  ">
                <label>What are you working on?</label>
                <div class="form-field tag_main what_work">
                    <input type="text" placeholder="" class="form-control ">
                    <span class="value_fatch"></span>
                    <div class="Selet_drop what_work_drop">
                        <div  class="option">Email</div>
                        <div  class="option">Checkbox</div>
                        <div  class="option">Phone</div>
                        <div  class="option">Other</div>
                    </div>
                </div>
            </div>
            <div class="form-group  ">
                <label>Tags</label>
                <div class="form-field">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <select id="select10" name="select10" multiple class="form-control ">
    					<option value="8" class="option_eight">Payment Gateway</option>
    					<option value="9" class="option_nine">Layout</option>
    					<option value="10" class="option_ten" >Images</option>
    					<option value="11" class="option_eleven" >Html</option>
    					<option value="12" class="option_twelve">Map</option>
    					<option value="13" class="option_thirteen">Convert</option>
    					<option value="14" class="option_fourteen">PHD</option>
    				</select>
				    <input value="" id="activate_selectator10" type="button">
                    
                    <style>
                        input#activate_selectator10 { display: none; }
                    </style>
                    
                </div>
            </div>
            <div class="form-group  ">
                <label>Projects</label>
                <div class="form-field ">
                    <select class="form-control ">
                        <option>Select</option>
                        <option>Crate</option>
                        <option>Cenreprise</option>
                        <option>Adam</option>
                        <option>Yoyotech</option>
                    </select>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Billable</label>
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>Date</label>
                        <div class="form-field ">
                            <input type="text" readonly   value="15/01/2020" class="form-control track_date ">
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="row">
                <div class="col-md-5 lft">
                    <div class="form-group  ">
                        <label>Start Time</label>
                        <div class="form-field ">
                            <input type="text"   placeholder="00:00:00" class="form-control strat_time">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 rgt">
                    <div class="form-group  ">
                        <label>End Time </label>
                        <div class="form-field ">
                            <input type="text" placeholder="00:00:00" class="form-control end_time">
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
        </div>
       <div class="modal-footer">
            <button class="common_button rgt popup-btn" rel="edit-tracker-successfull-popup" type="button" style="    padding: 7px 15px;">Submit</button>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div class="modal" id="edit-tracker-successfull-popup">
    <div class="modal-header">
    	<h2>Edit Tracker</h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/checked-green.svg" width="40"></div>
    	<h3>Entry edited successfully</h3>
    </div>
</div>



<!----Delete project popup-->
<div class="modal" id="delete_tracker_popup">
    <div class="modal-header">
    	<h2>Delete Tracker </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
    	<h3>Are you sure to delete this entry?</h3>
    	<br/>
    	<div style="text-align:center">
        	<button class="common_button popup-btn" rel="delete_tracker_successfull_popup" type="button" style="padding: 7px 15px; margin-right:10px;">Yes</button>
        	<button class="common_button btn-cancel"  type="button" style="padding: 7px 15px;">No</button>
        </div>
    </div>
</div>
<div class="modal" id="delete_tracker_successfull_popup">
    <div class="modal-header">
    	<h2>Delete Tracker </h2>
        <div class="close"><i class="fa fa-close"></i></div>
    </div>
    <div class="modal-body">
        <div class="sucess"><img src="images/delete-succ-icon.png" width="40"></div>
    	<h3> Entry deleted  successfully</h3>
    </div>
</div>
<!----Delete project popup-->




<?php include'include/footer.php';  ?>

<script>
$('.open_proj_list').click(function(e){
	$('.select_proj_wrapper').slideToggle();
	$(".ins_tagsss").removeClass('open');
	e.stopPropagation();
}); 

$('.proj_wrapper_header .fa-close').click(function(){
	$('.select_proj_wrapper').slideUp();
}); 
$(document).click(function(){
	//$(".select_proj_wrapper").slideUp('slow');
});
$('.acc_arrow').click(function(){
	var tab_id = $(this).attr('data-tab');
	$(this).toggleClass('active');
	$("#"+tab_id).toggleClass('active');
});
    
    
 function acordianFunction(divObj){
     
        $('.project_row_head').removeClass('active');
	    $('.project_cont_wrap').slideUp("slow");
     if($(divObj).children('.project_cont_wrap').is(':visible')){
         //alert('visible');
	    $(divObj).children('.project_row_head').removeClass('active');
	    $(this).next('.project_cont_wrap').slideUp("slow");
	}
	else{
	    //alert('not visible');
	   $(divObj).children('.project_row_head').addClass('active');
	   $(divObj).children('.project_cont_wrap').slideDown("slow");
	}
	//e.stopPropagation();
 }    

//--------


$(".aaTags").on('click', function(e) {
    $(".ins_tagsss").removeClass('open');
	$(this).next(".ins_tagsss").toggleClass('open');
	$('.select_proj_wrapper').slideUp();
	e.stopPropagation();
});

$(".ins_tagsss .fa-close").click(function() {
	$(this).parent().parent(".ins_tagsss").removeClass('open');
});
$(".ins_tagsss").on('click', function(e) {
	e.stopPropagation();
});
$(document).click(function(){
	$(".ins_tagsss").removeClass('open');
});
//---------



$(".what_work").click(function(e) {
	$(".what_work_drop").toggleClass('open');
	e.stopPropagation();
});
$(".what_work_drop .option").click(function() {
	var text = $(this).html();
	$('.what_work').children('.value_fatch').html(text);
});

$(document).click(function(){
	$(".what_work_drop").removeClass('open');
});
//--------


    $( ".track_date" ).datepicker({
        dateFormat: 'dd/mm/yy'
    });
</script>

<script type="text/javascript" src="js/jquery.timepicker.min.js"></script> 
<script>
    $('.strat_time').timepicker({
        timeFormat: 'h:mm p',
        interval: 60,
        //minTime: '00:00',
        //maxTime: '23.45pm',
        //defaultTime: '11',
        //startTime: '10:00',
        dynamic: true,
        dropdown: true,
        scrollbar: true
    });
    $('.end_time').timepicker({
        timeFormat: 'h:mm p',
        interval: 60,
        //minTime: '00:00',
        //maxTime: '24:00pm',
        //defaultTime: '11',
        //startTime: '10:00',
        dynamic: true,
        dropdown: true,
        scrollbar: true
    });
</script>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#date_filtter_tracker').daterangepicker({
        startDate: start,
        endDate: end,
        opens: 'left',
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
    $(document).on('click', '.show_cal', function () {
        $('#date_filtter_tracker').focus();
    });

});
</script>


<script src="js/fm.selectator.jquery.js?cb=29"></script>

<script type="text/javascript">
	$(function () {
		var $activate_selectator = $('#activate_selectator4');
		$activate_selectator.click(function () {
			var $select = $('#select3');
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
	var $activate_selectator = $('#activate_selectator10');
	$activate_selectator.click(function () {
		var $select = $('#select10');
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


