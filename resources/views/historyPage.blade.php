@extends('Component.navbar')

@section('page_title', 'History')

@section('body')
    <div class="bg-light d-flex justify-content-center">
        <div class="bg-light" style="width: 50rem; margin-bottom: 10rem;">
            @foreach ($histories as $history)
                @php
                    $total = 0;
                    $items = 0;
                @endphp
                
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <p class="" style="">Transaction Date {{$history->created_at}}</p>
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="bg-white">
                                <table class="table bg-white">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 32.5rem;">Name</th>
                                            <th scope="col" style="width: 8rem;">Quantity</th>
                                            <th scope="col">Sub Price</th>
                                        </tr>
                                    </thead>
                                </table>
                                @foreach ($historieDetails as $detail)
                                    @if ($detail->history_id == $history->id)
                                        <table class="table bg-white">
                                            <tbody >
                                                <tr>
                                                    <td scope="row"  style="width: 32.5rem;">{{$detail->name}}</td>
                                                    <td style="width: 8rem;">{{$detail->quantity}}</td>
                                                    <td>IDR {{$detail->subtotal}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        @php
                                            $total += $detail->subtotal;
                                            $items += $detail->quantity;
                                        @endphp
                                    @endif
                                @endforeach
                                <table class="table bg-white">
                                    <thead>
                                        <tr>
                                            <th scope="col"  style="width: 32.5rem;;">Total</th>
                                            <th scope="col" style="width: 8rem;">{{$items}} item(s)</th>
                                            <th scope="col" >IDR {{$total}}</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>


@endsection