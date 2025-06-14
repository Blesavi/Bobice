<div class="row wrapper border-bottom white-bg page-heading page-heading-our">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-11">
                <h1>{{ $headerName }}</h1>
            </div>
        </div>
    </div>
</div>

@section('scriptsNavBar')
    <script>

        // window.onload = function () {
        if (typeof history.pushState === "function") {
            history.pushState("jibberish", null, null);
            window.onpopstate = function () {
                history.pushState('newjibberish', null, null);
                // Handle the back (or forward) buttons here
                // Will NOT handle refresh, use onbeforeunload for this.
            };
        }
        else {
            var ignoreHashChange = true;
            window.onhashchange = function () {
                if (!ignoreHashChange) {
                    ignoreHashChange = true;
                    window.location.hash = Math.random();
                    // Detect and redirect change here
                    // Works in older FF and IE9
                    // * it does mess with your hash symbol (anchor?) pound sign
                    // delimiter on the end of the URL
                }
                else {
                    ignoreHashChange = false;
                }
            };
        }
        //}
    </script>
@endsection