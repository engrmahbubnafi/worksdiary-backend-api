@if ($slot && $slot->toHtml())
    <div class="engage-toolbar d-flex position-fixed px-5 fw-bolder zindex-2 top-50 end-0 transform-90 mt-20 gap-2">
        {{ $slot }}
    </div>
@endif
