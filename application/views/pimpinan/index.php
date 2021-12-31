<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <h1 class="h3 mb-4 text-gray-800"></h1>

    <div class="col-xl-12 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <H3 class="text font-weight-bold text-primary text-uppercase mb-1">STATISTIK BONUS PEGAWAI</H3>
                    </div>
                </div>
            </div>
                <div style="width: 800px;height: 800px">
                    <canvas id="myChart"></canvas>
                </div>
        </div>
    </div>
</div>


<!-- Chart JS -->

    <script>
        // $(document).ready(function(){
            var cData1 = JSON.parse(`<?php echo $chartdata; ?>`);
            var ctx1 = document.getElementById("myChart").getContext('2d');
             console.log(cData1);
            var myChartPos; 

                Datachart1 = {
                    labels: cData1.label,
                    datasets: [{
                        label: "Data Bonus Karyawan",
                        data: cData1.data,
                        backgroundColor: ["rgba(205,64,64,0.6)", "rgba(3, 252, 219,0.6)", "rgba(32, 3, 252,0.6)", "rgba(227, 252, 3,0.6)"],
                        borderColor: ["rgba(205,64,64,1)", "rgba(3, 252, 219,1)", "rgba(32, 3, 252,1)", "rgba(227, 252, 3,1)"],
                        borderWidth: 1
                    }]
                }
                optschart = {
                    scales: {
                    xAxes: [{
                        ticks: {
                        beginAtZero: true
                        }
                    }]
                    }
                }
            myChartPos = new Chart(ctx1, {type: 'bar', data: Datachart1, options : optschart});               
        // });
    </script>
</div>
<!-- End of Main Content -->