<div class="container">
           <div class="well dashboard-graphs">
                <div class="row">
                   
                        <div class="col-lg-6">
                         
                           <canvas id="chartOJTStatus" width="400" height="200"></canvas>
                           <script>
                                var ctx = document.getElementById("chartOJTStatus").getContext('2d');
                                var myChart = new Chart(ctx, {

                                    type: 'bar',
                                    data: {
                                        labels: ["On Going", "Complete"],
                                        datasets: [{
                                            label: 'Student Status',
                                            data: [ <?php echo $completed_students['not_completed']?>, <?php echo $completed_students['completed']?>],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                
                                            ],
                                            borderColor: [
                                                'rgba(255,99,132,1)',
                                                'rgba(54, 162, 235, 1)',
                                               
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                }
                                            }]
                                        }
                                    }
                                });
                                </script>
                        </div>
                       

                    <div class="col-lg-6">
                         <canvas id="chartCourses" width="400" height="200"></canvas>
                             <script>
                               var ctx = document.getElementById("chartCourses").getContext('2d');
                                var myChart = new Chart(ctx, {
                                 label: 'Courses',
                                  type: 'pie',
                                  data: {
                                    labels: [<?php echo implode($courses_for_graph, ',')?>],
                                    datasets: [{
                                      backgroundColor: [
                                         'rgba(255, 99, 132, 0.2)',
                                          'rgba(54, 162, 235, 0.2)',
                                          'rgba(255, 206, 86, 0.2)',
                                          'rgba(75, 192, 192, 0.2)',
                                          'rgba(153, 102, 255, 0.2)',
                                          'rgba(255, 159, 64, 0.2)'
                                         
                                      ],
                                      hoverBackgroundColor: [
                                         'rgba(255, 99, 132, 0.5)',
                                          'rgba(54, 162, 235, 0.5)',
                                          'rgba(255, 206, 86, 0.5)',
                                          'rgba(75, 192, 192, 0.5)',
                                          'rgba(153, 102, 255, 0.5)',
                                          'rgba(255, 159, 64, 0.5)'
                                      ],

                                      borderColor: [
                                          'rgba(255,99,132,1)',
                                          'rgba(54, 162, 235, 1)',
                                          'rgba(255, 206, 86, 1)',
                                          'rgba(75, 192, 192, 1)',
                                          'rgba(153, 102, 255, 1)',
                                          'rgba(255, 159, 64, 1)'

                                               
                                         ],
                                         borderWidth: 1,
                                       data: [<?php echo implode($courses_count, ',') ?>]
                                    }]
                                  },
                                  options: {
                                    cutoutPercentage: 0,
                                  },
                                });
                                </script>
                      </div>
              </div>
      </div>    
</div>