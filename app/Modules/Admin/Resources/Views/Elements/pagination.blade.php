<div class="row">
    <div class="col-sm-5">
        <div class="dataTables_info">
            Display {{ ($pagination->perPage() * ($pagination->currentPage() - 1)) + 1 }} to {{ ($pagination->perPage() * ($pagination->currentPage() - 1)) + count($pagination->items()) }} of {{ $pagination->total() }} record
        </div>
    </div>
    <div class="col-sm-7">
        <div class="dataTables_paginate paging_simple_numbers">
            <ul class="pagination">
                <li class="prev {{ !($pagination->currentPage() > 1) ? 'disabled' : '' }}">
                    @if($pagination->currentPage() > 1)
                        <a href="{{ request()->fullUrlWithQuery(['page' => $pagination->currentPage() - 1]) }}">{{ __('prev') }}</a>
                    @else
                        <a href="javascript:void(0)">{{ __('prev') }}</a>
                    @endif
                </li>
                @for ($i = 1; $i <= $pagination->lastPage(); $i++)
                    <li class="{{ $pagination->currentPage() == $i ? 'active' : '' }}">
                        @if($pagination->currentPage() != $i)
                            <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                        @else
                            <a href="javascript:void(0)">{{ $i }}</a>
                        @endif
                    </li>
                @endfor
                <li class="next {{ !($pagination->currentPage() < $pagination->lastPage()) ? 'disabled' : '' }}">
                    @if($pagination->currentPage() < $pagination->lastPage())
                        <a href="{{ request()->fullUrlWithQuery(['page' => $pagination->currentPage() + 1]) }}">{{ __('next') }}</a>
                    @else
                        <a href="javascript:void(0)">{{ __('next') }}</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>