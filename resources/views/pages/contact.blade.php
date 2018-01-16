<!-- master -->
@extends('master')


<!-- content -->
@section('content')



@php

        $content = explode("</form>",$contents[0]['content']);

		$output = $content[0]."<input type='hidden' name='_token' value='".csrf_token()."'/></form>";

        $output.=$content[1];

@endphp


{!! $output !!}



@stop
