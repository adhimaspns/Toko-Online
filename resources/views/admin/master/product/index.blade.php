@extends('template.app')

@section('pagetitle','Data Product')


@section('content')
<!-- Default box -->
  <div class="box box-primary">
    <div class="box-body">
      {{-- Tombol Kembali ke index --}}
        <div>
          <a href="{{ route('product.create')}}" class="btn btn-sm btn-primary">
            <span class="fa fa-plus"></span> Tambah Data
          </a>
        </div>
        <div class="table">
          <table class="table table-striped table-hover table-responsive" id="table">
            <thead>
              <tr>
                <th>No.</th>
                <th> Product</th>
                <th> Price</th>
                <th> Stock</th>
                <th> Image</th>
                <th> Opsi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($product as $index => $item)
                <tr>
                  <td>{{ $index + $product->firstItem()}}</td>
                  <td>{{ ucfirst($item->product) }}</td>
                  <td>{{ "Rp. ".number_format($item->price,0,'.','.')}}</td>
                  <td>{{ $item->stock}}</td>
                  <td>
                    <img src="{{ URL::asset('uploads/' . $item->latestImage()->first()->image)}}" alt="" width="240px" height="120px" style="background-size: cover">
                  </td>
                  <td>
                    <a href="{{ route('product.show', $item->id)}}" class="btn btn-sm btn-primary">
                      <span class="fa fa-external-link"></span>
                    </a>

                    <a href="{{ route('product.edit', $item->id)}}" class="btn btn-sm btn-warning">
                      <span class="fa fa-edit"></span>
                    </a>

                    <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-sm btn-danger">
                      <span class="fa fa-trash"></span>

                      <form action="{{ route('product.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('delete')
                      </form>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{-- Link untuk paginate --}}
          <div class="pull-right">
            {!! $product->links() !!}
          </div>
        </div>
      </div>
      <!-- /.box-body -->
@endsection