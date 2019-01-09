@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
          <h1 class="text-center text-muted">{{ __('Foros') }}</h1>


          @forelse($forums as $forum)

          <div class="card">
              <div class="card-header">
                <a href="/forums/{{$forum->id}}">{{ $forum->name}}</a>
              </div>
              <div class="card-body">
                {{ $forum->description}}
              </div>
          </div>

          @empty

          <div class="text-center alert alert-danger">
            {{ __("No hay ningún foro en este momento")}}

          </div>

          @endforelse()

          @if($forums->count())

            {{ $forums->links() }}

          @endif
    </div>
</div>
@endsection
