@extends('layouts.main')

@section('content')
    <form class="was-validated" action="/post_job" method="POST">

        <div class="mb-3">

            <label for="validationInput1" class="form-label" >Title</label>
            <input name="title" value="" type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="Job title" required>
            <span style="color: red">@error('title'){{$message}}@enderror</span>
        </div>

        <div>
            <label for="published">Published:</label>
            <input name="published" type="date" >
            <span style="color: red">@error('published'){{$message}}@enderror</span>
            <label for="deadline">Deadline:</label>
            <input name="deadline" type="date" >
            <span style="color: red">@error('deadline'){{$message}}@enderror</span>
        </div>

        @csrf
        <div class="mb-3">
            <label for="validationInput1" class="form-label">Company</label>
            <input name="company" value="" type="text" class="form-control is-invalid" id="exampleFormControlInput1" placeholder="Company name" required>
            <span style="color: red">@error('company'){{$message}}@enderror</span>
        </div>

        <div class="mb-3">
            <label for="validationInput1" class="form-label" >Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>

        <div class="mb-3">
            <label for="validationInput1" class="form-label">Category</label>
            <select name="category" class="form-select" required aria-label="select example">
                <option value="">Open this select menu</option>
                @foreach($categories as $category)
                    <option name="value" value="{{$category->id}}">{{$category->category_title}}</option>
                @endforeach
                <span style="color: red">@error('category'){{$message}}@enderror</span>
            </select>


        </div>

        <div class="mb-3">
            <label for="validationInput1" class="form-label">Salary</label>
            <input name="salary" value="salary" type="number" class="form-control is-invalid" placeholder="Max salary" required>
            <span style="color: red">@error('salary'){{$message}}@enderror</span>
        </div>

        <div class="mb-3">
            <label for="validationInput1" class="form-label">Description</label>
            <textarea name="description" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" style="height: 200px" required></textarea>
            <span style="color: red">@error('description'){{$message}}@enderror</span>

        </div>


        <div class="mb-3">
            <button class="btn btn-primary" type="submit" >Post job</button>
        </div>



    </form>
@endsection
