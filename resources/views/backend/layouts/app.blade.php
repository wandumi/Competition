@include("backend.layouts.header")

@include("backend.layouts.sidebar")

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">

        @include("backend.layouts.topbar")

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">

            @yield("content")


            @include("backend.layouts.modal")

        </div>
        <!---Container Fluid-->
    </div>
    <!-- Footer -->
@include("backend.layouts.footer")
