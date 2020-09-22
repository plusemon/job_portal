@extends('layouts.front')

@section('content')
<!-- Start Header Banner Area -->
<div class="jobs_banner_area">
    <div class="container">
        <div class="jobs_banner_content">
            <div class="banner_search">
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="email" placeholder="location">
                        </div>
                        <div class="form-group">
                            <select>
                                @foreach ($categories as $category)
                                <option value="">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="button_search">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Header Banner Area -->
<!-- Start JobList In Jobs Page -->
<div class="joblist_area">
    <div class="container">
        <div class="joblist">
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
<!-- End JobList In Home Page -->
@endsection