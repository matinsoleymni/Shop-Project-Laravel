<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.head-tags")
    @yield("haedTags")
</head>
<body dir="rtl">
    @include("layouts.header")

    <section class="body-container">
        @include("layouts.sidebar")

        <section id="main-body" class="main-body">
            @yield("content")
        </section>

    </section>
    @include("layouts.scripts")
</body>
</html>