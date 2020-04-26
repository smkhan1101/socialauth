@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <table class="table table-hover">
                <thead>
                    <th>
                        Name
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </thead>
                <tbody>
                    
                    @foreach($channels as $channels)
                    <tr>
                        <td>{{$channels->title}}</td>
                        <td><a href="{{route('channels.edit', ['channel' => $channels->id])}}" class="btn btn-primary">Edit</a></td>
                        <td>
                             <form action="{{ route('channels.destroy', ['channel' => $channels->id ]) }}" method="post">

                                                            {{ csrf_field() }}

                                                            {{ method_field('DELETE') }}

                                                            <button class="btn btn-xs btn-danger" type="submit">Destroy</button>

                                                </form>
                          
                   </tr>
                    @endforeach
                    
                </tbody>
           </table>
        </div>
    </div>
</div>
@endsection
