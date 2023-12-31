@extends('layouts.master')

@section('title')
    "Home"
@endsection

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <article class="p-3">
                        <h2>About</h2>
                        <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem non eveniet obcaecati consectetur enim ab voluptates praesentium laudantium fugit nam! Ratione quisquam nemo exercitationem perspiciatis repellat in saepe totam neque.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus officiis accusamus voluptate iste, porro delectus maiores libero. Animi repellat quo rem veritatis cum, libero consectetur fuga praesentium sequi dolorum molestiae!</p>
                    </article>
                </div>
                <div class="col-md-9 offset-md-3">
                    <section class="p-3">
                        <article>
                            <h2>All Post</h2>
                            
                            <div class="row">
                                @foreach ($posts as $post)
                                    <div class="col-md-4 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{$post->image}}" width="100%" alt="">
                                            <p class="mt-3">{{substr($post->title,0,30)}}</p>
                                            <a href="{{route('post',$post->id)}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </article>
                    </section>
                    <footer class="bg-dark p-4">
                        <a href="https://github.com/minhazul5000">https://github.com/minhazul5000</a>
                    </footer>
                </div>
            </div>
        </div>
    </section>
@endsection