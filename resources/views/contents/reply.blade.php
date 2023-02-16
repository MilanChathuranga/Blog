@foreach($childs as $parent)
    <div class="comment-box-reply">
        <div class="comment-author-thumbnail">
            <img src="images/team-members/03_team-member-04.png" alt="Habu">
        </div>
        <div class="comment-body">
            <div class="comment-details">
                <a href="blog.html">
                    <span id="comment_id" hidden>{{$comment->id}}</span>
                    <h3>{{$parent->title}}</h3>
                </a>
                <a href="blog.html" class="comment-date">{{$parent->published_at}}</a>
                {{--                <a href="blog.html" class="comment-date">July 06th, 2017</a>--}}
            </div>
            <div class="main-comment">
                <p>{{$parent->content}}</p>
                <button id="{{$parent->id}}" class="reply_btn">REPLY</button>
                <div class="comment-form reply_form" id="reply_div{{$parent->id}}">
                    <div class="row">
                        <div class="row">
                            <div class="col-xl-6">
                                <input id="commenter{{$parent->id}}" type="text" placeholder="Name">
                            </div>
                            <div class="col-sm-6 float-right">
                                <button id="{{$parent->id}}" class="large-white-button save_reply">Reply
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-11">
                            <textarea id="comment_body{{$parent->id}}" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            @if($parent->childs->isNotEmpty())
                @include('contents.reply', [
                    'childs' => $parent->childs
                ])
            @endif
            <div id="pid{{$parent->id}}">

            </div>

        </div>
    </div>

@endforeach


