@extends('admin.index')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <button type="button" class="btn btn-primary add-btn" data-toggle="modal" data-target="#add_gallery">
            სურათის დამატება
        </button>
        <hr class="my-4">
        <div class="mb-5 row">
            @foreach ($galleries as $gallery)
                <div class="col-xl-3 col-sm-12">
                    <div class="mb-3 card">
                        <div class="row g-0">
                            <div class="p-2 col-md-12">
                                <img class="card-img card-img-left" src="../assets/image/{{ $gallery->image }}"
                                    alt="Card image" />
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-delete" data-toggle="modal"
                            data-target="#delete_{{ $gallery->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- delete gallery --}}
                <div class="modal fade" id="delete_{{ $gallery->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">სურათის წაშლა</h5>
                                <button type="button" class="close btn btn-primary" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action='{{ route('destroy.gallery', $gallery->id) }}' method='post'
                                    enctype=multipart/form-data>
                                    @csrf
                                    @method('DELETE')
                                    <p>დარწმუნებული ხართ რომ გსურთ სურათის წაშლა</p>
                                    <button type="submit" class="btn btn-primary">წაშლა</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <!-- add project -->
        <div class="modal fade" id="add_gallery" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">სურათის დამატება</h5>
                        <button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action='{{ route('store.gallery') }}' enctype='multipart/form-data' method='post'
                            enctype=multipart/form-data>
                            @csrf
                            <div class="mt-3 form-group">
                                <label for="exampleInputEmail1">სურათი</label>
                                <input type="file" name='image' class="mt-2 form-control">
                            </div>
                            <button type="submit" class="mt-3 btn btn-primary">დამატება</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @stop
