<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <a href="{{url('terms')}}">Terms of Service</a> |
            <a href="{{url('privacy')}}">Privacy policy</a>
        </div>
        <div class="content has-text-centered">
            <div class="has-text-centered">
                Versions
                <span class="title-6">
                    <b>
                        {{\App\Helpers\Utils::getRevisionString()}}
                        / {{app()->version()}}
                    </b>
                </span>
            </div>
            <div class="has-text-centered">
                <span class="title-6">Made by <b>Bentleyworks</b></span>
                <span class="title-6">Licence: <b>Apache</b></span>
                | <a href="{{url('plain')}}">Plain version</a>
                | <a href="{{url('/')}}">Full version</a>
            </div>
        </div>
    </div>
</footer>
