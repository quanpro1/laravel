
@if(count($info)===1)
   i have one record!
@elseif(count($info)>1)
i have multiple record!
@else
i don't have any record!
@endif

@unless (count($info)>1)
    khong chay vo day
@endunless