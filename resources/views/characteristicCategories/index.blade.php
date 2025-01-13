@extends('app')

@section('content')

    @if($characteristicCategories->isEmpty())
        @include('components.empty', [
            'error' => 'characteristic categories found'
        ]);
    @else
        <ul class="flex flex-col gap-2 p-4 divide-y-2 divide-gray-700">
            @foreach ($characteristicCategories as $characteristicCategory)
                <div class="flex flex-col gap-2 py-4">
                    <div class="font-bold text-xl">Category: {{ $characteristicCategory->name }}</div>
                    
                    @forelse ($characteristicCategory?->characteristics as $characteristic)
                        <li class="ml-10 border border-gray-700 rounded-md px-4 py-2">
                            <span>{{ $characteristic->name }}</span>
                        </li>
                        @empty
                            @include('components.empty', [
                                'error' => 'No characteristics found'
                            ])
                    @endforelse
                </div>
            @endforeach
        </ul>
    @endif

@endsection