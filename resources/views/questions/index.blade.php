@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All Questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary">Ask Question</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('layouts._message')
                   @foreach($questions as $question)
                   <div class="media">
                    <div class="d-flex flex-column counters">
                        <div class="votes">
                            <strong>{{ $question->votes }}</strong>{{ Str::plural('vote',$question->votes) }}
                        </div>
                        <div class="status {{ $question->status }}">
                         <strong>{{ $question->answers }}</strong>{{ Str::plural('answers',$question->answers) }}
                     </div>
                     <div class="view">
                         {{ $question->views ." ". Str::plural('views',$question->views) }}
                      </div>
                 </div>
                       <div class="media-body">
                           <div class="d-flex align-items-center">
                            <h3 class="mt-0">{{$question->title}}</h3>
                            <div class="ml-auto">
                                <a href="{{ route('questions.edit',$question->id)}}" class="btn btn-outline-info">Edit</a>
                            </div>
                           </div>

                           {{ Str::limit($question->body,250) }}
                       </div>
                   </div>
                   <hr>
                   @endforeach
                   <div class="mx-auto">
                    {{ $questions->links() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
