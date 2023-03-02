<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Posts</title>
</head>
<body>
    @include('header')
    <div class="container  mt-5">
        <a class="btn btn-primary" href="{{ route('post.create')}}">Create Post</a>
        <div class="row text-center">
            <div class="col-12">
                <h1>Posts</h1>
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
                        @foreach($Posts as $post)
                            <tr>
                                <th scope="row">{{ $post->Id }}</th>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->posted_by }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <button class="btn btn-info btn-sm" onclick="location.href='/postDetails/{{$post->Id}}'">View</button>
                                    <form action="{{ route('post.update', $post->Id) }}" style="display: inline-block;">
                                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                    </form>
                                    <form action="{{route('post.destroy',$post->Id)}}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf()
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      {{-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr> --}}
                    </tbody>
                  </table>
                  <div class="text-center justify-center">
                    {{$Posts->links()}}
                  </div>
            </div>
        </div>
    </div>








        @include('footer')
</body>
</html>
