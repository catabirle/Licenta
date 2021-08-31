@extends('layouts.user')

<style>
    .container {
            max-width: 500px;
        }

        dl,
        ol,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .imgPreview img {
            padding: 8px;
            max-width: 100px;
        }
</style>
@section('content')
<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-8 offset-2 mt-5">
            <div class="card">
                <div class="card-header bg-info">
                    <h2 class="text-white, text-center"></h2>
                </div>
                <div class="card-body">

                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                        Session::forget('success');
                        @endphp
                    </div>
                    @endif

                    <form method="POST" action="{{ route('user.contact.store') }}" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Id:</strong>
                                    <input type="text" name="id_user" class="form-control" placeholder="Id" value="{{ $user_id}}">
                                    @if ($errors->has('id_user'))
                                    <span class="text-danger">{{ $errors->first('id_user') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Nume:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Nume" value="{{ $user }}">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $email }}">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Telefon:</strong>
                                    <input type="text" name="phone" class="form-control" placeholder="Telefon" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Seria WIN:</strong>
                                    <input type="text" name="series" class="form-control" placeholder="Seria" value="{{ old('series') }}">
                                    @if ($errors->has('series'))
                                    <span class="text-danger">{{ $errors->first('series') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <strong>Incarca imagine:</strong>
                            
                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @endif

                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <div class="user-image mb-3 text-center">
                                        <div class="imgPreview"> </div>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" name="imageFile" class="custom-file-input" id="images">
                                        <label class="custom-file-label" for="images">Alege imagine</label>
                                    </div>
                                

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Message:</strong>
                                <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group text-center">
                            <button class="btn btn-success btn-submit">Salvare</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script>
    $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
    });
</script>