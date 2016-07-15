@if (count($articles))
    <li class="dropdown">
    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
        <i class="fa fa-envelope"></i>
        <span class="label label-warning">{{ count($articles) }}</span>
    </a>
    <ul class="dropdown-menu dropdown-messages">
        @foreach ($articles as $article)
            <li>
                <div class="dropdown-messages-box">
                    <span class="pull-left">
                        <img alt="image" class="img-circle" src="{{ $article->image }}">
                    </span>
                    <div class="media-body">
                        <small class="pull-right">{{ \Carbon\Carbon::createFromTimestamp($article->date) }}</small>
                        <strong>{!! $article->title !!}</strong>
                        <p>
                            {!! $article->content !!}
                        </p>
                    </div>
                </div>
            </li>
            <li class="divider"></li>
        @endforeach
    </ul>
</li>
@endif
