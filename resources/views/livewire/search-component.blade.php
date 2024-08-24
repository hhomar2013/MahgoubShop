<div class="position-relative">
   <form action="">
    <input
    wire:model="query"
    type="text"
    placeholder="{{ __('Search for items') }}"

    />
    {{-- <div wire:loading class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
      <div class="list-item">Searching...</div>
    </div> --}}
   </form>



    @if (!empty($query))
        <div class="list-group list-group-flush ml-25 w-50 overflow-auto" style="position: absolute; z-index: 999; ">
            @if (!empty($search))
                @foreach ($search as $val)
                    <h5>
                        <a href="/" class="list-group-item shadow p-3">{{ $val->name }}</a>
                    </h5>
                @endforeach
            @else
                   <h4>
                        <a href="" class="list-group-item">{{ __('No results') }}</a>
                   </h4>
            @endif
        </div>

    @endif
</div>
