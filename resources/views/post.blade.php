@extends('layouts.default')

@section("body")
        <div class="d-flex align-items-center">
            <div class="post-image d-none d-sm-block">
                <img
                    src="/images/avatar.png"
                    alt="{{ $item->title }}"
                />
                <div class="post-author">Admin</div>
            </div>
            <div class="post-detail flex-fill">
                <div class="fw-bold text-primary">
                    {{ $item->title }}
                </div>
                <div class="post-date">
                    13:58:56 27/07/2024
                </div>
                <div class="post-content">
                    {!! $item->content !!}
                </div>
                <div class="post-info mt-2">
                    1,631 lượt xem, 0 bình luận
                </div>
            </div>
        </div>
        <hr class="my-3" />
        <div class="comment-list">
            <div class="row">
                <div
                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"
                ></div>
                <div
                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"
                >
                    <div>
                        <ul class="pagination">
                            <li class="page-item">
                                <a
                                    class="page-link"
                                    style="cursor: pointer"
                                >&lt;</a
                                >
                            </li>
                            <li class="page-item active">
                                <a
                                    class="page-link"
                                    style="cursor: pointer"
                                >1</a
                                >
                            </li>
                            <li class="page-item">
                                <a
                                    class="page-link"
                                    style="cursor: pointer"
                                >&gt;</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
