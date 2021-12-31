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
                        <H3 class="text font-weight-bold text-primary text-uppercase mb-1">Jumlah Bonus</H3>
                    </div>
                </div>
            </div>
                <div style="width: 400px;height: 400px">
                    <canvas id="myChart"></canvas>
                </div>
        </div>
    </div>
</div>


<!-- Chart JS -->

    <script>
        $(document).ready(function() { 
	        firstInitData();
	          
    	});

        var table;
        // document.getElementById('btnReset').addEventListener('click',firstInitData);

        // function firstInitData(){
            var ctx = document.getElementById("myChart").getContext("2d");
            // window.myChart = new Chart(canvasChart, configChart);
            // urlChart = 'pimpinan/getbonus_pegawai';
            // title = 'Jumlah Bonu Pegawai';
            // setDataChart(urlChart,title); 
            // updateTable('pimpinan/getbonus_pegawai');
        // }

        // table =  $('#example').DataTable({
	    //     // 'iDisplayLength': 25,
	    //     "autoWidth": true,
	    //     'ajax' : {
	    //         "url"   : "pimpinan/getbonus_pegawai",
	    //         "data"  : '',
	    //         "type"  : 'GET'
	    //     },
	    //     'columns' : [
	    //         {"data" : "nama_karyawan"},
	    //         {"data" : "jumlah_bonus"},
	    //     ]
	    // });

        // document.getElementById('myChart').addEventListener('click', function(evt) {
		//     var activePoints = window.myChart.getElementsAtEvent(evt)[0];
		//     var label = window.myChart.data.labels[activePoints._index];
		//     titleChart.push(window.myChart.data.labels[activePoints._index]);
		//     if(label){
		//         urlChart = 'pimpinan/getdata_bonus/'+label; 
		//         setDataChart(urlChart,title);
		//         urlTable = 'pimpinan/getdata_bonus'+label;    
		//         updateTable(urlTable);
		//     }
		// });
        
        var piechart = new Chart(ctx,{type: 'pie',
          data : {
        // label nama setiap Value
        labels:[
                  'RP. 10.000',
                  'Rp. 20.000'
          ],
        datasets: [{
          // Jumlah Value yang ditampilkan
           data:[6,3],
 
          backgroundColor:[
                 'rgba(55, 20, 50, 0.5)',
                 'rgba(99, 230, 90, 0.5)'
            ]
        }],
        }
        });
    </script>
</div>
<!-- End of Main Content -->