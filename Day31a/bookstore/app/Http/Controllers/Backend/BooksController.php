<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\BooksModel;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class BooksController extends Controller
{
    public function index(){
        $books1 = BooksModel::all();
//        echo "<pre>";
//        print_r($books1);
//        echo "</pre>";
        $data=[];
        $data["books"]= $books1;

        return view("bookstore.backend.subviews.index",$data);
    }
    public function create(){
        return view("bookstore.backend.subviews.create");
    }
    public function delete($id){
        var_dump($id);
        $book=BooksModel::find($id);
        $data=[];
        $data["book"]=$book;
        return view("bookstore.backend.subviews.delete", $data);
    }
    public function edit($id){
        var_dump($id);
        $book= BooksModel::find($id);
        $data=[];
        $data["book"]=$book;
//        print_r($book);
        return view("bookstore.backend.subviews.edit", $data);
    }


    public function store(Request $request){
    echo"<pre>";
    print_r($_POST);
    echo"</pre>";
        $book = new BooksModel();
        $book->book_name = $request->book_name;
        $book->book_slug = $request->book_slug;
        $book->book_intro = $request->book_intro;
        $book->book_desc = $request->book_desc;
        $book->book_main_image = $request->book_main_image;
        $book->book_images = $request->book_images;
        $book->book_author = $request->book_author;
        $book->book_price_core = $request->book_price_core;
        $book->book_price_sell = $request->book_price_sell;
        $book->book_status = $request->book_status;
        if($request-> File('book_images')->isValid()){

            $book->book_images = $request->book_images->store('public/images');

        }

        $book->save();
        return redirect('backend/index')->with('status', 'Đã thêm cuốn sách thành công!');
    }
    public function update(Request $request, $id) {

        $book = BooksModel::find($id);

        $book->book_name = $request->book_name;
        $book->book_slug = $request->book_slug;
        $book->book_intro = $request->book_intro;
        $book->book_desc = $request->book_desc;
        $book->book_main_image = $request->book_main_image;
        $book->book_images = $request->book_images;
        $book->book_author = $request->book_author;
        $book->book_price_core = $request->book_price_core;
        $book->book_price_sell = $request->book_price_sell;
        $book->book_status = $request->book_status;

        if($request-> File('book_images')){

            $book->book_images = $request->book_images->store('public/images');

        }
        if($request->hasFile('book_main_image')){
            foreach ($request->photos as $photo){
                $book->book_main_image = $request->book_main_image->store('public/images');

            }
        }
        $book->save();
        return redirect('backend/index')->with('status', 'Cập nhật cuốn sách thành công!');
    }
    public function destroy(Request $request, $id){

        $book = BooksModel::find($id);
      $book ::destroy($id);
        return redirect('backend/index')->with('status', 'xóa cuốn sách thành công!');
    }
    public function doUpload(Request $request)
    {
        $file = $request->filesTest;

        $file->move('upload', $file->getClientOriginalName());

        //hàm sẽ trả về đường dẫn mới của file trên server
    }

}
