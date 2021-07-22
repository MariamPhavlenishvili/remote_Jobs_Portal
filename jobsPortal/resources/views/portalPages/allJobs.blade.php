@extends('layouts.main')
@section('content')
    @foreach($jobs as $job)
        <form action="/test/{{$job->category_id}}">
        @endforeach
            <div style="display:flex;margin: 10px" class="mb-3">
                <label style="margin: 10px" for="validationInput1" class="form-label">Category</label>
                <select style="margin-left: 20px; width: 30%" name="category" class="form-select" required aria-label="select example">
                    <option value="">Open this select menu</option>
                    @foreach($categories as $category)
                        <option name="value" value="{{$category->id}}">{{$category->category_title}}</option>
                    @endforeach
                </select>
                <button style="margin-left: 20px" class="btn btn-primary" type="submit">search</button>
            </div>

        </form>



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
