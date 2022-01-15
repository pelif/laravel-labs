<h1>For If</h1>

@if ($value > 100 )
    <p>Valor Maior que 100</p>
    @else 
    <p>Valor Menor que 100</p>
@endif

@for($i = 1; $i <= $value; $i++)
    - {{ $i }}
@endfor

<br> 

@php 
    $i = 1
@endphp

@while($i <= $value) 
    {{ $i }} 
    @php
        $i++
    @endphp
@endwhile

<br>

<ul>
@foreach($myArray as $key => $item)
    <li>{{ $loop->index }} - {{ $key }} - {{ $item }}</li>
@endforeach
</ul>

@forelse([] as $key => $value)
    <p>{{ $loop->index }} - {{ $key }} - {{ $value }} </p>
@empty
    <p>Nenhum registro encontrado. </p>
@endforelse