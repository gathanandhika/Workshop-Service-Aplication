@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back Admin, {{ auth()->user()->nama }}</h1>
    </div>
    <div>
        <h4>Jumlah Booking Hari ini: {{ $jumlah_booking }}</h4>
    </div>
    <div>
        <h4>Akumulasi Seluruh Pendapatan: {{ $pendapatan }}</h4>
    </div>

    <div style="width: 800px;height: 500px">
		<canvas id="myChart"></canvas>
	</div>

	<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
		labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
		//   labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni"],
		datasets: [{
			label: 'Pendapatan',
			data: [{{ $pendapatan_januari }}, {{ $pendapatan_februari }}, {{ $pendapatan_maret }}, {{ $pendapatan_april }}, {{ $pendapatan_mei }}, 
					{{ $pendapatan_juni }}, {{ $pendapatan_juli }}, {{ $pendapatan_agustus }}, {{ $pendapatan_september }}, {{ $pendapatan_oktober }}, 
					{{ $pendapatan_november }}, {{ $pendapatan_desember }}],
			// data: [11, 15, 90, 23, 2, 3],
			backgroundColor: [
			'rgba(255, 99, 132, 0.2)',
			'rgba(54, 162, 235, 0.2)',
			'rgba(255, 206, 86, 0.2)',
			'rgba(75, 192, 192, 0.2)',
			'rgba(153, 102, 255, 0.2)',
			'rgba(255, 159, 64, 0.2)'
			],
			borderColor: [
			'rgba(255,99,132,1)',
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
			yAxes: [{
			ticks: {
				beginAtZero:true
			}
			}]
		}
		}
	});
	</script>
    
    
</main>


@endsection
