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
                        @foreach($posts->posts as $Post)
                            <tr>
                                <th scope="row">{{ $Post->Id }}</th>
                                <td>{{ $Post->title }}</td>
                                <td>{{ $Post->posted_by }}</td>
                                <td>{{ $Post->created_at }}</td>
                                <td>
                                    {{-- <button class="btn btn-primary btn-sm" onclick="location.href='/allPosts'">retern</button>
                                    <form action="{{ route('post.update', $Post->Id) }}" style="display: inline-block;">
                                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                    </form>
                                    <form action="{{route('post.destroy',$Post->Id)}}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf()
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form> --}}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    @include('footer')


</body>
</html>
