@props(['id', 'labelledby', 'title', 'content', 'data' => []])
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $labelledby }}" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content w-auto">
            <div class="modal-header">
                <h4 class="modal-title" id="{{ $labelledby }}">{{ $title }}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (!empty($data))
                    @dd($data)

                    @include($content, [$data])

                @else
                    @include($content)
                @endif

            </div>
        </div>
    </div>
</div>
