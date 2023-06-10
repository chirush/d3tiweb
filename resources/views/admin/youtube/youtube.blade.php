@extends('admin.layout')

@section('content')
<head>
	<title>D3 Teknik Informatika - Youtube</title>
</head>

<section role="main" class="content-body">
	<header class="page-header">
		<h2>Youtube</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="{{ url ('/d3ti-admin') }}">
						<i class="fa fa-home"></i>
					</a>
				</li>
				<li><span>Youtube</span></li>
			</ol>
			<a class="sidebar-right-toggle"></a>
		</div>
	</header>

	@if (session('status'))
	    <div id="notification">
	        {{ session('status') }}
	    </div>

	    <script>
	        var notification = document.getElementById("notification");
	        notification.style.display = "block";

	        setTimeout(function() {
	            notification.style.display = "none";
	        }, 5000);
	    </script>

	    <style>
	        #notification {
	            position: fixed;
	            top: 10%;
	            left: 50%;
	            transform: translateX(-50%);
	            background-color: #333;
	            color: #fff;
	            padding: 10px 20px;
	            border-radius: 5px;
	            z-index: 9999;
	            display: none;
	        }
	    </style>
	@endif

	<a href="{{ url('/d3ti-admin/youtube/sync') }}" class="btn btn-primary mb-3">
			<i class="fa fa-refresh"></i> Sync Youtube
	</a>

	<section class="panel" style="margin-top: 10px;">
		<div class="panel-body">
			<table class="table table-bordered table-striped mb-none" id="datatable-default">
				<thead>
					<tr>
						<th>ID</th>
						<th>Video ID</th>
						<th>Title</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
                    @foreach($data_youtube as $data)
	                    @php
			                $dateString = $data->created_at;
			                $date = new DateTime($dateString);
			                $formattedDate = $date->format('Y-m-d');
	                    @endphp
					<tr>
						<td>{{ $data->youtube_id }}</td>
						<td>{{ $data->youtube_video_id }}</td>
						<td>{{ $data->youtube_title }}</td>
						<td>{{ $formattedDate }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
</section>

	<!-- Vendor -->
	<script src="{{ url ('admin/assets/vendor/jquery/jquery.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

	<!-- Specific Page Vendor -->
	<script src="{{ url ('admin/assets/vendor/select2/select2.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
	<script src="{{ url ('admin/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="{{ url ('admin/assets/javascripts/theme.js') }}"></script>

	<!-- Theme Custom -->
	<script src="{{ url ('admin/assets/javascripts/theme.custom.js') }}"></script>

	<!-- Theme Initialization Files -->
	<script src="{{ url ('admin/assets/javascripts/theme.init.js') }}"></script>


	<!-- Examples -->
	<script src="{{ url ('admin/assets/javascripts/tables/examples.datatables.default.js') }}"></script>
	<script src="{{ url ('admin/assets/javascripts/tables/examples.datatables.row.with.details.js') }}"></script>
	<script src="{{ url ('admin/assets/javascripts/tables/examples.datatables.tabletools.js') }}"></script>
	<script src="{{ url ('admin/assets/javascripts/ui-elements/examples.modals.js') }}"></script>
	<script>
		$(document).ready(function() {
		  $('#datatable-default thead th:first-child').click();
		});
	</script>
@endsection