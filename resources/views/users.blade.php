<style type="text/css">
	*{
		margin: auto;
	}
</style>
<x-header />

<!-- use of condition -->

@if($name == 'Rabi Kr Yadav')
<h2 style="text-align:center">Hello, {{$name}}</h2>
@else
<h2 style="text-align:center">Hello, User</h2>
@endif
<h3 style="text-align:center">This is a Users Page.</h3>

<!-- use of loop -->
<!-- 1) for loop -->
@for($i=0;$i<10;$i++)
<h4 style="margin-left:40px;">{{$i}}</h4>
@endfor

<!-- 2) foreach loop -->

@foreach($friends as $frnd)
<h3 style="margin-left:60px;">My Friend Name is {{$frnd}} and</h3>
@endforeach


<!-- javascript file use -->

<script type="text/javascript">
	var data = @json($name);
	document.write('<br>'+data + ' Thank You');
</script>