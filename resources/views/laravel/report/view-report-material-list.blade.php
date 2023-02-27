@extends('layouts.app-reports')
    @section('content-report')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-10 mx-auto">
                <form class="" action="index.html" method="post">
                    <div class="card">
                        <div class="text-center">
                            <div style = "position:relative;" class="row justify-content-between">
                                <div class="col-md-4 text-start d-flex justify-content-center flex-md-column">
                                    <h3>Lista de Stock Real</h3>
                                    <h6>
                                        MUFICA SA de CV
                                    </h6>
                                    <p class="d-block text-secondary">{{ Carbon\Carbon::today()->toDateString()}}</p>
                                </div>
                                <div style = "position:absolute; left:35%; top:0;">
                                    <img class="w-25 " src="./assets/img/logos/duhart/isotipo.jpg" alt="Logo">
                                </div>
                            </div>
                            <br>
                            <hr />
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="table-responsive border-radius-lg">
                                        <table class="table text-right">
                                            <thead class="bg-default">
                                                <tr>
                                                    <th style = "padding:1.25rem 0.75rem 1.25rem 0.75px" scope="col" class=" col-md-3 text-white text-center" colspan="1">Nombre</th>
                                                    <th style = "padding:1.25rem 0.75px 1.25rem 0.75px" scope="col" class="pe-2 col-md-3 text-white text-start" colspan="1">Unidad</th>
                                                    <th style = "padding:1.25rem 0.75px 1.25rem 0.75px" scope="col" class="pe-2 col-md-3 text-white text-center" colspan="1">Stock</th>
                                                    <th style = "padding:1.25rem 0.75px 1.25rem 0.75px" scope="col" class="pe-2 col-md-4 text-white text-center" colspan="2">P.U</th>
                                                    <th style = "padding:1.25rem 0.75px 1.25rem 0.75px" scope="col" class="pe-2 col-md-4 text-white text-center"colspan="2">Monto</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $sumAllProductsStock = 0;
                                                @endphp
                                                @foreach($materialList as $item)
                                                @php
                                                    $mount = $item->unitaryPrice * $item->stock;
                                                    $sumAllProductsStock += $mount;
                                                @endphp
                                                    <tr>
                                                        <td style="white-space: pre-wrap; border-bottom:.5px solid; padding:10px; " class="col-md-3 text-start" colspan="1">{{$item->nameMaterial}}</td>
                                                        <td style="white-space: pre-wrap; border-bottom:.5px solid; padding:10px;" class="ps-2  col-md-3 text-center" colspan="1">{{$item->unity}}</td>
                                                        <td style="white-space: pre-wrap; border-bottom:.5px solid; padding:10px;" class="ps-2 col-md-3 text-center"colspan="1">{{$item->stock}}</td>
                                                        <td style="white-space: pre-wrap; border-bottom:.5px solid; padding:10px;" class="ps-2  col-md-4 text-center" colspan="2">$ {{$item->unitaryPrice}}</td>
                                                        <td style="white-space: pre-wrap; border-bottom:.5px solid; padding:10px;" class="ps-2  col-md-4 text-center"colspan="2">$ {{ $mount }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <br>
                                            <tfoot >
                                                <tr>
                                                    <th colspan="2"></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="h5 ps-4" >Total</th>
                                                    <th colspan="1" class="text-right h5 ps-4">$ {{$sumAllProductsStock}}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        
                        {{-- ImgFooter --}}
                        <div class="card-footer">
                            <div style ="position:relative;" class="">
                                <div class=" text-left">
                                    <h5>Lista de materiales</h5>
                                    <p class="text-secondary text-sm">{{ Carbon\Carbon::today()->toDateString()}}</p>
                                </div>
                                <div style="right:120px; position:absolute; top:0px;" class="text-right">
                                    <h5>Total de materiales:</h5>
                                </div>
                                <div style="right:50px; position:absolute; top:5px;" class="text-right">
                                    <p class="text-secondary text-sm">{{count($materialList)}}</p>
                                </div>
                            </div>
                            <hr>
                            <div  class="positon:relative; h-25">
                                <div style= "position:absolute;  left: 45%;">
                                    <img class="w-25 " src="./assets/img/logos/duhart/duhart-logo.jpg" alt="logo-footer">
                                </div>
                            </div>
                            <div>
                                <script type="text/php">
                                    if ( isset($pdf) ) {
                                        $x = 530;
                                        $y = 810;
                                        $text = "{PAGE_NUM} de {PAGE_COUNT}";
                                        $font = $fontMetrics->get_font("helvetica", "bold");
                                        $size = 9;
                                        $color = array(0,0,0);
                                        $word_space = 0.0;  //  default
                                        $char_space = 0.0;  //  default
                                        $angle = 0.0;   //  default
                                        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
@endsection