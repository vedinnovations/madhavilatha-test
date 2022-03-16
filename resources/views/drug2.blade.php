<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 View Render Example - web-tuts.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .input-group-text
	{
		    margin-left: 380px;
	}
    
</style>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-2 box">
                <div class="viewRender">
				<h1 style="text-align:center">Drug 2</h1>
				<form class="form-horizontal" action="">
				
					@foreach ($data['fields'] as $item=>$value )
					<div class="form-group">									
					<label class="control-label col-sm-4">{{ $value['label'] }}</label>
					<div class="col-sm-4">
						@if($value['type'] != 'dropdown')
							
						<input type= {{ $value['type'] }} class="form-control drug-{{$item}}" name="{{ $value['key'] }}" requiredkey ="{{ $value['isRequired'] }}" readonlykey = "{{ $value['isReadonly'] }}">	
						
						   
					    
						@else
							<select class="form-control drug-{{$item}}" name="{{ $value['key'] }}" requiredkey ="{{ $value['isRequired'] }}" readonlykey = "{{ $value['isReadonly'] }}">
							 <option value="">Gender</option>
							 @if($value['items'] != [])
							 @foreach ($value['items'] as $i=>$v )							 
							 <option value="{{$v['value']}}">{{$v['text']}}</option>
							 @endforeach
							 @endif
							</select>
						@endif	
					
						</div>
						<div class="col-sm-1">{{ $value['unit'] }}</div>
					</div>
					@endforeach	
				</form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	var count = '<?php echo count($data['fields']);?>';
    for(var i=0;i<count;i++)
	{
		requiredkey = $('.drug-'+i).attr('requiredkey');
		readonlykey = $('.drug-'+i).attr('readonlykey');
		if(requiredkey == 1)
		{
			$('.drug-'+i).prop('required',true);
		}
		if(readonlykey == 1)
		{
			$('.drug-'+i).prop('readonly',true);
		}		
	}
});

</script>