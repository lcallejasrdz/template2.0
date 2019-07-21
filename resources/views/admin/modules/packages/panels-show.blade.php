{{-- <div id="tab1" class="tab-pane fade active in"> --}}
<div id="tab1" class="tab-pane active in">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.id') }}
                                        </th>
                                        <td>
                                            {{ $item->id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.name') }}
                                        </th>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.description') }}
                                        </th>
                                        <td>
                                            {!! $item->description !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.price') }}
                                        </th>
                                        <td>
                                            ${{ number_format($item->price, 2) }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
