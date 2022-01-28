<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="row justify-content-center">
    <div class="col-md-6">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <label for="name">Nama Produk</label>
                                 <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
                                 @if ($errors->has('nama'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                            <label for="qty">quantity</label>
                                 <input type="number" name="qty" id="qty" class="form-control" value="{{ old('qty') }}">
                                 @if ($errors->has('qty'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('qty') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                            <label for="harga">Harga</label>
                                 <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga') }}">
                                 @if ($errors->has('harga'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('harga') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                            <label for="gambar">gamabar</label>
                                 <input type="file" accept="image/*" name="gambar" id="gambar" class="form-control" value="{{ old('gambar') }}">
                                 @if ($errors->has('gambar'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gambar') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                           
                            <a href="{{ route('product') }}" class="btn btn-secondary" >Kembali</a>
                            <button type="submit" class="btn btn-primary" id="submitButton">Save</button>
                        </div>
                    </form>
    </div>
</div>




                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>