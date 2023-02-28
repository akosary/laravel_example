<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Single Post</title>

</head>
<body>
    @include('header')


    <div class="container text-center mt-5">
        <div class="row ">
            <div class="col-12">
                <h1>Post Details</h1>
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach($Post as $data) --}}
                            <tr>
                                <th scope="row">{{ $Post->Id }}</th>
                                <td>{{ $Post->title }}</td>
                                <td>{{ $Post->posted_by }}</td>
                                <td>{{ $Post->created_at }}</td>
                                <td>
                                    <button class="btn btn-primary btn-sm" onclick="location.href='/allPosts'">retern</button>
                                    <button class="btn btn-primary btn-sm" onclick="location.href='/postDetails/{{$Post->Id}}'">Edit</button>
                                    <button class="btn btn-danger btn-sm" onclick="location.href='/postDetails/{{$Post->Id}}'">Delete</button>
                                </td>

                            </tr>
                        {{-- @endforeach --}}
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    @include('footer')


</body>
</html>
