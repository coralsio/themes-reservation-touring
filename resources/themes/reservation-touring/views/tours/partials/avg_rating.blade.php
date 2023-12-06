@php $avgRating=$tour->averageRating()[0] @endphp

@for($i=1;$i<=5 ; $i++)
    <i class="icon-smile {{ $avgRating >= $i ? 'voted':''}}"></i>
@endfor

@if($countRating = $tour->countRating())
    <small>{{$countRating}}</small>
@endif