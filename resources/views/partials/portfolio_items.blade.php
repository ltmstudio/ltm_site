{{-- @extends('layouts.base')

@section('title', 'Portfolio') --}}

@section('content')

@for ($i = 0; $i < count($portfolio); $i++)
@php
    $portf = $portfolio[$i];
    $additionalClass = ($i % 2 != 0) ? 'add-padding' : '';
@endphp
        {{-- @foreach ($portfolio as $portf) --}}
            <a href="/{{ $lang }}/portfolio/{{ $portf['id'] }}" class="grid-item {{$additionalClass}} no-line">
                <div class="columnPort position-relative content ">
                    @if ($portf['photo'] != '')
                        <img src="{{ asset('storage/' . $portf['photo']) }}" alt="Image" class=""
                            style="width: 300px !important; height: 200px !important;">
                    @else
                        <img src="{{ asset('assets/images/proformat.png') }}" class="" alt="Image">
                    @endif
                    <div class="gridText content">
                        <div class="subtitle">{{ $portf['what'] }}</div>
                        <div class="rowPort ">
                            <div class="line"></div>
                            <div class="gridTitle  ">{!! $portf['title_' . $lang] !!}</div>
                        </div>
                    </div>
                </div>
                <div class="arrow d-flex align-items-center justify-content-center" style="top:-50px"><i
                        class="fa-solid fa-arrow-right-long" style="color:white; font-size:30px;"></i></div>
            </a>
        @endfor

@endsection

{{-- @endsection --}}