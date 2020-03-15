@extends('frontend.template.default')
@section('content')
<h4>Detail Buku</h4>
    <div class="col s12 m12">
        <div class="card horizontal hoverable">
         <img src="{{$book->getCover()}}" >
            <div class="card-stacked">
                <div class="card-content">
                    <h4 class="red-text accent-2"> {{$book->title}}</h4>
                    <blockquote><p>{{$book->description}}</p></blockquote>

                    <p><i class="material-icons">person</i> : {{ $book->author->name }}</p>
                    <p><i class="material-icons">book</i> : {{ $book->qty }}</p>
                </div>

                <div class="card-action">
                    <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
                </div>
            </div>
        </div>
    </div> 

<h5>Buku Lainnya dari penulis {{$book->author->name}}</h5>
<div class="row">
    @foreach ($book->author->books->shuffle()->take(4) as $book)
        <div class="col s12 m6">
            <div class="card horizontal hoverable">
                    <div class="card-image">
                        <img src="{{$book->getCover()}}" height="200px">
                    </div>

                    <div class="card-stacked">
                        <div class="card-content">
                            <h6> <a href="{{route('book.show',$book)}}">{{Str::limit($book->title,30)}}</a></h6>
                            <p>{{Str::limit($book->description,100)}}</p>
                        </div>

                        <div class="card-action">
                            <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
                        </div>
                </div>
            </div>
        </div>
    @endforeach
</div> 
@endsection