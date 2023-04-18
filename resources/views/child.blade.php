

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('parent')
@section('nav22')
@php
$messageSuccess ='thanh cong';
$messageError ='that bai';
@endphp
<x-alert type="error" :message="$messageError"/>
<x-alert type="success" :message="$messageSuccess"/>

<div>
    day la cai nav
    @php
    $isActive = false;
    $hasError = true;
@endphp
 
<span @class([
    'p-4',
    'font-bold' => $isActive,
    'text-gray-500' => ! $isActive,
    'bg-red' => $hasError,
])>hahaha</span>
 
<span class="p-4 text-gray-500 bg-red"></span>

@php
    $isActive = true;
@endphp
 
<span @style([
    'background-color: red',
    'font-weight: bold' => $isActive,
])>haha</span>
 
<span style="background-color: red; font-weight: bold;"></span>
</div>
@endsection
@php
 $users =array( 
array('number'=>'1','name'=>'nghia1','type'=>1),
array('number'=>'2','name'=>'nghia2','type'=>2),
array('number'=>'3','name'=>'nghia3','type'=>2),
array('number'=>'4','name'=>'nghia4','type'=>1),
array('number'=>'5','name'=>'nghia5','type'=>2),
array('number'=>'6','name'=>'nghia6','type'=>2),
);
@endphp

@foreach ($users as $user)
    @if ($user['type'] == 1)
        @continue
    @endif
 
    <li>{{ $user['name'] }}</li>
 
    @if ($user['number'] == 5)
        @break
    @endif
@endforeach

@foreach ($users as $user)
    @if ($loop->first)
        This is the first iteration.
    @endif
 
    @if ($loop->last)
        This is the last iteration.
    @endif
 
    <p>This is user {{ $user['name'] }}</p>
@endforeach


</body>
</html>
<style>
    .p-4{
        padding: 4px;
    }
    .font-bold{
        font-weight: bold;
    }
    .text-gray-500{
        color: gray;
    }
    .bg-red{
        background-color: red;
    }
</style>