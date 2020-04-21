
  
 
<?php  // Use ls command to shell_exec 
  // function 
  $output = shell_exec('curl https://api.samabusiness.sa/api/Stores'); 
    
  // Display the list of all file 
  // and directory 
  

var_dump(json_decode($output));

?>
@extends('layouts.manifest')
@section('content')

{{ $timezone = config('app.timezone') }}
{{ $appname = config('app.name') }}
{{ $env = config('app.env') }}
{{ $url = config('app.url') }}
{{ $locale = config('app.locale') }}

<img src="{{ URL::asset('https://cdn.samabusiness.sa/v1/images/icon.jpg') }}" />



@endsection

