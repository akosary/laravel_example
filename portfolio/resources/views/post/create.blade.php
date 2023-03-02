<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Posts</title>
</head>
<body>
    @include('header')
    <div class="container  mt-5">
        <div class="row ">
            <div class="col-8">
                <h1>New Post</h1>
                <form method="POST" action="{{ route('post.store') }}">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Title</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Title" name="title">
                      </div>
                      <div class="form-group col-md-6">
                        {{-- <label for="inputPostedBy">Posted By</label> --}}
                        <input hidden type="text" class="form-control" id="inputPostedBy" placeholder="Posted By" value="{{Auth::user()->name}}" name="posted_by">
                      </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>
            </div>
        </div>
    </div>








        @include('footer')
</body>
</html>
