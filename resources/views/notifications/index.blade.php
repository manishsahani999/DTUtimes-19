@extends('layouts.app')

@section('content')
    <section class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <h1>Notifications</h1>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="process-1">
                        {{-- @foreach ($stories as $item) --}}
                        <div class="process__item">
                            <h4>Title here
                                <br> <span><small>time here</small></span>
                                {{-- <br> <span><small>{{ $item->created_at->diffForHumans() }}</small></span> --}}
                            </h4>
                            <p>
                                {{-- {{ $item->biliner }} --}}
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid facere adipisci odio aut eos, autem, beatae, dolor fugit harum officia omnis amet placeat aliquam impedit sit magnam alias. Repellendus, hic.
                            </p>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                    <!--end process-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection