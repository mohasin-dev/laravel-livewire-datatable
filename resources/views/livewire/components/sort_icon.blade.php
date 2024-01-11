@if($sortField != 'name')
    <i class="text-muted fa-solid fa-sort"></i> 
@elseif ($sortAsc)
    <i class="fa-solid fa-sort-up"></i> 
@else
    <i class="fa-solid fa-sort-down"></i>
@endif