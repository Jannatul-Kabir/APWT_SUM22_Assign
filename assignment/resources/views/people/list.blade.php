@extends('layout.layout')
@section('content')
   
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Dob</th>
        </tr>
        @foreach($peoples as $p)
            <tr>
                <td><a href="{{route('people.details',['id'=>$p->id,'name'=>$p->name])}}">{{$p->name}}</a></td>
                <td>{{$p->id}}</td>
                <td>{{$p->dob}}</td>
            </tr>
        @endforeach
    </table>
@endsection