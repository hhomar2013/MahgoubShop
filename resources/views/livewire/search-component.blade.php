<div class="position-relative">
   <form action="">
    <input
    wire:model="query"
    type="text"
    placeholder="{{ __('Search for items') }}"

    list="query"
    />
    {{-- <div wire:loading class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
      <div class="list-item">Searching...</div>
    </div> --}}
   </form>



    @if (!empty($query))


    <ul class="list-group list-group-flush ml-25 w-50 overflow-auto" style="position: absolute; z-index: 999;">
        {{-- <div class="list-group list-group-flush ml-25 w-50 overflow-auto" style="position: absolute; z-index: 999; "> --}}
            {{-- <datalist id="query"> --}}
            @if (!empty($search))
                @foreach ($search as $val)
                    {{-- <h5>
                        <a href="/" class="list-group-item shadow p-3">{{ $val->name }}</a>
                    </h5> --}}
                    <a href="{{ route('product.details',['slug'=>$val->slug]) }}" class="">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            {{ $val->name }}
                            <span class="badge bg-primary rounded-pill">{{ $val->SKU }}</span>
                        </li>
                    </a>
                   {{-- <a href="{{ route('product.details',['slug'=>$val->slug]) }}">
                        <option value="{{ $val->name }}">{{ $val->name }}</option>
                    </a> --}}
                @endforeach
            {{-- </datalist> --}}
            @else
                   {{-- <h4>
                        <a href="" class="list-group-item">{{ __('No results') }}</a>
                   </h4> --}}
                   <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ __('No results') }}
                    <span class="badge bg-primary rounded-pill">14</span>
                  </li>
            @endif
        {{-- </div> --}}

    </ul>

    @endif
</div>
