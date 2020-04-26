@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         @foreach($discussions as $d)
            
               <div class="card">
                <div class="card-header">
                    <img src="{{$d->user->avator}}" alt="{{$d->user->avator}}" width="70px" height="70px">
                    <span>{{$d->user->name}}</span>
                </div>

                <div class="card-body">
                   {{$d->content}}
                </div>
            </div>
         @endforeach
         <br>

        <div class="text-center"> 
                {{$discussions->links()}}
         </div>
        
        </div>

    </div>
</div>
@endsection
