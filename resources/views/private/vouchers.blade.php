@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <h1>Redeemed Voucher(s); <span>{{ count($vouchers) }}</span>

        </h1>

        <div class="panel panel-default">
          <table class="table">
            <thead>
              <tr>
                  <th>Voucher Code</th>
                   <th>Redeemed at</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

        @foreach ($vouchers as $voucher)

                <td scope="row">
                  {{ $voucher->voucherCode }}
                </td>
                <td>
                  {{ $voucher->created_at }}
                </td>
              </tr>




        @endforeach

      </tbody>


</table>
</div>

    </div>
</div>
@stop
