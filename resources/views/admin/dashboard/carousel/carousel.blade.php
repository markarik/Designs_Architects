@extends('admin.layouts.app_dashboard')

@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Carousel</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                {{--                                <li class="breadcrumb-item"><a href="#">Maps</a></li>--}}
                                <li class="breadcrumb-item active" aria-current="page">Carousel</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#modal-form">New</a>
                        {{--                        <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button>--}}

                        {{--                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card bg-default shadow">
                    {{--                    <div class="card-header bg-transparent border-0">--}}
                    {{--                        <h3 class="text-white mb-0">Dark tabl</h3>--}}
                    {{--                    </div>--}}
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Image</th>
                                <th scope="col" class="sort" data-sort="budget">Title</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col">Description</th>
                                <th scope="col" class="sort" data-sort="completion">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($carousels as $carousel)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img src="{{asset('/files/images/carousels/' . $carousel->image_url)}}"/>
                                            {{--                                            <img src="{{asset('/images/' . $post->image)}}" width="800" height="400" />--}}
                                        </a>
                                    </div>
                                </th>
                                <td>

                                    <div class="media-body">
                                            <span class="name mb-0 text-sm">
                                                {!! $carousel->title!!}
                                            </span>
                                    </div>
                                </td>
                                <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i>
                        <span class="status">pending</span>
                      </span>
                                </td>
                                <td>

                                    <div class="media-body">
                                            <span class="name mb-0 text-sm">
                                                {!! $carousel->description!!}
                                            </span>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                                       target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                               class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>









    {{--create carousel modal--}}


    <div class="col-md-4">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
             aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">

                    <div class="modal-body p-0">
                        <div class="card bg-secondary border-0 mb-0">
                            <div class="card-body px-lg-5 py-lg-5">

                                <form role="form" method="post" action="{{route('admin.carousel.store')}}"
                                      enctype="multipart/form-data">

                                    {{csrf_field()}}
                                    <div class="form-group mb-3">
                                        <label for="image">Title</label>

                                        <div class="input-group input-group-merge input-group-alternative">

                                            <input class="form-control" name="title" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>

                                        <div class="input-group input-group-merge input-group-alternative">

                                            <textarea class="form-control" id="description" name="description"
                                                      rows="3"></textarea>
                                            {{--                                            <input class="form-control" placeholder="Password" type="password">--}}
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="image">Image</label>
                                        <div class="input-group input-group-merge input-group-alternative">

                                            <input type="file" class="form-control-file" id="image" name="image">
                                            {{--                                            <input class="form-control" name="title" placeholder="Title" type="text">--}}
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary my-4">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>

    {{--create carousel modal--}}




@endsection


@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>

@endsection