@extends('adminLayouts.admin_master')

@section('content')
	<h1 class="title">Новости</h1>

		<table class="table table-hover table-style" id="post_table">
		  <thead>
		    <tr class="p-3 mb-2 bg-danger text-white">
		     	<th scope="col">#</th>
		     	<th scope="col">Наименование</th>
		     	<th scope="col">Текст</th>
		        <th scope="col">дата создания</th>
		        <th scope="col"><div class="float-btn">
				<a href="{{'/adminpanel/dashboard/posts/create'}}" class="btn btn-success">
			   		<i class="fas fa-plus" aria-hidden="true"></i></a>
				</div>
			    </th>
		
		    </tr>
		  </thead>  

		  <tbody>
		    <?php $i = 1; ?>
			@foreach($posts as $post)
			    
			    <tr>
			      	<th scope="row">{{ $i }} </th>
			      	<td>{!! str_limit($post->title, 25) !!}</td>
			      	<td>{!! str_limit(strip_tags($post->body), 50) !!}</td>
			      	<td>{{ ($post->created_at)->diffForHumans() }}</td>
			      	<td style="width: 120px;"><a href="{{action('Adminpanel\Posts@edit', $post->id)}}"		 		class="btn btn-primary">
			      			<i class="fas fa-edit"></i>
			      		</a> 

						<a class="btn btn-danger deletebtn" href="javascript:void(0)" data-post="{{ $post->id }}">
							<i class="fas fa-minus"></i>
						</a>
			      	</td>
			      	<td style="display: none;"> {{ $i++ }}</td>
			    </tr>
			   
			@endforeach
		  </tbody>
		</table>
	
@endsection


@section('script')

<script> 
  $(document).on('click', '.deletebtn', function(ev){ 
      var postid = $(this).attr("data-post"); 
      var clickedObj = $(this).parent().parent(); 
      if (confirm('Вы уверены?')) {   
        $.ajax({ 
            method: 'DELETE', 
            url: '{{ url('/adminpanel/dashboard/posts')}}', 
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



