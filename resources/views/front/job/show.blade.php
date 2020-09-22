@extends('layouts.front')

@section('content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content width flex">
            <div class="jobs_banner_left flex">
                <div class="jobs_logo">
                    <img src="{{asset('/admin/assets/images/company-logo.png')}}" alt="">
                </div>
                <div class="jobs_logo_content">
                    <h2>{{ $job->title }}</h2>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>{{ $job->location }}</p>
                    </div>
                    <div class="job_post_date">
                        <i class="fas fa-calendar-week"></i>
                        <p> {{ $job->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
            <div class="jobs_banner_right">
                <p>100Tk</p>
            </div>
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Start Job Details Area -->
<div class="job_details_area">
    <div class="container flex">
        <div class="job_details_left">
            <div class="single_job_del">
                {{ $job->description }}
            </div>
            <div class="job_apply">
                <p><a href="applied_jobs">apply</a></p>
            </div>
        </div>
        <div class="job_details_right">
            <h5>Company Social</h5>
            <ul class="company_social">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Job Details Area -->
<!-- Start JobList In Jobs Page -->
<div class="joblist_area">
    <div class="container">
        <div class="joblist">
            <div class="section_title">
                <h4>related Jobs</h4>
            </div>
            @foreach ($jobs as $job)
            <a href="{{ url('job/'.$job->id) }}">
                <div class="single_job">
                    <div class="job_company_logo">
                        <img src="{{ asset('storage/'.$job->logo) }}" alt="">
                        <div class="job_title">
                            <h5>{{ $job->title }}</h5>
                            <p>{{$job->category->name}}</p>
                        </div>
                    </div>
                    <div class="job_location">
                        <i class="fas fa-map-marker"></i>
                        <p>{{$job->location}}</p>
                    </div>
                    <div class="job_type">
                        <p class="part_time">part time</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection