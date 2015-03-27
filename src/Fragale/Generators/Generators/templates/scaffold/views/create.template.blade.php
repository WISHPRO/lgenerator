@extends('layouts.default')

@section('content')
<?php
/*------------------------------------------------------------*/
$viewName="create";
$modelo="{{models}}";
include_once(app_path().'/views/system/header_CRUD.php');
/*------------------------------------------------------------*/
?>

<div id="container-fluid"> <!--envoltura del formulario-->
	<div class="row-fluid">
		<div class="{{$col_full}}" id="crud-background">
			<p class="divider"></p>
			@if ($lc->master_record_template)
				@include ($lc->master_record_template)
			@endif		
			{{$titulo}}
		</div>		
	</div>
	<div class="row-fluid">
		<div class="{{$col_full}}" id="crud-background">
			{{ Form::open(array('route' => '{{models}}.store')) }}
			
				{{formElements}}
				{{ $lc->inputsMaster() }}

				<!-- buttons -->
				<p class="divider"></p>
				{{ Form::submit(trans('forms.addnew'), array('class' => 'btn btn-info')) }}
				{{ link_to_route($routeBtnIndex, trans('forms.Cancel'), $lc->basicArgs(), array('class' => 'btn btn-default '.$classBtnIndex)) }}
				<!-- /buttons -->
				<p class="divider"></p>				
			{{ Form::close() }}
		</div>
	</div>
</div> <!--/envoltura del formulario-->

<?php
/*------------------------------------------------------------*/
include_once(app_path().'/views/system/footer_CRUD.php');
/*------------------------------------------------------------*/
?>
@stop