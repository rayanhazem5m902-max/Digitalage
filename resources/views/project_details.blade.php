<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->name }} | Digital Age</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: #fff;
        }

        .back-btn {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            background: rgba(0, 240, 200, 0.9);
            color: #000;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-family: sans-serif;
            font-weight: bold;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s;
        }

        .back-btn:hover {
            background: #00f0c8;
            transform: translateY(-2px);
        }

        .project-content {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <a href="{{ route('home') }}# Portfolio" class="back-btn">رجوع للموقع</a>

    @if($project->html_content)
        {!! $project->html_content !!}
    @else
        <div class="project-content">
            <h1>{{ $project->name }}</h1>
            <p><strong>Category:</strong> {{ $project->service->name }}</p>
            @if($project->image)
                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}"
                    style="max-width: 100%; border-radius: 10px;">
            @endif
            <div style="margin-top: 20px;">
                {{ $project->description }}
            </div>
        </div>
    @endif
</body>

</html>