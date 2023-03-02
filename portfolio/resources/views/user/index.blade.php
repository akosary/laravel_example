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
                <h1>Users</h1>
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $data)
                            <tr>
                                <th scope="row">{{ $data->id }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email}}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('user.show', $data->id ) }}">Show posts</a>
                                    {{-- <form action="{{ route('post.update', $Post->Id) }}" style="display: inline-block;">
                                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                    </form> --}}

                                </td>
                                <td></td>
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
