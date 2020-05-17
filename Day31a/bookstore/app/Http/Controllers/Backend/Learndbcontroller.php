<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Learndbcontroller extends Controller
{
    //
    public function index($action) {

        $this->$action();
    }


    /*
     * Lấy ra tất cả các bản ghi trong 1 bảng
     * */
    public function demo1() {
        echo __METHOD__;
        /** @var TYPE_NAME $users */
        $books = DB::table('books')->get();
        foreach ($books as $book) {
            echo '<pre>';
            echo $book->book_name;
            echo $book->book_intro;
        }

        echo '<br>' . DB::table('books')->toSql();

        dump($books);

        dd($books);

    }


    /*
     * Lấy ra 1 bản ghi duy nhất trong 1 bảng cách 1
     * */
    public function demo2() {
        echo __METHOD__;
        $book = DB::table('books')->where('book_status',2)->first();
        echo "br".$book->book_name;
        echo "br". DB::table('books')->where('book_status',2)->toSql();
        dump($book);
        dd($book);

    }


    /*
     * Lấy ra 1 bản ghi duy nhất trong 1 bảng cách 2
     * */
    public function demo3() {
        echo __METHOD__;
        $book = DB::table('books')->find(6);
        echo "br". $book->book_name;

        dump($book);
        dd($book);


    }

    /*
     * Lấy ra 1 danh sách các cột trong bảng
     * */
    public function demo4() {
        $book_names = DB::table('books')->pluck('book_name');

        $book_slug = DB::table('books')->pluck('book_slug');


        dump($book_names);


        dump($book_slug);
    }


    /*
     * count() max() avg()
     * */
    public function demo5() {
        DB::enableQueryLog();

        $book = DB::table('books')->count();

        dump($book);
        $price = DB::table('books')->max('id');
        dump($price);
        dump( DB::getQueryLog());


    }

    /*
    * select db
    * */
    public function demo6() {
        DB::enableQueryLog();
        $books = DB::table('books')->select('book_name', 'book_images as anhcuasach')->get();
         dump($books);
        dump( DB::enableQueryLog());

    }


    /*
    * Raw query
    * */
    public function demo7() {

        DB::enableQueryLog();
        $users = DB::table('books')
            ->select(DB::raw('book_author,count(*) as total'))
            ->groupBy('book_author')
            ->get();
        dump($users);
        dump( DB::getQueryLog());
    }


    /*
    * Join laravel
    * */
    public function demo8() {
        DB::enableQueryLog();
        $books = DB::table('books')
            ->select('books.book_name', 'books.book_author', 'users.email as email_tac_gia')
            ->leftJoin('users', 'users.name', '=', 'books.book_author')
            ->get();
        dump($books);

        dump(DB::getQueryLog());

    }


    /*
    * Join laravel
    * */
    public function demo9() {
        DB::enableQueryLog();
        $users = DB::table('books')
            ->where('book_author', 'like', 'T%')
            ->get();
        dump($users);
        dump(DB::getQueryLog());

    }


    /*
    * Where 1
    * */
    public function demo10() {
        DB::enableQueryLog();
        $users = DB::table('books')
            ->where([
                ['book_author', 'like', 'T%'],
                ['book_status', '=', '6'],

        ])

            ->get();
        dump($users);
        dump(DB::getQueryLog());

    }


    /*
   * Where 2
   * */
    public function demo11() {
        DB::enableQueryLog();
        $users = DB::table('books')
            ->where('book_author', 'like', 'T%')
            ->orwhere('book_name','=','Warren Lindsay')

            ->get();
        dump($users);
        dump(DB::getQueryLog());
    }


    /*
  * Order
  * */
    public function demo12() {
        DB::enableQueryLog();
        $users = DB::table('books')
            ->orderBy('book_name', 'desc')
            ->get();
        dump($users);
        dump(DB::getQueryLog());

    }


    /*
  * Group
  * */
    public function demo13() {
        DB::enableQueryLog();
        $users = DB::table('books')
            ->groupBy('id')
            ->where('id', '>', 2)
            ->get();
        dump($users);
        dump(DB::getQueryLog());
    }


    /*
  * Inssert
  * */
    public function demo14() {
        DB::enableQueryLog();
       $user= DB::table('users')->insert(
            ['id'=>4,'name'=>'trung','email' => 'john@example.com', 'password'=>'123']
        );
       dump($user);
        dump(DB::getQueryLog());
    }



    /*
  * Update
  * */
    public function demo15() {
        DB::enableQueryLog();
        $affected = DB::table('users')
            ->where('id', 1)
            ->update(['email' => 'anb@gmal']);
        dump($affected);
        dump(DB::getQueryLog());
    }


    /*
 * Delete
 * */
    public function demo16() {
        DB::enableQueryLog();
//        DB::table('users')->delete();

        DB::table('users')->where('id', '>', 5)->delete();
        dump(DB::getQueryLog());

    }



    /*
 * Bebug
 * */
    public function demo17() {
        DB::enableQueryLog();
        $sss=DB::table('books')->where('id', '>', 5)
        ->dd();
        DB::enableQueryLog();
    }
}
