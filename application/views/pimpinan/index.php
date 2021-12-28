<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800"></h1>


    <!-- Pending Requests Card Example -->
    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Bonus</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= rupiah($total_bonus);?>,-</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <H3 class="text font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengeluaran</H3>
                    </div>
                </div>
            </div>
                <div style="width: 500px;height: 500px">
                    <canvas id="myChart"></canvas>
                </div>
        </div>
    </div>

</div>
<!-- Chart JS -->
    <!-- <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script> -->

    <script>
        var ctx = document.getElementById("myChart").getContext("2d");
        // tampilan chart
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'Web Master',
                  'Web Design',
                  'Web Programming',
                  'Mobile Apps',
                  'Digital Marketing'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[60,60,60,80,100],
 
          backgroundColor:[
                 'rgba(24, 220, 110, 0.5)',
                 'rgba(111, 80, 10, 0.5)',
                 'rgba(11, 120, 170, 0.5)',
                 'rgba(55, 20, 50, 0.5)',
                 'rgba(99, 230, 90, 0.5)'
                 ]
        }],
        }
        });
    </script>
</div>
<!-- End of Main Content -->