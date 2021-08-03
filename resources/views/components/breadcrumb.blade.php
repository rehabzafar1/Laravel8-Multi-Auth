<div class="col-md-12">
    <div class="heading_breadcurm">
        {{--if last URL contains create--}}
        @if((last(Request::segments())) == 'create')
            @if((substr(Request::segment(count(Request::segments()) - 1), -1) == 's'))
                <h1>Add <span class="text-capitalize">{{ substr(Request::segment(count(Request::segments()) - 1), 0, -1) }}</span></h1>
            @else
                <h1>Add <span class="text-capitalize">{{ Request::segment(count(Request::segments()) - 1) }}</span></h1>
            @endif
            {{--if current function is show--}}
        @elseif(substr(request()->route()->getAction()['controller'], strpos(request()->route()->getAction()['controller'], "@") + 1) == 'show')
            @if((substr(Request::segment(count(Request::segments()) - 1), -1) == 's'))
                <h1> {{ substr(Request::segment(count(Request::segments()) - 1), 0, -1) }} Detail</h1>
            @else
                <h1> {{ Request::segment(count(Request::segments()) - 2) }} Detail</h1>
            @endif
            {{--if last URL contains edit--}}
        @elseif(last(Request::segments()) == 'edit')
            @if((substr(Request::segment(count(Request::segments()) - 1), -1) == 's'))
                <h1>Edit <span class="text-capitalize">{{ substr(Request::segment(count(Request::segments()) - 1), 0, -1) }}</span></h1>
            @else
                <h1>Edit <span class="text-capitalize">{{ Request::segment(count(Request::segments()) - 2) }}</span></h1>
            @endif
            {{--if last URL contains contains '-'--}}
        @elseif(strstr(last(Request::segments()), '-'))
            <h1><span class="text-capitalize">{{ str_replace('-', ' ', strtolower(last(Request::segments()))) }}</span></h1>
        @else
            <h1><span class="text-capitalize">{{ last(Request::segments()) }}</span></h1>
        @endif
        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb">
                {{--if last URL contains create--}}
                @if((last(Request::segments())) == 'create')
                    @for ($i = 2; $i <= count(Request::segments()) - 1; $i++)
                        <li class="breadcrumb-item {{ $i == count(Request::segments()) ? 'active' : '' }}">
                            @if (strstr(Request::segment($i), '-'))
                                <a href="javascript:void(0)">{{ str_replace('-', ' ', strtolower(Request::segment($i))) }}</a>
                            @else
                                <a href="javascript:void(0)">{{ Request::segment($i) }}</a>
                            @endif
                        </li>
                    @endfor
                    {{--if current function is show--}}
                @elseif(substr(request()->route()->getAction()['controller'], strpos(request()->route()->getAction()['controller'], "@") + 1) == 'show')
                    @for ($i = 2; $i <= count(Request::segments()) - 1; $i++)
                        <li class="breadcrumb-item {{ $i == count(Request::segments()) ? 'active' : '' }}">
                            @if (strstr(Request::segment($i), '-'))
                                <a href="javascript:void(0)">{{ str_replace('-', ' ', strtolower(Request::segment($i))) }}</a>
                            @else
                                <a href="javascript:void(0)">{{ Request::segment($i) }}</a>
                            @endif
                        </li>
                    @endfor
                    {{--if last URL contains edit--}}
                @elseif((last(Request::segments())) == 'edit')
                    @for ($i = 2; $i <= count(Request::segments()) - 2; $i++)
                        <li class="breadcrumb-item {{ $i == count(Request::segments()) ? 'active' : '' }}">
                            @if (strstr(Request::segment($i), '-'))
                                <a href="javascript:void(0)">{{ str_replace('-', ' ', strtolower(Request::segment($i))) }}</a>
                            @else
                                <a href="javascript:void(0)">{{ Request::segment($i) }}</a>
                            @endif
                        </li>
                    @endfor
                    {{--if last URL contains dashboard--}}
                @elseif((last(Request::segments())) == 'dashboard')

                @else
                    {{--else--}}
                    @for ($i = 2; $i <= count(Request::segments()); $i++)
                        <li class="breadcrumb-item {{ $i == count(Request::segments()) ? 'active' : '' }}">
                            @if (strstr(Request::segment($i), '-'))
                                <a href="javascript:void(0)">{{ str_replace('-', ' ', strtolower(Request::segment($i))) }}</a>
                            @else
                                <a href="javascript:void(0)">{{ Request::segment($i) }}</a>
                            @endif
                        </li>
                    @endfor
                @endif
            </ol>
        </nav>
    </div>
</div>
<div class="separator_bdcm mb-5"></div>
