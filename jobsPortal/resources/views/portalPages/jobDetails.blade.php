@extends('layouts.main')
@section('content')

    @foreach($jobs as $detail)
        <h2 style="margin: 50px 10px 10px 30px">{{$detail->title}}</h2>
        <div style="display: flex">
            <p style="margin: 10px 30px; font-weight: bold">published: </p>
            <p style="margin: 10px ; ">{{$detail->published}}</p>
            <p style="margin: 10px ; font-weight: bold">deadline:</p>
            <p style="margin: 10px ;">{{$detail->deadline}}</p>
        </div>
        <div style="display: flex; margin: 0">
            <p style="margin: 10px 30px; font-weight: bold">Category:</p>
            <p style="margin: 10px">{{$detail->category->category_title}}</p>
        </div>
        <div style="display: flex; margin: 0">
            <p style="margin: 10px 30px; font-weight: bold">Company:</p>
            <p style="margin: 10px">{{$detail->company}}</p>
        </div>
        <div style="display: flex; margin: 0">
            <p style="margin: 10px 30px; font-weight: bold">Email:</p>
            <a href="/" style="margin: 10px">{{$detail->email}}</a>
        </div>
        <div style="display: flex; margin: 0">
            <p style="margin: 10px 30px; font-weight: bold">Salary:</p>
            <p style="margin: 10px">{{$detail->salary}} GEL</p>
        </div>
        <div style="display: flex; margin: 0">
            <p style="margin: 10px 30px; font-weight: bold">Other:</p>
            <p style="margin: 10px">{{$detail->description}}</p>
        </div>


    @endforeach

@endsection
