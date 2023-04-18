<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    noi dung cua cha:
    @php
     $jobs = [
        [
            'title'=>'1',
            'description'=>'this is job',
            'salary'=>'500000'
        ],
        [ 
            'title'=>'2',
            'description'=>'this is job2',
            'salary'=>'600000'
        ],
        [ 
            'title'=>'3',
            'description'=>'this is job3',
            'salary'=>'600000'
        ] 
    ]; 
    @endphp
    @sectionMissing('navigation')
    <div class="pull-right">
       @each('default-navigation',$jobs,'job')
    </div>
@endif
@yield('nav22')
    
</body>
</html>