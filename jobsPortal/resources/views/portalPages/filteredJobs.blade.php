@extends('layouts.main')
@section('content')
    <table class="table" style="width: 100%">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Company</th>
            <th scope="col">Published</th>
            <th scope="col">Deadline</th>
            <th scope="col"></th>
        </tr>


        @foreach($jobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->category->category_title}}</td>
                <td>{{$job->company}}</td>
                <td>{{$job->published}}</td>
                <td>{{$job->deadline}}</td>
                <td><a href="/job_details/{{$job->id}}">details</a></td>
            </tr>
        @endforeach

    </table>
@endsection
