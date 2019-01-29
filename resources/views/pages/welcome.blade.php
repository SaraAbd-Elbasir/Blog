@extends('main')

@section('title', 'Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Hello in My Blog</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my latest post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
        </div>
    </div> <!-- end of header .row -->
    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)

            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p> {{ substr(strip_tags($post->body), 0, 300) }} {{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }} </p>
                <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            @endforeach

            <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, odio corpora accusamus sit in, ea per dolores legendos intellegam. Pro tantas sadipscing in. Ex dicunt argumentum mei, ne mei eius docendi. Est no populo mucius omittam, ea eos nibh cibo veritus, ad solet iudicabit dissentiunt vel. Et sit enim doming.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, odio corpora accusamus sit in, ea per dolores legendos intellegam. Pro tantas sadipscing in. Ex dicunt argumentum mei, ne mei eius docendi. Est no populo mucius omittam, ea eos nibh cibo veritus, ad solet iudicabit dissentiunt vel. Et sit enim doming.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>
                    Lorem ipsum dolor sit amet, odio corpora accusamus sit in, ea per dolores legendos intellegam. Pro tantas sadipscing in. Ex dicunt argumentum mei, ne mei eius docendi. Est no populo mucius omittam, ea eos nibh cibo veritus, ad solet iudicabit dissentiunt vel. Et sit enim doming.
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <hr>

        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
            Lorem ipsum dolor sit amet, odio corpora accusamus sit in, ea per dolores legendos intellegam. Pro tantas sadipscing in. Ex dicunt argumentum mei, ne mei eius docendi. Est no populo mucius omittam, ea eos nibh cibo veritus, ad solet iudicabit dissentiunt vel. Et sit enim doming.
            Lorem ipsum dolor sit amet, odio corpora accusamus sit in, ea per dolores legendos intellegam. Pro tantas sadipscing in. Ex dicunt argumentum mei, ne mei eius docendi. Est no populo mucius omittam, ea eos nibh cibo veritus, ad solet iudicabit dissentiunt vel. Et sit enim doming.

        </div>
    </div>
@endsection