<!-- All JS -->
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/slick.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<!-- CDN Links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scripts -->
<script type="text/javascript">
    new WOW().init();
    CKEDITOR.replace('post_content_editor_edit');
    CKEDITOR.replace('post_content_editor');
    $(".reply_form").hide();

    $("#post_comment").on("click", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/blog",
            data: {
                post_id: $('#blog_detail').text(),
                parent_id: 0,
                commenter: $('#commenter').val(),
                comment_body: $('#comment_body').val(),
                _token: '{{ csrf_token() }}', is_ajax_call: true
            }, success: function (data) {
                console.log(data);
                $('#commenter'.concat(this.id)).val("");
                $('#comment_body'.concat(this.id)).val("");
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });

                if (data.success) {
                    $(".reply_form").hide();
                    // if (data.comment.parent_id === "0") {
                        $("#new_comment").append('<div class="comment-box">\
                        <div class="comment-author-thumbnail">\
                        <img src="/images/team-members/03_team-member-02.png" alt="Habu">\
                        </div>\
                    <div class="comment-body">\
                        <div class="comment-details">\
                            <a href="#">\
                                <span id="comment_id" hidden>' + data.comment.id + '</span>\
                                <h3>' + data.comment.title + '</h3>\
                            </a>\
                            <a href="#" class="comment-date">' + data.comment.published_at + '</a>\
                        </div>\
                        <div class="main-comment">\
                            <p>' + data.comment.content + '</p>\
                        </div>\
                    </div>\
                </div>')
                    // }
                }
                if (data.error) {
                    Toast.fire({
                        icon: 'error',
                        title: data.error
                    });
                }
            }
        });
    });


    $(".reply_btn").on("click", function (e) {
        $(".reply_form").hide();
        $("#reply_div".concat(this.id)).show();
    });

    $(".save_reply").on("click", function () {
        // alert(this.id);
        $.ajax({
            type: "POST",
            url: "/blog",
            data: {
                post_id: $('#blog_detail').text(),
                parent_id: this.id,
                commenter: $('#commenter'.concat(this.id)).val(),
                comment_body: $('#comment_body'.concat(this.id)).val(),
                _token: '{{ csrf_token() }}', is_ajax_call: true
            }, success: function (data) {
                console.log(data);
                $('#commenter'.concat(this.id)).val("");
                $('#comment_body'.concat(this.id)).val("");
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });

                if (data.success) {
                    $(".reply_form").hide();
                    // if (data.comment.parent_id !== 0) {
                        $("#pid".concat(data.comment.parent_id)).append('<div class="comment-box">\
                        <div class="comment-author-thumbnail">\
                        <img src="/images/team-members/03_team-member-02.png" alt="Habu">\
                        </div>\
                    <div class="comment-body">\
                        <div class="comment-details">\
                            <a href="#">\
                                <span id="comment_id" hidden>' + data.comment.id + '</span>\
                                <h3>' + data.comment.title + '</h3>\
                            </a>\
                            <a href="#" class="comment-date">' + data.comment.published_at + '</a>\
                        </div>\
                        <div class="main-comment">\
                            <p>' + data.comment.content + '</p>\
                        </div>\
                    </div>\
                </div>')
                    // }
                }
                if (data.error) {
                    Toast.fire({
                        icon: 'error',
                        title: data.error
                    });
                }
            }
        });
    })

    $("div[contenteditable='true']").each(function (index) {

        var content_id = $(this).attr('id');
        CKEDITOR.inline(content_id, {
            on: {
                blur: function (event) {
                    var data = event.editor.getData();
                    var request = jQuery.ajax({
                        url: '/blog-details',
                        type: "POST",
                        data: {
                            post_id: $('#blog_detail').text(),
                            post_content: data,
                            _token: '{{ csrf_token() }}',
                            is_ajax_call: true
                        },
                        success: function (data) {
                            console.log(data);
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                            });

                            if (data.success) {
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Post content edited Successfully'
                                });

                            }
                            if (data.error) {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Ops! You dont have Permission to edit content'
                                });
                            }
                        }
                    })
                }
            }
        });
    });
</script>

