
<?php include'include/header.php';  ?>

<div style="height:65.8px"></div>

<section class="page-content">
    <div class="wrapper">
        <div class="page-titlediv">
            <div class="left-div">
                <div class="page-title">
                    <div class="icon-box">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="text">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>
            
            <div class="middle-div">
                <!--<h4>Search by Business Unit and Sub Business Unit</h4>-->
                <form class="search_byyy">
                    <div class="row">
                        <div class="col-md-3 lft" >
                            <h4 style="margin-top: 10px;text-align:right;">Search by</h4>
                        </div>
                        <div class="col-md-3 lft">
                            <div class="form-group tag_main">
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
                        </div>
                        <div class="col-md-3 lft">
                            <div class="form-group tag_main">
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
                        </div>
                        <button type="button" class="lft  common_button" style="margin-right: 15px;"><i class="fa fa-search"></i></button>
                        <!--<div class="form-group lft">
                            <label>&nbsp;</label>
                            <div class="form-field">
                                <button type="button" class="  common_button" style="margin-right: 15px;"><i class="fa fa-search"></i></button>
                            </div>
                        </div>-->
                        <div class="clear"></div>
                    </div>
                </form>
            </div>
            
            
            <div class="right-div">
                <div class="next-pre-control ml-3">
                    <div class="border-box show_cal custom_date">
                        <i class="fa fa-calendar-o " aria-hidden="true"></i>
                    </div>
                    <div>
                        <input type="text" placeholder="" class=" cust-date-range" id="date_filtter" value="01/01/2020 - 15/01/2020">
                    </div>
                </div> 
            </div>
        </div>
        <!--
        <div class="project-detail">
            <div class="row">
                <div class="col-md-3 lft">
                    <div class="gray-box">
                        <div class="page-title">
                            <div class="icon-box">
                               <i class="fa fa-university" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h5 class="text-white">Top Project</h5>
                                <h2 class="top_project_name">CIPO</h2>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="time-spent"><p><strong>Time spent:</strong> <br/><span>00 days,</span> <br/><span>08 hours,</span><br/> <span>30 minutes,</span><br/> <span>00 seconds</span></p></div>
                        
                    </div>
                </div>
                <div class="col-md-3 lft">
                    <div class="gray-box white-box">
                        <div class="page-title">
                            <div class="icon-box">
                                <i class="fa fa-tachometer" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h5 class="text-white">Dashboard</h5>
                                <h2 class="top_project_name">All Project</h2>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="time-spent"><p><strong>Time spent:</strong> <br/><span>00 days,</span> <br/><span>08 hours,</span><br/> <span>30 minutes,</span><br/> <span>00 seconds</span></p></div>
                        
                    </div>
                </div>
                
                <div class="col-md-6 lft">
                    <div class="gray-box white-box">
                        <div class="page-title">
                            <div class="icon-box">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <h5 class="text-white">Top Employee</h5>
                                <h2 class="top_project_name">Subhasis Sarkar</h2>
                            </div>
                            <div class="clear"></div>
                        </div>
                        
                        <div class="time-spent"><p><strong>Time spent:</strong> <br/><span>00 days,</span> <br/><span>08 hours,</span><br/> <span>30 minutes,</span><br/> <span>00 seconds</span></p></div>
                        
                    </div>
                </div>
                
                <div class="clear"></div>
            </div>
        </div> -->
        
        <div class="tracker-all-info">
            <div class="row">
                <div class="col-md-3 lft">
                    <div class="most_tarct">
                        <p>MOST TRACKED ACTIVITIES</p>
                        <select>
                            <option>Top 10</option>
                            <option>All</option>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="activities-area">
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Create Logo</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Create Banner</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Html Converting </div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Design UI</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>PHP Development </div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Banner Change</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Html Changes</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Total</div>
                            <div class="total-time">08:30:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Create Banner</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Html Converting </div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Design UI</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>PHP Development </div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Banner Change</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Html Changes</div>
                            <div class="time">02:00:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                        <div class="activities_list">
                            <div class="activities_name"><span></span>Total</div>
                            <div class="total-time">08:30:00 Hours</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-7 lft">
                    <div class="row">
                        <div class="col-md-5 lft">
                            <div class="gray-box">
                                <div class="page-title">
                                    <div class="icon-box">
                                       <i class="fa fa-university" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="text-white">Top Project</h5>
                                        <h2 class="top_project_name">CIPO</h2>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                
                                <div class="time-spent"><p><strong>Time spent:</strong> <br/><span>00 days,</span> <br/><span>08 hours,</span><br/> <span>30 minutes,</span><br/> <span>00 seconds</span></p></div>
                                
                            </div>
                        </div>
                        <div class="col-md-5 lft">
                            <div class="gray-box white-box">
                                <div class="page-title">
                                    <div class="icon-box">
                                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="text-white">Dashboard</h5>
                                        <h2 class="top_project_name">All Project</h2>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                
                                <div class="time-spent"><p><strong>Time spent:</strong> <br/><span>00 days,</span> <br/><span>08 hours,</span><br/> <span>30 minutes,</span><br/> <span>00 seconds</span></p></div>
                                
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <br/><br>
                    
                    <div class="chart-management">
                        <div class="chart-box">
                            <p>Total Time</p>
                            <h2 class="top_total_time">08:30:00</h2>
                        </div>
                        <div class="chart-box">
                            <p>Top Project</p>
                            <h2 class="top_total_time">CIPO</h2>
                        </div>
                        <div class="chart-box">
                            <p>Top Client</p>
                            <h2 class="top_total_time">Crate</h2>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="bar-chart-area">
                        <div class="chart_div" style="height: 250px;"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
        
        <div class="teammet_project_area">
            <h2>Projects</h2>
            <div class="row">
                <div class="col-md-10 ">
                    <div class="progress_bar_box">
                        <div class="activities_name lft"><span></span>Centerprise</div>
                        <div class="barfiller_area lft">
                            <div class="progress_time">02:00:00 Hours</div>
                            <div id="bar1" class="barfiller">
                            <div class="tipWrap">
                    		<span class="tip"></span>
                    	    </div>
                    	    <span class="fill" data-percentage="50"></span>
                	</div>
                	    </div> 
                    	<div class="clear"></div>
                	</div>
                	<div class="progress_bar_box">
                	    <div class="activities_name lft"><span></span>CIPO</div>
                	    <div class="barfiller_area lft">
                            <div class="progress_time">02:00:00 Hours</div>
                    	    <div id="bar2" class="barfiller ">
                        	    <div class="tipWrap">
                            		<span class="tip"></span>
                        	    </div>
                    	    <span class="fill" data-percentage="35"></span>
                    	</div>
                    	</div>
                    	<div class="clear"></div>
                	</div>	
                	<div class="progress_bar_box">
                	    <div class="activities_name lft"><span></span>Crate</div>
                	    <div class="barfiller_area lft">
                            <div class="progress_time">02:00:00 Hours</div>
                    	    <div id="bar3" class="barfiller">
                        	    <div class="tipWrap">
                        		<span class="tip"></span>
                        	    </div>
                        	    <span class="fill" data-percentage="75"></span>
                    	</div>
                	        </div>
                    	<div class="clear"></div>
                	</div>	
                	<div class="progress_bar_box">
                	    <div class="activities_name lft"><span></span>Adam</div>
                	    <div class="barfiller_area lft">
                            <div class="progress_time">02:00:00 Hours</div>
                    	    <div id="bar4" class="barfiller">
                        	    <div class="tipWrap">
                        		<span class="tip"></span>
                        	    </div>
                        	    <span class="fill" data-percentage="90"></span>
                    	</div>
                	        </div>
                    	<div class="clear"></div>
                	</div>	
                	<div class="progress_bar_box">
                	    <div class="activities_name lft"><span></span>Yoyotech</div>
                	    <div class="barfiller_area lft">
                            <div class="progress_time">02:00:00 Hours</div>
                    	    <div id="bar5" class="barfiller">
                        	    <div class="tipWrap">
                        		<span class="tip"></span>
                        	    </div>
                        	    <span class="fill" data-percentage="95"></span>
                    	</div>
                	        </div>
                    	<div class="clear"></div>
                	</div>	
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 lft">
                    <div class="common_pie">
                        <a href="" download="" class="common_button rgt"><i class="fa fa-download" aria-hidden="true"></i></a>
                        <div class="clear"></div>
                        <br/>
                        <div id="teammet_pie_chart"  style="height: 300px; width:100%;"></div>
                    </div>
                </div>
                <div class="col-md-5 lft">
                    <div class="common_pie">
                        <a href="" download="" class="common_button rgt"><i class="fa fa-download" aria-hidden="true"></i></a>
                        <div class="clear"></div>
                        <br/>
                        <div id="project_pie_chart"  style="height: 300px; width:100%;"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
        
    </div>
</section>





<?php include'include/footer.php';  ?>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#date_filtter').daterangepicker({
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
        $('#date_filtter').focus();
    });

});
</script>
<!--<script type="text/javascript">

     $('.custom_date').daterangepicker({
        opens: 'left',
        locale: { format: 'DD/MM/YYYY' }
       
    });
</script>-->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBasic);
    function drawBasic() {
          var data = new google.visualization.DataTable();
          data.addColumn('timeofday', 'Time of Day');
          data.addColumn('number', 'Day');
          
          data.addRows([
            [{v: [16, 0, 0], f: '1 Jan'}, 1],
            [{v: [9, 0, 0], f: '2 Jan'}, 2],
            [{v: [10, 0, 0], f:'3 Jan'}, 3],
            [{v: [5, 0, 0], f: '5 Jan'}, 4],
            [{v: [12, 0, 0], f: '7 Jan'}, 5],
            [{v: [8, 0, 0], f: '8 Jan'}, 6],
            [{v: [14, 0, 0], f: '9 Jan'}, 7],
          ]);
          var options = {
            //title: 'Motivation Level Throughout the Day',
            hAxis: {
              //title: 'Time of Day',
              dateformat: 'dd:mm yy',
              viewWindow: {
                //min: [7, 30, 0],
                //max: [17, 30, 0]
              }
            },
            vAxis: {
              title: 'Rating (scale of 1-10)'
            }
          };
          var chart = new google.visualization.ColumnChart(
            document.querySelector('.chart_div'));
          chart.draw(data, options);
        }
        
        
   
     //--start  project pie chart
        google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Crate',     11],
          ['CIPO',      2],
          ['Adam',  2],
          ['Yoyotech', 2],
          ['Centerprise',    7]
        ]);

        var options = {
          title: 'PROJECTS',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('project_pie_chart'));
        chart.draw(data, options);
      }
     
     //--end  project pie chart 
</script>
<script type="text/javascript">
    //--start  teammet pie chart  
     google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Emplyee A',     11],
          ['Emplyee B',      2],
          ['Emplyee C',  2],
          ['Emplyee D', 2],
          ['Emplyee E',    7]
        ]);

        var options = {
          title: 'EMPLOYEE',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('teammet_pie_chart'));
        chart.draw(data, options);
      }
     
      //--end  teammet pie chart 
      
</script>

<script src="js/jquery.barfiller.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#bar1').barfiller({ barColor: '#f54337' });
	$('#bar2').barfiller({ barColor: '#000' });
	$('#bar3').barfiller({ barColor: '#008aff' });
	$('#bar4').barfiller({ barColor: '#981039' });
	$('#bar5').barfiller({ barColor: '#000' });
	
});
</script>

