@extends('adminLayouts.admin_master')


@section('content')

	<h1 class="title">Врачи</h1>

	<table class="table table-hover table-style" id="post_table">
		<thead>
		<tr class="table-active">
			<th scope="col">#</th>
			<th scope="col">Наименование</th>
			<th scope="col">Текст</th>
			<th scope="col">дата создания</th>
			<th scope="col"><div class="float-btn">
					<a href="{{'/adminpanel/dashboard/doctors/create'}}" class="btn btn-success">
						<i class="fas fa-plus" aria-hidden="true"></i></a>
				</div>
			</th>

		</tr>
		</thead>

		<tbody>
        <?php $i = 1; ?>
		@foreach($doctors as $doctor)

			<tr>
				<th scope="row">{{ $i }} </th>
				<td>{!! str_limit($doctor->name, 25) !!}</td>
				<td>{!! str_limit(strip_tags($post->body), 50) !!}</td>
				<td>{{ ($doctor->created_at)->diffForHumans() }}</td>
				<td style="width: 120px;"><a href="{{action('Adminpanel\DoctorsController@edit', $doctor->id)}}"	class="btn btn-primary">
						<i class="fas fa-edit"></i>
					</a>

					<a class="btn btn-danger deletebtn" href="javascript:void(0)" data-post="{{ $doctor->id }}">
						<i class="fas fa-minus"></i>
					</a>
				</td>
				<td style="display: none;"> {{ $i++ }}</td>
			</tr>

		@endforeach
		</tbody>
	</table>

@endsection

@section('deleteDoctor')

	<script>
        $(document).on('click', '.deletebtn', function(ev){
            var postid = $(this).attr("data-post");
            var clickedObj = $(this).parent().parent();
            if (confirm('Вы уверены?')) {
                $.ajax({
                    method: 'DELETE',
                    url: '{{ url('/adminpanel/dashboard/doctors')}}',
                    dataType: 'text',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {id:postid,"_token": "{{ csrf_token() }}"},

                    success: function (data) {
                        $(clickedObj).fadeOut( "slow", function() {
                            // удалено
                        });
                    }
                });
            }
        });
	</script>

@endsection