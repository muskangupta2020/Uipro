@extends('admin.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">

            <div class="row">
                <div class="col-xl-9 mx-auto">

                    <h6 class="mb-0 text-uppercase">Add Social</h6>
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
                                <form class="row g-3" method="POST" action="{{ url('admin/social/update') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="id" value="{{ $data->id }}" hidden>
                                    <div class="col-md-4">
                                        <label for="validationDefault01" class="form-label">Social Image</label>
                                        <input type="file" name="image" class="form-control" id="validationDefault01">
                                        <img src="{{ $data->image }}" style="width: 100px;">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationDefault01" class="form-label">Address</label>
                                        <textarea type="text" name="link" class="form-control" id="validationDefault01">{{ $data->link }}
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
            </div>
            <!--end row-->
        </div>
    </div>

@endsection
