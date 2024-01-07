@extends('centered')


@section('content')
<div class="ct">
    <article class="quote hentry h-entry">
        <div class="body"><span class="q-body">{{$quote->body}}</span></div>

        <footer>
            &mdash; <span class="q-author">{{$quote->author}}</span>
        </footer>
    </article>
</div>
@endsection
