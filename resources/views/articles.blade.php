@extends('layouts.app')

@section('content')
  <!-- Blog Section -->
  <div class="section">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <div class="text-center">
              <span class="d-inline-block h5 lh-1 fw-semibold clr-base"> Browse our articles & resources </span>
              <h2 class="mt-3 mb-3"> Take a look at our latest articles and resources </h2>
              <p class="mx-auto text-center"> Have a look at the most recent articles and resources that we have. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-6">
          @foreach($articles as $article)
        <div class="col-lg-6">
          <ul class="list list-md">
            <li>
              <div class="blog-post-2">
                <a href="{{route('article',$article->id)}}" class="blog-post-2__link">
                  <img src="{{$article->photo}}" alt="image" class="blog-post-2__img">
                </a>
                <div class="blog-post-2__content">
                  <ul class="list list-row list--divider">
                    <li title="{{optional($article->category)->name}}">
                      <a href="{{route('categories',optional($article->category)->id)}}" class="t-link d-inline-block clr-base :clr-base fw-md"> {{optional($article->category)->name}} </a>
                    </li>
                    <li title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">
                      <div class="group group-xs group-row align-items-center">
                        <span class="material-symbols-rounded mat-icon solid flex-shrink-0"> alarm </span>
                        <span class="d-inline-block"> {{$article->created_at->format('F jS ,Y')}} </span>
                      </div>
                    </li>
                  </ul>
                  <h5 class="mt-3">
                    <a  href="{{route('article',$article->id)}}" class="t-link d-block clr-heading :clr-base">{{$article->title}} </a>
                  </h5>
                  <a  href="{{route('article',$article->id)}}">Read More</a>
                </div>
              </div>
            </li>
        </ul>
    </div>
    @endforeach
</div>
{{ $articles->render('pagination::articles')}}
    </div>
  </div>
  <!-- Blog Section End -->
  <!-- Help Category -->
  <div class="section bg-neutral-100">
    <div class="section__gap-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="group group-row flex-wrap gap-5 justify-content-between align-items-center">
              <h2 class="flex-grow-1"> Blog Categories </h2>
              <a href="blog-page-1.html"
                class="bttn bttn--base-outline bttn-md bttn-pill gap-2 fw-md flex-shrink-0 align-items-center"> All
                Articles <span class="material-symbols-rounded mat-icon size-16 fw-400 bttn__icon-base"> arrow_forward
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row g-6">
        @foreach($categories as $category)
        <div class="col-md-6 col-lg-4">
          <div class="help-card text-center">
            <i class="{{$category->icon}}"></i>
            <h5 class="mt-8 mb-5"> {{$category->name}} </h5>

          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Help Category End -->
  <!-- Latest Post --
  <div class="section">
    <div class="section__gap-bottom">
      <div class="container-xl">
        <div class="row g-4 align-items-lg-end">
          <div class="col-lg-5">
            <h2> Latest Posts </h2>
          </div>
          <div class="col-lg-7">
            <ul class="list list-row flex-wrap justify-content-lg-end list--divider list-group">
              <li>
                <a class="tab-button active" href="#all-post" data-bs-toggle="list"> All </a>
              </li>
              <li>
                <a class="tab-button" href="#design-post" data-bs-toggle="list"> Design </a>
              </li>
              <li>
                <a class="tab-button" href="#development-post" data-bs-toggle="list"> Development </a>
              </li>
              <li>
                <a class="tab-button" href="#marketing-post" data-bs-toggle="list"> Marketing </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="all-post">
              <div class="row g-6">
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-9.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Web
                            Development </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Roadmap to becoming
                          a Front-end Developer in 2023 </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-10.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthcare </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> What types of
                          healthcare software should you know? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-11.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> People
                          </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Flutter Wrocław
                          Meetup x itechex vol. 3 – Event Recap </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-12.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-13.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-14.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Product
                            design </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> How to maximize
                          product trust in the design process? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="design-post">
              <div class="row g-6">
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-9.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Web
                            Development </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Roadmap to becoming
                          a Front-end Developer in 2023 </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-10.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthcare </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> What types of
                          healthcare software should you know? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-11.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> People
                          </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Flutter Wrocław
                          Meetup x itechex vol. 3 – Event Recap </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-12.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-13.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-14.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Product
                            design </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> How to maximize
                          product trust in the design process? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="development-post">
              <div class="row g-6">
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-9.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Web
                            Development </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Roadmap to becoming
                          a Front-end Developer in 2023 </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-10.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthcare </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> What types of
                          healthcare software should you know? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-11.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> People
                          </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Flutter Wrocław
                          Meetup x itechex vol. 3 – Event Recap </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-12.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-13.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-14.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Product
                            design </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> How to maximize
                          product trust in the design process? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="marketing-post">
              <div class="row g-6">
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-9.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Web
                            Development </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Roadmap to becoming
                          a Front-end Developer in 2023 </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-10.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthcare </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> What types of
                          healthcare software should you know? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-11.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> People
                          </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Flutter Wrocław
                          Meetup x itechex vol. 3 – Event Recap </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-12.png" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-13.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md">
                            Healthtech </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> Impact of Machine
                          Learning on the HealthTech industry </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="blog-post-1">
                    <a href="blog-details-1.html" class="blog-post-1__link">
                      <img src="assets/images/blog-post-14.jpg" alt="image" class="blog-post-1__img">
                    </a>
                    <div class="blog-post-1__body">
                      <ul class="list list-row list--divider">
                        <li>
                          <a href="blog-details-1.html" class="t-link d-inline-block clr-base :clr-base fw-md"> Product
                            design </a>
                        </li>
                        <li>
                          <div class="group group-xs group-row align-items-center">
                            <span class="material-symbols-rounded mat-icon solid flex-shrink-0 clr-base"> alarm </span>
                            <span class="d-inline-block"> May 22, 2023 </span>
                          </div>
                        </li>
                      </ul>
                      <h5 class="mt-5 mb-5">
                        <a href="blog-details-1.html" class="t-link clr-heading :clr-base d-block"> How to maximize
                          product trust in the design process? </a>
                      </h5>
                      <p class="mb-5"> Rutrum consequat ultricies leo eu volutpat neque volutpat iaculis dignissim. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Latest Post End -->
  <!-- CTA  -->
  <div class="section pt-0">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cta-banner bg-base rounded-5">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="section__gap-bottom pb-md-0">
                  <h3 class="clr-light mb-6"> Subscribe to our weekly email newsletter </h3>
                  <p class="clr-light mb-6"> Need more information? Subscribe to Newsletter & Get Update and News </p>
                  <div class="newsletter-2 newsletter-2--light max-text-50">
                    <input type="text" class="newsletter-2__input" placeholder="Enter your email">
                    <button class="bttn bttn--light bttn-md fw-md flex-shrink-0 rounded-1 newsletter-2__btn"> subscribe
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="text-center">
                  <img src="{{asset('website/assets/images/cta-img-2.png')}}" alt="image" class="img-fluid mx-auto">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CTA End  -->
  {{--
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1 title="المقالات">المقالات</h1>
                <ul>
                    <li><a href="{{route('home')}}" title="الرئيسية">الرئيسية</a></li>
                    @if($request->keyword)
                    <li><a href="{{route('articles')}}" title="المقالات">المقالات</a></li>
                    <li class="active" title="{{$request->keyword}}">{{$request->keyword}}</li>
                    @else
                    <li class="active" title="المقالات">المقالات</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="{{asset('website/assets/images/page-title-shape-1.png')}}" alt="المقالات">
        </div>
        <div class="shape shape-2">
            <img src="{{asset('website/assets/images/page-title-shape-2.png')}}" alt="المقالات">
        </div>
    </div>
    <section class="blog-page-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($articles as $article)
                        <div class="col-lg-12">
                            <div class="single-blog-box">
                                <a href="{{route('article',$article->id)}}"><img src="{{$article->photo}}" alt="{{$article->title}}"></a>
                                <ul>
                                    <li title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}"><i class="ri-calendar-line"></i>{{$article->created_at->format('F jS ,Y')}}</li>
                                    <a href="{{route('categories',optional($article->category)->id)}}"><li title="{{optional($article->category)->name}}">{{optional($article->category)->name}}</li></a>
                                </ul>
                                <h2><a href="{{route('article',$article->id)}}" title="{{$article->title}}">{{$article->title}}</a></h2>
                                <a href="{{route('article',$article->id)}}" class="read-more">مشاهدة المزيد<i class="ri-add-circle-fill"></i></a>
                            </div>
                        </div>
                        @endforeach
                            {{ $articles->render('pagination::articles')}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        <div class="sidebar-widget search">
                            <form action="" method="get" class="search-form">
                                <input class="form-control" name="keyword" value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" placeholder="البحث ..." type="text">
                                <button class="search-button" type="submit">
                                    <i class="ri-search-line"></i>
                                </button>
                            </form>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>الأقسام</h3>
                            <ul>
                                @foreach($categories as $category)
                                <li>
                                    <a href="{{route('categories',$category->id)}}"> {{$category->name}} <i class="ri-arrow-right-line"></i>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="sidebar-widget recent-post">
                            <h3 class="widget-title">المقالات الأعلى مشاهدة</h3>
                            <ul>
                                @foreach($articlesPopular as $article)
                                <li>
                                    <a href="{{route('article',$article->id)}}">{{$article->title}}
                                        <img src="{{$article->photo}}" width="100" height="100" alt="{{$article->title}}">
                                    </a>
                                    <span title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">{{$article->created_at->format('F jS ,Y')}}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
@endsection
