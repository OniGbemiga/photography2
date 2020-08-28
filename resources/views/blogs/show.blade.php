@extends('layouts.body')

@section('content')


    <div id="colorlib-main">
        <section class="ftco-section ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text justify-content-center align-items-center">
                    <div class="col-md-8 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('index')}}">Home</a></span> <span class="mr-2"><a href="/blogs">Blog</a></span> <span>Blog Single</span></p>
                        <h1 class="bread">Blog Single</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ftco-animate">
                        <h2 class="mb-3 font-weight-bold">{{$blogs->title}}</h2>
                        <p>
                            <a href="{{asset('storage/'.$blogs->blog_image)}}" class=" img image-popup d-flex justify-content-start align-items-end" style="background-image: url('storage/'.{{$blogs->blog_image}});">
                                <img src="{{asset('storage/'.$blogs->blog_image)}}" alt="" class="img-fluid">
                            </a>
                        </p>
                        <p> {!!$blogs->message!!} </p>
                        <div class="tag-widget post-tag-container mb-5 mt-5">
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Life</a>
                                <a href="#" class="tag-cloud-link">Sport</a>
                                <a href="#" class="tag-cloud-link">Tech</a>
                                <a href="#" class="tag-cloud-link">Travel</a>
                            </div>
                        </div>
                        <div class="pt-5 mt-5">
                            <h3 class="mb-5 font-weight-bold">{{count($blogs->comments)}} Comments</h3>
                            <ul class="comment-list">
                                @foreach ($blogs->comments as $comment)    
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>{{$comment->name}}</h3>
                                            <div class="meta">{{$comment->created_at}}</div>
                                            <p>{{$comment->message}}</p>
                                            <p><button class="reply" onclick="openForm()" type="menu">Reply</button></p>
                                            {{-- <div class="form-popup" id="myForm">
                                                <form action="" class="p-3 p-md-5 bg-light">
                                                    <div class="form-group">
                                                        <label for="name">Name *</label>
                                                        <input type="text" class="form-control" id="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email *</label>
                                                        <input type="email" class="form-control" id="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message">Message</label>
                                                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn">Reply</button>
                                                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                                </form>
                                            </div> --}}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Leave a comment</h3>
                                <form action="{{route('comment')}}" class="p-3 p-md-5 bg-light" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" value="{{old('message')}}"></textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <input name="blog_id" type="hidden" value="{{$blogs->id}}">
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar ftco-animate bg-light">
                        <div class="sidebar-box">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon icon-search"></span>
                                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Fashion <span>(6)</span></a></li>
                                <li><a href="#">Technology <span>(8)</span></a></li>
                                <li><a href="#">Travel <span>(2)</span></a></li>
                                <li><a href="#">Food <span>(2)</span></a></li>
                                <li><a href="#">Photography <span>(7)</span></a></li>
                            </ul>
                        </div>
                        {{-- <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Popular Articles</h3>   
                                <div class="block-21 mb-4 d-flex">
                                    <a class="blog-img mr-4" style="background-image: url({{asset('storage/'.$blogs->blog_image)}});"></a>
                                    <div class="text">
                                        <h3 class="heading"><a href="blogs/{{$blogs->id}}">{{$blogs->title}}</a></h3>
                                        <div class="meta">
                                            <div><a href="blogs/{{$blogs->id}}"><span class="icon-calendar"></span> {{$blogs->created_at}}</a></div>
                                            <div><a href="blogs/{{$blogs->id}}"><span class="icon-chat"></span> {{count($blogs->comments)}}</a></div>
                                        </div>
                                    </div>
                                </div>
                        </div> --}}
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Tag Cloud</h3>
                            <ul class="tagcloud">
                                <a href="#" class="tag-cloud-link">animals</a>
                                <a href="#" class="tag-cloud-link">human</a>
                                <a href="#" class="tag-cloud-link">people</a>
                                <a href="#" class="tag-cloud-link">cat</a>
                                <a href="#" class="tag-cloud-link">dog</a>
                                <a href="#" class="tag-cloud-link">nature</a>
                                <a href="#" class="tag-cloud-link">leaves</a>
                                <a href="#" class="tag-cloud-link">food</a>
                            </ul>
                        </div>
                        <div class="sidebar-box subs-wrap img" style="background-image: url({{asset('images/bg_1.jpg')}});">
                            <div class="overlay"></div>
                            <h3 class="mb-4 sidebar-heading">Newsletter</h3>
                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
                            <form action="#" class="subscribe-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                    <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Archives</h3>
                            <ul class="categories">
                                <li><a href="#">October 2018 <span>(10)</span></a></li>
                                <li><a href="#">September 2018 <span>(6)</span></a></li>
                                <li><a href="#">August 2018 <span>(8)</span></a></li>
                                <li><a href="#">July 2018 <span>(2)</span></a></li>
                                <li><a href="#">June 2018 <span>(7)</span></a></li>
                                <li><a href="#">May 2018 <span>(5)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-box ftco-animate">
                            <h3 class="sidebar-heading">Paragraph</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }
            
            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
        </script>

@endsection
