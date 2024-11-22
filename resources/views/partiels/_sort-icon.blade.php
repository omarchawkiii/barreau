@if ($sortBy !== $field)
<i  class=" text-muted mdi mdi-sort"></i>
@elseif ($sortDirection == 'asc')
<i style="color:rgba(38, 38, 236, 0.774)" class="mdi mdi-sort-ascending"></i>
@else
<i style="color:rgba(38, 38, 236, 0.774)" class="mdi mdi-sort-descending"></i>
@endif
