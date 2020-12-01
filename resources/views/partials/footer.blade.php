<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @if(config('admin.show_environment'))
            <strong>Env</strong>&nbsp;&nbsp; {!! config('app.env') !!}
        @endif

        &nbsp;&nbsp;&nbsp;&nbsp;

        @if(config('admin.show_version'))
        <strong>Version</strong>&nbsp;&nbsp; {!! config('admin.version') !!}
        @endif

    </div>
    <!-- Default to the left -->
    <strong>Powered by <a href="{!! config('admin.copyright_url') !!}" target="_blank">{!! config('admin.copyright') !!}</a></strong>
</footer>