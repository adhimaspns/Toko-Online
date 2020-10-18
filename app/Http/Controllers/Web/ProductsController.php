<?php

namespace App\Http\Controllers\Web;


//? Use DB
use DB;
//? Storage
use Storage;
use App\Http\Controllers\Controller;
//? Use Model ImagesProduct
use App\Models\ImagesProduct;
//? Use Model Product
use App\Models\Product;
//? Use Request
use Illuminate\Http\Request;

use PhpParser\Node\Stmt\TryCatch;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				//? Menampilkan data product dengan paginate
				$product = Product::paginate(10);

				//?Menampilkan view dan parsing data
				return view('admin.master.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //? Menampilkan Form input dara product
        return view('admin.master.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

			//? Jika kita berinteraksi lebih dari 1 tabel, jika ada interaksi ada yang gagal, data tersebut akan di kembalikan atau data tidak di simpan atau di rubah istilahnya adalah Rollback
			DB::beginTransaction();

			try {
					//? Menyimpan Data ke Database
					$product = Product::create(
							[
									//?kolom di tabel => inputan->user
									'product' => $request->product,
									'price' => $request->price,
									'stock' => $request->stock,
									'description' => $request->description
							]
					);

					//? Menyimpan Images
					if ($request->hasFile('images')) {

							//? Untuk menampung image
							$arrayImages = [];

							//?looping data
							foreach ($request->images as $value) {
									//? Menyimpan file yang di upload user ke dalam folder public/uploads
									$path = $value->store('product');

									//
									$columnsImage = [
											'product_id' => $product->id,
											'image' => $path,
									];

									//? Menangkap dari arrayImage dan menjadikan satu pada $columnsImage
									array_push($arrayImages, $columnsImage);
							}

							//? Menyimpan data
							ImagesProduct::insert($arrayImages);
					}

					DB::commit();

			} catch (\Exception $e) {
					DB::rollback();
					dd($e);
			}

      //? Mengembalikan ke halaman Index product
			return redirect()->route('product.index');

			// dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

			//? Menampilkan detail product sesuai ID yang di pilih
			$product = Product::with(['imageRelation'])->find($id);

			//? Menampilkan view dan memparsing data
			return view('admin.master.product.detail', compact('product'));


        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //? Cari data berdasarkan ID
        $product = Product::find($id);

        //? Menampilkan halaman dan parsing data
        return view('admin.master.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //? Cari data berdasarkan ID
        $product = Product::find($id);

        //? Menampilkan Images lama yang ingin di update
        $oldImages = ImagesProduct::where('product_id', $id)->get();

        //? Jika kita berinteraksi lebih dari 1 tabel, jika ada interaksi ada yang gagal, data tersebut akan di kembalikan atau data tidak di simpan atau di rubah istilahnya adalah Rollback
			DB::beginTransaction();

			try {
        //? Mengubah Data ke Database
        $product->update(
          [
            //?kolom di tabel => inputan->user
            'product' => $request->product,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description
          ]
        );

        //? Menyimpan Images
        if ($request->hasFile('images')) {

          //? Menghapus Image pada database
          ImagesProduct::where('product_id', $id)->delete();
          //? Looping untuk menghapus gambar
          // if (count($oldImages) >= 0 ) {

            // foreach ($oldImages as $old) {

              //? Menghapus gambar pada directory
              // Storage::delete($old->image);
            // }


          // }
          //? Untuk menampung image
          $arrayImages = [];

          //?looping data
          foreach ($request->images as $value) {
            //? Menyimpan file yang di upload user ke dalam folder public/uploads
            $path = $value->store('product');

            //
            $columnsImage = [
                'product_id' => $product->id,
                'image' => $path,
            ];

            //? Menangkap dari arrayImage dan menjadikan satu pada $columnsImage
            array_push($arrayImages, $columnsImage);
          }

            //? Menyimpan data
            ImagesProduct::insert($arrayImages);
					}

					DB::commit();

			} catch (\Exception $e) {
					DB::rollback();
					dd($e);
			}

			return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

          //! Jika produk dengan ID tidak di temukan
          if (!$product) {
            abort(404);
          }

        $oldImages = ImagesProduct::where('product_id', $id)->get();

        if (count($oldImages) >= 0 ) {

          foreach ($oldImages as $old) {

            Storage::delete($old->image);
          }

          ImagesProduct::where('product_id' , $id)->delete();
        }

        //? Hapus Product
        $product->delete();

        return redirect()->route('product.index');


    }
}
