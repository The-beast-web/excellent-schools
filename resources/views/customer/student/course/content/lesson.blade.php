@extends('customer.student.course.content.master')

@section('lesson-video')
<div class="rbt-lesson-rightsidebar overflow-hidden lesson-video">
    <div class="lesson-top-bar">
        <div class="lesson-top-left">
            <div class="rbt-lesson-toggle">
                <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
            </div>
            <h5>The Complete Histudy 2023: From Zero to Expert!</h5>
        </div>
        <div class="lesson-top-right">
            <div class="rbt-btn-close">
                <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i class="feather-x"></i></a>
            </div>
        </div>
    </div>
    <div class="inner">
        <div class="plyr__video-embed rbtplayer">
            <iframe src="https://www.youtube.com/embed/qKzhrXqT6oE" allowfullscreen allow="autoplay"></iframe>
        </div>
        <div class="content">
            <div class="section-title">
                <h4>About Lesson</h4>
            </div>
        </div>
    </div>

</div>
@endsection