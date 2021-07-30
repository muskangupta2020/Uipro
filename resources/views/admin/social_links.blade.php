@extends('admin.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="row">
                <div class="col-xl-9 mx-auto">

                    <h6 class="mb-0 text-uppercase">Add Footer</h6>
                    <hr />
                    @if (session('message') != null)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p class="alert alert-success">
                                {{ session('message') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                    @if (session('notmessage') != null)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="alert alert-danger">
                                {{ session('message') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3" method="POST" action="{{ url('admin/social/save') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-4">
                                        <label for="validationDefault01" class="form-label">Social Image</label>
                                        <input type="file" name="image" class="form-control" id="validationDefault01"
                                            required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationDefault01" class="form-label">Address</label>
                                        <textarea type="text" name="link" class="form-control" id="validationDefault01"
                                            required>
                                                                            </textarea>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase">Social links</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0 table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Social Icon Image</th>
                                        <th scope="col">link</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($link as $cat)

                                        <tr>
                                            <th >{{$loop->iteration}}</th>
                                            <td><img src="/upload/{{ $cat->image }}" style="width: 100px;">
                                            </td>
                                            <td>{{ $cat->link}}</td>

                                            <td>
                                                <a href="{{ url('social/edit/' . $cat->id) }}"><i
                                                        class="fadeIn animated bx bx-edit-alt"></i></a>
                                                <a href="{{ url('social/delete/' . $cat->id) }}"><i
                                                        class="fadeIn animated bx bx-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>

@endsection
