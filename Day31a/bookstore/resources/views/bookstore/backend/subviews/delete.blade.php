@extends("bookstore.backend.layouts.main")

@section("title", "tạo books")
@section("content")

    <div class="row">
        <h1>Xóa sách</h1>
        <div class="col-md-12">
            <a href="{{ url("/backend/index") }}" class="btn btn-info">Quay về</a>
        </div>
        <div class="col-md-12">


            <form name="book" action="{{ url("/backend/delete/$book->id") }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>book_name</label>
                    DEMO tên sách
                </div>

                <button type="submit" class="btn btn-danger">Xóa sách</button>
            </form>
        </div>
    </div>
@endsection