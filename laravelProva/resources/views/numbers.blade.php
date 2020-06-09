@extends('mainLayout')

@section('content')
  <div class="box-numeri">
    @for ($i = 1; $i <= $number; $i++)
        <div class="numero flex">
          {{$i}}
        </div>
    @endfor
  </div>
@endSection
