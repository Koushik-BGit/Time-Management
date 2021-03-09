<?php include'include/header.php';  ?>


<div style="height:65.8px"></div>

<section class="page-content">
    <div class="wrapper">
        <div class="page-titlediv">
            <div class="left-div">
                <div class="page-title">
                    <div class="icon-box">
                        <i class="fa fa-file-text" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h2>Reports</h2>
                    </div>
                </div>
            </div>
            
        </div> 
              
        <div class="setting_tab_area">
            <ul class="tab_header">
                <li><a  data-tab="setting_tab_1" class="active common_button">Reports</a></li>
                <li><a data-tab="setting_tab_2" class=" common_button">Summary</a></li>
                <li><a data-tab="setting_tab_3" class=" common_button">SAP Posting</a></li>
            </ul>
            <div class="setting_main_content">
                <div id="setting_tab_1" class="tab_content active">
                    
                    <div class="form-group  lft">
                        <div class="form-field pass-field">
                            <input type="text" id="showReport" readonly placeholder="01-01-2021 - 11-01-2021" class="form-control ">
                        </div>
                    </div>
                    <form>
                        <div class="rgt flter_box reporfilter">
                            <div class="form-group tag_main lft">
                                <div class="form-field">
                                    <select class="form-control ">
                                        <option>Business Unit</option>
                                        <option>Business Unit 1</option>
                                        <option>Business Unit 2</option>
                                        <option>Business Unit 3</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group tag_main lft">
                                <div class="form-field">
                                    <select class="form-control ">
                                        <option>Sub Business Unit </option>
                                        <option>Sub Business Unit 1</option>
                                        <option>Sub Business Unit 2</option>
                                        <option>Sub Business Unit 3</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group  lft">
                                <div class="form-field tag_main fatch_project_duit">
                                    
                                    <input type="text" readonly="" placeholder="" class="form-control ">
                                    <span class="value_fatch">Project</span>
                                    <div class="Selet_drop fatch_project_duit_drop">
                                        <div class="option">Crate</div>
                                        <div class="option">Centerprise</div>
                                        <div class="option">Yoyotech</div>
                                        <div class="option">Adam</div>
                                    </div>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group lft">
                                <div class="form-field tag_main fatch_bill_duit">
                                    <input type="text" readonly="" placeholder="" class="form-control ">
                                    <span class="value_fatch" >Billing</span>
                                    <div class="Selet_drop fatch_bill_duit_drop">
                                        <div class="option">Add Billing </div>
                                        <div class="option">Billable</div>
                                        <div class="option">Non-Billable</div>
                                    </div>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a href="#" class="lft common_button">Apply Filter</a>
                            
                            <div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                    
                    <div class="time_estimate">
                        <p class="lft">Total: <strong>00:00:00</strong></p>
                        <p class="lft">Bilable: <strong>00:00:00</strong></p>
                        <p class="lft"><strong>£115.12</strong></p>
                        <div class="clear"></div>
                    </div>
                    <div id="curve_chart" style="width:100%; height:350px;"></div>
                    
                    <div class="report_tab">
                        <table class="tags_table lft">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Duration</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Crate</td>
                                    <td>80:00 Hours</td>
                                    <td>£115.12</td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="tl_time lft">
                            <p>0 Hours</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
                <div id="setting_tab_2" class="tab_content ">
                    <div class="form-group  lft">
                        <div class="form-field pass-field">
                            <input type="text" id="showSumm" readonly placeholder="01-01-2021 - 11-01-2021" class="form-control ">
                        </div>
                    </div>
                    <form>
                        <div class="rgt flter_box">
                            <!--<div class="form-group tag_main lft">
                                <div class="form-field">
                                    <select class="form-control ">
                                        <option>Business Unit</option>
                                        <option>Business Unit 1</option>
                                        <option>Business Unit 2</option>
                                        <option>Business Unit 3</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group tag_main lft">
                                <div class="form-field">
                                    <select class="form-control ">
                                        <option>Sub Business Unit </option>
                                        <option>Sub Business Unit 1</option>
                                        <option>Sub Business Unit 2</option>
                                        <option>Sub Business Unit 3</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>-->
                            <div class="form-group lft">
                                <div class="form-field tag_main fatch_clients">
                                    <input type="text" readonly="" placeholder="" class="form-control ">
                                    <span class="value_fatch">Client</span>
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
                                <div class="form-field tag_main fatch_summ_tag">
                                    <input type="text" readonly="" placeholder="" class="form-control ">
                                    <span class="value_fatch" >Tags</span>
                                    <div class="Selet_drop fatch_summ_tag_drop">
                                        <div class="option">Banner </div>
                                        <div class="option">Html</div>
                                        <div class="option">Layout</div>
                                        <div class="option">PSD</div>
                                    </div>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group lft">
                                <div class="form-field tag_main fatch_bill">
                                    <input type="text" readonly="" placeholder="" class="form-control ">
                                    <span class="value_fatch" >Billing</span>
                                    <div class="Selet_drop fatch_bill_drop">
                                        <div class="option">Add Billing </div>
                                        <div class="option">Billable</div>
                                        <div class="option">Non-Billable</div>
                                    </div>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a href="#" class="lft common_button">Apply Filter</a>
                            
                            <div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                    
                    <div class="row"><div class="time_estimate">
                        <p class="lft">Total: <strong>00:00:00</strong></p>
                        <!--<p class="lft">Bilable: <strong>00:00:00</strong></p>-->
                        <!--<a href="" download class="rgt common_button">Download</a>-->
                        
                        <div class="clear"></div>
                    </div></div>
                    
                    
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th></th>
                                <th>Tags</th>
                                <th>Amount</th>
                                <th>Employee</th>
                                <!--<th>Estimate Time</th>-->
                                <th style="width: 110px;">Time Spent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Crate</td>
                                <td>Crate Apps - Ollie J. Lloyd</td>
                                <td class="tag_td"> 
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
                                            <a class="rgt common_button" style="width: auto;height: auto;line-height: initial;color: #fff;float: right;padding: 4px 8px;margin-top: 5px;">Add</a>
                                            <div class="clear"></div>
                                        </div>
                                        </form>
                                    </div>
                                </td>
                                <td> - </td>
                                <td>Subhasis Sarkar</td>
                                <!--<td>
                                    <p>12:03 - 12:03</p>
                                    <spn>01/14/2021</spn>
                                </td>-->
                                <td>
                                    <strong>00:00:07</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Adam</td>
                                <td>Adam</td>
                                <td class="tag_td"> 
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
                                            <a class="rgt common_button" style="width: auto;height: auto;line-height: initial;color: #fff;float: right;padding: 4px 8px;margin-top: 5px;">Add</a>
                                            <div class="clear"></div>
                                        </div>
                                        </form>
                                    </div>
                                </td>
                                <td> - </td>
                                <td>Subhasis Sarkar</td>
                                <!--<td>
                                    <p>12:03 - 12:03</p>
                                    <spn>01/14/2021</spn>
                                </td>-->
                                <td>
                                    <strong>00:00:07</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Centerprise</td>
                                <td>Centerprise</td>
                                <td class="tag_td"> 
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
                                            <a class="rgt common_button" style="width: auto;height: auto;line-height: initial;color: #fff;float: right;padding: 4px 8px;margin-top: 5px;">Add</a>
                                            <div class="clear"></div>
                                        </div>
                                        </form>
                                        
                                    </div>
                                </td>
                                <td> - </td>
                                <td>Subhasis Sarkar</td>
                                <!--<td>
                                    <p>12:03 - 12:03</p>
                                    <spn>01/14/2021</spn>
                                </td>-->
                                <td>
                                    <strong>00:00:07</strong>
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
                    <!--<h2>SAP Posting</</h2>-->
                    
                    
                    <div class="form-group  lft">
                        <div class="form-field pass-field">
                            <input type="text" id="showSumm" readonly placeholder="01-01-2021 - 11-01-2021" class="form-control ">
                        </div>
                    </div>
                    <form>
                        <div class="rgt flter_box">
                            <div class="form-group tag_main lft">
                                <div class="form-field">
                                    <select class="form-control ">
                                        <option>Business Unit</option>
                                        <option>Business Unit 1</option>
                                        <option>Business Unit 2</option>
                                        <option>Business Unit 3</option>
                                    </select>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group tag_main lft">
                                <div class="form-field">
                                    <select class="form-control ">
                                        <option>Sub Business Unit </option>
                                        <option>Sub Business Unit 1</option>
                                        <option>Sub Business Unit 2</option>
                                        <option>Sub Business Unit 3</option>
                                    </select>
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
                                <div class="form-field tag_main fatch_summ_tag">
                                    <input type="text" readonly="" placeholder="" class="form-control ">
                                    <span class="value_fatch" >Tags</span>
                                    <div class="Selet_drop fatch_summ_tag_drop">
                                        <div class="option">Banner </div>
                                        <div class="option">Html</div>
                                        <div class="option">Layout</div>
                                        <div class="option">PSD</div>
                                    </div>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group lft">
                                <div class="form-field tag_main fatch_bill">
                                    <input type="text" readonly="" placeholder="" class="form-control ">
                                    <span class="value_fatch" >Billing</span>
                                    <div class="Selet_drop fatch_bill_drop">
                                        <div class="option">Add Billing </div>
                                        <div class="option">Billable</div>
                                        <div class="option">Non-Billable</div>
                                    </div>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </div>
                            </div>
                            <a href="#" class="lft common_button">Apply Filter</a>
                            
                            <div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                    
                    <div class="row">
                        <div class="time_estimate">
                            <p class="lft">Total: <strong>00:00:00</strong></p>
                            <p class="lft">Bilable: <strong>00:00:00</strong></p>
                            
                            <a href="" download class="rgt common_button">Download</a>
                            <div class="clear"></div>
                        </div>
                    </duv>
                    <table class="tags_table">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Description</th>
                                <th>Profit Centre</th>
                                <th>Tags</th>
                                <th>Amount</th>
                                <th>Employee</th>
                                <th>Estimate Time</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Crate</td>
                                <td>Crate Apps - Ollie J. Lloyd</td>
                                <td>Profit Centre 1</td>
                                <td class="tag_td"> 
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
                                            <a class="rgt common_button" style="width: auto;height: auto;line-height: initial;color: #fff;float: right;padding: 4px 8px;margin-top: 5px;">Add</a>
                                            <div class="clear"></div>
                                        </div>
                                        </form>
                                    </div>
                                </td>
                                <td> - </td>
                                <td>Subhasis Sarkar</td>
                                <td>
                                    <p>12:03 - 12:03</p>
                                    <spn>01/14/2021</spn>
                                </td>
                                <td>
                                    <strong>00:00:07</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Adam</td>
                                <td>Adam</td>
                                <td>Profit Centre 2</td>
                                <td class="tag_td"> 
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
                                            <a class="rgt common_button" style="width: auto;height: auto;line-height: initial;color: #fff;float: right;padding: 4px 8px;margin-top: 5px;">Add</a>
                                            <div class="clear"></div>
                                        </div>
                                        </form>
                                    </div>
                                </td>
                                <td> - </td>
                                <td>Subhasis Sarkar</td>
                                <td>
                                    <p>12:03 - 12:03</p>
                                    <spn>01/14/2021</spn>
                                </td>
                                <td>
                                    <strong>00:00:07</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Centerprise</td>
                                <td>Centerprise</td>
                                <td>Profit Centre 3</td>
                                <td class="tag_td"> 
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
                                            <a class="rgt common_button" style="width: auto;height: auto;line-height: initial;color: #fff;float: right;padding: 4px 8px;margin-top: 5px;">Add</a>
                                            <div class="clear"></div>
                                        </div>
                                        </form>
                                        
                                    </div>
                                </td>
                                <td> - </td>
                                <td>Subhasis Sarkar</td>
                                <td>
                                    <p>12:03 - 12:03</p>
                                    <spn>01/14/2021</spn>
                                </td>
                                <td>
                                    <strong>00:00:07</strong>
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
    </div>
</section>





<?php include'include/footer.php';  ?>

<script>
$(".aaTags").on('click', function(e) {
    $(".ins_tagsss").removeClass('open');
	$(this).next(".ins_tagsss").toggleClass('open');
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

</script>




<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
 window.onload = function () {

var chart = new CanvasJS.Chart("curve_chart", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Simple Column Chart with Index Labels"
	},
  	axisY: {
      includeZero: true
    },
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
      	indexLabelFontSize: 16,
		indexLabelPlacement: "outside",
		dataPoints: [
			{ x: 10, y: 71 },
			{ x: 20, y: 55 },
			{ x: 30, y: 50 },
			{ x: 40, y: 65 },
			{ x: 50, y: 92, indexLabel: "\u2605 Highest" },
			{ x: 60, y: 68 },
			{ x: 70, y: 38 },
			{ x: 80, y: 71 },
			{ x: 90, y: 54 },
			{ x: 100, y: 60 },
			{ x: 110, y: 36 },
			{ x: 120, y: 49 },
			{ x: 130, y: 21, indexLabel: "\u2691 Lowest" }
		]
	}]
});
chart.render();

}
 
 
    </script>



<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();
    function cb(start, end) {
        $('#showReport').html(start.format('DDDD M, YYYY') + ' - ' + end.format('DDDD M, YYYY'));
    }

    $('#showReport').daterangepicker({
        startDate: start,
        endDate: end,
        //opens: 'left',
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

});

//--------
$(".fatch_project").click(function(e) {
	$(".fatch_project_drop").toggleClass('open');
	
	$(".fatch_project_duit_drop").removeClass('open');
	$(".fatch_summ_tag_drop").removeClass('open');
	$(".fatch_bill_drop").removeClass('open');
	$(".fatch_bill_duit_drop").removeClass('open');
	$(".fatch_clients_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_project_drop .option").click(function(e) {
	var text = $(this).html();
	$('.fatch_project').children('.value_fatch').html(text);
});
//-------------
$(".fatch_project_duit").click(function(e) {
	$(".fatch_project_duit_drop").toggleClass('open');
	
	$(".fatch_project_drop").removeClass('open');
	$(".fatch_summ_tag_drop").removeClass('open');
	$(".fatch_bill_drop").removeClass('open');
	$(".fatch_bill_duit_drop").removeClass('open');
	$(".fatch_clients_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_project_duit_drop .option").click(function(e) {
	var text = $(this).html();
	$('.fatch_project_duit').children('.value_fatch').html(text);
});

//-------------
$(".fatch_summ_tag").click(function(e) {
	$(".fatch_summ_tag_drop").toggleClass('open');
	
	$(".fatch_project_drop").removeClass('open');
	$(".fatch_project_duit_drop").removeClass('open');
	$(".fatch_bill_drop").removeClass('open');
	$(".fatch_bill_duit_drop").removeClass('open');
	$(".fatch_clients_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_summ_tag_drop .option").click(function(e) {
	var text = $(this).html();
	$('.fatch_summ_tag').children('.value_fatch').html(text);
});
//----------------
$(".fatch_bill").click(function(e) {
	$(".fatch_bill_drop").toggleClass('open');
	
	$(".fatch_project_drop").removeClass('open');
	$(".fatch_project_duit_drop").removeClass('open');
	$(".fatch_summ_tag_drop").removeClass('open');
	$(".fatch_bill_duit_drop").removeClass('open');
	$(".fatch_clients_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_bill_drop .option").click(function(e) {
	var text = $(this).html();
	$('.fatch_bill').children('.value_fatch').html(text);
});
//--------------
//--------
$(".fatch_bill_duit").click(function(e) {
	$(".fatch_bill_duit_drop").toggleClass('open');
	
	$(".fatch_project_drop").removeClass('open');
	$(".fatch_project_duit_drop").removeClass('open');
	$(".fatch_summ_tag_drop").removeClass('open');
	$(".fatch_bill_drop").removeClass('open');
	$(".fatch_clients_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_bill_duit_drop .option").click(function(e) {
	var text = $(this).html();
	$('.fatch_bill_duit').children('.value_fatch').html(text);
});



//---------
$(".fatch_clients").click(function(e) {
	$(".fatch_clients_drop").toggleClass('open');
	
	$(".fatch_project_drop").removeClass('open');
	$(".fatch_project_duit_drop").removeClass('open');
	$(".fatch_summ_tag_drop").removeClass('open');
	$(".fatch_bill_drop").removeClass('open');
	$(".fatch_bill_duit_drop").removeClass('open');
	e.stopPropagation();
});
$(".fatch_clients_drop .option").click(function() {
	var text = $(this).html();
	$('.fatch_clients').children('.value_fatch').html(text);
});
//--------

/*$(".popup-terget, .popup-inner, .dropdown-options ul li a, .popup-triger, #viewprofile-popup").click(function(e){
 	e.stopPropagation();
 });*/

//------

$(document).click(function(){
	$(".fatch_project_drop").removeClass('open');
	$(".fatch_project_duit_drop").removeClass('open');
	$(".fatch_summ_tag_drop").removeClass('open');
	$(".fatch_bill_drop").removeClass('open');
	$(".fatch_bill_duit_drop").removeClass('open');
	$(".fatch_clients_drop").removeClass('open');
});

$('ul.tab_header li a').click(function(){
	var tab_id = $(this).attr('data-tab');
	$('ul.tab_header li a').removeClass('active');
	$('.tab_content').removeClass('active');
	$(this).addClass('active');
	$("#"+tab_id).addClass('active');
});
    
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();
    function cb(start, end) {
        $('#showSumm').html(start.format('DDDD M, YYYY') + ' - ' + end.format('DDDD M, YYYY'));
    }

    $('#showSumm').daterangepicker({
        startDate: start,
        endDate: end,
        //opens: 'left',
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

});
    
</script>















