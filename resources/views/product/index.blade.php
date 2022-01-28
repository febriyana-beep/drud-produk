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
    
<div class="row justify-content-center mt-4">
            <div class="col-xs-12">
    <section class="content">
        <div class="box box-solid">
            <div class="box-header with-border">
                <a href="{{ route('product.create') }}" class="btn btn-sm btn-info"><i class="fa fa-plus"> </i> Tambah Data</a>  
            </div>
            <div class="box-body">
                @if(session('msg'))
                {{ session('msg') }} 
                @endif
                <table id="datatable" class="table table-bordered table-striped table-hover dataTable" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Harga</th>
                            <th class="text-center">Gambar</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->nama }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>Rp.{{ number_format($product->harga,0) }}</td>
                                    <td><img style="width:50px" height="50px" src="{{ asset('uploads/'.$product->gambar) }}" alt=""></td>
                                    <td><a  href="{{ route('product.edit', $product->id) }}">Edit</a>| <a href="{{ route('product.delete', $product->id) }}" onclick="return confirm('Yakin akan menghapus data ini?')">Hapus</a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                   
            </table>
            </div>
        </div>
    </section>
               
                
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>