@extends('layouts.app')

@section('content')

    <div class="container pt-5 mt-5">

        <div class="col-12" style="text-align:center;color:lightseagreen">

            <div class="icon"><i class="fas fa-school fa-5x"></i></div>
            <h4 class="title">Children's Ministry</h4>

        </div>

        <div class="row">

            <div class="col-sm">
                <img class="col-12" src="/img/childrens-ministry.jpg">

                <h3 class="pt-2">A Faith-Based Early Learning Program</h3>
                <p class="description">
                    Academy at Griffin Harbor has been part of our community since 1972. Many of our parishioners grew
                    up in our preschool, and their kids did too. We have families with three generations of AGH
                    graduates as part of our community.

                    We start our students as early as 1 and will keep them enrolled until they’re ready for
                    kindergarten. We are not a daycare with supervised play. We prepare children to enter school and
                    become life-long learners.

                    Academy at Griffin Harbor is located in the church’s old parsonage. Parents can see their kids as
                    soon as they walk in the door, and are welcome to take a tour any time our school is open. We
                    welcome parents in our classrooms. We want you to see what your children are doing and how much fun
                    they’re having.
                </p>
            </div>

            <div class="col-sm">
                <h3 class="pt-2">Enrolling Your Child</h3>
                <p class="description">
                    We keep our class sizes small so your child gets the attention he or she deserves. While we are
                    usually able to bring your child into our school quickly, we do sometimes have a waiting list. For
                    more information email Cher at cr@cbcfl.org to find out when we’re accepting new students.

                    Meet our Preschool Staff
                    Meet the Academy at Griffin Harbor preschool staff.
                </p>
                <h3>Our Curriculum</h3>
                <p class="description">
                    Our students learn in a structured environment. We want them to know what to expect when they enter
                    kindergarten. Our lessons are based on your child’s age. During the day, they will learn reading,
                    math, arts and crafts, and other academics.

                    We use the A Beka preschool curriculum, which has a Christian perspective. Your child will learn to
                    be independent and self-sufficient in a healthy, faith-based environment.

                    Every Wednesday, our students attend Chapel, where they learn to experience and respect God’s house.
                    We sing, tell bible stories, dance and celebrate God together. Students bring these lessons back
                    into the classroom with them, and use them throughout the rest of the week.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('partials.preschool_staff')
            </div>
        </div>

        <div class="col-12 pt-3 align-content-center">
            <h3 class="col-6 offset-4 pl-5">Find Us On Facebook</h3>
            <p class="col-6 offset-3">
                <iframe style="border: none; overflow: hidden;"
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcbcacademydania%2F&amp;tabs=timeline&amp;width=500&amp;height=600&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId"
                        width="100%" height="700" frameborder="0" scrolling="no"></iframe>
            </p>
        </div>
    </div>


@endsection
