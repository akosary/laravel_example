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
                            <tr>
                                <form action="{{ route('product.edit',$Post->Id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <th scope="row">{{ $Post->Id }}</th>
                                    <input type="text" value="{{ $Post->Id }}" name="Id" hidden>
                                    <td><input type="text" value="{{ $Post->title }}" name="title" id=""></td>
                                    <td><input type="text" value="{{ $Post->posted_by }}" name="posted_by" id=""></td>
                                    <td><input type="datetime" value="{{ $Post->created_at }}" name="created_at" id="" disabled></td>
                                    <td>
                                        <button class="btn btn-dark btn-sm" onclick="location.href='/allPosts'">retern</button>
                                        <button type="submit" class="btn btn-primary btn-sm" >Submit</button>
                                    </td>
                                </form>
                            </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    @include('footer')


</body>
</html>
