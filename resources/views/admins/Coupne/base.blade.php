@extends('admins/admin.app')


@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection
<!--  @foreach($coupneInfo as $coupneInfos)
                                          

                                            @if($coupneInfos->status==1)
                                            @if($coupneInfos->type==1)

                                            ${{$totalPrice+$coupneInfos->price}}.00

                                            @else

                                            ${{($totalPrice*$coupneInfos->price)/100 +$totalPrice}}.00

                                            @endif
                                            @endif
                                            @endforeach
                                            @endif -->