@extends('layouts.admin-master')

@section('style')
   <link rel="stylsheet" href="{{ URL::secure('src/css/modal.css') }}" type="text/css" />
@endsection 


@section('content')
    <div class="container">
        @include('includes.info-box')
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li> <a href="" class="btn">New Post</a></li>
                        <li> <a href="" class="btn">Show all Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    <!-- If no Posts ... -->
                    <li>No Posts</li>
                    <!-- If Posts -->
                    <li>
                        <article>
                            <div class="post-info"></div>
                                <h3>Post Title</h3>
                                <span class="info">Post Author | Date</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="">View Post</a></li>
                                        <li><a href="">Edit</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                </ul>
            </section>
        </div>
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li> <a href="" class="btn">Show all Posts</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    <!-- If no Messages ... -->
                    <li>No Message</li>
                    <!-- If Messages -->
                    <li>
                        <article data-message="Body" data-id="ID">
                            <div class="message-info"></div>
                                <h3>Message Subject</h3>
                                <span class="info">Sender: ... | Date</span>
                            </div>
                            <div class="edit">
                                <nav>
                                    <ul>
                                        <li><a href="">View</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </article>
                </ul>
            </section>
        </div>
    </div>
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>
@endsection 

@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{ URL::secure('src/js/modal.js')}}"></script>
    <script type="text/javascript" src="{{ URL::secure('src/js/contact_messages.js')}}"></script>
@endsection

