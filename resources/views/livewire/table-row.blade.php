@props(['item', 'key', 'page', 'perPage', 'columns', 'isModalEdit' => false,  'routeEdit'=> null, 'routeView'=> null])

<tr wire:key="{{ $item->id . $page }}">
    <td class="">{{ ++$key + $perPage * ($page - 1) }}.</td>
    @foreach ($columns as $column)
    <td>

        @if ($column['isData'])
        {!! $this->customFormat($column['column'], $column['hasRelation'] ? $item->{$column['column']}->{$column['columnRelation']} : $item->{$column['column']}) !!}
        @elseif ($column['column'] === 'action')
        <div class="flex gap-1 items-center justify-center">
            @if(($routeView))
            <a href="{{ route($routeView, $item->id) }}" class="flex btn px-1 py-1 rounded-md  text-bg-blue">
                <x-heroicon-s-eye class="w-4 h-4 p-1 text-bg-blue" />
            </a>
            @endif
            @if($isModalEdit)
            <button wire:loading.attr="disabled" wire:click="edit({{ $item->id }})" class="flex btn px-1 py-1 rounded-md  text-bg-yellow">
                <x-heroicon-s-pencil class="w-4 h-4 p-1 text-bg-yellow" />
            </button>
            @else
            <a href="{{ route($routeEdit, $item->id) }}" class="flex btn px-1 py-1 rounded-md  text-bg-yellow">
                <x-heroicon-s-pencil class="w-4 h-4 p-1 text-bg-yellow" />
            </a>
            @endif
            <button wire:loading.attr="disabled" wire:click="deleteConfirmation({{ $item->id }})" class="flex btn px-1 py-1 text-bg-red">
                <x-heroicon-s-trash class="w-4 h-4 p-1 text-bg-red" />
            </button>
        </div>
        @endif
    </td>
    @endforeach
</tr>
